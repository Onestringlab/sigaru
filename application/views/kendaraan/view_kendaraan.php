<div class="panel panel-info">
  <div class="panel-heading"> Data Kendaraan</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th width="30px" class="text-center">#</th>
            <!--                <th>nopajakstnk</th>-->
            <th width="120px" class="text-center">No Polisi</th>
            <!--                <th>namapemilik</th>-->
            <!--                <th>alamat</th>-->
            <th width="120px" class="text-center">Merk/Type</th>
            <th width="120px" class="text-center">Jenis</th>
            <th width="100px" class="text-center">Tahun</th>
            <!--                <th>warnakb</th>-->
            <!--                <th>isisilinder</th>-->
            <!--                <th>norangka</th>-->
            <!--                <th>nomesin</th>-->
            <!--                <th>coding</th>-->
            <!--                <th>nobpkb</th>-->
            <!--                <th>bahanbakar</th>-->
            <!--                <th>warnatnkb</th>-->
            <th width="120px" class="text-center">Berlaku s/d</th>
            <th width="350px">Catatan</th>

            <th class="text-center">Photo</th>
            <!--                <th>insertedby</th>-->
            <!--                <th>insertedat</th>-->
            <!--                <th>updatedby</th>-->
            <!--                <th>updatedat</th>-->
            <th width="80px" class="text-center">
              <?php echo anchor('kendaraan/kendaraan_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          foreach($kendaraan_list as $row):
          ?>
            <tr>
              <td>
                <?=$i++ ?>
              </td>
              <!--            <td><?=$row['nopajakstnk']?></td>-->
              <td>
                <?=$row['nopolisi']?>
              </td>
              <!--            <td><?=$row['namapemilik']?></td>-->
              <!--            <td><?=$row['alamat']?></td>-->
              <td>
                <?=$row['merk']?>
              </td>
              <td>
                <?=$row['jenis']?>
              </td>
              <td class="text-center">
                <?=$row['tahunrakitan']?>
              </td>
              <!--            <td><?=$row['warnakb']?></td>-->
              <!--            <td><?=$row['isisilinder']?></td>-->
              <!--            <td><?=$row['norangka']?></td>-->
              <!--            <td><?=$row['nomesin']?></td>-->
              <!--            <td><?=$row['coding']?></td>-->
              <!--            <td><?=$row['nobpkb']?></td>-->
              <!--            <td><?=$row['bahanbakar']?></td>-->
              <!--            <td><?=$row['warnatnkb']?></td>-->
              <td class="text-center">
                <?php echo formatTanggal($row['berlakusd'])?>
              </td>
              <td><?=$row['catatan']?></td>
              <td class="text-center">
                <a href="#" data-toggle="modal" data-target="#modalPhoto<?=$i?>"><img width="100%" src="<?php echo base_url();?>/upload/photos/<?=$row['photomobil']?>" ?>
                </a>
                <div class="modal fade" id="modalPhoto<?=$i?>" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo $row['nopolisi'].' - '.$row['merk']?></h4>
                      </div>
                      <div class="modal-body">
                        <img width="560" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photomobil']?>">
                      </div>
<!--
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      </div>
-->
                    </div>
                  </div>
                </div>
              </td>
              <!--            <td><?=$row['insertedby']?></td>-->
              <!--            <td><?=$row['insertedat']?></td>-->
              <!--            <td><?=$row['updatedby']?></td>-->
              <!--            <td><?=$row['updatedat']?></td>-->
              <td class="text-center">
                <?php echo anchor('kendaraan/lap_kendaraan_pdf/'.$row['idkendaraan'], '<span class="fa fa-file-pdf-o" aria-hidden="true"></span>','target="_blank"')?>
                <?php echo anchor('kendaraan/kendaraan_form_update/'.$row['idkendaraan'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
                <?php echo anchor('kendaraan/kendaraan_form_delete/'.$row['idkendaraan'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
              </td>
            </tr>
            <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
