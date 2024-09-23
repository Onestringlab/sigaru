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
<img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/images/umpBrand.png'?>" width="250px" align="left">
<div class="header">FORMULIR PEMINJAMAN &amp; PENGUNAAN KENDARAAN DINAS</div>
<br>
<table width="100%" class="simple">
  <tr>
    <th class="title" width="20%">Nomor Pemakaian</th>
    <td colspan="3">:
      <?php echo $row['idpeminjaman']?>
    </td>
  </tr>
  <tr>
    <th class="title" width="20%">Tanggal Pemakaian</th>
    <td width="30%">:
      <?php echo formatTanggal($row['mulai'])." - ". formatTanggal($row['selesai'])?>
    </td>
    <th class="title">Nama Peminjam</th>
    <td width="30%">:
      <?php echo $row['namapeminjam']?>
    </td>
  </tr>
  <tr>
    <th class="title">Waktu Pemakaian </th>
    <td>:
      <?php echo formatWaktu($row['waktumulai']).' - '.formatWaktu($row['waktuselesai']) ?>
    </td>
    <th class="title">Unit/Prodi</th>
    <td>:
      <?php echo $row['institusi']?>
    </td>
  </tr>
  <tr>

    <th class="title">Tujuan</th>
    <td>:
      <?php echo $row['tujuan']?>
    </td>
    <th class="title">Nomor Polisi</th>
    <td>:
      <?php echo $row['nopolisi']?>
    </td>
  </tr>
  <tr>
    <th class="title">Status</th>
    <td>:
      <?php
        if($row['status'] != 'Disetujui'){
          echo $row['status'];
        }else{
          echo 'Dipinjamkan';
        }
      ?>
    </td>
    <th class="title">Merk/Type</th>
    <td>:
      <?php echo $row['merk'] ?>
    </td>
  </tr>
  <tr>
    <th class="title">Acara</th>
    <td>:
      <?php echo $row['acara']?>
    </td>
    <th class="title">Nomor HP</th>
    <td>:
      <?php echo $row['hppeminjam']?>
    </td>
  </tr>
</table>
<br>
<table width="100%" class="simple">
  <tr>
    <td colspan="4" style="text-align:center">Pontianak,
      <?php echo formatTanggal(date('Y-m-d')) ?>
    </td>
  </tr>
  <tr>
    <td style="text-align:center" width="35%">
      <br>Mengetahui,
      <br>Plt. Kepala Biro Administrasi Umum
      <br>
      <br>
      <br>
      <?php echo ($kaBAU[0]['value'])?>
      <br>
    </td>
    <td width="15%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td style="text-align:center" width="35%">
      <br>Menyetujui,
      <br>Kaur Perlengkapan &amp; RT
      <br>
      <br>
      <br>
      <?php echo ($kaurPLKP[0]['value'])?>
      <br>
    </td>
  </tr>
</table>