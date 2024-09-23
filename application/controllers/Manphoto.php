<?php
class Manphoto extends CI_Controller {
	public $data 	= 	array();
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('MManphoto');
		$this->load->model('MLov');
	}

	function index(){
		$this->data['manphoto_list'] = $this->MManphoto->getAll_manphoto();
		$this->data['main_content']= 'manphoto/view_manphoto';
		$this->load->view('view_main',$this->data);
	}

	function get_photo($idman){
		$this->data['manphoto_list'] = $this->MManphoto->get_photo($idman);
		$this->data['main_content']= 'manphoto/view_manphoto';
		$this->load->view('view_main',$this->data);
	}

	function get_manphoto($idman){
		$this->data['manphoto_list'] = $this->MManphoto->get_manphoto();
		$this->data['main_content']= 'manphoto/view_manphoto';
		$this->load->view('view_main',$this->data);
	}


	function manphoto_form_insert(){
		$this->data['main_content']= 'manphoto/view_manphoto_form';
		$this->data['row']=null;
		$this->data['action']='insert';
		$this->data['idman']=$this->uri->segment(3);
		$this->data['kategori_list']= $this->MLov->get_lov_bykategori('kategori');
		$this->load->view('view_main',$this->data);
	}


	function manphoto_form_update(){
		$this->data['row'] = $this->MManphoto->get_manphoto($this->uri->segment(3));
		$this->data['main_content']= 'manphoto/view_manphoto_form';
		$this->data['action']='update';
		$this->data['idman']=$this->data['row']['idman'];
		$this->data['kategori_list']= $this->MLov->get_lov_bykategori('kategori');
		$this->load->view('view_main',$this->data);
	}


	function manphoto_form_delete(){
		$this->data['row'] = $this->MManphoto->get_manphoto($this->uri->segment(3));
		$this->data['main_content']= 'manphoto/view_manphoto_form';
		$this->data['action']='delete';
		$this->data['idman']=$this->data['row']['idman'];
		$this->load->view('view_main',$this->data);
	}


	function manphoto_manage(){
		$action = $_POST['action'];
		if($action=='insert'){
			$this->MManphoto->add_manphoto();
		}
		if($action=='update'){
			$this->MManphoto->update_manphoto();
		}
		if($action=='delete'){
			$this->MManphoto->delete_manphoto();
		}
		// $this->data['main_content']= 'manphoto_view';
		redirect('manac/get_photo/'.$_POST['idman']);
	}
}
?>
