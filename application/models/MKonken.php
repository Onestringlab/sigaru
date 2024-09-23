<?php
class MKonken extends CI_Model{
	function __construct(){
		parent::__construct();
		$v_date = date("Y-m-d H:i:s");
	}


	function get_konken($id){
		$data = array();
		$options = array('idstatuskend' => $id);
		$Q = $this->db->get_where('tb_konken',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}

	function get_kendaraan($idkendaraan){
		$data = array();
		$options = array('idkendaraan' => $idkendaraan);
		$Q = $this->db->get_where('tb_konken',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}


	function getAll_konken(){
		$sql = 'select idstatuskend,idkendaraan,supir,tglterima,kondisi,barang1,barang2,barang3,barang4,barang5,barang6,barang7,barang8,barang9,barang10,barang11,barang12,barang13,barang14,barang15,barang16,barang17,barang18,barang19,barang20,barang21,barang22,barang23,barang24,barang25,barang26,barang27,barang28,barang29,barang30,barang31,barang32,barang33,barang34,barang35,barang36,barang37,barang38,barang39,barang40,barang41,barang42,barang43,barang44,barang45,barang46,barang47,barang48,barang49,barang50,barang51,barang52,barang53,barang54,barang55,barang56,barang57,barang58,barang59,barang60,barang61,barang62,barang63,barang64,insertedby,inserteddate,updatedby,updateddate
		from tb_konken';
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


	function add_konken(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');
		$sql = 'insert into tb_konken(idstatuskend,idkendaraan,supir,tglterima,kondisi,barang1,barang2,barang3,barang4,barang5,barang6,barang7,barang8,barang9,barang10,barang11,barang12,barang13,barang14,barang15,barang16,barang17,barang18,barang19,barang20,barang21,barang22,barang23,barang24,barang25,barang26,barang27,barang28,barang29,barang30,barang31,barang32,barang33,barang34,barang35,barang36,barang37,barang38,barang39,barang40,barang41,barang42,barang43,barang44,barang45,barang46,barang47,barang48,barang49,barang50,barang51,barang52,barang53,barang54,barang55,barang56,barang57,barang58,barang59,barang60,barang61,barang62,barang63,barang64,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
		$this->db->query($sql, array($_POST['idstatuskend'],$_POST['idkendaraan'],$_POST['supir'],$_POST['tglterima'],$_POST['kondisi'],$_POST['barang1'],$_POST['barang2'],$_POST['barang3'],$_POST['barang4'],$_POST['barang5'],$_POST['barang6'],$_POST['barang7'],$_POST['barang8'],$_POST['barang9'],$_POST['barang10'],$_POST['barang11'],$_POST['barang12'],$_POST['barang13'],$_POST['barang14'],$_POST['barang15'],$_POST['barang16'],$_POST['barang17'],$_POST['barang18'],$_POST['barang19'],$_POST['barang20'],$_POST['barang21'],$_POST['barang22'],$_POST['barang23'],$_POST['barang24'],$_POST['barang25'],$_POST['barang26'],$_POST['barang27'],$_POST['barang28'],$_POST['barang29'],$_POST['barang30'],$_POST['barang31'],$_POST['barang32'],$_POST['barang33'],$_POST['barang34'],$_POST['barang35'],$_POST['barang36'],$_POST['barang37'],$_POST['barang38'],$_POST['barang39'],$_POST['barang40'],$_POST['barang41'],$_POST['barang42'],$_POST['barang43'],$_POST['barang44'],$_POST['barang45'],$_POST['barang46'],$_POST['barang47'],$_POST['barang48'],$_POST['barang49'],$_POST['barang50'],$_POST['barang51'],$_POST['barang52'],$_POST['barang53'],$_POST['barang54'],$_POST['barang55'],$_POST['barang56'],$_POST['barang57'],$_POST['barang58'],$_POST['barang59'],$_POST['barang60'],$_POST['barang61'],$_POST['barang62'],$_POST['barang63'],$_POST['barang64'],$_POST['insertedby'],$_POST['inserteddate'],$_POST['updatedby'],$_POST['updateddate']));
	}


	function update_konken(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');
		$sql = 'update tb_konken set supir=?,tglterima=?,kondisi=?,barang1=?,barang2=?,barang3=?,barang4=?,barang5=?,barang6=?,barang7=?,barang8=?,barang9=?,barang10=?,barang11=?,barang12=?,barang13=?,barang14=?,barang15=?,barang16=?,barang17=?,barang18=?,barang19=?,barang20=?,barang21=?,barang22=?,barang23=?,barang24=?,barang25=?,barang26=?,barang27=?,barang28=?,barang29=?,barang30=?,barang31=?,barang32=?,barang33=?,barang34=?,barang35=?,barang36=?,barang37=?,barang38=?,barang39=?,barang40=?,barang41=?,barang42=?,barang43=?,barang44=?,barang45=?,barang46=?,barang47=?,barang48=?,barang49=?,barang50=?,barang51=?,barang52=?,barang53=?,barang54=?,barang55=?,barang56=?,barang57=?,barang58=?,barang59=?,barang60=?,barang61=?,barang62=?,barang63=?,barang64=?,insertedby=?,inserteddate=?,updatedby=?,updateddate=? where idstatuskend=? ';
		$this->db->query($sql, array($_POST['supir'],$_POST['tglterima'],$_POST['kondisi'],$_POST['barang1'],$_POST['barang2'],$_POST['barang3'],$_POST['barang4'],$_POST['barang5'],$_POST['barang6'],$_POST['barang7'],$_POST['barang8'],$_POST['barang9'],$_POST['barang10'],$_POST['barang11'],$_POST['barang12'],$_POST['barang13'],$_POST['barang14'],$_POST['barang15'],$_POST['barang16'],$_POST['barang17'],$_POST['barang18'],$_POST['barang19'],$_POST['barang20'],$_POST['barang21'],$_POST['barang22'],$_POST['barang23'],$_POST['barang24'],$_POST['barang25'],$_POST['barang26'],$_POST['barang27'],$_POST['barang28'],$_POST['barang29'],$_POST['barang30'],$_POST['barang31'],$_POST['barang32'],$_POST['barang33'],$_POST['barang34'],$_POST['barang35'],$_POST['barang36'],$_POST['barang37'],$_POST['barang38'],$_POST['barang39'],$_POST['barang40'],$_POST['barang41'],$_POST['barang42'],$_POST['barang43'],$_POST['barang44'],$_POST['barang45'],$_POST['barang46'],$_POST['barang47'],$_POST['barang48'],$_POST['barang49'],$_POST['barang50'],$_POST['barang51'],$_POST['barang52'],$_POST['barang53'],$_POST['barang54'],$_POST['barang55'],$_POST['barang56'],$_POST['barang57'],$_POST['barang58'],$_POST['barang59'],$_POST['barang60'],$_POST['barang61'],$_POST['barang62'],$_POST['barang63'],$_POST['barang64'],$_POST['insertedby'],$_POST['inserteddate'],$_POST['updatedby'],$_POST['updateddate'],$_POST['idstatuskend']));
	}


	function delete_konken(){
		$sql='delete from tb_konken where id=?';
		$this->db->query($sql, array($_POST['id']));
	}
}
?>
