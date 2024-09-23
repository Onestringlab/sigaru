
<div class="panel panel-info">
  <div class="panel-heading"> Data User</div>
    <div class="panel-body">
      <div class="table-responsive">
<table class="table table-striped table-hover ">
<thead>
<tr>
    <th>#</th>
    <th>Username</th>
    <th>Nama</th>
    <th>Bagian/Prodi</th>
    <th>Email</th>
    <th>Role</th>
    <th>Status</th>
    <th>Oleh</th>
    <th>Waktu</th>
    <th><?php echo anchor('user/user_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
</tr>
</thead>
<tbody>
<?php
  $i=1;
  foreach($user_list as $row):
  ?>
<tr>
    <td><?=$i++?></td>
    <td><?=$row['username']?></td>
    <td><?=$row['nama']?></td>
    <td><?=$row['prodi']?></td>
    <td><?=$row['email']?></td>
    <td><?=$row['role']?></td>
    <td><?=$row['status']?></td>
    <td><?=$row['updatedby']?></td>
    <td><?=$row['updateddate']?></td>
<td align="center">
  <?php echo anchor('user/user_form_update/'.$row['iduser'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
  <?php echo anchor('user/user_form_delete/'.$row['iduser'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
    </div>
  </div>
</div>

