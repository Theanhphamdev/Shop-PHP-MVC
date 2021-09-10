<?php echo $title = 'Edit Slider' ?>
<div class="content-body" style="min-height: 798px;">
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Slider</a></li>
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
                            <form action="/update-slider" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="hidden"  name="id" value="<?php echo $slider->id; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="title_slide">Title Slider</label>
                                        <input type="text" class="form-control" name="title_slide" value="<?= $slider->title_slide; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="heading">Heading Slider</label>
                                        <input type="text" class="form-control" name="heading" value="<?= $slider->heading; ?>" >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="description">Description Slider</label>
                                        <textarea class="form-control" name="description" rows="5" ><?= $slider->description; ?></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Image Slider</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" id="image" value="<?php echo $slider->image; ?>" class="custom-file-input">
                                            <label class="custom-file-label text-length-1" for="image">
                                                <?php echo empty($slider->image) ? 'Choose file...' :$slider->image; ?>
                                            </label>
                                            <input type="hidden" name="image_existed" value="<?php echo $slider->image; ?>">
                                        </div>
                                        <?php
                                        if (empty($slider->image) === false) {
                                            ?>
                                            <div class="form-group">
                                                <img src="<?php echo getStorageLink($slider->image); ?>" class="img-detail-update">
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
