<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Base {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('News_model', 'n');
	}

	public function index() {
		$cat = $this->n->getNewsCategory();
		$data['news'] = array();

		foreach($cat['data'] as $n => $v) {
			$data['news'][$v['name']] = array(
				'_id' => $v['_id'],
				'data' => $this->n->getNews($v['_id'])
			);
		}

		$data['title'] = 'News & Event all indrustrial design idea';
		$data['description'] = 'คลังรวมไอเดีย และเทรนด์ สำหรับการออกแบบอุตสาหกรรมทั้งหมด';
		$this->render('news', $data);
	}

	public function detail($news_category_id, $news_id) {
		$cat = $this->n->getNewsCategory();
		$data['r'] = $this->n->getNewsById($news_id, $news_category_id);
		$data['news'] = array();

		foreach($cat['data'] as $n => $v) {
			$data['news'][$v['name']] = array(
				'_id' => $v['_id'],
				'data' => $this->n->getNews($v['_id'])
			);
		}

		$this->render('news-detail', $data);
	}

	public function event() {
		$cat = $this->n->getNewsCategory();
		$data['news'] = array();

		foreach($cat['data'] as $n => $v) {
			$data['news'][$v['name']] = array(
				'_id' => $v['_id'],
				'data' => $this->n->getNews($v['_id'])
			);
		}

		$this->render('news-event', $data);
	}

	public function exhibition() {
		$cat = $this->n->getNewsCategory();
		$data['news'] = array();

		foreach($cat['data'] as $n => $v) {
			$data['news'][$v['name']] = array(
				'_id' => $v['_id'],
				'data' => $this->n->getNews($v['_id'])
			);
		}

		$this->render('news-exhibition', $data);
	}
	
	
}
