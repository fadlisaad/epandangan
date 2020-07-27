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
                        <div class="row">
                            <div class="card-columns">
                            <?php foreach ($perubahan as $tapak): ?>
                                <?php
                                    $active_tanah = '';
                                    $active_intensiti = '';
                                    $arrow = '';

                                    if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$tapak['bil'].'-gunatanah.jpg') && file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$tapak['bil'].'-intensiti.jpg')){
                                        $active_tanah = 'active';
                                        $active_intensiti = '';
                                        $arrow = '';
                                    }

                                    if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$tapak['bil'].'-gunatanah.jpg') && !file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$tapak['bil'].'-intensiti.jpg')){
                                        $active_tanah = 'active';
                                        $active_intensiti = '';
                                        $arrow = 'd-none';
                                    }
                                    if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$tapak['bil'].'-intensiti.jpg') && !file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$tapak['bil'].'-gunatanah.jpg')){
                                        $active_tanah = '';
                                        $active_intensiti = 'active';
                                        $arrow = 'd-none';
                                    }
                                ?>
                                <div class="card">
                                    <div class="carousel slide" data-ride="carousel" id="slider-<?php echo $tapak['id'] ?>">
                                        <div class="carousel-inner">
                                            <?php if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$tapak['bil'].'-gunatanah.jpg')): ?>
                                            <div class="carousel-item <?php echo $active_tanah ?>">
                                                <a href="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $tapak['bil'] ?>-gunatanah.jpg" class="image-popup" title="<?php echo $tapak['rujukan'] ?> : <?php echo $tapak['perkara'] ?>">
                                                    <img src="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $tapak['bil'] ?>-gunatanah.jpg" class="d-block w-100" alt="Peta Zon Guna Tanah">
                                                </a>
                                            </div>
                                            <?php endif; ?>
                                            <?php if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$tapak['bil'].'-intensiti.jpg')): ?>
                                            <div class="carousel-item <?php echo $active_intensiti ?>">
                                                <a href="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $tapak['bil'] ?>-intensiti.jpg" class="image-popup" title="<?php echo $tapak['rujukan'] ?> : <?php echo $tapak['perkara'] ?>">
                                                    <img src="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $tapak['bil'] ?>-intensiti.jpg" class="d-block w-100" alt="Peta Intensiti">
                                                </a>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <div id="arrow" class="<?php echo $arrow ?>">
                                            <a class="carousel-control-prev" href="#slider-<?php echo $tapak['id'] ?>" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider-<?php echo $tapak['id'] ?>" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Bil. <?php echo $tapak['bil'] ?></h5>
                                        <p class="card-text">
                                            <dl>
                                                <dt>Rujukan</dt>
                                                <dd><?php echo $tapak['rujukan'] ?></dd>
                                                <dt>Perkara</dt>
                                                <dd><?php echo $tapak['perkara'] ?></dd>
                                            </dl>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="<?php echo BASE_URL."borang/pandangan/ptkl-3?tapak=".$tapak['id'] ?>" class="btn btn-primary" id="pilih-tapak">Pilih</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                        <button id="back" class="btn btn-secondary">Kembali ke pilihan Zon</button>
                    </div>
                </div> <!-- End Row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->