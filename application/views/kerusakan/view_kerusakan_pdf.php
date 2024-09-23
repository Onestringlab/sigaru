<style>
	body {
		margin-top: 1em;
		font-family: Arial, Helvetica, sans-serif;
	}

	.header {
		text-align: center;
		font-weight: bold;
		background-color: midnightblue;
		color: white;
		padding: 5px;

	}

	table{
		padding-left : 20px;
		padding-right: 20px;
	}

	table.simple {
		border-spacing: 0px;
		font-size: 12px;
		vertical-align: top;
		border-collapse: collapse;
	}

	table.simple tr td,
	table.simple tr th {
		padding: 2px;
		text-align: left;
	}

	table.bordasimples {
		border-spacing: 0px;
		border: 3 solid dimgray;
		font-size: 12px;
		vertical-align: top;
		border-collapse: collapse;
	}

	table.bordasimples tr td,
	table.bordasimples tr th {
		border: 1px solid dimgray;
		vertical-align: top;
	}

	table.bordasimples td.title {
		background-color: midnightblue;
		color: whitesmoke;
		padding: 5px;
		text-align: center;
		margin: 0px;
	}

	table.bordasimples td.value {
		background-color: white;
		color: black;
		padding: 5px;
		margin: 0px;
	}

	ol {
		margin: 0px 15px;
		padding: 0px
	}

	.tengah {
		text-align: center;
	}

	.kanan {
		text-align: right;
	}

	.kecil {
		font-size: 9px;
	}

	img {
		padding-bottom: 10px;
	}

</style>
<img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/images/umpBrand.png'?>" width="250px">
<div class="header">FORMULIR PELAPORAN KERUSAKAN BARANG DAN ALAT</div>
<br>
<table width="100%" class="simple">
	<tr>
		<td width="20%"><strong>Nomor Laporan</strong></td>
		<td colspan="3">: <?=$row['nolaporan']?></td>
	</tr>
	<tr>
		<td colspan="4"><strong><br>Lokasi</strong><hr></td>
	</tr>
	<tr>
		<td width="20%"><strong>Nama Ruang</strong></td>
		<td width="30%">: <?=$row['namaruang']?></td>
		<td width="20%"><strong>Nomor Ruang</strong></td>
		<td width="30%">: <?=$row['noruang']?></td>
	</tr>
	<tr>
		<td><strong>Lantai</strong></td>
		<td>: <?=$row['lantai']?></td>
	</tr>
	<tr>
		<td colspan="4"><br><strong>Kerusakan</strong><hr></td>
	</tr>
	<tr>
		<td><strong>Jenis Fasilitas</strong></td>
		<td>: <?=$row['jnsfasilitas']?></td>
	</tr>
	<tr>
		<td><strong>Projektor</strong></td>
		<td>: <?=$row['projektor']?> unit/buah</td>
		<td><strong>Kabel VGA/HDMI</strong></td>
		<td>: <?=$row['kabelvga']?> unit/buah</td>
	</tr>
	<tr>
		<td><strong>AC</strong></td>
		<td>: <?=$row['ac']?> unit/buah</td>
		<td><strong>Lampu</strong></td>
		<td>: <?=$row['lampu']?> unit/buah</td>
	</tr>
	<tr>
		<td><strong>Kipas Angin</strong></td>
		<td>: <?=$row['kipasangin']?> unit/buah</td>
		<td><strong>Kursi</strong></td>
		<td>: <?=$row['lampu']?> unit/buah</td>
	</tr>
	<tr>
		<td><strong>Meja</strong></td>
		<td>: <?=$row['meja']?> unit/buah</td>
		<td><strong>Kunci Pintu</strong></td>
		<td>: <?=$row['kuncipintu']?> unit/buah</td>
	</tr>
	<tr>
		<td><strong>Lain-lain</strong></td>
		<td>: <?=$row['meja']?> unit/buah</td>
	</tr>
	<tr>
		<td valign="top"><strong>Uraian Kerusakan </strong></td>
		<td colspan="3">: <?=$row['uraiankerusakan']?></td>
	</tr>
	<tr>
		<td colspan="4"><br><strong>Perbaikan</strong><hr></td>
	</tr>
	<tr>
		<td><strong>Tanggal Perbaikan</strong></td>
		<td>: <?=formatTanggal($row['tglperbaikan'])?></td>
		<td><strong>Diperbaiki Oleh</strong></td>
		<td>: <?=$row['perbaikanoleh']?> </td>
	</tr>
	<tr>
		<td valign="top"><strong>Uraian Perbaikan</strong></td>
		<td colspan="3">: <?=$row['uraianperbaikan']?> </td>
	</tr>
</table>
<table class="simple" width="100%">
	<tr>
		<td colspan="4"><br><br><br><br></td>
	</tr>
	<tr>
		<td width="10%"></td>
		<td width="40%"><strong>Pelapor</strong></td>
		<td width="10%"></td>
		<td width="40%"><strong>Penerima</strong></td>
	</tr>
	<tr>
		<td width="10%"></td>
		<td width="40%">Tanggal : <?=formatTanggal($row['tglpelaporan'])?></td>
		<td width="10%"></td>
		<td width="40%">Tanggal : <?=formatTanggal($row['tglpenerima'])?></td>
	</tr>
	<tr>
		<td width="10%"></td>
		<td><br><br><br><br><?=$row['pelapor']?><br>
			-------------------------------<br>
			NBM. <?=$row['nbmpelapor']?>
		</td>
		<td width="10%"></td>
		<td><br><br><br><br><?=$row['namapenerima']?><br>
			-------------------------------<br>
			NBM. <?=$row['nbmpenerierima']?>
		</td>
	</tr>
</table>










