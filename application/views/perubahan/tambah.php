        <!-- ============================================================== -->
        <!-- Start right Content here -->
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Perubahan</a></li>
                                    <li class="breadcrumb-item active">Tambah</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Senarai Perubahan</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="card-box">

                            <div class="alert alert-warning d-none warning">
                            <h4>Oh snap!</h4>
                            <p>This form seems to be invalid :(</p>
                            </div>

                            <div class="alert alert-success d-none success">
                            <h4>Yay!</h4>
                            <p>Everything seems to be ok :)</p>
                            </div>
                        	<form name="borang" method="post" action="<?php echo BASE_URL ?>perubahan/create" id="borang" data-parsley-validate="">
                                <div class="row">
                                    <div class="form-group col-3">
                                        <label>Bil. <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="bil" placeholder="1.1" required="">
                                    </div>
                                    <div class="form-group col-5">
                                        <label>Rujukan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="bil" placeholder="PI112&133/DP/P3-13" required="">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="zon">Pilih Zon <span class="text-danger">*</span></label>
                                        <select class="form-control" name="zon_id" id="zon_id" required=""></select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="perkara">Perkara <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="perkara" id="perkara" rows="10" placeholder="Cadangan perubahan di atas Lot 481123, Jalan Semantan, Damansara Height, Kuala Lumpur" required=""></textarea>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Lampiran Intensiti <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="attachment_1" placeholder="Sila muat naik lampiran intensiti" required="">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Lampiran Guna Tanah <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="attachment_2" placeholder="Sila muat naik lampiran zon guna tanah" required="">
                                    </div>
                                </div>
                                <input type="hidden" name="token" value="<?php echo $token ?>">
                                <button id="save" class="btn btn-primary" name="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card-box">
                            <h4>Nota</h4>
                            <p>Jika tiada lokasi yang hendak dipilih, sila masukkan terlebih dahulu senarai lokasi di menu Tetapan > Lokasi</p>
                            <p>Sekiranya ingin menukar maklumat berkenaan nama Ahli Panel, sila ubah terlebih dahulu di menu Tetapan > Ahli Panel.</p>
                        </div>
                    </div>

                </div> <!-- End Row -->
                           
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->