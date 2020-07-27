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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Perubahan 3 PTKL 2040</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title"><i class="fe-map"></i> Pilih Cadangan Perubahan 3 PTKL 2040</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <?php foreach ($zon as $zone): ?>
                            <div class="col-md-4">
                                <div class="card-box">
                                    <p>Zon Strategik <?php echo $zone['nama'] ?></p>
                                    <img src="<?php echo BASE_URL ?>assets/images/zon/zon-<?php echo $zone['id'] ?>.jpg" class="img-fluid">
                                    <p><a href="<?php echo BASE_URL ?>perubahan/pilih_tapak/<?php echo $zone['id'] ?>" class="btn btn-primary">Pilih</a></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div> <!-- End Row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->