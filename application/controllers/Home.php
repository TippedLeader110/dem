<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()	{
		$data = [
			'page'=>'main/page/home',
			'title' => 'DEM'
		];
		$this->load->view('main/layout/index', $data);
	}

	public function mainpage(){
		$this->load->view('main/page/main');
	}
}
