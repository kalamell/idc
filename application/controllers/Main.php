<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Base {
	
	public function __construct() {

		parent::__construct();
		$this->load->model('Knowledge_model', 'knowledge');
		$this->load->model('Designer_model', 'designer');
		$this->load->model('Producer_model', 'producer');
		$this->load->model('Supplier_model', 'supplier');

		print_r($this->session->userdata());
	}

	public function index() {
		
		$data['knowledge'] = $this->knowledge->searchKnowledge('s');
		$data['designer'] = $this->designer->getDesignerCategory();
		$data['producer'] = $this->producer->getProducerCategory();
		$data['supplier'] = $this->supplier->getSupplierCategory();

		$this->render('index', $data);
	}

	public function policy() {
		$this->render('policy');
	}

}
