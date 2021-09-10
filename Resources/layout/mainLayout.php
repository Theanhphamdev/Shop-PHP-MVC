<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend2 - <?php echo $title;  ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="<?php echo LIB_MAIN . '/img/favicon.ico'?>">

    <!--=============================================
    =            CSS  files       =
    =============================================-->

    <!-- Vendor CSS -->
    <link href="<?php echo LIB_MAIN . '/css/vendors.css' ?>" rel="stylesheet">
    <!-- Main CSS -->
    <link href="<?php echo LIB_MAIN . '/css/style.css' ?> " rel="stylesheet">
</head>
<body>

<?php require ViewMain . '/header.php' ?>
<?php echo $contents ?>
<?php require ViewMain . '/footer.php' ?>
<script src="<?php echo LIB_MAIN . '/js/vendors.js' ?>"></script>
<!-- Active JS -->
<script src="<?php echo LIB_MAIN . '/js/active.js' ?>"></script>
</body>
</html>