<div class="panel panel-info ">
  <div class="panel-heading"> Data Penggunaan Ruangan - Ditolak</div>
  <div class="panel-body ">
    <div class="table-responsive form-group col-sm-12">
      <table class="table table-hover table-striped results">
        <thead>
          <tr>
            <th width="50px">#</th>
            <th width="100px">Tanggal</th>
            <th width="120px">Waktu</th>
            <th width="250px">Nama Ruangan</th>
            <th>Kegiatan</th>
            <th width="200px">Kontak</th>
            <th width="80px">Status</th>
            <th width="200px">Catatan</th>
          </tr>
          <tr class="warning no-result">
            <td colspan="11"><i class="fa fa-warning"></i> Data Tidak Ditemukan</td>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($ditolak_list as $row) :
            $classTr = "";
            if ($row['status'] == "Diajukan") {
              $classTr = "warning";
            } else if ($row['status'] == "Ditolak") {
              $classTr = "danger";
            }
          ?>
            <tr class="<?= $classTr ?>">
              <td>
                <?= $i++; ?>
              </td>
              <td>
                <?= formatTanggal($row['tanggalsewa']) ?>
              </td>
              <td>
                <?= formatWaktu($row['mulai']) ?>-
                <?= formatWaktu($row['selesai']) ?>
              </td>
              <td>
                <?= $row['noruangan'] ?> -
                <?= $row['namaruangan'] ?>
              </td>
              <td>
                <?= $row['namakegiatan'] ?>
              </td>
              <td>
                <?= $row['penanggungjawab'] ?>
              </td>
              <td>
                <center>
                  <?php
                  if ($row['status'] == "Disetujui") {
                    echo anchor('penyewaan/lap_penyewaan_pdf/' . $row['idpenyewaan'], '<span  class="fa fa-file-pdf-o" aria-hidden="true"></span>', 'target="_blank"') . '&nbsp;';
                  } else {
                    echo $row['status'];
                  }
                  ?>
                </center>
              </td>
              <td>
                <?= $row['catatan'] ?>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>