
<div class="panel panel-info">
  <div class="panel-heading"> Data Log Penelitian</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th width="5%">#</th>
            <th width="20%">Waktu</th>
            <th>Log</th>
            <th width="5%"><?php echo anchor('logpenelitian/logpenelitian_form_insert/', '<span class="fa fa-plus" aria-hidden="true"></span>')?></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          foreach($logpenelitian_list as $row):
            ?>
            <tr>
              <td><?=$i++;?></td>
              <td><?=$row['waktu']?></td>
              <td><?=nl2br($row['log'])?></td>
              <td align="center">
                <?php echo anchor('logpenelitian/logpenelitian_form_update/'.$row['idlogpenelitian'], '<span class="fa fa-pencil" aria-hidden="true"></span>')?>
                <?php echo anchor('logpenelitian/logpenelitian_form_delete/'.$row['idlogpenelitian'], '<span class="fa fa-trash-o" aria-hidden="true"></span>')?>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>



