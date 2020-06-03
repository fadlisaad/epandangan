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
                                    <li class="breadcrumb-item active"><a href="javascript: void(0);">Laporan Penilaian</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Laporan Penilaian Pandangan Awam bagi Draf Pelan Struktur Kuala Lumpur 2040</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

    			<div class="row">
                    <div class="col-md-8">

                        <div class="card-box ribbon-box">

                            <h3 class="header-title"><span data-tag="part"></span> A: BUTIRAN PEMBERI PANDANGAN</h3>
                            <h4 class="header-title mb-3" data-tag="public-form"></h4>

                            <h4 class="sub-header" data-tag="maklumat-peribadi"></h4>

                            <form method="post" id="borang-pskl" action="<?php echo BASE_URL ?>borang/updatePenilaian" data-parsley-validate="">
                            
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <label for="nama_penuh"><span data-tag="nama-penuh"></span> <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nama_penuh" id="nama_penuh" value="<?php echo @$data[0]['nama_penuh'] ?>" form="borang-pskl" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ic_passport"><span data-tag="no-ic"></span> <span class="text-danger">*</span></label>
                                    <input type="text" id="ic_passport" class="form-control" name="ic_passport" readonly="" value="<?php echo @$data[0]['ic_passport'] ?>" form="borang-pskl">
                                </div>
                            </div>

                            <div class="form-group">
                                <p><span data-tag="kategori"></span> <span class="text-danger">*</span></p>

                                <div class="radio mb-1 radio-info form-check-inline">
                                    <input type="radio" name="kategori" id="individu" value="Individu" <?php echo $data[0]['kategori'] == "Individu" ? "checked" : "" ?> form="borang-pskl" disabled>
                                    <label for="individu" data-tag="individu"></label>
                                </div>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" name="kategori" id="organisasi" value="Organisasi" <?php echo $data[0]['kategori'] == "Organisasi" ? "checked" : "" ?> form="borang-pskl" disabled>
                                    <label for="organisasi" data-tag="organisasi"></label>
                                </div>
                            </div>

                        </div>

                        <div class="card-box">

                            <h4 class="header-title"><span data-tag="part"></span> B: PENILAIAN PANDANGAN</h4>
                            <div class="form-group">
                                <label for="kriteria">Kriteria</label>
                                <select class="form-control" name="kriteria" form="borang-pskl" id="kriteria">
                                    <option value="" data-tag="pilih"></option>
                                    <option value="Berkaitan Matlamat, Halatuju dan Tindakan di dalam Draf PSKL 2040" <?php echo $data[0]['kriteria'] == "Berkaitan Matlamat, Halatuju dan Tindakan di dalam Draf PSKL 2040" ? "selected" : "" ?>>Berkaitan Matlamat, Halatuju dan Tindakan di dalam Draf PSKL 2040</option>
                                    <option value="PSKL 2020" <?php echo $data[0]['kriteria'] == "PSKL 2020" ? "selected" : "" ?>>PSKL 2020</option>
                                    <option value="PBRKL 2020" <?php echo $data[0]['kriteria'] == "PBRKL 2020" ? "selected" : "" ?>>PBRKL 2020</option>
                                    <option value="PTKL 2040" <?php echo $data[0]['kriteria'] == "PTKL 2040" ? "selected" : "" ?>>PTKL 2040</option>
                                    <option value="Lain-Lain" <?php echo $data[0]['kriteria'] == "Lain-Lain" ? "selected" : "" ?>>Lain-Lain</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="pandangan">Pandangan</label>
                                <textarea id="pandangan" class="form-control summernote" name="pandangan" form="borang-pskl"><?php echo @$data[0]['pandangan'] ?></textarea>
                            </div>

                            <div id="rujukan" style="display:none">
                                
                                <h5>Rujukan dalam Draf PSKL2040</h5>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="matlamat"><span data-tag="matlamat"></span> <span class="text-danger">*</span></label>
                                            <select class="form-control matlamat" name="matlamat" form="borang-pskl">
                                                <option value="" data-tag="pilih"></option>
                                                <?php foreach ($matlamat as $select): ?>
                                                <option value="<?php echo $select['id'] ?>" <?php echo $data[0]['matlamat_id'] == $select['id'] ? "selected" : "" ?>><?php echo $select['tajuk'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="halatuju" data-tag="halatuju"></label>
                                            <select class="form-control halatuju" name="halatuju" form="borang-pskl">
                                                <option value="" data-tag="pilih"></option>
                                                <?php foreach ($halatuju as $select): ?>
                                                <option value="<?php echo $select['id'] ?>" <?php echo $data[0]['halatuju_id'] == $select['id'] ? "selected" : "" ?> class="<?php echo $select['matlamat_id'] ?>"><?php echo $select['tajuk'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="tindakan" data-tag="tindakan"></label>
                                            <select class="form-control tindakan" name="tindakan" form="borang-pskl">
                                                <option value="" data-tag="pilih"></option>
                                                <?php foreach ($tindakan as $select): ?>
                                                <option value="<?php echo $select['id'] ?>" <?php echo $data[0]['tindakan_id'] == $select['id'] ? "selected" : "" ?> class="<?php echo $select['halatuju_id'] ?>"><?php echo $select['tajuk'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="mukasurat">Muka Surat</label>
                                            <input type="number" name="muka_surat" class="form-control" value="<?php echo @$data[0]['muka_surat'] ?>">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ulasan_pandangan">Ulasan Pandangan</label>
                                <textarea id="ulasan_pandangan" class="form-control summernote" name="ulasan_pandangan" form="borang-pskl"><?php echo @$data[0]['ulasan_pandangan'] ?></textarea>
                            </div>

                            <div id="cadangan-box" style="display:none">
                                <div class="form-group">
                                    <label for="cadangan">Cadangan</label>
                                    <textarea id="cadangan" class="form-control summernote" name="cadangan" form="borang-pskl"><?php echo @$data[0]['cadangan'] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="ulasan_cadangan">Ulasan Cadangan</label>
                                    <textarea id="ulasan_cadangan" class="form-control summernote" name="ulasan_cadangan" form="borang-pskl"><?php echo @$data[0]['ulasan_cadangan'] ?></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="card-box">

                            <h4 class="header-title"><span data-tag="part"></span> C: PENGESYORAN URUS SETIA</h4>

                            <div class="form-group">
                                <textarea id="pengesyoran" class="form-control summernote" name="pengesyoran" form="borang-pskl"><?php echo @$data[0]['pengesyoran'] ?></textarea>
                            </div>
                            
                            <div class="form-group mb-0">
                                <input type="hidden" name="token" value="<?php echo $token ?>">
                                <input type="hidden" name="sedia_id" value="<?php echo $_SESSION['user_id'] ?>" form="borang-pskl">
                                <input type="hidden" name="id" value="<?php echo @$data[0]['id'] ?>" form="borang-pskl">
                                <input type="hidden" name="borang_id" value="<?php echo @$data[0]['borang_id'] ?>" form="borang-pskl">
                                <input type="submit" class="btn btn-success" name="submit" value="Kemaskini" form="borang-pskl">
                                <a href="<?php echo BASE_URL.'borang/papar_pskl/'.$data[0]['borang_id'] ?>" class="btn btn-secondary">Kembali ke Borang</a>
                            </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Panduan</h4>

                                <p class="card-text"><span data-tag="ruangan-bertanda"></span> (<span class="text-danger">*</span>) <span data-tag="ruangan-wajib"></span></p>
                                
                                <h5 class="card-title"><span data-tag="part"></span> A</h5>
                                <p class="card-text">
                                    Tidak perlu diisi. Jika maklumat pembantah tidak lengkap, sila lengkapkan maklumat ini terlebih dahulu.
                                </p>

                                <h5 class="card-title"><span data-tag="part"></span> B</h5>
                                <p class="card-text">
                                    <ol>
                                        <li>Ringkasan Pandangan/Cadangan: Nyatakan pandangan pembantah secara ringkas.</li>
                                        <li>Rujukan dalam Draf PSKL 2040: Nyatakan Matlamat, Halatuju Strategik, Tindakan dan muka surat</li>
                                        <li>Ulasan: Sentuh mana-mana key point berkaitan seperti:
                                            <ul>
                                                <li>Berkaitan matlamat dlm PSKL2040. (Ringkasan matlamat/dasar)</li>
                                                <li>Angka kawalan /dasar/cadangan pelaksanaan DPSKL2040 seperti:
                                                    <ul>
                                                        <li>% kawasan lapang</li>
                                                        <li>Dasar/cadangan - Pembangunan yg tinggi tidak digalakkan</li>
                                                        <li>Garis panduan/ kajian DBKL yg berkaitan.
                                                            <ul>
                                                                <li>Urban Design Guideline</li>
                                                                <li>Pedestrian &amp; Cycling Masterplan</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>Peruntukan Akta/ Related Legal issue</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </p>

                                <h5 class="card-title"><span data-tag="part"></span> C</h5>
                                <p class="card-text">
                                    
                                </p>
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