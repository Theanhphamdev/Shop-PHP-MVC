<?php echo $title = 'Update Products' ?>
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
                        <h4 class="card-title"><?php echo $title; ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="/update-product" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input type="hidden" id="id" name="id" value="<?php echo $product->id; ?>">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="name">Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $product->name; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="sale">Sale
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="sale" name="sale" value="<?php echo $product->sale; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Status
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control default-select" id="status" name="status">
                                                    <option value="0">Empty!</option>
                                                        <option
                                                            value="<?php echo $product->status; ?>"
                                                            <?php echo $product->status === $product->status ? 'selected' : ''; ?>
                                                        >
                                                            <?php echo $product->status; ?>
                                                        </option>
                                                    <option value="<?php echo empty($product->status == 'New') ? 'New' : 'Hot' ?>">
                                                        <?php echo empty($product->status == 'New') ? 'New' : 'Hot' ?>
                                                    </option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="image">Image
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="custom-file col-lg-6">
                                                <input type="file" name="image" id="image" class="custom-file-input" value="<?php echo $product->image; ?>">
                                                <label class="custom-file-label text-length-1 fig-width" for="image">
                                                    <?php echo empty($product->image) ? 'Choose file...' :$product->image; ?>
                                                </label>
                                                <input type="hidden" name="image_existed" value="<?php echo $product->image; ?>">
                                                <?php
                                                if (empty($product->image) === false) {
                                                    ?>
                                                    <div class="form-group">
                                                        <img src="<?php echo getStorageLink($product->image); ?>" class="img-detail-update">
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="price">Price
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="price" name="price" value="<?php echo $product->price; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Category
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control default-select" id="category_id" name="category_id">
                                                    <option value="0">Empty!</option>
                                                    <?php foreach ($categories as $category) : ?>
                                                        <option
                                                            value="<?php echo $category->id; ?>"
                                                            <?php echo $product->category_id === $category->id ? 'selected' : ''; ?>
                                                        >
                                                            <?php echo $category->name; ?>
                                                        </option>
                                                        <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="description">Description <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="description" name="description" rows="5"><?php echo $product->description; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-primary">Update Products</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

