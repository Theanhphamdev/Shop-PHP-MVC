<?php
$title = 'Thông tin đặt hàng';
?>
<div class="breadcrumb-area section-space--half">
    <div class="container wide">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  breadcrumb wrpapper  =======-->
                <div class="breadcrumb-wrapper breadcrumb-bg">
                    <!--=======  breadcrumb content  =======-->
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-content__title">History</h2>
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
                                        <?php
                                            $status = empty($receiving->status) ? '' : $receiving->status;
                                        ?>
                                        <?php if ($status == 'Đặt hàng thành công'): ?>
                                            <div class="row">
                                                <div class="col-xl-4 col-md-5 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>Địa Chỉ Nhận Hàng</h4>
                                                            <div>
                                                                <p><h5><?= $customer->name; ?></h5></p>
                                                                <p> Số điện thoại :  <?= $customer->phone; ?></p>
                                                                <p> Địa chỉ :  <?= $customer->detail_address; ?>,<?= $customer->district; ?>,<?= $customer->province; ?>,<?= $customer->city; ?></p>
                                                                <p> <h5>Số tiền phải thanh toán </h5> <span class="text-danger"><?= number_format($receiving->total_price); ?> VNĐ</span></p>
                                                                <p><h5>Phương thức thanh toán </h5><span class="text-danger"><?= $receiving->payment; ?></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-7 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history2"><i class="far fa-file-alt"></i></div>
                                                                </div>
                                                                <div class="col-md-12">Đơn hàng đã đặt thành công</div>
                                                                <div class="col-md-12"><?= $receiving->created_at; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history"><i class="fas fa-wallet"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Đã xác nhận thông tin thanh toán</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history"><i class="fas fa-truck-moving"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Chờ lấy hàng</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history"><i class="fas fa-people-carry"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Đang giao hàng</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history"><i class="fas fa-check"></i></div>
                                                                </div>
                                                                <div class="col-md-12">Đơn hàng đã đặt thành công</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($status == 'Đã xác nhận thông tin thanh toán'): ?>
                                            <div class="row">
                                                <div class="col-xl-4 col-md-5 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>Địa Chỉ Nhận Hàng</h4>
                                                            <div>
                                                                <p><h5><?= $customer->name; ?></h5></p>
                                                                <p> Số điện thoại :  <?= $customer->phone; ?></p>
                                                                <p> Địa chỉ :  <?= $customer->detail_address; ?>,<?= $customer->district; ?>,<?= $customer->province; ?>,<?= $customer->city; ?></p>
                                                                <p> <h5>Số tiền phải thanh toán </h5> <span class="text-danger"><?= number_format($receiving->total_price); ?> VNĐ</span></p>
                                                                <p><h5>Phương thức thanh toán </h5><span class="text-danger"><?= $receiving->payment; ?></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-7 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history1"><i class="far fa-file-alt"></i></div>
                                                                </div>
                                                                <div class="col-md-12">Đơn hàng đã đặt thành công</div>
                                                                <div class="col-md-12"><?= $receiving->created_at; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history2"><i class="fas fa-wallet"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Đã xác nhận thông tin thanh toán</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history"><i class="fas fa-truck-moving"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Chờ lấy hàng</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history"><i class="fas fa-people-carry"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Đang giao hàng</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history"><i class="fas fa-check"></i></div>
                                                                </div>
                                                                <div class="col-md-12">Đơn hàng đã đặt thành công</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($status == 'Chờ lấy hàng'): ?>
                                            <div class="row">
                                                <div class="col-xl-4 col-md-5 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>Địa Chỉ Nhận Hàng</h4>
                                                            <div>
                                                                <p><h5><?= $customer->name; ?></h5></p>
                                                                <p> Số điện thoại :  <?= $customer->phone; ?></p>
                                                                <p> Địa chỉ :  <?= $customer->detail_address; ?>,<?= $customer->district; ?>,<?= $customer->province; ?>,<?= $customer->city; ?></p>
                                                                <p> <h5>Số tiền phải thanh toán </h5> <span class="text-danger"><?= number_format($receiving->total_price); ?> VNĐ</span></p>
                                                                <p><h5>Phương thức thanh toán </h5><span class="text-danger"><?= $receiving->payment; ?></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-7 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history1"><i class="far fa-file-alt"></i></div>
                                                                </div>
                                                                <div class="col-md-12">Đơn hàng đã đặt thành công</div>
                                                                <div class="col-md-12"><?= $receiving->created_at; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history1"><i class="fas fa-wallet"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Đã xác nhận thông tin thanh toán</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history2"><i class="fas fa-truck-moving"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Chờ lấy hàng</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history"><i class="fas fa-people-carry"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Đang giao hàng</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history"><i class="fas fa-check"></i></div>
                                                                </div>
                                                                <div class="col-md-12">Đơn hàng đã đặt thành công</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($status == 'Đang giao hàng'): ?>
                                            <div class="row">
                                                <div class="col-xl-4 col-md-5 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>Địa Chỉ Nhận Hàng</h4>
                                                            <div>
                                                                <p><h5><?= $customer->name; ?></h5></p>
                                                                <p> Số điện thoại :  <?= $customer->phone; ?></p>
                                                                <p> Địa chỉ :  <?= $customer->detail_address; ?>,<?= $customer->district; ?>,<?= $customer->province; ?>,<?= $customer->city; ?></p>
                                                                <p> <h5>Số tiền phải thanh toán </h5> <span class="text-danger"><?= number_format($receiving->total_price); ?> VNĐ</span></p>
                                                                <p><h5>Phương thức thanh toán </h5><span class="text-danger"><?= $receiving->payment; ?></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-7 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history1"><i class="far fa-file-alt"></i></div>
                                                                </div>
                                                                <div class="col-md-12">Đơn hàng đã đặt thành công</div>
                                                                <div class="col-md-12"><?= $receiving->created_at; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history1"><i class="fas fa-wallet"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Đã xác nhận thông tin thanh toán</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history1"><i class="fas fa-truck-moving"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Chờ lấy hàng</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history2"><i class="fas fa-people-carry"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Đang giao hàng</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history"><i class="fas fa-check"></i></div>
                                                                </div>
                                                                <div class="col-md-12">Đơn hàng đã đặt thành công</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($status == 'Đã thanh toán'): ?>
                                            <div class="row">
                                                <div class="col-xl-4 col-md-5 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>Địa Chỉ Nhận Hàng</h4>
                                                            <div>
                                                                <p><h5><?= $customer->name; ?></h5></p>
                                                                <p> Số điện thoại :  <?= $customer->phone; ?></p>
                                                                <p> Địa chỉ :  <?= $customer->detail_address; ?>,<?= $customer->district; ?>,<?= $customer->province; ?>,<?= $customer->city; ?></p>
                                                                <p> <h5>Số tiền phải thanh toán </h5> <span class="text-danger"><?= number_format($receiving->total_price); ?> VNĐ</span></p>
                                                                <p><h5>Phương thức thanh toán </h5><span class="text-danger"><?= $receiving->payment; ?></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-7 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history1"><i class="far fa-file-alt"></i></div>
                                                                </div>
                                                                <div class="col-md-12">Đơn hàng đã đặt thành công</div>
                                                                <div class="col-md-12"><?= $receiving->created_at; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history1"><i class="fas fa-wallet"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Đã xác nhận thông tin thanh toán</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history1"><i class="fas fa-truck-moving"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Chờ lấy hàng</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history1"><i class="fas fa-people-carry"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center">Đang giao hàng</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="order-history3"><i class="fas fa-check"></i></div>
                                                                </div>
                                                                <div class="col-md-12 text-center"><?= $receiving->status; ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($status == 'Đã hủy đơn hàng'): ?>
                                            <div class="row">
                                                <div class="col-xl-4 col-md-5 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>Địa Chỉ Nhận Hàng</h4>
                                                            <div>
                                                                <p><h5><?= $customer->name; ?></h5></p>
                                                                <p> Số điện thoại :  <?= $customer->phone; ?></p>
                                                                <p> Địa chỉ :  <?= $customer->detail_address; ?>,<?= $customer->district; ?>,<?= $customer->province; ?>,<?= $customer->city; ?></p>
                                                                <p> <h5>Số tiền phải thanh toán </h5> <span class="text-danger"><?= $receiving->status; ?></span></p>
                                                                <p><h5>Phương thức thanh toán </h5><span class="text-danger"><?= $receiving->status; ?></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-7 col-sm-12">
                                                    <div class="text-center">
                                                        <h4 class="text-danger">Đơn hàng đã bị hủy!</h4>
                                                        <p>Cùng tạo một đơn hàng mới để có thể nhận hàng và sử dụng dịch vụ của cửa hàng nhé!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
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
