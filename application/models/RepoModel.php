<?php
define('PUBPATH',str_replace(SELF,'',FCPATH)); // added
defined('BASEPATH') OR exit('No direct script access allowed');
class RepoModel extends CI_Model {

	public function login($username, $password){
		$cari = $this->db->where('username',$username)->where('password', $username)->get('users');
		if ($cari->num_rows()==0) {
			$sesi = array(
				'username' => $username,
				'login' => TRUE,
				'full_name' => $cari->row()->full_name,
				'id_u' => $cari->row()->id_user,
				'status' => $cari->row()->status
			);
			if ($cari->row()->status=='p') {
				$status='Premium user login';
			}
			elseif ($cari->row()->status=='a') {
				$status='Admin login';
			}
			else{
				$status='Normal user login';

			}
			$this->session->set_userdata('$sesi');
			$this->RepoModel->logLogin($this->session->id_u, $status);
			return true;
		}
		else{
			return false;
		}
	}

	public function logLogin($id, $status)
	{
		$ip = $this->getIP();
		$data = array(
			'ip' => $ip,
			'id_user' => $id,
			'waktu' => date("Y-m-d H:i:s"),
			'status' => $status
		 );
		$this->db->insert('log_users',$data);
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
}