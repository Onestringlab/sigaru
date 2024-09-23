<?php
class MUser extends CI_Model{
function __construct(){
	parent::__construct();
	$v_date = date("Y-m-d H:i:s");
}


function get_user($iduser){
	$data = array();
	$options = array('iduser' => $iduser);
	$Q = $this->db->get_where('tb_user',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
	$Q->free_result();
	return $data;
}


function getAll_user(){
    $data = array();
	$this->db->select('*');
    $this->db->from('tb_user');
	$Q = $this->db-> get();
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$data[] = $row;
		}
	}
	$Q-> free_result();
	return $data;
}


function add_user(){
	$v_date = date('Y-m-d H:i:s');
	$username = $this->session-> userdata('username');
    //$username = 'rionorman';
	$sql = 'insert into tb_user(iduser,username,nama,prodi,email,password,role,status,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?,?,?,?)';
	$this->db->query($sql, array(generate_uuid(),$_POST['username'],$_POST['nama'],$_POST['prodi'],$_POST['email'],MD5($_POST['password']),$_POST['role'],$_POST['status'],$username,$v_date,$username,$v_date));
}


function update_user(){
	$v_date = date('Y-m-d H:i:s');
    $username = $this->session-> userdata('username');
    //$username = 'rionorman';
    
    if ($_POST['password']!=""){
		$sql = 'update tb_user set username=?,nama=?,prodi=?,email=?,password=?,role=?,status=?,updatedby=?,updateddate=? where iduser=? ';
		$this->db->query($sql, array($_POST['username'],$_POST['nama'],$_POST['prodi'], $_POST['email'],MD5($_POST['password']),$_POST['role'],$_POST['status'],$username,$v_date,$_POST['iduser']));
	}else{
		$sql = 'update tb_user set username=?,nama=?,prodi=?,email=?,role=?,status=?, updatedby=?,updateddate=? where iduser=? ';
		$this->db->query($sql, array($_POST['username'],$_POST['nama'],$_POST['prodi'],$_POST['email'],$_POST['role'],$_POST['status'],$username,$v_date,$_POST['iduser']));
	}
}


function delete_user(){
	$sql='delete from tb_user where iduser=?';
	$this->db->query($sql, array($_POST['iduser']));
}
function check_username(){
	$valid=0;
	$sql = "select iduser,role, nama, username,prodi,email, password from tb_user where username=? and password=? and status=?";
	$Q =$this->db->query($sql, array($_POST['username'],md5($_POST['password']),'Aktif'));
	if ($Q->num_rows() > 0){
		foreach ($Q->result_array() as $row){
			$this->session->set_userdata('iduser',$row['iduser']);
			$this->session->set_userdata('username',$row['username']);
			$this->session->set_userdata('name',$row['nama']);
            $this->session->set_userdata('bagian',$row['prodi']);
			$this->session->set_userdata('role',$row['role']);
		}
		$valid=1;
	}
	$Q-> free_result();
	return $valid;
}    
    
    
}
?>
