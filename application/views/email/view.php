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
                                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>"><?php echo SITE_TITLE ?></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Log</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">E-mail</a></li>
                                    <li class="breadcrumb-item active">Transaksi E-mail</li>
                                </ol>
                            </div>
                            <h4 class="page-title"><i class="fe-mail"></i> Transaksi E-mail</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 font-18"><b><?php echo $data[0]['subject'] ?></b></h4>

                            <hr>

                            <div class="media m-b-30">
                                <div class="media-body">
                                    <span class="media-meta pull-right">Dihantar pada: <?php echo $data[0]['last_update'] ?></span>
                                    <h4 class="text-primary font-16 m-0">Penerima: <?php echo $data[0]['recipient'] ?></h4>
                                    <small class="text-muted">Dari: <?php echo getenv('EMAIL_ADDRESS') ?></small>
                                </div>
                            </div>
                            <span><?php echo $data[0]['body'] ?></span>
                            <a class="btn btn-info" href="#" id="back">Kembali</a>
                        </div>
                    </div>
                </div> <!-- End Row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
