<?php
$cakeDescription = 'Clinic Management System';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php  echo $this->request->webroot;?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo $this->request->webroot;?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo $this->request->webroot;?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo $this->request->webroot;?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo $this->request->webroot;?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo $this->request->webroot;?>assets/build/css/custom.min.css" rel="stylesheet">
</head>
    <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php echo $this->element('sidebar');?>

        <!-- top navigation -->
        <?php echo $this->element('nav_top');?>
        <!-- /top navigation -->

        <!-- page content -->
        <?php echo $this->element('home');?>
        <!-- /page content -->

        <!-- footer content -->
        <?php echo $this->element('footer');?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="<?php echo $this->request->webroot;?>assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- morris.js -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo $this->request->webroot;?>assets/vendors/morris.js/morris.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo $this->request->webroot;?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo $this->request->webroot;?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo $this->request->webroot;?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo $this->request->webroot;?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo $this->request->webroot;?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo $this->request->webroot;?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo $this->request->webroot;?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo $this->request->webroot;?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo $this->request->webroot;?>assets/build/js/custom.min.js"></script>

  </body>
</html>
