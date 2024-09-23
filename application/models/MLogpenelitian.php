<?php
class MLogpenelitian extends CI_Model{
function __construct(){
	parent::__construct();
	$v_date = date("Y-m-d H:i:s");
}


function get_logpenelitian($idlogpenelitian){
	$data = array();
	$options = array('idlogpenelitian' => $idlogpenelitian);
	$Q = $this->db->get_where('tb_logpenelitian',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_logpenelitian(){
	$sql = 'select idlogpenelitian,waktu,log
 from tb_logpenelitian order by waktu desc';
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


function add_logpenelitian(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'insert into tb_logpenelitian(waktu,log)  values(?,?)';
	$this->db->query($sql, array($v_date,$_POST['log']));
}


function update_logpenelitian(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
	$sql = 'update tb_logpenelitian set log=? where idlogpenelitian=? ';
	$this->db->query($sql, array($_POST['log'],$_POST['idlogpenelitian']));
}


function delete_logpenelitian(){
	$sql='delete from tb_logpenelitian where idlogpenelitian=?';
	$this->db->query($sql, array($_POST['idlogpenelitian']));
}
}
?>
