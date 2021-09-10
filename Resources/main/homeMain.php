<!--====================  hero slider area ====================-->
<?php
$title = 'Website bán hàng làm dự án!';
?>
<div class="hero-slider-area section-space">
    <div class="container-fluid wide">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  hero slider wrapper  =======-->

                <div class="hero-slider-wrapper">
                    <div class="ht-slick-slider" data-slick-setting='{
                        "slidesToShow": 1,
                        "slidesToScroll": 1,
                        "arrows": true,
                        "dots": true,
                        "autoplay": true,
                        "autoplaySpeed": 5000,
                        "speed": 1000,
                        "fade": true,
                        "infinite": true,
                        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                        "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                    }' data-slick-responsive='[
                        {"breakpoint":1501, "settings": {"slidesToShow": 1} },
                        {"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": false} },
                        {"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false} },
                        {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false} },
                        {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false} },
                        {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                    ]'>

                        <!--=======  single slider item  =======-->
                        <?php foreach ($slider as $slide): ?>
                        <div class="single-slider-item">
                            <div class="hero-slider-item-wrapper" style="background-image: url(<?= getStorageLink($slide->image); ?>);">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="hero-slider-content hero-slider-content--left-space">
                                                <p class="slider-title slider-title--big-light"><h3><?= $slide->title_slide; ?></h3></p>
                                                <p class="slider-title slider-title--big-bold"><?= $slide->heading; ?></p>
                                                <p class="slider-title slider-title--small"><?= $slide->description; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                        <!--=======  End of single slider item  =======-->


                    </div>
                </div>

                <!--=======  End of hero slider wrapper  =======-->
            </div>
        </div>
    </div>
</div>

<!--====================  End of hero slider area  ====================-->

<!--====================  single row slider tab ====================-->
<div class="single-row-slider-tab-area section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  section title  =======-->
                <div class="section-title-wrapper text-center section-space--half">
                    <h2 class="section-title">Sản phẩm của chúng tôi</h2>
                    <p class="section-subtitle">Thật ngạc nhiên khi lưu ý rằng được viết bằng Gothic, tôi nghĩ rằng bây giờ rõ ràng là các hình thức văn học anteposuerit.</p>
                </div>
                <!--=======  End of section title  =======-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!--=======  tab slider wrapper  =======-->

                <div class="tab-slider-wrapper">
                    <!--=======  tab product content  =======-->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-series-1" role="tabpanel" aria-labelledby="product-tab-1">
                            <!--=======  single row slider wrapper  =======-->
                            <div class="single-row-slider-wrapper">
                                <div class="ht-slick-slider" data-slick-setting='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "autoplay": false,
                                    "autoplaySpeed": 5000,
                                    "speed": 1000,
                                    "infinite": false,
                                    "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                                    "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                                }' data-slick-responsive='[
                                    {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                    {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                                    {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                                    {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                                    {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                                    {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                                ]'>
                                    <?php foreach ($products as $product):?>
                                        <?php
                                            $price_discount = ($product->price)*($product->sale)/100;
                                            $price = ($product->price) - $price_discount;
                                        ?>
                                        <div class="col">
                                            <!--=======  single grid product  =======-->
                                            <div class="single-grid-product">
                                                <div class="single-grid-product__image">
                                                    <div class="single-grid-product__label">
                                                        <span class="<?php echo empty($product->sale == 0) ? 'sale' : '' ?>">
                                                            <?php echo empty($product->sale == 0) ? $product->sale : '' ?>%
                                                        </span>
                                                        <span class="<?php echo empty( $product->status === "New" || $product->status === "Hot" ) ? '' : 'new' ?>">
                                                            <?php echo empty( $product->status === "New" || $product->status === "Hot" ) ? '' : $product->status ?>
                                                        </span>
                                                    </div>
                                                    <a href="/single-product&id=<?= $product->id; ?>">
                                                        <img src="<?= getStorageLink($product->image); ?>" class="img-fluid" alt="">
                                                    </a>

                                                    <div class="hover-icons">
                                                        <a href="/add-cart&id=<?= $product->id;   ?>" id="addCart"><i class="ion-bag"></i></a>
                                                        <a href="javascript:void(0)"><i class="ion-heart"></i></a>
                                                        <a href="javascript:void(0)"><i class="ion-android-options"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view-modal-container"><i class="ion-android-open"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single-grid-product__content">
                                                    <div class="single-grid-product__category-rating">
                                                        <span class="category">
                                                            <a href=""><?= $product->cateName(); ?></a>
                                                        </span>
                                                    </div>

                                                    <h3 class="single-grid-product__title">
                                                        <a href="/single-product&id=<?= $product->id; ?>"><?= $product->name; ?></a></h3>
                                                    <p class="single-grid-product__price">
                                                        <span class="discounted-price"><?= number_format($price); ?> VNĐ</span>
                                                        <span class="main-price discounted"><?= number_format($product->price) ?> VNĐ</span></p>
                                                </div>
                                            </div>
                                            <!--=======  End of single grid product  =======-->
                                        </div>
                                    <?php endforeach; ?>

<!--                                    --><?php
//                                        if (isset($_POST['btn_buy'])) {
//                                            $id=$_POST['id'];
//                                            if (isset($_SESSION['cart'])) {
//                                                $i=count($_SESSION['cart']);
//                                            }
//                                            else{
//                                                $i=0;
//                                            }
//                                            $_SESSION['cart'][$i]['id']=$id;
//                                            $_SESSION['cart'][$i]['sl']=1;
//                                            header("refresh:0");
//                                        }
//                                    ?>

                                </div>
                            </div>
                            <!--=======  End of single row slider wrapper  =======-->
                        </div>
                    </div>
                    <!--=======  End of tab product content  =======-->
                </div>

                <!--=======  End of tab slider wrapper  =======-->
            </div>
        </div>
    </div>
</div>
<!--====================  End of single row slider tab  ====================-->
<!--====================  feature logo area ====================-->
<div class="feature-logo-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  feature logo wrapper  =======-->
                <div class="feature-logo-wrapper section-space--inner-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <!--=======  single feature logo  =======-->
                            <div class="single-feature-logo">
                                <div class="single-feature-logo__image">
                                    <img src="<?php echo LIB_MAIN . '/img/icons/free_shipping.png'?>" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-logo__content">
                                    <h4 class="title">FREE SHIP</h4>
                                    <p class="short-desc">Chúng tôi cung cấp giao hàng miễn phí thông qua Giao hàng tiêu chuẩn cho các đơn đặt hàng trên 2 triệu đồng.</p>
                                </div>
                            </div>
                            <!--=======  End of single feature logo  =======-->
                        </div>
                        <div class="col-md-4">
                            <!--=======  single feature logo  =======-->
                            <div class="single-feature-logo">
                                <div class="single-feature-logo__image">
                                    <img src="<?php echo LIB_MAIN . '/img/icons/money_back.png'?>" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-logo__content">
                                    <h4 class="title">HOÀN TIỀN TRONG VÒNG 3 NGÀY</h4>
                                    <p class="short-desc">Nếu bạn không hài lòng với sản phẩm của chúng tôi, chúng tôi sẽ hoàn lại giá mua *.</p>
                                </div>
                            </div>
                            <!--=======  End of single feature logo  =======-->
                        </div>
                        <div class="col-md-4">
                            <!--=======  single feature logo  =======-->
                            <div class="single-feature-logo">
                                <div class="single-feature-logo__image">
                                    <img src="<?php echo LIB_MAIN . '/img/icons/support247.png'?>" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-logo__content">
                                    <h4 class="title">HỖ TRỢ TRỰC TUYẾN 24/7</h4>
                                    <p class="short-desc">Nhóm hỗ trợ thân thiện của chúng tôi luôn sẵn sàng trợ giúp bạn 24 giờ một ngày, bảy ngày một tuần</p>
                                </div>
                            </div>
                            <!--=======  End of single feature logo  =======-->
                        </div>
                    </div>
                </div>
                <!--=======  End of feature logo wrapper  =======-->
            </div>
        </div>
    </div>
</div>
<!--====================  End of feature logo area  ====================-->
<!--====================  banner hover area ====================-->
<div class="banner-hover-area section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  banner hover wrapper  =======-->
                <div class="banner-hover-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <!--=======  single hover banner  =======-->
                            <div class="single-hover-banner">
                                <div class="single-hover-banner__image">
                                    <a href="../../index.php">
                                        <img src="<?php echo LIB_MAIN . '/img/banners/img1-middle-eposi1.jpg'?>" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-hover-banner__content">
                                        <h4 class="small-text">Siêu Khuyến Mãi</h4>
                                        <h3 class="big-text">Giảm ngay 50% giá trị các sản phẩm</h3>
                                        <a class="banner-link" href="../../index.php">Mua Ngay</a>
                                    </div>
                                </div>
                            </div>
                            <!--=======  End of single hover banner  =======-->
                        </div>

                        <div class="col-md-6">
                            <!--=======  single hover banner  =======-->
                            <div class="single-hover-banner">
                                <div class="single-hover-banner__image">
                                    <a href="../../index.php">
                                        <img src="<?php echo LIB_MAIN . '/img/banners/img2-middle-eposi1.jpg'?>" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-hover-banner__content">
                                        <h4 class="small-text">Bán chạy nhất !</h4>
                                        <h3 class="big-text">Đồ Gỗ Decor Giảm giá tới 70%</h3>
                                        <a class="banner-link" href="../../index.php">Mua Ngay</a>
                                    </div>
                                </div>
                            </div>
                            <!--=======  End of single hover banner  =======-->
                        </div>
                    </div>
                </div>
                <!--=======  End of banner hover wrapper  =======-->
            </div>
        </div>
    </div>
</div>
<!--====================  End of banner hover area  ====================-->
<!--====================  newsletter area ====================-->
<div class="newsletter-area section-space--inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="newsletter-wrapper">
                    <p class="small-text" style="margin-bottom: 10px;">Đặc biệt dành cho người đăng ký</p>
                    <h3 class="title">Giảm giá 10% cho thành viên</h3>
                    <p class="short-desc">Đăng ký các bản tin của chúng tôi ngay bây giờ và cập nhật các bộ sưu tập mới, các lookbook mới nhất và các ưu đãi độc quyền.</p>

                    <div class="newsletter-form">
                        <form id="mc-form" class="mc-form">
                            <input type="email" placeholder="Vui lòng nhập email tại đây..." required>
                            <button type="submit" value="submit">Đăng kí ngay !</button>
                        </form>

                    </div>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of newsletter area  ====================-->