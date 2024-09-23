
<div class="panel panel-info">
  <div class="panel-heading"> Data Jadwal</div>
    <div class="panel-body">
      <div class="table-responsive">
<table class="table table-striped table-hover ">
<thead>
<tr>
    <th>#</th>
    <th>Tahun Ajaran</th>
    <th>Hari</th>
    <th>Mulai</th>
    <th>Selesai</th>
    <th>Ruang</th>
    <th>Kelas</th>
    <th>Prodi</th>
    <th>Mata Kuliah</th>
    <th>Dosen</th>
    <th><?php echo anchor('jadwal/jadwal_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
</tr>
</thead>
<tbody>
<?php
  $i=1;
  foreach($jadwal_list as $row):
  ?>
<tr>
    <td><?=$i++;?></td>
    <td><?=$row['thajar']?> - <?=$row['gangen']?></td>
    <td><?=$row['namahari']?></td>
    <td><?=$row['mulai']?></td>
    <td><?=$row['selesai']?></td>
    <td><?=$row['nokelas']?></td>
    <td><?=$row['kelas']?></td>
    <td><?=$row['namaprodi']?></td>

    <td><?=$row['namamatkul']?></td>
    <td><?=$row['namadosen']?></td>


    <td align="center">
      <?php echo anchor('jadwal/jadwal_form_update/'.$row['idjadwal'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
      <?php echo anchor('jadwal/jadwal_form_delete/'.$row['idjadwal'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>
    </div>
  </div>
</div>

