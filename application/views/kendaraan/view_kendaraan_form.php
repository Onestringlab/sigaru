<script>
  function button_cancel() {
    location.replace('<?php echo base_url();?>index.php/kendaraan');
  }

</script>

<?php if($action=="insert" || $action=="update"){?>
<script>
  $(document).ready(function() {
    $("#formKendaraan").validate({
      rules: {
        nopajakstnk: "required",
        nopolisi: "required",
        namapemilik: "required"

      },
      messages: {
        nopajakstnk: "",
        nopolisi: "",
        namapemilik: ""

      }
    });
  });

</script>
<?php } ?>


<div class="panel panel-info">
  <div class="panel-heading"> Data Kendaraan</div>
  <div class="panel-body">
    <?=form_open_multipart('kendaraan/kendaraan_manage','class="form-horizontal" id="formKendaraan"')?>
      <?php if($action=="insert"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">No STNK</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="nopajakstnk" value="">
        </div>
        <label class="col-sm-2 control-label">No Polisi</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="nopolisi" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Pemilik</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="namapemilik" value="">
        </div>
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="alamat" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Merk/Type</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="merk" value="">
        </div>
        <label class="col-sm-2 control-label">Isi Silinder</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="isisilinder" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Jenis/Model</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="jenis" value="">
        </div>
        <label class="col-sm-2 control-label">Bahan Bakar</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="bahanbakar" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tahun Pembuatan</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="tahunrakitan" value="">
        </div>
        <label class="col-sm-2 control-label">Warna TNKB</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="warnatnkb" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Warna</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="warnakb" value="">
        </div>
        <label class="col-sm-2 control-label">Tahun Registrasi</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="coding" value="">
        </div>
      </div>
      <div class="form-group">
       <label class="col-sm-2 control-label">No Rangka</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="norangka" value="">
        </div>
        <label class="col-sm-2 control-label">No BPKB</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="nobpkb" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">No Mesin</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="nomesin" value="">
       </div>
        <label class="col-sm-2 control-label">Berlaku S/D</label>
        <div class="col-sm-4">
          <input class="form-control" type="date" name="berlakusd" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Photo Kendaraan</label>
        <div class="col-sm-4">
          <input class="form-control" type="file" name="userfile" value="">
        </div>
        <label class="col-sm-2 control-label">Catatan</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="catatan" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Ketersediaan</label>
        <div class="col-sm-4">
          <?php select_form($status_list,"kode","value","ketersediaan",""); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <?=form_hidden('action',$action)?>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="update"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">No STNK</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="nopajakstnk" value="<?php echo $row['nopajakstnk']?>">
        </div>
        <label class="col-sm-2 control-label">No Polisi</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="nopolisi" value="<?php echo $row['nopolisi']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Pemilik</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="namapemilik" value="<?php echo $row['namapemilik']?>">
        </div>
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="alamat" value="<?php echo $row['alamat']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Merk/Type</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="merk" value="<?php echo $row['merk']?>">
        </div>
        <label class="col-sm-2 control-label">Isi Silinder</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="isisilinder" value="<?php echo $row['isisilinder']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Jenis/Model</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="jenis" value="<?php echo $row['jenis']?>">
        </div>
        <label class="col-sm-2 control-label">Bahan Bakar</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="bahanbakar" value="<?php echo $row['bahanbakar']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tahun Pembuatan</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="tahunrakitan" value="<?php echo $row['tahunrakitan']?>">
        </div>
        <label class="col-sm-2 control-label">Warna TNKB</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="warnatnkb" value="<?php echo $row['warnatnkb']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Warna</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="warnakb" value="<?php echo $row['warnakb']?>">
        </div>
        <label class="col-sm-2 control-label">Tahun Registrasi</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="coding" value="<?php echo $row['coding']?>">
        </div>
      </div>
      <div class="form-group">
       <label class="col-sm-2 control-label">No Rangka</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="norangka" value="<?php echo $row['norangka']?>">
        </div>
        <label class="col-sm-2 control-label">No BPKB</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="nobpkb" value="<?php echo $row['nobpkb']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">No Mesin</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="nomesin" value="<?php echo $row['nomesin']?>">
        </div>
        <label class="col-sm-2 control-label">Berlaku S/D</label>
        <div class="col-sm-4">
          <input class="form-control" type="date" name="berlakusd" value="<?php echo $row['berlakusd']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Supir</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="supir" value="<?php echo $konken['supir']?>">
        </div>
        <label class="col-sm-2 control-label">Tanggal Terima</label>
        <div class="col-sm-4">
          <input class="form-control" type="date" name="tglterima" value="<?php echo $konken['tglterima']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kondisi</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="kondisi" value="<?php echo $konken['kondisi']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Photo Kendaraan</label>
        <div class="col-sm-4">
          <img width="100%" src="<?php echo base_url();?>/upload/photos/<?=$row['photomobil']?>" ?>
        </div>
        <label class="col-sm-2 control-label">Catatan</label>
        <div class="col-sm-4">
          <textarea name="catatan" rows="5" class="form-control"><?php echo $row['catatan']?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Ganti Photo Kendaraan</label>
        <div class="col-sm-4">
          <input class="form-control"  type="file" name="userfile" value="<?php echo $row['photomobil']?>">
        </div>
        <label class="col-sm-2 control-label">Ketersediaan</label>
        <div class="col-sm-4">
          <?php select_form($status_list,"kode","value","ketersediaan",$row['ketersediaan']); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <div class="panel panel-info">
            <div class="panel-heading">
              Kelengkapan dan Fungsi Kendaraan
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" width="30">No</th>
                        <th class="text-center">Perlengkapan</th>
                        <th class="text-center" width="150">Kondisi</th>
                        <th class="text-center" width="30">No</th>
                        <th class="text-center">Fungsi</th>
                        <th class="text-center" width="150">Kondisi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td><td>STNK</td><td><?php select_form($status_kondisi,"kode","value","barang1",$konken['barang1']); ?></td><td>31.</td><td>KASET</td><td><?php select_form($status_kondisi,"kode","value","barang31",$konken['barang31']); ?></td>
                    </tr>
                    <tr>
                        <td>2.</td><td>KIR</td><td><?php select_form($status_kondisi,"kode","value","barang2",$konken['barang2']); ?></td><td>32.</td><td>CD PLAYER</td><td><?php select_form($status_kondisi,"kode","value","barang32",$konken['barang32']); ?></td>
                    </tr>
                    <tr>
                        <td>3.</td><td>BUKU SERVICE </td><td><?php select_form($status_kondisi,"kode","value","barang3",$konken['barang3']); ?></td><td>33.</td><td>RADIO TAPE</td><td><?php select_form($status_kondisi,"kode","value","barang33",$konken['barang33']); ?></td>
                    </tr>
                    <tr>
                        <td>4.</td><td>BUIKU PETUNJUK PEMAKAIAN</td><td><?php select_form($status_kondisi,"kode","value","barang4",$konken['barang4']); ?></td><td>34.</td><td>SPEAKER</td><td><?php select_form($status_kondisi,"kode","value","barang34",$konken['barang34']); ?></td>
                    </tr>
                    <tr>
                        <td>5.</td><td>BAN SERAP</td><td><?php select_form($status_kondisi,"kode","value","barang5",$konken['barang5']); ?></td><td>35.</td><td>AMPLIFIER + POWER</td><td><?php select_form($status_kondisi,"kode","value","barang35",$konken['barang35']); ?></td>
                    </tr>
                    <tr>
                        <td>6.</td><td>KONDISI BAN DEPAN </td><td><?php select_form($status_kondisi,"kode","value","barang6",$konken['barang6']); ?></td><td>36.</td><td>JAM</td><td><?php select_form($status_kondisi,"kode","value","barang36",$konken['barang36']); ?></td>
                    </tr>
                    <tr>
                        <td>7.</td><td>KONDISI BAN BELAKANG</td><td><?php select_form($status_kondisi,"kode","value","barang7",$konken['barang7']); ?></td><td>37.</td><td>AC/WATER</td><td><?php select_form($status_kondisi,"kode","value","barang37",$konken['barang37']); ?></td>
                    </tr>
                    <tr>
                        <td>8.</td><td>KARPET LANTAI</td><td><?php select_form($status_kondisi,"kode","value","barang8",$konken['barang8']); ?></td><td>38.</td><td>WIPER </td><td><?php select_form($status_kondisi,"kode","value","barang38",$konken['barang38']); ?></td>
                    </tr>
                    <tr>
                        <td>9.</td><td>KARPET RODA</td><td><?php select_form($status_kondisi,"kode","value","barang9",$konken['barang9']); ?></td><td>39.</td><td>KLAKSON</td><td><?php select_form($status_kondisi,"kode","value","barang39",$konken['barang39']); ?></td>
                    </tr>
                    <tr>
                        <td>10.</td><td>KARPET BAGASI</td><td><?php select_form($status_kondisi,"kode","value","barang10",$konken['barang10']); ?></td><td>40.</td><td>ALARM</td><td><?php select_form($status_kondisi,"kode","value","barang40",$konken['barang40']); ?></td>
                    </tr>
                    <tr>
                        <td>11.</td><td>KUNCI RODA</td><td><?php select_form($status_kondisi,"kode","value","barang11",$konken['barang11']); ?></td><td>41.</td><td>LIGHTER</td><td><?php select_form($status_kondisi,"kode","value","barang41",$konken['barang41']); ?></td>
                    </tr>
                    <tr>
                        <td>12.</td><td>KUNCI PAS</td><td><?php select_form($status_kondisi,"kode","value","barang12",$konken['barang12']); ?></td><td>42.</td><td>TISSUE</td><td><?php select_form($status_kondisi,"kode","value","barang42",$konken['barang42']); ?></td>
                    </tr>
                    <tr>
                        <td>13.</td><td>KUNCI RING</td><td><?php select_form($status_kondisi,"kode","value","barang13",$konken['barang13']); ?></td><td>43.</td><td>LOGO</td><td><?php select_form($status_kondisi,"kode","value","barang43",$konken['barang43']); ?></td>
                    </tr>
                    <tr>
                        <td>14.</td><td>KUNCI INGGRIS</td><td><?php select_form($status_kondisi,"kode","value","barang14",$konken['barang14']); ?></td><td>44.</td><td>LAMPU DASBOARD</td><td><?php select_form($status_kondisi,"kode","value","barang44",$konken['barang44']); ?></td>
                    </tr>
                    <tr>
                        <td>15.</td><td>KUNCI BUSI </td><td><?php select_form($status_kondisi,"kode","value","barang15",$konken['barang15']); ?></td><td>45.</td><td>LAMPU TENGAH</td><td><?php select_form($status_kondisi,"kode","value","barang45",$konken['barang45']); ?></td>
                    </tr>
                    <tr>
                        <td>16.</td><td>OBENG </td><td><?php select_form($status_kondisi,"kode","value","barang16",$konken['barang16']); ?></td><td>46.</td><td>LAMPU BACA</td><td><?php select_form($status_kondisi,"kode","value","barang46",$konken['barang46']); ?></td>
                    </tr>
                    <tr>
                        <td>17.</td><td>TANG </td><td><?php select_form($status_kondisi,"kode","value","barang17",$konken['barang17']); ?></td><td>47.</td><td>LAMPU JAUH </td><td><?php select_form($status_kondisi,"kode","value","barang47",$konken['barang47']); ?></td>
                    </tr>
                    <tr>
                        <td>18.</td><td>DONGKRAK </td><td><?php select_form($status_kondisi,"kode","value","barang18",$konken['barang18']); ?></td><td>48.</td><td>LAMPU DEKAT</td><td><?php select_form($status_kondisi,"kode","value","barang48",$konken['barang48']); ?></td>
                    </tr>
                    <tr>
                        <td>19.</td><td>STANG DONGKRAK</td><td><?php select_form($status_kondisi,"kode","value","barang19",$konken['barang19']); ?></td><td>49.</td><td>LAMPU KECIL/POCK/KOTA</td><td><?php select_form($status_kondisi,"kode","value","barang49",$konken['barang49']); ?></td>
                    </tr>
                    <tr>
                        <td>20.</td><td>SEGITIGA PENGAMAN </td><td><?php select_form($status_kondisi,"kode","value","barang20",$konken['barang20']); ?></td><td>50.</td><td>LAMPU MUNDUR</td><td><?php select_form($status_kondisi,"kode","value","barang50",$konken['barang50']); ?></td>
                    </tr>
                    <tr>
                        <td>21.</td><td>SPION LUAR</td><td><?php select_form($status_kondisi,"kode","value","barang21",$konken['barang21']); ?></td><td>51.</td><td>LAMPU REM</td><td><?php select_form($status_kondisi,"kode","value","barang51",$konken['barang51']); ?></td>
                    </tr>
                    <tr>
                        <td>22.</td><td>SPION DALAM</td><td><?php select_form($status_kondisi,"kode","value","barang22",$konken['barang22']); ?></td><td>52.</td><td>LAMPU KABUT</td><td><?php select_form($status_kondisi,"kode","value","barang52",$konken['barang52']); ?></td>
                    </tr>
                    <tr>
                        <td>23.</td><td>TUTUP BENSIN </td><td><?php select_form($status_kondisi,"kode","value","barang23",$konken['barang23']); ?></td><td>53.</td><td>LAMPU SEIN </td><td><?php select_form($status_kondisi,"kode","value","barang53",$konken['barang53']); ?></td>
                    </tr>
                    <tr>
                        <td>24.</td><td>KARPET BUMBER</td><td><?php select_form($status_kondisi,"kode","value","barang24",$konken['barang24']); ?></td><td>54.</td><td>POWER WINDOW</td><td><?php select_form($status_kondisi,"kode","value","barang54",$konken['barang54']); ?></td>
                    </tr>
                    <tr>
                        <td>25.</td><td>LIST BODY</td><td><?php select_form($status_kondisi,"kode","value","barang25",$konken['barang25']); ?></td><td>55.</td><td>MANUAL/MATIC</td><td><?php select_form($status_kondisi,"kode","value","barang55",$konken['barang55']); ?></td>
                    </tr>
                    <tr>
                        <td>26.</td><td>KARTU ASURANSI</td><td><?php select_form($status_kondisi,"kode","value","barang26",$konken['barang26']); ?></td><td>56.</td><td>CENTRAL LOCK</td><td><?php select_form($status_kondisi,"kode","value","barang56",$konken['barang56']); ?></td>
                    </tr>
                    <tr>
                        <td>27.</td><td>KARTU SERVICE OLI</td><td><?php select_form($status_kondisi,"kode","value","barang27",$konken['barang27']); ?></td><td>57.</td><td>REMOTE</td><td><?php select_form($status_kondisi,"kode","value","barang57",$konken['barang57']); ?></td>
                    </tr>
                    <tr>
                        <td>28.</td><td>ALAT BERSIH MOBIL</td><td><?php select_form($status_kondisi,"kode","value","barang28",$konken['barang28']); ?></td><td>58.</td><td>PAYUNG</td><td><?php select_form($status_kondisi,"kode","value","barang58",$konken['barang58']); ?></td>
                    </tr>
                    <tr>
                        <td>29.</td><td>SAFETY BELT </td><td><?php select_form($status_kondisi,"kode","value","barang29",$konken['barang29']); ?></td><td>59.</td><td>TEMPAT SAMPAH </td><td><?php select_form($status_kondisi,"kode","value","barang59",$konken['barang59']); ?></td>
                    </tr>
                    <tr>
                        <td>30.</td><td>OBAT P3K</td><td><?php select_form($status_kondisi,"kode","value","barang30",$konken['barang30']); ?></td><td>60.</td><td>PENGHARUM</td><td><?php select_form($status_kondisi,"kode","value","barang60",$konken['barang60']); ?></td>
                    </tr>
                    <tr>
                        <td>-</td><td>-</td><td></td><td>61.</td><td>JUMPER AKI</td><td><?php select_form($status_kondisi,"kode","value","barang61",$konken['barang61']); ?></td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <?php echo form_hidden('action',$action)?>
          <?php echo form_hidden('idkendaraan',$row['idkendaraan'])?>
          <?php echo form_hidden('filetemp',$row['photomobil'])?>
          <button type="submit" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="delete"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">No STNK</label>
        <div class="col-sm-4">
          : <?php echo $row['nopajakstnk']?>
        </div>
        <label class="col-sm-2 control-label">No Polisi</label>
        <div class="col-sm-4">
          : <?php echo $row['nopolisi']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Pemilik</label>
        <div class="col-sm-4">
          : <?php echo $row['namapemilik']?>
        </div>
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-4">
          : <?php echo $row['alamat']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Merk/Type</label>
        <div class="col-sm-4">
          : <?php echo $row['merk']?>
        </div>
        <label class="col-sm-2 control-label">Isi Silinder</label>
        <div class="col-sm-4">
          : <?php echo $row['isisilinder']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Jenis/Model</label>
        <div class="col-sm-4">
          : <?php echo $row['jenis']?>
        </div>
        <label class="col-sm-2 control-label">Bahan Bakar</label>
        <div class="col-sm-4">
          : <?php echo $row['bahanbakar']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tahun Pembuatan</label>
        <div class="col-sm-4">
          : <?php echo $row['tahunrakitan']?>
        </div>
        <label class="col-sm-2 control-label">Warna TNKB</label>
        <div class="col-sm-4">
          : <?php echo $row['warnatnkb']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Warna</label>
        <div class="col-sm-4">
          : <?php echo $row['warnakb']?>
        </div>
        <label class="col-sm-2 control-label">Tahun Registrasi</label>
        <div class="col-sm-4">
          : <?php echo $row['coding']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">No Rangka</label>
        <div class="col-sm-4">
          : <?php echo $row['norangka']?>
        </div>
        <label class="col-sm-2 control-label">No BPKB</label>
        <div class="col-sm-4">
          : <?php echo $row['nobpkb']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">No Mesin</label>
        <div class="col-sm-4">
          : <?php echo $row['nomesin']?>
        </div>
        <label class="col-sm-2 control-label">Berlaku S/D</label>
        <div class="col-sm-4">
          : <?php echo $row['berlakusd']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Photo Kendaraan</label>
        <div class="col-sm-4">
          : <img width="100%" src="<?php echo base_url();?>/upload/photos/<?=$row['photomobil']?>" >
        </div>
        <label class="col-sm-2 control-label">Catatan</label>
        <div class="col-sm-4">
          : <?php echo $row['catatan']?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <?php echo form_hidden('action',$action)?>
          <?php echo form_hidden('idkendaraan',$row['idkendaraan'])?>
          <?php echo form_hidden('filetemp',$row['photomobil'])?>
          <button type="submit" class="btn btn-primary">Hapus</button>
          <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }?>
      </form>
  </div>
</div>
