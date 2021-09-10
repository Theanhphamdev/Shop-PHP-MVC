<?php
$tongtien2=0;
$ship = 30000;
?>
<div class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  header wrapper  =======-->
                <div class="header-wrapper d-none d-lg-flex">
                    <!-- logo -->
                    <div class="logo">
                        <a href="/">
                            <img src="<?php echo LIB_MAIN . '/img/logo.png' ?>" class="img-fluid" alt="">
                        </a>
                    </div>
                    <!-- menu wrapper -->
                    <div class="navigation-menu-wrapper">
                        <nav>
                            <ul>
                                <?php foreach ($menus as $menu): ?>
                                    <li>
                                        <a href="<?= $menu->url; ?>"> <?= $menu->name; ?> </a>
                                    </li>
                                <?php endforeach; ?>
<!--                                <li class="menu-item-has-children"><a href="blog-left-sidebar.html">BLOG</a>-->
<!--                                    <ul class="sub-menu">-->
<!--                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->

                            </ul>
                        </nav>
                    </div>
                    <!-- header icon -->
                    <div class="header-icon-wrapper">
                        <ul class="icon-list">
                            <li>
                                <a href="javascript:void(0)" id="search-overlay-trigger">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </li>
                            <li>
                                <div class="header-cart-icon">
                                    <a href="" id="minicart-trigger">
                                        <i class="ion-bag"></i>
                                        <span class="counter">
                                            <?php if (isset($_SESSION['cart'])) {
                                                echo count($_SESSION['cart']) ;
                                            } else echo "0";
                                            ?>
                                        </span>
                                    </a>
                                    <!-- mini cart  -->
                                    <div class="mini-cart" id="mini-cart">
                                        <div class="cart-items-wrapper ps-scroll">
                                            <?php
                                                if (isset($_SESSION['cart'])){
                                                    foreach ($_SESSION['cart'] as $item) :
                                                        $getpr = ProductModel::check($item['id']);
                                                        $slItem = $item['sl'];
                                                        $AllpriceSl=($getpr->price)*$slItem;
                                                        $tongtien2 +=$AllpriceSl;
                                                        ?>
                                                        <div class="single-cart-item">
                                                            <div class="image">
                                                                <a href="">
                                                                    <img src="<?= getStorageLink($getpr->image); ?>" class="img-fluid" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <p class="product-title"><a href=""><?=$getpr->name;?></a></p>
                                                                <p class="count"><span><?=$slItem ?> x </span> <?= number_format($getpr->price); ?> VNĐ</p>
                                                            </div>
                                                        </div>
                                                    <?php endforeach;
                                                }else{
                                                    echo 'Trống';
                                                }
                                            ?>
                                        </div>
                                        <div class="cart-calculation">
                                            <?php if (isset($_SESSION['cart'])){
                                                $ship = '30000';
                                                   }else{
                                                $ship = '0';
                                            }?>

                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td class="text-left">Tổng Tiền :</td>
                                                    <td class="text-right"><?= number_format($tongtien2) ?> VNĐ</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Ship Code :</td>
                                                    <td class="text-right">
                                                        <?php echo number_format($ship);?> VNĐ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Tổng Cộng :</td>
                                                    <td class="text-right"><?= number_format($tongtien2 + $ship) ?> VNĐ</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="cart-buttons">
                                            <div class="row">
                                                <div class="col-6"><a href="/cart">VIEW CART</a></div>
                                                <?php if (isset($_SESSION['cart'])):?>
                                                    <div class="col-6"><a href="/information-customer">CHECKOUT</a></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="header-settings-icon">
                                    <a href="javascript:void(0)" class="header-settings-trigger" id="header-settings-trigger">
                                        <div class="setting-button">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>

                                    <!-- settings menu -->
                                    <div class="settings-menu-wrapper" id="settings-menu-wrapper">
                                        <div class="single-settings-block">
                                            <h4 class="title">MY ACCOUNT</h4>
                                            <ul>
                                                <?php if (isset($_SESSION['status'])){ ?>
                                                    <li><a href="/admin">Truy cập trang Quản trị</a></li>
                                                    <li><a href="/logout">Đăng xuất Quản trị</a></li>

                                                <?php }
                                                    else{?>
                                                        <?php if (isset($_SESSION['id_customer'])){ ?>
                                                            <li><a href="/logout-customer">Đăng xuất</a></li>
                                                        <?php }
                                                        else{?>
                                                            <li><a href="/login-customer">Đăng Nhập</a></li>
                                                            <li><a href="/register-customer">Đăng kí</a></li>
                                                        <?php }
                                                        ?>
                                                        <li><a href="/admin">Đăng nhập Quản trị</a></li>
                                                <?php }
                                                ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--=======  End of header wrapper  =======-->

                <!--=======  mobile navigation area  =======-->

                <div class="header-mobile-navigation d-block d-lg-none">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-6">
                            <div class="header-logo">
                                <a href="/">
                                    <img src="<?php echo LIB_MAIN . '/img/logo.png'?>" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="mobile-navigation text-right">
                                <div class="header-icon-wrapper">
                                    <ul class="icon-list justify-content-end">
                                        <li>
                                            <div class="header-cart-icon">
                                                <a href="/cart">
                                                    <i class="ion-bag"></i>

                                                    <span class="counter"><?php if (isset($_SESSION['cart'])) {
                                                            echo count($_SESSION['cart']) ;
                                                        } else echo "0";
                                                        ?></span>

                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--=======  End of mobile navigation area  =======-->

            </div>
        </div>
    </div>
</div>