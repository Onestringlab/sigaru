
<div class="panel panel-info">
  <div class="panel-heading"> Data Lov</div>
    <div class="panel-body">
      <div class="table-responsive">
<table class="table table-striped table-hover ">
<thead>
<tr>
    <th width="5%">#</th>
    <th>Kategori</th>
    <th>Kode</th>
    <th>Value</th>
    <th width="5%"><?php echo anchor('lov/lov_form_insert/', '<span class="fa fa-plus" aria-hidden="true"></span>')?></th>
</tr>
</thead>
<tbody>
<?php
  $i=1;
  foreach($lov_list as $row):
  ?>
<tr>
    <td><?=$i++?></td>
    <td><?=$row['kategori']?></td>
    <td><?=$row['kode']?></td>
    <td><?=$row['value']?></td>
<td align="center">
  <?php echo anchor('lov/lov_form_update/'.$row['idlov'], '<span class="fa fa-pencil" aria-hidden="true"></span>')?>
  <?php echo anchor('lov/lov_form_delete/'.$row['idlov'], '<span class="fa fa-trash-o" aria-hidden="true"></span>')?>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
    </div>
  </div>
</div>

