<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Base {
	
	public function __construct() {

		parent::__construct();
		$this->load->model('Knowledge_model', 'knowledge');
		$this->load->model('Designer_model', 'designer');
		$this->load->model('Producer_model', 'producer');
		$this->load->model('Supplier_model', 'supplier');
	}

	public function index() {
		
		//$data['knowledge'] = $this->knowledge->searchKnowledge('');

		//print_r($this->session->userdata());

		$category = $this->knowledge->getKnowledgeCategory();
		$data['knowledgecategory'] = [];
		foreach($category['data'] as $k => $v) {
			$knowledge = $this->knowledge->getKnowledge($v['_id']);
			foreach($knowledge['data'] as $inx => $_v) {
				
				$data['knowledgecategory'][$_v['_id']] = array(
					'_id' => $_v['_id'],
					'title' => $_v['title'],
					'subtitle' => $_v['subtitle'],
					'create_date' => $_v['create_date'],
					'like_count' => $_v['like_count'],
					'is_like' => $_v['is_like'],
					'image' => $_v['image']['full'],
					'youtube_id' => $_v['youtube_id'],
					'detail' => $_v['detail'],
					'share_url' => $_v['share_url'],
					'category' => array('_id' => $_v['category']['_id'])
				);

			}
			
		}

		ksort($data['knowledgecategory']);
		$data['knowledge'] = $data['knowledgecategory'];
		$data['designer'] = $this->designer->getDesignerCategory();
		$data['producer'] = $this->producer->getProducerCategory();
		$data['supplier'] = $this->supplier->getSupplierCategory();

		$this->render('index', $data);
	}

	public function policy() {
		$this->render('policy');
	}

}
