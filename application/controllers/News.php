<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('News_model', 'n');
	}

	public function index() {
		$cat = $this->n->getNewsCategory();
		$this->data->news = array();

		foreach($cat['data'] as $n => $v) {
			$this->data->news[$v['name']] = array(
				'_id' => $v['_id'],
				'data' => $this->n->getNews($v['_id'])
			);
		}

		$this->load->view('news', $this->data);
	}

	public function detail($news_category_id, $news_id) {
		$cat = $this->n->getNewsCategory();
		$this->data->r = $this->n->getNewsById($news_id, $news_category_id);
		$this->data->news = array();

		foreach($cat['data'] as $n => $v) {
			$this->data->news[$v['name']] = array(
				'_id' => $v['_id'],
				'data' => $this->n->getNews($v['_id'])
			);
		}

		$this->load->view('news-detail', $this->data);
	}

	public function event() {
		$cat = $this->n->getNewsCategory();
		$this->data->news = array();

		foreach($cat['data'] as $n => $v) {
			$this->data->news[$v['name']] = array(
				'_id' => $v['_id'],
				'data' => $this->n->getNews($v['_id'])
			);
		}

		$this->load->view('news-event', $this->data);
	}

	public function exhibition() {
		$cat = $this->n->getNewsCategory();
		$this->data->news = array();

		foreach($cat['data'] as $n => $v) {
			$this->data->news[$v['name']] = array(
				'_id' => $v['_id'],
				'data' => $this->n->getNews($v['_id'])
			);
		}

		$this->load->view('news-exhibition', $this->data);
	}
	
	
}
