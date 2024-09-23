<?php
class MKerusakan extends CI_Model{
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


function get_kerusakan($idkerusakan){
  $data = array();
  $options = array('idkerusakan' => $idkerusakan);
  $Q = $this->db->get_where('tb_kerusakan',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }
  $Q->free_result();
  return $data;
}

function get_kerusakan_status($status){
  $data = array();
  $tanggal = date('Y-m-d',strtotime('-7 days'));
  $this->db->select('*');
  $this->db->from('tb_kerusakan');
  $this->db->where('status =',$status);
  if($status == "Telah Diperbaiki"){
    $this->db->where('tglpelaporan >=',$tanggal);
  }
  $this->db->order_by('tglpelaporan','ASC');
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q->free_result();
  return $data;
}


function getAll_kerusakan(){
  $tanggal = date('Y-m-d',strtotime('-365 days'));
  $this->db->select('*');
  $this->db->from('tb_kerusakan');
  // $this->db->where('tglpelaporan >=',$tanggal);
  $this->db->order_by('tglpelaporan','DESC');
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

function getUpdate_kerusakan(){
  $tanggal = date('Y-m-d',strtotime('-180 days'));
  $this->db->select('*');
  $this->db->from('tb_kerusakan');
  $this->db->where('tglpelaporan >=',$tanggal);
  $this->db->where('status !=','Telah Diperbaiki');
  $this->db->order_by('tglpelaporan','ASC');
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

function get_data_kerusakan(){
  $this->db->select('*');
  $this->db->from('tb_kerusakan');
  $this->db->where('status !=','Telah Diperbaiki');
  $this->db->order_by('tglpelaporan','ASC');
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

function update_sequence($kategori){
  $sql = 'update tb_sequence set angka = angka + 1 where kategori = ?';
  $this->db->query($sql,array($kategori));
}

function get_sequence($kategori){
  $this->update_sequence($kategori);
  $this->db->select('angka');
  $this->db->from('tb_sequence');
  $this->db->where('kategori =',$kategori);

  $data = array();
  $Q = $this->db->get();
  if ($Q->num_rows() > 0){
    foreach ($Q->result_array() as $row){
      $data[] = $row;
    }
  }
  $Q-> free_result();
  return $data[0]['angka'];
}

function add_kerusakan(){
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
    }
  }
  $nolaporan = $this->get_sequence('kerusakan');
  $nolaporan = $nolaporan . '-FM.KBA.PLKP';
  if(isset($_POST['tglpenerima']) && $_POST['tglpenerima'] != null){
    $sql = 'insert into tb_kerusakan(idkerusakan,nolaporan,tglpelaporan,pelapor,nbmpelapor,namaruang,noruang,lantai,jnsfasilitas,projektor,kabelvga,ac,lampu,kipasangin,kursi,meja,kuncipintu,lemari,uraiankerusakan,photokerusakan,tglperbaikan,uraianperbaikan,perbaikanoleh,tglpenerima,namapenerima,nbmpenerierima,status,insertedby,insertedat,updatedby,updatedat)  values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $this->db->query($sql, array(generate_uuid(),$nolaporan,$_POST['tglpelaporan'],$_POST['pelapor'],$_POST['nbmpelapor'],$_POST['namaruang'],$_POST['noruang'],$_POST['lantai'],$_POST['jnsfasilitas'],$_POST['projektor'],$_POST['kabelvga'],$_POST['ac'],$_POST['lampu'],$_POST['kipasangin'],$_POST['kursi'],$_POST['meja'],$_POST['kuncipintu'],$_POST['lemari'],$_POST['uraiankerusakan'],$newfile,$_POST['tglperbaikan'],$_POST['uraianperbaikan'],$_POST['perbaikanoleh'],$_POST['tglpenerima'],$_POST['namapenerima'],$_POST['nbmpenerierima'],$_POST['status'],$username,$v_date,$username,$v_date));
  } else{
    $sql = 'insert into tb_kerusakan(idkerusakan,nolaporan,tglpelaporan,pelapor,nbmpelapor,namaruang,noruang,lantai,jnsfasilitas,projektor,kabelvga,ac,lampu,kipasangin,kursi,meja,kuncipintu,lemari,uraiankerusakan,photokerusakan,status,insertedby,insertedat,updatedby,updatedat)  values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $this->db->query($sql, array(generate_uuid(),$nolaporan,$_POST['tglpelaporan'],$_POST['pelapor'],$_POST['nbmpelapor'],$_POST['namaruang'],$_POST['noruang'],$_POST['lantai'],$_POST['jnsfasilitas'],$_POST['projektor'],$_POST['kabelvga'],$_POST['ac'],$_POST['lampu'],$_POST['kipasangin'],$_POST['kursi'],$_POST['meja'],$_POST['kuncipintu'],$_POST['lemari'],$_POST['uraiankerusakan'],$newfile,$_POST['status'],$username,$v_date,$username,$v_date));
  }
}

function update_kerusakan(){
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

      // $this->imageResize800($newfile);
    }
  }

  if(isset($_POST['tglpenerima']) && $_POST['tglpenerima'] != null){
    $sql = 'update tb_kerusakan set tglpelaporan=?,pelapor=?,nbmpelapor=?,namaruang=?,noruang=?,lantai=?,jnsfasilitas=?,projektor=?,kabelvga=?,ac=?,lampu=?,kipasangin=?,kursi=?,meja=?,kuncipintu=?,lemari=?,uraiankerusakan=?,photokerusakan=?,tglperbaikan=?,uraianperbaikan=?,perbaikanoleh=?,tglpenerima=?,namapenerima=?,nbmpenerierima=?,status=?,updatedby=?,updatedat=? where idkerusakan=? ';
    $this->db->query($sql, array($_POST['tglpelaporan'],$_POST['pelapor'],$_POST['nbmpelapor'],$_POST['namaruang'],$_POST['noruang'],$_POST['lantai'],$_POST['jnsfasilitas'],$_POST['projektor'],$_POST['kabelvga'],$_POST['ac'],$_POST['lampu'],$_POST['kipasangin'],$_POST['kursi'],$_POST['meja'],$_POST['kuncipintu'],$_POST['lemari'],$_POST['uraiankerusakan'],$newfile,$_POST['tglperbaikan'],$_POST['uraianperbaikan'],$_POST['perbaikanoleh'],$_POST['tglpenerima'],$_POST['namapenerima'],$_POST['nbmpenerierima'],$_POST['status'],$username,$v_date,$_POST['idkerusakan']));
  }else{
    $sql = 'update tb_kerusakan set tglpelaporan=?,pelapor=?,nbmpelapor=?,namaruang=?,noruang=?,lantai=?,jnsfasilitas=?,projektor=?,kabelvga=?,ac=?,lampu=?,kipasangin=?,kursi=?,meja=?,kuncipintu=?,lemari=?,uraiankerusakan=?,photokerusakan=?,status=?,updatedby=?,updatedat=? where idkerusakan=? ';
    $this->db->query($sql, array($_POST['tglpelaporan'],$_POST['pelapor'],$_POST['nbmpelapor'],$_POST['namaruang'],$_POST['noruang'],$_POST['lantai'],$_POST['jnsfasilitas'],$_POST['projektor'],$_POST['kabelvga'],$_POST['ac'],$_POST['lampu'],$_POST['kipasangin'],$_POST['kursi'],$_POST['meja'],$_POST['kuncipintu'],$_POST['lemari'],$_POST['uraiankerusakan'],$newfile,$_POST['status'],$username,$v_date,$_POST['idkerusakan']));
  }
}

function delete_kerusakan(){
  $dest = FCPATH.'upload/photos/'.$_POST['filetemp'];
  if(file_exists($dest)) unlink($dest);
  $sql='delete from tb_kerusakan where idkerusakan=?';
  $this->db->query($sql, array($_POST['idkerusakan']));
}

function imageResize800($imgName){
  $img_path =  FCPATH.'/upload/photos/'.$imgName;

  // Configuration
  $config['image_library'] = 'gd2';
  $config['source_image'] = './upload/photos/'.$imgName;
  $config['new_image'] = './upload/photos/'.$imgName;
  // $config['create_thumb'] = TRUE;
  $config['maintain_ratio'] = TRUE;
  $config['width'] = 800;
  $config['height'] = 800;

  // Load the Library
  $this->load->library('image_lib', $config);

  // resize image
  $this->image_lib->resize();
  // handle if there is any problem
  if ( ! $this->image_lib->resize()){
    echo $this->image_lib->display_errors();
  }

  $this->image_lib->clear();
}

}
?>
