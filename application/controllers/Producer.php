<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producer extends CI_Controller {
	
	public function __construct() {
		parent::__construct();

		$this->load->model('Producer_model', 'pd');

	}

	public function index() {
		$this->data->rs = $this->pd->getProducerCategory();

		$this->load->view('find-producer', $this->data);

	}

	public function data_list($category_id) {
		$this->data->rs = $this->pd->getProducerByCategoryAll($category_id);

		$this->load->view('find-producer-list', $this->data);

	}
	
	public function get_supplier_id($category_id, $product_id) {
		$this->data->rs = $this->pd->getProducerById($category_id, $product_id);

		$this->load->view('producer-detail', $this->data);
	}
}
