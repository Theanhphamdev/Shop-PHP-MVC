<?php echo $title = 'List Slider' ?>
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
                        <h4 class="card-title"><?php echo $title; ?> Detail</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                <tr>
                                    <th class="width80"><strong>#</strong></th>
                                    <th><strong>Title</strong></th>
                                    <th><strong>Heading</strong></th>
                                    <th><strong>Description</strong></th>
                                    <th><strong>Image</strong></th>
                                    <th><strong><i class="fas fa-cogs"></i></strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $stt=1; ?>
                                    <?php foreach ($slider as $slide){
                                        ?>
                                        <tr>
                                        <td><strong><?= $stt++; ?></strong></td>
                                        <td><?= $slide->title_slide; ?></td>
                                        <td><?= $slide->heading; ?></td>
                                        <td><?= $slide->description; ?></td>
                                        <td><img class="img-detail" src="<?php echo getStorageLink($slide->image); ?>"</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="/detail-slider&id=<?php echo $slide->id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="/delete-slider&id=<?php echo $slide->id; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <a href="/create-slider"><button class="btn btn-primary">Create Slider</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
