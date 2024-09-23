<div class="panel panel-info">
  <div class="panel-heading"> Data Ruangan</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover" id="dataRuangan">
        <thead>
          <tr>
            <th>#</th>
            <th>No Ruangan</th>
            <th>Nama Ruangan</th>
            <th>Gedung</th>
            <th>Lantai</th>
            <th>Kapasitas</th>
            <th>Panjang</th>
            <th>Lebar</th>
            <th>Photo</th>
            <th>Oleh</th>
            <th>Waktu</th>
            <th>
              <?php echo anchor('ruangan/ruangan_form_insert/', '<span class="fa fa-plus" aria-hidden="true"></span>')?></th>
          </tr>
        </thead>
        <tbody>
          <?php
            $i=1;
            foreach($ruangan_list as $row):
          ?>
            <tr>
              <td>
                <?=$i++ ?>
              </td>
              <td>
                <?=$row['noruangan']?>
              </td>
              <td>
                <?=$row['namaruangan']?>
              </td>
              <td>
                <?=$row['gedung']?>
              </td>
              <td>
                <?=$row['lantai']?>
              </td>
              <td>
                <?=$row['kapasitas']?>
              </td>
              <td>
                <?=$row['panjang']?>
              </td>
              <td>
                <?=$row['lebar']?>
              </td>
              <td>
                <?php if($row['photo']!=""){?>
                <a href="#" data-toggle="modal" data-target="#modalPhoto<?=$i?>">
                  <img width="80" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
                </a>
                <!-- Modal -->
                <div class="modal fade" id="modalPhoto<?=$i?>" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?=$row['namaruangan']?></h4>
                      </div>
                      <div class="modal-body">
                        <img width="560" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
                      </div>
<!--
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      </div>
-->
                    </div>
                  </div>
                </div>
                <?php } ?>
              </td>
              <td>
                <?=$row['updatedby']?>
              </td>
              <td>
                <?=$row['updateddate']?>
              </td>
              <td align="center">
                <?php echo anchor('ruangan/ruangan_form_update/'.$row['idruangan'], '<span class="fa fa-pencil" aria-hidden="true"></span>')?>
                  <?php echo anchor('ruangan/ruangan_form_delete/'.$row['idruangan'], '<span class="fa fa-trash-o" aria-hidden="true"></span>')?>
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
    $('#dataRuangan').DataTable();
} );
</script>

