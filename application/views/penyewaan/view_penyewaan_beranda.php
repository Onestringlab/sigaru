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
            <th width="14%">Tanggal</th>
            <th width="15%">Waktu</th>
            <th width="34%">Nama Ruangan</th>
            <th>Kegiatan</th>
            <th width="8%">Status</th>
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
               <center>
                <?php
                  if($row['status']=="Disetujui"){
                  echo anchor('penyewaan/lap_penyewaan_pdf/'.$row['idpenyewaan'], '<span  class="fa fa-file-pdf-o" aria-hidden="true"></span>','target="_blank"').'&nbsp;';
                }else{
                  echo $row['status'];
                }
                ?>
                </center>
              </td>
            </tr>
            <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
