<?php
class Peminjaman extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MLov');
  $this->load->model('MPeminjaman');
  $this->load->model('MKendaraan');
  $this->load->model('MPengumuman');
}

function index(){
  $this->data['peminjaman_list'] = $this->MPeminjaman->getUpdate_peminjaman();
  $this->data['main_content']= 'peminjaman/view_peminjaman';
  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();
  $this->load->view('view_main',$this->data);
}

function log_peminjaman(){
  $this->data['peminjaman_list'] = $this->MPeminjaman->getAll_peminjaman();
  $this->data['main_content']= 'peminjaman/view_log_peminjaman';
  $this->load->view('view_main',$this->data);
}

public function lap_peminjaman_pdf(){
  $this->load->library('pdfgenerator2');
  $this->data['row'] = $this->MPeminjaman->get_peminjaman($this->uri->segment(3));
  $this->data['kaurPLKP'] = $this->MLov->get_lov_bykategori('Ka. PLKP');
  $this->data['kaBAU']= $this->MLov->get_lov_bykategori('Ka. B.A.U');
  $this->data['perset_list']= $this->MLov->get_lov_bykategori('tipeperset');
  $this->data['main_content']= 'peminjaman/view_peminjaman_pdf';
  $html = $this->load->view('view_pdf', $this->data, true);
  // echo ($html);
  // $d = date('dMYHis');
  $judul = "FM Kendaraan ".$this->data['row']['nopolisi']." ".$this->data['row']['merk']." ".formatTanggal($this->data['row']['mulai']);
  $this->pdfgenerator2->generate($html,$judul,TRUE,'A4','p');
}

public function surat_jalan_pdf(){
  $this->load->library('pdfgenerator2');
  $this->data['row'] = $this->MPeminjaman->get_peminjaman($this->uri->segment(3));
  $this->data['kaurPLKP'] = $this->MLov->get_lov_bykategori('Ka. PLKP');
  $this->data['kaBAU']= $this->MLov->get_lov_bykategori('Ka. B.A.U');
  $this->data['perset_list']= $this->MLov->get_lov_bykategori('tipeperset');
  $this->data['main_content']= 'peminjaman/view_suratjalan_pdf';
  $html = $this->load->view('view_pdf', $this->data, true);
  // $d = date('dMYHis');
  $judul = "FM Kendaraan ".$this->data['row']['nopolisi']." ".$this->data['row']['merk']." ".formatTanggal($this->data['row']['mulai']);
  $this->pdfgenerator2->generate($html,$judul,TRUE,'A4','p');
}

function peminjaman_form_insert(){
  $this->data['main_content']= 'peminjaman/view_peminjaman_form';
  $this->data['peminjaman_list'] = $this->MPeminjaman->getAll_peminjaman();
  $this->data['kendaraan_list']= $this->MKendaraan->get_lov_kendaraan();
  $this->data['perset_list']= $this->MLov->get_lov_bykategori('tipeperset');
  $this->data['action']='insert';
  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();
  $this->load->view('view_main',$this->data);
}

function peminjaman_form_update(){
  $this->data['row'] = $this->MPeminjaman->get_peminjaman($this->uri->segment(3));
  $this->data['peminjaman_list'] = $this->MPeminjaman->getAll_peminjaman();
  $this->data['main_content']= 'peminjaman/view_peminjaman_form';
  $this->data['kendaraan_list']= $this->MKendaraan->get_lov_kendaraan();
  $this->data['perset_list']= $this->MLov->get_lov_bykategori('tipeperset');
  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}

function peminjaman_form_delete(){
  $this->data['row'] = $this->MPeminjaman->get_peminjaman($this->uri->segment(3));
  $this->data['peminjaman_list'] = $this->MPeminjaman->getAll_peminjaman();
  $this->data['main_content']= 'peminjaman/view_peminjaman_form';
  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}


function peminjaman_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MPeminjaman->add_peminjaman();
  }
  if($action=='update'){
    $this->MPeminjaman->update_peminjaman();
  }
  if($action=='delete'){
    $this->MPeminjaman->delete_peminjaman();
  }
  $this->data['main_content']= 'peminjaman_view';
  redirect('peminjaman');
}

function cek_waktu(){
    $status = $this->MPeminjaman->cek_pinjam();
    echo $status;
}

}
?>
