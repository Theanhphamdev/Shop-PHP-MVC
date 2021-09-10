<?php $title = 'List employee' ?>
<div class="content-body" style="min-height: 798px;">
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Employee</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"><?php echo $title; ?></a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo $title; ?> </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#</th>
                                        <th>ID system</th>
                                        <th>Position system</th>

                                        <th width="200"><i class="fas fa-cogs"></i><span class="pl-1">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 13px;">
                                    <?php $stt = 1; ?>
                                    <?php foreach ($employees as $employee): ?>
                                    <?php
                                        $status = empty($employee->status) ? '' : $employee->status;
                                    ?>
                                        <tr>
                                            <th class="width80"><strong><?= $stt++; ?></strong></th>
                                            <th><strong><?= $employee->username; ?></strong></th>
                                            <th><strong><?= $status; ?></strong></th>
                                            <?php if ($status !== 'Admin'): ?>
                                                <th>
                                                    <div class="d-flex">
                                                        <a href="/delete-employee&id=<?= $employee->id; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                        <a href="/detail-employee&id=<?= $employee->id; ?>" class="btn btn-success shadow btn-xs sharp ml-1"><i class="fas fa-info"></i></a>
                                                    </div>
                                                </th>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>