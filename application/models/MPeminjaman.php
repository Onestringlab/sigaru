<?php
class MPeminjaman extends CI_Model{
function __construct(){
  parent::__construct();
  $v_date = date("Y-m-d H:i:s");
}


function get_peminjaman($idpeminjaman){
  $tanggal = date('Y-m-d');
  $this->db->select('a.*,b.nopolisi,b.merk,b.jenis,b.catatan');
  $this->db->from('tb_peminjaman a');
  $this->db->join('tb_kendaraan b', 'a.idkendaraan = b.idkendaraan');
  $this->db->where('idpeminjaman',$idpeminjaman);
  $data = array();
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    $data = $Q->row_array();
  }
  $Q->free_result();
  return $data;}

function getHariini_peminjaman(){
  $data = array();
  $tanggal = date('Y-m-d');
  $this->db->select('a.*,b.nopolisi,b.merk');
  $this->db->from('tb_peminjaman a');
  $this->db->join('tb_kendaraan b', 'a.idkendaraan = b.idkendaraan');
  $where = "mulai <= '".$tanggal."' and selesai >='".$tanggal."'";
  $this->db->where($where);
  $this->db->where('status','Disetujui');
  $this->db->order_by('mulai', 'asc');
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data;
}

function getKendaraanDiajukan(){
  $data = array();
  $tanggal = date('Y-m-d');
  $this->db->select('a.*,b.nopolisi,b.merk');
  $this->db->from('tb_peminjaman a');
  $this->db->join('tb_kendaraan b', 'a.idkendaraan = b.idkendaraan');
  $where = "mulai >= '".$tanggal."'";
  $this->db->where($where);
  $this->db->where('status','Diajukan');
  $this->db->order_by('mulai', 'ASC');
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data;
}

function getKendaraanDisetujui(){
  $data = array();
  $tanggal = date('Y-m-d');
  $this->db->select('a.*,b.nopolisi,b.merk');
  $this->db->from('tb_peminjaman a');
  $this->db->join('tb_kendaraan b', 'a.idkendaraan = b.idkendaraan');
  $where = "mulai >= '".$tanggal."'";
  $this->db->where($where);
  $this->db->where('status','Disetujui');
  $this->db->order_by('mulai', 'ASC');
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data;
}

function getKendaraanDitolak(){
  $data = array();
  $tanggal = date('Y-m-d');
  $this->db->select('a.*,b.nopolisi,b.merk');
  $this->db->from('tb_peminjaman a');
  $this->db->join('tb_kendaraan b', 'a.idkendaraan = b.idkendaraan');
  $where = "mulai >= '".$tanggal."'";
  $this->db->where($where);
  $this->db->where('status','Ditolak');
  $this->db->order_by('mulai', 'ASC');
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data;
}


function getUpdate_peminjaman(){
  $data = array();
  $tanggal = date('Y-m-d');
  $this->db->select('a.*,b.nopolisi,b.merk');
  $this->db->from('tb_peminjaman a');
  $this->db->join('tb_kendaraan b', 'a.idkendaraan = b.idkendaraan');
  $this->db->where('mulai >=',$tanggal);
  $this->db->order_by('mulai', 'asc');
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data;
}

function getAll_peminjaman(){
  $data = array();
  $tanggal = date('Y-m-d',strtotime('-180 days'));
  $this->db->select('a.*,b.nopolisi,b.merk');
  $this->db->from('tb_peminjaman a');
  $this->db->join('tb_kendaraan b', 'a.idkendaraan = b.idkendaraan');
  $this->db->where('mulai >=',$tanggal);
  $this->db->order_by('mulai', 'desc');
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data;
}


function cek_pinjam(){
 $this->db->select('*');
  $this->db->from('tb_peminjaman');
  $this->db->where('idpeminjaman !=',$_GET['idpeminjaman']);
  $this->db->where('idkendaraan',$_GET['idkendaraan']);
  $where = "((mulai between '".$_GET['tanggalmulai']."' and '".$_GET['tanggalselesai']."') ";
  $where .= "or (selesai between '".$_GET['tanggalmulai']."' and '".$_GET['tanggalselesai']."')";
  $where .= "or (mulai<'".$_GET['tanggalmulai']."' and selesai >'".$_GET['tanggalmulai']."')";
  $where .= "or (mulai>'".$_GET['tanggalmulai']."' and selesai <'".$_GET['tanggalselesai']."'))";
  $this->db->where($where);
  $this->db->where('status !=','Ditolak');
  $data = array();
  $Q = $this->db->get();
  $status="1";
  if ($Q->num_rows() > 0){
    $status="0";
  }
  $Q-> free_result();
  return $status;//." ".$this->db->last_query() ;
}

function update_sequence($kategori){
  $sql = 'update tb_sequence set angka = angka + 1 where kategori = ?';
  $this->db->query($sql,array($kategori));
}

function get_sequence($kategori){
  $this->update_sequence($kategori);
  $this->db->select('angka');
  $this->db->from('tb_sequence');
  $this->db->where('kategori =',$kategori);

  $data = array();
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data[0]['angka'];
}

function add_peminjaman(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $nolaporan = $this->get_sequence('kendaraan');
  $nolaporan = $nolaporan . '-FM.PKD.PLKP';
  $sql = 'insert into tb_peminjaman(idpeminjaman,idkendaraan,iduser,nolaporan,namapeminjam,hppeminjam,institusi,mulai,selesai,tujuan,acara,waktumulai,waktuselesai,keberangkatan,status,insertedby,insertedat,updatedby,updatedat)  values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
  $this->db->query($sql, array(generate_uuid(),$_POST['idkendaraan'],$username,$nolaporan,$_POST['namapeminjam'],$_POST['hppeminjam'],$_POST['institusi'],$_POST['mulai'],$_POST['selesai'],$_POST['tujuan'],$_POST['acara'],$_POST['waktumulai'],$_POST['waktuselesai'],$_POST['keberangkatan'],$_POST['status'],$username,$v_date,$username,$v_date));
}


function update_peminjaman(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'update tb_peminjaman set idkendaraan=?,iduser=?,namapeminjam=?,hppeminjam=?,institusi=?,mulai=?,selesai=?,tujuan=?,acara=?,waktumulai=?,waktuselesai=?,keberangkatan=?,status=?,updatedby=?,updatedat=? where idpeminjaman=? ';
  $this->db->query($sql, array($_POST['idkendaraan'],$username,$_POST['namapeminjam'],$_POST['hppeminjam'],$_POST['institusi'],$_POST['mulai'],$_POST['selesai'],$_POST['tujuan'],$_POST['acara'],$_POST['waktumulai'],$_POST['waktuselesai'],$_POST['keberangkatan'],$_POST['status'],$username,$v_date,$_POST['idpeminjaman']));
}


function delete_peminjaman(){
  $sql='delete from tb_peminjaman where idpeminjaman=?';
  $this->db->query($sql, array($_POST['idpeminjaman']));
}
}
?>
