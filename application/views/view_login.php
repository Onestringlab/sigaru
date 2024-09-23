<?php echo form_open('user/user_login', 'class="form-signin" id="myform"'); ?>
<div class="well bs-component">
  <div class="form-signin-heading">
    <img src="<?php echo base_url(); ?>images/logoUMP.png" width="40px" align="left"> &nbsp;
    <strong>SISTEM INFORMASI PENGGUNAAN RUANGAN<br> &nbsp;Universitas Muhammadiyah Pontianak</strong>
  </div>
  <div class="form-group">
    <div class="form-group form-group-lg label-floating is-empty">
      <span class="help-block">Masukkan Username</span>
      <input class="form-control" id="i6" name="username" autocomplete="off" type="text" value="">
    </div>
    <div class="form-group form-group-lg label-floating is-empty">
      <span class="help-block">Masukkan Password</span>
      <input class="form-control" id="i5" name="password" autocomplete="off" type="password" value="">
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
    <br><strong>
      <center>Gunakan
        <a target="_blank" href="https://www.google.com/chrome/browser/desktop/">Chrome</a> atau
        <a target="_blank" href="https://www.opera.com/download">Opera</a> Untuk Tampilan Terbaik
      </center>
    </strong>
  </div>
</div>
</form>