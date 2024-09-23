<script>
  function button_cancel() {
    location.replace('<?php echo base_url();?>index.php/prodi');
  }

</script>
<div class="panel panel-info">
  <div class="panel-heading"> Data Prodi</div>
  <div class="panel-body">
    <?=form_open('prodi/prodi_manage','class="form-horizontal"')?>
      <?php if($action=="insert"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">idfakultas</label>
        <div class="col-sm-10">
          <?php select_form($fakultas_list,"idfakultas","namafakultas","idfakultas",""); ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">singkatan</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="singkatan" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">namaprodi</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="namaprodi" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">skprodi</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="skprodi" value="">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <?=form_hidden('action',$action)?>
            <button type="submit" class="btn btn-primary">Insert</button>
            <button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
        </div>
      </div>
      <?php }if($action=="update"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">idfakultas</label>
        <div class="col-sm-10">
          <?php select_form($fakultas_list,"idfakultas","namafakultas","idfakultas",$row['idfakultas']); ?>

        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">singkatan</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="singkatan" value="<?php echo $row['singkatan']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">namaprodi</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="namaprodi" value="<?php echo $row['namaprodi']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">skprodi</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="skprodi" value="<?php echo $row['skprodi']?>">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <?=form_hidden('action',$action)?>
            <?=form_hidden('idprodi',$row['idprodi'])?>
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
        </div>
      </div>
      <?php }if($action=="delete"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">idfakultas</label>
        <div class="col-sm-10">
          <?php echo $row['idfakultas']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">singkatan</label>
        <div class="col-sm-10">
          <?php echo $row['singkatan']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">namaprodi</label>
        <div class="col-sm-10">
          <?php echo $row['namaprodi']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">skprodi</label>
        <div class="col-sm-10">
          <?php echo $row['skprodi']?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <?=form_hidden('action',$action)?>
            <?=form_hidden('idprodi',$row['idprodi'])?>
              <button type="submit" class="btn btn-primary">Delete</button>
              <button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
        </div>
      </div>
      <?php }?>
      </form>
  </div>
</div>
