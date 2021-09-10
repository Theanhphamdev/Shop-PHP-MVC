<?php echo $title = 'Edit Category' ?>
<div class="content-body" style="min-height: 798px;">
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Categories</a></li>
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
                        <div class="basic-form">
                            <form action="/update-category" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="hidden"  name="id" value="<?php echo $categories->id; ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Name Category</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $categories->name; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Image Category</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" id="image" value="<?php echo $categories->image; ?>" class="custom-file-input">
                                            <label class="custom-file-label text-length-1" for="image">
                                                <?php echo empty($categories->image) ? 'Choose file...' :$categories->image; ?>
                                            </label>
                                            <input type="hidden" name="image_existed" value="<?php echo $categories->image; ?>">
                                        </div>
                                        <?php
                                        if (empty($categories->image) === false) {
                                            ?>
                                            <div class="form-group">
                                                <img src="<?php echo getStorageLink($categories->image); ?>" class="img-detail-update">
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
