<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend 2 - <?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo LIB_ADMIN . '/images/favicon.png' ?>">
    <link href="<?php echo LIB_ADMIN . '/vendor/jqvmap/css/jqvmap.min.css' ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo LIB_ADMIN . '/vendor/chartist/css/chartist.min.css' ?>">
    <!-- Vectormap -->
    <link href="<?php echo LIB_ADMIN . '/vendor/jqvmap/css/jqvmap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo LIB_ADMIN . '/vendor/bootstrap-select/dist/css/bootstrap-select.min.css' ?>" rel="stylesheet">
    <link href="<?php echo LIB_ADMIN . '/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo LIB_ADMIN . 'vendor/owl-carousel/owl.carousel.css' ?>" rel="stylesheet">


</head>
<body>
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<div id="main-wrapper">
    <?php require ViewAdmin . './header.php'  ?>
    <?php echo $contents ?>
    <?php require ViewAdmin . './footer.php' ?>
</div>

<script src="<?php echo LIB_ADMIN . '/vendor/global/global.min.js' ?>"></script>
<script src="<?php echo LIB_ADMIN . '/vendor/bootstrap-select/dist/js/bootstrap-select.min.js' ?>"></script>
<script src="<?php echo LIB_ADMIN . '/vendor/chart.js/Chart.bundle.min.js' ?>"></script>
<script src="<?php echo LIB_ADMIN . '/js/custom.min.js' ?>"></script>
<script src="<?php echo LIB_ADMIN . '/js/dlabnav-init.js' ?>"></script>
<script src="<?php echo LIB_ADMIN . '/vendor/owl-carousel/owl.carousel.js' ?>"></script>


<!-- Chart piety plugin files -->
<script src="<?php echo LIB_ADMIN . '/vendor/peity/jquery.peity.min.js' ?>"></script>

<!-- Apex Chart -->
<script src="<?php echo LIB_ADMIN . '/vendor/apexchart/apexchart.js' ?>"></script>


<!-- Dashboard 1 -->
<script src="<?php echo LIB_ADMIN . '/js/dashboard/dashboard-1.js' ?>"></script>
</body>
</html>