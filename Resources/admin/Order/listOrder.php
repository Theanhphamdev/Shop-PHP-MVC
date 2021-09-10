<?php $title = 'List Order' ?>
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Order</a></li>
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
                            <table class="table table-bordered table-responsive-sm">
                                <thead>
                                <tr>
                                    <th class="width80">#</th>
                                    <th>Customer name</></th>
                                    <th>Product</></th>
                                    <th>Price</></th>
                                    <th>Payment</></th>
                                    <th>Status</></th>
                                    <th>Created At</></th>
                                    <th>Updated At</></th>
                                    <th><i class="fas fa-cogs"></i></></th>
                                </tr>
                                </thead>
                                <tbody style="font-size: 13px;font-weight: 100;">
                                    <?php $stt = 1; ?>
                                    <?php foreach ($orders as $order): ?>
                                        <tr>
                                            <th class="width80"><?= $stt++; ?></th>
                                            <th><?= $order->customerName(); ?></th>
                                            <th><?= $order->product_name; ?></th>
                                            <th><?= number_format($order->total_price); ?> VNĐ</th>
                                            <th><?= $order->payment; ?></th>
                                            <th><span class="<?= empty($order->status == 'Đã hủy đơn hàng') ? 'badge badge-success light' : 'badge badge-danger light' ?>"><?= $order->status; ?></span></th>
                                            <th><?= $order->created_at; ?></th>
                                            <th><?= $order->updated_at; ?></th>
                                            <th>
                                                <div class="d-flex">
                                                    <a href="/detail-order&id=<?= $order->id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                </div>
                                            </th>
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