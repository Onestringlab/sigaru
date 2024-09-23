<script>
  function button_cancel() {
    location.replace('<?php echo base_url();?>index.php/fakultas');
  }

</script>
<div class="panel panel-primary">
  <div class="panel-heading"> Data Fakultas</div>
  <div class="panel-body">
    <?=form_open('fakultas/fakultas_manage','class="form-horizontal"')?>
      <?php if($action=="insert"){?>
      <div class="form-group">
        <label class="col-sm-1 control-label">Singkatan</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="singkatan" value="">
        </div>
        <label class="col-sm-1 control-label">Fakultas</label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="namafakultas" value="">
        </div>
        <div class="col-sm-2">
          <?=form_hidden('action',$action)?>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="update"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">idfakultas</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="idfakultas" value="<?php echo $row['idfakultas']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">singkatan</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="singkatan" value="<?php echo $row['singkatan']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">namafakultas</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="namafakultas" value="<?php echo $row['namafakultas']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">insertedby</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="insertedby" value="<?php echo $row['insertedby']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">inserteddate</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="inserteddate" value="<?php echo $row['inserteddate']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">updatedby</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="updatedby" value="<?php echo $row['updatedby']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">updateddate</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="updateddate" value="<?php echo $row['updateddate']?>">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <?=form_hidden('action',$action)?>
            <?=form_hidden('idfakultas',$row['idfakultas'])?>
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
        <label class="col-sm-2 control-label">namafakultas</label>
        <div class="col-sm-10">
          <?php echo $row['namafakultas']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">insertedby</label>
        <div class="col-sm-10">
          <?php echo $row['insertedby']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">inserteddate</label>
        <div class="col-sm-10">
          <?php echo $row['inserteddate']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">updatedby</label>
        <div class="col-sm-10">
          <?php echo $row['updatedby']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">updateddate</label>
        <div class="col-sm-10">
          <?php echo $row['updateddate']?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <?=form_hidden('action',$action)?>
            <?=form_hidden('idfakultas',$row['idfakultas'])?>
              <button type="submit" class="btn btn-primary">Delete</button>
              <button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
        </div>
      </div>
      <?php }?>
      </form>
  </div>
</div>
