<?php
define('PUBPATH',str_replace(SELF,'',FCPATH)); // added
defined('BASEPATH') OR exit('No direct script access allowed');
class Peserta_Model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function getLomba($id)
	{
		return $this->db->where('id_lomba', $id)->get('lomba')->result();
	}

	public function login($user_real, $pwd){
		// var_dump($user_real);die;
		$data = $this->db
			->where('username_tim', $user_real)
			->get('tim');

		// var_dump($data->result());die;
		$match = password_verify($pwd , $data->row()->password_tim);
		$status = $data->row()->status_tim;

		if ($match) {

			if ($status==1) {
				$this->session->set_userdata([
					'nama_tim' =>  $data->row()->nama_team,
					'id_tim' => $data->row()->id_tim,
					'id_lomba' => $data->row()->id_lomba
				]);	
				$this->logLoginTim();
				return 1;
			}
			elseif ($status==null) {
				return 9;
			}
			elseif ($status=='0') {
				return 8;
			}
		}
		else{
			return 10;
		}
	}

	public function hapusTahap($id,$tim)
	{
		$data = $this->db->where('id_tahap', $id)->where('id_tim', $tim)->get('tahap_tim');
		$file = $data->row()->file;
		$filelink = PUBPATH.'public/kompetisi/userdata/tahap_tim/'.$file;
		if (unlink($filelink)) {
			echo "deleted file : " .$filelink;
			$this->db->where('id_tahap', $id)->where('id_tim', $tim)->delete('tahap_tim');
		}
		else{
			die();
		}
	}

	public function logLoginTim(){
		$ip = $this->getIP();
		$user = $this->session->userdata('id_tim');
		$query = $this->db
			->where('id_tim', $user)
			->get('tim');
		$id_panitia = $query->row()->id_tim;
		$data = array('ip_address' => $ip,
			'keterangan' => 'Login Tim',
			'waktu' => date("Y-m-d H:i:s"),
			'id_tim' => $id_panitia
		 );
		$this->db->insert('log_tim', $data);
	}

	public function getPostbyId($id)
	{
		// return $this->db->where('id_post', $id)->get('post')->result();
		return $this->db->get('post')->result();
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

	public function getPost($id)
	{
		// return $this->db->query("select * from post where id_lomba = ".$id." or id_lomba = 0  order by id_post DESC limit 5")->result();

		return $this->db->order_by("id_post", "DESC")
						->limit(5)
						->get('post')
						->result();
	}

	public function getPostAll($id)
	{
		// return $this->db->query("select * from post where id_lomba = ".$id." or id_lomba = 0  order by id_post DESC")->result();
		return $this->db->where("id_lomba", $id)
						->or_where("id_lomba", "0")
						->order_by("id_post", "DESC")
						->get('post')
						->result();
	}

	public function bayarUpload($img)
	{
		$this->db->set('url_buktipembayaran', $img);
		$this->db->where('id_tim', $this->session->userdata('id_tim'));
		$this->db->update('tim');
	}

	public function tahapUp($img,$id,$tim)
	{
		$data = array(
			'id_tahap' => $id,
			'id_tim' => $tim,
			'file' => $img
		 );
		$this->db->insert('tahap_tim', $data);
	}


	public function tahapUpd($img,$id,$tim)
	{
		// $data = array(
		// 	'id_tahap' => $id,
		// 	'id_tim' => $tim,
		// 	'file' => $img
		//  );
		$this->db->set('file', $img);
		$this->db->where('id_tahap', $id);
		$this->db->where('id_tim', $tim);
		$this->db->update('tahap_tim');
	}

	public function getTahap($id_lomba)
	{
		return $this->db->where('id_lomba', $id_lomba)->get('tahap_lomba')->result();
	}

	public function getTahapTim($id,$tim)
	{
		$d = $this->db->where('id_tahap', $id)->where('id_tim', $tim)->get('tahap_tim')->num_rows();
		// echo $d;
		if ($d==1) {
			$data = $this->db->where('id_tahap', $id)->where('id_tim', $tim)->get('tahap_tim')->row();
			// echo $data->status_tim
			if ($data->status_tim==1) {
				return 1;
			}
			elseif ($data->status_tim==null) {
				return 2;
			}
			elseif ($data->status_tim=='0'){
				return 0;
			}
		}
		else{
			return 2;
		}
	}

	public function getTahapTimfile($id,$tim)
	{
		$d = $this->db->where('id_tahap', $id)->where('id_tim',$tim)->get('tahap_tim')->num_rows();
		if ($d!=0) {
			$data = $this->db->where('id_tahap', $id)->where('id_tim', $tim)->get('tahap_tim')->row();
			if ($data->file=='') {
				return 0;
			}
			else{
				return 1;
			}
		}
		else{
			return 0;
		}
	}

	public function ambil_data_tim($id_team){
		return $this->db->where('id_tim',$id_team)->get('data_tim_ketua')->result();
	}
	public function ambil_info_tim_ketua($id_team){
		return $this->db->where('id_tim',$id_team)->get('tim')->result();
	}
	public function getDatafullTable($table){
		$data = $this->db->get($table)->result();
		return $data;
	}
	public function ambilDataLombaTim($id_lomba){

		$data = $this->db->query("SELECT * FROM lomba a INNER JOIN tim b on a.id_lomba = b.id_lomba where id_tim = ".$id_lomba." ")->result();

		return $data;
	}
	public function ambilDataAnggota($id_lomba){
		$data = $this->db->query("CALL tim_info(".$id_lomba.")")->result();
		return $data;
	}
}
?>