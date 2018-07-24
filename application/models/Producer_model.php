<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producer_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		
		$this->_apiInstance =  new Swagger\Client\Api\ProducerApi(
			new GuzzleHttp\Client(),
			$this->_config
		);
	}
	
	public function getProducerCategory() {
		try {
		    $result = $this->_apiInstance->getProducerCategory($this->_platform, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}

	public function getProducerByCategory($category_id) {
		try {
		    $result = $this->_apiInstance->getProducerByCategory($this->_platform, $category_id, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}

	public function getProducerByCategoryAll($category_id) {
		try {
		    $result = $this->_apiInstance->getProducerByCategoryAll($this->_platform, $category_id, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}

	}

	public function getProducerById($category_id, $product_id) {
		try {
		    $result = $this->_apiInstance->getProducerById($this->_platform, $category_id, $product_id, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}
}