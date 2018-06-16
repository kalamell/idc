<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Knowledge extends CI_Controller {
	
	public function __construct() {

		parent::__construct();
		$this->load->model('Knowledge_Model', 'kl');
	}

	public function index() {

		$this->data->knowledge = $this->kl->searchKnowledge('s');
		$category = $this->kl->getKnowledgeCategory();
		$this->data->knowledgecategory = [];
		foreach($category['data'] as $k => $v) {
			if ($v['name'] != 'Knowledge') {
				$knowledge = $this->kl->getKnowledge($v['_id']);
				$this->data->knowledgecategory[$v['name']] = $knowledge['data'];
			}
		}

		$this->load->view('knowledge', $this->data);
	}

	public function detail($cat_id, $id) {

		$this->data->rs = $this->kl->getKnowledgeById($cat_id, $id);
		$category = $this->kl->getKnowledgeCategory();
		$this->data->knowledgecategory = [];
		foreach($category['data'] as $k => $v) {
			if ($v['name'] != 'Knowledge') {
				$knowledge = $this->kl->getKnowledge($v['_id']);
				$this->data->knowledgecategory[$v['name']] = $knowledge['data'];
			}
		}

		$this->load->view('knowledge-detail', $this->data);
	}

	public function trend() {

		$category = $this->kl->getKnowledgeCategory();
		$this->data->knowledgecategory = [];
		foreach($category['data'] as $k => $v) {
			$knowledge = $this->kl->getKnowledge($v['_id']);
			$this->data->knowledgecategory[$v['name']] = $knowledge['data'];
		}

		$this->load->view('knowledge-trend', $this->data);
	}

	public function video() {

		$category = $this->kl->getKnowledgeCategory();
		$this->data->knowledgecategory = [];
		foreach($category['data'] as $k => $v) {
			$knowledge = $this->kl->getKnowledge($v['_id']);
			$this->data->knowledgecategory[$v['name']] = $knowledge['data'];
		}
		
		$this->load->view('knowledge-video', $this->data);	
	}

}
