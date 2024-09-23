
<script>
	function button_cancel(){
		location.replace('<?php echo base_url();?>index.php/manmobil');
	}
</script>
<div class="panel panel-primary">
	<div class="panel-heading"> Perawatan Mobil</div>
	<div class="panel-body">
		<?=form_open('manmobil/manmobil_manage','class="form-horizontal"')?>
		<?php if($action=="insert"){?>
			<div class="form-group">
				<label class="col-sm-2">Kendaraan</label>
				<div class="col-sm-4">
					<?php select_form($kendaraan_list,"idkendaraan","nopolisi","idkendaraan","") ?>
				</div>
				<label class="col-sm-1">Tanggal</label>
				<div class="col-sm-5">
					<input class="form-control" type="date" name="tanggal" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Bagian Pengecekan</label>
				<label class="col-sm-4">Kondisi</label>
				<label class="col-sm-6">Keterangan</label>
			</div>
			<div class="form-group">
				<label class="col-sm-2">1. Surat-Surat Kendaraan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_1","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_1" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">2. STNK Mobil</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_2","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_2" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">3. STNK Mobil</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_3","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_3" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">4. Safety Belt</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_4","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_4" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">5. STNK Mobil</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_5","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_5" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">6. Ban Cadangan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_6","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_6" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">7. Body Luar Mobil</label>
			</div>
			<div class="form-group">
				<label class="col-sm-2">a. Body Samping Kanan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_7a","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_7a" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">b. Body Samping Kiri</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_7b","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_7b" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">c. Body Depan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_7c","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_7c" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">d. Body Belakang</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_7d","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_7d" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">8. Kursi Penumpang</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_8","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_8" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">9. Bagasi Mobil</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_9","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_9" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">10. Mesin</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_10","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_10" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">11. Cahaya</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_11","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_11" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">12. AC/Pendingin</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_12","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_12" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">13. Lampu Depan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_13","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_13" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">14. Lampu Belakang/Stop</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_14","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_14" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">15. Lampu riting</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_15","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_15" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">16. Lampu Mundur</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_16","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_16" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">17. Wiper</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_17","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_17" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">18. Rem</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_18","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_18" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">19. Perseneling</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_19","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_19" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">20. Ban</label>
			</div>
			<div class="form-group">
				<label class="col-sm-2">a. Ban depan kanan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_20a","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_20a" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">b. Ban depan kiri</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_20b","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_20b" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">c. Ban belakang kanan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_20c","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_20c" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">d. Ban belakang kiri</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_20d","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_20d" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">21. Speedometer</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_21","Baik"); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_21" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Keterangan</label>
				<div class="col-sm-4">
					<textarea class="form-control" rows="8" name="keterangan"></textarea>
				</div>
				<label class="col-sm-1">Rencana</label>
				<div class="col-sm-5">
					<textarea class="form-control" rows="8" name="rencana"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Tertanda</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="tandatangan" value="">
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
				<label class="col-sm-2">Kendaraan</label>
				<div class="col-sm-4">
					<?php select_form($kendaraan_list,"idkendaraan","nopolisi","idkendaraan",$row['idkendaraan']); ?>
				</div>
				<label class="col-sm-1">Tanggal</label>
				<div class="col-sm-5">
					<input class="form-control" type="date" name="tanggal" value="<?php echo $row['tanggal']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Bagian Pengecekan</label>
				<label class="col-sm-4">Kondisi</label>
				<label class="col-sm-6">Keterangan</label>
			</div>
			<div class="form-group">
				<label class="col-sm-2">1. Surat-Surat Kendaraan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_1",$row['mob_1']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_1" value="<?php echo $row['mok_1']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">2. STNK Mobil</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_2",$row['mob_2']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_2" value="<?php echo $row['mok_2']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">3. Safety Belt</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_3",$row['mob_3']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_3" value="<?php echo $row['mok_3']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">4. Safety Belt Bag</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_4",$row['mob_4']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_4" value="<?php echo $row['mok_4']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">5. Tool Kit</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_5",$row['mob_5']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_5" value="<?php echo $row['mok_5']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">6. Ban Cadangan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_6",$row['mob_6']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_6" value="<?php echo $row['mok_6']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">7. Body Luar Mobil</label>
			</div>
			<div class="form-group">
				<label class="col-sm-2">a. Body Samping Kanan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_7a",$row['mob_7a']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_7a" value="<?php echo $row['mok_7a']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">b. Body Samping Kiri</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_7b",$row['mob_7b']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_7b" value="<?php echo $row['mok_7b']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">c. Body Depan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_7c",$row['mob_7c']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_7c" value="<?php echo $row['mok_7c']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">d. Body Belakang</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_7d",$row['mob_7d']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_7d" value="<?php echo $row['mok_7d']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">8. Kursi Penumpang</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_8",$row['mob_8']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_8" value="<?php echo $row['mok_8']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">9. Bagasi Mobil</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_9",$row['mob_9']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_9" value="<?php echo $row['mok_9']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">10. Mesin</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_10",$row['mob_10']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_10" value="<?php echo $row['mok_10']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">11. Cahaya</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_11",$row['mob_11']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_11" value="<?php echo $row['mok_11']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">12. AC/Pendingin</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_12",$row['mob_12']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_12" value="<?php echo $row['mok_12']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">13. Lampu Depan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_13",$row['mob_13']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_13" value="<?php echo $row['mok_13']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">14. Lampu Belakang/Stop</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_14",$row['mob_14']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_14" value="<?php echo $row['mok_14']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">15. Lampu riting</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_15",$row['mob_15']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_15" value="<?php echo $row['mok_15']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">16. Lampu Mundur</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_16",$row['mob_16']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_16" value="<?php echo $row['mok_16']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">17. Wiper</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_17",$row['mob_17']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_17" value="<?php echo $row['mok_17']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">18. Rem</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_18",$row['mob_18']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_18" value="<?php echo $row['mok_18']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">19. Perseneling</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_19",$row['mob_19']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_19" value="<?php echo $row['mok_19']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">20. Ban</label>
			</div>
			<div class="form-group">
				<label class="col-sm-2">a. Ban depan kanan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_20a",$row['mob_20a']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_20a" value="<?php echo $row['mok_20a']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">b. Ban depan kiri</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_20b",$row['mob_20b']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_20b" value="<?php echo $row['mok_20b']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">c. Ban belakang kanan</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_20c",$row['mob_20c']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_20c" value="<?php echo $row['mok_20c']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">d. Ban belakang kiri</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_20d",$row['mob_20d']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_20d" value="<?php echo $row['mok_20d']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">21. Speedometer</label>
				<div class="col-sm-4">
					<?php select_form($status_kondisi,"kode","value","mob_21",$row['mob_21']); ?>
				</div>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="mok_21" value="<?php echo $row['mok_21']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Keterangan</label>
				<div class="col-sm-4">
					<textarea class="form-control" rows="8" name="keterangan"><?php echo $row['keterangan']?></textarea>
				</div>
				<label class="col-sm-1">Rencana</label>
				<div class="col-sm-5">
					<textarea class="form-control" rows="8" name="rencana"><?php echo $row['rencana']?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Tertanda</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="tandatangan" value="<?php echo $row['tandatangan']?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?=form_hidden('action',$action)?>
					<?=form_hidden('idmanmobil',$row['idmanmobil'])?>
					<button type="submit" class="btn btn-primary">Update</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
				</div>
			</div>
		<?php }if($action=="delete"){?>
			<div class="form-group">
				<label class="col-sm-2">Kendaraan</label>
				<div class="col-sm-4">
					<?php echo($row['idkendaraan']) ?>
				</div>
				<label class="col-sm-1">Tanggal</label>
				<div class="col-sm-5">
					<?php echo(formatTanggal($row['tanggal'])) ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Bagian Pengecekan</label>
				<label class="col-sm-4">Kondisi</label>
				<label class="col-sm-6">Keterangan</label>
			</div>
			<div class="form-group">
				<label class="col-sm-2">1. Surat-Surat Kendaraan</label>
				<div class="col-sm-4">
					<?php echo($row['mob_1']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_1'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">2. STNK Mobil</label>
				<div class="col-sm-4">
					<?php echo($row['mob_2']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_2'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">3. Safety Belt</label>
				<div class="col-sm-4">
					<?php echo($row['mob_3']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_3'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">4. Safety Belt Bag</label>
				<div class="col-sm-4">
					<?php echo($row['mob_4']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_4'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">5. Tool Kit</label>
				<div class="col-sm-4">
					<?php echo($row['mob_5']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_5'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">6. Ban Cadangan</label>
				<div class="col-sm-4">
					<?php echo($row['mob_6']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_6'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">7. Body Luar Mobil</label>
			</div>
			<div class="form-group">
				<label class="col-sm-2">a. Body Samping Kanan</label>
				<div class="col-sm-4">
					<?php echo($row['mob_7a']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_7a'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">b. Body Samping Kiri</label>
				<div class="col-sm-4">
					<?php echo($row['mob_7b']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_7b'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">c. Body Depan</label>
				<div class="col-sm-4">
					<?php echo($row['mob_7c']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_7c'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">d. Body Belakang</label>
				<div class="col-sm-4">
					<?php echo($row['mob_7d']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_7d'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">8. Kursi Penumpang</label>
				<div class="col-sm-4">
					<?php echo($row['mob_8']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_8'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">9. Bagasi Mobil</label>
				<div class="col-sm-4">
					<?php echo($row['mob_9']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_9'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">10. Mesin</label>
				<div class="col-sm-4">
					<?php echo($row['mob_10']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_10'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">11. Cahaya</label>
				<div class="col-sm-4">
					<?php echo($row['mob_11']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_11'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">12. AC/Pendingin</label>
				<div class="col-sm-4">
					<?php echo($row['mob_12']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_12'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">13. Lampu Depan</label>
				<div class="col-sm-4">
					<?php echo($row['mob_13']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_13'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">14. Lampu Belakang/Stop</label>
				<div class="col-sm-4">
					<?php echo($row['mob_14']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_14'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">15. Lampu riting</label>
				<div class="col-sm-4">
					<?php echo($row['mob_15']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_15'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">16. Lampu Mundur</label>
				<div class="col-sm-4">
					<?php echo($row['mob_16']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_16'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">17. Wiper</label>
				<div class="col-sm-4">
					<?php echo($row['mob_17']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_17'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">18. Rem</label>
				<div class="col-sm-4">
					<?php echo($row['mob_18']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_18'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">19. Perseneling</label>
				<div class="col-sm-4">
					<?php echo($row['mob_19']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_19'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">20. Ban</label>
			</div>
			<div class="form-group">
				<label class="col-sm-2">a. Ban depan kanan</label>
				<div class="col-sm-4">
					<?php echo($row['mob_20a']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_20a'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">b. Ban depan kiri</label>
				<div class="col-sm-4">
					<?php echo($row['mob_20b']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_20b'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">c. Ban belakang kanan</label>
				<div class="col-sm-4">
					<?php echo($row['mob_20c']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_20c'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">d. Ban belakang kiri</label>
				<div class="col-sm-4">
					<?php echo($row['mob_20d']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_20d'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">21. Speedometer</label>
				<div class="col-sm-4">
					<?php echo($row['mob_21']); ?>
				</div>
				<div class="col-sm-6">
					<?php echo($row['mok_21'])?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Keterangan</label>
				<div class="col-sm-4">
					<?php echo $row['keterangan']?>
				</div>
				<label class="col-sm-1">Rencana</label>
				<div class="col-sm-5">
					<?php echo $row['rencana']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Tertanda</label>
				<div class="col-sm-4">
					<?php echo($row['tandatangan'])?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?=form_hidden('action',$action)?>
					<?=form_hidden('idmanmobil',$row['idmanmobil'])?>
					<button type="submit" class="btn btn-primary">Delete</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
				</div>
			</div>
		<?php }?>
	</form>
</div>
</div>

