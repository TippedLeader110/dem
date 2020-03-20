<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Regis extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='main/page/register';
		$this->load->view('layout/main', $data);
	}

}
?>