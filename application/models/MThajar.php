<?php
class MThajar extends CI_Model{
function __construct(){
  parent::__construct();
  $v_date = date("Y-m-d H:i:s");
}


function get_thajar($idthajar){
  $data = array();
  $options = array('idthajar' => $idthajar);
  $Q = $this->db->get_where('tb_thajar',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }
  $Q->free_result();
  return $data;
}


function getAll_thajar(){
  $sql = 'select idthajar,thajar,gangen,status,concat(thajar,"-",gangen) as thajargangen,insertedby,inserteddate,updatedby,updateddate from tb_thajar';
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


function add_thajar(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'insert into tb_thajar(idthajar,thajar,gangen,status,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?)';
  $this->db->query($sql, array(generate_uuid(),$_POST['thajar'],$_POST['gangen'],$_POST['status'],$username,$v_date,$username,$v_date));
}


function update_thajar(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'update tb_thajar set thajar=?,gangen=?,status=?,updatedby=?,updateddate=? where idthajar=? ';
  $this->db->query($sql, array($_POST['thajar'],$_POST['gangen'],$_POST['status'],$username,$v_date,$_POST['idthajar']));
}


function delete_thajar(){
  $sql='delete from tb_thajar where idthajar=?';
  $this->db->query($sql, array($_POST['idthajar']));
}
}
?>
