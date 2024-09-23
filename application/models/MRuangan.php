<?php
class MRuangan extends CI_Model{
function __construct(){
  parent::__construct();
  $v_date = date("Y-m-d H:i:s");
  $config['upload_path'] = FCPATH.'upload/photos/';
  $config['allowed_types'] = 'jpg|png';
  $config['max_size']    = '7000';
  $this->load->library('upload', $config);

}


function get_ruangan($idruangan){
  $data = array();
  $options = array('idruangan' => $idruangan);
  $Q = $this->db->get_where('tb_ruangan ',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }
  $Q->free_result();
  return $data;
}


function getAll_ruangan(){
    $this->db->select('*');
    $this->db->from('tb_ruangan');
  $data = array();
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data;
}

function get_lov_ruangan(){
    $this->db->select('idruangan,noruangan,namaruangan,concat(noruangan,"-",namaruangan) as nonamaruang');
    $this->db->from('tb_ruangan');
    $this->db->order_by('noruangan', 'ASC');
    $data = array();
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data;
}


function add_ruangan(){
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
      $sql = 'insert into tb_ruangan (idruangan,noruangan,namaruangan,gedung,lantai,kapasitas,panjang,lebar,photo,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?,?,?,?,?)';
            $this->db->query($sql, array(generate_uuid(),$_POST['noruangan'],$_POST['namaruangan'],$_POST['gedung'],$_POST['lantai'],$_POST['kapasitas'],$_POST['panjang'],$_POST['lebar'],$newfile,$username,$v_date,$username,$v_date));
        }
    }else{
      $sql = 'insert into tb_ruangan (idruangan,noruangan,namaruangan,gedung,lantai,kapasitas,panjang,lebar,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?,?,?,?)';
            $this->db->query($sql, array(generate_uuid(),$_POST['noruangan'],$_POST['namaruangan'],$_POST['gedung'],$_POST['lantai'],$_POST['kapasitas'],$_POST['panjang'],$_POST['lebar'],$username,$v_date,$username,$v_date));

    }
}


function update_ruangan(){
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

      $dest = FCPATH.'/upload/photos/'.$_POST['filetemp'];
      if(file_exists($dest)) unlink($dest);

      $sql = 'update tb_ruangan  set noruangan=?,namaruangan=?,gedung=?,lantai=?,kapasitas=?,panjang=?,lebar=?,photo=?,updatedby=?,updateddate=? where idruangan=? ';
      $this->db->query($sql, array($_POST['noruangan'],$_POST['namaruangan'],$_POST['gedung'],$_POST['lantai'],$_POST['kapasitas'],$_POST['panjang'],$_POST['lebar'],$newfile,$username,$v_date,$_POST['idruangan']));
    }
  }else{
    $sql = 'update tb_ruangan  set noruangan=?,namaruangan=?,gedung=?,lantai=?,kapasitas=?,panjang=?,lebar=?,updatedby=?,updateddate=? where idruangan=? ';
    $this->db->query($sql, array($_POST['noruangan'],$_POST['namaruangan'],$_POST['gedung'],$_POST['lantai'],$_POST['kapasitas'],$_POST['panjang'],$_POST['lebar'],$username,$v_date,$_POST['idruangan']));

  }
}


function delete_ruangan(){
  $dest = FCPATH.'upload/photos/'.$_POST['filetemp'];
  if(file_exists($dest)) unlink($dest);

  $sql='delete from tb_ruangan  where idruangan=?';
  $this->db->query($sql, array($_POST['idruangan']));
}
}
?>
