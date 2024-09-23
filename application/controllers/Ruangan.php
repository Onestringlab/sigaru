<?php
class Ruangan extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MRuangan');
}

function index(){
  $this->data['ruangan_list'] = $this->MRuangan->getAll_ruangan();
  $this->data['main_content']= 'ruangan/view_ruangan';
  $this->load->view('view_main',$this->data);
}


function ruangan_form_insert(){
  $this->data['main_content']= 'ruangan/view_ruangan_form';
  $this->data['ruangan_list'] = $this->MRuangan->getAll_ruangan();
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}


function ruangan_form_update(){
  $this->data['row'] = $this->MRuangan->get_ruangan($this->uri->segment(3));
    $this->data['ruangan_list'] = $this->MRuangan->getAll_ruangan();
  $this->data['main_content']= 'ruangan/view_ruangan_form';
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}


function ruangan_form_delete(){
  $this->data['row'] = $this->MRuangan->get_ruangan($this->uri->segment(3));
    $this->data['ruangan_list'] = $this->MRuangan->getAll_ruangan();
  $this->data['main_content']= 'ruangan/view_ruangan_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}


function ruangan_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MRuangan->add_ruangan();
  }
  if($action=='update'){
    $this->MRuangan->update_ruangan();
  }
  if($action=='delete'){
    $this->MRuangan->delete_ruangan();
  }
  $this->data['main_content']= 'ruangan_view';
  redirect('ruangan');
}
}
?>
