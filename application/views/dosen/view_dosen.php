
<div class="panel panel-info">
  <div class="panel-heading"> Data Dosen</div>
    <div class="panel-body">
      <div class="table-responsive">
<table class="table table-striped table-hover ">
<thead>
<tr>
    <th>#</th>
    <th>NIDN/NUPN</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Handphone</th>
    <th>e-Mail</th>
    <th><?php echo anchor('dosen/dosen_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
</tr>
</thead>
<tbody>
<?php
  $i=1;
  foreach($dosen_list as $row):
  ?>
<tr>
    <td><?=$i++ ?></td>
    <td><?=$row['nidn']?></td>
    <td><?=$row['namadosen']?></td>
    <td><?=$row['alamat']?></td>
    <td><?=$row['nohp']?></td>
    <td><?=$row['email']?></td>
<td align="center">
  <?php echo anchor('dosen/dosen_form_update/'.$row['iddosen'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
  <?php echo anchor('dosen/dosen_form_delete/'.$row['iddosen'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
    </div>
  </div>
</div>

