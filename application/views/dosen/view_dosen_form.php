<script>
  function button_cancel() {
    location.replace('<?php echo base_url();?>index.php/dosen');
  }

</script>
<div class="panel panel-info">
  <div class="panel-heading"> Data Dosen</div>
  <div class="panel-body">
    <?=form_open('dosen/dosen_manage','class="form-horizontal"')?>
      <?php if($action=="insert"){?>
      <div class="form-group">
        <label class="col-sm-1 control-label">Fakultas</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="idfakultas" value="">
        </div>
        <label class="col-sm-1 control-label">Program Studi</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="idprodi" value="">
        </div>
        <label class="col-sm-1 control-label">NIK</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="nik" value="">
        </div>
        <label class="col-sm-1 control-label">NIDN/NUPN</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="nidn" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Nama</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="namadosen" value="">
        </div>
        <label class="col-sm-1 control-label">Handphone</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="nohp" value="">
        </div>
        <label class="col-sm-1 control-label">e-Mail</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="email" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Alamat</label>
        <div class="col-sm-9">
          <input class="form-control" type="text" name="alamat" value="">
        </div>
        <div class=" col-sm-2">
          <?=form_hidden('action',$action)?>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="update"){?>
      <div class="form-group">
        <label class="col-sm-1 control-label">Fakultas</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="idfakultas" value="<?php echo $row['idfakultas']?>">
        </div>
        <label class="col-sm-1 control-label">Program Studi</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="idprodi" value="<?php echo $row['idprodi']?>">
        </div>
        <label class="col-sm-1 control-label">NIK</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="nik" value="<?php echo $row['nik']?>">
        </div>
        <label class="col-sm-1 control-label">NIDN/NUPN</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="nidn" value="<?php echo $row['nidn']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Nama</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="namadosen" value="<?php echo $row['namadosen']?>">
        </div>
        <label class="col-sm-1 control-label">Handphone</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="nohp" value="<?php echo $row['nohp']?>">
        </div>
        <label class="col-sm-1 control-label">e-Mail</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="email" value="<?php echo $row['email']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Alamat</label>
        <div class="col-sm-9">
          <input class="form-control" type="text" name="alamat" value="<?php echo $row['alamat']?>">
        </div>
        <div class="col-sm-2">
          <?=form_hidden('action',$action)?>
            <?=form_hidden('iddosen',$row['iddosen'])?>
              <button type="submit" class="btn btn-primary">Edit</button>
              <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="delete"){?>
      <div class="form-group">
        <label class="col-sm-1 control-label">Fakultas</label>
        <div class="col-sm-2">
          <?php echo $row['idfakultas']?>
        </div>
        <label class="col-sm-1 control-label">Program Studi</label>
        <div class="col-sm-2">
          <?php echo $row['idprodi']?>
        </div>
        <label class="col-sm-1 control-label">NIK</label>
        <div class="col-sm-2">
          <?php echo $row['nik']?>
        </div>
        <label class="col-sm-1 control-label">NIDN/NUPN</label>
        <div class="col-sm-2">
          <?php echo $row['nidn']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Nama</label>
        <div class="col-sm-4">
          <?php echo $row['namadosen']?>
        </div>
        <label class="col-sm-1 control-label">Handphone</label>
        <div class="col-sm-2">
          <?php echo $row['nohp']?>
        </div>
        <label class="col-sm-1 control-label">e-Mail</label>
        <div class="col-sm-3">
          <?php echo $row['email']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Alamat</label>
        <div class="col-sm-9">
          <?php echo $row['alamat']?>
        </div>
        <div class="col-sm-2">
          <?=form_hidden('action',$action)?>
            <?=form_hidden('iddosen',$row['iddosen'])?>
              <button type="submit" class="btn btn-primary">Hapus</button>
              <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }?>
      </form>
  </div>
</div>
