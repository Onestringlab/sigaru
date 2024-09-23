
<script>
	function button_cancel(){
		location.replace('<?php echo base_url();?>index.php/manac/get_photo/<?php echo $idman;?>');
	}
</script>
<div class="panel panel-primary">
	<div class="panel-heading"> Data Manphoto</div>
	<div class="panel-body">
		<?=form_open_multipart('manphoto/manphoto_manage','class="form-horizontal"')?>
		<?php if($action=="insert"){?>
			<div class="form-group">
				<label class="col-sm-2 control-label">Photo</label>
				<div class="col-sm-10">
					<input class="form-control" type="file" name="userfile" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Judul</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="judul" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Kategori</label>
				<div class="col-sm-10">
					<?php select_form($kategori_list,"kode","value","kategori",''); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?=form_hidden('action',$action)?>
					<?=form_hidden('idman',$idman)?>
					<button type="submit" class="btn btn-primary">Tambah</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
				</div>
			</div>
		<?php }if($action=="update"){?>
			<div class="form-group">
				<label class="col-sm-2 control-label">Photo</label>
				<div class="col-sm-10">
					<input class="form-control" type="file" name="userfile" value=""><br>
					<img width="150px" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
				</div>

			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Judul</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="judul" value="<?php echo $row['judul']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Kategori</label>
				<div class="col-sm-10">
					<?php select_form($kategori_list,"kode","value","kategori",$row['kategori']); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?=form_hidden('action',$action)?>
					<?=form_hidden('idmanphoto',$row['idmanphoto'])?>
					<?=form_hidden('idman',$row['idman'])?>
					<?=form_hidden('filetemp',$row['photo'])?>
					<button type="submit" class="btn btn-primary">Edit</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
				</div>
			</div>
		<?php }if($action=="delete"){?>
			<div class="form-group">
				<div class="col-sm-12">
					<img height="400" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php echo $row['judul']?> - <?php echo $row['kategori']?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?=form_hidden('action',$action)?>
					<?=form_hidden('idmanphoto',$row['idmanphoto'])?>
					<?=form_hidden('userfile',$row['photo'])?>
					<?=form_hidden('idman',$row['idman'])?>
					<button type="submit" class="btn btn-primary">Hapus</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
				</div>
			</div>
		<?php }?>
	</form>
</div>