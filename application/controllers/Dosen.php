<?php
class Dosen extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MDosen');
}

function index(){
  $this->data['dosen_list'] = $this->MDosen->getAll_dosen();
  $this->data['main_content']= 'dosen/view_dosen';
  $this->load->view('view_main',$this->data);
}


function dosen_form_insert(){
  $this->data['main_content']= 'dosen/view_dosen_form';
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}


function dosen_form_update(){
  $this->data['row'] = $this->MDosen->get_dosen($this->uri->segment(3));
  $this->data['main_content']= 'dosen/view_dosen_form';
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}


function dosen_form_delete(){
  $this->data['row'] = $this->MDosen->get_dosen($this->uri->segment(3));
  $this->data['main_content']= 'dosen/view_dosen_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}


function dosen_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MDosen->add_dosen();
  }
  if($action=='update'){
    $this->MDosen->update_dosen();
  }
  if($action=='delete'){
    $this->MDosen->delete_dosen();
  }
  $this->data['main_content']= 'dosen_view';
  redirect('dosen');
}


}
?>
