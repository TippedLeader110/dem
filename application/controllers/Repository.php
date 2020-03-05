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

	public function do_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($this->RepoModel->login($username,$password)==TRUE) {
			if ($this->session->status=='a') {
				echo "a";
			}
			elseif ($this->session->status=='a') {
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

}