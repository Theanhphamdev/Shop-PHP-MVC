<?php $title = 'Thông tin Đơn hàng ' ?>
<div class="breadcrumb-area section-space--half">
    <div class="container wide">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  breadcrumb wrpapper  =======-->
                <div class="breadcrumb-wrapper breadcrumb-bg">
                    <!--=======  breadcrumb content  =======-->
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-content__title">Checkout</h2>
                        <ul class="breadcrumb-content__page-map">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><?= $title; ?></li>
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
                <div class="row">
                    <!-- Cart Total -->
                    <div class="col-12">

                        <h4 class="checkout-title">Hóa Đơn Tổng</h4>

                        <form action="/checkout_product" method="post">
                            <div class="checkout-cart-total" style="padding-bottom: 100px;">
                                <?php
                                $tongtien2=0;
                                if (isset($_SESSION['cart'])){
                                    $ship = '30000';
                                }
                                else{
                                    $ship = '0';
                                }
                                ?>
                                <h4>Sản Phẩm <span>Tổng Cộng</span></h4>
                                <ul>
                                    <?php
                                    if (isset($_SESSION['cart'])):
                                        foreach ($_SESSION['cart'] as $key => $gid):
                                            $getcart = ProductModel::check($gid['id']);
                                            $slItem = $gid['sl'];
                                            $AllpriceSl=($getcart->price)*$slItem;
                                            $tongtien2 +=$AllpriceSl;
                                            ?>
                                            <input type="hidden" name="product_name" value="<?= $getcart->name; ?>">
                                            <li><?= $getcart->name; ?> x <?= $slItem; ?> <span><?= number_format($AllpriceSl); ?> VNĐ</span></li>
                                        <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </ul>
                                <input type="hidden" name="customer_id" value="<?= $_SESSION['id_customer'] ?>">
                                <input type="hidden" name="total_price" value="<?= $tongtien2+$ship ?>">
                                <input type="hidden" name="payment" value="Trục tiếp">
                                <input type="hidden" name="status" value="Đặt hàng thành công">
                                <p>Phí vận chuyển <span><?= number_format($ship); ?> VNĐ</span></p>
                                <p>Phương thức thanh toán
                                    <span>Trực tiếp</span>
                                </p>
                                <h4>Tổng số tiền phải thanh toán
                                    <span><?= number_format($tongtien2+$ship) ?> VNĐ</span>
                                </h4>
                                <div class="cart-summary" style="margin-top: 20px;">
                                    <div class="cart-summary-button">
                                        <button type="submit" class="checkout-btn"> Thanh toán </button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>