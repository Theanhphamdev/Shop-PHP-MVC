<?php
$title = 'Giỏ Hàng';
$tongtien2=0;
if (isset($_SESSION['cart'])){
    $ship = '30000';
}
else{
    $ship = '0';
}
?>
<div class="breadcrumb-area section-space--half">
    <div class="container wide">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  breadcrumb wrpapper  =======-->
                <div class="breadcrumb-wrapper breadcrumb-bg">
                    <!--=======  breadcrumb content  =======-->
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-content__title">Giỏ Hàng</h2>
                        <ul class="breadcrumb-content__page-map">
                            <li><a href="/">Trang chủ</a></li>
                            <li class="active">Giỏ hàng</li>
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
<!--====================  page content area ====================-->
<div class="page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  page wrapper  =======-->
                <div class="page-wrapper">
                    <div class="page-content-wrapper">
                        <form action="#">
                            <!--=======  cart table  =======-->

                            <div class="cart-table table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Hình Ảnh</th>
                                        <th class="pro-title">Sản Phẩm</th>
                                        <th class="pro-price">Giá</th>
                                        <th class="pro-quantity">Số Lượng</th>
                                        <th class="pro-subtotal">Toàn bộ</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //dd($getcart);
                                        if (isset($_SESSION['cart'])) {
                                            foreach ($_SESSION['cart'] as $key => $gid):
                                                $getcart = ProductModel::check($gid['id']);
                                                $slItem = $gid['sl'];
                                                $AllpriceSl=($getcart->price)*$slItem;
                                                $tongtien2 +=$AllpriceSl;
                                                ?>
                                                  <tr>
                                                    <td class="pro-thumbnail"><a href="/single-product&id=<?=$getcart->id; ?>">
                                                            <img src="<?= getStorageLink($getcart->image) ?>" class="img-fluid" alt="Product"></a></td>
                                                    <td class="pro-title"><a href="/single-product&id=<?=$getcart->id; ?>"><?= $getcart->name; ?></a></td>
                                                    <td class="pro-price"><span><?= number_format($getcart->price); ?> VNĐ </span></td>
                                                    <td class="pro-quantity">
                                                        <div class="quantity-selection">
                                                            <input disabled type="number" value="<?= $slItem; ?>">
                                                        </div>
                                                    </td>
                                                    <td class="pro-subtotal"><span><?= number_format($AllpriceSl) ?> VNĐ </span></td>
                                                    <td class="pro-remove"><a href="/delete-cart&id=<?= $getcart->id; ?>"><i class="fa fa-trash-o"></i></a></td>
                                                  </tr>
                                        <?php
                                            endforeach;
                                        }
                                           ?>

                                    </tbody>

                                </table>
                                <a href="/delete-all-cart"  style="margin: 17px;width: 180px;padding: 15px;text-align: center;text-transform: uppercase;color: #fff;border-color: #292929;background-color: #292929;">Xóa toàn bộ sản phẩm</a>
                            </div>

                            <!--=======  End of cart table  =======-->


                        </form>

                        <div class="row">

                            <div class="col-lg-6 col-12">

                                <!--=======  Discount Coupon  =======-->

                                <div class="discount-coupon">
                                    <h4>Nhập Mã Giảm Giá ( Nếu có )</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <input type="text" placeholder="mã giảm giá..">
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <input type="submit" value="Áp Dụng Mã">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!--=======  End of Discount Coupon  =======-->

                            </div>


                            <div class="col-lg-6 col-12 d-flex">
                                <!--=======  Cart summery  =======-->

                                <div class="cart-summary">
                                    <div class="cart-summary-wrap">
                                        <h4>Tóm Tắt Giỏ Hàng</h4>
                                        <p>Tổng Giá <span> <?= number_format($tongtien2); ?> VNĐ </span></p>
                                        <p>
                                            Giá Vận Chuyển <span><?= number_format($ship); ?> VNĐ</span>
                                        </p>
                                        <h2>Tổng Cộng <span> <?= number_format($tongtien2 + $ship); ?> VNĐ </span></h2>
                                    </div>
                                    <?php if (isset($_SESSION['cart'])):?>
                                        <div class="cart-summary-button">
                                            <button class="checkout-btn"><a href="/information-customer"> Thanh Toán </a></button>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!--=======  End of Cart summery  =======-->

                            </div>

                        </div>
                    </div>
                </div>
                <!--=======  End of page wrapper  =======-->
            </div>
        </div>
    </div>
</div>
<!--====================  End of page content area  ====================-->




