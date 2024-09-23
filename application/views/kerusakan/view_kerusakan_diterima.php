<div class="panel panel-info">
  <div class="panel-heading"> Data Kerusakan Diterima</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover results">
        <thead>
          <tr>
            <th width="50px">#</th>
            <th width="100px">Tanggal</th>
            <th width="150px">Pelapor</th>
            <!--            <th>nbmpelapor</th>-->
            <th width="150px">Ruang</th>
            <!-- <th width="120px">Nomor</th> -->
            <!-- <th width="100px">Lantai</th> -->
            <!-- <th width="100px">Jenis</th> -->
            <th width="200px">Fasilitas Rusak</th>
            <!--
            <th>kabelvga</th>
            <th>ac</th>
            <th>lampu</th>
            <th>kipasangin</th>
            <th>kursi</th>
            <th>meja</th>
            <th>kuncipintu</th>
            <th>lemari</th>
          -->
          <th>Uraian Kerusakan</th>
            <!--
            <th>tglperbaikan</th>
            <th>uraianperbaikan</th>
            <th>perbaikanoleh</th>
            <th>tglpenerima</th>
            <th>namapenerima</th>
            <th>nbmpenerierima</th>
          -->
          <th width="90px">Status</th>
            <!--
            <th>Oleh</th>
            <th>Waktu</th>
          -->
            <!--
            <th>updatedby</th>
            <th>updatedat</th>
          -->
        </thead>
        <tbody>
          <?php
          $i=1;
          foreach($diterima_list as $row):
            ?>
            <tr>
              <td>
                <?=$i++?>.
              </td>
              <td>
                <?=formatTanggal($row['tglpelaporan'])?>
              </td>
              <td>
                <?=$row['pelapor']?>
              </td>
              <td>
                <?=$row['namaruang']?>
              </td>
              <td>
                <?php
                if($row['projektor']>0){
                  echo "Projektor : ".$row['projektor']." unit/buah<br>";
                }
                if($row['kabelvga']>0){
                  echo "Kabel VGA : ".$row['kabelvga']." unit/buah<br>";
                }
                if($row['ac']>0){
                  echo "AC : ".$row['ac']." unit/buah<br>";
                }
                if($row['lampu']>0){
                  echo "Lampu : ".$row['lampu']." unit/buah<br>";
                }
                if($row['kipasangin']>0){
                  echo "Kipas Angin : ".$row['kipasangin']." unit/buah<br>";
                }
                if($row['kursi']>0){
                  echo "Kursi : ".$row['kursi']." unit/buah<br>";
                }
                if($row['meja']>0){
                  echo "Meja : ".$row['meja']." unit/buah<br>";
                }
                if($row['kuncipintu']>0){
                  echo "Kunci Pintu : ".$row['kuncipintu']." unit/buah<br>";
                }
                if($row['lemari']>0){
                  echo "Lemari : ".$row['lemari']." unit/buah<br>";
                }
                ?>
              </td>
              <td>
                <?=$row['uraiankerusakan']?>
                <?php
                  if($row['photokerusakan']!=""){ 
                ?>
                <a href="#" data-toggle="modal" data-target="#modalPhoto<?=$i?>">
                  <img height="20" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photokerusakan']?>">
                </a>
                <div class="modal fade" id="modalPhoto<?=$i?>" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h4 class="modal-title"><?=$row['namaruang']?> - <?=$row['uraiankerusakan']?></h4>
                      </div>
                      <div class="modal-body">
                        <img width="560" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photokerusakan']?>">
                      </div>
  <!--
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      </div>
  -->
                    </div>
                  </div>
                </div>
                <?php
                  }
                ?>
              </td>
              <td>
                <?=$row['status']?>
              </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
</div>
