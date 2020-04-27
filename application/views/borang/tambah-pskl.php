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
                                    <li class="breadcrumb-item active" data-tag="borang-pskl"></li>
                                </ol>
                            </div>
                            <h4 class="page-title" data-tag="borang-pskl"></h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

    			<div class="row">
                    <div class="col-md-8">

                        <div class="card-box ribbon-box">

                            <div class="ribbon ribbon-primary float-right"><i class="fas fa-email"></i> Debug info: [<?php echo $_SESSION['borang_id'].":".$_SESSION['user_email'] ?>]</div>

                            <h3 class="header-title"><span data-tag="part"></span> A</h3>
                            <h4 class="header-title mb-3" data-tag="public-form"></h4>

                            <div class="alert alert-danger d-none fade show" id="alert-warning">
                                <h4 data-tag="ralat">Ralat!</h4>
                                <p class="mb-0" data-tag="ralat-keterangan">Terdapat kesalahan dalam pengisian borang anda. Sila semak dan isi dengan betul.</p>
                            </div>

                            <div class="alert alert-info d-none fade show" id="alert-info">
                                <h4 data-tag="berjaya">Berjaya!</h4>
                                <p class="mb-0" data-tag="berjaya-keterangan">Borang anda telah lengkap diisi.</p>
                            </div>

                            <h4 class="sub-header" data-tag="maklumat-peribadi"></h4>

                            <form method="post" id="borang-pskl" enctype="multipart/form-data" action="<?php echo BASE_URL ?>borang/add_pskl" data-parsley-validate="">
                            
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <label for="nama_penuh"><span data-tag="nama-penuh"></span> <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nama_penuh" id="nama_penuh" required="" value="<?php echo @$profile[0]['nama_penuh'] ?>" form="borang-pskl">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ic_passport"><span data-tag="no-ic"></span> <span class="text-danger">*</span></label>
                                    <input type="text" id="ic_passport" class="form-control" name="ic_passport" required="" data-parsley-type="alphanum" data-parsley-maxlength="12" data-parsley-minlength="6" data-parsley-trigger="change" value="<?php echo @$profile[0]['ic_passport'] ?>" form="borang-pskl">
                                </div>
                            </div>

                            <div class="form-group">
                                <p><span data-tag="kategori"></span> <span class="text-danger">*</span></p>

                                <div class="radio mb-1 radio-info form-check-inline">
                                    <input type="radio" name="kategori" id="individu" value="Individu" required="" checked="checked" form="borang-pskl">
                                    <label for="individu" data-tag="individu"></label>
                                </div>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" name="kategori" id="organisasi" value="Organisasi" form="borang-pskl">
                                    <label for="organisasi" data-tag="organisasi"></label>
                                </div>
                            </div>

                            <div class="form-row hidden" id="row-organisasi">
                                <div class="form-group col-md-9">
                                    <label for="nama_organisasi" data-tag="nama-organisasi"></label>
                                    <input type="text" class="form-control" name="nama_organisasi" id="nama_organisasi" form="borang-pskl">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="jumlah_nama" data-tag="jumlah-nama"></label>
                                    <input type="number" id="jumlah_nama" class="form-control" name="jumlah_nama" data-parsley-type="number" value="1" form="borang-pskl">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat"><span data-tag="alamat"></span> <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="alamat" id="alamat" required="" value="<?php echo @$profile[0]['alamat'] ?>" form="borang-pskl">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="poskod"><span data-tag="poskod"></span> <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="poskod" id="poskod" required="" data-parsley-type="number" data-parsley-minlength="5" value="<?php echo @$profile[0]['poskod'] ?>" form="borang-pskl">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="telefon_rumah" data-tag="telefon-rumah"></label>
                                    <input type="text" class="form-control" name="telefon_rumah" id="telefon_rumah" value="<?php echo @$profile[0]['telefon_rumah'] ?>" form="borang-pskl">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="telefon_pejabat" data-tag="telefon-pejabat"></label>
                                    <input type="text" class="form-control" name="telefon_pejabat" id="telefon_pejabat" value="<?php echo @$profile[0]['telefon_pejabat'] ?>" form="borang-pskl">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="telefon_bimbit"><span data-tag="telefon-bimbit"></span> <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="telefon_bimbit" id="telefon_bimbit" required="" value="<?php echo @$profile[0]['telefon_bimbit'] ?>" form="borang-pskl">
                                </div>
                            </div>

                            <h4 class="header-title"><span data-tag="lampiran"></span> 1</h4>
                            <?php if($data): $upload = array('id' => $data[0]['borang_id']); 
                                $get = $helper->get($upload);
                                if($get) echo "<div class=\"button-list\"><a href=\"".BASE_URL."files/".$get[0]['file']."\" class=\"btn btn-blue\"><span class=\"btn-label\"><i class=\"fas fa-file-pdf\"></i></span>Lampiran #</a></div>"; endif;?>
                            <p class="sub-header" data-tag="muatnaik-memorandum"></p>
                            <div class="form-group">
                                <input type="file" name="lampiran_a" data-parsley-max-file-size="2000" form="borang-pskl">
                            </div>
                            <div class="alert alert-info" data-tag="alert-lampiran"></div>

                        </div>

                        <div class="card-box">

                            <h4 class="header-title"><span data-tag="part"></span> B</h4>
                            <h4 class="sub-header" data-tag="pengesahan-kehadiran"></h4>
                            <div class="form-group">
                                <p><span data-tag="soalan-kehadiran"></span> <span class="text-danger">*</span></p>
                                <div class="radio mb-1 form-check-inline">
                                    <input type="radio" name="hadir" id="ya" value="Ya" required data-parsley-multiple="hadir" form="borang-pskl" <?php if(@$data[0]['hadir'] == 'Ya') echo "checked"; ?>>
                                    <label for="ya" data-tag="hadir-ya"></label>
                                </div>
                                <div class="radio form-check-inline">
                                    <input type="radio" name="hadir" id="tidak" value="Tidak" required data-parsley-multiple="hadir" form="borang-pskl" <?php if(@$data[0]['hadir'] == 'Tidak') echo "checked"; ?>>
                                    <label for="tidak" data-tag="hadir-tidak"></label>
                                </div>
                            </div>
                        </div>

                        <div class="card-box">

                            <h4 class="header-title"><span data-tag="part"></span> C</h4>
                            <div class="card mb-1">

                                <div class="card-header">
                                    <h5 class="m-0" data-tag="bentuk-dokumen"></h5>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="komen_bentuk_kandungan"><span data-tag="padangan-cadangan"></span></label>
                                        <textarea id="komen_bentuk_kandungan" class="form-control summernote" name="komen_bentuk_kandungan" rows="5" form="borang-pskl"><?php echo @$data[0]['komen_bentuk_kandungan'] ?></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="card mb-1">

                                <div class="card-header">
                                    <h5 class="m-0"><span data-tag="matlamat"></span> <span id="matlamat_title"></span></h5>
                                </div>
                        
                                <div class="card-body">

                                    <div id="success"></div>

                                    <div class="borang-pandangan">
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Tambah komen matlamat</button>
                                    </div>
                                    
                                </div>

                            </div>

                            <div class="card mb-1">
                                <div class="card-header">
                                    <h5 class="m-0" data-tag="lain-lain"></h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="komen_lain_lain"><span data-tag="padangan-cadangan"></label>
                                        <textarea id="komen_lain_lain" class="form-control summernote" name="komen_lain_lain" rows="5" form="borang-pskl"><?php echo @$data[0]['komen_lain_lain'] ?></textarea>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="form-group mb-0">
                                        <input type="hidden" name="user_id" value="<?php echo $user_id ?>" form="borang-pskl">
                                        <input type="hidden" name="token" value="<?php echo $token ?>" form="borang-pskl">
                                        <?php if($data) $save_button = 'Hantar'; else $save_button = 'Simpan'; ?>
                                        <input type="submit" class="btn btn-success" name="submit" value="<?php echo $save_button ?>" form="borang-pskl">
                                        </form>
                                        <?php if($_SESSION['borang_id'] != NULL): ?>
                                            <a href="<?php echo BASE_URL ?>dashboard/admin" class="btn btn-info" id="reset">Keluar ke Dashboard</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" data-tag="borang-guide"></h4>

                                <p class="card-text"><span data-tag="ruangan-bertanda"></span> (<span class="text-danger">*</span>) <span data-tag="ruangan-wajib"></span></p>
                                
                                <h5 class="card-title"><span data-tag="part"></span> A</h5>
                                <p class="card-text">
                                    <ol>
                                        <li data-tag="a-1"></li>
                                        <li data-tag="a-2"></li>
                                        <li data-tag="a-3"></li>
                                        <li data-tag="a-4"></li>
                                    </ol>
                                </p>

                                <h5 class="card-title"><span data-tag="part"></span> B</h5>
                                <p class="card-text">
                                    <ol>
                                        <li data-tag="b-1"></li>
                                    </ol>
                                </p>

                                <h5 class="card-title"><span data-tag="part"></span> C</h5>
                                <p class="card-text">
                                    <ol>
                                        <li data-tag="c-1"></li>
                                        <li data-tag="c-2"></li>
                                        <li data-tag="c-4"></li>
                                    </ol>
                                </p>
                                <div class="alert alert-info" role="alert">
                                    <i class="mdi mdi-alert-circle-outline mr-2"></i>
                                    <span data-tag="maklumat-lanjut-pskl"></span>
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    <i class="mdi mdi-alert-outline mr-2"></i>
                                    <span data-tag="maklumat-tutup-pskl"></span>
                                </div>
                            </div>
                        </div> <!-- end card-box-->
                    </div>
                </div> <!-- End Row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Tambah Komen Matlamat</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <div class="modal-body">
                        <form id="borang-matlamat" action="#" data-parsley-validate="">
                            <div class="form-group">
                                <label for="matlamat"><span data-tag="matlamat"></span> <span class="text-danger">*</span></label>
                                <select class="form-control matlamat" name="matlamat" form="borang-matlamat">
                                    <option value="" data-tag="pilih"></option>
                                    <?php foreach ($select_matlamat as $value): ?>
                                    <option value="<?php echo $value['id'] ?>"><?php echo $value['tajuk'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="halatuju" data-tag="halatuju"></label>
                                <select class="form-control halatuju" name="halatuju" form="borang-matlamat">
                                    <option value="" data-tag="pilih"></option>
                                    <?php foreach ($select_halatuju as $value): ?>
                                    <option value="<?php echo $value['id'] ?>" class="<?php echo $value['matlamat_id'] ?>"><?php echo $value['tajuk'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tindakan" data-tag="tindakan"></label>
                                <select class="form-control tindakan" name="tindakan" form="borang-matlamat">
                                    <option value="" data-tag="pilih"></option>
                                    <?php foreach ($select_tindakan as $value): ?>
                                    <option value="<?php echo $value['id'] ?>" class="<?php echo $value['halatuju_id'] ?>"><?php echo $value['tajuk'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="cadangan"><span data-tag="padangan-cadangan"></span> <span class="text-danger">*</span></label>
                                <textarea class="form-control cadangan summernote" name="cadangan" rows="5" form="borang-matlamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="justifikasi"><span data-tag="justifikasi"></span> <span class="text-danger">*</span></label>
                                <textarea class="form-control justifikasi summernote" name="justifikasi" rows="5" form="borang-matlamat"></textarea>
                            </div>
                            <input type="hidden" name="borang_id" value="<?php echo @$data[0]['borang_id'] ?>" form="borang-matlamat">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-info btnAdd btn-sm" form="borang-matlamat" data-id="<?php echo @$data[0]['borang_id'] ?>" data-dismiss="modal"><i class="fas fa-plus-circle"></i> <span data-tag="tambah"></span></button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->