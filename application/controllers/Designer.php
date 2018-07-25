<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer extends Base {
	
	public function __construct() {

		parent::__construct();
		$this->load->model('Designer_model', 'ds');
	}

	public function index() {

		$data['rs'] = $this->ds->getDesignerCategory();

		$this->render('find-designer', $data);
	}

	public function data_list($category_id) {

		$data['categories'] = $this->ds->getDesignerCategory();
		$data['rs'] = $this->ds->getDesignerByCategory($category_id);

		$this->render('find-designer-list', $data);
	}

	public function profile($category_id, $profile_id) {

		$data['r'] = $this->ds->getDesignerById($category_id, $profile_id);
		
		$this->render('profile', $data);
	}


	
}
