<?php echo $title = 'Profile' ?>
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
                <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $title; ?></a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $array_user->username; ?></a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-8 pt-8 pb-8">
                    <div class="profile-personal-info">
                        <h4 class="text-primary mb-4">Thông tin cá nhân</h4>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">ID system<span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array_user->username; ?> - <?= $array_user->status; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">ID card (Mã CMND)<span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array_user->id_card; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Full Name  <span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array_user->full_name; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Email <span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array_user->email; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Phone Number <span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9"><span>+84<?= $array_user->phone; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Working Time <span class="pull-right d-none d-sm-block">:</span></h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array_user->working_time; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Age <span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array_user->age; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Home Town <span class="pull-right d-none d-sm-block">:</span></h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array_user->home_town; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Experience <span class="pull-right d-none d-sm-block">:</span></h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array_user->experience; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Avatar<span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9">
                                <img class="image-cover" src="<?= getStorageLink($array_user->image); ?>" width = 150 />
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="/detail-employee&id=<?= $array_user->id; ?>" class="btn btn-primary mb-1">Change information</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
