
<div class="panel panel-primary">
  <div class="panel-heading"> Data Thajar</div>
    <div class="panel-body">
      <div class="table-responsive">
<table class="table table-striped table-hover ">
<thead>
<tr>
    <th>idthajar</th>
    <th>thajar</th>
    <th>gangen</th>
    <th>status</th>
    <th>insertedby</th>
    <th>inserteddate</th>
    <th>updatedby</th>
    <th>updateddate</th>
    <th><?php echo anchor('thajar/thajar_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
</tr>
</thead>
<tbody>
<?php
  $i=1;
  foreach($thajar_list as $row):
  ?>
<tr>
    <td><?=$row['idthajar']?></td>
    <td><?=$row['thajar']?></td>
    <td><?=$row['gangen']?></td>
    <td><?=$row['status']?></td>
    <td><?=$row['insertedby']?></td>
    <td><?=$row['inserteddate']?></td>
    <td><?=$row['updatedby']?></td>
    <td><?=$row['updateddate']?></td>
<td align="center">
  <?php echo anchor('thajar/thajar_form_update/'.$row['idthajar'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
  <?php echo anchor('thajar/thajar_form_delete/'.$row['idthajar'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
    </div>
  </div>
</div>

