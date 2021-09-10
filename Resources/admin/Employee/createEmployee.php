<?php echo $title = 'Create Employee' ?>
<div class="content-body" style="min-height: 798px;">
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Employee</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $title; ?></a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-8 pt-8 pb-8">
                    <div class="profile-personal-info">
                        <h4 class="text-primary mb-4">Thêm thông tin</h4>

                        <form action="/add-employee" method="post" enctype="multipart/form-data">
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Username system<span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="username" placeholder="Nhập tên tài khoản.."
                                           style="color: #7e7e7e;height: 24px;border: none;border-bottom: 1px solid #e7e7e7;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Password system<span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="password" placeholder="Nhập mật khẩu đăng nhập.."
                                           style="color: #7e7e7e;height: 24px;border: none;border-bottom: 1px solid #e7e7e7;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">ID card (Mã CMND)<span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="id_card" placeholder="Nhập số CMND hoặc căn cước.."
                                           style="color: #7e7e7e;height: 24px;border: none;border-bottom: 1px solid #e7e7e7;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Full Name  <span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="full_name" placeholder="Nhập họ và tên.."
                                           style="color: #7e7e7e;height: 24px;border: none;border-bottom: 1px solid #e7e7e7;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Email <span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="email" name="email" placeholder="Nhập email đăng nhập hệ thống.."
                                           style="color: #7e7e7e;height: 24px;border: none;border-bottom: 1px solid #e7e7e7;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Phone Number <span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="number" name="phone" placeholder="Nhập số điện thoại.."
                                           style="color: #7e7e7e;height: 24px;border: none;border-bottom: 1px solid #e7e7e7;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Age <span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control" type="date" name="age" placeholder="Nhập ngày sinh.."
                                           style="color: #7e7e7e;height: 24px;border: none;border-bottom: 1px solid #e7e7e7;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Home Town <span class="pull-right d-none d-sm-block">:</span></h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="home_town" placeholder="Nhập địa chỉ.."
                                           style="color: #7e7e7e;height: 24px;border: none;border-bottom: 1px solid #e7e7e7;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Experience <span class="pull-right d-none d-sm-block">:</span></h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="experience" placeholder="Nhập kinh nghiệm làm việc.."
                                           style="color: #7e7e7e;height: 24px;border: none;border-bottom: 1px solid #e7e7e7;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Avatar<span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" name="image" id="image"  class="custom-file-input">
                                        <label class="custom-file-label text-length-1" for="image" >Choose file...</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Working Time <span class="pull-right d-none d-sm-block">:</span></h5>
                                </div>
                                <div class="col-sm-9" style="height: 43px;">
                                    <select class="form-control default-select form-control-lg" name="working_time">
                                        <option>Full time</option>
                                        <option>Part time (8:00 am to 12 o'clock)</option>
                                        <option>Part time (12 pm to 18 pm)</option>
                                        <option>Part time (18 pm to 23 pm)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Position system<span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control default-select form-control-lg" name="status">
                                        <option>Manage bill</option>
                                        <option>Manage employee</option>
                                        <option>Manage customer</option>
                                        <option>Manage store</option>
                                        <option>Manage category</option>
                                        <option>Manage product</option>
                                        <option>Manage frontend</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary mb-1">Create</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
