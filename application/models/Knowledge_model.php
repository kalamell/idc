<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Knowledge_model extends MY_Model {

	public function __construct() {
		parent::__construct();

		$this->_apiInstance =  new Swagger\Client\Api\KnowledgeApi(
			new GuzzleHttp\Client(),
			$this->_config
		);
	}

	public function searchKnowledge($text = '') {
		try {
		    $result = $this->_apiInstance->searchKnowledge($this->_platform, $text, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    echo 'Exception when calling KnowledgeApi->searchKnowledge: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}
	public function getKnowledgeCategory() {
		try {
		    $result = $this->_apiInstance->getKnowledgeCategory($this->_platform, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}

	public function getKnowledge($category_id) {
		try {
		    $result = $this->_apiInstance->getKnowledge($this->_platform, $category_id, null, null, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    echo 'Exception when calling KnowledgeApi->getKnowledgeById: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}

	public function getKnowledgeById($knowledge_category_id, $knowledge_id) {
		try {
		    $result = $this->_apiInstance->getKnowledgeById($this->_platform, $knowledge_category_id, $knowledge_id, null, null, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    echo 'Exception when calling KnowledgeApi->getKnowledgeById: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}
}