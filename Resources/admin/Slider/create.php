<?php echo $title = 'Create Slider' ?>
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
                            <form action="/insert-slider" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="title_slide">Title Slider</label>
                                        <input type="text" class="form-control" name="title_slide" placeholder="Enter the name title here...">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="heading">Heading Slider</label>
                                        <input type="text" class="form-control" name="heading" placeholder="Enter the name heading here...">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="description">Description Slider</label>
                                        <textarea class="form-control" name="description" rows="5" placeholder="Enter the name description here..."></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Image Slider</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" id="image" class="custom-file-input">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
