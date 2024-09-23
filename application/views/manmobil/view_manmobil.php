
<div class="panel panel-primary">
	<div class="panel-heading"> Data Manmobil</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th width="20px">No</th>
						<th>Kendaraan</th>
						<th width="120px">Tanggal</th>
						<th width="400px">Keterangan</th>
						<th width="400px">Rencana</th>
						<th width="60px"><?php echo anchor('manmobil/manmobil_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
					foreach($manmobil_list as $row): 
					?>
						<tr>
							<td><?=$i++?>.</td>
							<td><?=$row['nopolisi']?>-<?=$row['merk']?></td>
							<td><?=formatTanggal($row['tanggal'])?></td>
							<td><?=$row['keterangan']?></td>
							<td><?=$row['rencana']?></td>
							<td align="center">
								<?php echo anchor('manmobil/manmobil_form_update/'.$row['idmanmobil'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
								<?php echo anchor('manmobil/manmobil_form_delete/'.$row['idmanmobil'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

