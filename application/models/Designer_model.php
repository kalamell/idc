<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer_model extends MY_Model {

	public function __construct() {
		parent::__construct();

		$this->_apiInstance =  new Swagger\Client\Api\DesignerApi(
			new GuzzleHttp\Client(),
			$this->_config
		);
	}

	
	public function getDesignerCategory() {
		try {
		    $result = $this->_apiInstance->getDesignerCategory($this->_platform, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}

	public function getDesignerByCategory($category_id) {
		try {
		    $result = $this->_apiInstance->getDesignerByCategory($this->_platform, $category_id, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}

	public function getDesignerByCategoryAll($category_id) {
		try {
			$result = $this->_apiInstance->getDesignerByCategoryAll($this->_platform, $category_id, $this->_lang);
			
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}

	
	public function getDesignerById($category_id, $designer_id) {
		try {
		    $result = $this->_apiInstance->getDesignerById($this->_platform, $category_id, $designer_id, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}
}