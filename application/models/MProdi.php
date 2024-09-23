<?php
class MProdi extends CI_Model{
function __construct(){
  parent::__construct();
  $v_date = date("Y-m-d H:i:s");
}


function get_prodi($idprodi){
  $data = array();
  $options = array('idprodi' => $idprodi);
  $Q = $this->db->get_where('tb_prodi',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }
  $Q->free_result();
  return $data;
}


function getAll_prodi(){
  $this->db->select('a.*,b.namafakultas');
  $this->db->from('tb_prodi a');
  $this->db->join('tb_fakultas b', 'a.idfakultas = b.idfakultas');
  $this->db->order_by('b.namafakultas','ASC');
  $this->db->order_by('a.namaprodi','ASC');
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


function add_prodi(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'insert into tb_prodi(idprodi,idfakultas,singkatan,namaprodi,skprodi,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?)';
  $this->db->query($sql, array(generate_uuid(),$_POST['idfakultas'],$_POST['singkatan'],$_POST['namaprodi'],$_POST['skprodi'],$username,$v_date,$username,$v_date));
}


function update_prodi(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'update tb_prodi set idfakultas=?,singkatan=?,namaprodi=?,skprodi=?,updatedby=?,updateddate=? where idprodi=? ';
  $this->db->query($sql, array($_POST['idfakultas'],$_POST['singkatan'],$_POST['namaprodi'],$_POST['skprodi'],$username,$v_date,$_POST['idprodi']));
}


function delete_prodi(){
  $sql='delete from tb_prodi where idprodi=?';
  $this->db->query($sql, array($_POST['idprodi']));
}
}
?>
