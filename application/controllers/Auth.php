<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct() {

		parent::__construct();
		$this->load->helper('security');
		$this->load->library('facebook');
		$this->load->model('Auth_model', 'ad');
	}

	public function index() {

		if ( ! $this->facebook->is_authenticated()) {
			?>
			<a href="<?php echo $this->facebook->login_url(); ?>">Login</a>
			<?php 
		} else {

		}

		
	}

	public function do_fb_login() {
		$data['user'] = array();
		
		if ($this->facebook->is_authenticated())
		{
			$user = $this->facebook->request('get', '/me?fields=id,name,email');
			if (!isset($user['error']))
			{
				
				/*
				$data = array(
					'type' => 'facebook',
					'username' => '2008864212478754',
					'password' => 'EAALLe7otlOQBAJrgscJDizUgTj2Ln4AkzUrX8J4xBwvZAeh0XVEx2ai4qvZBGiDr7vIZBajUc9XZBZAOX04yWNkeT7rJJESZC2pxaUqHgkPDZA2QPWotbVVAMw8ODZAwLyXETA9sZB6tPWrnLpV2QlQZAs8gZAoau8xCyldHF0MZBZBU7JwZDZD',
				);
				$res = $this->ad->login($data);
				*/

				//print_r($res);
				

				$this->session->set_userdata(array(
					'member_id' => $user['id'],
					'email' => $user['email'],
					'token' => $this->facebook->is_authenticated(),
					'membe_type' => 'fb',
					'name' => $user['name'],
				));
			} 
			redirect('');
		} else {
			redirect($this->facebook->login_url());
		}

		
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

	public function logout_fb() {
		$this->facebook->destroy_session();
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
