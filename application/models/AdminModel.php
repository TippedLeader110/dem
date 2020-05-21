<?php
define('PUBPATH',str_replace(SELF,'',FCPATH)); // added
defined('BASEPATH') OR exit('No direct script access allowed');

class adminModel extends CI_Model {

	function __construct(){
		parent::__construct();


	}

	function infoTim($id){
		return $query = $this->db->query('CALL tim_info('.$id.')')->result();
	}

	public function doLogin($user_real, $password)
	{
		$cari = $this->db->where('username',$user_real)->get('a_users');
		// var_dump($user_real);
		$match = password_verify($password , $cari->row()->password);
		// echo $cari->num_rows();
		if ($match) {
			if ($cari->num_rows()!=0) {
				$sesi = array(
				'email' => $cari->row()->email,
				'login' => 'true',
				'full_name' => $cari->row()->nama,
				'id_u' => $cari->row()->id
			);
			$this->session->set_userdata($sesi);
			$this->logLoginAdmin($user_real);
			return true;
			}
		}
		else{
			return false;
		}


		// $user = $this->db
		// 	->where('username', $user_real)
		// 	->get('a_users');
		// // var_dump($user_real);die;
		// // var_dump($user->result());die;
		// $match = password_verify($pwd , $user->row()->password);
		// $id = $user->row()->id_user;
		// $nama = $user->row()->nama;
		// $user = $user->row()->username;
		// if ($match) {
		// 		$this->session->set_userdata([
		// 			'id' =>  $id,
		// 			'status' => 'login-admin',
		// 			'name' => $nama
		// 		]);
		// 		$this->logLoginAdmin();
		// 		return 1;
		// }
		// else
		// {
		// 	return 0;
		// }
	}

	public function logLoginAdmin($u){
		$ip = $this->getIP();
		$user = $u;
		$query = $this->db
			->where('username', $user)
			->get('a_users');
		$idU = $query->row()->id;
		$data = array('ip' => $ip,
			'status' => 'Login Admin',
			'waktu' => date("Y-m-d H:i:s"),
			'id_admin' => $idU
		 );
		$this->db->insert('log_admin', $data);
	}

	public function getIP(){
		$ip = getenv('HTTP_CLIENT_IP')?:
		getenv('HTTP_X_FORWARDED_FOR')?:
		getenv('HTTP_X_FORWARDED')?:
		getenv('HTTP_FORWARDED_FOR')?:
		getenv('HTTP_FORWARDED')?:
		getenv('REMOTE_ADDR');
		return $ip;
	}

	public function kompetisi_FlashLOGO($data)
	{
		$this->session->set_userdata('logo', $data);
	}

	public function kompetisi_FlashRULE($data)
	{
		$this->session->set_userdata('rule', $data);
	}

	public function kompetisiDoTambah($deskripsi, $nama)
	{	
		$rule = $this->session->userdata('rule');
		$logo = $this->session->userdata('logo');
		$data = array('deskripsi' => $deskripsi,
			'nama_lomba' => $nama,
			'rule' => $rule,
			'url_logo' => $logo
		);
		$this->db->insert('lomba', $data);
		$this->session->unset_userdata('rule');
		$this->session->unset_userdata('logo');
	}

	public function kompetisiDoEdit($deskripsi, $nama,$id)
	{	
		$rule = $this->session->userdata('rule');
		$logo = $this->session->userdata('logo');
		$data = array('deskripsi' => $deskripsi,
			'nama_lomba' => $nama,
			'rule' => $rule,
			'url_logo' => $logo
		);
		$this->db->where('id_lomba', $id)->update('lomba', $data);
		$this->session->unset_userdata('rule');
		$this->session->unset_userdata('logo');
	}

	public function tambahPanitia($username,$password,$kompetisi)
	{	
		$row = $this->db->where('username',$username)->get('user')->num_rows();

		if ($row==0) {
			$password = password_hash($password, PASSWORD_DEFAULT);
		$data = array('username' => $username,
			'password' => $password,
			'id_lomba' => $kompetisi
		);
		$this->db->insert('user', $data);
		echo "1";
		}
		else{
			echo '2';
		}
	}

	public function getDatafullTable($table){
		$data = $this->db->get($table)->result();
		return $data;
	}

	public function tambahPost($judul,$isi,$id,$kategori)
	{
		$data = array('judul' => $judul ,
		 			'isi' => $isi ,
		 			'author' => $id,
		 			'waktu' => date("Y-m-d H:i:s"),
		 			'kategori' => $kategori
		 			);
		$this->db->insert('post',$data);
		return true;
	}

	public function updatePost($judul,$isi,$id,$oldid,$kat)
	{
		$this->db->set('judul', $judul);
		$this->db->set('isi', $isi);
		$this->db->set('kategori', $kat);
		$this->db->set('author', $id);
		$this->db->set('waktu', date("Y-m-d H:i:s"));
		// $this->db->set('id_lomba', $id);
		$this->db->where('id_post',$oldid)->update('post');
		return true;
	}

	public function deleteDatabyID($id,$kolomID,$table){
		if ($this->db->where($kolomID , $id)->delete($table)) {
			return true;
		}
		else{
			return false;
		}
	}

	public function getSingkat()
	{
		$query = $this->db->get('jumlah_all');
        return $query->result();
	}

	public function getSingkat2()
	{
		$query = $this->db->get('jumlah_tim_lomba');
        return $query->result();
	}

	public function getDatabyID($id,$kolomID,$table){
		return $this->db->where($kolomID , $id)->get($table)->result();
	}

	public function deleteFile($id){
		$data = $this->db->where('id_lomba', $id)->get('lomba');
		$logo = $data->row()->url_logo;
		$rule = $data->row()->rule;
		$logolink = PUBPATH.'public/kompetisi/logo/'.$logo;
		$rulelink = PUBPATH.'public/kompetisi/rule/'.$rule;
		if (unlink($logolink)) {
			echo "deleted file : " .$logo;
		}
		if (unlink($rulelink)) {
			echo "deleted file L " .$rule;
			return 1;
		}
	}

	public function sumPanitia()
	{
		return $this->db->get('user_lomba')->num_rows();
	}

	public function sumPanitiacari($cari)
	{
		return $this->db->like('username', $cari)->get('user_lomba')->num_rows();
	}

	public function getPanitia($number,$offset)
	{
		return $query = $this->db->get('user_lomba',$number,$offset)->result();		
	}

	public function getPanitiacari($number,$offset,$cari)
	{
		return $query = $this->db->like('username', $cari)->get('user_lomba',$number,$offset)->result();		
	}

}
?>