<div class="row">
  <div class="col-md-12">  
    <?php  $this->load->view('beranda/view_pengumuman'); ?>
  </div>
</div>
<div class="panel panel-info ">
  <div class="panel-heading"> Data Penggunaan Ruangan</div>
  <div class="panel-body ">
    <div class="form-group">
      <!--                <label class="col-sm-1 control-label">Pencarian</label>-->
      <div class="col-sm-12">
        <input type="text" class="search form-control" placeholder="Ketik Disini...">
      </div>
      <!--
          <div class="col-sm-1">
              <span class="counter pull-left"></span>
          </div>
-->
    </div>
    <div class="table-responsive form-group col-sm-12">
      <table class="table table-hover results">
        <thead>
          <tr>
            <th width="2%">#</th>
            <th width="9%">Tanggal</th>
            <th width="10%">Waktu</th>
            <th width="18%">Nama Ruangan</th>
            <th>Kegiatan</th>
            <th>Organisasi/Instansi</th>
            <th>Peserta</th>
            <th>Kontak</th>
            <th>Status</th>
            <th width="7%" class="text-center">
              <?php
                  echo anchor('penyewaan/penyewaan_form_insert/', '<span class="fa fa-plus" aria-hidden="true"></span>')
              ?>
            </th>
          </tr>
          <tr class="warning no-result">
            <td colspan="11"><i class="fa fa-warning"></i> Data Tidak Ditemukan</td>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          foreach($penyewaan_list as $row):
            $classTr="";
            if($row['status']=="Diajukan"){
                $classTr="warning";
            } else if($row['status']=="Ditolak"){
                $classTr="danger";
            }
          ?>
            <tr class="<?=$classTr?>">
              <td>
                <?=$i++;?>
              </td>
              <td>
                <?=formatTanggal($row['tanggalsewa'])?>
              </td>
              <td>
                <?=formatWaktu($row['mulai'])?>-
                  <?=formatWaktu($row['selesai'])?>
              </td>
              <td>
                <?=$row['noruangan']?> -
                  <?=$row['namaruangan']?>
              </td>
              <td>
                <?=$row['namakegiatan']?>
              </td>
              <td>
                <?=$row['namapengguna']?>
              </td>
              <td>
                <?=$row['jumlahperserta']?>
              </td>
              <td>
                <?=$row['penanggungjawab']?>
              </td>
              <td>
                <?=$row['status']?>
              </td>
              <td align="center">
                <?php
                $username = $this->session-> userdata('username');
                $role = $this->session-> userdata('role');
                if($role=="Admin" || ($username==$row['insertedby'] &&  $row['status']=="Disetujui")){
                  echo anchor('penyewaan/lap_penyewaan_pdf/'.$row['idpenyewaan'], '<span  class="fa fa-file-pdf-o" aria-hidden="true"></span>','target="_blank"').'&nbsp;';
                }

                if($role=="Admin" || ($username==$row['insertedby'] &&  $row['status']!="Disetujui")){
                    echo anchor('penyewaan/penyewaan_form_update/'.$row['idpenyewaan'],'<span  class="fa fa-pencil" aria-hidden="true"></span>').'&nbsp;';
                    echo anchor('penyewaan/penyewaan_form_delete/'.$row['idpenyewaan'], '<span class="fa fa-trash-o" aria-hidden="true"></span>');
                }
                ?>
              </td>
            </tr>
            <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
