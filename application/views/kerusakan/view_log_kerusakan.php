<div class="panel panel-info">
  <div class="panel-heading"> Data Log Kerusakan</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover" id="datalog">
        <thead>
          <tr>
            <th>#</th>
            <th width="100px">Tanggal</th>
            <th width="150px">Pelapor</th>
            <!--<th>nbmpelapor</th>-->
            <th width="180px">Ruang</th>
            <th>Nomor</th>
            <th>Lantai</th>
            <th width="100px">Jenis</th>
            <!-- <th>Fasilitas Rusak</th> -->
            <!--
            <th>kabelvga</th>
            <th>ac</th>
            <th>lampu</th>
            <th>kipasangin</th>
            <th>kursi</th>
            <th>meja</th>
            <th>kuncipintu</th>
            <th>lemari</th>
          -->
          <!-- <th>Uraian Kerusakan</th> -->
            <!--
            <th>tglperbaikan</th>
            <th>uraianperbaikan</th>
            <th>perbaikanoleh</th>
            <th>tglpenerima</th>
            <th>namapenerima</th>
            <th>nbmpenerierima</th>
          -->
          <th>Status</th>
            <!--
            <th>Oleh</th>
            <th>Waktu</th>
          -->
            <!--
            <th>updatedby</th>
            <th>updatedat</th>
          -->
          <th width="90px" class="text-center">
            <?php echo anchor('kerusakan/kerusakan_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          foreach($kerusakan_list as $row):
            ?>
            <tr>
              <td>
                <?=$i++?>
              </td>
              <td>
                <?=formatTanggal($row['tglpelaporan'])?>
              </td>
              <td>
                <?=$row['pelapor']?>
              </td>
              <td>
                <?=$row['namaruang']?>
              </td>
              <td>
                <?=$row['noruang']?>
              </td>
              <td>
                <?=$row['lantai']?>
              </td>
              <td>
                <?=$row['jnsfasilitas']?>
              </td>
              <td>
                <?=$row['status']?>
              </td>
              <td align="center">
               <?php
               $username = $this->session-> userdata('username');
               $role = $this->session-> userdata('role');
               if($role=="Admin" || ($username==$row['insertedby'] &&  $row['status']=="Telah Diperbaiki")){
                echo anchor('kerusakan/lap_kerusakan_pdf/'.$row['idkerusakan'], '<span  class="fa fa-file-pdf-o" aria-hidden="true"></span>','target="_blank"').'&nbsp;';
              }

              if($role=="Admin" || ($username==$row['insertedby'] &&  $row['status']!="Telah Diperbaiki")){
                echo anchor('kerusakan/kerusakan_form_update/'.$row['idkerusakan'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>').'&nbsp;';
                echo anchor('kerusakan/kerusakan_form_delete/'.$row['idkerusakan'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>');
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
