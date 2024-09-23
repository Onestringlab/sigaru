
<script>
function button_cancel(){
  location.replace('<?php echo base_url();?>index.php/user');
}
</script>
<?php if($action=="insert" || $action=="update"){?>
<script>
    $(document).ready(function() {
        $("#formUser").validate({
            rules:{
                username:"required",
                nama:"required",
                prodi:"required",
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
                username: "",
                nama:"",
                prodi:"",
                email:"",
                repassword:"",
                role:"",
                status:""
            }
        }); //id form
    });
</script>
<?php } ?>

<div class="panel panel-info">
  <div class="panel-heading">Kelola Data User</div>
    <div class="panel-body">
<?=form_open('user/user_manage','class="form-horizontal" id="formUser"')?>
<?php if($action=="insert"){?>
<div class="form-group">
  <label class="col-sm-1 control-label">Username</label>
  <div class="col-sm-3">
     <input class="form-control" type="text" name="username" value="">
       </div>
  <label class="col-sm-1 control-label">Nama</label>
  <div class="col-sm-3">
     <input class="form-control" type="text" name="nama" value="">
       </div>
  <label class="col-sm-1 control-label">Bagian/Prodi</label>
  <div class="col-sm-3">
     <input class="form-control" type="text" name="prodi" value="">
       </div>
</div>

<div class="form-group">
  <label class="col-sm-1 control-label">E-mail</label>
  <div class="col-sm-3">
     <input class="form-control" type="text" name="email" value="">
    </div>
  <label class="col-sm-1 control-label">Passwod</label>
  <div class="col-sm-3">
     <input class="form-control" type="password" name="password" value="" autocomplete="off">
    </div>
    <label class="col-sm-1 control-label">Re-Passwod</label>
  <div class="col-sm-3">
     <input class="form-control" type="password" name="repassword" value="" autocomplete="off">
    </div>
</div>
<div class="form-group">
  <label class="col-sm-1 control-label">Role</label>
  <div class="col-sm-3">
       <?php select_form($role_list,"kode","value","role",""); ?>
       </div>
  <label class="col-sm-1 control-label">Status</label>
  <div class="col-sm-3">
     <?php select_form($status_list,"kode","value","status",""); ?>
       </div>
  <div class="col-sm-2">
    <?=form_hidden('action',$action)?>
    <button type="submit" class="btn btn-primary">Tambah</button>
    <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
  </div>
</div>
<?php }if($action=="update"){?>
<div class="form-group">
  <label class="col-sm-1 control-label">username</label>
  <div class="col-sm-3">
     <input class="form-control" type="text" name="username" value="<?php echo $row['username']?>">
    </div>
  <label class="col-sm-1 control-label">Nama</label>
  <div class="col-sm-3">
     <input class="form-control" type="text" name="nama" value="<?php echo $row['nama']?>">
    </div>
  <label class="col-sm-1 control-label">Bagian/Prodi</label>
  <div class="col-sm-3">
     <input class="form-control" type="text" name="prodi" value="<?php echo $row['prodi']?>">
    </div>
</div>
<div class="form-group">
  <label class="col-sm-1 control-label">Email</label>
  <div class="col-sm-3">
     <input class="form-control" type="text" name="email" value="<?php echo $row['email']?>">
    </div>
  <label class="col-sm-1 control-label">Password</label>
  <div class="col-sm-3">
     <input class="form-control" type="password" name="password" value="" autocomplete="off">
    </div>
    <label class="col-sm-1 control-label">Re-Passwod</label>
  <div class="col-sm-3">
     <input class="form-control" type="password" name="repassword" value="" autocomplete="off">
    </div>
</div>
<div class="form-group">
  <label class="col-sm-1 control-label">Role</label>
  <div class="col-sm-3">
        <?php select_form($role_list,"kode","value","role",$row['role']); ?>
    </div>
  <label class="col-sm-1 control-label">Status</label>
  <div class="col-sm-3">
     <?php select_form($status_list,"kode","value","status",$row['status']); ?>
    </div>
  <div class="col-sm-2">
    <?=form_hidden('action',$action)?>
    <?=form_hidden('iduser',$row['iduser'])?>
    <button type="submit" class="btn btn-primary">Edit</button>
    <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
  </div>
</div>
<?php }if($action=="delete"){?>
<div class="form-group">
  <label class="col-sm-1 control-label">iduser</label>
  <div class="col-sm-3">
     <?php echo $row['iduser']?>
    </div>
  <label class="col-sm-1 control-label">Username</label>
  <div class="col-sm-3">
     <?php echo $row['username']?>
       </div>

  <label class="col-sm-1 control-label">Nama</label>
  <div class="col-sm-3">
     <?php echo $row['nama']?>
       </div>
</div>
<div class="form-group">
  <label class="col-sm-1 control-label">Bagian/Prodi</label>
  <div class="col-sm-2">
     <?php echo $row['prodi']?>
       </div>
  <label class="col-sm-1 control-label">Email</label>
  <div class="col-sm-2">
     <?php echo $row['email']?>
       </div>
  <label class="col-sm-1 control-label">Role</label>
  <div class="col-sm-2">
     <?php echo $row['role']?>
       </div>
  <label class="col-sm-1 control-label">Status</label>
  <div class="col-sm-2">
     <?php echo $row['status']?>
       </div>
</div>
<div class="form-group">
  <label class="col-sm-1 control-label">Dibuat</label>
  <div class="col-sm-2">
     <?php echo $row['insertedby']?>
    </div>
  <label class="col-sm-1 control-label">Waktu</label>
  <div class="col-sm-2">
     <?php echo $row['inserteddate']?>
    </div>
  <label class="col-sm-1 control-label">Diedit</label>
  <div class="col-sm-2">
     <?php echo $row['updatedby']?>
    </div>
  <label class="col-sm-1 control-label">Waktu</label>
  <div class="col-sm-2">
     <?php echo $row['updateddate']?>
       </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-0 col-sm-10">
    <?=form_hidden('action',$action)?>
    <?=form_hidden('iduser',$row['iduser'])?>
    <button type="submit" class="btn btn-primary">Hapus</button>
    <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
  </div>
</div>
<?php }?>
</form>
  </div>
</div>
<?php $this->load->view('user/view_user'); ?>
