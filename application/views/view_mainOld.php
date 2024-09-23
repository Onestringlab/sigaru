<?php if($this->session->userdata('username')!='' && $this->session->userdata('role')!=''){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S I G A R U</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap Themes-->
    <link href="<?php echo base_url(); ?>css/superhero.css" rel="stylesheet">
     <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
</head>
<body>
    <?php $this->load->view('view_header'); ?>
    <div class="container" id="main">
      <?php  $this->load->view($main_content); ?>
    </div>
    <?php $this->load->view('view_footer'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>js/jquery-1.10.2.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php } else if ($this->session->userdata('username')=='' && $this->session->userdata('role')=='') {
    redirect('user/login');
}
?>