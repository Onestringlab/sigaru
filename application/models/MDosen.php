<?php
class MDosen extends CI_Model{
function __construct(){
  parent::__construct();
  $v_date = date("Y-m-d H:i:s");
}


function get_dosen($iddosen){
  $data = array();
  $options = array('iddosen' => $iddosen);
  $Q = $this->db->get_where('tb_dosen',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }
  $Q->free_result();
  return $data;
}


function getAll_dosen(){
  $sql = 'select iddosen,idfakultas,idprodi,nik,nidn,namadosen,alamat,nohp,email,insertedby,inserteddate,updatedby,updateddate
 from tb_dosen order by namadosen';
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


function add_dosen(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'insert into tb_dosen(iddosen,idfakultas,idprodi,nik,nidn,namadosen,alamat,nohp,email,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?,?,?,?,?)';
  $this->db->query($sql, array(generate_uuid(),$_POST['idfakultas'],$_POST['idprodi'],$_POST['nik'],$_POST['nidn'],$_POST['namadosen'],$_POST['alamat'],$_POST['nohp'],$_POST['email'],$username,$v_date,$username,$v_date));
}


function update_dosen(){
  $v_date = date('Y-m-d H:i:s');
  $username = $this->session-> userdata('username');
  $sql = 'update tb_dosen set idfakultas=?,idprodi=?,nik=?,nidn=?,namadosen=?,alamat=?,nohp=?,email=?,updatedby=?,updateddate=? where iddosen=? ';
  $this->db->query($sql, array($_POST['idfakultas'],$_POST['idprodi'],$_POST['nik'],$_POST['nidn'],$_POST['namadosen'],$_POST['alamat'],$_POST['nohp'],$_POST['email'],$username,$v_date,$_POST['iddosen']));
}


function delete_dosen(){
  $sql='delete from tb_dosen where iddosen=?';
  $this->db->query($sql, array($_POST['iddosen']));
}
}
?>
