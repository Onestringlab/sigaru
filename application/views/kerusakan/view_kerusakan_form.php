<script>
  function button_cancel() {
    location.replace('<?php echo base_url();?>index.php/kerusakan');
  }

</script>
<div class="panel panel-info">
  <div class="panel-heading">Data Kerusakan</div>
  <div class="panel-body">
    <?=form_open_multipart('kerusakan/kerusakan_manage','class="form-horizontal"')?>
      <?php if($action=="insert"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Pelaporan</label>
        <div class="col-sm-2">
          <input class="form-control" type="date" name="tglpelaporan" value="<?= date("Y-m-d")?>">
        </div>
        <label class="col-sm-2 control-label">Pelapor</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="pelapor" value="<?=$this->session->userdata('name')?>" readonly>
        </div>
        <label class="col-sm-2 control-label">NBM Pelapor</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="nbmpelapor" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Ruang</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="namaruang" value="">
        </div>
        <label class="col-sm-2 control-label">No. Ruang</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="noruang" value="">
        </div>
        <label class="col-sm-2 control-label">Lantai</label>
        <div class="col-sm-2">
          <input class="form-control" type="number" name="lantai" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Jenis Fasilitas</label>
        <div class="col-sm-2">
          <?php select_form($jnsfasilit_list,"kode","value","jnsfasilitas",""); ?>
        </div>
        <label class="col-sm-2 control-label">Projektor</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="projektor" value="0">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Kabel VGA/HDMI</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kabelvga" value="0">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">AC</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="ac" value="0">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Lampu</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="lampu" value="0">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Kipas Angin</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kipasangin" value="0">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kursi</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kursi" value="0">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Meja</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="meja" value="0">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Kunci Pintu</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kuncipintu" value="0">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Lain-lain</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="lemari" value="0">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Uraian Kerusakan</label>
        <div class="col-sm-6">
          <textarea class="form-control" name="uraiankerusakan"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-4">
        </div>
        <label class="col-sm-2 control-label">Photo Kerusakan</label>
        <div class="col-sm-6">
          <input class="form-control" type="file" name="userfile" required>
        </div>
      </div>
      <?php
      if($this->session->userdata('role')=="Admin"){ ?>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Penerima</label>
        <div class="col-sm-2">
          <input class="form-control" type="date" name="tglpenerima" value="" required>
        </div>
        <label class="col-sm-2 control-label">Nama Penerima</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="namapenerima" value="">
        </div>
        <label class="col-sm-2 control-label">NBM Penerima</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="nbmpenerierima" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Perbaikan</label>
        <div class="col-sm-2">
          <input class="form-control" type="date" name="tglperbaikan" value="" >
        </div>
        <label class="col-sm-2 control-label">Uraian Perbaikan</label>
        <div class="col-sm-6">
          <textarea class="form-control" name="uraianperbaikan"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Diperbaiki Oleh</label>
        <div class="col-sm-2">
          <?php select_form($tukang_list,"kode","value","perbaikanoleh",""); ?>
        </div>
        <?php } ?>
        <label class="col-sm-2 control-label">Status</label>
        <div class="col-sm-2">
          <?php
            if($this->session->userdata('role')=="Admin"){
                select_form($sttrusak_list,"kode","value","status","Dilaporkan");
            }else{
                echo ("Dilaporkan");
                echo form_hidden("status","Dilaporkan");
            }
          ?>
        </div>
        <div class="col-sm-4">
          <?=form_hidden('action',$action)?>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="update"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Pelaporan</label>
        <div class="col-sm-2">
          <input class="form-control" type="date" name="tglpelaporan" value="<?php echo $row['tglpelaporan']?>">
        </div>
        <label class="col-sm-2 control-label">Pelapor</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="pelapor" value="<?php echo $row['pelapor']?>" readonly>
        </div>
        <label class="col-sm-2 control-label">NBM Pelapor</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="nbmpelapor" value="<?php echo $row['nbmpelapor']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Ruang</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="namaruang" value="<?php echo $row['namaruang']?>">
        </div>
        <label class="col-sm-2 control-label">No. Ruang</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="noruang" value="<?php echo $row['noruang']?>">
        </div>
        <label class="col-sm-2 control-label">Lantai</label>
        <div class="col-sm-2">
          <input class="form-control" type="number" name="lantai" value="<?php echo $row['lantai']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Jenis Fasilitas</label>
        <div class="col-sm-2">
          <?php select_form($jnsfasilit_list,"kode","value","jnsfasilitas",$row['jnsfasilitas']); ?>
        </div>
        <label class="col-sm-2 control-label">Projektor</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="projektor" value="<?php echo $row['projektor']?>">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Kabel VGA/HDMI</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kabelvga" value="<?php echo $row['kabelvga']?>">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">AC</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="ac" value="<?php echo $row['ac']?>">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Lampu</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="lampu" value="<?php echo $row['lampu']?>">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Kipas Angin</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kipasangin" value="<?php echo $row['kipasangin']?>">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kursi</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kursi" value="<?php echo $row['kursi']?>">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Meja</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="meja" value="<?php echo $row['meja']?>">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Kunci Pintu</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kuncipintu" value="<?php echo $row['kuncipintu']?>">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Lain-lain</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="lemari" value="<?php echo $row['lemari']?>">
        </div>
        <div class="col-sm-1">
          unit/buah
        </div>
        <label class="col-sm-2 control-label">Uraian Kerusakan</label>
        <div class="col-sm-6">
          <textarea class="form-control" name="uraiankerusakan"><?php echo $row['uraiankerusakan']?></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-4">
        </div>
        <label class="col-sm-2 control-label">Photo Kerusakan (Max:2MB)</label>
        <div class="col-sm-4">
          <input class="form-control" type="file" name="userfile">
        </div>
        <div class="col-sm-2">
          <img width="120" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photokerusakan']?>">
        </div>
      </div>
      <?php
      if($this->session->userdata('role')=="Admin"){ ?>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Penerima</label>
        <div class="col-sm-2">
          <input class="form-control" type="date" name="tglpenerima" value="<?php echo $row['tglpenerima']?>" required>
        </div>
        <label class="col-sm-2 control-label">Nama Penerima</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="namapenerima" value="<?php echo $row['namapenerima']?>">
        </div>
        <label class="col-sm-2 control-label">NBM Penerima</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="nbmpenerierima" value="<?php echo $row['nbmpenerierima']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Perbaikan</label>
        <div class="col-sm-2">
          <input class="form-control" type="date" name="tglperbaikan" value="<?php echo $row['tglperbaikan']?>" >
        </div>
        <label class="col-sm-2 control-label">Uraian Perbaikan</label>
        <div class="col-sm-6">
          <textarea class="form-control" name="uraianperbaikan"><?php echo $row['uraianperbaikan']?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Diperbaiki Oleh</label>
        <div class="col-sm-2">
          <?php select_form($tukang_list,"kode","value","perbaikanoleh",$row['perbaikanoleh']); ?>
        </div>
        <?php } ?>
        <label class="col-sm-2 control-label">Status</label>
        <div class="col-sm-2">
          <?php
            if($this->session->userdata('role')=="Admin"){
                select_form($sttrusak_list,"kode","value","status",$row['status']);
            }else{
                echo $row['status'];
                echo form_hidden("status",$row['status']);
            }
          ?>
        </div>
        <div class="col-sm-2">
          <?=form_hidden('action',$action)?>
          <?=form_hidden('idkerusakan',$row['idkerusakan'])?>
          <?php echo form_hidden('filetemp',$row['photokerusakan'])?>
          <button type="submit" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="delete"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Pelaporan</label>
        <div class="col-sm-2">
          <?php echo $row['tglpelaporan']?>
        </div>
        <label class="col-sm-2 control-label">Pelapor</label>
        <div class="col-sm-2">
          <?php echo $row['pelapor']?>
        </div>
        <label class="col-sm-2 control-label">NBM Pelapor</label>
        <div class="col-sm-2">
          <?php echo $row['nbmpelapor']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Ruang</label>
        <div class="col-sm-2">
          <?php echo $row['namaruang']?>
        </div>
        <label class="col-sm-2 control-label">No. Ruang</label>
        <div class="col-sm-2">
          <?php echo $row['noruang']?>
        </div>
        <label class="col-sm-2 control-label">Lantai</label>
        <div class="col-sm-2">
          <?php echo $row['lantai']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Jenis Fasilitas</label>
        <div class="col-sm-2">
          <?php echo $row['jnsfasilitas']?>
        </div>
        <label class="col-sm-2 control-label">Projektor</label>
        <div class="col-sm-2">
          <?php echo $row['projektor']?> unit/buah
        </div>
        <label class="col-sm-2 control-label">Kabel VGA/HDMI</label>
        <div class="col-sm-2">
          <?php echo $row['kabelvga']?> unit/buah
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">AC</label>
        <div class="col-sm-2">
          <?php echo $row['ac']?> unit/buah
        </div>
        <label class="col-sm-2 control-label">Lampu</label>
        <div class="col-sm-2">
          <?php echo $row['lampu']?> unit/buah
        </div>
        <label class="col-sm-2 control-label">Kipas Angin</label>
        <div class="col-sm-2">
          <?php echo $row['kipasangin']?> unit/buah
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kursi</label>
        <div class="col-sm-2">
          <?php echo $row['kursi']?> unit/buah
        </div>
        <label class="col-sm-2 control-label">Meja</label>
        <div class="col-sm-2">
          <?php echo $row['meja']?> unit/buah
        </div>
        <label class="col-sm-2 control-label">Kunci Pintu</label>
        <div class="col-sm-2">
          <?php echo $row['kuncipintu']?> unit/buah
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Lain-lain</label>
        <div class="col-sm-2">
          <?php echo $row['lemari']?> unit/buah
        </div>
        <label class="col-sm-2 control-label">Uraian Kerusakan</label>
        <div class="col-sm-6">
          <?php echo $row['uraiankerusakan']?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-4">
        </div>
        <label class="col-sm-2 control-label">Photo Kerusakan (Max:2MB)</label>
        <div class="col-sm-6">
          <img width="80" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photokerusakan']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Penerima</label>
        <div class="col-sm-2">
          <?php echo $row['tglpenerima']?>
        </div>
        <label class="col-sm-2 control-label">Nama Penerima</label>
        <div class="col-sm-2">
          <?php echo $row['namapenerima']?>
        </div>
        <label class="col-sm-2 control-label">NBM Penerima</label>
        <div class="col-sm-2">
          <?php echo $row['nbmpenerierima']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Perbaikan</label>
        <div class="col-sm-2">
          <?php echo $row['tglperbaikan']?>
        </div>
        <label class="col-sm-2 control-label">Uraian Perbaikan</label>
        <div class="col-sm-6">
          <?php echo $row['uraianperbaikan']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Diperbaiki Oleh</label>
        <div class="col-sm-2">
          <?php echo $row['perbaikanoleh']?>
        </div>
        <label class="col-sm-2 control-label">Status</label>
        <div class="col-sm-2">
          <?php echo $row['status']?>
        </div>
        <div class="col-sm-2">
          <?=form_hidden('action',$action)?>
          <?=form_hidden('idkerusakan',$row['idkerusakan'])?>
          <?php echo form_hidden('filetemp',$row['photokerusakan'])?>
          <button type="submit" class="btn btn-primary">Hapus</button>
          <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }?>
      </form>
  </div>
</div>
