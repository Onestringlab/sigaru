<?php
class Matkul extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MMatkul');
}

function index(){
  $this->data['matkul_list'] = $this->MMatkul->getAll_matkul();
  $this->data['main_content']= 'matkul/view_matkul';
  $this->load->view('view_main',$this->data);
}


function matkul_form_insert(){
  $this->data['main_content']= 'matkul/view_matkul_form';
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}


function matkul_form_update(){
  $this->data['row'] = $this->MMatkul->get_matkul($this->uri->segment(3));
  $this->data['main_content']= 'matkul/view_matkul_form';
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}


function matkul_form_delete(){
  $this->data['row'] = $this->MMatkul->get_matkul($this->uri->segment(3));
  $this->data['main_content']= 'matkul/view_matkul_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}


function matkul_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MMatkul->add_matkul();
  }
  if($action=='update'){
    $this->MMatkul->update_matkul();
  }
  if($action=='delete'){
    $this->MMatkul->delete_matkul();
  }
  $this->data['main_content']= 'matkul_view';
  redirect('matkul');
}
}
?>
