<?php
class MFakultas extends CI_Model{
function __construct(){
  parent::__construct();
  $v_date = date("Y-m-d H:i:s");
}


function get_fakultas($idfakultas){
  $data = array();
  $options = array('idfakultas' => $idfakultas);
  $Q = $this->db->get_where('tb_fakultas',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }
  $Q->free_result();
  return $data;
}


function getAll_fakultas(){
  $sql = 'select idfakultas,singkatan,namafakultas,insertedby,inserteddate,updatedby,updateddate
 from tb_fakultas';
  $data = array();
  $Q = $this->db-> query($sql);
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data;
}


function add_fakultas(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'insert into tb_fakultas(idfakultas,singkatan,namafakultas,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?)';
  $this->db->query($sql, array(generate_uuid(),$_POST['singkatan'],$_POST['namafakultas'],$username,$v_date,$username,$v_date));
}


function update_fakultas(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'update tb_fakultas set singkatan=?,namafakultas=?,updatedby=?,updateddate=? where idfakultas=? ';
  $this->db->query($sql, array($_POST['singkatan'],$_POST['namafakultas'],$username,$v_date,$_POST['idfakultas']));
}


function delete_fakultas(){
  $sql='delete from tb_fakultas where idfakultas=?';
  $this->db->query($sql, array($_POST['idfakultas']));
}
}
?>
