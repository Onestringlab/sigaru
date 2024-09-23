<?php
class MManmobil extends CI_Model{
	function __construct(){
		parent::__construct();
		$v_date = date("Y-m-d H:i:s");
	}


	function get_manmobil($idmanmobil){
		$data = array();
		$options = array('idmanmobil' => $idmanmobil);
		$Q = $this->db->get_where('tb_man_mobil',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}


	function getAll_manmobil(){
		$sql = 'select idmanmobil,a.idkendaraan,nopolisi,merk,jenis,tanggal,mob_1,mok_1,mob_2,mok_2,mob_3,mok_3,mob_4,mok_4,mob_5,mok_5,mob_6,mok_6,mob_7a,mok_7a,mob_7b,mok_7b,mob_7c,mok_7c,mob_7d,mok_7d,mob_8,mok_8,mob_9,mok_9,mob_10,mok_10,mob_11,mok_11,mob_12,mok_12,mob_13,mok_13,mob_14,mok_14,mob_15,mok_15,mob_16,mok_16,mob_17,mok_17,mob_18,mok_18,mob_19,mok_19,mob_20a,mok_20a,mob_20b,mok_20b,mob_20c,mok_20c,mob_20d,mok_20d,mob_21,mok_21,keterangan,rencana,tandatangan,a.insertedby,a.inserteddate,a.updatedby,a.updateddate from tb_man_mobil a INNER JOIN tb_kendaraan b ON a.idkendaraan=b.idkendaraan;';
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


	function add_manmobil(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');
		$sql = 'insert into tb_man_mobil(idmanmobil,idkendaraan,tanggal,mob_1,mok_1,mob_2,mok_2,mob_3,mok_3,mob_4,mok_4,mob_5,mok_5,mob_6,mok_6,mob_7a,mok_7a,mob_7b,mok_7b,mob_7c,mok_7c,mob_7d,mok_7d,mob_8,mok_8,mob_9,mok_9,mob_10,mok_10,mob_11,mok_11,mob_12,mok_12,mob_13,mok_13,mob_14,mok_14,mob_15,mok_15,mob_16,mok_16,mob_17,mok_17,mob_18,mok_18,mob_19,mok_19,mob_20a,mok_20a,mob_20b,mok_20b,mob_20c,mok_20c,mob_20d,mok_20d,mob_21,mok_21,keterangan,rencana,tandatangan,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
		$this->db->query($sql, array(generate_uuid(),$_POST['idkendaraan'],$_POST['tanggal'],$_POST['mob_1'],$_POST['mok_1'],$_POST['mob_2'],$_POST['mok_2'],$_POST['mob_3'],$_POST['mok_3'],$_POST['mob_4'],$_POST['mok_4'],$_POST['mob_5'],$_POST['mok_5'],$_POST['mob_6'],$_POST['mok_6'],$_POST['mob_7a'],$_POST['mok_7a'],$_POST['mob_7b'],$_POST['mok_7b'],$_POST['mob_7c'],$_POST['mok_7c'],$_POST['mob_7d'],$_POST['mok_7d'],$_POST['mob_8'],$_POST['mok_8'],$_POST['mob_9'],$_POST['mok_9'],$_POST['mob_10'],$_POST['mok_10'],$_POST['mob_11'],$_POST['mok_11'],$_POST['mob_12'],$_POST['mok_12'],$_POST['mob_13'],$_POST['mok_13'],$_POST['mob_14'],$_POST['mok_14'],$_POST['mob_15'],$_POST['mok_15'],$_POST['mob_16'],$_POST['mok_16'],$_POST['mob_17'],$_POST['mok_17'],$_POST['mob_18'],$_POST['mok_18'],$_POST['mob_19'],$_POST['mok_19'],$_POST['mob_20a'],$_POST['mok_20a'],$_POST['mob_20b'],$_POST['mok_20b'],$_POST['mob_20c'],$_POST['mok_20c'],$_POST['mob_20d'],$_POST['mok_20d'],$_POST['mob_21'],$_POST['mok_21'],$_POST['keterangan'],$_POST['rencana'],$_POST['tandatangan'],$username,$v_date,$username,$v_date));
	}


	function update_manmobil(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');
		$sql = 'update tb_man_mobil set idkendaraan=?,tanggal=?,mob_1=?,mok_1=?,mob_2=?,mok_2=?,mob_3=?,mok_3=?,mob_4=?,mok_4=?,mob_5=?,mok_5=?,mob_6=?,mok_6=?,mob_7a=?,mok_7a=?,mob_7b=?,mok_7b=?,mob_7c=?,mok_7c=?,mob_7d=?,mok_7d=?,mob_8=?,mok_8=?,mob_9=?,mok_9=?,mob_10=?,mok_10=?,mob_11=?,mok_11=?,mob_12=?,mok_12=?,mob_13=?,mok_13=?,mob_14=?,mok_14=?,mob_15=?,mok_15=?,mob_16=?,mok_16=?,mob_17=?,mok_17=?,mob_18=?,mok_18=?,mob_19=?,mok_19=?,mob_20a=?,mok_20a=?,mob_20b=?,mok_20b=?,mob_20c=?,mok_20c=?,mob_20d=?,mok_20d=?,mob_21=?,mok_21=?,keterangan=?,rencana=?,tandatangan=?,updatedby=?,updateddate=? where idmanmobil=? ';
		$this->db->query($sql, array($_POST['idkendaraan'],$_POST['tanggal'],$_POST['mob_1'],$_POST['mok_1'],$_POST['mob_2'],$_POST['mok_2'],$_POST['mob_3'],$_POST['mok_3'],$_POST['mob_4'],$_POST['mok_4'],$_POST['mob_5'],$_POST['mok_5'],$_POST['mob_6'],$_POST['mok_6'],$_POST['mob_7a'],$_POST['mok_7a'],$_POST['mob_7b'],$_POST['mok_7b'],$_POST['mob_7c'],$_POST['mok_7c'],$_POST['mob_7d'],$_POST['mok_7d'],$_POST['mob_8'],$_POST['mok_8'],$_POST['mob_9'],$_POST['mok_9'],$_POST['mob_10'],$_POST['mok_10'],$_POST['mob_11'],$_POST['mok_11'],$_POST['mob_12'],$_POST['mok_12'],$_POST['mob_13'],$_POST['mok_13'],$_POST['mob_14'],$_POST['mok_14'],$_POST['mob_15'],$_POST['mok_15'],$_POST['mob_16'],$_POST['mok_16'],$_POST['mob_17'],$_POST['mok_17'],$_POST['mob_18'],$_POST['mok_18'],$_POST['mob_19'],$_POST['mok_19'],$_POST['mob_20a'],$_POST['mok_20a'],$_POST['mob_20b'],$_POST['mok_20b'],$_POST['mob_20c'],$_POST['mok_20c'],$_POST['mob_20d'],$_POST['mok_20d'],$_POST['mob_21'],$_POST['mok_21'],$_POST['keterangan'],$_POST['rencana'],$_POST['tandatangan'],$username,$v_date,$_POST['idmanmobil']));
	}


	function delete_manmobil(){
		$sql='delete from tb_man_mobil where idmanmobil=?';
		$this->db->query($sql, array($_POST['idmanmobil']));
	}
}
?>
