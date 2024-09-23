
<div class="panel panel-primary">
	<div class="panel-heading"> Data Pengumuman</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th width="30px">#</th>
						<th width="100px">Tanggal</th>
						<th>Pengumuman</th>
						<th width="100px">Status</th>
						<!-- <th>insertedby</th>
						<th>inserteddate</th> -->
						<th width="100px">Oleh</th>
						<th width="150px">Waktu</th>
						<th width="90px" class="text-center"><?php echo anchor('pengumuman/pengumuman_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
					foreach($pengumuman_list as $row): 
						?>
						<tr>
							<td><?=$i++?></td>
							<td><?=formatTanggal($row['tanggal'])?></td>
							<td><?=$row['pengumuman']?></td>
							<td><?=$row['status']?></td>
							<!-- <td><?=$row['insertedby']?></td> -->
						<!-- 	<td><?=$row['inserteddate']?></td> -->
							<td><?=$row['updatedby']?></td>
							<td><?=$row['updateddate']?></td>
							<td align="center">
								<?php echo anchor('pengumuman/pengumuman_form_update/'.$row['idpengumuman'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
								<?php echo anchor('pengumuman/pengumuman_form_delete/'.$row['idpengumuman'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>