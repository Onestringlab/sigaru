<?php
class Lov extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MLov');
}

function index(){
  $this->data['lov_list'] = $this->MLov->getAll_lov();
  $this->data['main_content']= 'lov/view_lov';
  $this->load->view('view_main',$this->data);
}


function lov_form_insert(){
  $this->data['main_content']= 'lov/view_lov_form';
  $this->data['lov_list'] = $this->MLov->getAll_lov();
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}


function lov_form_update(){
  $this->data['row'] = $this->MLov->get_lov($this->uri->segment(3));
    $this->data['lov_list'] = $this->MLov->getAll_lov();
  $this->data['main_content']= 'lov/view_lov_form';
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}


function lov_form_delete(){
  $this->data['row'] = $this->MLov->get_lov($this->uri->segment(3));
    $this->data['lov_list'] = $this->MLov->getAll_lov();
  $this->data['main_content']= 'lov/view_lov_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}


function lov_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MLov->add_lov();
  }
  if($action=='update'){
    $this->MLov->update_lov();
  }
  if($action=='delete'){
    $this->MLov->delete_lov();
  }
  $this->data['main_content']= 'lov_view';
  redirect('lov');
}
}
?>
