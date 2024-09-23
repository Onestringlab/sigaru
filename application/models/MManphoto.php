<?php
class MManphoto extends CI_Model{
	function __construct(){
		parent::__construct();
		$v_date = date("Y-m-d H:i:s");
		$config['upload_path'] = FCPATH.'upload/photos/';
	  $config['allowed_types'] = 'jpg|png|jpeg';
	  $config['max_size']     = '0';
	  $config['maintain_ratio'] = TRUE;
	  $config['width']        = 800;
	  $this->load->library('upload', $config);
	}


	function get_manphoto($idmanphoto){
		$data = array();
		$options = array('idmanphoto' => $idmanphoto);
		$Q = $this->db->get_where('tb_man_photo',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}


	function getAll_manphoto(){
		$sql = 'select idmanphoto,idman,photo,judul,kategori,insertedby,inserteddate,updatedby,updateddate
		from tb_man_photo';
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

	function get_photo($idman,$kategori){
		$sql = 'select idmanphoto,idman,photo,judul,kategori,insertedby,inserteddate,updatedby,updateddate from tb_man_photo where idman = \'' . $idman . '\'and kategori = \'' . $kategori . '\'';
		// echo $sql;
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

	function add_manphoto(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');
		$filename=date("F j, Y, g:i:s a");
	  if(isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])){
	    if (!$this->upload->do_upload()){
	      echo $this->upload->display_errors();
	    } else{
	      $filedata = $this->upload->data();
	      $newfile = md5($filename).strtolower($filedata['file_ext']);
	      $dest = $filedata['file_path'].$newfile;
	      if(file_exists($dest)) unlink($dest);
	      rename($filedata['full_path'],$dest);

	      // reduce image
	      $config['image_library'] = 'gd2';
	      $config['source_image'] = FCPATH.'/upload/photos/'.$newfile;
	      $config['maintain_ratio'] = TRUE;
	      $config['quality'] = '50%';
	      $config['width'] = 1200;
	      $config['new_image'] = FCPATH.'/upload/photos/'.$newfile;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
	    }
	  }
		$sql = 'insert into tb_man_photo(idmanphoto,idman,photo,judul,kategori,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?)';
		$this->db->query($sql, array(generate_uuid(),$_POST['idman'],$newfile,$_POST['judul'],$_POST['kategori'],$username,$v_date,$username,$v_date));
	}


	function update_manphoto(){
		$v_date = date('Y-m-d H:i:s');
		$username = $this->session-> userdata('username');
		$filename = date("F j, Y, g:i:s a");
	  $newfile = $_POST['filetemp'];
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

	      $dest = FCPATH.'/upload/photos/'.$_POST['filetemp'];
	      if(file_exists($dest)) unlink($dest);

	      $config['image_library'] = 'gd2';
	      $config['source_image'] = FCPATH.'/upload/photos/'.$newfile;
	      $config['maintain_ratio'] = TRUE;
	      $config['quality'] = '50%';
	      $config['width'] = 1200;
	      $config['new_image'] = FCPATH.'/upload/photos/'.$newfile;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
	    }
	  }

		$sql = 'update tb_man_photo set idmanphoto=?,idman=?,photo=?,judul=?,kategori=?,updatedby=?,updateddate=? where idmanphoto=? ';
		$this->db->query($sql, array($_POST['idmanphoto'],$_POST['idman'],$newfile,$_POST['judul'],$_POST['kategori'],$username,$v_date,$_POST['idmanphoto']));
	}

	function delete_manphoto(){
		$sql='delete from tb_man_photo where idmanphoto=?';
		$this->db->query($sql, array($_POST['idmanphoto']));
	}
}
?>
