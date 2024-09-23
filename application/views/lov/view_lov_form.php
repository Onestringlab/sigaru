
<script>
function button_cancel(){
  location.replace('<?php echo base_url();?>index.php/lov');
}
</script>
<?php if($action=="insert" || $action=="update"){?>
<script>
    $(document).ready(function() {
        $("#formLOV").validate({
            rules:{
                kategori:"required",
                kode:"required",
                value:"required",
                email: {
                    required: true,
                    email: true
                },
                repassword:{
                    equalTo:'[name="password"]'
                },
                role:"required",
                status:"required"
            },
            messages:{
                kategori: "",
                kode:"",
                value:""
            }
        }); //id form
    });
</script>
<?php } ?>

<div class="panel panel-info">
  <div class="panel-heading"> Data Lov</div>
    <div class="panel-body">
<?=form_open('lov/lov_manage','class="form-horizontal" id="formLOV"')?>
<?php if($action=="insert"){?>
<div class="form-group">
  <label class="col-sm-1 control-label">Kategori</label>
  <div class="col-sm-2">
     <input class="form-control" type="text" name="kategori" value="">
       </div>
  <label class="col-sm-1 control-label">Kode</label>
  <div class="col-sm-2">
     <input class="form-control" type="text" name="kode" value="">
       </div>
  <label class="col-sm-1 control-label">Value</label>
  <div class="col-sm-3">
     <input class="form-control" type="text" name="value" value="">
       </div>
  <div class="col-sm-2">
    <?=form_hidden('action',$action)?>
    <button type="submit" class="btn btn-primary">Tambah</button>
    <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
  </div>
</div>
<?php }if($action=="update"){?>
<div class="form-group">
  <label class="col-sm-1 control-label">Kategori</label>
  <div class="col-sm-2">
     <input class="form-control" type="text" name="kategori" value="<?php echo $row['kategori']?>">
       </div>

  <label class="col-sm-1 control-label">Kode</label>
  <div class="col-sm-2">
     <input class="form-control" type="text" name="kode" value="<?php echo $row['kode']?>">
       </div>

  <label class="col-sm-1 control-label">Value</label>
  <div class="col-sm-3">
     <input class="form-control" type="text" name="value" value="<?php echo $row['value']?>">
       </div>
  <div class="col-sm-2">
    <?=form_hidden('action',$action)?>
    <?=form_hidden('idlov',$row['idlov'])?>
    <button type="submit" class="btn btn-primary">Edit</button>
    <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
  </div>
</div>
<?php }if($action=="delete"){?>
<div class="form-group">
  <label class="col-sm-1 control-label">Kategori</label>
  <div class="col-sm-2">
     <?php echo $row['kategori']?>
       </div>
  <label class="col-sm-1 control-label">Kode</label>
  <div class="col-sm-2">
     <?php echo $row['kode']?>
       </div>
  <label class="col-sm-1 control-label">Value</label>
  <div class="col-sm-3">
     <?php echo $row['value']?>
       </div>
  <div class=" col-sm-2">
    <?=form_hidden('action',$action)?>
    <?=form_hidden('idlov',$row['idlov'])?>
    <button type="submit" class="btn btn-primary">Hapus</button>
    <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
  </div>
</div>
<?php }?>
</form>
  </div>
</div>
 <?php $this->load->view('lov/view_lov'); ?>
