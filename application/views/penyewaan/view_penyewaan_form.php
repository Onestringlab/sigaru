<script>
  function button_cancel() {
    location.replace('<?php echo base_url(); ?>index.php/penyewaan');
  }
</script>
<?php if ($action == "insert" || $action == "update") { ?>
  <script>
    $(document).ready(function() {
      $("#formPengguna").validate({
        rules: {
          idruangan: "required",
          namakegiatan: "required",
          namapengguna: "required",
          jumlahperserta: "required",
          kontak: "required",
          nohp: "required",
          tanggalsewa: {
            required: true,
            checkDate: "#tanggalsewa"
          },
          mulai: "required",
          selesai: {
            required: true,
            greaterThan: "#mulai",
            checkTime: ["#idruangan", "#tanggalsewa", "#mulai", "#selesai", "#idpenyewaan"]
          },
          status: "required"
        },
        messages: {
          idruangan: "",
          namakegiatan: "",
          namapengguna: "",
          jumlahperserta: "",
          kontak: "",
          nohp: "",
          tanggalsewa: "Masukkan Tanggal Yang Lebih Muda",
          mulai: "",
          selesai: "Waktu Kurang Tepat atau Bentrok",
          cekwaktu: "",
          status: ""
        }
      }); //id form
      $.validator.addMethod("greaterThan",
        function(value, element, params) {
          var dStart = new Date();
          var dEnd = new Date();
          dStart.setHours($(params).val().substring(0, 2));
          dStart.setMinutes($(params).val().substring(3, 4));
          dEnd.setHours(value.substring(0, 2));
          dEnd.setMinutes(value.substring(3, 4));
          return dEnd > dStart;
        });
      $.validator.addMethod("checkDate",
        function(value, element, params) {
          var tanggalSewa = $(params).val();
          var dNow = new Date();
          var dSewa = new Date(tanggalSewa);
          dNow.setHours("00");
          dNow.setMinutes("00");
          dSewa.setHours("00");
          dSewa.setMinutes("10");
          //                console.log(dNow+dSewa);
          return dSewa >= dNow;
        });
      $.validator.addMethod("checkTime",
        function(value, element, params) {
          var idruangan = $(params[0]).val();
          var tanggalsewa = $(params[1]).val();
          var mulai = $(params[2]).val();
          var selesai = $(params[3]).val();
          var idpenyewaan = $(params[4]).val();
          var statusJadwal = false;
          var url = window.location.hostname;
          //                console.log(idruangan);
          //                console.log(tanggalsewa);
          //                console.log(mulai);
          //                console.log(selesai);
          //                console.log(idpenyewaan);
          $.ajaxSetup({
            async: false
          });

          $.get("https://sigaru.xyz/index.php/penyewaan/cek_waktu", {
            idpenyewaan: idpenyewaan,
            idruangan: idruangan,
            mulai: mulai,
            selesai: selesai,
            tanggalsewa: tanggalsewa
          }, function(data, status) {
            var result = $.trim(data);
            //                    console.log(data);
            //                    console.log(result=="1");
            //                    console.log("Result :"+result);
            if (result == "1") {
              statusJadwal = true;
              $(params[5]).val("1");
              //                        console.log(statusJadwal);
            } else {
              statusJadwal = false;
              $(params[5]).val("0");
              //                        console.log(statusJadwal);
            }
            //                    console.log("Data: " + result + "\nStatus: " + status);
            return statusJadwal;

          }).done(function() {
            //                    console.log("bawah"+statusJadwal);
            if (!statusJadwal) {
              $('#myModal').modal('show');
            }
          });
          //            console.log($(location).attr('protocol'));
          return statusJadwal;
        });
    });
  </script>
<?php } ?>

<div class="panel panel-info">
  <div class="panel-heading"> Kelola Data Penggunaan Ruang</div>
  <div class="panel-body">
    <?= form_open('penyewaan/penyewaan_manage', 'class="form-horizontal" id="formPengguna"') ?>
    <?php if ($action == "insert") { ?>
      <div class="form-group">
        <label class="col-sm-1 control-label">Organisasi/ Instansi</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="namapengguna" value="<?= $this->session->userdata('bagian') ?>" readonly>
        </div>
        <label class="col-sm-1 control-label">No-Nama Ruang</label>
        <div class="col-sm-2">
          <?php select_form($ruangan_list, "idruangan", "nonamaruang", "idruangan", ""); ?>
        </div>
        <label class="col-sm-1 control-label">Acara/ Keperluan</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="namakegiatan" value="">
        </div>
        <label class="col-sm-1 control-label">Jumlah Perserta</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="jumlahperserta" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Nama Pemakai</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="penanggungjawab" value="<?= $this->session->userdata('name') ?>" readonly>
        </div>
        <label class="col-sm-1 control-label">NBM/ No.Identitas</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="npm" value="">
        </div>
        <label class="col-sm-1 control-label">No HP</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="nohp" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Tanggal</label>
        <div class="col-sm-3">
          <input class="form-control" type="date" name="tanggalsewa" id="tanggalsewa" value="">
        </div>
        <label class="col-sm-1 control-label">Mulai</label>
        <div class="col-sm-3">
          <input class="form-control" type="time" name="mulai" id="mulai" value="">
        </div>
        <label class="col-sm-1 control-label">Selesai</label>
        <div class="col-sm-3">
          <input class="form-control" type="time" name="selesai" id="selesai" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Proyektor</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="infokus" value="0">Unit
        </div>
        <label class="col-sm-1 control-label">Papan Tulis</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="papantulis" value="0">Unit
        </div>
        <label class="col-sm-1 control-label">Mic Wireless Portable</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="mic" value="0">Unit
        </div>
        <label class="col-sm-1 control-label">Audio Sound System</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="audiosound" value="0">Unit
        </div>
        <label class="col-sm-1 control-label">Kabel Infocus/ Listrik</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kabel" value="0">Unit
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Keterangan</label>
        <div class="col-sm-4">
          <textarea name="keterangan" class="form-control"></textarea> Isi jika ada keperluan yang lain.
        </div>
        <label class="col-sm-1 control-label">Tanggal Konfirmasi</label>
        <div class="col-sm-2">
          <?php
          if ($this->session->userdata('role') == "Admin") {
          ?>
            <input class="form-control" type="date" name="tanggalkonfirmasi" value="">
          <?php
          } else {
            $tanggal = date("Y-m-d");
            echo ("Ditentukan Oleh Admin");
            echo form_hidden('tanggalkonfirmasi', $tanggal);
          }
          ?>
        </div>
        <label class="col-sm-1 control-label">Status</label>
        <div class="col-sm-1">
          <?php
          if ($this->session->userdata('role') == "Admin") {
            select_form($perset_list, "kode", "value", "status", "Diajukan");
          } else {
            echo ("Diajukan");
            echo form_hidden('status', "Diajukan");
          }
          ?>
        </div>
        <div class="col-sm-2">
          <?= form_hidden('action', $action) ?>
          <input class="form-control" type="hidden" name="idpenyewaan" id="idpenyewaan" value="">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
    <?php }
    if ($action == "update") { ?>
      <div class="form-group">
        <label class="col-sm-1 control-label">Organisasi/ Instansi</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="namapengguna" value="<?php echo $row['namapengguna'] ?>" readonly>
        </div>
        <label class="col-sm-1 control-label">No-Nama Ruang</label>
        <div class="col-sm-2">
          <?php select_form($ruangan_list, "idruangan", "nonamaruang", "idruangan", $row['idruangan']); ?>
        </div>
        <label class="col-sm-1 control-label">Acara/ Keperluan</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="namakegiatan" value="<?php echo $row['namakegiatan'] ?>">
        </div>
        <label class="col-sm-1 control-label">Jumlah Perserta</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="jumlahperserta" value="<?php echo $row['jumlahperserta'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Nama Pemakai</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="penanggungjawab" value="<?php echo $row['penanggungjawab'] ?>" readonly>
        </div>
        <label class="col-sm-1 control-label">NBM/ No.Identitas</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="npm" value="<?php echo $row['npm'] ?>">
        </div>
        <label class="col-sm-1 control-label">No HP</label>
        <div class="col-sm-3">
          <input class="form-control" type="text" name="nohp" value="<?php echo $row['nohp'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Tanggal</label>
        <div class="col-sm-3">
          <input class="form-control" type="date" name="tanggalsewa" id="tanggalsewa" value="<?php echo $row['tanggalsewa'] ?>">
        </div>
        <label class="col-sm-1 control-label">Mulai</label>
        <div class="col-sm-3">
          <input class="form-control" type="time" name="mulai" id="mulai" value="<?php echo $row['mulai'] ?>">
        </div>
        <label class="col-sm-1 control-label">Selesai</label>
        <div class="col-sm-3">
          <input class="form-control" type="time" name="selesai" id="selesai" value="<?php echo $row['selesai'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Proyektor</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="infokus" value="<?php echo $row['infokus'] ?>">Unit
        </div>
        <label class="col-sm-1 control-label">Papan Tulis</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="papantulis" value="<?php echo $row['papantulis'] ?>">Unit
        </div>
        <label class="col-sm-1 control-label">Mic Wireless Portable</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="mic" value="<?php echo $row['mic'] ?>">Unit
        </div>
        <label class="col-sm-1 control-label">Audio Sound System</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="audiosound" value="<?php echo $row['audiosound'] ?>">Unit
        </div>
        <label class="col-sm-1 control-label">Kabel Infocus/ Listrik</label>
        <div class="col-sm-1">
          <input class="form-control" type="number" name="kabel" value="<?php echo $row['kabel'] ?>">Unit
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Keterangan</label>
        <div class="col-sm-4">
          <textarea name="keterangan" class="form-control"><?php echo $row['keterangan'] ?></textarea>Isi jika ada keperluan yang lain.
        </div>
        <label class="col-sm-1 control-label">Tanggal Konfirmasi</label>
        <div class="col-sm-2">
          <?php
          if ($this->session->userdata('role') == "Admin") {
          ?>
            <input class="form-control" type="date" name="tanggalkonfirmasi" value="<?php echo $row['tanggalkonfirmasi'] ?>">
          <?php
          } else {
            $tanggal = date("Y-m-d");
            echo ("Ditentukan Oleh Admin");
            echo form_hidden('tanggalkonfirmasi', $tanggal);
          }
          ?>
        </div>
        <label class="col-sm-1 control-label">Status</label>
        <div class="col-sm-2">
          <?php
          if ($this->session->userdata('role') == "Admin") {
            select_form($perset_list, "kode", "value", "status", $row['status']);
          } else {
            echo ("Diajukan");
            echo form_hidden('status', $row['status']);
          }
          ?>
        </div>
        <div class="col-sm-2">
          <?= form_hidden('action', $action) ?>
          <input class="form-control" type="hidden" name="idpenyewaan" id="idpenyewaan" value="<?= $row['idpenyewaan'] ?>">
        </div>
      </div>
      <div class="form-group">
        <!-- <div class="col-sm-5">
        </div> -->
        <label class="col-sm-1 control-label">Catatan</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="catatan" value="<?php echo $row['catatan'] ?>">
        </div>
        <div class="col-sm-2">
          <button type="submit" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
    <?php }
    if ($action == "delete") { ?>
      <div class="form-group">
        <label class="col-sm-1 control-label">Organisasi/ Instansi</label>
        <div class="col-sm-2">
          <?php echo $row['namapengguna'] ?>
        </div>
        <label class="col-sm-1 control-label">No-Nama Ruang</label>
        <div class="col-sm-2">
          <?php echo $row['noruangan'] . "-" . $row['namaruangan'] ?>
        </div>
        <label class="col-sm-1 control-label">Acara/ Keperluan</label>
        <div class="col-sm-3">
          <?php echo $row['namakegiatan'] ?>
        </div>
        <label class="col-sm-1 control-label">Jumlah Perserta</label>
        <div class="col-sm-1">
          <?php echo $row['jumlahperserta'] ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Nama Pemakai</label>
        <div class="col-sm-3">
          <?php echo $row['penanggungjawab'] ?>
        </div>
        <label class="col-sm-1 control-label">NBM/ No.Identitas</label>
        <div class="col-sm-3">
          <?php echo $row['npm'] ?>
        </div>
        <label class="col-sm-1 control-label">No HP</label>
        <div class="col-sm-3">
          <?php echo $row['nohp'] ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Tanggal</label>
        <div class="col-sm-3">
          <?php echo $row['tanggalsewa'] ?>
        </div>
        <label class="col-sm-1 control-label">Mulai</label>
        <div class="col-sm-3">
          <?php echo $row['mulai'] ?>
        </div>
        <label class="col-sm-1 control-label">Selesai</label>
        <div class="col-sm-3">
          <?php echo $row['selesai'] ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Proyektor</label>
        <div class="col-sm-1">
          <?php echo $row['infokus'] ?> Unit</div>
        <label class="col-sm-1 control-label">Papan Tulis</label>
        <div class="col-sm-1">
          <?php echo $row['papantulis'] ?> Unit</div>
        <label class="col-sm-1 control-label">Mic Wireless Portable</label>
        <div class="col-sm-1">
          <?php echo $row['mic'] ?> Unit</div>
        <label class="col-sm-1 control-label">Audio Sound System</label>
        <div class="col-sm-1">
          <?php echo $row['audiosound'] ?> Unit</div>
        <label class="col-sm-1 control-label">Kabel Infocus/Kabel Listrik</label>
        <div class="col-sm-1">
          <?php echo $row['kabel'] ?> Unit</div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Keterangan</label>
        <div class="col-sm-5">
          <?php echo $row['keterangan'] ?>
        </div>
        <label class="col-sm-1 control-label">Tanggal Konfirmasi</label>
        <div class="col-sm-1">
          <?php echo $row['tanggalkonfirmasi'] ?>
        </div>
        <label class="col-sm-1 control-label">Status</label>
        <div class="col-sm-1">
          <?php echo $row['status'] ?>
        </div>
        <div class="col-sm-2">
          <?= form_hidden('action', $action) ?>
          <?= form_hidden('idpenyewaan', $row['idpenyewaan']) ?>
          <button type="submit" class="btn btn-primary">Hapus</button>
          <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
    <?php } ?>
    </form>
  </div>
</div>

<?php $this->load->view('penyewaan/view_penyewaan'); ?>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pemberitahuan</h4>
      </div>
      <div class="modal-body">
        <p>Jadwal Ruangan Yang Dimasukkan Tidak Tersedia</p>
        <p>Masukkan Jadwal Ruangan Yang Lain Atau Hubungi Perlengkapan </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>