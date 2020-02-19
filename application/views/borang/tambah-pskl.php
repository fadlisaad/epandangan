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
                        <div class="card-box">

                            <h4 class="header-title mb-3" data-tag="public-form"></h4>

                            <div class="alert alert-warning d-none fade show">
                                <h4 data-tag="ralat">Ralat!</h4>
                                <p class="mb-0" data-tag="ralat-keterangan">Terdapat kesalahan dalam pengisian borang anda. Sila semak dan isi dengan betul.</p>
                            </div>

                            <div class="alert alert-info d-none fade show">
                                <h4 data-tag="berjaya">Berjaya!</h4>
                                <p class="mb-0" data-tag="berjaya-keterangan">Borang anda telah lengkap diisi.</p>
                            </div>

                            <div id="rootwizard">
                                <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                                    <li class="nav-item" data-target-form="#first">
                                        <a href="#first" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                                            <i class="mdi mdi-account-circle mr-1"></i>
                                            <span class="d-none d-sm-inline"><span data-tag="part"></span> A</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" data-target-form="#second">
                                        <a href="#second" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-face-profile mr-1"></i>
                                            <span class="d-none d-sm-inline"><span data-tag="part"></span> B</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" data-target-form="#third">
                                        <a href="#third" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                            <span class="d-none d-sm-inline"><span data-tag="part"></span> C</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content mb-0 b-0">

                                    <div class="tab-pane active show" id="first">
                                        <h4 class="sub-header" data-tag="maklumat-peribadi"></h4>

                                        <form method="post" id="borang-pskl" data-parsley-validate="" enctype="multipart/form-data" action="<?php echo BASE_URL ?>borang/add_pskl" class="borang-pskl">
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <label for="nama_penuh"><span data-tag="nama-penuh"></span> <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="nama_penuh" id="nama_penuh" value="<?php echo @$profile[0]['nama_penuh'] ?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="ic_passport"><span data-tag="no-ic"></span> <span class="text-danger">*</span></label>
                                                    <input type="text" id="ic_passport" class="form-control" name="ic_passport" required="" data-parsley-type="alphanum" data-parsley-maxlength="12" data-parsley-minlength="6" value="<?php echo @$profile[0]['ic_passport'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <p><span data-tag="kategori"></span> <span class="text-danger">*</span></p>

                                                <div class="radio mb-1 radio-info form-check-inline">
                                                    <input type="radio" name="kategori" id="individu" value="Individu" required="" checked="checked">
                                                    <label for="individu" data-tag="individu"></label>
                                                </div>
                                                <div class="radio radio-info form-check-inline">
                                                    <input type="radio" name="kategori" id="organisasi" value="Organisasi">
                                                    <label for="organisasi" data-tag="organisasi"></label>
                                                </div>
                                            </div>

                                            <div class="form-row hidden" id="row-organisasi">
                                                <div class="form-group col-md-9">
                                                    <label for="nama_organisasi" data-tag="nama-organisasi"></label>
                                                    <input type="text" class="form-control" name="nama_organisasi" id="nama_organisasi">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="jumlah_nama" data-tag="jumlah-nama"></label>
                                                    <input type="number" id="jumlah_nama" class="form-control" name="jumlah_nama" data-parsley-type="number" value="1">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="alamat"><span data-tag="alamat"></span> <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="alamat" id="alamat" required="" value="<?php echo @$profile[0]['alamat'] ?>">
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="poskod"><span data-tag="poskod"></span> <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="poskod" id="poskod" required="" data-parsley-type="number" data-parsley-minlength="5" value="<?php echo @$profile[0]['poskod'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="telefon_rumah" data-tag="telefon-rumah"></label>
                                                    <input type="text" class="form-control" name="telefon_rumah" id="telefon_rumah" value="<?php echo @$profile[0]['telefon_rumah'] ?>">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="telefon_pejabat" data-tag="telefon-pejabat"></label>
                                                    <input type="text" class="form-control" name="telefon_pejabat" id="telefon_pejabat" value="<?php echo @$profile[0]['telefon_pejabat'] ?>">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="telefon_bimbit"><span data-tag="telefon-bimbit"></span> <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="telefon_bimbit" id="telefon_bimbit" required="" value="<?php echo @$profile[0]['telefon_bimbit'] ?>">
                                                </div>
                                            </div>

                                            <h4 class="header-title"><span data-tag="lampiran"></span> 1</h4>
                                                <p class="sub-header" data-tag="muatnaik-memorandum"></p>
                                                <div class="form-group">
                                                    <input type="file" name="lampiran_a" data-parsley-max-file-size="2000">
                                                </div>
                                            <div class="alert alert-info" data-tag="alert-lampiran"></div>

                                            <div class="form-row">
                                                <ul class="list-inline wizard">
                                                    </li>
                                                    <li class="next list-inline-item text-right"><a href="javascript: void(0);" class="btn btn-secondary" data-tag="next" id="selepas"></a></li>
                                                </ul>
                                            </div>
                                        
                                    </div>

                                    <div class="tab-pane fade" id="second">
                                        <h4 class="sub-header" data-tag="pengesahan-kehadiran"></h4>
                                        <div class="form-group">
                                            <p><span data-tag="soalan-kehadiran"></span> <span class="text-danger">*</span></p>

                                            <div class="radio mb-1 radio-success form-check-inline">
                                                <input type="radio" name="hadir" id="ya" value="Ya" required="">
                                                <label for="ya" data-tag="hadir-ya"></label>
                                            </div>
                                            <div class="radio radio-danger form-check-inline">
                                                <input type="radio" name="hadir" id="tidak" value="Tidak">
                                                <label for="tidak" data-tag="hadir-tidak"></label>
                                            </div>
                                        </div>

                                        <ul class="list-inline wizard mb-0">
                                            <li class="previous list-inline-item"><a href="javascript: void(0);" class="btn btn-secondary" data-tag="previous" id="sebelum"></a>
                                            </li>
                                            <li class="next list-inline-item float-right"><a href="javascript: void(0);" class="btn btn-secondary" data-tag="next" id="selepas"></a></li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade" id="third">

                                        <div class="card mb-1">

                                            <div class="card-header">
                                                <h5 class="m-0" data-tag="bentuk-dokumen"></h5>
                                            </div>

                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="komen_bentuk_kandungan"><span data-tag="padangan-cadangan"></span></label>
                                                    <textarea id="komen_bentuk_kandungan" class="form-control" name="komen_bentuk_kandungan" rows="5" required=""></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="card mb-1">

                                            <div class="card-header">
                                                <h5 class="m-0"><span data-tag="matlamat"></span> <span id="matlamat_title"></span></h5>
                                            </div>
                                    
                                            <div class="card-body">

                                                <div class="borang-pandangan">

                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label for="matlamat"><span data-tag="matlamat"></span> <span class="text-danger">*</span></label>
                                                            <select class="form-control matlamat" name="matlamat[]">
                                                                <option value="" data-tag="pilih"></option>
                                                                <?php foreach ($matlamat as $value): ?>
                                                                <option value="<?php echo $value['id'] ?>"><?php echo $value['tajuk'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="halatuju" data-tag="halatuju"></label>
                                                            <select class="form-control halatuju" name="halatuju[]">
                                                                <option value="" data-tag="pilih"></option>
                                                                <?php foreach ($halatuju as $value): ?>
                                                                <option value="<?php echo $value['id'] ?>" class="<?php echo $value['matlamat_id'] ?>"><?php echo $value['tajuk'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="tindakan" data-tag="tindakan"></label>
                                                            <select class="form-control tindakan" name="tindakan[]">
                                                                <option value="" data-tag="pilih"></option>
                                                                <?php foreach ($tindakan as $value): ?>
                                                                <option value="<?php echo $value['id'] ?>" class="<?php echo $value['halatuju_id'] ?>"><?php echo $value['tajuk'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="form-row extra-pandangan">
                                                        <div class="form-group col-md-6">
                                                            <label for="cadangan"><span data-tag="padangan-cadangan"></span> <span class="text-danger">*</span></label>
                                                            <textarea class="form-control cadangan" name="cadangan[]" rows="5"  required=""></textarea>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="justifikasi"><span data-tag="justifikasi"></span> <span class="text-danger">*</span></label>
                                                            <textarea class="form-control justifikasi" name="justifikasi[]" rows="5" required=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <button type="button" class="btn btn-info btnAdd"><i class="fas fa-plus-circle"></i> <span data-tag="tambah"></span></button>
                                                        <button type="button" class="btn btn-danger btnDel"><i class="fas fa-dash"></i> <span data-tag="hapus"></span></button>
                                                    </div>
                                                </div>

                                                <div class="borang-box"></div>
                                                
                                            </div>

                                        </div>

                                        <div class="card mb-1">
                                            <div class="card-header">
                                                <h5 class="m-0" data-tag="lain-lain"></h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="komen_lain_lain"><span data-tag="padangan-cadangan"></label>
                                                    <textarea id="komen_lain_lain" class="form-control" name="komen_lain_lain" rows="5"></textarea>
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <div class="form-group mb-0">
                                                    <input type="hidden" name="token" value="<?php echo $token ?>">
                                                    <button type="submit" class="btn btn-success" name="submit" data-tag="submit"></button>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-inline wizard mb-0">
                                            <li class="previous list-inline-item"><a href="javascript: void(0);" class="btn btn-secondary" data-tag="previous" id="sebelum"></a>
                                        </ul>
                                    </div>

                                    </form>

                                </div> <!-- tab-content -->
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

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->