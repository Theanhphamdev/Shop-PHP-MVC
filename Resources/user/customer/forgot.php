<?php
$title = "Quên Mật Khẩu"
?>
<div class="col-11 col-lg-9 col-xl-8 mx-auto text-center">
    <div class="logo mb-4"> <a href="index.html" title="Backend2"><img src="<?= LIB_USER . '/image/logo-lg.png' ?>" alt="Backend2"></a> </div>
    <h4 class="mb-4">
        <span style="vertical-align: inherit;">Quên mật khẩu?</span>
    </h4>
    <p class="text-muted text-center mb-4">
        <span style="vertical-align: inherit;">Nhập địa chỉ email đã được liên kết với tài khoản của bạn.</span>
    </p>
    <form id="forgotForm" method="post">
        <div class="form-group">
            <input type="email" class="form-control" id="emailAddress" required="" placeholder="Nhập email đã được liên kết">
        </div>
        <button class="btn btn-primary btn-block shadow-none my-4" type="submit">Tiếp tục</button>
    </form>
    <span class="text-primary text-2">Đăng Nhập <a class="btn-link text-2" href="/login"><span class="text-danger">Tại Đây </span> </a> Nếu bạn đã lấy lại được mật khẩu!</span>
</div>