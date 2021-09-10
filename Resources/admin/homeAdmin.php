
    <?php $title = 'Home ' . $_SESSION['status']  ?>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-12 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="text-center p-3 overlay-box ">
                            <div class="profile-photo">
                                <img src="<?= getStorageLink($array_user->image); ?>" width="100"  class="img-fluid rounded-circle image-cover" style="height:100px;" alt="">
                            </div>
                            <h3 class="mt-3 mb-1 text-white"><?= $array_user->username; ?></h3>
                            <p class="text-white mb-0"><?= $array_user->status; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Gender</span> <strong class="text-muted"><?= $array_user->gender; ?></strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Birth Day</span> 		<strong class="text-muted"><?= $array_user->age; ?>	</strong></li>
                        </ul>
                        <div class="card-footer border-0 mt-0">
                            <a href="/profile-Admin" class="btn btn-primary btn-lg btn-block">Detail</a>
                        </div>
                    </div>
                </div>
                <?php
                $status = empty($array_user->status) ? '' : $array_user->status;
                ?>
                <?php if ($status == 'Admin'||$status == 'Manage bill' ): ?>
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-sm-6">
                                <div class="widget-stat card">
                                    <div class="card-body p-4">
                                        <div class="media ai-icon">
									<span class="mr-3 bgl-warning text-warning">
										<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
											<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
											<polyline points="14 2 14 8 20 8"></polyline>
											<line x1="16" y1="13" x2="8" y2="13"></line>
											<line x1="16" y1="17" x2="8" y2="17"></line>
											<polyline points="10 9 9 9 8 9"></polyline>
										</svg>
									</span>
                                            <div class="media-body">
                                                <p class="mb-1">Bills Today</p>
                                                <h4 class="mb-0">2570</h4>
                                                <span class="badge badge-warning">+3.5%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-6">
                                <div class="widget-stat card">
                                    <div class="card-body  p-4">
                                        <div class="media ai-icon">
									<span class="mr-3 bgl-danger text-danger">
										<i class="fas fa-hand-holding-usd"></i>
									</span>
                                            <div class="media-body">
                                                <p class="mb-1">Turnover Today</p>
                                                <h4 class="mb-0">364.50K</h4>
                                                <span class="badge badge-danger">-3.5%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-6">
                                <div class="widget-stat card bg-primary">
                                    <div class="card-body  p-4">
                                        <div class="media">
									<span class="mr-3">
										<i class="fas fa-file-invoice-dollar"></i>
									</span>
                                            <div class="media-body text-white">
                                                <p class="mb-1">Total Order</p>
                                                <h3 class="text-white">3280</h3>
                                                <small>80% Increase in 20 Days</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-6">
                                <div class="widget-stat card bg-secondary">
                                    <div class="card-body p-4">
                                        <div class="media">
									<span class="mr-3">
										<i class="fas fa-wallet"></i>
									</span>
                                            <div class="media-body text-white">
                                                <p class="mb-1">Total Turnover</p>
                                                <h3 class="text-white">28</h3>
                                                <small>76% Increase in 20 Days</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>


