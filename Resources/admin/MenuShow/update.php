<?php echo $title = 'Edit menu' ?>
<div class="content-body" style="min-height: 798px;">
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
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
                            <form action="/update-menu" method="post" >
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="hidden"  name="id" value="<?php echo $menus->id; ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="name">Name Menu</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $menus->name; ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="url">Url Menu</label>
                                        <input type="text" class="form-control" name="url" value="<?php echo $menus->url; ?>">
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
