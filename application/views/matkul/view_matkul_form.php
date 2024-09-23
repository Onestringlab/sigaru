
<script>
function button_cancel(){
  location.replace('<?php echo base_url();?>index.php/matkul');
}
</script>
<div class="panel panel-primary">
  <div class="panel-heading"> Data Matkul</div>
    <div class="panel-body">
<?=form_open('matkul/matkul_manage','class="form-horizontal"')?>
<?php if($action=="insert"){?>
<div class="form-group">
  <label class="col-sm-2 control-label">idmatkul</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="idmatkul" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">idprodi</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="idprodi" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">kodematkul</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="kodematkul" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">matakuliah</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="matakuliah" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">sks</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="sks" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">semester</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="semester" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">insertedby</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="insertedby" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">inserteddate</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="inserteddate" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">updatedby</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="updatedby" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">updateddate</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="updateddate" value="">
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
  <label class="col-sm-2 control-label">idmatkul</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="idmatkul" value="<?php echo $row['idmatkul']?>">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">idprodi</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="idprodi" value="<?php echo $row['idprodi']?>">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">kodematkul</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="kodematkul" value="<?php echo $row['kodematkul']?>">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">matakuliah</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="matakuliah" value="<?php echo $row['matakuliah']?>">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">sks</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="sks" value="<?php echo $row['sks']?>">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">semester</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="semester" value="<?php echo $row['semester']?>">
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
    <?=form_hidden('idmatkul',$row['idmatkul'])?>
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
  </div>
</div>
<?php }if($action=="delete"){?>
<div class="form-group">
  <label class="col-sm-2 control-label">idmatkul</label>
  <div class="col-sm-10">
     <?php echo $row['idmatkul']?>
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">idprodi</label>
  <div class="col-sm-10">
     <?php echo $row['idprodi']?>
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">kodematkul</label>
  <div class="col-sm-10">
     <?php echo $row['kodematkul']?>
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">matakuliah</label>
  <div class="col-sm-10">
     <?php echo $row['matakuliah']?>
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">sks</label>
  <div class="col-sm-10">
     <?php echo $row['sks']?>
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">semester</label>
  <div class="col-sm-10">
     <?php echo $row['semester']?>
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
    <?=form_hidden('idmatkul',$row['idmatkul'])?>
    <button type="submit" class="btn btn-primary">Delete</button>
    <button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
  </div>
</div>
<?php }?>
</form>
  </div>
</div>

