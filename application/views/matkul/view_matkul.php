
<div class="panel panel-primary">
  <div class="panel-heading"> Data Matkul</div>
    <div class="panel-body">
      <div class="table-responsive">
<table class="table table-striped table-hover ">
<thead>
<tr>
    <th>#</th>
    <th>idprodi</th>
    <th>kodematkul</th>
    <th>matakuliah</th>
    <th>sks</th>
    <th>semester</th>
    <th><?php echo anchor('matkul/matkul_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
</tr>
</thead>
<tbody>
<?php
  $i=1;
  foreach($matkul_list as $row):
  ?>
<tr>
    <td><?=$i++; ?></td>
    <td><?=$row['namaprodi']?></td>
    <td><?=$row['kodematkul']?></td>
    <td><?=$row['matakuliah']?></td>
    <td><?=$row['sks']?></td>
    <td><?=$row['semester']?></td>
<td align="center">
  <?php echo anchor('matkul/matkul_form_update/'.$row['idmatkul'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
  <?php echo anchor('matkul/matkul_form_delete/'.$row['idmatkul'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
    </div>
  </div>
</div>

