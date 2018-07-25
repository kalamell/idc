<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Base {
	
	public function __construct() {

		parent::__construct();
	}

	public function index() {

		$this->render('profile');
	}

	public function pageme() {
		
		$this->render('profile-pageme');
	}

	
}
