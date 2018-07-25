<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producer extends Base {
	
	public function __construct() {
		parent::__construct();

		$this->load->model('Producer_model', 'pd');

	}

	public function index() {
		$data['rs'] = $this->pd->getProducerCategory();
		$data['title'] = 'Find Producer Indrustrial designer producer';
		$data['description'] = 'คลังรวมผู้ผลิต สินค้า วัตถุดิบ สำหรับการออกแบบอุตสาหกรรมทั้งหมด';

		$this->render('find-producer', $data);

	}

	public function data_list($category_id) {
		$data['rs'] = $this->pd->getProducerByCategoryAll($category_id);

		$this->render('find-producer-list', $data);

	}
	
	public function get_supplier_id($category_id, $product_id) {
		$data['rs'] = $this->pd->getProducerById($category_id, $product_id);

		$this->render('producer-detail', $data);
	}
}
