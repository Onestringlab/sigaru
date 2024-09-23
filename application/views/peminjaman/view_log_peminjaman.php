<div class="panel panel-info">
  <div class="panel-heading"> Data Peminjaman Kendaraan</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover" id="datalog">
        <thead>
          <tr>
            <th>#</th>
            <th width="180px">Kendaraan</th>
<!--            <th>iduser</th>-->
            <th width="150px">Nama Peminjam</th>
            <th>Nomor HP</th>
            <th width="160px">Tanggal</th>
<!--            <th>Selesai</th>-->
            <th width="150px">Tujuan</th>
            <th>Acara</th>
<!--            <th>waktumulai</th>-->
<!--            <th>waktuselesai</th>-->
<!--            <th>keberangkatan</th>-->
<!--            <th>Status</th>-->
<!--            <th>insertedby</th>-->
<!--            <th>insertedat</th>-->
<!--            <th>updatedby</th>-->
<!--            <th>updatedat</th>-->
            <th width="70px" class="text-center">
              <?php echo anchor('peminjaman/peminjaman_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
          </tr>
        </thead>
        <tbody>
          <?php
        $i=1;
        foreach($peminjaman_list as $row):
        ?>
            <tr>
              <td>
                <?=$i++ ?>
              </td>
              <td>
                <?php echo $row['nopolisi'] . " - ". $row['merk']?>
              </td>
<!--
              <td>
                <?=$row['iduser']?>
              </td>
-->
              <td>
                <?=$row['namapeminjam']?>
              </td>
              <td>
                <?=$row['hppeminjam']?>
              </td>
<!--
              <td>
                <?=$row['institusi']?>
              </td>
-->
              <td>
                <?php echo formatTanggal($row['mulai']) ." - ". formatTanggal($row['selesai'])?>
              </td>
              <td>
                <?=$row['tujuan']?>
              </td>
              <td>
                <?=$row['acara']?>
              </td>
<!--
              <td>
                <?=$row['waktumulai']?>
              </td>
              <td>
                <?=$row['waktuselesai']?>
              </td>
              <td>
                <?=$row['keberangkatan']?>
              </td>
-->
<!--
              <td>
                <?=$row['status']?>
              </td>
-->
<!--
              <td>
                <?=$row['insertedby']?>
              </td>
              <td>
                <?=$row['insertedat']?>
              </td>
              <td>
                <?=$row['updatedby']?>
              </td>
              <td>
                <?=$row['updatedat']?>
              </td>
-->
              <td align="center">
               <?php
                $username = $this->session-> userdata('username');
                $role = $this->session-> userdata('role');
                if($role=="Admin" || ($username==$row['insertedby'] &&  $row['status']=="Disetujui")){
                  echo anchor('peminjaman/lap_peminjaman_pdf/'.$row['idpeminjaman'], '<span  class="fa fa-file-pdf-o" aria-hidden="true"></span>','target="_blank"').'&nbsp;';
                }

                if($role=="Admin" || ($username==$row['insertedby'] &&  $row['status']!="Disetujui")){
                    echo anchor('peminjaman/peminjaman_form_update/'.$row['idpeminjaman'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>').'&nbsp;';
                    echo anchor('peminjaman/peminjaman_form_delete/'.$row['idpeminjaman'], '<span class="fa fa-trash-o" aria-hidden="true"></span>');
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

<script>
$(document).ready(function() {
    $('#datalog').DataTable();
} );
</script>

