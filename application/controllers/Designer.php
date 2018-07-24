<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer extends CI_Controller {
	
	public function __construct() {

		parent::__construct();
		$this->load->model('Designer_model', 'ds');
	}

	public function index() {

		$this->data->rs = $this->ds->getDesignerCategory();

		$this->load->view('find-designer', $this->data);
	}

	public function data_list($category_id) {

		$this->data->categories = $this->ds->getDesignerCategory();
		$this->data->rs = $this->ds->getDesignerByCategory($category_id);

		$this->load->view('find-designer-list', $this->data);
	}

	public function profile($category_id, $profile_id) {

		$this->data->r = $this->ds->getDesignerById($category_id, $profile_id);
		
		$this->load->view('profile', $this->data);
	}


	
}
