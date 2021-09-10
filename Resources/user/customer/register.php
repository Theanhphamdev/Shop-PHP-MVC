<?php
$title = 'Đăng Nhập Khách hàng';
?>

<div class="col-11 col-lg-9 col-xl-8 mx-auto text-center">
    <div class="logo mb-4"> <a href="index.html"><img src="<?= LIB_USER . '/image/logo-lg.png' ?>" alt="Backend2"></a> </div>
    <form id="loginForm" method="post" action="/insert-customer">
        <div class="vertical-input-group">
            <div class="input-group">
                <input type="text" class="form-control" id="name" required="" placeholder="Họ tên Đăng kí" name="name">
            </div>
            <div class="input-group">
                <input type="email" class="form-control" id="email" required="" placeholder="Email Đăng kí" name="email">
            </div>
            <div class="input-group">
                <input type="number" class="form-control" id="phone" required="" placeholder="Số điện thoại Đăng kí" name="phone">
            </div>
            <div class="input-group">
                <input type="password" class="form-control" id="loginPassword" required="" placeholder="Mật Khẩu" name="password">
            </div>
        </div>
        <input type="hidden" name="detail_address" value="">
        <input type="hidden" name="city" value="">
        <input type="hidden" name="province" value="">
        <input type="hidden" name="district" value="">
        <button class="btn btn-primary btn-block shadow-none my-4" type="submit">Đăng ký</button>
    </form>
    <span class="text-primary text-2">Đăng Nhập <a class="btn-link text-2" href="/login-customer"><span class="text-danger">Tại Đây </span> </a> Nếu bạn đã Đăng ký thành công!</span>
</div>