
<div class="panel panel-info">
  <div class="panel-heading"> Data Prodi</div>
    <div class="panel-body">
      <div class="table-responsive">
<table class="table table-striped table-hover ">
<thead>
<tr>
    <th>#</th>
    <th>Fakultas</th>
    <th>Singkatan</th>
    <th>Program Studi</th>
    <th>SK Prodi</th>
    <th>Oleh</th>
    <th>Waktu</th>
    <th><?php echo anchor('prodi/prodi_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
</tr>
</thead>
<tbody>
<?php
  $i=1;
  foreach($prodi_list as $row):
  ?>
<tr>
    <td><?=$i++ ?></td>
    <td><?=$row['namafakultas']?></td>
    <td><?=$row['singkatan']?></td>
    <td><?=$row['namaprodi']?></td>
    <td><?=$row['skprodi']?></td>
    <td><?=$row['updatedby']?></td>
    <td><?=$row['updateddate']?></td>
<td align="center">
  <?php echo anchor('prodi/prodi_form_update/'.$row['idprodi'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
  <?php echo anchor('prodi/prodi_form_delete/'.$row['idprodi'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
    </div>
  </div>
</div>

