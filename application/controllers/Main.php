<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Base {
	
	public function __construct() {

		parent::__construct();
		$this->load->model('Knowledge_model', 'knowledge');
		$this->load->model('Designer_model', 'designer');
		$this->load->model('Producer_model', 'producer');
		$this->load->model('Supplier_model', 'supplier');
	}

	public function index() {
		
		$this->data->knowledge = $this->knowledge->searchKnowledge('s');
		$this->data->designer = $this->designer->getDesignerCategory();
		$this->data->producer = $this->producer->getProducerCategory();
		$this->data->supplier = $this->supplier->getSupplierCategory();

		$this->load->view('index', $this->data);
	}

	public function policy() {
		$this->render('policy');
	}

}
