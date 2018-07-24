<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends MY_Model {

	public function __construct() {
		parent::__construct();

		$this->_apiInstance =  new Swagger\Client\Api\SupplierApi(
			new GuzzleHttp\Client(),
			$this->_config
		);
	}
	
	public function getSupplierCategory() {
		try {
		    $result = $this->_apiInstance->getSupplierCategory($this->_platform, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}

	public function getSupplierByCategory($category_id) {
		try {
		    $result = $this->_apiInstance->getSupplierByCategory($this->_platform, $category_id, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}	
	}

	public function getSupplierById($category_id, $sup_id) {
		try {
		    $result = $this->_apiInstance->getSupplierById($this->_platform, $category_id, $sup_id, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}	
	}
}