<div class="panel panel-primary">
	<div class="panel-heading"> Data Perawatan AC</div>
	<div class="panel-body">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-1 control-label">Lokasi</label>
				<div class="col-sm-3 lurus">:
					<?php echo $row['lokasi']?>
				</div>
				<label class="col-sm-1 control-label">Tanggal</label>
				<div class="col-sm-3 lurus">:
					<?php echo formatTanggal($row['tanggal'])?>
				</div>
				<label class="col-sm-1 control-label">Jam</label>
				<div class="col-sm-3 lurus">:
					<?php echo $row['jam']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Petugas</label>
				<div class="col-sm-3 lurus">:
					<?php echo $row['petugas']?>			
				</div>
				<label class="col-sm-1 control-label">Merk</label>
				<div class="col-sm-3 lurus">:
					<?php echo $row['merk']?>				
				</div>
				<label class="col-sm-1 control-label">Tipe</label>
				<div class="col-sm-3 lurus">:
					<?php echo $row['type']?>		
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Kondisi</label>
				<div class="col-sm-7 lurus">:
					<?php echo $row['kondisi']?>				
				</div>
				<label class="col-sm-1 control-label">Status</label>
				<div class="col-sm-3 lurus">:
					<?php echo $row['status']?>				
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Keterangan</label>
				<div class="col-sm-11 lurus">:
					<?php echo $row['keterangan']?> 				
				</div>
			</div>
		</form>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading"> 
		Photo&nbsp;
		<?php echo anchor('manphoto/manphoto_form_insert/'.$row['idmanac'], '<span class="glyphicon glyphicon-plus text-light" aria-hidden="true"></span>','style="color:white"')?>
	</div>
	<div class="panel-body">
		<b>Saat Rusak</b><hr>
		<div class="form-group">
			<?php
			$i=1;
			foreach($manphoto_rusak as $row): 
				?>
				<div class="col-sm-2">
					<div>
						<a href="#" data-toggle="modal" data-target="#<?=$row['idmanphoto']?>">
						<img width="100%" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
						</a>
						<div class="modal fade" id="<?=$row['idmanphoto']?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title"><?php echo $row['judul'] ?></h4>
                  </div>
                  <div class="modal-body">
                    <img width="560" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
                  </div>
                </div>
              </div>
            </div>
					</div>
					<div>
						<?php echo $row['judul']?><br>
						<?php echo anchor('manphoto/manphoto_form_update/'.$row['idmanphoto'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
						<?php echo anchor('manphoto/manphoto_form_delete/'.$row['idmanphoto'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<div  class="panel-body">
		<b>Telah Diperbaiki</b><hr>
		<div class="form-group">
			<?php
			$i=1;
			foreach($manphoto_perbaiki as $row): 
				?>
				<div class="col-sm-2">
					<div>
						<a href="#" data-toggle="modal" data-target="#<?=$row['idmanphoto']?>">
							<img width="100%" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
						</a>
						<div class="modal fade" id="<?=$row['idmanphoto']?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title"><?php echo $row['judul'] ?></h4>
                  </div>
                  <div class="modal-body">
                    <img width="560" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photo']?>">
                  </div>
                </div>
              </div>
            </div>
					</div>
					<div>
						<?php echo $row['judul']?><br>
						<?php echo anchor('manphoto/manphoto_form_update/'.$row['idmanphoto'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
						<?php echo anchor('manphoto/manphoto_form_delete/'.$row['idmanphoto'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>