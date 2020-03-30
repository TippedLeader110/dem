<?php
date_default_timezone_set('Asia/Jakarta');
class Peserta extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Peserta_Model');
		$this->load->library('session');
	}
	/**
	 * Index Page for this controller
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
	public function login_protocol(){
		if(is_null($this->session->userdata('id_tim'))){
			redirect(base_url('Peserta/signin'));
		}
	}

	public function signin(){
		if($this->session->userdata('id_tim') == NULL){
			$this->load->view("ITFest/signin");
		} else{
			redirect("Peserta");
		}
	}

	public function login_page(){
		$this->load->view('peserta/login');
	}

	public function login(){
		$username = $this->input->post('user');
		$password = $this->input->post('pwd');
		$success = $this->Peserta_Model->login($username, $password);
		// var_dump($success);die;
		if (isset($success)) {
			if ($success==1)
				echo 1;
			else if ($success==9)
				echo "blm";
			else if($success==8)
				echo "tolak";
		}
		else{
			echo "fail";
		}
		
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Peserta/signin'));
	}

	public function index(){
		$this->login_protocol();
		$id = $this->session->userdata('id_lomba');
		$id_lomba = $this->session->userdata('id_lomba');
		$dataL = $this->Peserta_Model->getLomba($id_lomba);		
		$data = array(
			'title' => 'Dashboard',
			'dataLomba' => $dataL
		);

		$this->load->view('peserta/index',$data);
	}
	public function tahapPeserta(){
		
		
		// var_dump($tahapPeserta);
		$data = [
			'tahapPeserta' => $tahapPeserta
		];
		$this->load->view('peserta/page/progres', $data);
	}

	public function notifikasi(){
		
		$notifikasi = $this->Peserta_Model->getDatafullTable('tahap_tim');
		// var_dump($tahapPeserta);
		$data = [
			'notifikasi' => $notifikasi
		];
		$this->load->view('peserta/page/notifikasi', $data);
	}

	public function upload_file_kompetisi(){
		$this->input->post('id_kompetisi');
	}

	public function kontenHome(){

		$id_team = $this->session->userdata('id_tim');
		$id_lomba = $this->session->userdata('id_lomba');
		// var_dump($id_lomba);die;
		$ro = $this->db->where('id_tim', $id_team)->where('status_tim', 0)->get('tahap_tim')->num_rows();
		$dataL = $this->Peserta_Model->getLomba($id_lomba);		
		$post = $this->Peserta_Model->getPost($id_lomba);		
		// var_dump($dataL);die;	
		$value = $this->Peserta_Model->ambil_data_tim($id_team);
		$data = [
			'dataLomba' => $dataL,
			'dataTim' => $value,
			'ro' => $ro
		];
		$this->load->view('peserta/page/home', $data);
	}

	public function kontentPost()
	{
		$id_lomba = $this->session->userdata('id_lomba');
		// echo $id_lomba;
		$data['post'] = $this->Peserta_Model->getPost($id_lomba);
		$this->load->view('peserta/page/postview', $data);
	}

	public function kontentPostAll()
	{
		$id_lomba = $this->session->userdata('id_lomba');
		$data['post'] = $this->Peserta_Model->getPostAll($id_lomba);
		$this->load->view('peserta/page/postview', $data);
	}

	public function ambil_data_timlomba(){

	}
	public function kontenProgres(){
		$this->load->view('peserta/page/progres');
	}
	public function upload_bukti_pembayaran(){
		$this->load->view('peserta/page/upload_bukti_pembayaran');
	}
	public function upload_berkas(){
		$this->load->view('peserta/page/upload_berkas');
	}
	public function informasiTim(){
		$id_team = $this->session->userdata('id_tim');
		$id_lomba = $this->session->userdata('id_lomba');
		// var_dump($id_lomba);die;
		$dataL = $this->Peserta_Model->getLomba($id_lomba);		
		$value = $this->Peserta_Model->ambil_data_tim($id_team);
		$value2 = $this->Peserta_Model->ambilDataAnggota($id_team);
		// $value2 = $this->Peserta_Model->getDatafullTable('tim');

		$data = [
			'dataTim' => $value,
			'dataAnggota' => $value2,
			'dataLomba' => $dataL
		];


		$this->load->view('peserta/page/infoTim', $data);
	}
	public function tahapKompetisi(){
		$id_team = $this->session->userdata('id_tim');
		$ro = $this->db->where('id_tim', $id_team)->where('status_tim', 0)->get('tahap_tim')->num_rows();
		
			$rule = $this->db->where('id_tim', $id_team)->get('tim')->row()->status_pembayaran;
		if ($rule!='Active') {
			redirect(base_url('Peserta'));
		}
		else{
			$id_lomba = $this->session->userdata('id_lomba');
			$tahap = $this->Peserta_Model->getTahap($id_lomba);
			// $tahapTim = $this->Peserta_Model->getTahapTim($id_team);

			$data = [
				'tahap' => $tahap
			];
			$this->session->set_userdata('valid', 1);
			$this->load->view('peserta/page/tahapKompetisi',$data);
		}
		
	}

	public function detilTahap()	
	{
		$id_team = $this->session->userdata('id_tim');
		$tahap['id'] = $id_team;
		$lel = $this->uri->segment(3);
		$tahap['status'] = $this->Peserta_Model->getTahapTim($lel,$id_team);
		$tahap['file'] = $this->Peserta_Model->getTahapTimfile($lel,$id_team);
		$cek = $this->db->where('id_tim',$id_team)->where('id_tahap', $lel)->get('tahap_tim');
		if ($cek->num_rows()!=0) {
			$tahap['url'] = $cek->row()->file;
		}
		$tahap['id_tahap'] = $lel;
		$tahap['bef'] = $this->input->get('data');

		$this->load->view('peserta/page/subfolder/tahap',$tahap);
	}

	public function getTahap()
	{
		$id = $this->input->post('tahap');
		$data = $this->db->where('id_tim', $this->session->userdata('id_tim'))->where('id_tahap', $id)->get('tahap_tim');
		$row = $data->num_rows();
		if ($row!=0) {
			$val = $data->row()->status_tim;
			if ($val==null) {
				echo 0;
			}
			elseif ($val=='0') {
				echo 0;
			}
			elseif ($val==1) {
				echo 1;
			}else{
				echo 1;
			}
		}
		elseif ($row==0) {
			echo 0;
		}
	}

	public function uploadBukti()
	{
		$this->login_protocol();
		$config['upload_path']="./public/kompetisi/userdata/buktipembayaran/"; //path folder file upload
        $config['allowed_types']='*'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
        $this->load->library('upload',$config,'bayarup'); //call library upload 
        $this->bayarup->initialize($config);
        // var_dump("done1");
        // echo $this->bayarup->display_errors(); 
        if($this->bayarup->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->bayarup->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name'];
            $this->Peserta_Model->bayarUpload($image); //simpan data sementara
            echo "1";
        }
        else
        echo $this->bayarup->display_errors();
	}

	public function uploadTahap()
	{
		$this->login_protocol();
		$config['upload_path']="./public/kompetisi/userdata/tahap_tim/"; //path folder file upload
        $config['allowed_types']='*';
        $config['overwrite']        = true;
        $new_name                   = time().'_'.$_FILES["file"]['name']; //type file yang boleh di upload
        $config['file_name']        = $new_name;
        // $config['encrypt_name'] = TRUE; //enkripsi file name upload
        $this->load->library('upload',$config,'tahapUp'); //call library upload 
        $this->tahapUp->initialize($config);
        // var_dump("done1");
        // echo $this->bayarup->display_errors(); 
        if($this->tahapUp->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->tahapUp->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name'];
            $id = $this->input->post('id');
            $tim = $this->session->userdata('id_tim');
            $this->Peserta_Model->tahapUp($image,$id,$tim); //simpan data sementara
            echo "1";
        }
        else
        echo $this->tahapUp->display_errors();
	}

	public function post()
	{
		$uri = $this->uri->segment(3);
		$data['post'] = $this->Peserta_Model->getPostbyId($uri);
		$this->load->view('peserta/page/post',$data);
	}

	public function gantiTahap()
	{
		$this->login_protocol();
		$config['upload_path']="./public/kompetisi/userdata/tahap_tim/"; //path folder file upload
        $config['allowed_types']='*'; //type file yang boleh di upload
        $config['overwrite']        = true;
        $new_name                   = time().'_'.$_FILES["file"]['name']; //type file yang boleh di upload
        $config['file_name']        = $new_name;//enkripsi file name upload
        $this->load->library('upload',$config,'tahapUp'); //call library upload 
        $this->tahapUp->initialize($config);
        // var_dump("done1");
        // echo $this->bayarup->display_errors(); 
        $id = $this->input->post('id');
        $tim = $this->session->userdata('id_tim');
        // if($this->tahapUp->do_upload("file") && $this->Peserta_Model->hapusTahap($id,$tim)){ //upload file
        if($this->tahapUp->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->tahapUp->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name'];
            
            $this->Peserta_Model->tahapUpd($image,$id,$tim);
            // $this->Peserta_Model->tahapUp($image,$id,$tim); //simpan data sementara
            echo "1";
        }
        else
        echo $this->tahapUp->display_errors();
	}


}
?>