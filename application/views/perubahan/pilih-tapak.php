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
                            <h4 class="page-title"><i class="fe-map"></i> Tapak Cadangan Perubahan 3 PTKL 2040</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-md-12">
                        <h3>Zon Strategik <?php echo $zon[0]['nama'] ?></h3>
                        
                        <?php foreach ($perubahan as $tapak): ?>
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-md-2">
                                        <dl>
                                            <dt>Bil.</dt>
                                            <dd><?php echo $tapak['bil'] ?></dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-3">
                                        <dl>
                                            <dt>Rujukan</dt>
                                            <dd><?php echo $tapak['rujukan'] ?></dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-7">
                                        <dl>
                                            <dt>Perkara</dt>
                                            <dd><?php echo $tapak['perkara'] ?></dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $tapak['bil'] ?>.png" class="img-fluid">
                                    </div>
                                </div>
                                <a href="<?php echo BASE_URL."borang/pandangan/ptkl-3?tapak=".$tapak['id'] ?>" class="btn btn-primary" id="pilih-tapak">Pilih</a>
                            </div>
                        <?php endforeach; ?>
                        <button id="back" class="btn btn-secondary">Kembali ke pilihan Zon</button>
                    </div>
                </div> <!-- End Row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->