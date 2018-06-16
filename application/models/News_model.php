<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends MY_Model {

	public function __construct() {
		parent::__construct();

		$this->_apiInstance =  new Swagger\Client\Api\NewsApi(
			new GuzzleHttp\Client(),
			$this->_config
		);
	}

	public function getNewsCategory() {
		try {
		    $result = $this->_apiInstance->getNewsCategory($this->_platform, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}

	public function getNews($category_id) {
		try {
		    $result = $this->_apiInstance->getNews($this->_platform, $category_id, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
	}

	public function getNewsById($news_category_id, $news_id) {
        try {
		    $result = $this->_apiInstance->getNewsById($this->_platform, $news_category_id, $news_id, $this->_lang);
		    return $result;
		} catch (Exception $e) {
		    //echo 'Exception when calling KnowledgeApi->getKnowledgeCategory: ', $e->getMessage(), PHP_EOL;
		    return false;
		}
    }
}
