<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/pgd.ico" type="image/ico" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
<!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="#home" >
    <img src="<?php echo base_url(); ?>assets/images/logologo.png" style="width:250px;height:auto;" alt=""></a></a>
    </a>
  </div>
  
  <!-- Left-aligned links (default) -->
  <!-- <a href="#news">News</a>
  <a href="#contact">Contact</a> -->
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="#search"></a>
    <a href="#about"></a>
  </div>
  
</div>

<section class="">
    <div class="container-fluid">
        <!-- <div class="block-header">
            <h2>DASHBOARD</h2>
        </div> -->

        <div class="row clearfix">
            <!-- Latest Social Trends -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="body bg-grey">
                        <center>
                            <a href="<?php echo base_url('Mobil'); ?>">
                            <img src="<?php echo base_url(); ?>assets/images/mobil.png" class="vehicle" alt=""></a>
                        </center>
                    </div>
                </div>
            </div>
            <!-- #END# Latest Social Trends -->
            <!-- Answered Tickets -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="body bg-grey">
                    <center>
                        <a href="<?php echo base_url('Motor'); ?>">
                        <img src="<?php echo base_url(); ?>assets/images/motor.png" class="vehicle" alt=""></a>
                    </center>
                    </div>
                </div>
            </div>
            <!-- #END# Answered Tickets -->
        </div>

    </div>
    
    <!-- footer content -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6" align="right">
                        <img class="img-responsive" src="<?php echo base_url(''); ?>assets/images/a.png" >  
                </div>
                <div class="col-xs-12 col-lg-6">    
                    <img class="img-responsive" src="<?php echo base_url(''); ?>assets/images/b.png">
                </div>
            </div>     
        </div> 
        <hr>
        <div style="text-align:center;">
        Copyright © 2019 PT. Pegadaian - Persero. All Rights Reserved.
        </div>
        <div class="clearfix" style="margin-bottom:30px;"></div>
    </footer>
    <!-- /footer content -->
</section>
<!-- Jquery Core Js -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.bundle.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/index.js"></script>

<!-- Demo Js -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
</body>
</html>