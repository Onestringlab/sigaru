<script>
  function button_cancel() {
    location.replace('<?php echo base_url();?>index.php/ruangan');
  }

</script>
<?php if($action=="insert" || $action=="update"){?>
<script>
  $(document).ready(function() {
    $("#formRuangan").validate({
      rules: {
        noruangan: "required",
        namaruangan: "required",
        gedung: "required",
        lantai: "required",
        kapasitas: "required",
        panjang: "required",
        lebar: "required",

      },
      messages: {
        noruangan: "",
        namaruangan: "",
        gedung: "",
        kapasitas: "",
        lantai: "",
        panjang: "",
        lebar: ""
      }
    });
  });

</script>
<?php } ?>

<div class="panel panel-info">
  <div class="panel-heading"> Kelola Data Ruangan</div>
  <div class="panel-body">
    <?=form_open_multipart('ruangan/ruangan_manage','class="form-horizontal" id="formRuangan"')?>
      <?php if($action=="insert"){?>
      <div class="form-group">
        <label class="col-sm-1 control-label">No Ruangan</label>
        <div class="col-sm-1">
          <input class="form-control" type="text" name="noruangan" value="">
        </div>
        <label class="col-sm-1 control-label">Nama Ruangan</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="namaruangan" value="">
        </div>
        <label class="col-sm-1 control-label">Gedung</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="gedung" value="">
        </div>
        <label class="col-sm-1 control-label">Lantai</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="lantai" value="">
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
        <label class="col-sm-1 control-label">No Ruangan</label>
        <div class="col-sm-1">
          <input class="form-control" type="text" name="noruangan" value="<?php echo $row['noruangan']?>">
        </div>
        <label class="col-sm-1 control-label">Nama Ruangan</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="namaruangan" value="<?php echo $row['namaruangan']?>">
        </div>
        <label class="col-sm-1 control-label">Gedung</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="gedung" value="<?php echo $row['gedung']?>">
        </div>
        <label class="col-sm-1 control-label">Lantai</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="lantai" value="<?php echo $row['lantai']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Kapasitas (orang)</label>
        <div class="col-sm-1">
          <input class="form-control" type="text" name="kapasitas" value="<?php echo $row['kapasitas']?>">
        </div>
        <label class="col-sm-1 control-label">Panjang (meter)</label>
        <div class="col-sm-1">
          <input class="form-control" type="text" name="panjang" value="<?php echo $row['panjang']?>">
        </div>
        <label class="col-sm-1 control-label">Lebar (meter)</label>
        <div class="col-sm-1">
          <input class="form-control" type="text" name="lebar" value="<?php echo $row['lebar']?>">
        </div>
        <label class="col-sm-1 control-label">Photo</label>
        <div class="col-sm-2">
          <input class="form-control" type="file" name="userfile">
        </div>
        <div class="col-sm-1">
          <img width="80" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
        </div>
        <div class="col-sm-2">
          <?=form_hidden('action',$action)?>
            <?=form_hidden('idruangan',$row['idruangan'])?>
              <?=form_hidden('filetemp',$row['photo'])?>
                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="delete"){?>

      <div class="form-group">
        <label class="col-sm-1 control-label">No Ruangan</label>
        <div class="col-sm-1">
          <?php echo $row['noruangan']?>
        </div>
        <label class="col-sm-1 control-label">Nama Ruangan</label>
        <div class="col-sm-3">
          <?php echo $row['namaruangan']?>
        </div>
        <label class="col-sm-1 control-label">Gedung</label>
        <div class="col-sm-3">
          <?php echo $row['gedung']?>
        </div>
        <label class="col-sm-1 control-label">Lantai</label>
        <div class="col-sm-1">
          <?php echo $row['lantai']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Kapasitas</label>
        <div class="col-sm-1">
          <?php echo $row['kapasitas']?>
        </div>
        <label class="col-sm-1 control-label">Panjang</label>
        <div class="col-sm-1">
          <?php echo $row['panjang']?>
        </div>
        <label class="col-sm-1 control-label">Lebar</label>
        <div class="col-sm-1">
          <?php echo $row['lebar']?>
        </div>
        <label class="col-sm-1 control-label">Photo</label>
        <div class="col-sm-3">
          <img width="80" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Dimasukkan Oleh</label>
        <div class="col-sm-2">
          <?php echo $row['insertedby']?>
        </div>
        <label class="col-sm-1 control-label">Waktu</label>
        <div class="col-sm-2">
          <?php echo $row['inserteddate']?>
        </div>
        <label class="col-sm-1 control-label">Diedit Oleh</label>
        <div class="col-sm-2">
          <?php echo $row['updatedby']?>
        </div>
        <label class="col-sm-1 control-label">Waktu</label>
        <div class="col-sm-2">
          <?php echo $row['updateddate']?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
          <?=form_hidden('action',$action)?>
          <?=form_hidden('idruangan',$row['idruangan'])?>
          <?php echo form_hidden('filetemp',$row['photo'])?>
          <button type="submit" class="btn btn-primary">Hapus</button>
          <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }?>
      </form>
  </div>
</div>

<?php $this->load->view('ruangan/view_ruangan'); ?>
