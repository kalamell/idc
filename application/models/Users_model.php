<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function gettoken($token) {
		$rs = $this->db->where('token', $token)->get('users');
		if ($rs->num_rows() > 0) {
			return $rs->row()->id;
		}

		return false;
	}

	public function getid($id) {
		$rs = $this->db->where('id', $id)->get('users');
		if ($rs->num_rows() > 0) {
			return $rs->row();
		}

		return false;
	}


	public function login($username, $password, $remember = null) {
		$rs = $this->db->where([
			'username' => $username,
			'password' => do_hash($password)
		])->get('users');
		if ($rs->num_rows() > 0) {
			$this->session->set_userdata('id', $rs->row()->id);

			if ($remember) {
				$cookie = [
			        'name'   => 'acii',
			        'value'  => $rs->row()->token,
			        'expire' => '86500',
			        'path'   => '/',
			        'prefix' => 'sp_',
				];
				$this->input->set_cookie($cookie);
			}
			return true;
		}
		return false;
	}
}
