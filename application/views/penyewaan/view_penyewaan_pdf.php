<style>
  body {
    margin-top: 3em;
    font-family:Arial, Helvetica, sans-serif;
  }

  .header {
    text-align: center;
    font-weight: bold;
  }

  table.bordasimples {
    border-spacing: 0px;
    border: 3 solid dimgray;
    font-size: 11px;
    vertical-align: top;
    border-collapse: collapse;
  }

  table.bordasimples tr td,
  table.bordasimples tr th {
    border: 1px solid dimgray;
    vertical-align: top;
  }

  td.title {
    background-color: dimgray;
    color: white;
    padding: 5px;
    text-align: center;
    margin: 0px;
  }

  td.value {
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
</style>


<div class="header">FORMULIR PEMINJAMAN RUANG</div>
<div class="header">UNIVERSITAS MUHAMMADIYAH PONTIANAK</div>
<br>
<div class="kecil kanan">
  FM-RUANG-REV.1.1
  <br> 01 Jan 2017
</div>
<table width="100%" class="bordasimples">
  <tr>
    <td class="title">Organisasi/Instansi</td>
    <td class="title" width="20%">Nama Ruang</td>
    <td class="title" colspan="2">Acara/Keperluan</td>
    <td class="title" width="20%">Jumlah Peserta</td>
  </tr>
  <tr>
    <td class="value">
      <?php echo $row['namapengguna']?>
    </td>
    <td class="value">
      <?php echo $row['noruangan']."-".$row['namaruangan']?>
    </td>
    <td class="value" colspan="2">
      <?php echo $row['namakegiatan']?>
    </td>
    <td class="value">
      <?php echo $row['jumlahperserta']?>
    </td>
  </tr>
  <tr>
    <td class="title">Nama Pemakai</td>
    <td class="title">NBM/No. Identitas</td>
    <td class="title" colspan="3">Alat Yang Digunakan</td>
  </tr>
  <tr>
    <td class="value">
      <?php echo $row['penanggungjawab']?>
    </td>
    <td class="value">
      <?php echo $row['npm']?>
    </td>
    <td class="value">1. Proyektor <strong><?php echo $row['infokus']?></strong> unit</td>
    <td class="value">2. Papan Tulis <strong><?php echo $row['papantulis']?></strong> unit</td>
    <td class="value">3. Mic Wireless Portable <strong><?php echo $row['mic']?></strong> unit</td>
  </tr>
  <tr>
    <td class="title">No.Handphone</td>
    <td class="value">
      <?php echo $row['nohp']?>
    </td>
    <td class="value">4. Audio Sound System <strong><?php echo $row['audiosound']?></strong> unit</td>
    <td class="value">5. Kabel Infocus/Listrik <strong><?php echo $row['audiosound']?></strong> unit</td>
    <td class="value">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="title">Tanggal Mulai</td>
    <td class="title">Tanggal Selesai</td>
    <td class="title">Mulai</td>
    <td class="title">Selesai</td>
    <td class="title">Tanggal Konfirmasi</td>
  </tr>
  <tr>
    <td class="value">
      <?php echo tampilTanggal($row['tanggalsewa'])?>
    </td>
    <td class="value">
      <?php echo tampilTanggal($row['tanggalsewa'])?>
    </td>
    <td class="value">
      <?php echo tampilJam2($row['mulai'])?>
    </td>
    <td class="value">
      <?php echo tampilJam2($row['selesai'])?>
    </td>
    <td class="value">
      <?php echo tampilTanggal($row['tanggalkonfirmasi'])?>
    </td>

  </tr>
  <tr>
    <td class="title">Mengetahui</td>
    <td class="title">Pemohon</td>
    <td class="title" colspan="3">Keterangan</td>
  </tr>
  <tr>
    <td class="value tengah">Kaur PLKP & RT
      <br>
      <br>
      <br>
      <br>
      <br>
      <?php echo ($kaurPLKP[0]['value'])?>
    </td>
    <td class="value tengah">
      <?php echo ambilHariTanggal(); ?>
        <br>
        <br>
        <br>
        <br>
        <br>.................</td>
    <td class="value" colspan="3">
      <?php echo $row['keterangan']?>
    </td>
  </tr>
  <tr>
    <td class="title" colspan="2">Menyetujui</td>
    <td class="title" colspan="3">
      ATURAN PEMINJAMAN & PENGGUNAAN RUANG UNIVERSITAS MUHAMMADIYAH PONTIANAK
    </td>
  </tr>
  <tr>
    <td class="value tengah" colspan="2">
      <br>Kepala Biro Administrasi Umum
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <?php echo ($kaBAU[0]['value'])?>
        <br>
    </td>
    <td class="value kecil" colspan="3">
      <ol>
        <li>Semua ruang yang ada di lingkungan Universitas Muhammadiyah Pontianak adalah ruang milik Universitas Muhammadiyah Pontianak yang dapat digunakan untuk keperluan rapat, pertemuan tingkat Universitas, Organisasi Mahasiswa dan juga dapat disewakan kepada pihak luar (penyewa).</li>
        <li>Penggunaan/penyewaan ruang di awali dengan mengajukan surat secara resmi yang ditujukan kepada Rektor, Kepala B.A.U atau Kaur. Perlengkapan & Rumah Tangga Universitas Muhammadiyah Pontianak.</li>
        <li>Mengisi formulir peminjaman ruang di bagian perlengkapan Universitas Muhammadiyah Pontianak yang kemudian diketahui oleh Kaur. Perlengkapan & Rumah Tangga dan Kepala Biro Administrasi Umum (B.A.U) Universitas Muhammadiyah Pontianak.</li>
        <li>Pengguna ruang bertanggung jawab penuh dan wajib memelihara kebersihan dan inventaris ruangan yang menjadi milik Universitas Muhammadiyah Pontianak. Kerusakan/kehilangan barang-barang milik properti UM Pontianak selama dalam pelaksanaan kegiatan maka pemakai ruangan bertanggung jawab untuk mengganti/memperbaiki atas kerusakan/kehilangan yang terjadi.</li>
        <li>Ruang-ruang yang ada di lingkungan Universitas Muhammadiyah Pontianak dapat digunakan setiap hari Senin-Minggu, mulai pukul 08.00 s.d. 17.00 WIB.</li>
        <li>Setelah selesai menggunakan ruang yang ada di lingkungan Universitas Muhammadiyah Pontianak, pengguna wajib mematikan lampu, mengunci dan mengembalikan kuncinya kepada security dan atau petugas yang telah ditunjuk.</li>
      </ol>
    </td>
  </tr>
</table>
