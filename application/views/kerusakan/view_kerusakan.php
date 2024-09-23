<div class="row">
  <div class="col-md-12">  
    <?php  $this->load->view('beranda/view_pengumuman'); ?>
  </div>
</div>
<div class="panel panel-info">
  <div class="panel-heading"> Data Kerusakan</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>#</th>
            <th width="100px">Tanggal</th>
            <th >Pelapor</th>
            <!--            <th>nbmpelapor</th>-->
            <th width="150px">Ruang</th>
            <th width="100px">Nomor</th>
            <th width="100px">Lantai</th>
            <th width="100px">Jenis</th>
            <th>Fasilitas Rusak</th>
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
          <!-- <th>Uraian Kerusakan</th> -->
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
          <th width="90px" class="text-center">
            <?php echo anchor('kerusakan/kerusakan_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          foreach($kerusakan_list as $row):
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
                <?=$row['noruang']?>
              </td>
              <td class="text-left">
                <?=$row['lantai']?>
              </td>
              <td>
                <?=$row['jnsfasilitas']?>
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
                <?php
                  $username = $this->session-> userdata('username');
                  $role = $this->session-> userdata('role');
                  if(($role=="Admin" || $username==$row['insertedby']) && $row['uraianperbaikan'] != "" ){
                    echo "<b>Proses: </b>".$row['uraianperbaikan'];
                  }
                ?>
              </td>
              <td>
                <?=$row['status']?>
              </td>
              <td align="center">
               <?php
               // $username = $this->session-> userdata('username');
               // $role = $this->session-> userdata('role');
               if($role=="Admin" || ($username==$row['insertedby'] &&  $row['status']=="Telah Diperbaiki")){
                echo anchor('kerusakan/lap_kerusakan_pdf/'.$row['idkerusakan'], '<span  class="fa fa-file-pdf-o" aria-hidden="true"></span>','target="_blank"').'&nbsp;';
              }

              if($role=="Admin" || ($username==$row['insertedby'] &&  $row['status']!="Telah Diperbaiki")){
                echo anchor('kerusakan/kerusakan_form_update/'.$row['idkerusakan'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>').'&nbsp;';
                echo anchor('kerusakan/kerusakan_form_delete/'.$row['idkerusakan'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>');
              }
              ?>
            </td>
          </tr>
          <tr>
            <td></td>
            <th colspan="2">Uraian Kerusakan</th>
            <td colspan="4">
              <?=$row['uraiankerusakan']?>
            </td>
            <?php
              if($row['photokerusakan']!=""){ 
            ?>
            <th colspan="1">Photo Kerusakan</th>
            <td colspan="2">
              <a href="#" data-toggle="modal" data-target="#modalPhoto<?=$i?>">
                <img height="30" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photokerusakan']?>">
              </a>
              <!-- Modal -->
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
            </td>
            <?php
              }else{
            ?>
            <th colspan="1">Photo Kerusakan</th>
            <td colspan="2"></td>
            <?php
              }
            ?>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
</div>
