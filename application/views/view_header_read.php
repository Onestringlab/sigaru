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
        <ul class="nav navbar-nav navbar-left">
          <li>
            <a href="<?php echo base_url(); ?>index.php/beranda"><span class="fa fa-home" aria-hidden="true"></span> Beranda</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-check" aria-hidden="true"></span> Status Pengajuan <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url(); ?>index.php/beranda/beranda_ruangan"><span class="fa fa-building-o" aria-hidden="true"></span> Status Penggunaan Ruangan</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/beranda/beranda_kendaraan"><span class="fa fa-car" aria-hidden="true"></span> Status Peminjaman Kendaraan</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/beranda/beranda_kerusakan"><span class="fa fa-wrench" aria-hidden="true"></span> Status Perbaikan Kerusakan</a></li>
            </ul>
          </li>
       </ul>
       <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url();?>index.php/user/login">  <span class="fa fa-sign-in" aria-hidden="true"></span> Masuk</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

