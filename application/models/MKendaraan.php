<?php
class MKendaraan extends CI_Model{

	function __construct(){
		parent::__construct();
		$v_date = date("Y-m-d H:i:s");
		$config['upload_path'] = FCPATH.'upload/photos/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']    = '7000';
		$this->load->library('upload', $config);

	}

	function get_kendaraan($idkendaraan){
		$data = array();
		$options = array('idkendaraan' => $idkendaraan);
		$Q = $this->db->get_where('tb_kendaraan',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}


	function getAll_kendaraan(){
		$data = array();
		$this->db->select('*');
		$this->db->from('tb_kendaraan');
		$this->db->order_by('merk', 'ASC');
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			foreach ($Q->result_array() as $row){
				$data[] = $row;
			}
		}
		$Q-> free_result();
		return $data;
	}

	function getData_kendaraan(){
		$data = array();
		$this->db->select('idkendaraan');
		$this->db->select('CONCAT (nopolisi, " - " ,merk) as nopolisi');
		$this->db->from('tb_kendaraan');
		$this->db->order_by('merk', 'ASC');
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			foreach ($Q->result_array() as $row){
				$data[] = $row;
			}
		}
		$Q-> free_result();
		return $data;
	}

	function get_lov_kendaraan(){
		$data = array();
		$this->db->select('idkendaraan,nopajakstnk,nopolisi,merk,jenis,concat(nopolisi," - ",merk) as kendaraan');
		$this->db->from('tb_kendaraan');
		$this->db->where('ketersediaan','Aktif');
		$this->db->order_by('merk', 'ASC');
		$Q = $this->db->get();
		if ($Q->num_rows() > 0){
			foreach ($Q->result_array() as $row){
				$data[] = $row;
			}
		}
		$Q-> free_result();
		return $data;
	}


	function add_kendaraan(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');

		$filename=date("F j, Y, g:i:s a");
		if(isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])){
			if (!$this->upload->do_upload()){
				echo $this->upload->display_errors();
			}
			else{
				$filedata = $this->upload->data();
				$newfile = md5($filename).strtolower($filedata['file_ext']);
				$dest = $filedata['file_path'].$newfile;

				if(file_exists($dest)) unlink($dest);
				rename($filedata['full_path'],$dest);

				$sql = 'insert into tb_kendaraan(idkendaraan,nopajakstnk,nopolisi,namapemilik,alamat,merk,jenis,tahunrakitan,warnakb,isisilinder,norangka,nomesin,coding,nobpkb,bahanbakar,warnatnkb,berlakusd,photomobil,catatan,ketersediaan,insertedby,insertedat,updatedby,updatedat)  values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
				$this->db->query($sql, array(generate_uuid(),$_POST['nopajakstnk'],$_POST['nopolisi'],$_POST['namapemilik'],$_POST['alamat'],$_POST['merk'],$_POST['jenis'],$_POST['tahunrakitan'],$_POST['warnakb'],$_POST['isisilinder'],$_POST['norangka'],$_POST['nomesin'],$_POST['coding'],$_POST['nobpkb'],$_POST['bahanbakar'],$_POST['warnatnkb'],$_POST['berlakusd'],$newfile,$_POST['catatan'],$_POST['ketersediaan'],$username,$v_date,$username,$v_date));
			}
		}
	}

	function update_kendaraan(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');
		$filename=date("F j, Y, g:i:s a");
		if(isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])){
			if (!$this->upload->do_upload()){
				echo $this->upload->display_errors();
			}
			else{
				$filedata = $this->upload->data();
				$newfile = md5($filename).strtolower($filedata['file_ext']);
				$dest = $filedata['file_path'].$newfile;

				if(file_exists($dest)) unlink($dest);
				rename($filedata['full_path'],$dest);

				$dest = FCPATH.'/upload/pdfs/'.$_POST['filetemp'];
				if(file_exists($dest)) unlink($dest);
				$sql = 'update tb_kendaraan set nopajakstnk=?,nopolisi=?,namapemilik=?,alamat=?,merk=?,jenis=?,tahunrakitan=?,warnakb=?,isisilinder=?,norangka=?,nomesin=?,coding=?,nobpkb=?,bahanbakar=?,warnatnkb=?,berlakusd=?,photomobil=?,catatan=?,ketersediaan=?,updatedby=?,updatedat=? where idkendaraan=? ';
				$this->db->query($sql, array($_POST['nopajakstnk'],$_POST['nopolisi'],$_POST['namapemilik'],$_POST['alamat'],$_POST['merk'],$_POST['jenis'],$_POST['tahunrakitan'],$_POST['warnakb'],$_POST['isisilinder'],$_POST['norangka'],$_POST['nomesin'],$_POST['coding'],$_POST['nobpkb'],$_POST['bahanbakar'],$_POST['warnatnkb'],$_POST['berlakusd'],$newfile,$_POST['catatan'],$_POST['ketersediaan'],$username,$v_date,$_POST['idkendaraan']));
			}
		}
		else{
			$sql = 'update tb_kendaraan set nopajakstnk=?,nopolisi=?,namapemilik=?,alamat=?,merk=?,jenis=?,tahunrakitan=?,warnakb=?,isisilinder=?,norangka=?,nomesin=?,coding=?,nobpkb=?,bahanbakar=?,warnatnkb=?,berlakusd=?,catatan=?,ketersediaan=?,updatedby=?,updatedat=? where idkendaraan=? ';
			$this->db->query($sql, array($_POST['nopajakstnk'],$_POST['nopolisi'],$_POST['namapemilik'],$_POST['alamat'],$_POST['merk'],$_POST['jenis'],$_POST['tahunrakitan'],$_POST['warnakb'],$_POST['isisilinder'],$_POST['norangka'],$_POST['nomesin'],$_POST['coding'],$_POST['nobpkb'],$_POST['bahanbakar'],$_POST['warnatnkb'],$_POST['berlakusd'],$_POST['catatan'],$_POST['ketersediaan'],$username,$v_date,$_POST['idkendaraan']));
		}

  // $sql = 'update tb_konken set supir=?,tglterima=?,kondisi=?,ada1=?,ada2=?,ada3=?,ada4=?,ada5=?,ada6=?,ada7=?,ada8=?,ada9=?,ada10=?,ada11=?,ada12=?,ada13=?,ada14=?,ada15=?,ada16=?,ada17=?,ada18=?,ada19=?,ada20=?,ada21=?,ada22=?,ada23=?,ada24=?,ada25=?,ada26=?,ada27=?,ada28=?,ada29=?,ada30=?,ada31=?,ada32=?,ada33=?,ada34=?,ada35=?,ada36=?,ada37=?,ada38=?,ada39=?,ada40=?,ada41=?,ada42=?,ada43=?,ada44=?,ada45=?,ada46=?,ada47=?,ada48=?,ada49=?,ada50=?,ada51=?,ada52=?,ada53=?,ada54=?,ada55=?,ada56=?,ada57=?,ada58=?,ada59=?,ada60=?,ada61=?,ada62=?,ada63=?,ada64=?,barang1=?,barang2=?,barang3=?,barang4=?,barang5=?,barang6=?,barang7=?,barang8=?,barang9=?,barang10=?,barang11=?,barang12=?,barang13=?,barang14=?,barang15=?,barang16=?,barang17=?,barang18=?,barang19=?,barang20=?,barang21=?,barang22=?,barang23=?,barang24=?,barang25=?,barang26=?,barang27=?,barang28=?,barang29=?,barang30=?,barang31=?,barang32=?,barang33=?,barang34=?,barang35=?,barang36=?,barang37=?,barang38=?,barang39=?,barang40=?,barang41=?,barang42=?,barang43=?,barang44=?,barang45=?,barang46=?,barang47=?,barang48=?,barang49=?,barang50=?,barang51=?,barang52=?,barang53=?,barang54=?,barang55=?,barang56=?,barang57=?,barang58=?,barang59=?,barang60=?,barang61=?,barang62=?,barang63=?,barang64=?,updatedby=?,updateddate=? where idkendaraan=? ';
// $this->db->query($sql, array($_POST['supir'],$_POST['tglterima'],$_POST['kondisi'],$_POST['ada1'],$_POST['ada2'],$_POST['ada3'],$_POST['ada4'],$_POST['ada5'],$_POST['ada6'],$_POST['ada7'],$_POST['ada8'],$_POST['ada9'],$_POST['ada10'],$_POST['ada11'],$_POST['ada12'],$_POST['ada13'],$_POST['ada14'],$_POST['ada15'],$_POST['ada16'],$_POST['ada17'],$_POST['ada18'],$_POST['ada19'],$_POST['ada20'],$_POST['ada21'],$_POST['ada22'],$_POST['ada23'],$_POST['ada24'],$_POST['ada25'],$_POST['ada26'],$_POST['ada27'],$_POST['ada28'],$_POST['ada29'],$_POST['ada30'],$_POST['ada31'],$_POST['ada32'],$_POST['ada33'],$_POST['ada34'],$_POST['ada35'],$_POST['ada36'],$_POST['ada37'],$_POST['ada38'],$_POST['ada39'],$_POST['ada40'],$_POST['ada41'],$_POST['ada42'],$_POST['ada43'],$_POST['ada44'],$_POST['ada45'],$_POST['ada46'],$_POST['ada47'],$_POST['ada48'],$_POST['ada49'],$_POST['ada50'],$_POST['ada51'],$_POST['ada52'],$_POST['ada53'],$_POST['ada54'],$_POST['ada55'],$_POST['ada56'],$_POST['ada57'],$_POST['ada58'],$_POST['ada59'],$_POST['ada60'],$_POST['ada61'],$_POST['ada62'],$_POST['ada63'],$_POST['ada64'],$_POST['barang1'],$_POST['barang2'],$_POST['barang3'],$_POST['barang4'],$_POST['barang5'],$_POST['barang6'],$_POST['barang7'],$_POST['barang8'],$_POST['barang9'],$_POST['barang10'],$_POST['barang11'],$_POST['barang12'],$_POST['barang13'],$_POST['barang14'],$_POST['barang15'],$_POST['barang16'],$_POST['barang17'],$_POST['barang18'],$_POST['barang19'],$_POST['barang20'],$_POST['barang21'],$_POST['barang22'],$_POST['barang23'],$_POST['barang24'],$_POST['barang25'],$_POST['barang26'],$_POST['barang27'],$_POST['barang28'],$_POST['barang29'],$_POST['barang30'],$_POST['barang31'],$_POST['barang32'],$_POST['barang33'],$_POST['barang34'],$_POST['barang35'],$_POST['barang36'],$_POST['barang37'],$_POST['barang38'],$_POST['barang39'],$_POST['barang40'],$_POST['barang41'],$_POST['barang42'],$_POST['barang43'],$_POST['barang44'],$_POST['barang45'],$_POST['barang46'],$_POST['barang47'],$_POST['barang48'],$_POST['barang49'],$_POST['barang50'],$_POST['barang51'],$_POST['barang52'],$_POST['barang53'],$_POST['barang54'],$_POST['barang55'],$_POST['barang56'],$_POST['barang57'],$_POST['barang58'],$_POST['barang59'],$_POST['barang60'],$_POST['barang61'],$_POST['barang62'],$_POST['barang63'],$_POST['barang64'],$username,$v_date,$_POST['idkendaraan']));
		$sql = 'update tb_konken set supir=?,tglterima=?,kondisi=? where idkendaraan=? ';
		$this->db->query($sql, array($_POST['supir'],$_POST['tglterima'],$_POST['kondisi'],$_POST['idkendaraan']));
	}


	function delete_kendaraan(){
		$dest = FCPATH.'upload/photos/'.$_POST['filetemp'];
		if(file_exists($dest)) unlink($dest);

		$sql='delete from tb_kendaraan where idkendaraan=?';
		$this->db->query($sql, array($_POST['idkendaraan']));
	}
}
?>
