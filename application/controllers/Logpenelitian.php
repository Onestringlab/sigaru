<?php
class Logpenelitian extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MLogpenelitian');
}

function index(){
  $this->data['logpenelitian_list'] = $this->MLogpenelitian->getAll_logpenelitian();
  $this->data['main_content']= 'logpenelitian/view_logpenelitian';
  $this->load->view('view_main',$this->data);
}


function logpenelitian_form_insert(){
  $this->data['main_content']= 'logpenelitian/view_logpenelitian_form';
    $this->data['logpenelitian_list'] = $this->MLogpenelitian->getAll_logpenelitian();
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}


function logpenelitian_form_update(){
  $this->data['row'] = $this->MLogpenelitian->get_logpenelitian($this->uri->segment(3));
    $this->data['logpenelitian_list'] = $this->MLogpenelitian->getAll_logpenelitian();
  $this->data['main_content']= 'logpenelitian/view_logpenelitian_form';
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}


function logpenelitian_form_delete(){
  $this->data['row'] = $this->MLogpenelitian->get_logpenelitian($this->uri->segment(3));
    $this->data['logpenelitian_list'] = $this->MLogpenelitian->getAll_logpenelitian();
  $this->data['main_content']= 'logpenelitian/view_logpenelitian_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}


function logpenelitian_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MLogpenelitian->add_logpenelitian();
  }
  if($action=='update'){
    $this->MLogpenelitian->update_logpenelitian();
  }
  if($action=='delete'){
    $this->MLogpenelitian->delete_logpenelitian();
  }
  $this->data['main_content']= 'logpenelitian_view';
  redirect('logpenelitian');
}
}
?>
