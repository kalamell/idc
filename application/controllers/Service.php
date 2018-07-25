<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends Base {
	
	public function __construct() {

		parent::__construct();
	}

	public function index() {
		
		$this->render('contact');
	}
}
