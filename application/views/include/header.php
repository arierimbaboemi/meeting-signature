
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tanda Tangan Digital</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/flat/blue.css'); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
 <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/select.bootstrap.min.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-icons/entypo/css/entypo.css');?>">
  <!-- ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/ionicons-2.0.0/css/ionicons.min.css'); ?>">
  <link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/plugins/jQueryUI/jquery-ui.css');?>"/>

  <link href="<?php echo base_url('assets/css/jquery.signaturepad.css');?>" rel="stylesheet">
  <style type="text/css">
    .main-sidebar { background-color: #333 !important }
    .text-right { text-align:right; }
  </style>

  

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jQueryUI/jquery-ui.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jQueryUI/jquery-ui.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/dist/js/custom.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/accounting.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/accounting.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/numeric-1.2.6.min.js');?>"></script> 
<script src="<?php echo base_url('assets/js/bezier.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.signaturepad.js');?>"></script> 

<script type='text/javascript' src="<?php echo base_url('assets/js/html2canvas.js');?>"></script>
<script src="<?php echo base_url('assets/js/json2.min.js');?>"></script>
<script>
  window.siteUrl    = "<?php echo site_url();?>";
</script>


<style type="text/css">
  body{
    text-align:center;
  }
  #signArea{
    width:304px;
    margin: 30px auto;
  }
  .sign-container {
    width: 60%;
    margin: auto;
  }
  .sign-preview {
    width: 150px;
    height: 50px;
    border: solid 1px #CFCFCF;
    margin: 10px 5px;
  }
  .tag-ingo {
    font-family: cursive;
    font-size: 12px;
    text-align: left;
    font-style: oblique;
  }
</style>
  <script>
    $.widget.bridge('uibutton', $.ui.button);
    window.siteUrlApi = "<?php echo site_url('api/');?>";
    window.siteUrl = "<?php echo site_url();?>";
  </script>
</head>
<body class="hold-transition  skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b>Meeting Signature | </b> 1.0.0</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>