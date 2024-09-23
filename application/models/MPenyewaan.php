<?php
class MPenyewaan extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $v_date = date("Y-m-d H:i:s");
  }


  function get_penyewaan($idpenyewaan)
  {
    $this->db->select('a.*,b.noruangan,b.namaruangan');
    $this->db->from('tb_penyewaan a');
    $this->db->join('tb_ruangan b', 'a.idruangan = b.idruangan');
    $this->db->where('idpenyewaan', $idpenyewaan);
    $this->db->order_by('a.tanggalsewa', 'DESC');
    $this->db->order_by('a.mulai', 'DESC');
    $data = array();
    $Q = $this->db->get();
    if ($Q->num_rows() > 0) {
      $data = $Q->row_array();
    }
    $Q->free_result();
    return $data;
  }


  function getAll_penyewaan()
  {
    $tanggal = date('Y-m-d', strtotime('-180 days'));
    $waktu = date('H:i:s');
    $this->db->select('a.*,b.noruangan,b.namaruangan');
    $this->db->from('tb_penyewaan a');
    $this->db->join('tb_ruangan b', 'a.idruangan = b.idruangan');
    $this->db->where('tanggalsewa >=', $tanggal);
    //  $this->db->where('status =','Diajukan');
    $this->db->order_by('a.tanggalsewa', 'DESC');
    $this->db->order_by('a.mulai', 'DESC');
    $data = array();
    $Q = $this->db->get();
    if ($Q->num_rows() > 0) {
      foreach ($Q->result_array() as $row) {
        $data[] = $row;
      }
    }
    $Q->free_result();
    return $data;
  }

  function getUpdate_penyewaan()
  {
    $tanggal = date('Y-m-d');
    $waktu = date('H:i:s');
    $this->db->select('a.*,b.noruangan,b.namaruangan');
    $this->db->from('tb_penyewaan a');
    $this->db->join('tb_ruangan b', 'a.idruangan = b.idruangan');
    $this->db->where('tanggalsewa >=', $tanggal);
    //  $this->db->where('status =','Diajukan');
    $this->db->order_by('a.tanggalsewa', 'asc');
    $this->db->order_by('a.mulai', 'asc');
    $data = array();
    $Q = $this->db->get();
    if ($Q->num_rows() > 0) {
      foreach ($Q->result_array() as $row) {
        $data[] = $row;
      }
    }
    $Q->free_result();
    return $data;
  }

  function getRuanganDiajukan()
  {
    $tanggal = date('Y-m-d');
    $waktu = date('H:i:s');
    $this->db->select('a.*,b.noruangan,b.namaruangan');
    $this->db->from('tb_penyewaan a');
    $this->db->join('tb_ruangan b', 'a.idruangan = b.idruangan');
    $this->db->where('tanggalsewa >=', $tanggal);
    $this->db->where('status =', 'Diajukan');
    $this->db->order_by('a.tanggalsewa', 'ASC');
    $this->db->order_by('a.mulai', 'ASC');
    $data = array();
    $Q = $this->db->get();
    if ($Q->num_rows() > 0) {
      foreach ($Q->result_array() as $row) {
        $data[] = $row;
      }
    }
    $Q->free_result();
    return $data;
  }

  function getRuanganDisetujui()
  {
    $tanggal = date('Y-m-d');
    $waktu = date('H:i:s');
    $this->db->select('a.*,b.noruangan,b.namaruangan');
    $this->db->from('tb_penyewaan a');
    $this->db->join('tb_ruangan b', 'a.idruangan = b.idruangan');
    $this->db->where('tanggalsewa >=', $tanggal);
    $this->db->where('status =', 'Disetujui');
    $this->db->order_by('a.tanggalsewa', 'ASC');
    $this->db->order_by('a.mulai', 'ASC');
    $data = array();
    $Q = $this->db->get();
    if ($Q->num_rows() > 0) {
      foreach ($Q->result_array() as $row) {
        $data[] = $row;
      }
    }
    $Q->free_result();
    return $data;
  }

  function getRuanganDitolak()
  {
    $tanggal = date('Y-m-d');
    $waktu = date('H:i:s');
    $this->db->select('a.*,b.noruangan,b.namaruangan');
    $this->db->from('tb_penyewaan a');
    $this->db->join('tb_ruangan b', 'a.idruangan = b.idruangan');
    $this->db->where('tanggalsewa >=', $tanggal);
    $this->db->where('status =', 'Ditolak');
    $this->db->order_by('a.tanggalsewa', 'ASC');
    $this->db->order_by('a.mulai', 'ASC');
    $data = array();
    $Q = $this->db->get();
    if ($Q->num_rows() > 0) {
      foreach ($Q->result_array() as $row) {
        $data[] = $row;
      }
    }
    $Q->free_result();
    return $data;
  }



  function check_jadwal()
  {
    $this->db->select('*');
    $this->db->from('tb_penyewaan');
    $this->db->where('idpenyewaan !=', $_GET['idpenyewaan']);
    $this->db->where('idruangan', $_GET['idruangan']);
    $this->db->where('tanggalsewa', $_GET['tanggalsewa']);
    $this->db->where('status !=', 'Ditolak');
    $this->db->where('((mulai between "' . $_GET['mulai'] . '" and "' . $_GET['selesai'] . '") or (selesai between "' . $_GET['mulai'] . '" and "' . $_GET['selesai'] . '") or (mulai < "' . $_GET['mulai'] . '" and selesai > "' . $_GET['selesai'] . '"))');
    $this->db->order_by('tanggalsewa', 'DESC');
    $data = array();
    $Q = $this->db->get();
    $status = "1";
    if ($Q->num_rows() > 0) {
      $status = "0";
    }
    $Q->free_result();
    return $status; //." ".$this->db->last_query() ;
  }

  function add_penyewaan()
  {
    $v_date = date('Y-m-d H:i:s');
    $username = $this->session->userdata('username');
    $sql = 'insert into tb_penyewaan(idpenyewaan,idruangan,iduser,namakegiatan,namapengguna,jumlahperserta,penanggungjawab,npm,nohp,tanggalsewa,mulai,selesai,infokus,papantulis,mic,audiosound,kabel,keterangan,status,catatan,tanggalkonfirmasi,insertedby,inserteddate,updatedby,updateddate)  values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $this->db->query($sql, array(generate_uuid(), $_POST['idruangan'], $username, $_POST['namakegiatan'], $_POST['namapengguna'], $_POST['jumlahperserta'], $_POST['penanggungjawab'], $_POST['npm'], $_POST['nohp'], $_POST['tanggalsewa'], $_POST['mulai'], $_POST['selesai'], $_POST['infokus'], $_POST['papantulis'], $_POST['mic'], $_POST['audiosound'], $_POST['kabel'], $_POST['keterangan'], $_POST['status'], $_POST['catatan'], $_POST['tanggalkonfirmasi'], $username, $v_date, $username, $v_date));
  }

  function update_penyewaan()
  {
    $v_date = date('Y-m-d H:i:s');
    $username = $this->session->userdata('username');
    $sql = 'update tb_penyewaan set idruangan=?,iduser=?,namakegiatan=?,namapengguna=?,jumlahperserta=?,penanggungjawab=?,npm=?,nohp=?,tanggalsewa=?,mulai=?,selesai=?,infokus=?,papantulis=?,mic=?,audiosound=?,kabel=?,keterangan=?,status=?,catatan=?,tanggalkonfirmasi=?,updatedby=?,updateddate=? where idpenyewaan=? ';
    $this->db->query($sql, array($_POST['idruangan'], $username, $_POST['namakegiatan'], $_POST['namapengguna'], $_POST['jumlahperserta'], $_POST['penanggungjawab'], $_POST['npm'], $_POST['nohp'], $_POST['tanggalsewa'], $_POST['mulai'], $_POST['selesai'], $_POST['infokus'], $_POST['papantulis'], $_POST['mic'], $_POST['audiosound'], $_POST['kabel'], $_POST['keterangan'], $_POST['status'], $_POST['catatan'], $_POST['tanggalkonfirmasi'], $username, $v_date, $_POST['idpenyewaan']));
  }

  function delete_penyewaan()
  {
    $sql = 'delete from tb_penyewaan where idpenyewaan=?';
    $this->db->query($sql, array($_POST['idpenyewaan']));
  }

  function getHariini_penyewaan()
  {
    $tanggal = date('Y-m-d');
    $waktu = date('H:i:s');
    $this->db->select('a.*,b.noruangan,b.namaruangan');
    $this->db->from('tb_penyewaan a');
    $this->db->join('tb_ruangan b', 'a.idruangan = b.idruangan');
    $this->db->where('tanggalsewa =', $tanggal);
    $this->db->where('status =', 'Disetujui');
    $this->db->order_by('a.tanggalsewa', 'DESC');
    $this->db->order_by('a.mulai', 'DESC');
    $data = array();
    $Q = $this->db->get();
    if ($Q->num_rows() > 0) {
      foreach ($Q->result_array() as $row) {
        $data[] = $row;
      }
    }
    $Q->free_result();
    return $data;
  }
}
