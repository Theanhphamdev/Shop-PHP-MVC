<?php echo $title = 'List Menu' ?>
<div class="content-body" style="min-height: 798px;">
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Menu Show</a></li>
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
                                    <th><strong>Url</strong></th>
                                    <th><strong>Create At</strong></th>
                                    <th><strong><i class="fas fa-cogs"></i></strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $stt=1; ?>
                                <?php foreach ($menus as $menu){
                                    ?>
                                    <tr>
                                        <td><strong><?=  $stt++; ?></strong></td>
                                        <td><?= $menu->name; ?></td>
                                        <td><?=  $menu->url ?></td>
                                        <td><?= $menu->created_at; ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="/detail-menu&id=<?php echo $menu->id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="/delete-menu&id=<?php echo $menu->id; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <a href="/create-menu"><button class="btn btn-primary">Create Menu</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
