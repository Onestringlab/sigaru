<?php
class MMatkul extends CI_Model{
function __construct(){
  parent::__construct();
  $v_date = date("Y-m-d H:i:s");
}


function get_matkul($idmatkul){
  $data = array();
  $options = array('idmatkul' => $idmatkul);
  $Q = $this->db->get_where('tb_matkul',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }
  $Q->free_result();
  return $data;
}


function getAll_matkul(){
  $this->db->select('tb_matkul.*,tb_prodi.namaprodi');
  $this->db->from('tb_matkul');
  $this->db->join('tb_prodi', 'tb_matkul.idprodi = tb_prodi.idprodi');
  $this->db->order_by('tb_matkul.semester','ASC');
  $this->db->order_by('tb_matkul.matakuliah','ASC');
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


function add_matkul(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'insert into tb_matkul(idmatkul,idprodi,kodematkul,matakuliah,sks,semester,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?,?)';
  $this->db->query($sql, array(generate_uuid(),$_POST['idprodi'],$_POST['kodematkul'],$_POST['matakuliah'],$_POST['sks'],$_POST['semester'],$username,$v_date,$username,$v_date));
}


function update_matkul(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'update tb_matkul set idprodi=?,kodematkul=?,matakuliah=?,sks=?,semester=?,updatedby=?,updateddate=? where idmatkul=? ';
  $this->db->query($sql, array($_POST['idprodi'],$_POST['kodematkul'],$_POST['matakuliah'],$_POST['matakuliah'],$_POST['semester'],$username,$v_date,$_POST['idmatkul']));
}


function delete_matkul(){
  $sql='delete from tb_matkul where idmatkul=?';
  $this->db->query($sql, array($_POST['idmatkul']));
}
}
?>
