<div class="panel panel-info">
  <div class="panel-heading">Data Penggunaan Ruang Hari Ini</div>
  <div class="panel-body"><div class="table-responsive form-group col-sm-12">
      <table class="table table-hover">
        <tbody>
          <?php
          $i=1;
          foreach($hariini_list as $row):
            $classTr="";
            if($row['status']=="Diajukan"){
                $classTr="warning";
            } else if($row['status']=="Ditolak"){
                $classTr="danger";
            }
          ?>
            <tr class="<?=$classTr?>">
              <th width="2%">
                <?=$i++;?>.
              </th>
              <th width="20%">Tanggal</th>
              <td>
                : <?=formatTanggal($row['tanggalsewa'])?>
              </td>
            </tr>
            <tr>
               <td></td>
              <th>Waktu</th>
              <td>
                : <?=formatWaktu($row['mulai'])?>-
                  <?=formatWaktu($row['selesai'])?>
              </td>
            </tr>
            <tr>
             <td></td>
               <th>Ruangan</th>
              <td>
                : <?=$row['noruangan']?> -
                  <?=$row['namaruangan']?>
              </td>
            </tr>
            <tr>
               <td></td>
              <th>Kegiatan</th>
              <td>
                : <?=$row['namakegiatan']?>
              </td>
            </tr>
            <tr>
               <td></td>
              <th>Kontak</th>
              <td>
                : <?=$row['penanggungjawab']?>
              </td>
            </tr>
            <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
