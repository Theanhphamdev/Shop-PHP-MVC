<?php $title = 'Thông tin Khách hàng ' ?>
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
                <!--=======  page wrapper  =======-->
                <div class="page-wrapper">
                    <div class="page-content-wrapper">
                        <!-- Checkout Form s-->
                        <form action="/up-information-customer" method="post" class="checkout-form">
                            <div class="row row-40">

                                <div class="col-lg-12">

                                    <!-- Billing Address -->
                                    <div id="billing-form">
                                        <h4 class="checkout-title"><?= $title; ?> </h4>

                                        <div class="row">
                                            <input type="hidden" name="id" value="<?= $customer->id; ?>">
                                            <div class="col-md-6 col-md-12">
                                                <label>Họ và Tên*</label>
                                                <input type="text" name="name" value="<?= $customer->name; ?>">
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <label>Địa Chỉ Email*</label>
                                                <input type="email" name="email" value="<?= $customer->email; ?>">
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <label>Số Điện Thoại*</label>
                                                <input type="text" name="phone" value="<?= $customer->phone; ?>">
                                            </div>


                                            <div class="col-12">
                                                <label>Địa Chỉ cụ thể (số nhà, số đường,.. )*</label>
                                                <input type="text" name="detail_address" value="<?= $customer->detail_address; ?>">
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <label>Thành Phố*</label>
                                                <input type="text" name="city" value="<?= $customer->city; ?>">
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <label>Tỉnh*</label>
                                                <input type="text" name="province" value="<?= $customer->province; ?>">
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <label>Quận/Huyện*</label>
                                                <input type="text" name="district" value="<?= $customer->district; ?>">
                                            </div>

                                            <div class="col-12">
                                                <div class="cart-summary">
                                                    <div class="cart-summary-button">
                                                        <button type="submit" class="checkout-btn"> Tiếp theo </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <!--=======  End of page wrapper  =======-->
            </div>
        </div>
    </div>
</div>