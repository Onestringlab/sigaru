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
<div>
	<img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/images/umpBrand.png'?>" width="250px">
	<div class="header">FORMULIR DATA CEK  KENDARAAN INVENTARIS</div>
	<br>
	<table width="100%" class="simple">
		<tr>
			<th class="title" width="20%">Nama Petugas </th>
			<td width="30%">: <?php echo $konken['supir']?></td>
			<th class="title">Nomor Polisi</th>
			<td width="30%">: <?php echo $row['nopolisi']?></td>
		</tr>
		<tr>
			<th class="title" width="20%">Tanggal Terima  </th>
			<td width="30%">: <?php echo $konken['tglterima']?></td>
			<th class="title">Tahun/Warna </th>
			<td width="30%">: <?php echo $row['tahunrakitan']?> / <?php echo $row['warnatnkb']?></td>
		</tr>
		<tr>
			<th class="title" width="20%">Merk/Type Kendaraan   </th>
			<td width="30%">: <?php echo $row['merk']?></td>
			<th class="title">No. Mesin  </th>
			<td width="30%">: <?php echo $row['nomesin']?></td>
		</tr>
		<tr>
			<th class="title" width="20%">Kondisi Kendaraan   </th>
			<td width="30%">: <?php echo $konken['kondisi']?></td>
			<th class="title">No. Rangka  </th>
			<td width="30%">: <?php echo $row['norangka']?></td>
		</tr>
	</table>
	<br>
	<table width="100%" class="bordasimples">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th>Perlengkapan</th>
                <th width="15%">Kondisi</th>
                <th width="5%">No</th>
                <th>Fungsi</th>
                <th width="15%">Kondisi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tengah">1.</td><td>STNK</td><td class="tengah"><?php echo $konken['barang1'] ?></td><td class="tengah">31.</td><td>KASET</td><td class="tengah"><?php echo $konken['barang31'] ?></td>
            </tr>
            <tr>
                <td class="tengah">2.</td><td>KIR</td><td class="tengah"><?php echo $konken['barang2'] ?></td><td class="tengah">32.</td><td>CD PLAYER</td><td class="tengah"><?php echo $konken['barang32'] ?></td>
            </tr>
            <tr>
                <td class="tengah">3.</td><td>BUKU SERVICE </td><td class="tengah"><?php echo $konken['barang3'] ?></td><td class="tengah">33.</td><td>RADIO TAPE</td><td class="tengah"><?php echo $konken['barang33'] ?></td>
            </tr>
            <tr>
                <td class="tengah">4.</td><td>BUIKU PETUNJUK PEMAKAIAN</td><td class="tengah"><?php echo $konken['barang4'] ?></td><td class="tengah">34.</td><td>SPEAKER</td><td class="tengah"><?php echo $konken['barang34'] ?></td>
            </tr>
            <tr>
                <td class="tengah">5.</td><td>BAN SERAP</td><td class="tengah"><?php echo $konken['barang5'] ?></td><td class="tengah">35.</td><td>AMPLIFIER + POWER</td><td class="tengah"><?php echo $konken['barang35'] ?></td>
            </tr>
            <tr>
                <td class="tengah">6.</td><td>KONDISI BAN DEPAN </td><td class="tengah"><?php echo $konken['barang6'] ?></td><td class="tengah">36.</td><td>JAM</td><td class="tengah"><?php echo $konken['barang36'] ?></td>
            </tr>
            <tr>
                <td class="tengah">7.</td><td>KONDISI BAN BELAKANG</td><td class="tengah"><?php echo $konken['barang7'] ?></td><td class="tengah">37.</td><td>AC/WATER</td><td class="tengah"><?php echo $konken['barang37'] ?></td>
            </tr>
            <tr>
                <td class="tengah">8.</td><td>KARPET LANTAI</td><td class="tengah"><?php echo $konken['barang8'] ?></td><td class="tengah">38.</td><td>WIPER </td><td class="tengah"><?php echo $konken['barang38'] ?></td>
            </tr>
            <tr>
                <td class="tengah">9.</td><td>KARPET RODA</td><td class="tengah"><?php echo $konken['barang9'] ?></td><td class="tengah">39.</td><td>KLAKSON</td><td class="tengah"><?php echo $konken['barang39'] ?></td>
            </tr>
            <tr>
                <td class="tengah">10.</td><td>KARPET BAGASI</td><td class="tengah"><?php echo $konken['barang10'] ?></td><td class="tengah">40.</td><td>ALARM</td><td class="tengah"><?php echo $konken['barang40'] ?></td>
            </tr>
            <tr>
                <td class="tengah">11.</td><td>KUNCI RODA</td><td class="tengah"><?php echo $konken['barang11'] ?></td><td class="tengah">41.</td><td>LIGHTER</td><td class="tengah"><?php echo $konken['barang41'] ?></td>
            </tr>
            <tr>
                <td class="tengah">12.</td><td>KUNCI PAS</td><td class="tengah"><?php echo $konken['barang12'] ?></td><td class="tengah">42.</td><td>TISSUE</td><td class="tengah"><?php echo $konken['barang42'] ?></td>
            </tr>
            <tr>
                <td class="tengah">13.</td><td>KUNCI RING</td><td class="tengah"><?php echo $konken['barang13'] ?></td><td class="tengah">43.</td><td>LOGO</td><td class="tengah"><?php echo $konken['barang43'] ?></td>
            </tr>
            <tr>
                <td class="tengah">14.</td><td>KUNCI INGGRIS</td><td class="tengah"><?php echo $konken['barang14'] ?></td><td class="tengah">44.</td><td>LAMPU DASBOARD</td><td class="tengah"><?php echo $konken['barang44'] ?></td>
            </tr>
            <tr>
                <td class="tengah">15.</td><td>KUNCI BUSI </td><td class="tengah"><?php echo $konken['barang15'] ?></td><td class="tengah">45.</td><td>LAMPU TENGAH</td><td class="tengah"><?php echo $konken['barang45'] ?></td>
            </tr>
            <tr>
                <td class="tengah">16.</td><td>OBENG </td><td class="tengah"><?php echo $konken['barang16'] ?></td><td class="tengah">46.</td><td>LAMPU BACA</td><td class="tengah"><?php echo $konken['barang46'] ?></td>
            </tr>
            <tr>
                <td class="tengah">17.</td><td>TANG </td><td class="tengah"><?php echo $konken['barang17'] ?></td><td class="tengah">47.</td><td>LAMPU JAUH </td><td class="tengah"><?php echo $konken['barang47'] ?></td>
            </tr>
            <tr>
                <td class="tengah">18.</td><td>DONGKRAK </td><td class="tengah"><?php echo $konken['barang18'] ?></td><td class="tengah">48.</td><td>LAMPU DEKAT</td><td class="tengah"><?php echo $konken['barang48'] ?></td>
            </tr>
            <tr>
                <td class="tengah">19.</td><td>STANG DONGKRAK</td><td class="tengah"><?php echo $konken['barang19'] ?></td><td class="tengah">49.</td><td>LAMPU KECIL/POCK/KOTA</td><td class="tengah"><?php echo $konken['barang49'] ?></td>
            </tr>
            <tr>
                <td class="tengah">20.</td><td>SEGITIGA PENGAMAN </td><td class="tengah"><?php echo $konken['barang20'] ?></td><td class="tengah">50.</td><td>LAMPU MUNDUR</td><td class="tengah"><?php echo $konken['barang50'] ?></td>
            </tr>
            <tr>
                <td class="tengah">21.</td><td>SPION LUAR</td><td class="tengah"><?php echo $konken['barang21'] ?></td><td class="tengah">51.</td><td>LAMPU REM</td><td class="tengah"><?php echo $konken['barang51'] ?></td>
            </tr>
            <tr>
                <td class="tengah">22.</td><td>SPION DALAM</td><td class="tengah"><?php echo $konken['barang22'] ?></td><td class="tengah">52.</td><td>LAMPU KABUT</td><td class="tengah"><?php echo $konken['barang52'] ?></td>
            </tr>
            <tr>
                <td class="tengah">23.</td><td>TUTUP BENSIN </td><td class="tengah"><?php echo $konken['barang23'] ?></td><td class="tengah">53.</td><td>LAMPU SEIN </td><td class="tengah"><?php echo $konken['barang53'] ?></td>
            </tr>
            <tr>
                <td class="tengah">24.</td><td>KARPET BUMBER</td><td class="tengah"><?php echo $konken['barang24'] ?></td><td class="tengah">54.</td><td>POWER WINDOW</td><td class="tengah"><?php echo $konken['barang54'] ?></td>
            </tr>
            <tr>
                <td class="tengah">25.</td><td>LIST BODY</td><td class="tengah"><?php echo $konken['barang25'] ?></td><td class="tengah">55.</td><td>MANUAL/MATIC</td><td class="tengah"><?php echo $konken['barang55'] ?></td>
            </tr>
            <tr>
                <td class="tengah">26.</td><td>KARTU ASURANSI</td><td class="tengah"><?php echo $konken['barang26'] ?></td><td class="tengah">56.</td><td>CENTRAL LOCK</td><td class="tengah"><?php echo $konken['barang56'] ?></td>
            </tr>
            <tr>
                <td class="tengah">27.</td><td>KARTU SERVICE OLI</td><td class="tengah"><?php echo $konken['barang27'] ?></td><td class="tengah">57.</td><td>REMOTE</td><td class="tengah"><?php echo $konken['barang57'] ?></td>
            </tr>
            <tr>
                <td class="tengah">28.</td><td>ALAT BERSIH MOBIL</td><td class="tengah"><?php echo $konken['barang28'] ?></td><td class="tengah">58.</td><td>PAYUNG</td><td class="tengah"><?php echo $konken['barang58'] ?></td>
            </tr>
            <tr>
                <td class="tengah">29.</td><td>SAFETY BELT </td><td class="tengah"><?php echo $konken['barang29'] ?></td><td class="tengah">59.</td><td>TEMPAT SAMPAH </td><td class="tengah"><?php echo $konken['barang59'] ?></td>
            </tr>
            <tr>
                <td class="tengah">30.</td><td>OBAT P3K</td><td class="tengah"><?php echo $konken['barang30'] ?></td><td class="tengah">60.</td><td>PENGHARUM</td><td class="tengah"><?php echo $konken['barang60'] ?></td>
            </tr>
            <tr>
                <td></td><td></td><td></td><td class="tengah">61.</td><td>JUMPER AKI</td><td class="tengah"><?php echo $konken['barang61'] ?></td>
            </tr>
        </tbody>
    </table>
</div>