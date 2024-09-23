<?php
class MLov extends CI_Model{
function __construct(){
  parent::__construct();
  $v_date = date("Y-m-d H:i:s");
}


function get_lov($idlov){
  $data = array();
  $options = array('idlov' => $idlov);
  $Q = $this->db->get_where('tb_lov',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }
  $Q->free_result();
  return $data;
}


function getAll_lov(){
  $sql = 'select idlov,kategori,kode,value
 from tb_lov order by kategori,kode,value';
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


function add_lov(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'insert into tb_lov(idlov,kategori,kode,value)  values(?,?,?,?)';
  $this->db->query($sql, array(generate_uuid(),$_POST['kategori'],$_POST['kode'],$_POST['value']));
}


function update_lov(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'update tb_lov set kategori=?,kode=?,value=? where idlov=? ';
  $this->db->query($sql, array($_POST['kategori'],$_POST['kode'],$_POST['value'],$_POST['idlov']));
}


function delete_lov(){
  $sql='delete from tb_lov where idlov=?';
  $this->db->query($sql, array($_POST['idlov']));
}

function get_lov_bykategori($kategori){
  $sql = "select idlov,kategori,kode,value  from tb_lov where kategori='".$kategori."' order by kode, value";
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

}
?>
