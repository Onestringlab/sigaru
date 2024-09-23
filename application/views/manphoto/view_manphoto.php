<div class="panel panel-primary">
	<div class="panel-heading"> Data Manphoto</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th>No</th>
						<th>idman</th>
						<th>photo</th>
						<th>judul</th>
						<th>kategori</th>
						<th><?php echo anchor('manphoto/manphoto_form_insert/', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>')?></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
					foreach($manphoto_list as $row): 
						?>
						<tr>
							<td><?=$i++?>.</td>
							<td><?=$row['idman']?></td>
							<td><?=$row['photo']?></td>
							<td><?=$row['judul']?></td>
							<td><?=$row['kategori']?></td>
							<td align="center">
								<?php echo anchor('manphoto/manphoto_form_update/'.$row['idmanphoto'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>
								<?php echo anchor('manphoto/manphoto_form_delete/'.$row['idmanphoto'], '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>')?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

