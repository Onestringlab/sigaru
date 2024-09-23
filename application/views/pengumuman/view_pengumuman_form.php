
<script>
	function button_cancel(){
		location.replace('<?php echo base_url();?>index.php/pengumuman');
	}
</script>
<div class="panel panel-primary">
	<div class="panel-heading"> Data Pengumuman</div>
	<div class="panel-body">
		<?=form_open('pengumuman/pengumuman_manage','class="form-horizontal"')?>
		<?php if($action=="insert"){?>
			<!-- <div class="form-group">
				<label class="col-sm-2 control-label">idpengumuman</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="idpengumuman" value="">
				</div>
			</div> -->
			<div class="form-group">
				<label class="col-sm-2 control-label">Tanggal</label>
				<div class="col-sm-4">
					<input class="form-control" type="date" name="tanggal" value="">
				</div>
				<label class="col-sm-2 control-label">Status</label>
				<div class="col-sm-4">
					<!-- <input class="form-control" type="text" name="status" value=""> -->
					<?php select_form($status_list,"kode","value","status",''); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Pengumuman</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="pengumuman"></textarea>
				</div>
			</div>
			<!-- <div class="form-group">
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
			</div> -->
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?=form_hidden('action',$action)?>
					<button type="submit" class="btn btn-primary">Insert</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
				</div>
			</div>
		<?php }if($action=="update"){?>
			<!-- <div class="form-group">
				<label class="col-sm-2 control-label">idpengumuman</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="idpengumuman" value="<?php echo $row['idpengumuman']?>">
				</div>
			</div> -->
			<div class="form-group">
				<label class="col-sm-2 control-label">Tanggal</label>
				<div class="col-sm-4">
					<input class="form-control" type="date" name="tanggal" value="<?php echo $row['tanggal']?>">
				</div>
				<label class="col-sm-2 control-label">Status</label>
				<div class="col-sm-4">
					<!-- <input class="form-control" type="text" name="status" value="<?php echo $row['status']?>"> -->
					<?php select_form($status_list,"kode","value","status",$row['status']); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Pengumuman</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="pengumuman"><?php echo $row['pengumuman']?></textarea>
				</div>
			</div>
			<!-- <div class="form-group">
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
			</div> -->
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?=form_hidden('action',$action)?>
					<?=form_hidden('idpengumuman',$row['idpengumuman'])?>
					<button type="submit" class="btn btn-primary">Update</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
				</div>
			</div>
		<?php }if($action=="delete"){?>
			<div class="form-group">
				<label class="col-sm-2 control-label">Tanggal</label>
				<div class="col-sm-4">
					<?php echo $row['tanggal']?>
				</div>
				<label class="col-sm-2 control-label">Status</label>
				<div class="col-sm-4">
					<?php echo $row['status']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Pengumuman</label>
				<div class="col-sm-10">
					<?php echo $row['pengumuman']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Oleh</label>
				<div class="col-sm-4">
					<?php echo $row['updatedby']?>
				</div>
				<label class="col-sm-2 control-label">Waktu</label>
				<div class="col-sm-4">
					<?php echo $row['updateddate']?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?=form_hidden('action',$action)?>
					<?=form_hidden('idpengumuman',$row['idpengumuman'])?>
					<button type="submit" class="btn btn-primary">Delete</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
				</div>
			</div>
		<?php }?>
	</form>
</div>
</div>

