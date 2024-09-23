<?php
class Penyewaan extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MPenyewaan');
  $this->load->model('MLov');
  $this->load->model('MRuangan');
  $this->load->model('MPengumuman');
}

function index(){
  $this->data['penyewaan_list'] = $this->MPenyewaan->getUpdate_penyewaan();
  $this->data['main_content']= 'penyewaan/view_penyewaan';
  $this->data['diajukan_list'] = $this->MPenyewaan->getRuanganDiajukan();
  $this->data['disetujui_list'] = $this->MPenyewaan->getRuanganDisetujui();
  $this->data['ditolak_list'] = $this->MPenyewaan->getRuanganDitolak();
  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();

  $this->load->view('view_main',$this->data);
}

function log_penyewaan(){
  $this->data['penyewaan_list'] = $this->MPenyewaan->getAll_penyewaan();
  $this->data['main_content']= 'penyewaan/view_log_penyewaan';
  $this->load->view('view_main',$this->data);
}


function penyewaan_form_insert(){
  $this->data['main_content']= 'penyewaan/view_penyewaan_form';
  $this->data['penyewaan_list'] = $this->MPenyewaan->getAll_penyewaan();
  $this->data['ruangan_list']= $this->MRuangan->get_lov_ruangan();
  $this->data['perset_list']= $this->MLov->get_lov_bykategori('tipeperset');
  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}


function penyewaan_form_update(){
  $this->data['row'] = $this->MPenyewaan->get_penyewaan($this->uri->segment(3));
  $this->data['penyewaan_list'] = $this->MPenyewaan->getAll_penyewaan();
  $this->data['perset_list']= $this->MLov->get_lov_bykategori('tipeperset');
  $this->data['ruangan_list']= $this->MRuangan->get_lov_ruangan();
  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();
  $this->data['main_content']= 'penyewaan/view_penyewaan_form';
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}


function penyewaan_form_delete(){
  $this->data['row'] = $this->MPenyewaan->get_penyewaan($this->uri->segment(3));
  $this->data['penyewaan_list'] = $this->MPenyewaan->getAll_penyewaan();
  $this->data['perset_list']= $this->MLov->get_lov_bykategori('tipeperset');
  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();
  $this->data['main_content']= 'penyewaan/view_penyewaan_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}

function cek_waktu(){
//  echo "idRuangan : " ;
//    echo $_GET['idruangan'];
//    echo "Tanggal : " ;
//    echo $_GET['tanggalsewa'];
//    echo " Mulai : " ;
//    echo $_GET['mulai'];
//    echo " Selesai : " ;
//    echo $_GET['selesai'];
    $status = $this->MPenyewaan->check_jadwal();
//    echo " Status :";
    echo $status;
//    $this->data['penyewaan_list'] = $this->MPenyewaan->getAll_penyewaan();
}

public function lap_penyewaan_pdf(){
  $this->load->library('pdfgenerator2');
  $this->data['row'] = $this->MPenyewaan->get_penyewaan($this->uri->segment(3));
  $this->data['kaurPLKP'] = $this->MLov->get_lov_bykategori('Ka. PLKP');
  $this->data['kaBAU']= $this->MLov->get_lov_bykategori('Ka. B.A.U');
  $this->data['perset_list']= $this->MLov->get_lov_bykategori('tipeperset');
  $this->data['main_content']= 'penyewaan/view_penyewaan_pdf';
  // $this->load->view('view_pdf', $this->data);
  $html = $this->load->view('view_pdf', $this->data,TRUE);
  // echo ($html);
  // $d = date('dMYHis');
  $judul = "FM-Ruang-".$this->data['row']['tanggalsewa']."-".$this->uri->segment(3);
  $this->pdfgenerator2->generate($html,$judul,TRUE,'A4','l');
}

function penyewaan_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MPenyewaan->add_penyewaan();
  }
  if($action=='update'){
    $this->MPenyewaan->update_penyewaan();
  }
  if($action=='delete'){
    $this->MPenyewaan->delete_penyewaan();
  }
  $this->data['main_content']= 'penyewaan_view';
  redirect('penyewaan');
}
}
?>
