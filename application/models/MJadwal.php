<?php
class MJadwal extends CI_Model{
function __construct(){
  parent::__construct();
  $v_date = date("Y-m-d H:i:s");
}


function get_jadwal($idjadwal){
  $this->db->select('a.*,b.thajar,b.gangen,c.nokelas,d.value as kelas,e.namaprodi,f.namadosen,g.value as namahari,h.matakuliah as namamatkul');
  $this->db->from('tb_jadwal a');
  $this->db->join('tb_thajar b', 'a.idthnajaran = b.idthajar');
  $this->db->join('tb_kelas c', 'a.idruang = c.idkelas');
  $this->db->join('tb_lov d', 'a.kelas = d.idlov');
  $this->db->join('tb_prodi e', 'a.idprodi = e.idprodi');
  $this->db->join('tb_dosen f', 'a.iddosen = f.iddosen');
  $this->db->join('tb_lov g', 'a.hari = g.idlov');
  $this->db->join('tb_matkul h', 'a.matakuliah = h.idmatkul');
  $this->db->order_by('g.kode','ASC');
  $this->db->order_by('a.mulai','ASC');
  $this->db->order_by('a.idprodi','ASC');
  $this->db->where('b.status', 'Aktif');
  $this->db->where('a.idjadwal', $idjadwal);
  $data = array();
  $Q = $this->db->get();
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }
  $Q->free_result();
  return $data;
}


function getAll_jadwal(){
  $this->db->select('a.*,b.thajar,b.gangen,c.nokelas,d.value as kelas,e.namaprodi,f.namadosen,g.value as namahari,h.matakuliah as namamatkul');
  $this->db->from('tb_jadwal a');
  $this->db->join('tb_thajar b', 'a.idthnajaran = b.idthajar');
  $this->db->join('tb_kelas c', 'a.idruang = c.idkelas');
  $this->db->join('tb_lov d', 'a.kelas = d.idlov');
  $this->db->join('tb_prodi e', 'a.idprodi = e.idprodi');
  $this->db->join('tb_dosen f', 'a.iddosen = f.iddosen');
  $this->db->join('tb_lov g', 'a.hari = g.idlov');
  $this->db->join('tb_matkul h', 'a.matakuliah = h.idmatkul');
  $this->db->order_by('g.kode','ASC');
  $this->db->order_by('a.mulai','ASC');
  $this->db->order_by('a.idprodi','ASC');
  $this->db->where('b.status', 'Aktif');
  $data = array();
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data;
}


function add_jadwal(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'insert into tb_jadwal(idjadwal,idruang,idprodi,iddosen,idthnajaran,kelas,matakuliah,hari,mulai,selesai,status,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
  $this->db->query($sql, array(generate_uuid(),$_POST['idruang'],$_POST['idprodi'],$_POST['iddosen'],$_POST['idthnajaran'],$_POST['kelas'],$_POST['matakuliah'],$_POST['hari'],$_POST['mulai'],$_POST['selesai'],'1',$username,$v_date,$username,$v_date));
}


function update_jadwal(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'update tb_jadwal set idruang=?,idprodi=?,iddosen=?,idthnajaran=?,kelas=?,matakuliah=?,hari=?,mulai=?,selesai=?,status=?,updatedby=?,updateddate=? where idjadwal=? ';
  $this->db->query($sql, array($_POST['idruang'],$_POST['idprodi'],$_POST['iddosen'],$_POST['idthnajaran'],$_POST['kelas'],$_POST['matakuliah'],$_POST['hari'],$_POST['mulai'],$_POST['selesai'],'1',$username,$v_date,$_POST['idjadwal']));
}


function delete_jadwal(){
  $sql='delete from tb_jadwal where idjadwal=?';
  $this->db->query($sql, array($_POST['idjadwal']));
}
}
?>
