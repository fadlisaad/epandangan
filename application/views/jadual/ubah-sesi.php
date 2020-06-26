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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Jadual</a></li>
                                    <li class="breadcrumb-item active">Ubah Sesi</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Ubah Sesi Pendengaran</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card-box">
                        	<form method="post" action="#" id="update-jadual" data-parsley-validate="">
								<div class="form-group">
                                    <label for="jenis">Pilih Jenis <span class="text-danger">*</span></label>
                                    <select class="form-control" name="jenis" id="jenis">
                                        <option value="Draf Perubahan 1 PBRKL 2020" <?php echo ($data[0]['jenis'] == 'Draf Perubahan 1 PBRKL 2020') ? "selected" : '' ?>>Draf Perubahan 1 PBRKL 2020</option>
                                        <option value="Draf Perubahan 2 PBRKL 2020" <?php echo ($data[0]['jenis'] == 'Draf Perubahan 2 PBRKL 2020') ? "selected" : '' ?>>Draf Perubahan 2 PBRKL 2020</option>
                                        <option value="Draf PSKL 2040" <?php echo ($data[0]['jenis'] == 'Draf PSKL 2040') ? "selected" : '' ?>>Draf PSKL 2040</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Pilih Lokasi <span class="text-danger">*</span></label>
                                    <select class="form-control" name="lokasi_id" id="lokasi">
                                        <option value="<?php echo $data[0]['lokasi_id'] ?>" <?php echo ($data[0]['lokasi']) ? "selected" : '' ?>><?php echo $data[0]['lokasi'] ?></option>
                                    </select>
                                </div>
                                <?php $dateArray = explode(" ",$data[0]['slot_masa']); ?>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Pilih Tarikh</label>
                                        <input type="text" id="datepicker" class="form-control" name="tarikh" value="<?php echo ($data[0]['tarikh']) ? $data[0]['tarikh']: '-' ?>">
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Dari</label>
                                        <input type="text" class="form-control timepicker" name="masa_mula" value="<?php echo $dateArray[0] ?>">
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Hingga</label>
                                        <input type="text" class="form-control timepicker" name="masa_tamat" value="<?php echo $dateArray[1] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan/Nota</label>
                                    <textarea class="form-control summernote" name="keterangan" id="keterangan" rows="10"><?php echo ($data[0]['keterangan']) ? html_entity_decode($data[0]['keterangan']): '-' ?></textarea>
                                </div>
                                <a href="<?php echo BASE_URL."jadual/sesiPendengaran/".$data[0]['id'] ?>" class="btn btn-primary waves-effect waves-light m-b-5">Lihat Senarai Borang</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-box">
                                <div class="form-group">
                                    <label for="chairman">Pengerusi</label>
                                    <select class="form-control" name="chairman" id="chairman" required="">
                                        <option value="<?php echo $data[0]['chairman_id'] ?>" <?php echo ($data[0]['chairman']) ? "selected" : '' ?>><?php echo $data[0]['chairman'] ?></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ajk1">AJK 1</label>
                                    <select class="form-control" name="ajk_1" id="ajk_1" required="">
                                        <option value="<?php echo $data[0]['ajk_1_id'] ?>" <?php echo ($data[0]['ajk_1']) ? "selected" : '' ?>><?php echo $data[0]['ajk_1'] ?></option>
                                    </select>
                                    <button id="padam_ajk1" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                </div>
                                <div class="form-group">
                                    <label for="ajk2">AJK 2</label>
                                    <select class="form-control" name="ajk_2" id="ajk_2" required="">
                                        <option value="<?php echo $data[0]['ajk_2_id'] ?>" <?php echo ($data[0]['ajk_2']) ? "selected" : '' ?>><?php echo $data[0]['ajk_2'] ?></option>
                                    </select>
                                    <button id="padam_ajk2" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                </div>
                                <div class="form-group">
                                    <label for="ajk3">AJK 3</label>
                                    <select class="form-control" name="ajk_3" id="ajk_3">
                                        <option value="<?php echo $data[0]['ajk_3_id'] ?>" <?php echo ($data[0]['ajk_3']) ? "selected" : '' ?>><?php echo $data[0]['ajk_3'] ?></option>
                                    </select>
                                    <button id="padam_ajk3" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $data[0]['id'] ?>">
								<button type="button" class="btn btn-info waves-effect waves-light m-b-5" id="save-jadual">Kemaskini</button>
                                <button class="btn btn-warning waves-effect waves-light m-b-5" id="back">Batal</button>
								<a href="<?php echo BASE_URL ?>jadual/senarai" class="btn btn-primary waves-effect waves-light m-b-5">Kembali ke Senarai</a>
							</form>
                        </div>
                        <div class="card-box">
                            <h4>Nota</h4>
                            <p>Jika tiada lokasi yang hendak dipilih, sila masukkan terlebih dahulu senarai lokasi di menu Tetapan > Lokasi</p>
                            <p>Sekiranya ingin menukar maklumat berkenaan nama Ahli Panel, sila ubah terlebih dahulu di menu Tetapan > Ahli Panel.</p>
                            <p>Jika anda ingin padam nama AJK, pilih butang padam.</p>
                            <p>Minimum 1 Pengerusi dan 2 orang AJK</p>
                        </div>
                    </div>

                </div> <!-- End Row -->
                           
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->