<?php echo $title = 'Change Employee' ?>
<div class="content-body" style="min-height: 798px;">
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="modal fade" id="addOrderModalside">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Project</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="text-black font-w500">Project Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Deadline</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Client Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">CREATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                        <h4 class="text-primary mb-4">Thông tin cá nhân</h4>

                        <form action="/update-employee" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $employee->id; ?>">
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">ID system<span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="username" value="<?= $employee->username; ?>"
                                           style="color: #7e7e7e;height: 24px;border: none;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">ID card (Mã CMND)<span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="id_card" value="<?= $employee->id_card; ?>"
                                        <?php echo empty($array_user->id == 1) ? 'readonly' : '' ?>
                                           style="color: #7e7e7e;height: 24px;border: none;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Full Name  <span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="full_name" value="<?= $employee->full_name; ?>"
                                           style="color: #7e7e7e;height: 24px;border: none;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Email <span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="email" value="<?= $employee->email; ?>"
                                           style="color: #7e7e7e;height: 24px;border: none;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Phone Number <span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                        <input class="form-control " type="text" name="phone" value="<?= $employee->phone; ?>"
                                               style="color: #7e7e7e;height: 24px;border: none;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Working Time <span class="pull-right d-none d-sm-block">:</span></h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="working_time" value="<?= $employee->working_time; ?>"
                                        <?php echo empty($array_user->id == 1) ? 'readonly' : '' ?>
                                           style="color: #7e7e7e;height: 24px;border: none;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Age <span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="age" value="<?= $employee->age; ?>"
                                        <?php echo empty($array_user->id == 1) ? 'readonly' : '' ?>
                                           style="color: #7e7e7e;height: 24px;border: none;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Home Town <span class="pull-right d-none d-sm-block">:</span></h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="home_town" value="<?= $employee->home_town; ?>"
                                        <?php echo empty($array_user->id == 1) ? 'readonly' : '' ?>
                                           style="color: #7e7e7e;height: 24px;border: none;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Experience <span class="pull-right d-none d-sm-block">:</span></h5>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control " type="text" name="experience" value="<?= $employee->experience; ?>"
                                        <?php echo empty($array_user->id == 1) ? 'readonly' : '' ?>
                                           style="color: #7e7e7e;height: 24px;border: none;font-size: 16px;">
                                </div>
                            </div>
                            <div class="row mb-4 mb-sm-2">
                                <div class="col-sm-3">
                                    <h5 class="f-w-500">Avatar<span class="pull-right d-none d-sm-block">:</span>
                                    </h5>
                                </div>
                                <div class="col-sm-9">

                                    <div class="custom-file">
                                        <input type="file" name="image" id="image" value="<?php echo $employee->image; ?>" class="custom-file-input">
                                        <label class="custom-file-label text-length-1" for="image" style="width: 40%; border: none; color: #7e7e7e;">
                                            <?php echo empty($employee->image) ? 'Choose file...' :$employee->image; ?>
                                        </label>
                                        <input type="hidden" name="image_existed" value="<?php echo $employee->image; ?>">
                                    </div>
                                    <?php
                                    if (empty($employee->image) === false) {
                                        ?>
                                        <div class="form-group">
                                            <img src="<?php echo getStorageLink($employee->image); ?>" class="img-detail-update">
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary mb-1">Change</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
