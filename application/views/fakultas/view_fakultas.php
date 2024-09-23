<div class="panel panel-info">
  <div class="panel-heading"> Data Fakultas</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>#</th>
            <th>Singkatan</th>
            <th>Fakultas</th>
            <th>Oleh</th>
            <th>Waktu</th>
            <th>
              <?php echo anchor('fakultas/fakultas_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
          </tr>
        </thead>
        <tbody>
          <?php
            $i=1;
            foreach($fakultas_list as $row):
          ?>
            <tr>
              <td>
                <?=$i++ ?>
              </td>
              <td>
                <?=$row['singkatan']?>
              </td>
              <td>
                <?=$row['namafakultas']?>
              </td>
              <td>
                <?=$row['updatedby']?>
              </td>
              <td>
                <?=$row['updateddate']?>
              </td>
              <td align="center">
                <?php echo anchor('fakultas/fakultas_form_update/'.$row['idfakultas'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
                <?php echo anchor('fakultas/fakultas_form_delete/'.$row['idfakultas'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
              </td>
            </tr>
            <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
