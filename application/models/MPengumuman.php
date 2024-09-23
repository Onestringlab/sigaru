<?php
class MPengumuman extends CI_Model{
	function __construct(){
		parent::__construct();
		$v_date = date("Y-m-d H:i:s");
	}


	function get_pengumuman($id){
		$data = array();
		$options = array('idpengumuman' => $id);
		$Q = $this->db->get_where('tb_pengumuman',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}


	function getAll_pengumuman(){
		$sql = 'select idpengumuman,tanggal,pengumuman,status,insertedby,inserteddate,updatedby,updateddate
		from tb_pengumuman';
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

	function add_pengumuman(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');
		$sql = 'insert into tb_pengumuman(idpengumuman,tanggal,pengumuman,status,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?)';
		$this->db->query($sql, array(generate_uuid(),$_POST['tanggal'],$_POST['pengumuman'],$_POST['status'],$username,$v_date,$username,$v_date));
	}


	function update_pengumuman(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');
		$sql = 'update tb_pengumuman set tanggal=?,pengumuman=?,status=?,updatedby=?,updateddate=? where idpengumuman=? ';
		$this->db->query($sql, array($_POST['tanggal'],$_POST['pengumuman'],$_POST['status'],$username,$v_date,$_POST['idpengumuman']));
	}


	function delete_pengumuman(){
		$sql='delete from tb_pengumuman where idpengumuman=?';
		$this->db->query($sql, array($_POST['idpengumuman']));
	}

	function getAktif_pengumuman(){
		$sql = 'select tanggal,pengumuman,status from tb_pengumuman where status = \'Aktif\'';
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
