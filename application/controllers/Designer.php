<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer extends Base {
	
	public function __construct() {

		parent::__construct();
		$this->load->model('Designer_model', 'ds');
		
	}

	public function index() {

		$data['rs'] = $this->ds->getDesignerCategory();
		$data['title'] = 'Find Designer Indrustrial designer (Company preelance student)';
		$data['description'] = 'คลังรวมนักออกแบบ และมืออาชีพหลากหลายแขนงวงการอุตสาหกรรม';

		$this->render('find-designer', $data);
	}

	public function data_list($category_id) {

		$data['categories'] = $this->ds->getDesignerCategory();
		$data['rs'] = $this->ds->getDesignerByCategory($category_id);

		$this->render('find-designer-list', $data);
	}

	public function profile($category_id, $profile_id) {

		$data['r'] = $this->ds->getDesignerById($category_id, $profile_id);

		$this->load->model('Knowledge_model', 'knowledge');
		$this->load->model('Designer_model', 'designer');
		$this->load->model('Producer_model', 'producer');
		$this->load->model('Supplier_model', 'supplier');
		

		$data['knowledge'] = $this->knowledge->searchKnowledge('s');
		
		$category = $this->knowledge->getKnowledgeCategory();
		$data['knowledgecategory'] = [];
		foreach($category['data'] as $k => $v) {
			if ($v['name'] != 'Knowledge') {
				$knowledge = $this->knowledge->getKnowledge($v['_id']);
				$data['knowledgecategory'][$v['name']] = $knowledge['data'];
			}
		}


		
		$this->render('profile', $data);
	}


	
}
