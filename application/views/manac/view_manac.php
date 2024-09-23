
<div class="panel panel-primary">
	<div class="panel-heading"> Data Perawatan AC</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th>No</th>
						<th>Lokasi</th>
						<th>Tanggal</th>
						<th>Jam</th>
						<th>Petugas</th>
						<th>Kondisi</th>
						<th>Merk</th>
						<th>Tipe</th>
						<!-- <th>keterangan</th> -->
						<th>Status</th>
						<!-- <th>insertedby</th> -->
						<!-- <th>inserteddate</th> -->
						<!-- <th>updatedby</th> -->
						<!-- <th>updateddate</th> -->
						<th><?php echo anchor('manac/manac_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
					foreach($manac_list as $row): 
						?>
						<tr>
							<td><?=$i++?></td>
							<td><?=$row['lokasi']?></td>
							<td><?=formatTanggal($row['tanggal'])?></td>
							<td><?=$row['jam']?></td>
							<td><?=$row['petugas']?></td>
							<td><?=$row['kondisi']?></td>
							<td><?=$row['merk']?></td>
							<td><?=$row['type']?></td>
							<!-- <td><?=$row['keterangan']?></td> -->
							<td><?=$row['status']?></td>
							<!-- <td><?=$row['insertedby']?></td> -->
							<!-- <td><?=$row['inserteddate']?></td> -->
							<!-- <td><?=$row['updatedby']?></td> -->
							<!-- <td><?=$row['updateddate']?></td> -->
							<td align="center">
								<?php echo anchor('manac/get_photo/'.$row['idmanac'], '<span class="glyphicon glyphicon-camera" aria-hidden="true"></span>')?>
								<?php echo anchor('manac/manac_form_update/'.$row['idmanac'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
								<?php echo anchor('manac/manac_form_delete/'.$row['idmanac'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

