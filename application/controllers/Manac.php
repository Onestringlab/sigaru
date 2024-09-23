<?php
class Manac extends CI_Controller {
	public $data 	= 	array();
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('MManac');
		$this->load->model('MManphoto');
		$this->load->model('MLov');
	}

	function index(){
		$this->data['manac_list'] = $this->MManac->getAll_manac();
		$this->data['main_content']= 'manac/view_manac';
		$this->load->view('view_main',$this->data);
	}


	function manac_form_insert(){
		$this->data['main_content']= 'manac/view_manac_form';
		$this->data['ac_list']= $this->MLov->get_lov_bykategori('AC');
		$this->data['pkac_list']= $this->MLov->get_lov_bykategori('pkac');
		$this->data['sttrusak_list']= $this->MLov->get_lov_bykategori('sttrusak');
		$this->data['tukang_list']= $this->MLov->get_lov_bykategori('tukang');
		$this->data['row']=null;
		$this->data['action']='insert';
		$this->load->view('view_main',$this->data);
	}


	function manac_form_update(){
		$this->data['row'] = $this->MManac->get_manac($this->uri->segment(3));
		$this->data['main_content']= 'manac/view_manac_form';
		$this->data['ac_list']= $this->MLov->get_lov_bykategori('AC');
		$this->data['pkac_list']= $this->MLov->get_lov_bykategori('pkac');
		$this->data['sttrusak_list']= $this->MLov->get_lov_bykategori('sttrusak');
		$this->data['tukang_list']= $this->MLov->get_lov_bykategori('tukang');
		$this->data['action']='update';
		$this->load->view('view_main',$this->data);
	}

	function manac_form_delete(){
		$this->data['row'] = $this->MManac->get_manac($this->uri->segment(3));
		$this->data['main_content']= 'manac/view_manac_form';
		$this->data['action']='delete';
		$this->load->view('view_main',$this->data);
	}

	function get_photo($idman){
		$this->data['row'] = $this->MManac->get_manac($this->uri->segment(3));
		$this->data['manphoto_rusak'] = $this->MManphoto->get_photo($idman,'Saat Rusak');
		$this->data['manphoto_perbaiki'] = $this->MManphoto->get_photo($idman,'Telah Diperbaiki');
		$this->data['main_content']= 'manac/view_manac_photo';
		$this->load->view('view_main',$this->data);
	}


	function manac_manage(){
		$action = $_POST['action'];
		if($action=='insert'){
			$this->MManac->add_manac();
		}
		if($action=='update'){
			$this->MManac->update_manac();
		}
		if($action=='delete'){
			$this->MManac->delete_manac();
		}
		$this->data['main_content']= 'manac_view';
		redirect('manac');
	}
}
?>
