
<div class="nav-header">
    <a href="/admin" class="brand-logo">
        <img class="logo-abbr" src="<?php echo LIB_ADMIN . '/images/logo.png' ?>" alt="">
        <img class="logo-compact" src="<?php echo LIB_ADMIN . '/images/logo-text.png' ?>" alt="">
        <img class="brand-title" src="<?php echo LIB_ADMIN . '/images/logo-text.png' ?>" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>

<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        <?php echo $title; ?>
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                            <img class="image-cover" src="<?= getStorageLink($array_user->image); ?>" width="20" alt=""/>
                            <div class="header-info">
                                <span class="text-black"><?= $array_user->username; ?></span>
                                <p class="fs-12 mb-0"><?= $array_user->status; ?></p>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="/profile-Admin" class="dropdown-item ai-icon">
                                <svg id="icon-user1"  class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ml-2">Profile </span>
                            </a>
                            <a href="/logout" class="dropdown-item ai-icon">
                                <svg id="icon-logout"  class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="ai-icon" href="/admin" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text"> Home </span>
                </a>
            </li>
            <?php
                $status = empty($array_user->status) ? '' : $array_user->status;
            ?>
            <?php if ($status == 'Admin'||$status == 'Manage product' ): ?>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fab fa-product-hunt"></i>
                        <span class="nav-text">Products</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/create-product">Created Product</a></li>
                        <li><a href="/list-product">List Product</a></li>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if ($status == 'Admin'||$status == 'Manage category' ): ?>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="nav-text">Categories</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/create-category">Created Category </a></li>
                        <li><a href="/list-category">List Category</a></li>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if ($status == 'Admin'||$status == 'Manage employee' ): ?>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="nav-text">Employee</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/create-employee">Created Employee </a></li>
                        <li><a href="/list-employee">List Employee</a></li>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if ($status == 'Admin'||$status == 'Manage bill' ): ?>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-notes-medical"></i>
                        <span class="nav-text">Order</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/list-order">List Order</a></li>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if ($status == 'Admin'||$status == 'Manage frontend' ): ?>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-bars"></i>
                        <span class="nav-text">Menu</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/create-menu">Created Menu </a></li>
                        <li><a href="/list-menu">List Menu</a></li>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if ($status == 'Admin'||$status == 'Manage frontend' ): ?>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-image"></i>
                        <span class="nav-text">Slider</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/create-slider">Create Slider</a></li>
                        <li><a href="/list-slider">List Slider</a></li>
                    </ul>
                </li>
            <?php endif; ?>

        </ul>

    </div>
</div>