<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counseling extends Base {
	
	public function __construct() {

		parent::__construct();
	}

	public function index() {
		
		$data['title'] = 'Service';
		$this->render('counseling', $data);
	}

	public function do_submit() {
		$this->load->library('form_validation');
		$config = array(
			array(
				'field' => 'fullname',
				'label' => 'fullname',
				'rules' => 'required',
			),
			array(
				'field' => 'email',
				'label' => 'email',
				'rules' => 'required|valid_email',
			),
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			$this->load->library('email');

			$this->load->library('email');

			$this->email->from('noreply@thai-idc.com', 'noreply@thai-idc.com');
			//$this->email->to('thaiidc.dcr@gmail.com');
			$this->email->to('sankhumpha84@gmail.com');
			$this->email->subject('ขอคำปรึกษา จาก Thai-idc.com');
			$data = array(
				'fullname' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),
				'line' => $this->input->post('line'),
				'subject' => $this->input->post('subject'),
			);
			$html = $this->load->view('email/counseling', $data, false);

			$this->email->send();

			$this->session->set_flashdata('send', 1);
		}

		redirect('counseling');
	}

	

	
}
