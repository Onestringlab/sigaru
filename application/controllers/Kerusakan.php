<?php
class Kerusakan extends CI_Controller {
	public $data   =   array();
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('MKerusakan');
		$this->load->model('MLov');
		$this->load->model('MPengumuman');
	}

	function index(){
		$this->data['kerusakan_list'] = $this->MKerusakan->getUpdate_kerusakan();
		$this->data['main_content']= 'kerusakan/view_kerusakan';
		$this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();
		$this->load->view('view_main',$this->data);
	}

	function log_kerusakan(){
		$this->data['kerusakan_list'] = $this->MKerusakan->getAll_kerusakan();
		$this->data['main_content']= 'kerusakan/view_log_kerusakan';
		$this->load->view('view_main',$this->data);
	}

	public function lap_kerusakan_pdf(){
		$this->load->library('pdfgenerator2');
		$this->data['row'] = $this->MKerusakan->get_kerusakan($this->uri->segment(3));
		$this->data['main_content']= 'kerusakan/view_kerusakan_pdf';
		$html = $this->load->view('view_pdf', $this->data, true);
  // echo $this->data['row']['namaruang'];
  // $d = date('dMYHis');
		$judul = "Kerusakan pada ".$this->data['row']['namaruang']." dilaporkan oleh ".$this->data['row']['pelapor']." pada tanggal ".formatTanggal($this->data['row']['tglpelaporan']);
		$this->pdfgenerator2->generate($html,$judul,TRUE,'A4','p');
	}

	function kerusakan_form_insert(){
		$this->data['main_content']= 'kerusakan/view_kerusakan_form';
		$this->data['jnsfasilit_list']= $this->MLov->get_lov_bykategori('jnsfasilit');
		$this->data['sttrusak_list']= $this->MLov->get_lov_bykategori('sttrusak');
		$this->data['tukang_list']= $this->MLov->get_lov_bykategori('tukang');
		$this->data['row']=null;
		$this->data['action']='insert';
		$this->load->view('view_main',$this->data);
	}


	function kerusakan_form_update(){
		$this->data['row'] = $this->MKerusakan->get_kerusakan($this->uri->segment(3));
		$this->data['jnsfasilit_list']= $this->MLov->get_lov_bykategori('jnsfasilit');
		$this->data['sttrusak_list']= $this->MLov->get_lov_bykategori('sttrusak');
		$this->data['tukang_list']= $this->MLov->get_lov_bykategori('tukang');
		$this->data['main_content']= 'kerusakan/view_kerusakan_form';
		$this->data['action']='update';
		$this->load->view('view_main',$this->data);
	}


	function kerusakan_form_delete(){
		$this->data['row'] = $this->MKerusakan->get_kerusakan($this->uri->segment(3));
		$this->data['main_content']= 'kerusakan/view_kerusakan_form';
		$this->data['action']='delete';
		$this->load->view('view_main',$this->data);
	}


	function kerusakan_manage(){
		$action = $_POST['action'];
		if($action=='insert'){
			$this->MKerusakan->add_kerusakan();
		}
		if($action=='update'){
			$this->MKerusakan->update_kerusakan();
		}
		if($action=='delete'){
			$this->MKerusakan->delete_kerusakan();
		}
		$this->data['main_content']= 'kerusakan_view';
		redirect('kerusakan');
	}
}
?>
