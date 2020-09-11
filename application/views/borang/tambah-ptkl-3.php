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
                                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>" data-tag="site-title"></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);" data-tag="borang"></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);" data-tag="pandangan-awam"></a></li>
                                </ol>
                            </div>
                            <h4 class="page-title" data-tag="borang-ptkl-3"></h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

    			<div class="row">
                    <div class="col-md-8">

                        <div class="alert alert-warning d-none fade show" id="alert-warning">
                            <h4 data-tag="ralat">Ralat!</h4>
                            <p class="mb-0" data-tag="ralat-keterangan">Terdapat kesalahan dalam pengisian borang anda. Sila semak dan isi dengan betul.</p>
                        </div>

                        <div class="alert alert-info d-none fade show" id="alert-info">
                            <h4 data-tag="berjaya">Berjaya!</h4>
                            <p class="mb-0" data-tag="berjaya-keterangan">Borang anda telah lengkap diisi.</p>
                        </div>

                        <form method="post" id="borang-ptkl-3" data-parsley-validate="" enctype="multipart/form-data" action="<?php echo BASE_URL ?>borang/add_ptkl/ptkl_3">

                        <div class="card-box">

                            <h4 class="header-title"><span data-tag="part"></span> A</h4>
                            <p class="sub-header" data-tag="maklumat-peribadi"></p>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="nama_penuh"><span data-tag="nama-penuh"></span> <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nama_penuh" id="nama_penuh" value="<?php echo @$profile[0]['nama_penuh'] ?>" required="" data-parsley-minlength="6" form="borang-ptkl-3">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ic_passport"><span data-tag="no-ic"></span> <span class="text-danger">*</span></label>
                                    <input type="text" id="ic_passport" class="form-control" name="ic_passport" required="" data-parsley-type="alphanum" data-parsley-maxlength="12" data-parsley-minlength="6" value="<?php echo @$profile[0]['ic_passport'] ?>" form="borang-ptkl-3">
                                </div>
                            </div>

                            <div class="form-group">
                                <p><span data-tag="kategori"></span> <span class="text-danger">*</span></p>

                                <div class="radio mb-1 radio-info form-check-inline">
                                    <input type="radio" name="kategori" id="individu" value="Individu" required="" <?php if(@$data[0]['kategori'] == 'Individu') echo "checked"; ?> form="borang-ptkl-3">
                                    <label for="individu" data-tag="individu"></label>
                                </div>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" name="kategori" id="organisasi" value="Organisasi" form="borang-ptkl-3" <?php if(@$data[0]['kategori'] == 'Organisasi') echo "checked"; ?>>
                                    <label for="organisasi" data-tag="organisasi"></label>
                                </div>
                            </div>

                            <div class="form-row hidden" id="row-organisasi">
                                <div class="form-group col-md-8">
                                    <label for="nama_organisasi" data-tag="nama-organisasi"></label>
                                    <input type="text" class="form-control" name="nama_organisasi" id="nama_organisasi" value="<?php echo @$data[0]['nama_organisasi'] ?>" form="borang-ptkl-3">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="jumlah_nama" data-tag="jumlah-nama"></label>
                                    <input type="number" id="jumlah_nama" class="form-control" name="jumlah_nama" data-parsley-type="number" value="<?php echo @$data[0]['jumlah_nama'] ?>" form="borang-ptkl-3">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="alamat"><span data-tag="alamat"></span> <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="alamat" id="alamat" required="" rows="5" form="borang-ptkl-3"><?php echo @$profile[0]['alamat'] ?></textarea>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="poskod"><span data-tag="poskod"></span> <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="poskod" id="poskod" required="" data-parsley-type="number" data-parsley-minlength="5" value="<?php echo @$profile[0]['poskod'] ?>" form="borang-ptkl-3">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="telefon_rumah" data-tag="telefon-rumah"></label>
                                    <input type="text" class="form-control" name="telefon_rumah" id="telefon_rumah" value="<?php echo @$profile[0]['telefon_rumah'] ?>" form="borang-ptkl-3">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="telefon_pejabat" data-tag="telefon-pejabat"></label>
                                    <input type="text" class="form-control" name="telefon_pejabat" id="telefon_pejabat" value="<?php echo @$profile[0]['telefon_pejabat'] ?>" form="borang-ptkl-3">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="telefon_bimbit"><span data-tag="telefon-bimbit"></span> <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="telefon_bimbit" id="telefon_bimbit" required="" value="<?php echo @$profile[0]['telefon_bimbit'] ?>" form="borang-ptkl-3">
                                </div>
                                <input type="hidden" name="email" value="<?php echo @$profile[0]['email'] ?>">
                            </div>
                        </div>

                            <div class="card-box">
                                <h4 class="header-title"><span data-tag="part"></span> B</h4>
                                <h4 class="sub-header" data-tag="pengesahan-kehadiran"></h4>
                                <div class="form-group">
                                    <p><span data-tag="soalan-kehadiran"></span> <span class="text-danger">*</span></p>
                                    <div class="radio mb-1 form-check-inline">
                                        <input type="radio" name="hadir" id="ya" value="Ya" required data-parsley-multiple="hadir" form="borang-ptkl-3" <?php if(@$data[0]['hadir'] == 'Ya') echo "checked"; ?>>
                                        <label for="ya" data-tag="hadir-ya"></label>
                                    </div>
                                    <div class="radio form-check-inline">
                                        <input type="radio" name="hadir" id="tidak" value="Tidak" required data-parsley-multiple="hadir" form="borang-ptkl-3" <?php if(@$data[0]['hadir'] == 'Tidak') echo "checked"; ?>>
                                        <label for="tidak" data-tag="hadir-tidak"></label>
                                    </div>
                                </div>
                            </div>

                            <?php if($_SESSION['permission'] == 'user'): ?>
                            <div class="card-box">
                                <h4 class="header-title"><span data-tag="part"></span> C</h4>
                                <p class="sub-header" data-tag="part-c-description"></p>
                                <?php if($ptkl_3): ?>
                                <div class="row">
                                    <div class="col-md-2">
                                        <dl>
                                            <dt>Bil.</dt>
                                            <dd><?php echo $ptkl_3[0]['bil'] ?></dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-3">
                                        <dl>
                                            <dt>Rujukan</dt>
                                            <dd><?php echo $ptkl_3[0]['rujukan'] ?></dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-7">
                                        <dl>
                                            <dt>Perkara</dt>
                                            <dd><?php echo $ptkl_3[0]['perkara'] ?></dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php
                                            $ptkl_3_active_tanah = '';
                                            $ptkl_3_active_intensiti = '';
                                            $ptkl_3_arrow = '';

                                            if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$ptkl_3[0]['bil'].'-gunatanah.jpg') && file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$ptkl_3[0]['bil'].'-intensiti.jpg')){
                                                $ptkl_3_active_tanah = 'active';
                                                $ptkl_3_active_intensiti = '';
                                                $ptkl_3_arrow = '';
                                            }

                                            if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$ptkl_3[0]['bil'].'-gunatanah.jpg') && !file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$ptkl_3[0]['bil'].'-intensiti.jpg')){
                                                $ptkl_3_active_tanah = 'active';
                                                $ptkl_3_active_intensiti = '';
                                                $ptkl_3_arrow = 'd-none';
                                            }
                                            if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$ptkl_3[0]['bil'].'-intensiti.jpg') && !file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$ptkl_3[0]['bil'].'-gunatanah.jpg')){
                                                $ptkl_3_active_tanah = '';
                                                $ptkl_3_active_intensiti = 'active';
                                                $ptkl_3_arrow = 'd-none';
                                            }
                                        ?>
                                        <div class="carousel slide" data-ride="carousel" id="slider">
                                            <div class="carousel-inner">
                                                <?php if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$ptkl_3[0]['bil'].'-gunatanah.jpg')): ?>
                                                <div class="carousel-item <?php echo $ptkl_3_active_tanah ?>">
                                                    <a href="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $ptkl_3[0]['bil'] ?>-gunatanah.jpg" class="image-popup" title="<?php echo $ptkl_3[0]['rujukan'] ?> : <?php echo $ptkl_3[0]['perkara'] ?>">
                                                        <img src="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $ptkl_3[0]['bil'] ?>-gunatanah.jpg" class="d-block w-100" alt="Peta Zon Guna Tanah">
                                                    </a>
                                                </div>
                                                <?php endif; ?>
                                                <?php if(file_exists(getenv('ASSET_FOLDER').'/images/perubahan-3/'.$ptkl_3[0]['bil'].'-intensiti.jpg')): ?>
                                                <div class="carousel-item <?php echo $ptkl_3_active_intensiti ?>">
                                                    <a href="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $ptkl_3[0]['bil'] ?>-intensiti.jpg" class="image-popup" title="<?php echo $ptkl_3[0]['rujukan'] ?> : <?php echo $ptkl_3[0]['perkara'] ?>">
                                                        <img src="<?php echo BASE_URL ?>assets/images/perubahan-3/<?php echo $ptkl_3[0]['bil'] ?>-intensiti.jpg" class="d-block w-100" alt="Peta Intensiti">
                                                    </a>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <div id="arrow" class="<?php echo $ptkl_3_arrow ?>">
                                                <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="perubahan_3_id" value="<?php echo $ptkl_3[0]['id'] ?>" form="borang-ptkl-3">

                                <p class="sub-header">Pandangan</p>

                                <div class="form-group">
                                    <label for="pandangan_zon"><span data-tag="pandangan-zon"></span> <span class="text-danger">*</span></label>
                                    <textarea id="pandangan_zon" class="form-control summernote" name="pandangan_zon" rows="10" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-validation-threshold="50" required="" placeholder="Contoh: Selaraskan Syarat Nyata" form="borang-ptkl-3"><?php echo @$data[0]['pandangan_zon'] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="pandangan_intensiti"><span data-tag="pandangan-intensiti"></span> <span class="text-danger">*</span></label>
                                    <textarea id="pandangan_intensiti" class="form-control summernote" name="pandangan_intensiti" rows="10" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-validation-threshold="50" required="" placeholder="Contoh: Penyelarasan densiti dengan kawasan sekitar" form="borang-ptkl-3"><?php echo @$data[0]['pandangan_intensiti'] ?></textarea>
                                </div>

                                <p class="sub-header">Cadangan/Justifikasi</p>

                                <div class="form-group">
                                    <label for="cadangan" data-tag="cadangan-penambahbaikan"></label>
                                    <textarea id="cadangan" class="form-control summernote" name="cadangan" rows="10" placeholder="Contoh: Tukar zon gunatanah mengikut Syarat Nyata" form="borang-ptkl-3"><?php echo @$data[0]['cadangan'] ?></textarea>
                                </div>
                                <?php else: ?>
                                    <a href="<?php echo BASE_URL ?>perubahan/pilih_zon" class="btn btn-primary">Tambah</a>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>

                            <?php if($perubahan): ?>
                            <h3>Senarai Pandangan</h3>
                            <?php foreach ($perubahan as $value): ?>
                            <div class="card-box" id="perubahan-<?php echo $value['perubahan_id'] ?>">
                                <dl>
                                    <dt>Bil.</dt>
                                    <dd><?php echo $value['bil'] ?></dd>
                                    <dt>Rujukan</dt>
                                    <dd><?php echo $value['rujukan'] ?></dd>
                                    <dt>Perkara</dt>
                                    <dd><?php echo $value['perkara'] ?></dd>
                                </dl>
                                <div class="row">
                                    <div class="col-md-12">
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
                                    </div>
                                </div>
                                <?php if($_SESSION['permission'] == 'user'): ?>
                                <dl>
                                    <dt>Pandangan (Zon)</dt>
                                    <dd><?php echo @$value['pandangan_zon'] ?></dd>
                                    <dt>Pandangan (Intensiti)</dt>
                                    <dd><?php echo @$value['pandangan_intensiti'] ?></dd>
                                    <dt>Cadangan</dt>
                                    <dd><?php echo @$value['cadangan'] ?></dd>
                                </dl>
                                <button type="button" data-id="<?php echo $value['perubahan_id'] ?>" class="btn btn-danger btn-sm" onclick="deletePerubahan(<?php echo $value['perubahan_id'] ?>)"><i class="mdi mdi-close"></i> Padam</button>

                                <?php else: ?>
                                <!-- <form id="update-perubahan" name="update-perubahan"> -->
                                <div class="form-group">
                                    <label for="pandangan_zon"><span data-tag="pandangan-zon"></span> <span class="text-danger">*</span></label>
                                    <textarea id="pandangan_zon" class="form-control summernote" name="pandangan_zon" rows="10" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-validation-threshold="50" required="" placeholder="Contoh: Selaraskan Syarat Nyata" form="borang-ptkl-3"><?php echo @$value['pandangan_zon'] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="pandangan_intensiti"><span data-tag="pandangan-intensiti"></span> <span class="text-danger">*</span></label>
                                    <textarea id="pandangan_intensiti" class="form-control summernote" name="pandangan_intensiti" rows="10" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-validation-threshold="50" required="" placeholder="Contoh: Penyelarasan densiti dengan kawasan sekitar" form="borang-ptkl-3"><?php echo @$value['pandangan_intensiti'] ?></textarea>
                                </div>

                                <p class="sub-header">Cadangan/Justifikasi</p>

                                <div class="form-group">
                                    <label for="cadangan" data-tag="cadangan-penambahbaikan"></label>
                                    <textarea id="cadangan" class="form-control summernote" name="cadangan" rows="10" placeholder="Contoh: Tukar zon gunatanah mengikut Syarat Nyata" form="borang-ptkl-3"><?php echo @$value['cadangan'] ?></textarea>
                                </div>
                                <input type="hidden" name="perubahan_3_id" value="<?php echo $ptkl_3[0]['id'] ?>" form="borang-ptkl-3">
                                <!-- <button type="button" data-id="<?php echo $value['perubahan_id'] ?>" class="btn btn-primary btn-sm" onclick="updatePerubahan(<?php echo $value['perubahan_id'] ?>)">Kemaskini</button>
                                <?php endif; ?> -->

                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>

                            <div class="card-box">
                                <h4 class="header-title"><span data-tag="lampiran"></span> 1</h4>
                                <?php if($data){
                                    $upload = array('id' => $data[0]['borang_id'].'-a'); 
                                    $get = $helper->get($upload);
                                    if($get) {
                                        echo "<p><div class=\"button-list\"><a href=\"".BASE_URL."files/".$get[0]['file']."\" class=\"btn btn-blue\"><span class=\"btn-label\"><i class=\"fas fa-file-pdf\"></i></span>Lampiran Memorandum</a></div></p>";
                                    }else{ ?>
                                        <p class="sub-header" data-tag="muatnaik-lampiran-2"></p>
                                        <div class="form-group">
                                            <input type="file" name="lampiran_a" data-parsley-max-file-size="2000" form="borang-ptkl-3">
                                        </div>
                                        <div class="alert alert-info" data-tag="alert-lampiran"></div>
                                    <?php }
                                }else{ ?>
                                <p class="sub-header" data-tag="muatnaik-memorandum"></p>
                                <div class="form-group">
                                    <input type="file" name="lampiran_a" data-parsley-max-file-size="2000" form="borang-ptkl-3">
                                </div>
                                <div class="alert alert-info" data-tag="alert-lampiran"></div>
                                <?php } ?>

                                <h4 class="header-title"><span data-tag="lampiran"></span> 2</h4>
                                <?php if($data)
                                {
                                    $upload = array('id' => $data[0]['borang_id'].'-c'); 
                                    $get = $helper->get($upload);
                                    if($get){
                                        echo "<div class=\"button-list\"><a href=\"".BASE_URL."files/".$get[0]['file']."\" class=\"btn btn-green\"><span class=\"btn-label\"><i class=\"fas fa-file-pdf\"></i></span>Lampiran Berkaitan Pandangan Awam</a></div>";
                                    }else{ ?>
                                        <p class="sub-header" data-tag="muatnaik-lampiran-2"></p>
                                        <div class="form-group">
                                            <input type="file" name="lampiran_c" data-parsley-max-file-size="2000" form="borang-ptkl-3">
                                        </div>
                                        <div class="alert alert-info" data-tag="alert-lampiran"></div>
                                    <?php }
                                }else{ ?>
                                <p class="sub-header" data-tag="muatnaik-lampiran-2"></p>
                                <div class="form-group">
                                    <input type="file" name="lampiran_c" data-parsley-max-file-size="2000" form="borang-ptkl-3">
                                </div>
                                <div class="alert alert-info" data-tag="alert-lampiran"></div>
                                <?php } ?>
                            </div>

                            <div class="card-box">
                                <?php if($_SESSION['permission'] != 'user'): ?>
                                <h4 class="header-title">Nama Pegawai Key-in</h4>
                                <p class="sub-header">Sila pilih nama pegawai yang key-in borang ini</p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <select class="form-control" id="pegawai" required="" name="pegawai" form="borang-ptkl-3">
                                            <?php if(isset($data[0]['pegawai'])) echo "<option value=\"".$data[0]['pegawai']."\" selected>".$data[0]['pegawai']."</option>"; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <a id="clear_select" href="#" class="btn btn-warning">Clear Selection</a>
                                        <a href="#add-modal" class="btn btn-primary waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Tambah Pegawai</a>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <div class="form-group mb-0">
                                    <input type="hidden" name="token" value="<?php echo $token ?>" form="borang-ptkl-3">
                                    <input type="hidden" name="borang_id" value="<?php echo $data[0]['borang_id'] ?>" form="borang-ptkl-3">
                                    <input type="hidden" name="draf" value="2" form="borang-ptkl-3">
                                    <input type="submit" class="btn btn-success" name="submit" value="Simpan" form="borang-ptkl-3">
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Panduan Mengisi Borang Pandangan Awam</h4>

                                <p class="card-text">Ruangan bertanda (<span class="text-danger">*</span>) adalah ruangan wajib diisi.</p>
                                
                                <h5 class="card-title">Bahagian A</h5>
                                <p class="card-text">
                                    <ol>
                                        <li>Sila isikan maklumat dengan lengkap.</li>
                                        <li>Sila masukkan nombor kad pengenalan anda dalam format 12 digit pada bahagian No. IC/Passport (tanpa simbol -)</li>
                                        <li>Pilih kategori samada <strong class="text-dark">Individu</strong> bagi perseorangan atau <strong class="text-dark">Agensi/Organisasi</strong> bagi wakil kepada kumpulan, persatuan, NGO atau syarikat.</li>
                                        <li>Jika anda mewakili <strong class="text-dark">Agensi/Organisasi</strong> dan menghantar memorandum, sila masukkan jumlah nama tandatangan memorandum berkenaan dalam ruangan <strong class="text-dark">Jumlah nama</strong></li>
                                        <li>Jika anda menghantar memorandum, sila muat naik memorandum berkenaan dalam ruangan <strong class="text-dark">Lampiran 1</strong></li>
                                    </ol>
                                </p>

                                <h5 class="card-title">Bahagian B</h5>
                                <p class="card-text">
                                    <ol>
                                        <li>Setiap Individu/kumpulan diberi pilihan untuk menghadiri atau tidak ke Jawatankuasa Pendengaran Pandangan Awam. Sila tandakan pilihan anda.</li>
                                    </ol>
                                </p>

                                <h5 class="card-title">Bahagian C</h5>
                                <p class="card-text">
                                    <ol>
                                        <li>Sila gunakan ruang yang telah disediakan untuk memberi pandangan.</li>
                                        <li>Sila sertakan gambar-gambar berkaitan dengan tapak dan persekitaran (jika perlu). Muat naik lampiran anda dalam ruangan <strong class="text-dark">Lampiran 2</strong></li>
                                        <li>Pandangan awam perlulah berkaitan dengan kandungan Draf Perubahan PBRKL 2020 (Perubahan 3) sahaja.</li>
                                        <li>Pandangan awam mestilah berasaskan kepada keperluan masyarakat umum dan tidak kepada kepentingan individu.</li> 
                                        <li>Pandangan awam secara bertulis sahaja yang akan didengar dan dipertimbangkan oleh Jawatankuasa Pendengaran Pandangan Awam.</li>
                                    </ol>
                                </p>
                                <div class="alert alert-info" role="alert">
                                    <i class="mdi mdi-alert-circle-outline mr-2"></i> Maklumat lanjut mengenai Draf Perubahan PBRKL2020 (Perubahan 3) boleh diperoleh dengan menghubungi talian 03 – 2617 9512 / 9519 / 9533 (Seksyen Perancangan Pelan Tempatan, Jabatan Perancangan Bandaraya).
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    <i class="mdi mdi-alert-outline mr-2"></i>
                                    Borang yang telah lengkap diisi hendaklah dihantar sebelum atau pada 25 Ogos 2020 (Selasa)
                                    <div data-countdown="2020/08/25"></div>
                                </div>
                                
                            </div>
                        </div> <!-- end card-box-->
                    </div>
                </div> <!-- End Row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Add Modal -->
        <div id="add-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.modal.close();">
                <span>&times;</span><span class="sr-only">Tutup</span>
            </button>
            <h4 class="custom-modal-title">Tambah Nama Pegawai</h4>
            <div class="custom-modal-text text-left">
                <form id="tambah-pegawai">
                    <div class="form-group">
                        <label for="name">Nama Penuh</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama pegawai">
                    </div>

                    <div class="text-right">
                        <button id="save-pegawai" class="btn btn-success waves-effect waves-light" onclick="Custombox.modal.close();">Simpan</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" onclick="Custombox.modal.close();">Batal</button>
                    </div>
                </form>
            </div>
        </div>