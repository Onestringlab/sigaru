<?php if ($this->session->userdata('username') != '' && $this->session->userdata('role') != '') { ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>S I G A R U</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap -->
      <link href="<?php echo base_url(); ?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap Themes-->
      <link href="<?php echo base_url(); ?>css/cerulean.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
      <!-- Data Tables CSS -->
      <link href="<?php echo base_url(); ?>css/jquery.dataTables.min.css" rel="stylesheet">

      <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
          margin-bottom: 0;
          border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
          height: 450px
        }

        /* Set gray background color and 100% height */
        .sidenav {
          padding-top: 20px;
          background-color: #f1f1f1;
          height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
          background-color: #555;
          color: white;
          padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
          .sidenav {
            height: auto;
            padding: 15px;
          }

          .row.content {
            height: auto;
          }
        }
      </style>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="<?php echo base_url(); ?>js/jquery-1.10.2.js"></script>
      <!-- jQuery Validate -->
      <script src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
      <script src="<?php echo base_url(); ?>js/additional-methods.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="<?php echo base_url(); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- Table Search JS -->
      <script src="<?php echo base_url(); ?>js/tableSearch.js"></script>
      <!-- Font Awesome -->
      <!--  <script src="https://use.fontawesome.com/9ed69e8881.js"></script>-->
      <link rel="stylesheet" href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css">
      <!-- Data Tables JS -->
      <script src="<?php echo base_url(); ?>js/dataTables.min.js"></script>


  </head>

  <body>

    <?php $this->load->view('view_header'); ?>
    <div class="container-fluid text-center" id="main">
      <div class="col-sm-12 text-left">
        <?php $this->load->view($main_content); ?>
      </div>
    </div>

    <?php $this->load->view('view_footer'); ?>

  </body>

  </html>
<?php } else if ($this->session->userdata('username') == '' && $this->session->userdata('role') == '') {
  redirect('user/login');
}
?>