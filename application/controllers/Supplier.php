<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends Base {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Supplier_model', 'sp');
	}

	public function index() {
		$data['rs'] = $this->sp->getSupplierCategory();

		$this->render('find-supplier', $data);
	}

	public function data_list($category_id) {
		$data['suppliers'] = $this->sp->getSupplierByCategory($category_id);


		$this->render('find-supplier-list', $data);
	}

	public function get_product_id($category_id, $supplier_id) {
		$data['rs'] = $this->sp->getSupplierById($category_id, $supplier_id);

		$this->render('supplier-detail', $data);
	}
	
}
