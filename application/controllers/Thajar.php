<?php
class Thajar extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MThajar');
}

function index(){
  $this->data['thajar_list'] = $this->MThajar->getAll_thajar();
  $this->data['main_content']= 'thajar/view_thajar';
  $this->load->view('view_main',$this->data);
}


function thajar_form_insert(){
  $this->data['main_content']= 'thajar/view_thajar_form';
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}


function thajar_form_update(){
  $this->data['row'] = $this->MThajar->get_thajar($this->uri->segment(3));
  $this->data['main_content']= 'thajar/view_thajar_form';
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}


function thajar_form_delete(){
  $this->data['row'] = $this->MThajar->get_thajar($this->uri->segment(3));
  $this->data['main_content']= 'thajar/view_thajar_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}


function thajar_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MThajar->add_thajar();
  }
  if($action=='update'){
    $this->MThajar->update_thajar();
  }
  if($action=='delete'){
    $this->MThajar->delete_thajar();
  }
  $this->data['main_content']= 'thajar_view';
  redirect('thajar');
}
}
?>
