<?php
class Main extends CI_Controller {
    public function index()
	{
		$this->data['main_content']= 'view_home';
		$this->load->view('view_main',$this->data);
	}


}
?>