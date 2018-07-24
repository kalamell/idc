<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Supplier_model', 'sp');
	}

	public function index() {
		$this->data->rs = $this->sp->getSupplierCategory();

		$this->load->view('find-supplier', $this->data);
	}

	public function data_list($category_id) {
		$this->data->suppliers = $this->sp->getSupplierByCategory($category_id);


		$this->load->view('find-supplier-list', $this->data);
	}

	public function get_product_id($category_id, $supplier_id) {
		$this->data->rs = $this->sp->getSupplierById($category_id, $supplier_id);

		$this->load->view('supplier-detail', $this->data);
	}
	
}
