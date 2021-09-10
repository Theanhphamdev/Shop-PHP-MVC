<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="<?php echo LIB_ADMIN . '/images/favicon.png' ?>" rel="icon" />
    <title>Backend2 - <?php echo $title;  ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Stylesheet
    ========================= -->
    <link rel="stylesheet" type="text/css" href="<?= LIB_USER . '/css/bootstrap.min.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?= LIB_USER . '/css/all.min.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?= LIB_USER . '/css/stylesheet.css' ?>" />
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="oxyy-login-register">
    <div class="container-fluid px-0">
        <div class="row no-gutters min-vh-100">
            <!-- Login Form
            ========================= -->
            <div class="col-md-6 d-flex flex-column order-2 order-md-1">
                <div class="container my-auto py-5">
                    <div class="row">
                        <?= $contents;  ?>
                    </div>
                </div>
                <div class="container py-2">
                    <p class="text-2 text-muted text-center mb-0">Bản quyền © 2020 <a href="/">Back End 2</a>. Chưa đăng ký Bản quyền.</p>
                </div>
            </div>
            <!-- Login Form End -->

            <!-- Welcome Text
            ========================= -->
            <div class="col-md-6 order-1 order-md-2">
                <div class="hero-wrap d-flex align-items-center h-100">
                    <div class="hero-mask opacity-8 bg-secondary"></div>
                    <div class="hero-bg hero-bg-scroll" style="background-image:url('<?= LIB_USER . "/image/login-bg-2.jpg"?>');"></div>
                    <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
                        <div class="row no-gutters my-auto py-5">
                            <div class="col-10 col-lg-9 mx-auto">
                                <p class="text-4 text-white">Chúng tôi rất vui khi gặp lại bạn!</p>
                                <h1 class="text-10 text-white mb-4">Cùng gia nhập để nhận được thật nhiều ưu đãi nhé!</h1>
                                <a class="btn btn-outline-light shadow-none video-btn mt-2" href="#" data-src="https://www.youtube.com/embed/2fkC7b5knxk" data-toggle="modal" data-target="#videoModal">
                                    <span class="mr-2"><i class="fas fa-play-circle"></i></span>Xem video demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Welcome Text End -->
        </div>
    </div>
</div>

<!-- Video Modal
========================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bg-transparent border-0">
            <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body p-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal end -->



<!-- Script -->
<script src="<?= LIB_USER . '/js/jquery.min.js' ?>"></script>
<script src="<?= LIB_USER . '/js/bootstrap.bundle.min.js' ?>"></script>
<!-- Style Switcher -->
<script src="<?= LIB_USER . '/js/switcher.min.js' ?>"></script>
<script src="<?= LIB_USER . '/js/theme.js' ?>"></script>
</body>
</html>