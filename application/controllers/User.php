<?php
class User extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MUser');
    $this->load->model('MLov');
    $this->load->model('MRuangan');
}

function index(){
  $this->data['user_list'] = $this->MUser->getAll_user();
  $this->data['main_content']= 'user/view_user';
  $this->load->view('view_main',$this->data);
}
function login(){
//  $this->load->view('view_login');
  $this->data['main_content']= 'view_login';
  $this->load->view('view_main_read',$this->data);
}


function user_form_insert(){
  $this->data['main_content']= 'user/view_user_form';
  $this->data['role_list']= $this->MLov->get_lov_bykategori('tiperole');
  $this->data['status_list']= $this->MLov->get_lov_bykategori('tipestatus');
  $this->data['user_list'] = $this->MUser->getAll_user();
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}


function user_form_update(){
  $this->data['row'] = $this->MUser->get_user($this->uri->segment(3));
  $this->data['user_list'] = $this->MUser->getAll_user();
  $this->data['role_list']= $this->MLov->get_lov_bykategori('tiperole');
  $this->data['status_list']= $this->MLov->get_lov_bykategori('tipestatus');
  $this->data['main_content']= 'user/view_user_form';
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}


function user_form_delete(){
  $this->data['row'] = $this->MUser->get_user($this->uri->segment(3));
  $this->data['user_list'] = $this->MUser->getAll_user();
  $this->data['main_content']= 'user/view_user_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}

function user_login(){
  $valid=$this->MUser->check_username();
  if($valid==1){
    redirect('beranda');

  }else{
    redirect('user/login');
  }
}

function user_logout(){
  $this->session->unset_userdata('username');
  $this->session->unset_userdata('name');
  $this->session->unset_userdata('role');
  redirect('beranda');
}


function user_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MUser->add_user();
  }
  if($action=='update'){
    $this->MUser->update_user();
  }
  if($action=='delete'){
    $this->MUser->delete_user();
  }
  $this->data['main_content']= 'user_view';
  redirect('user');
}
}
?>
