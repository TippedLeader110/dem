<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Repository extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('RepoModel');
	}

	public function index()
	{
		$this->load->view('repo/layout/main');
	}

	public function mainPage()
	{
		$res = $this->db->get('repo');
		$row = $res->num_rows();
		if ($row==0) {
			$this->load->view('repo/index/404');
		}
		else{
			$this->load->view('repo/index/main', $data);
		}
	}

	public function login()
	{	
		$this->load->view('repo/login');	
	}

	public function signup(){
		$this->load->view('repo/daftar');		
	}

	public function do_signup(){
		$fullname = $this->input->post('fullname');
		$password = $this->input->post('password');
		$email = $this->input->post('email');

		$data = array(
			'full_name' => $fullname,
			'email' => $email,
			'password' => password_hash($password, PASSWORD_DEFAULT)
			 );

		if ($this->RepoModel->daftar($data)==TRUE) {
			echo "1";
		}
		else{
			echo "0";
		}
	}

	public function do_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if ($this->RepoModel->login($email,$password)==TRUE) {
			if ($this->session->status=='a') {
				echo "a";
			}
			elseif ($this->session->status=='p') {
				echo "p";
			}
			else{
				echo "n";
			}
		}
		else{
			echo "0";
		}
	}


	public function profile(){
		$this->load->view('repo/index/profile');
		// $this->load->view('repo/index/infoProfile');
	}

	public function profile_fileupload(){
		$data['kat_nama'] = $this->RepoModel->getAll('repo_kategori');
		$this->load->view('repo/index/upload', $data);
	}

}