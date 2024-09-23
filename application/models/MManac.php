<?php
class MManac extends CI_Model{
	function __construct(){
		parent::__construct();
		$v_date = date("Y-m-d H:i:s");
	}


	function get_manac($idmanac){
		$data = array();
		$options = array('idmanac' => $idmanac);
		$Q = $this->db->get_where('tb_man_ac',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}


	function getAll_manac(){
		$sql = 'select idmanac,lokasi,jam,tanggal,petugas,kondisi,merk,type,keterangan,status,insertedby,inserteddate,updatedby,updateddate
		from tb_man_ac order by inserteddate desc';
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


	function add_manac(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');
		$sql = 'insert into tb_man_ac(idmanac,lokasi,jam,tanggal,petugas,kondisi,merk,type,keterangan,status,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
		$this->db->query($sql,array(generate_uuid(),$_POST['lokasi'],$_POST['jam'],$_POST['tanggal'],$_POST['petugas'],$_POST['kondisi'],$_POST['merk'],$_POST['type'],$_POST['keterangan'],$_POST['status'],$username,$v_date,$username,$v_date));
	}


	function update_manac(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');
		$sql = 'update tb_man_ac set lokasi=?,jam=?,tanggal=?,petugas=?,kondisi=?,merk=?,type=?,keterangan=?,status=?,updatedby=?,updateddate=? where idmanac=? ';
		$this->db->query($sql,array($_POST['lokasi'],$_POST['jam'],$_POST['tanggal'],$_POST['petugas'],$_POST['kondisi'],$_POST['merk'],$_POST['type'],$_POST['keterangan'],$_POST['status'],$username,$v_date,$_POST['idmanac']));
	}


	function delete_manac(){
		$sql='delete from tb_man_ac where idmanac=?';
		$this->db->query($sql, array($_POST['idmanac']));
	}
}
?>
