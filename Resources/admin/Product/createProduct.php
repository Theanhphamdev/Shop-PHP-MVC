<?php echo $title = 'Create Products' ?>
<div class="content-body" style="min-height: 798px;">
    <div class="container-fluid">
        <!-- Add Order -->
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
                            <form class="form-valide" action="/insert-product" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="name">Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter a name..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="sale">Sale
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="sale" name="sale" placeholder="choose prison family..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="image">Image
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="custom-file col-lg-6">
                                                <input type="file" name="image" id="image" class="custom-file-input">
                                                <label class="custom-file-label fig-width" for="image">
                                                    Choose file
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Status
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control default-select" id="status" name="status">
                                                    <option value="0">Empty!</option>
                                                    <option value="New">New</option>
                                                    <option value="Hot">Hot</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="price">Price
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="Enter price..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Category
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control default-select" id="category_id" name="category_id">
                                                    <option value="0">Empty!</option>
                                                    <?php foreach ($categories as $category):?>

                                                        <option value="<?php echo $category->id; ?>">
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
                                                <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter text product here"></textarea>
                                            </div>
                                        </div>
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Add Products</button>
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
