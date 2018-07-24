<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct() {

		parent::__construct();
		$this->load->helper('security');
		//echo do_hash('_id1');
	}

	public function index() {

		$this->load->view('auth/login');
	}

	public function logout() {

		$this->load->helper('cookie');
		$this->session->set_userdata('id', '');
		delete_cookie('sp_acii');
		redirect('');
	}
	public function login() {

		$this->load->view('auth/login');
	}

	public function register() {

		$this->load->view('auth/register');
	}

	public function do_login() {

		$config = [
			[
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required',
				'errors' => [
					'required' => 'กรุณาระบุชื่อผู้ใช้งาน'
				]
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required',
				'errors' => [
					'required' => 'กรุณาระบุรหัสผ่าน'
				]
			]
		];
		$this->form_validation->set_rules($config);
		$ar = ['result' => false];
		if ($this->form_validation->run()) {
			$check = $this->users->login($this->input->post('username'), $this->input->post('password'), $this->input->post('remember'));
			if (!$this->input->is_ajax_request()) {
				if ($check) {
					redirect('dashboard');
				} else {
					$this->session->set_flashdata('error', 'ขออภัย ไม่พบผู้ใช้งาน หรือรหัสผ่านไม่ถูกต้อง');
					redirect('auth/login');
				}
			} else {
				if ($check) {
					$ar['result'] = true;
				} else {
					$ar['msg'] = 'ขออภัย ไม่พบผู้ใช้งาน หรือรหัสผ่านไม่ถูกต้อง';
				}
			}
		} else {
			if (!$this->input->is_ajax_request()) {
				$this->session->set_flashdata('error', validation_errors());
				redirect('auth/login');
			} else {
				$ar['result'] = false;
				$ar['msg'] = validation_errors();
			}
		}

		echo json_encode($ar);		
	}

}
