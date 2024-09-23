<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid" id="nav-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle Navigasi</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/beranda">S I G A R U</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
       <?php  $this->load->view('view_header_public'); ?>
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-building-o" aria-hidden="true"></span> Ruangan <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(); ?>index.php/penyewaan"><span class="fa fa-thumb-tack" aria-hidden="true"></span> Penggunaan Ruangan</a></li>
          <?php
          $role = $this->session-> userdata('role');
          if($role=="Admin"){ ?>
            <li><a href="<?php echo base_url(); ?>index.php/penyewaan/log_penyewaan"><span class="fa fa-file-o" aria-hidden="true"></span> Data Penggunaan Ruangan</a></li>
          <?php } ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-car" aria-hidden="true"></span> Kendaraan <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(); ?>index.php/peminjaman"><span class="fa fa-key" aria-hidden="true"></span> Peminjaman Kendaraan</a></li>
          <?php
          $role = $this->session-> userdata('role');
          if($role=="Admin"){ ?>
            <li><a href="<?php echo base_url(); ?>index.php/peminjaman/log_peminjaman"><span class="fa fa-file-o" aria-hidden="true"></span> Data Peminjaman Kendaraan</a></li>
          <?php } ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-gears" aria-hidden="true"></span> Barang dan Alat <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(); ?>index.php/kerusakan/"><span class="fa fa fa-wrench" aria-hidden="true"></span> Lapor Kerusakan</a></li>
          <?php
          $role = $this->session-> userdata('role');
          if($role=="Admin"){ ?>
            <li><a href="<?php echo base_url(); ?>index.php/kerusakan/log_kerusakan"><span class="fa fa-file-o" aria-hidden="true"></span> Data Laporan Kerusakan</a></li>
          <?php } ?>
        </ul>
      </li>
      <?php
      $role = $this->session-> userdata('role');
      if($role=="Admin" || $role=="Staf"){ ?>
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Perawatan <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(); ?>index.php/manac/"><span class="fa fa-snowflake-o" aria-hidden="true"></span> AC</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/manmobil/"><span class="fa fa-car" aria-hidden="true"></span> Kendaraan</a></li>
        </ul>
      </li>
      <?php } ?>
      <?php
      $role = $this->session-> userdata('role');
      if($role=="Admin"){ ?>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-database" aria-hidden="true"></span> Data Master <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>index.php/ruangan"><span class="fa fa-building-o" aria-hidden="true"></span> Ruangan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/kendaraan"><span class="fa fa-car" aria-hidden="true"></span> Kendaraan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/pengumuman"><span class="fa fa-bullhorn" aria-hidden="true"></span> Pengumuman</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/lov"><span class="fa fa-tag" aria-hidden="true"></span> LOV</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/user"><span class="fa fa-user-o" aria-hidden="true"></span> Pengguna</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url(); ?>index.php/logpenelitian"><span class="fa fa-list" aria-hidden="true"></span> Log Penelitian</a></li>
            <!-- <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
    <?php } ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url();?>index.php/user/user_logout">  <span class="fa fa-sign-out fa-lg" aria-hidden="true"></span> Keluar [<?php echo $this->session-> userdata('username');?>] </a></li>
    </ul>
  </div>
</nav>

