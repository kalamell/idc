<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
	private $id;
	public function __construct()
	{
		parent::__construct();

		if ($this->input->cookie('sp_acii')) {
			$rs = $this->users->gettoken($this->input->cookie('sp_acii'));
			if ($rs) {
				$this->session->set_userdata('id', $rs);
			}
			$this->id = $rs;
		} else {
			if (!$this->session->userdata('id')) redirect('auth');
			$this->id = $this->session->userdata('id');
		}
	}

	protected function render($view, $data = [])
	{
		$this->load->view($view, $data);
	}
}
