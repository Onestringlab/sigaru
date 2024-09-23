
<script>
function button_cancel(){
  location.replace('<?php echo base_url();?>index.php/thajar');
}
</script>
<div class="panel panel-primary">
  <div class="panel-heading"> Data Thajar</div>
    <div class="panel-body">
<?=form_open('thajar/thajar_manage','class="form-horizontal"')?>
<?php if($action=="insert"){?>
<div class="form-group">
  <label class="col-sm-2 control-label">idthajar</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="idthajar" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">thajar</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="thajar" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">gangen</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="gangen" value="">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">status</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="status" value="">
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
  <label class="col-sm-2 control-label">idthajar</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="idthajar" value="<?php echo $row['idthajar']?>">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">thajar</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="thajar" value="<?php echo $row['thajar']?>">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">gangen</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="gangen" value="<?php echo $row['gangen']?>">
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">status</label>
  <div class="col-sm-10">
     <input class="form-control" type="text" name="status" value="<?php echo $row['status']?>">
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
    <?=form_hidden('idthajar',$row['idthajar'])?>
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
  </div>
</div>
<?php }if($action=="delete"){?>
<div class="form-group">
  <label class="col-sm-2 control-label">idthajar</label>
  <div class="col-sm-10">
     <?php echo $row['idthajar']?>
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">thajar</label>
  <div class="col-sm-10">
     <?php echo $row['thajar']?>
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">gangen</label>
  <div class="col-sm-10">
     <?php echo $row['gangen']?>
       </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">status</label>
  <div class="col-sm-10">
     <?php echo $row['status']?>
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
    <?=form_hidden('idthajar',$row['idthajar'])?>
    <button type="submit" class="btn btn-primary">Delete</button>
    <button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
  </div>
</div>
<?php }?>
</form>
  </div>
</div>

