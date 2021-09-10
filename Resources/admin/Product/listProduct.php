<?php $title = 'List product' ?>
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Products</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"><?php echo $title; ?></a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo $title; ?> Detail</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                <tr>
                                    <th class="width80"><strong>#</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Category name</strong></th>
                                    <th><strong>Description</strong></th>
                                    <th><strong>Sales</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Price</strong></th>
                                    <th><strong>Create At</strong></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $sst=1; ?>
                                    <?php foreach ($products as $product) : ?>
                                    <tr>
                                        <td><strong><?php echo $sst++; ?></strong></td>
                                        <td><?php echo $product->name; ?></td>
                                        <td><?php echo $product->cateName(); ?></td>
                                        <td><?php echo $product->description; ?></td>
                                        <td><?php echo $product->sale; ?>%</td>
                                        <td><span class="<?php echo ( empty($product->status == 'New') ? 'badge badge-rounded badge-warning' : 'badge light badge-danger' ); ?>"><?php echo $product->status; ?></span></td>
                                        <td><?php echo number_format($product->price); ?> Đồng</td>
                                        <td><?php echo $product->created_at; ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp" data-toggle="dropdown" aria-expanded="false">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </button>
                                                <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 0px, 0px);">
                                                    <a class="dropdown-item" href="/detail-product&id=<?php echo $product->id; ?>">Edit</a>
                                                    <a class="dropdown-item" href="/delete-product&id=<?php echo $product->id; ?>">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <a href="/create-product"><button class="btn btn-primary">Add Products</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>