<script>
  function button_cancel() {
    location.replace('<?php echo base_url();?>index.php/peminjaman');
  }

</script>
<?php if($action=="insert" || $action=="update"){?>
<script>
  $(document).ready(function() {
    $("#formPeminjam").validate({
      rules: {
        idkendaraan: "required",
        namapeminjam: "required",
        hppeminjam: "required",
        mulai: {
          required: true,
          skrmulai: "#mulai"
        },
        selesai: {
          required: true,
          mulaiselesai: ["#mulai", "#selesai"],
          cekwaktu: ["#idpeminjaman", "#idkendaraan", "#mulai", "#selesai"]
        },
        tujuan: "required",
        nohp: "required",
        status: "required"
      },
      messages: {
        idkendaraan: "",
        namapeminjam: "",
        mulai: "",
        selesai: "",
        tujuan: "",
        status: ""
      }
    });
    $.validator.addMethod("skrmulai",
      function(value, element, params) {
        var tglmulai = $(params).val();
        var dNow = new Date();
        var dMulai = new Date(tglmulai);
        dNow.setHours("00");
        dNow.setMinutes("00");
        dMulai.setHours("00");
        dMulai.setMinutes("10");
        //        console.log(dNow+dMulai+$(params).val());
        return dMulai >= dNow;
      });
    $.validator.addMethod("mulaiselesai",
      function(value, element, params) {
        var tglmulai = $(params[0]).val();
        var tglselesai = $(params[1]).val();
        var dSelesai = new Date(tglselesai);
        var dMulai = new Date(tglmulai);
        dSelesai.setHours("00");
        dSelesai.setMinutes("10");
        dMulai.setHours("00");
        dMulai.setMinutes("00");
        //        console.log(dMulai >= dSelesai);
        return dSelesai >= dMulai;
      });
    $.validator.addMethod("cekwaktu",
      function(value, element, params) {
        var idpeminjaman = $(params[0]).val();
        var idkendaraan = $(params[1]).val();
        var tanggalmulai = $(params[2]).val();
        var tanggalselesai = $(params[3]).val();
        var statusJadwal = false;
        var url = window.location.hostname;

        $.ajaxSetup({
          async: false
        });

        $.get("https://sigaru.xyz/index.php/peminjaman/cek_waktu", {
          idpeminjaman: idpeminjaman,
          idkendaraan: idkendaraan,
          tanggalmulai: tanggalmulai,
          tanggalselesai: tanggalselesai
        }, function(data, status) {
          var result = $.trim(data);
          console.log(data);
          if (result == "1") {
            statusJadwal = true;
            $(params[5]).val("1");
          } else {
            statusJadwal = false;
            $(params[5]).val("0");
          }
          return statusJadwal;

        }).done(function() {
          if (!statusJadwal) {
            $('#myModal').modal('show');
          }
        });

        return statusJadwal;
      });
  });

</script>
<?php } ?>

<div class="panel panel-info">
  <div class="panel-heading"> Data Peminjaman</div>
  <div class="panel-body">
    <?=form_open('peminjaman/peminjaman_manage','class="form-horizontal" id="formPeminjam"')?>
      <?php if($action=="insert"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kendaraan</label>
        <div class="col-sm-4">
          <?php select_form($kendaraan_list,"idkendaraan","kendaraan","idkendaraan",""); ?>
        </div>
        <label class="col-sm-2 control-label">Unit/Prodi</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="institusi" value="<?=$this->session->userdata('bagian')?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Peminjam</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="namapeminjam" value="<?=$this->session->userdata('name')?>" readonly>
        </div>
        <label class="col-sm-2 control-label">Nomor HP</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="hppeminjam" id="hppeminjam" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Mulai</label>
        <div class="col-sm-4">
          <input class="form-control" type="date" name="mulai" id="mulai" value="">
        </div>
        <label class="col-sm-2 control-label">Selesai</label>
        <div class="col-sm-4">
          <input class="form-control" type="date" name="selesai" id="selesai" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tujuan</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="tujuan" value="">
        </div>
        <label class="col-sm-2 control-label">Acara</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="acara" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Pemakaian Mulai</label>
        <div class="col-sm-4">
          <input class="form-control" type="time" name="waktumulai" value="">
        </div>
        <label class="col-sm-2 control-label">Pemakaian Selesai</label>
        <div class="col-sm-4">
          <input class="form-control" type="time" name="waktuselesai" value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Keberangkatan Dari</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="keberangkatan" value="">
        </div>
        <label class="col-sm-2 control-label">Status</label>
        <div class="col-sm-4">
          <?php
            if($this->session->userdata('role')=="Admin"){
                select_form($perset_list,"kode","value","status","Diajukan");
            }else{
                echo ("Diajukan");
                echo form_hidden('status','Diajukan');
            }
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <?=form_hidden('action',$action)?>
            <input class="form-control" type="hidden" name="idpeminjaman" id="idpeminjaman" value="">
            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="update"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kendaraan</label>
        <div class="col-sm-4">
          <?php select_form($kendaraan_list,"idkendaraan","kendaraan","idkendaraan",$row['idkendaraan']); ?>

        </div>
        <label class="col-sm-2 control-label">Unit/Prodi</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="institusi" value="<?php echo $row['institusi']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Peminjam</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="namapeminjam" value="<?php echo $row['namapeminjam']?>" readonly>
        </div>
        <label class="col-sm-2 control-label">Nomor HP</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="hppeminjam" id="hppeminjam" value="<?php echo $row['hppeminjam']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Mulai</label>
        <div class="col-sm-4">
          <input class="form-control" type="date" name="mulai" id="mulai" value="<?php echo $row['mulai']?>">
        </div>
        <label class="col-sm-2 control-label">Selesai</label>
        <div class="col-sm-4">
          <input class="form-control" type="date" name="selesai" id="selesai" value="<?php echo $row['selesai']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tujuan</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="tujuan" value="<?php echo $row['tujuan']?>">
        </div>
        <label class="col-sm-2 control-label">Acara</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="acara" value="<?php echo $row['acara']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Pemakaian Mulai</label>
        <div class="col-sm-4">
          <input class="form-control" type="time" name="waktumulai" value="<?php echo $row['waktumulai']?>">
        </div>
        <label class="col-sm-2 control-label">Pemakaian Selesai</label>
        <div class="col-sm-4">
          <input class="form-control" type="time" name="waktuselesai" value="<?php echo $row['waktuselesai']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Keberangkatan Dari</label>
        <div class="col-sm-4">
          <input class="form-control" type="text" name="keberangkatan" value="<?php echo $row['keberangkatan']?>">
        </div>
        <label class="col-sm-2 control-label">Status</label>
        <div class="col-sm-4">
          <?php
            if($this->session->userdata('role')=="Admin"){
                select_form($perset_list,"kode","value","status",$row['status']);
            }else{
                echo ("Diajukan");
                echo form_hidden('status',$row['status']);
            }
          ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <?=form_hidden('action',$action)?>
            <input class="form-control" type="hidden" name="idpeminjaman" id="idpeminjaman" value="<?=$row['idpeminjaman'] ?>">
            <button type="submit" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }if($action=="delete"){?>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kendaraan</label>
        <div class="col-sm-4">
          <?php echo $row['idkendaraan']?>
        </div>
        <label class="col-sm-2 control-label">Unit/Prodi</label>
        <div class="col-sm-4">
          <?php echo $row['institusi']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Peminjam</label>
        <div class="col-sm-4">
          <?php echo $row['namapeminjam']?>
        </div>
        <label class="col-sm-2 control-label">Nomor HP</label>
        <div class="col-sm-4">
          <?php echo $row['hppeminjam']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Mulai</label>
        <div class="col-sm-4">
          <?php echo $row['mulai']?>
        </div>
        <label class="col-sm-2 control-label">Selesai</label>
        <div class="col-sm-4">
          <?php echo $row['selesai']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tujuan</label>
        <div class="col-sm-4">
          <?php echo $row['tujuan']?>
        </div>
        <label class="col-sm-2 control-label">Acara</label>
        <div class="col-sm-4">
          <?php echo $row['acara']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Pemakaian Mulai</label>
        <div class="col-sm-4">
          <?php echo $row['waktumulai']?>
        </div>
        <label class="col-sm-2 control-label">Pemakaian Selesai</label>
        <div class="col-sm-4">
          <?php echo $row['waktuselesai']?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Keberangkatan Dari</label>
        <div class="col-sm-4">
          <?php echo $row['keberangkatan']?>
        </div>
        <label class="col-sm-2 control-label">Status</label>
        <div class="col-sm-4">
          <?php echo $row['status']?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <?=form_hidden('action',$action)?>
            <?=form_hidden('idpeminjaman',$row['idpeminjaman'])?>
              <button type="submit" class="btn btn-primary">Delete</button>
              <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
        </div>
      </div>
      <?php }?>
    </form>
  </div>
</div>

<?php $this->load->view('peminjaman/view_peminjaman'); ?>


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
        <p>Waktu Peminjaman Kendaraan Yang Dimasukkan Tidak Tersedia</p>
        <p>Masukkan Waktu Peminjaman Kendaraan Yang Lain Atau Hubungi Perlengkapan </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
