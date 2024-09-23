<?php
class Konken extends CI_Controller {
	public $data 	= 	array();
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('MKonken');
	}

	function index(){
		$this->data['konken_list'] = $this->MKonken->getAll_konken();
		$this->data['main_content']= 'konken/view_konken';
		$this->load->view('view_main',$this->data);
	}


	function konken_form_insert(){
		$this->data['main_content']= 'konken/view_konken_form';
		$this->data['row']=null;
		$this->data['action']='insert';
		$this->load->view('view_main',$this->data);
	}


	function konken_form_update(){
		$this->data['row'] = $this->MKonken->get_konken($this->uri->segment(3));
		$this->data['main_content']= 'konken/view_konken_form';
		$this->data['action']='update';
		$this->load->view('view_main',$this->data);
	}


	function konken_form_delete(){
		$this->data['row'] = $this->MKonken->get_konken($this->uri->segment(3));
		$this->data['main_content']= 'konken/view_konken_form';
		$this->data['action']='delete';
		$this->load->view('view_main',$this->data);
	}


	function konken_manage(){
		$action = $_POST['action'];
		if($action=='insert'){
			$this->MKonken->add_konken();
		}
		if($action=='update'){
			$this->MKonken->update_konken();
		}
		if($action=='delete'){
			$this->MKonken->delete_konken();
		}
		$this->data['main_content']= 'konken_view';
		redirect('konken');
	}
}
?>
