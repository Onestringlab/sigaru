<?php
class Prodi extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MProdi');
  $this->load->model('MFakultas');
}

function index(){
  $this->data['prodi_list'] = $this->MProdi->getAll_prodi();
  $this->data['main_content']= 'prodi/view_prodi';
  $this->load->view('view_main',$this->data);
}


function prodi_form_insert(){
  $this->data['main_content']= 'prodi/view_prodi_form';
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->data['fakultas_list'] = $this->MFakultas->getAll_fakultas();
  $this->load->view('view_main',$this->data);
}


function prodi_form_update(){
  $this->data['row'] = $this->MProdi->get_prodi($this->uri->segment(3));
  $this->data['main_content']= 'prodi/view_prodi_form';
  $this->data['action']='update';
  $this->data['fakultas_list'] = $this->MFakultas->getAll_fakultas();
  $this->load->view('view_main',$this->data);
}


function prodi_form_delete(){
  $this->data['row'] = $this->MProdi->get_prodi($this->uri->segment(3));
  $this->data['main_content']= 'prodi/view_prodi_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}


function prodi_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MProdi->add_prodi();
  }
  if($action=='update'){
    $this->MProdi->update_prodi();
  }
  if($action=='delete'){
    $this->MProdi->delete_prodi();
  }
  $this->data['main_content']= 'prodi_view';
  redirect('prodi');
}
}
?>
