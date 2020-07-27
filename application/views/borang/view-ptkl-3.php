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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo getenv('SITE_TITLE') ?></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Borang</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">PBRKL 2020</a></li>
                                    <li class="breadcrumb-item active">PBRKL2020/DRAF/3/<?php echo $data[0]['id'] ?></li>
                                </ol>
                            </div>
                            <h4 class="page-title">PBRKL2020/DRAF/3/<?php echo $data[0]['id'] ?></h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-9">
                        <div class="card-box ribbon-box">
                            <div class="ribbon ribbon-primary float-right"><i class="fas fa-user"></i> <?php echo $data[0]['kategori'] ?></div>
                            <h4 class="header-title">Bahagian A: Pandangan anda terhadap Draf Perubahan 3 PBRKL 2020</h4>
                            <div class="ribbon-content">

                                <?php foreach ($perubahan as $value): ?>
                                <div class="card-box">
                                    <dl>
                                        <dt>Bil.</dt>
                                        <dd><?php echo $value['bil'] ?></dd>
                                        <dt>Rujukan</dt>
                                        <dd><?php echo $value['rujukan'] ?></dd>
                                        <dt>Perkara</dt>
                                        <dd><?php echo $value['perkara'] ?></dd>
                                    </dl>
                                    <?php
                                        $active_tanah = '';
                                        $active_intensiti = '';
                                        $arrow = '';

                                        if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$value['bil'].'-gunatanah.jpg') && file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$value['bil'].'-intensiti.jpg')){
                                            $active_tanah = 'active';
                                            $active_intensiti = '';
                                            $arrow = '';
                                        }

                                        if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$value['bil'].'-gunatanah.jpg') && !file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$value['bil'].'-intensiti.jpg')){
                                            $active_tanah = 'active';
                                            $active_intensiti = '';
                                            $arrow = 'd-none';
                                        }
                                        if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$value['bil'].'-intensiti.jpg') && !file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$value['bil'].'-gunatanah.jpg')){
                                            $active_tanah = '';
                                            $active_intensiti = 'active';
                                            $arrow = 'd-none';
                                        }
                                    ?>
                                    <div class="carousel slide" data-ride="carousel" id="slider-<?php echo $value['perubahan_id'] ?>">
                                        <div class="carousel-inner">
                                            <?php if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$value['bil'].'-gunatanah.jpg')): ?>
                                            <div class="carousel-item <?php echo $active_tanah ?>">
                                                <a href="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $value['bil'] ?>-gunatanah.jpg" class="image-popup" title="<?php echo $value['rujukan'] ?> : <?php echo $value['perkara'] ?>">
                                                    <img src="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $value['bil'] ?>-gunatanah.jpg" class="d-block w-100" alt="Peta Zon Guna Tanah">
                                                </a>
                                            </div>
                                            <?php endif; ?>
                                            <?php if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$value['bil'].'-intensiti.jpg')): ?>
                                            <div class="carousel-item <?php echo $active_intensiti ?>">
                                                <a href="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $value['bil'] ?>-intensiti.jpg" class="image-popup" title="<?php echo $value['rujukan'] ?> : <?php echo $value['perkara'] ?>">
                                                    <img src="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $value['bil'] ?>-intensiti.jpg" class="d-block w-100" alt="Peta Intensiti">
                                                </a>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <div id="arrow" class="<?php echo $arrow ?>">
                                            <a class="carousel-control-prev" href="#slider-<?php echo $value['perubahan_id'] ?>" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider-<?php echo $value['perubahan_id'] ?>" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <dl>
                                        <dt>Pandangan (Zon)</dt>
                                        <dd><?php echo @$value['pandangan_zon'] ?></dd>
                                        <dt>Pandangan (Intensiti)</dt>
                                        <dd><?php echo @$value['pandangan_intensiti'] ?></dd>
                                        <dt>Cadangan</dt>
                                        <dd><?php echo @$value['cadangan'] ?></dd>
                                    </dl>
                                </div>
                                <?php endforeach; ?>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Bahagian B: Maklumat Peribadi</h4>
                                <dl class="row">
                                    <dt class="col-sm-3">Nama</dt>
                                    <dd class="col-sm-9"><?php echo ($profile[0]['nama_penuh']) ? $profile[0]['nama_penuh']: '-' ?></dd>

                                    <dt class="col-sm-3">No. Kad Pengenalan/Passport</dt>
                                    <dd class="col-sm-9"><?php echo ($profile[0]['ic_passport']) ? $profile[0]['ic_passport']: '-' ?></dd>

                                    <dt class="col-sm-3">Nama Agensi/Organisasi</dt>
                                    <dd class="col-sm-9"><?php echo ($data[0]['nama_organisasi']) ? $data[0]['nama_organisasi']: '-' ?></dd>

                                    <dt class="col-sm-3">Jumlah Nama</dt>
                                    <dd class="col-sm-9"><?php echo ($data[0]['jumlah_nama']) ? $data[0]['jumlah_nama']: '-' ?></dd>

                                    <dt class="col-sm-3">Alamat Surat Menyurat</dt>
                                    <dd class="col-sm-9"><?php echo ($profile[0]['alamat']) ? $profile[0]['alamat']: '-' ?></dd>

                                    <dt class="col-sm-3">No. Telefon Rumah</dt>
                                    <dd class="col-sm-9"><?php echo ($profile[0]['telefon_rumah']) ? $profile[0]['telefon_rumah']: '-' ?></dd>

                                    <dt class="col-sm-3">No. Telefon Pejabat</dt>
                                    <dd class="col-sm-9"><?php echo ($profile[0]['telefon_pejabat']) ? $profile[0]['telefon_pejabat']: '-' ?></dd>

                                    <dt class="col-sm-3">No. Telefon Bimbit</dt>
                                    <dd class="col-sm-9"><?php echo ($profile[0]['telefon_bimbit']) ? $profile[0]['telefon_bimbit']: '-' ?></dd>
                                </dl>

                            </div> <!-- end card body-->
                            <div class="card-footer">
                                <button class="btn btn-secondary" id="back">Kembali</button>
                                <a href="<?php echo BASE_URL ?>borang/pandangan/ptkl_3" class="btn btn-primary">Kemaskini</a>
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col-->
                    <div class="col-lg-3">
                        <!-- Portlet card -->

                        <div class="card bg-default">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Bahagian C: Kehadiran</h5>

                                <div id="cardCollpase2" class="collapse pt-3 show">
                                    <p>Hadir ke sesi pandangan awam?</p>
                                    <span class="btn btn-primary"><?php echo ($data[0]['hadir']) ? $data[0]['hadir']: '-' ?></btn>
                                </div>
                            </div>
                        </div> <!-- end card-->

                        <div class="card bg-default d-print-none">
                            <div class="card-body">
                                <h5 class="card-title">Lampiran A & C</h5>

                                <?php $upload = array('id' => $data[0]['id'].'-a'); 
                                $get = $helper->get($upload);
                                if($get) echo "<div class=\"button-list\"><a href=\"".BASE_URL."files/".$get[0]['file']."\" class=\"btn btn-blue\"><span class=\"btn-label\"><i class=\"fas fa-file-pdf\"></i></span>Memorandum</a></div>";
                                else echo "Tiada lampiran memorandum."; ?>

                                <?php $upload = array('id' => $data[0]['id'].'-c'); 
                                $get = $helper->get($upload);
                                if($get) echo "<div class=\"button-list\"><a href=\"".BASE_URL."files/".$get[0]['file']."\" class=\"btn btn-blue\"><span class=\"btn-label\"><i class=\"fas fa-file-pdf\"></i></span>Lampiran</a></div>";
                                else echo "Tiada lampiran berkaitan pandangan awam."; ?>

                            </div>
                        </div> <!-- end card-->

                        <?php if($_SESSION['permission'] != 'user'): ?>
                        <div class="card bg-dark">
                            <div class="card-body">
                                <h5 class="card-title mb-0 text-white">UNTUK KEGUNAAN PEJABAT</h5>

                                <div id="cardCollpase2" class="collapse pt-3 show">
                                    <table class="table table-borderless text-white">
                                        <tr>
                                            <td>Tarikh Terima</td>
                                            <td><?php echo ($data[0]['tarikh_terima']) ? $data[0]['tarikh_terima']: '-' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kehadiran</td>
                                            <td>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="hadir-ya" name="hadir" class="custom-control-input" <?php echo ($data[0]['hadir'] == 'Ya') ? "checked": '' ?>>
                                                    <label class="custom-control-label" for="hadir-ya">Ya</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="hadir-tidak" name="hadir" class="custom-control-input" <?php echo ($data[0]['hadir'] == 'Tidak') ? "checked": '' ?>>
                                                    <label class="custom-control-label" for="hadir-tidak">Tidak</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pegawai Key-in</td>
                                            <td><?php echo ($data[0]['pegawai']) ? $data[0]['pegawai']: 'Tiada' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tarikh Key-in</td>
                                            <td><?php echo ($data[0]['tarikh_key_in']) ? $data[0]['tarikh_key_in']: 'Tiada' ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-print-none">
                                <a class="btn btn-info" href="<?php echo BASE_URL."borang/cetak_ptkl_2/".$data[0]['borang_id'] ?>">Cetak</a>
                            </div>
                        </div> <!-- end card-->
                        <?php endif; ?>

                    </div>
                </div>
                <!-- end row-->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->