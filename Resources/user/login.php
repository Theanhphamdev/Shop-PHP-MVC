<?php
$title = 'Đăng Nhập';
?>

<div class="col-11 col-lg-9 col-xl-8 mx-auto text-center">
    <div class="logo mb-4"> <a href="index.html"><img src="<?= LIB_USER . '/image/logo-lg.png' ?>" alt="Backend2"></a> </div>
    <form id="loginForm" method="post" action="/login-data">
        <div class="vertical-input-group">
            <div class="input-group">
                <input type="email" class="form-control" id="email" required="" placeholder="Email Đăng kí" name="email">
            </div>
            <div class="input-group">
                <input type="password" class="form-control" id="loginPassword" required="" placeholder="Mật Khẩu" name="password">
            </div>
        </div>
        <button class="btn btn-primary btn-block shadow-none my-4" type="submit">Đăng Nhập</button>
    </form>
    <a class="btn-link text-3" href="/forgot"><span class="text-danger">Quên Mật Khẩu</span></a>
</div>