<?php $title = 'Shop'; ?>
<!--====================  breadcrumb area ====================-->
<div class="breadcrumb-area section-space--half">
    <div class="container wide">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  breadcrumb wrpapper  =======-->
                <div class="breadcrumb-wrapper breadcrumb-bg">
                    <!--=======  breadcrumb content  =======-->
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-content__title">Cửa Hàng</h2>
                        <ul class="breadcrumb-content__page-map">
                            <li><a href="/">Trang chủ</a></li>
                            <li class="active">Cửa hàng</li>
                        </ul>
                    </div>
                    <!--=======  End of breadcrumb content  =======-->
                </div>
                <!--=======  End of breadcrumb wrpapper  =======-->
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->

<!--====================  shop page content area ====================-->
<div class="page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  shop page wrapper  =======-->
                <div class="page-wrapper">
                    <div class="page-content-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--=======  shop page header  =======-->
                                <div class="shop-header">
                                    <div class="shop-header__left">
                                        <div class="grid-icons">
                                            <button data-target="grid three-column" data-tippy="3" data-tippy-inertia="true" data-tippy-animation="fade" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="roundborder" class="active three-column"></button>
                                            <button data-target="grid four-column" data-tippy="4" data-tippy-inertia="true" data-tippy-animation="fade" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="roundborder" class="four-column d-none d-lg-block"></button>
                                            <button data-target="list" data-tippy="List" data-tippy-inertia="true" data-tippy-animation="fade" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="roundborder" class="list-view"></button>
                                        </div>


                                    </div>


                                </div>
                                <!--=======  End of shop page header  =======-->
                            </div>
                            <div class="col-lg-3 order-2 order-lg-1">
                                <!--=======  page sidebar wrapper =======-->
                                <div class="page-sidebar-wrapper">
                                    <!--=======  single sidebar widget  =======-->
                                    <div class="single-sidebar-widget">

                                        <h4 class="single-sidebar-widget__title">Loại hàng</h4>
                                        <ul class="single-sidebar-widget__category-list">
                                            <?php
                                                foreach ($cates as $cate): ?>
                                                    <li><a href="#"><?= $cate->name; ?> <span class="counter"><?= $cate->getTotalProduct(); ?></span></a></li>
                                                <?php endforeach;
                                            ?>
                                        </ul>
                                    </div>
                                    <!--=======  End of single sidebar widget  =======-->
                                </div>
                                <!--=======  End of page sidebar wrapper  =======-->
                            </div>
                            <div class="col-lg-9 order-1 order-lg-2">
                                <!--=======  shop page content  =======-->
                                <div class="shop-page-content">
                                    <div class="row shop-product-wrap grid three-column">
                                        <?php foreach ($products as $product): ?>
                                            <?php
                                            $price_discount = ($product->price)*($product->sale)/100;
                                            $price = ($product->price) - $price_discount;
                                            ?>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-6">
                                                <!--=======  product grid view  =======-->
                                                <div class="single-grid-product grid-view-product">
                                                    <div class="single-grid-product__image">
                                                        <div class="single-grid-product__label">
                                                            <span class="<?php echo empty($product->sale == 0) ? 'sale' : '' ?>">
                                                                <?php echo empty($product->sale == 0) ? $product->sale : '' ?>%
                                                            </span>
                                                            <span class="<?php echo empty( $product->status === "New" || $product->status === "Hot" ) ? '' : 'new' ?>">
                                                                <?php echo empty( $product->status === "New" || $product->status === "Hot" ) ? '' : $product->status ?>
                                                            </span>
                                                        </div>
                                                        <a href="/single-product&id=<?php echo $product->id; ?>">
                                                            <img src="<?php echo getStorageLink($product->image)?>" class="img-fluid" alt="">
                                                        </a>

                                                        <div class="hover-icons">
                                                            <form method="post">
                                                                <input type="hidden" name="id" value="<?= $product->id; ?>">
                                                                <a><button name="btn_buy"><i class="ion-bag"></i></button></a>
                                                            </form>
                                                            <a href="javascript:void(0)"><i class="ion-heart"></i></a>
                                                            <a href="javascript:void(0)"><i class="ion-android-options"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view-modal-container">
                                                                <i class="ion-android-open"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="single-grid-product__content">
                                                        <div class="single-grid-product__category-rating">
                                                            <span class="category"><a href="shop-left-sidebar.html'?>"><?php echo $product->cateName(); ?></a></span>
                                                        </div>

                                                        <h3 class="single-grid-product__title">
                                                            <a href="/single-product&id=<?= $product->id; ?>"><?php echo $product->name; ?></a>
                                                        </h3>
                                                        <p class="single-grid-product__price">
                                                            <span class="discounted-price"><?php echo number_format($price) ?> VNĐ</span>
                                                            <span class="main-price discounted">
                                                                <?php echo empty($product->sale == 0) ? number_format($product->price). ' VNĐ ' : '' ?>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--=======  End of product grid view  =======-->
                                                <!--=======  list view product  =======-->
                                                <div class="single-grid-product single-grid-product--list-view list-view-product">
                                                    <div class="single-grid-product__image single-grid-product--list-view__image">
                                                        <div class="single-grid-product__label">
                                                            <span class="<?php echo empty($product->sale == 0) ? 'sale' : '' ?>">
                                                                <?php echo empty($product->sale == 0) ? $product->sale : '' ?>%
                                                            </span>
                                                            <span class="<?php echo empty( $product->status === "New" || $product->status === "Hot" ) ? '' : 'new' ?>">
                                                                <?php echo empty( $product->status === "New" || $product->status === "Hot" ) ? '' : $product->status ?>
                                                            </span>
                                                        </div>
                                                        <a href="single-product.html'?>">
                                                            <img src="<?php echo getStorageLink($product->image) ?>" class="img-fluid" alt="">
                                                        </a>

                                                        <div class="hover-icons">
                                                            <a href="javascript:void(0)" id="btn_buy"><i class="ion-bag"></i></a>
                                                            <a href="javascript:void(0)"><i class="ion-heart"></i></a>
                                                            <a href="javascript:void(0)"><i class="ion-android-options"></i></a>
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view-modal-container"><i class="ion-android-open"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="single-grid-product__content single-grid-product--list-view__content">

                                                        <div class="category"><a href="shop-left-sidebar.html'?>"><?php echo $product->cateName(); ?></a></div>
                                                        <h3 class="single-grid-product__title single-grid-product--list-view__title">
                                                            <a href="single-product.html'?>"><?php echo $product->name; ?></a>
                                                        </h3>
                                                        <p class="single-grid-product__price single-grid-product--list-view__price">
                                                            <span class="discounted-price">
                                                                <?php echo number_format($price); ?> VNĐ
                                                            </span>
                                                            <span class="main-price discounted">
                                                                <?php echo empty($product->sale == 0) ? number_format($product->price). ' VNĐ ' : '' ?>
                                                            </span>
                                                        </p>
                                                        <p class="single-grid-product--list-view__product-short-desc">
                                                            <?php echo $product->description; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--=======  End of list view product  =======-->
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php
                                        if (isset($_POST['btn_buy'])) {
                                            $id=$_POST['id'];
                                            if (isset($_SESSION['cart'])) {
                                                $i=count($_SESSION['cart']);
                                            }
                                            else{
                                                $i=0;
                                            }
                                            $_SESSION['cart'][$i]['id']=$id;
                                            $_SESSION['cart'][$i]['sl']=1;
                                            header("refresh:0") ;
                                        }
                                    ?>
                                </div>

                                <!--=======  pagination area =======-->
                                <div class="pagination-area">
                                    <div class="pagination-area__left">
                                        Showing 1 to 9 of 11 (2 Pages)
                                    </div>
                                    <div class="pagination-area__right">
                                        <ul class="pagination-section">
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">></a></li>
                                            <li><a href="#">>|</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--=======  End of pagination area  =======-->
                                <!--=======  End of shop page content  =======-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--=======  End of shop page wrapper  =======-->
            </div>
        </div>
    </div>
</div>
<!--====================  End of shop page content area  ====================-->