<?php echo $title = 'List Category' ?>
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
                        <h4 class="card-title"><?php echo $title; ?> Detail</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                <tr>
                                    <th class="width80"><strong>#</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>image</strong></th>
                                    <th><strong>Create At</strong></th>
                                    <th><strong><i class="fas fa-cogs"></i></strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $stt=1; ?>
                                    <?php foreach ($categories as $category){
                                        ?>
                                        <tr>
                                        <td><strong><?php echo $stt++; ?></strong></td>
                                        <td><?php echo $category->name; ?></td>
                                        <td><img class="img-detail" src="<?php echo getStorageLink($category->image); ?>"</td>
                                        <td><?php echo $category->created_at; ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="/detail-category&id=<?php echo $category->id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="/delete-category&id=<?php echo $category->id; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <a href="/create-category"><button class="btn btn-primary">Add Category</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
