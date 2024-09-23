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
<img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/images/kop_litbang_mhdy.JPG'?>" width="100%" align="left">
<div class="header" style="margin-bottom: 20px">S U R A T&nbsp;&nbsp;&nbsp;J A L A N</div>
<table width="100%" class="simple" style="padding-left: 20px;padding-right: 20px">
  <tr>
    <td colspan="4" style="text-align: right;">Pontianak,
      <?php echo formatTanggal(date('Y-m-d')) ?><br><br>
    </td>
  </tr>
  <tr>
    <th class="title">No</th>
    <td colspan="3">:
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/II.3.AU/A/PLKP/<?php echo date('Y') ?>
    </td>
  </tr>
  <tr>
    <th class="title">Perihal</th>
    <td colspan="3">:
      Peminjaman Kendaraan UM Pontianak
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <div style="margin-bottom: 20px">
        <br><br>
        Kepada
        <br><br>..............................................<br>
        di tempat.
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <div style="margin-bottom: 10px">
        Sehubungan dengan penggunaan fasilitas kendaraan Universitas Muhammadiyah Pontianak maka diharapkan kepada saudara dapat melaksanakan tugas sebagai “driver” kendaraan yang telah dipesan /disewa oleh pengguna/pemakai dengan rincian sebagai berikut :
      </div>
    </td>
  </tr>
</table>
<table width="100%" class="simple" style="padding-left: 50px">
  <tr>
    <th class="title" width="10%">1. Nama Kendaraan</th>
    <td>:
      <?php echo $row['merk'] ?>
    </td>
  </tr>
  <tr>
    <th class="title">2. Nomor Polisi</th>
    <td>:
      <?php echo $row['nopolisi']?>
    </td>
  </tr>
  <tr>
    <th class="title" >3. Tanggal Pemakaian</th>
    <td>:
      <b><?php echo formatTanggal($row['mulai'])." - ". formatTanggal($row['selesai'])?></b>
    </td>
  </tr>
  <tr>
    <th class="title">4. Tanggal Kembali</th>
    <td width="30%">:
     <b><?php echo formatTanggal($row['selesai'])?> </b>
    </td>
  </tr>
  <tr>
    <th class="title">5. Nama Pengguna/Unit </th>
    <td width="30%">:
      <?php echo $row['namapeminjam']?> / <?php echo $row['institusi']?>
    </td>
  </tr>
  <tr>
    <th class="title">6. Nomor HP</th>
    <td>:
      <?php echo phoneFormat($row['hppeminjam'])?>
    </td>
  </tr>
  <tr>
    <th class="title">7. Alamat Pengguna</th>
    <td>: <?php echo $row['keberangkatan']?>
    </td>
  </tr>
  <tr>
    <th class="title">8. Keperluan/Kegiatan</th>
    <td>:
      <?php echo $row['acara']?>
    </td>
  </tr>
  <tr>
    <th class="title">9. Lokasi Kegiatan</th>
    <td>:
      <?php echo $row['tujuan']?>
    </td>
  </tr>
</table>
<table width="100%" class="simple" style="padding-left: 20px;padding-right: 20px">
  <tr>
    <td>
      <div style="margin-top: 10px;margin-bottom: 10px">
        Demikian hal yang dapat disampaikan atas perhatian dan bantuannya diucapkan terima kasih.
      </div>
    </td>
  </tr>
</table>
<br>
<table width="100%" class="simple">
  <tr>
    <td style="text-align:center" width="35%">
      <br>
      <br>
      <br>
      <br>
    </td>
    <td width="15%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td style="text-align:center" width="35%">
      <br>Yang Menyerahkan
      <br>
      <img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/images/ttd_khairi.jpeg'?>" width="65"><br>
      <?php echo ($kaurPLKP[0]['value'])?>
    </td>
  </tr>
</table>
<br><br><br>
<table width="100%" class="simple" style="border: 1px black solid; padding-left: 20px;padding-right: 20px">
  <tr>
    <td style="padding: 10px">
      <b>Lokasi penjemputan/keberangkatan :</b>
      <br><br>...............................................................................................................................................................................................
      <br><br>...............................................................................................................................................................................................<br>
     <i>No. Handphone pengguna : <?php echo phoneFormat($row['hppeminjam'])?></i>
    </td>
  </tr>
</table>