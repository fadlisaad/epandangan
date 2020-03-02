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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">PSKL 2040</a></li>
                                    <li class="breadcrumb-item active">PSKL2040/DRAF/<?php echo $data[0]['borang_id'] ?></li>
                                </ol>
                            </div>
                            <h4 class="page-title">PSKL2040/DRAF/<?php echo $data[0]['borang_id'] ?></h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-9">
                        <div class="card-box ribbon-box">
                            <div class="ribbon ribbon-primary float-right"><i class="fas fa-user"></i> <?php echo $data[0]['kategori'] ?></div>
                            <h4 class="header-title">Bahagian A: Pandangan anda terhadap Draf PSKL2040</h4>
                            <div class="ribbon-content">
                                <h4>Bentuk dan Kandungan</h4>
                                <dl class="row">
                                    <dt class="col-sm-3">Bentuk dan Kandungan</dt>
                                    <dd class="col-sm-9"><?php echo empty($data[0]['komen_bentuk_kandungan']) ? "Tiada komen" : $data[0]['komen_bentuk_kandungan'] ?></dd>

                                    <dt class="col-sm-3">Lain-lain</dt>
                                    <dd class="col-sm-9"><?php echo empty($data[0]['komen_lain_lain']) ? "Tiada komen" : $data[0]['komen_lain_lain'] ?></dd>
                                </dl>

                                <?php if($ulasan): ?>
                                <hr>
                                <h4>Ulasan Pegawai</h4>
                                <dl class="row">
                                    <dt class="col-sm-3">Ringkasan Keseluruhan</dt>
                                    <dd class="col-sm-9"><?php echo empty($ulasan[0]['ringkasan']) ? "Tiada" : $ulasan[0]['ringkasan'] ?></dd>

                                    <dt class="col-sm-3">Nama Pegawai</dt>
                                    <dd class="col-sm-9"><?php echo empty($ulasan[0]['nama_penuh']) ? "Tiada" : $ulasan[0]['nama_penuh'] ?></dd>

                                    <dt class="col-sm-3">Tarikh Kemaskini</dt>
                                    <dd class="col-sm-9"><?php echo empty($ulasan[0]['last_update']) ? "Tiada" : $ulasan[0]['last_update'] ?></dd>
                                </dl>
                                <?php endif; ?>
                                <?php if($_SESSION['permission'] != 'user' && !$ulasan): ?>
                                <button class="btn btn-primary btn-sm" id="tindakan" data-toggle="modal" data-target="#tindakan-modal"><i class="mdi mdi-plus-circle"></i> Tambah Ulasan Ringkasan Keseluruhan</button>
                                <?php else: ?>
                                <button class="btn btn-primary btn-sm" id="tindakan" data-toggle="modal" data-target="#tindakan-modal"><i class="fe-scissors"></i> Kemaskini Ulasan Ringkasan Keseluruhan</button>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if($matlamat): $count = 0; ?>
                        <?php foreach ($matlamat as $value): $count++; ?>
                        <div class="card-box ribbon-box">
                            <div class="ribbon ribbon-success float-right"><i class="fas fa-user"></i> Matlamat #<?php echo $count ?></div>
                            <h4 class="header-title">Matlamat/Halatuju/Tindakan</h4>
                            <div class="ribbon-content">
                                <dl class="row">
                                    <dt class="col-sm-3">Matlamat</dt>
                                    <dd class="col-sm-9"><?php echo $value['matlamat'] ?></dd>

                                    <dt class="col-sm-3">Halatuju</dt>
                                    <dd class="col-sm-9"><?php echo $value['halatuju'] ?></dd>

                                    <dt class="col-sm-3">Tindakan</dt>
                                    <dd class="col-sm-9"><?php echo $value['tindakan'] ?></dd>

                                    <dt class="col-sm-3">Pandangan / Cadangan</dt>
                                    <dd class="col-sm-9">
                                        <p><?php echo empty($value['cadangan']) ? "Tiada komen" : $value['cadangan'] ?></p>
                                    </dd>

                                    <dt class="col-sm-3">Justifikasi</dt>
                                    <dd class="col-sm-9">
                                        <p><?php echo empty($value['justifikasi']) ? "Tiada komen" : $value['justifikasi'] ?></p>
                                    </dd>
                                </dl>

                                <div class="matlamat-box">
                                <?php if($_SESSION['permission'] != 'user' && $ulasanMatlamat): ?>
                                    <?php foreach ($ulasanMatlamat as $value_ulasan): ?>
                                        <?php if($value_ulasan['borang_matlamat_id'] == $value['id']): ?>
                                        
                                        <hr>
                                        <h4>Ulasan Matlamat oleh Pegawai</h4>
                                        <dl class="row">
                                            <dt class="col-sm-3">Ulasan</dt>
                                            <dd class="col-sm-9"><?php echo empty($value_ulasan['ulasan']) ? "Tiada" : $value_ulasan['ulasan'] ?></dd>

                                            <dt class="col-sm-3">Implikasi</dt>
                                            <dd class="col-sm-9"><?php echo empty($value_ulasan['implikasi']) ? "Tiada" : $value_ulasan['implikasi'] ?></dd>

                                            <dt class="col-sm-3">Nama Pegawai</dt>
                                            <dd class="col-sm-9"><?php echo empty($value_ulasan['nama_penuh']) ? "Tiada" : $value_ulasan['nama_penuh'] ?></dd>

                                            <dt class="col-sm-3">Tarikh Kemaskini</dt>
                                            <dd class="col-sm-9"><?php echo empty($value_ulasan['last_update']) ? "Tiada" : $value_ulasan['last_update'] ?></dd>
                                        </dl>
                                        <button class="btn btn-info btn-sm text-right edit-matlamat" data-toggle="modal" data-target="#matlamat-modal" data-borang-matlamat-id="<?php echo $value['id'] ?>" data-borang-id="<?php echo $data[0]['borang_id'] ?>" data-ulasan="<?php echo $value_ulasan['ulasan'] ?>" data-implikasi="<?php echo $value_ulasan['implikasi'] ?>" data-action="update" data-id="<?php echo $value_ulasan['id'] ?>"><i class="fe-scissors"></i> Ubah Ulasan Matlamat</button>
                                        
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                                    <button class="btn btn-success btn-sm text-right load-matlamat" data-toggle="modal" data-target="#matlamat-modal" data-borang-matlamat-id="<?php echo $value['id'] ?>" data-borang-id="<?php echo $data[0]['borang_id'] ?>" data-action="insert"><i class="mdi mdi-plus-circle"></i> Tambah Ulasan Matlamat</button>
                                </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                        <?php endforeach; endif;?>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Bahagian B: Maklumat Peribadi</h4>
                                <dl class="row">
                                    <dt class="col-sm-3">Nama</dt>
                                    <dd class="col-sm-9"><?php echo ($data[0]['nama_penuh']) ? $data[0]['nama_penuh']: '-' ?></dd>

                                    <dt class="col-sm-3">No. Kad Pengenalan/Passport</dt>
                                    <dd class="col-sm-9"><?php echo ($data[0]['ic_passport']) ? $data[0]['ic_passport']: '-' ?></dd>

                                    <dt class="col-sm-3">Nama Agensi/Organisasi</dt>
                                    <dd class="col-sm-9"><?php echo ($data[0]['nama_organisasi']) ? $data[0]['nama_organisasi']: '-' ?></dd>

                                    <dt class="col-sm-3">Jumlah Nama</dt>
                                    <dd class="col-sm-9"><?php echo ($data[0]['jumlah_nama']) ? $data[0]['jumlah_nama']: '-' ?></dd>

                                    <dt class="col-sm-3">Alamat Surat Menyurat</dt>
                                    <dd class="col-sm-9"><?php echo ($data[0]['alamat']) ? $data[0]['alamat']: '-' ?></dd>

                                    <dt class="col-sm-3">No. Telefon Rumah</dt>
                                    <dd class="col-sm-9"><?php echo ($data[0]['telefon_rumah']) ? $data[0]['telefon_rumah']: '-' ?></dd>

                                    <dt class="col-sm-3">No. Telefon Pejabat</dt>
                                    <dd class="col-sm-9"><?php echo ($data[0]['telefon_pejabat']) ? $data[0]['telefon_pejabat']: '-' ?></dd>

                                    <dt class="col-sm-3">No. Telefon Bimbit</dt>
                                    <dd class="col-sm-9"><?php echo ($data[0]['telefon_bimbit']) ? $data[0]['telefon_bimbit']: '-' ?></dd>
                                </dl>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                        <button class="btn btn-secondary" id="back"><i class="fe-arrow-left"></i> Kembali</button> <a class="btn btn-info" href="javascript:window.print()"><i class="fe-printer"></i> Cetak</a>
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
                                <h5 class="card-title">Lampiran A (Memorandum)</h5>

                                <?php $upload = array('id' => $data[0]['borang_id']); 
                                $get = $helper->get($upload);
                                if($get) echo "<div class=\"button-list\"><a href=\"".BASE_URL."files/".$get[0]['file']."\" class=\"btn btn-blue\"><span class=\"btn-label\"><i class=\"fas fa-file-pdf\"></i></span>Lampiran #</a></div>";
                                else echo "Tiada lampiran."; ?>

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
                                            <td><?php echo ($data[0]['pegawai_id']) ? $data[0]['pegawai_id']: 'Tiada' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tarikh Key-in</td>
                                            <td><?php echo ($data[0]['tarikh_key_in']) ? $data[0]['tarikh_key_in']: 'Tiada' ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end card-->
                        <?php endif; ?>

                    </div>
                </div>
                <!-- end row-->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- Start modal tindakan -->
        <div id="tindakan-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tindakan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="ulasan" data-parsley-validate method="post">
                                <div class="form-group">
                                    <label for="ringkasan" class="control-label">Ringkasan Keseluruhan</label>
                                    <textarea id="ringkasan" class="form-control" name="ringkasan" rows="10"><?php if($ulasan) echo @$ulasan[0]['ringkasan'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><i class="fe-x"></i> Tutup</button>
                        <input type="hidden" name="borang_id" value="<?php echo $data[0]['borang_id'] ?>">
                        <?php if($ulasan): ?>
                        <input type="hidden" name="user_id" value="<?php echo @$ulasan[0]['user_id'] ?>">
                        <input type="hidden" name="id" value="<?php echo @$ulasan[0]['id'] ?>">
                        <button type="button" class="btn btn-success waves-effect waves-light" id="update-ulasan"><i class="fe-save"></i> Kemaskini</button>
                        <?php else: ?>
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                        <button type="button" class="btn btn-success waves-effect waves-light" id="save-ulasan"><i class="fe-save"></i> Simpan</button>
                        <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->

        <!-- Start modal matlamat -->
        <div id="matlamat-modal" class="modal fade lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Matlamat</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="ulasan-matlamat" method="post">
                                <div class="form-group">
                                    <label for="modal-ulasan" class="control-label">Ulasan</label>
                                    <textarea id="modal-ulasan" class="form-control" name="ulasan" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="modal-implikasi" class="control-label">Implikasi penerimaan pandangan</label>
                                    <textarea id="modal-implikasi" class="form-control" name="implikasi" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id" value="">
                        <input type="hidden" name="borang_id" id="borang-id" value="">
                        <input type="hidden" name="borang_matlamat_id" id="borang-matlamat-id" value="">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><i class="fe-x"></i> Tutup</button>

                        <button type="button" class="btn btn-success waves-effect waves-light" id="tambah-ulasan-matlamat"><i class="fe-save"></i> Simpan</button>
                        <button type="button" class="btn btn-success waves-effect waves-light" id="ubah-ulasan-matlamat"><i class="fe-save"></i> Kemaskini</button>

                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->