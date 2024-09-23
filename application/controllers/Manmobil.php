<?php
class Manmobil extends CI_Controller {
	public $data 	= 	array();
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('MLov');
		$this->load->model('MManmobil');
		$this->load->model('MKendaraan');
	}

	function index(){
		$this->data['manmobil_list'] = $this->MManmobil->getAll_manmobil();
		$this->data['main_content']= 'manmobil/view_manmobil';
		$this->load->view('view_main',$this->data);
	}


	function manmobil_form_insert(){
		$this->data['main_content']= 'manmobil/view_manmobil_form';
		$this->data['row']=null;
		$this->data['action']='insert';
		$this->data['kendaraan_list'] = $this->MKendaraan->getData_kendaraan();
		$this->data['status_kondisi']= $this->MLov->get_lov_bykategori('sttkondisi');
		$this->load->view('view_main',$this->data);
	}


	function manmobil_form_update(){
		$this->data['row'] = $this->MManmobil->get_manmobil($this->uri->segment(3));
		$this->data['main_content']= 'manmobil/view_manmobil_form';
		$this->data['status_kondisi']= $this->MLov->get_lov_bykategori('sttkondisi');
		$this->data['kendaraan_list'] = $this->MKendaraan->getData_kendaraan();
		$this->data['action']='update';
		$this->load->view('view_main',$this->data);
	}


	function manmobil_form_delete(){
		$this->data['row'] = $this->MManmobil->get_manmobil($this->uri->segment(3));
		$this->data['main_content']= 'manmobil/view_manmobil_form';
		$this->data['action']='delete';
		$this->load->view('view_main',$this->data);
	}


	function manmobil_manage(){
		$action = $_POST['action'];
		if($action=='insert'){
			$this->MManmobil->add_manmobil();
		}
		if($action=='update'){
			$this->MManmobil->update_manmobil();
		}
		if($action=='delete'){
			$this->MManmobil->delete_manmobil();
		}
		$this->data['main_content']= 'manmobil_view';
		redirect('manmobil');
	}
}
?>
