<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Base {
	
	public function __construct() {

		parent::__construct();
	}

	public function index() {
		$data['title'] = 'Contact';
		$data['description'] = 'กองพัฒนาอุตสาหกรรมสร้างสรรค์ (กส.กสอ.) ซอยตรีมิตร ถนนพระราม 4 เขตคลองเตย กรุงเทพฯ 10110';
		$this->render('contact', $data);
	}

	

	
}
