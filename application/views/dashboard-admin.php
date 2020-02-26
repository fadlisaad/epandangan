            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="wrapper">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo SITE_TITLE ?></a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    <div class="row">
                        <a href="<?php echo BASE_URL ?>borang/pandangan/ptkl-2" class="btn btn-success btn-rounded mb-3"><i class="mdi mdi-plus"></i> Borang Manual Draf Perubahan 2 PBRKL 2020</a>
                        <a href="<?php echo BASE_URL ?>borang/pandangan/pskl" class="btn btn-info btn-rounded mb-3"><i class="mdi mdi-plus"></i> Borang Manual Draf PSKL 2040</a>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card-box bg-pattern">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-md bg-blue rounded">
                                            <i class="fe-layers avatar-title font-22 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $countDownload ?></span></h3>
                                            <p class="text-muted mb-0 text-truncate">Pembelian</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->

                        <div class="col-md-3">
                            <div class="card-box bg-pattern">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-md bg-success rounded">
                                            <i class="fe-award avatar-title font-22 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $totalDownload ?></span></h3>
                                            <p class="text-muted mb-0 text-truncate">Muat Turun</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
                        <div class="col-md-3">
                            <div class="card-box bg-pattern">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-md bg-danger rounded">
                                            <i class="fe-dollar-sign avatar-title font-22 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo number_format($countDownload*100,2); ?></span></h3>
                                            <p class="text-muted mb-0 text-truncate">Jumlah (RM)</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
                        <div class="col-md-3">
                            <div class="card-box bg-pattern">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-md bg-primary rounded">
                                            <i class="fe-user avatar-title font-22 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $countRegister; ?></span></h3>
                                            <p class="text-muted mb-0 text-truncate">Pendaftaran</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
                    </div>

                </div> <!-- container -->

            </div>
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
