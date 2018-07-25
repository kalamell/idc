<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Knowledge extends Base {
	
	public function __construct() {

		parent::__construct();
		$this->load->model('Knowledge_model', 'kl');
	}

	public function index() {

		$data['knowledge'] = $this->kl->searchKnowledge('s');
		$category = $this->kl->getKnowledgeCategory();
		$data['knowledgecategory'] = [];
		foreach($category['data'] as $k => $v) {
			if ($v['name'] != 'Knowledge') {
				$knowledge = $this->kl->getKnowledge($v['_id']);
				$data['knowledgecategory'][$v['name']] = $knowledge['data'];
			}
		}

		$this->render('knowledge', $data);
	}

	public function detail($cat_id, $id) {

		$data['rs'] = $this->kl->getKnowledgeById($cat_id, $id);
		$category = $this->kl->getKnowledgeCategory();
		$data['knowledgecategory'] = [];
		foreach($category['data'] as $k => $v) {
			if ($v['name'] != 'Knowledge') {
				$knowledge = $this->kl->getKnowledge($v['_id']);
				$data['knowledgecategory'][$v['name']] = $knowledge['data'];
			}
		}

		$this->render('knowledge-detail', $data);
	}

	public function trend() {

		$category = $this->kl->getKnowledgeCategory();
		$data['knowledgecategory'] = [];
		foreach($category['data'] as $k => $v) {
			$knowledge = $this->kl->getKnowledge($v['_id']);
			$data['knowledgecategory'][$v['name']] = $knowledge['data'];
		}

		$this->render('knowledge-trend', $data);
	}

	public function video() {

		$category = $this->kl->getKnowledgeCategory();
		$data['knowledgecategory'] = [];
		foreach($category['data'] as $k => $v) {
			$knowledge = $this->kl->getKnowledge($v['_id']);
			$data['knowledgecategory'][$v['name']] = $knowledge['data'];
		}
		
		$this->render('knowledge-video', $data);	
	}

}
