<script>
  function button_cancel() {
    location.replace('<?php echo base_url();?>index.php/kelas');
  }

</script>
<div class="panel panel-info">
  <div class="panel-heading"> Data Kelas</div>
  <div class="panel-body">
    <?=form_open_multipart('kelas/kelas_manage','class="form-horizontal"')?>
      <?php if($action=="insert"){?>
      <div class="form-group">
        <label class="col-sm-1 control-label">No. Kelas</label>
        <div class="col-sm-1">
          <input class="form-control" type="text" name="nokelas" value="">
        </div>
        <label class="col-sm-1 control-label">Nama</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="namakelas" value="">
        </div>
        <label class="col-sm-1 control-label">Gedung</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="gedung" value="">
        </div>
        <label class="col-sm-1 control-label">Lantai</label>
        <div class="col-sm-1">
          <input class="form-control" type="text" name="lantai" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Kapasitas (orang)</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kapasitas" value="">
        </div>
        <label class="col-sm-1 control-label">Panjang (meter)</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="panjang" value="">
        </div>
        <label class="col-sm-1 control-label">Lebar (meter)</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="lebar" value="">
        </div>
        <label class="col-sm-1 control-label">Photo</label>
        <div class="col-sm-3">
          <input class="form-control" type="file" name="userfile">
        </div>
        <div class="col-sm-2">
          <?=form_hidden('action',$action)?>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="update"){?>
      <div class="form-group">
        <label class="col-sm-1 control-label">No. Kelas</label>
        <div class="col-sm-1">
          <input class="form-control" type="text" name="nokelas" value="<?php echo $row['nokelas']?>">
        </div>
        <label class="col-sm-1 control-label">Nama</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="namakelas" value="<?php echo $row['namakelas']?>">
        </div>
        <label class="col-sm-1 control-label">Gedung</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="gedung" value="<?php echo $row['gedung']?>">
        </div>
        <label class="col-sm-1 control-label">Lantai</label>
        <div class="col-sm-1">
          <input class="form-control" type="text" name="lantai" value="<?php echo $row['lantai']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Kapasitas (orang)</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kapasitas" value="<?php echo $row['kapasitas']?>">
        </div>
        <label class="col-sm-1 control-label">Panjang (meter)</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="panjang" value="<?php echo $row['panjang']?>">
        </div>
        <label class="col-sm-1 control-label">Lebar (meter)</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="lebar" value="<?php echo $row['lebar']?>">
        </div>
        <label class="col-sm-1 control-label">Photo</label>
        <div class="col-sm-3">
          <input class="form-control" type="file" name="userfile"><br>
          <img width="80" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
        </div>
        <div class="col-sm-2">
          <?=form_hidden('action',$action)?>
          <?=form_hidden('idkelas',$row['idkelas'])?>
          <?php echo form_hidden('filetemp',$row['photo'])?>
          <button type="submit" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="delete"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">No. Kelas</label>
        <div class="col-sm-10">
          <?php echo $row['nokelas']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
          <?php echo $row['namakelas']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Gedung</label>
        <div class="col-sm-10">
          <?php echo $row['gedung']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Lantai</label>
        <div class="col-sm-10">
          <?php echo $row['lantai']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kapasitas (orang)</label>
        <div class="col-sm-10">
          <?php echo $row['kapasitas']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Panjang (meter)</label>
        <div class="col-sm-10">
          <?php echo $row['panjang']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Lebar (meter)</label>
        <div class="col-sm-10">
          <?php echo $row['lebar']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Photo</label>
        <div class="col-sm-10">
          <img width="80" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <?=form_hidden('action',$action)?>
          <?=form_hidden('idkelas',$row['idkelas'])?>
          <?php echo form_hidden('filetemp',$row['photo'])?>
          <button type="submit" class="btn btn-primary">Hapus</button>
          <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }?>
      </form>
  </div>
</div>


<?php $this->load->view('kelas/view_kelas'); ?>
