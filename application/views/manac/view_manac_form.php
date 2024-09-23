
<script>
	function button_cancel(){
		location.replace('<?php echo base_url();?>index.php/manac');
	}
</script>
<div class="panel panel-primary">
	<div class="panel-heading"> Data Manac</div>
	<div class="panel-body">
		<?=form_open('manac/manac_manage','class="form-horizontal"')?>
		<?php if($action=="insert"){?>
			<div class="form-group">
				<label class="col-sm-1 control-label">Lokasi</label>
				<div class="col-sm-3">
					<input class="form-control" type="text" name="lokasi" value="">
				</div>
				<label class="col-sm-1 control-label">Tanggal</label>
				<div class="col-sm-3">
					<input class="form-control" type="date" name="tanggal" value="">
				</div>
				<label class="col-sm-1 control-label">Jam</label>
				<div class="col-sm-3">
					<input class="form-control" type="time" name="jam" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Petugas</label>
				<div class="col-sm-3">
					<?php select_form($tukang_list,"kode","value","petugas",""); ?>
				</div>
				<label class="col-sm-1 control-label">Merk</label>
				<div class="col-sm-3">
					<?php select_form($ac_list,"kode","value","merk",""); ?>
				</div>
				<label class="col-sm-1 control-label">Tipe</label>
				<div class="col-sm-3">
					<?php select_form($pkac_list,"kode","value","type",""); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Kondisi</label>
				<div class="col-sm-7">
					<input class="form-control" type="text" name="kondisi" value="">
				</div>
				<label class="col-sm-1 control-label">Status</label>
				<div class="col-sm-3">
					<?php select_form($sttrusak_list,"kode","value","status",""); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Keterangan</label>
				<div class="col-sm-11">
					<input class="form-control" type="text" name="keterangan" value="">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-3">
					<?=form_hidden('action',$action)?>
					<button type="submit" class="btn btn-primary">Insert</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
				</div>
			</div>
		<?php }if($action=="update"){?>
			<div class="form-group">
				<label class="col-sm-1 control-label">Lokasi</label>
				<div class="col-sm-3">
					<input class="form-control" type="text" name="lokasi" value="<?php echo $row['lokasi']?>">
				</div>
				<label class="col-sm-1 control-label">Tanggal</label>
				<div class="col-sm-3">
					<input class="form-control" type="date" name="tanggal" value="<?php echo $row['tanggal']?>">
				</div>
				<label class="col-sm-1 control-label">Jam</label>
				<div class="col-sm-3">
					<input class="form-control" type="time" name="jam" value="<?php echo $row['jam']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Petugas</label>
				<div class="col-sm-3">
					<?php select_form($tukang_list,"kode","value","petugas",$row['petugas']); ?>
				</div>
				<label class="col-sm-1 control-label">Merk</label>
				<div class="col-sm-3">
					<?php select_form($ac_list,"kode","value","merk",$row['merk']); ?>
				</div>
				<label class="col-sm-1 control-label">Tipe</label>
				<div class="col-sm-3">
					<?php select_form($pkac_list,"kode","value","type",$row['type']); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Kondisi</label>
				<div class="col-sm-7">
					<input class="form-control" type="text" name="kondisi" value="<?php echo $row['kondisi']?>">
				</div>
				<label class="col-sm-1 control-label">Status</label>
				<div class="col-sm-3">
					<?php select_form($sttrusak_list,"kode","value","status",$row['status']); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Keterangan</label>
				<div class="col-sm-11">
					<input class="form-control" type="text" name="keterangan" value="<?php echo $row['keterangan']?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-3">
					<?=form_hidden('action',$action)?>
					<?=form_hidden('idmanac',$row['idmanac'])?>
					<button type="submit" class="btn btn-primary">Update</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
				</div>
			</div>
		<?php }if($action=="delete"){?>
			<div class="form-group">
				<label class="col-sm-1 control-label">Lokasi</label>
				<div class="col-sm-3">
					<?php echo $row['lokasi']?>
				</div>
				<label class="col-sm-1 control-label">Tanggal</label>
				<div class="col-sm-3">
					<?php echo formatTanggal($row['tanggal'])?>
				</div>
				<label class="col-sm-1 control-label">Jam</label>
				<div class="col-sm-3">
					<?php echo $row['jam']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Petugas</label>
				<div class="col-sm-3">
					<?php echo $row['petugas']?>
				</div>
				<label class="col-sm-1 control-label">Merk</label>
				<div class="col-sm-3">
					<?php echo $row['merk']?>
				</div>
				<label class="col-sm-1 control-label">Tipe</label>
				<div class="col-sm-3">
					<?php echo $row['type']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Kondisi</label>
				<div class="col-sm-7">
					<?php echo $row['kondisi']?>
				</div>
				<label class="col-sm-1 control-label">Status</label>
				<div class="col-sm-3">
					<?php echo $row['status']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Keterangan</label>
				<div class="col-sm-11">
					<?php echo $row['keterangan']?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-3">
					<?=form_hidden('action',$action)?>
					<?=form_hidden('idmanac',$row['idmanac'])?>
					<button type="submit" class="btn btn-primary">Delete</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
				</div>
			</div>
		<?php }?>
	</form>
</div>
</div>

