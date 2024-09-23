<script>
  function button_cancel() {
    location.replace('<?php echo base_url();?>index.php/jadwal');
  }

</script>
<div class="panel panel-info">
  <div class="panel-heading"> Data Jadwal</div>
  <div class="panel-body">
    <?=form_open('jadwal/jadwal_manage','class="form-horizontal"')?>
      <?php if($action=="insert"){?>
      <div class="form-group">
        <label class="col-sm-1 control-label">Tahun Ajaran</label>
        <div class="col-sm-2">
          <?php select_form($thajar_list,"idthajar","thajargangen","idthnajaran",""); ?>
        </div>
        <label class="col-sm-1 control-label">Program Studi</label>
        <div class="col-sm-3">
          <?php select_form($prodi_list,"idprodi","namaprodi","idprodi",""); ?>
        </div>
        <label class="col-sm-1 control-label">Mata Kuliah</label>
        <div class="col-sm-4">
          <?php select_form($matkul_list,"idmatkul","matakuliah","matakuliah",""); ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Dosen</label>
        <div class="col-sm-2">
          <?php select_form($dosen_list,"iddosen","namadosen","iddosen",""); ?>
        </div>
        <label class="col-sm-1 control-label">Hari</label>
        <div class="col-sm-2">
          <?php select_form($hari_list,"idlov","value","hari",""); ?>
        </div>
        <label class="col-sm-1 control-label">Mulai</label>
        <div class="col-sm-2">
          <input class="form-control" type="time" name="mulai" value="">
        </div>
        <label class="col-sm-1 control-label">Selesai</label>
        <div class="col-sm-2">
          <input class="form-control" type="time" name="selesai" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Ruang No</label>
        <div class="col-sm-2">
          <?php select_form($kelas_list,"idkelas","nokelas","idruang",""); ?>
        </div>
        <label class="col-sm-1 control-label">Kelas</label>
        <div class="col-sm-2">
          <?php select_form($kelas_lov_list,"idlov","kode","kelas",""); ?>
        </div>

        <div class="col-sm-offset-4 col-sm-2">
          <?=form_hidden('action',$action)?>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="update"){?>
      <div class="form-group">
        <label class="col-sm-1 control-label">Tahun Ajaran</label>
        <div class="col-sm-2">
          <?php select_form($thajar_list,"idthajar","thajargangen","idthnajaran",$row['idthnajaran']); ?>
        </div>
        <label class="col-sm-1 control-label">Program Studi</label>
        <div class="col-sm-3">
          <?php select_form($prodi_list,"idprodi","namaprodi","idprodi",$row['idprodi']); ?>
        </div>
        <label class="col-sm-1 control-label">Mata Kuliah</label>
        <div class="col-sm-4">
          <?php select_form($matkul_list,"idmatkul","matakuliah","matakuliah",$row['matakuliah']); ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Dosen</label>
        <div class="col-sm-3">
          <?php select_form($dosen_list,"iddosen","namadosen","iddosen",$row['iddosen']); ?>
        </div>
        <label class="col-sm-1 control-label">Hari</label>
        <div class="col-sm-1">
          <?php select_form($hari_list,"idlov","value","hari",$row['hari']); ?>
        </div>
        <label class="col-sm-1 control-label">Mulai</label>
        <div class="col-sm-2">
          <input class="form-control" type="time" name="mulai" value="<?php echo $row['mulai']?>">
        </div>
        <label class="col-sm-1 control-label">Selesai</label>
        <div class="col-sm-2">
          <input class="form-control" type="time" name="selesai" value="<?php echo $row['selesai']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Ruang No</label>
        <div class="col-sm-2">
          <?php select_form($kelas_list,"idkelas","nokelas","idruang",$row['idruang']); ?>
        </div>
        <label class="col-sm-1 control-label">Kelas</label>
        <div class="col-sm-2">
          <?php select_form($kelas_lov_list,"idlov","kode","kelas",$row['kelas']); ?>
        </div>
        <div class="col-sm-offset-4 col-sm-2">
          <?=form_hidden('action',$action)?>
            <?=form_hidden('idjadwal',$row['idjadwal'])?>
              <button type="submit" class="btn btn-primary">Edit</button>
              <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="delete"){?>
      <div class="form-group">
        <label class="col-sm-1 control-label">Tahun Ajaran</label>
        <div class="col-sm-2">
          <?php echo $row['thajar']."-".$row['gangen']; ?>
        </div>
        <label class="col-sm-1 control-label">Program Studi</label>
        <div class="col-sm-3">
          <?php echo $row['namaprodi']; ?>
        </div>
        <label class="col-sm-1 control-label">Mata Kuliah</label>
        <div class="col-sm-4">
          <?php echo $row['namamatkul']; ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Dosen</label>
        <div class="col-sm-3">
          <?php echo $row['namadosen']; ?>
        </div>
        <label class="col-sm-1 control-label">Hari</label>
        <div class="col-sm-1">
          <?php echo $row['namahari']; ?>
        </div>
        <label class="col-sm-1 control-label">Mulai</label>
        <div class="col-sm-2">
          <?php echo $row['mulai']; ?>
        </div>
        <label class="col-sm-1 control-label">Selesai</label>
        <div class="col-sm-2">
          <?php echo $row['selesai']; ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Ruang No</label>
        <div class="col-sm-2">
          <?php echo $row['nokelas']; ?>
        </div>
        <label class="col-sm-1 control-label">Kelas</label>
        <div class="col-sm-2">
          <?php echo $row['kelas']; ?>
        </div>
        <div class="col-sm-offset-4 col-sm-2">
          <?=form_hidden('action',$action)?>
          <?=form_hidden('idjadwal',$row['idjadwal'])?>
          <button type="submit" class="btn btn-primary">Hapus</button>
          <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }?>
      </form>
  </div>
</div>
