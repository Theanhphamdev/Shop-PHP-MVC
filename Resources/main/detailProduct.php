<?php

    $price_discount = ($product->price) * ($product->sale) / 100;
    $price = ($product->price) - $price_discount;

    $title = 'Detail products'
?>
<div class="breadcrumb-area section-space--half">
    <div class="container wide">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  breadcrumb wrpapper  =======-->
                <div class="breadcrumb-wrapper breadcrumb-bg">
                    <!--=======  breadcrumb content  =======-->
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-content__title">Single Product</h2>
                        <ul class="breadcrumb-content__page-map">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Single Product</li>
                        </ul>
                    </div>
                    <!--=======  End of breadcrumb content  =======-->
                </div>
                <!--=======  End of breadcrumb wrpapper  =======-->
            </div>
        </div>
    </div>
</div>
<div class="page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  page wrapper  =======-->
                <div class="page-wrapper">
                    <div class="page-content-wrapper">
                        <!--=======  single product main content area  =======-->
                        <div class="single-product-main-content-area section-space">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--=======  product details slider area  =======-->
                                    <div class="single-grid-product__label" >
                                        <span class="<?php echo empty($product->sale == 0) ? 'sale vp-sale' : '' ?>">
                                            <?php echo empty($product->sale == 0) ? $product->sale : '' ?>%
                                        </span>
                                    </div>
                                    <div class="product-details-slider-area">
                                        <img src="<?php echo getStorageLink($product->image);  ?>" alt="" class="img-fluid">
                                    </div>

                                    <!--=======  End of product details slider area  =======-->
                                </div>
                                <div class="col-lg-6">
                                    <!--=======  single product content description  =======-->
                                    <div class="single-product-content-description">
                                        <p class="single-info"><?php echo $product->cateName(); ?></p>
                                        <h4 class="product-title"><?= $product->name; ?></h4>

                                        <p class="single-grid-product__price">
                                            <span class="discounted-price"><?= number_format($price); ?> VNĐ </span>
                                            <span class="main-price discounted"><?php echo empty($product->sale == 0) ? number_format($product->price). ' VNĐ ' : '' ?></span></p>

                                        <p class="product-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. At, delectus. Voluptates omnis distinctio vitae quo quia veniam minima dolorem hic necessitatibus pariatur, quae fuga similique optio
                                            laboriosam assumenda voluptatum aperiam.
                                        </p>

                                        <div class="product-actions">
                                            <div class="quantity-selection">
                                                <label>Số lượng</label>
                                                <input type="number" value="1" min="1" />
                                            </div>

                                            <div class="product-buttons">
                                                <a class="cart-btn" href="#" style="margin-top: 0;"> <i class="ion-bag"></i> ADD TO CART</a>
                                            </div>
                                        </div>

                                        <div class="social-share-buttons mt-20">
                                            <h5>Chia sẻ lên các trang mxh</h5>
                                            <ul>
                                                <li>
                                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li>
                                                    <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--=======  End of single product content description  =======-->
                                </div>
                            </div>
                        </div>
                        <!--=======  End of single product main content area  =======-->
                        <!--=======  product description review   =======-->

                        <div class="product-description-review-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  product description review container  =======-->

                                    <div class="tab-slider-wrapper product-description-review-container section-space--inner">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                                                <!--=======  review content  =======-->

                                                <div class="product-rating-wrap">
                                                    <div class="pro-avg-rating">
                                                        <h4>REVIEWS <span>( Đánh giá )</span></h4>
                                                    </div>
                                                    <div class="ratings-wrapper">
                                                        <?php foreach ($comments as $comment): ?>
                                                            <div class="sin-ratings">
                                                                <div class="rating-author">
                                                                    <h3><?= $comment->name;?></h3>
                                                                </div>
                                                                <p><?= $comment->description ?></p>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <div class="rating-form-wrapper fix">
                                                        <h3>Thêm Bình Luận</h3>
                                                        <?php if(isset($_SESSION['id_customer'])){
                                                            ?>
                                                            <form action="/insert-comment" method="post">
                                                                <div class="rating-form row">
                                                                    <div class="col-md-7 col-12 form-group">
                                                                        <label for="name">Tên:</label>
                                                                        <input name="name" readonly value="<?= $customer->name; ?>" type="text" />
                                                                    </div>
                                                                    <div class="col-12 form-group">
                                                                        <label for="description">Đánh giá về sản phẩm:</label>
                                                                        <textarea name="description"  placeholder="Hãy nhập đánh giá tại đây!"></textarea>
                                                                    </div>
                                                                    <input type="hidden" name="product_id" value="<?= $product->id; ?>">
                                                                    <div class="col-12">
                                                                        <button type="submit" style="border: 1px solid #b30808ad;background: black;color: white;padding: 5px 15px;cursor: pointer;">Commnent</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        <?php
                                                        }else{
                                                            echo '<h5 class="text-danger text-center"><a href="/login-customer">Hãy Đăng nhập để bình luận về sản phẩm nhé</a></h5>';
                                                        } ?>

                                                    </div>
                                                </div>

                                                <!--=======  End of review content  =======-->
                                            </div>
                                        </div>
                                    </div>

                                    <!--=======  End of product description review container  =======-->
                                </div>
                            </div>
                        </div>

                        <!--=======  End of product description review   =======-->
                        <!--====================  single row slider ====================-->
                        <div class="single-row-slider-area section-space--inner-top">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  section title  =======-->
                                    <div class="section-title-wrapper text-center section-space--half">
                                        <h2 class="section-title">Sản Phẩm có liên quan</h2>
                                        <p class="section-subtitle">Thật ngạc nhiên khi lưu ý rằng được viết bằng Gothic, tôi nghĩ rằng bây giờ rõ ràng là các dạng văn học anteposuerit.</p>
                                    </div>
                                    <!--=======  End of section title  =======-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  single row slider wrapper  =======-->
                                    <div class="single-row-slider-wrapper">
                                        <div
                                            class="ht-slick-slider slick-initialized slick-slider"
                                            data-slick-setting='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "arrows": true,
                        "autoplay": false,
                        "autoplaySpeed": 5000,
                        "speed": 1000,
                        "infinite": false,
                        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-chevron-left" },
                        "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-chevron-right" }
                    }'
                                            data-slick-responsive='[
                        {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                        {"breakpoint":1199, "settings": {"slidesToShow": 4, "arrows": false} },
                        {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false} },
                        {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false} },
                        {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false} },
                        {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false} }
                    ]'
                                        >
                                            <button class="slick-prev slick-arrow slick-disabled" aria-disabled="true" style=""><i class="ion-chevron-left"></i></button>
                                            <div class="slick-list draggable">
                                                <div class="slick-track" style="opacity: 1; width: 1425px; transform: translate3d(0px, 0px, 0px);">
                                                    <?php foreach ($productes as $products): ?>
                                                        <?php
                                                        $price_discount = ($products->price)*($products->sale)/100;
                                                        $price = ($products->price) - $price_discount;
                                                        ?>
                                                        <div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 285px;">
                                                            <div>
                                                                <div class="col" style="width: 100%; display: inline-block;">
                                                                    <!--=======  single grid product  =======-->
                                                                    <div class="single-grid-product">
                                                                        <div class="single-grid-product__image">
                                                                            <div class="single-grid-product__label">
                                                                                <span class="<?php echo empty($products->sale == 0) ? 'sale' : '' ?>">
                                                                                    <?php echo empty($products->sale == 0) ? $products->sale : '' ?>%
                                                                                </span>
                                                                                                    <span class="<?php echo empty( $products->status === "New" || $products->status === "Hot" ) ? '' : 'new' ?>">
                                                                                    <?php echo empty( $products->status === "New" || $products->status === "Hot" ) ? '' : $products->status ?>
                                                                                </span>
                                                                            </div>
                                                                            <a href="single-product.html" tabindex="-1">
                                                                                <img src="<?php echo getStorageLink($products->image); ?>" class="img-fluid" alt="" />
                                                                            </a>

                                                                            <div class="hover-icons">
                                                                                <a href="javascript:void(0)" tabindex="-1"><i class="ion-bag"></i></a>
                                                                                <a href="javascript:void(0)" tabindex="-1"><i class="ion-heart"></i></a>
                                                                                <a href="javascript:void(0)" tabindex="-1"><i class="ion-android-options"></i></a>
                                                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view-modal-container" tabindex="-1"><i class="ion-android-open"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="single-grid-product__content">
                                                                            <div class="single-grid-product__category-rating">
                                                                                <span class="category"><a href="shop-left-sidebar.html" tabindex="-1"><?php echo $products->cateName(); ?></a></span>
                                                                            </div>

                                                                            <h3 class="single-grid-product__title"><a href="single-product.html" tabindex="-1"><?php echo $products->name; ?></a></h3>
                                                                            <p class="single-grid-product__price"><span class="discounted-price"><?php echo number_format($price) ?> VNĐ </span> <span class="main-price discounted"> <?php echo number_format($products->price) ?> VNĐ </span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--=======  End of single grid product  =======-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <button class="slick-next slick-arrow" style="" aria-disabled="false"><i class="ion-chevron-right"></i></button>
                                        </div>
                                    </div>
                                    <!--=======  End of single row slider wrapper  =======-->
                                </div>
                            </div>
                        </div>
                        <!--====================  End of single row slider  ====================-->
                    </div>
                </div>
                <!--=======  End of page wrapper  =======-->
            </div>
        </div>
    </div>
</div>
