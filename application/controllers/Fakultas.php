<?php
class Fakultas extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MFakultas');
}

function index(){
  $this->data['fakultas_list'] = $this->MFakultas->getAll_fakultas();
  $this->data['main_content']= 'fakultas/view_fakultas';
  $this->load->view('view_main',$this->data);
}


function fakultas_form_insert(){
  $this->data['main_content']= 'fakultas/view_fakultas_form';
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}


function fakultas_form_update(){
  $this->data['row'] = $this->MFakultas->get_fakultas($this->uri->segment(3));
  $this->data['main_content']= 'fakultas/view_fakultas_form';
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}


function fakultas_form_delete(){
  $this->data['row'] = $this->MFakultas->get_fakultas($this->uri->segment(3));
  $this->data['main_content']= 'fakultas/view_fakultas_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}


function fakultas_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MFakultas->add_fakultas();
  }
  if($action=='update'){
    $this->MFakultas->update_fakultas();
  }
  if($action=='delete'){
    $this->MFakultas->delete_fakultas();
  }
  $this->data['main_content']= 'fakultas_view';
  redirect('fakultas');
}
}
?>
