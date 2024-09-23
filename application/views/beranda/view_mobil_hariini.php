<div class="panel panel-info">
  <div class="panel-heading">Data Mobil Hari Ini</div>
  <div class="panel-body"><div class="table-responsive form-group col-sm-12">
      <table class="table table-hover">
<!--
        <thead>
          <tr>
            <th width="2%">#</th>
            <th width="14%">Tanggal</th>
            <th width="15%">Waktu</th>
            <th width="34%">Nama Ruangan</th>
            <th>Kegiatan</th>
          </tr>
          <tr class="warning no-result">
            <td colspan="11"><i class="fa fa-warning"></i> Data Tidak Ditemukan</td>
          </tr>
        </thead>
-->
        <tbody>
          <?php
          $i=1;
          foreach($peminjaman_list as $row):
          ?>
            <tr>
              <th width="2%">
                <?=$i++;?>.
              </th>
               <th width="20%">Kendaraan</th>
              <td>
                : <?=$row['nopolisi']?> -
                <?=$row['merk']?>
              </td>
            </tr>
            <tr>
               <td></td>
              <th>Tanggal</th>
              <td>
                : <?=formatTanggal($row['mulai'])?> -
                <?=formatTanggal($row['selesai'])?>
              </td>
            </tr>
            <tr>
              <td></td>
              <th>Tujuan</th>
              <td>
                : <?=$row['tujuan']?>
              </td>
            </tr>
            <tr>
             <td></td>
               <th>Acara</th>
              <td>
                : <?=$row['acara']?>
              </td>
            </tr>
            <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
