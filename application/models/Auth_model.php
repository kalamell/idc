<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends MY_Model {

	public function __construct() {
		parent::__construct();

		$this->_apiInstance =  new Swagger\Client\Api\UserApi(
			new GuzzleHttp\Client(),
			$this->_config
		);
	}

	public function login($data) {
		print_r($data);
		try {
		    $result = $this->_apiInstance->loginUser($this->_platform, $data['type'], $data['username'], $data['password'], $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    echo 'Exception when calling : ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}

}