<!--=======  offcanvas mobile menu  =======-->

<div class="offcanvas-mobile-menu" id="offcanvas-mobile-menu">
    <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
        <i class="ion-android-close"></i>
    </a>

    <div class="offcanvas-wrapper">
        <div class="offcanvas-inner-content">
            <div class="offcanvas-mobile-search-area">
                <form action="#">
                    <input type="search" placeholder="Tìm kiếm ..." />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="/">Trang Chủ</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="../../index.php">Cửa Hàng</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="../../index.php">Liên Hệ</a>
                    </li>
                </ul>
            </nav>

            <div class="offcanvas-settings">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">MY ACCOUNT </a>
                            <ul class="sub-menu">
                                <li><a href="../../index.php">Register</a></li>
                                <li><a href="../../index.php">Login</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">CURRENCY: USD </a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">€ Euro</a></li>
                                <li><a href="javascript:void(0)">$ US Dollar</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">LANGUAGE: EN-GB </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo LIB_MAIN . '/img/icons/en-gb.png' ?>" alt="" /> English</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo LIB_MAIN . '/img/icons/de-de.png' ?>" alt="" /> Germany</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="offcanvas-widget-area">
                <div class="off-canvas-contact-widget">
                    <div class="header-contact-info">
                        <ul class="header-contact-info__list">
                            <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">(1245) 2456 012 </a></li>
                            <li><i class="ion-android-mail"></i> <a href="../../index.php">info@yourdomain.com</a></li>
                        </ul>
                    </div>
                </div>
                <!--Off Canvas Widget Social Start-->
                <div class="off-canvas-widget-social">
                    <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                    <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                    <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                </div>
                <!--Off Canvas Widget Social End-->
            </div>
        </div>
    </div>
</div>

<!--=======  End of offcanvas mobile menu  =======-->
<!--====================  search overlay ====================-->

<div class="search-overlay" id="search-overlay">
    <a href="javascript:void(0)" class="close-search-overlay" id="close-search-overlay">
        <i class="ion-ios-close-empty"></i>
    </a>

    <!--=======  search form  =======-->

    <div class="search-form">
        <form action="#">
            <input type="search" placeholder="Search entire store here ..." />
            <button type="submit"><i class="ion-android-search"></i></button>
        </form>
    </div>

    <!--=======  End of search form  =======-->
</div>

<!--====================  End of search overlay  ====================-->
<!--====================  quick view ====================-->

<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-xl-12 col-lg-12">
                    <!--=======  single product main content area  =======-->
                    <div class="single-product-main-content-area">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <!--=======  product details slider area  =======-->

                                <div class="product-details-slider-area">
                                    <div class="big-image-wrapper">
                                        <div
                                            class="product-details-big-image-slider-wrapper-quick product-details-big-image-slider-wrapper--bottom-space ht-slick-slider"
                                            data-slick-setting='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "arrows": false,
                "autoplay": false,
                "autoplaySpeed": 5000,
                "fade": true,
                "speed": 500,
                "prevArrow": {"buttonClass": "slick-prev", "iconClass": "fa fa-angle-left" },
                "nextArrow": {"buttonClass": "slick-next", "iconClass": "fa fa-angle-right" }
            }'
                                            data-slick-responsive='[
                {"breakpoint":1501, "settings": {"slidesToShow": 1, "arrows": false} },
                {"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": false} },
                {"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} }
            ]'
                                        >
                                            <div class="single-image">
                                                <img src="<?php echo LIB_MAIN . '/img/products/big1-1.jpg' ?>" class="img-fluid" alt="" />
                                            </div>
                                            <div class="single-image">
                                                <img src="<?php echo LIB_MAIN . '/img/products/big1-2.jpg' ?>" class="img-fluid" alt="" />
                                            </div>
                                            <div class="single-image">
                                                <img src="<?php echo LIB_MAIN . '/img/products/big1-3.jpg' ?>" class="img-fluid" alt="" />
                                            </div>
                                            <div class="single-image">
                                                <img src="<?php echo LIB_MAIN . '/img/products/big1-4.jpg' ?>" class="img-fluid" alt="" />
                                            </div>
                                            <div class="single-image">
                                                <img src="<?php echo LIB_MAIN . '/img/products/big1-5.jpg' ?>" class="img-fluid" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="product-details-small-image-slider-wrapper product-details-small-image-slider-wrapper--horizontal-space ht-slick-slider"
                                        data-slick-setting='{
            "slidesToShow": 4,
            "slidesToScroll": 1,
            "arrows": true,
            "autoplay": false,
            "autoplaySpeed": 5000,
            "speed": 500,
            "asNavFor": ".product-details-big-image-slider-wrapper-quick",
            "focusOnSelect": true,
            "centerMode": false,
            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "fa fa-angle-left" },
            "nextArrow": {"buttonClass": "slick-next", "iconClass": "fa fa-angle-right" }
        }'
                                        data-slick-responsive='[
            {"breakpoint":1501, "settings": {"slidesToShow": 3, "arrows": false} },
            {"breakpoint":1199, "settings": {"slidesToShow": 3, "arrows": false} },
            {"breakpoint":991, "settings": {"slidesToShow": 5, "arrows": false, "slidesToScroll": 1} },
            {"breakpoint":767, "settings": {"slidesToShow": 3, "arrows": false, "slidesToScroll": 1} },
            {"breakpoint":575, "settings": {"slidesToShow": 3, "arrows": false, "slidesToScroll": 1} },
            {"breakpoint":479, "settings": {"slidesToShow": 2, "arrows": false, "slidesToScroll": 1} }
        ]'
                                    >
                                        <div class="single-image">
                                            <img src="<?php echo LIB_MAIN . '/img/products/big1-1.jpg' ?>" class="img-fluid" alt="" />
                                        </div>
                                        <div class="single-image">
                                            <img src="<?php echo LIB_MAIN . '/img/products/big1-2.jpg' ?>" class="img-fluid" alt="" />
                                        </div>
                                        <div class="single-image">
                                            <img src="<?php echo LIB_MAIN . '/img/products/big1-3.jpg' ?>" class="img-fluid" alt="" />
                                        </div>
                                        <div class="single-image">
                                            <img src="<?php echo LIB_MAIN . '/img/products/big1-4.jpg' ?>" class="img-fluid" alt="" />
                                        </div>
                                        <div class="single-image">
                                            <img src="<?php echo LIB_MAIN . '/img/products/big1-5.jpg' ?>" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>

                                <!--=======  End of product details slider area  =======-->
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <!--=======  single product content description  =======-->
                                <div class="single-product-content-description">
                                    <p class="single-info">Brands <a href="../../index.php">Dolor</a></p>
                                    <h4 class="product-title">Lorem ipsum dolor set amet decor</h4>
                                    <div class="product-rating">
                                        <span class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star-outline"></i>
                                        </span>

                                        <span class="review-count"> <a href="#">(2 reviews)</a> | <a href="#">Write A Review</a> </span>
                                    </div>

                                    <p class="single-grid-product__price"><span class="discounted-price">$100.00</span> <span class="main-price discounted">$120.00</span></p>

                                    <p class="single-info">Product Code: <span class="value">CODE123</span></p>
                                    <p class="single-info">Reward Points: <span class="value">200</span></p>
                                    <p class="single-info">Availability: <span class="value">In Stock</span></p>

                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. At, delectus. Voluptates omnis distinctio vitae quo quia veniam minima dolorem hic necessitatibus pariatur, quae fuga similique optio
                                        laboriosam assumenda voluptatum aperiam.
                                    </p>

                                    <div class="product-actions product-actions--quick-view">
                                        <div class="quantity-selection">
                                            <label>Qty</label>
                                            <input type="number" value="1" min="1" />
                                        </div>

                                        <div class="product-buttons">
                                            <a class="cart-btn" href="#"> <i class="ion-bag"></i> ADD TO CART</a>
                                            <span class="wishlist-compare-btn">
                                                <a> <i class="ion-heart"></i></a>
                                                <a> <i class="ion-android-options"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--=======  End of single product content description  =======-->
                            </div>
                        </div>
                    </div>
                    <!--=======  End of single product main content area  =======-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of quick view  ====================-->