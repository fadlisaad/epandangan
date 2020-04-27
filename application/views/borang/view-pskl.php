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
                    <div class="col-12">
                        <div class="card-box ribbon-box" style="font-size: 1rem !important;">
                            <div class="ribbon ribbon-primary float-right"><i class="fas fa-user"></i> <?php echo $data[0]['kategori'] ?></div>
                            <h4 class="header-title">Bahagian A: Pandangan anda terhadap Draf PSKL2040</h4>
                            <div class="ribbon-content">
                                <dl class="row">
                                    <dt class="col-sm-3">Bentuk dan Kandungan</dt>
                                    <dd class="col-sm-9">
                                        <pre><?php echo empty($data[0]['komen_bentuk_kandungan']) ? "Tiada komen" : urldecode(urldecode($data[0]['komen_bentuk_kandungan'])) ?></pre>
                                    </dd>
                                    <dt class="col-sm-3">Lain-lain</dt>
                                    <dd class="col-sm-9">
                                        <pre><?php print empty($data[0]['komen_lain_lain']) ? "Tiada komen" : urldecode(urldecode($data[0]['komen_lain_lain'])) ?></pre>
                                    </dd>
                                </dl>

                                <?php if($ulasan): ?>
                                <hr>
                                <h4>Ulasan Pegawai</h4>
                                <dl class="row">
                                    <dt class="col-sm-3">Ringkasan Keseluruhan</dt>
                                    <dd class="col-sm-9">
                                        <form id="ulasan" data-parsley-validate method="post">
                                        <textarea class="form-control summernote" name="ringkasan" rows="10"><?php echo empty($ulasan[0]['ringkasan']) ? "Tiada" : $ulasan[0]['ringkasan'] ?></textarea>
                                        <input type="hidden" name="borang_id" value="<?php echo $data[0]['borang_id'] ?>">
                                        <input type="hidden" name="user_id" value="<?php echo @$ulasan[0]['user_id'] ?>">
                                        <input type="hidden" name="id" value="<?php echo @$ulasan[0]['id'] ?>">
                                    </dd>
                                    <dt class="col-sm-3">Nama Pegawai</dt>
                                    <dd class="col-sm-9"><?php echo empty($ulasan[0]['nama_penuh']) ? "Tiada" : $ulasan[0]['nama_penuh'] ?></dd>

                                    <dt class="col-sm-3">Tarikh Kemaskini</dt>
                                    <dd class="col-sm-9"><?php echo empty($ulasan[0]['last_update']) ? "Tiada" : $ulasan[0]['last_update'] ?></dd>
                                    <dt class="col-sm-3">Tindakan</dt>
                                    <dd class="col-sm-9">
                                        <button type="button" class="btn btn-success waves-effect waves-light" id="update-ulasan"><i class="fe-save"></i> Kemaskini</button>
                                        </form>
                                    </dd>
                                </dl>
                                <?php endif; ?>
                                <?php if($_SESSION['permission'] != 'user'): if(!$ulasan):?>
                                <hr>
                                <h4>Ulasan Pegawai</h4>
                                <dl class="row">
                                    <dt class="col-sm-3">Ringkasan Keseluruhan</dt>
                                    <dd class="col-sm-9">
                                        <form id="ulasan" data-parsley-validate method="post">
                                        <textarea class="form-control summernote" name="ringkasan" rows="10"></textarea>
                                        <input type="hidden" name="borang_id" value="<?php echo $data[0]['borang_id'] ?>">
                                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                                    </dd>
                                    <dt class="col-sm-3">Tindakan</dt>
                                    <dd class="col-sm-9">
                                        <button type="button" class="btn btn-success waves-effect waves-light" id="save-ulasan"><i class="fe-save"></i> Simpan</button>
                                        </form>
                                    </dd>
                                </dl>
                                <?php endif; endif;?>
                            </div>
                        </div>

                        <?php if($matlamat): $count = 0; ?>
                        <?php foreach ($matlamat as $value): $count++; ?>
                        <div class="card-box ribbon-box" style="font-size: 1rem !important;">
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
                                        <pre><?php echo empty($value['cadangan']) ? "Tiada komen" : $value['cadangan'] ?></pre>
                                    </dd>

                                    <dt class="col-sm-3">Justifikasi</dt>
                                    <dd class="col-sm-9">
                                        <pre><?php echo empty($value['justifikasi']) ? "Tiada komen" : $value['justifikasi'] ?></pre>
                                    </dd>
                                </dl>

                                <?php $ulasanLogic = false; if($ulasanMatlamat && $_SESSION['permission'] != 'user'): ?>
                                    <?php foreach ($ulasanMatlamat as $value_ulasan): ?>
                                        <?php if(in_array($value_ulasan['borang_matlamat_id'], array($value['id'])) == true): $ulasanLogic = true; ?>
                                        <hr>
                                        <h4>Ulasan Matlamat oleh Pegawai</h4>
                                        <form id="ubah-ulasan-matlamat-<?php echo $value_ulasan['id'] ?>" method="post">
                                        <dl class="row">
                                            <dt class="col-sm-3">Ulasan</dt>
                                            <dd class="col-sm-9">
                                                <textarea class="form-control summernote" name="ulasan" rows="5"><?php echo empty($value_ulasan['ulasan']) ? "Tiada" : $value_ulasan['ulasan'] ?></textarea>
                                            </dd>

                                            <dt class="col-sm-3">Implikasi</dt>
                                            <dd class="col-sm-9">
                                                <textarea class="form-control summernote" name="implikasi" rows="5"><?php echo empty($value_ulasan['implikasi']) ? "Tiada" : $value_ulasan['implikasi'] ?></textarea>
                                            </dd>

                                            <dt class="col-sm-3">Nama Pegawai</dt>
                                            <dd class="col-sm-9"><?php echo empty($value_ulasan['nama_penuh']) ? "Tiada" : $value_ulasan['nama_penuh'] ?></dd>

                                            <dt class="col-sm-3">Tarikh Kemaskini</dt>
                                            <dd class="col-sm-9"><?php echo empty($value_ulasan['last_update']) ? "Tiada" : $value_ulasan['last_update'] ?></dd>
                                            <dt class="col-sm-3">Tindakan</dt>
                                            <dd class="col-sm-9">
                                                <button type="button" class="btn btn-success waves-effect waves-light ubah-ulasan-matlamat" data-ulasan="<?php echo $value_ulasan['id'] ?>"><i class="fe-save"></i> Kemaskini</button>
                                            </dd>
                                        </dl>
                                        <input type="hidden" name="id" id="id" value="<?php echo $value_ulasan['id'] ?>">
                                        <input type="hidden" name="borang_id" id="borang-id" value="<?php echo $data[0]['borang_id'] ?>">
                                        <input type="hidden" name="borang_matlamat_id" id="borang-matlamat-id" value="<?php echo $value['id'] ?>">
                                        </form>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                                
                                <?php if($ulasanLogic == false): ?>
                                <div id="<?php echo $value['id'] ?>">
                                    <hr>
                                    <h4>Tambah Ulasan Matlamat oleh Pegawai</h4>
                                    <form id="tambah-ulasan-matlamat-<?php echo $value['id'] ?>" method="post">
                                    <dl class="row">
                                        <dt class="col-sm-3">Ulasan</dt>
                                        <dd class="col-sm-9">
                                            <textarea class="form-control summernote" name="ulasan" rows="5"></textarea>
                                        </dd>

                                        <dt class="col-sm-3">Implikasi</dt>
                                        <dd class="col-sm-9">
                                            <textarea class="form-control summernote" name="implikasi" rows="5"></textarea>
                                        </dd>

                                        <input type="hidden" name="borang_id" id="borang-id" value="<?php echo $data[0]['borang_id'] ?>">
                                        <input type="hidden" name="borang_matlamat_id" id="borang-matlamat-id" value="<?php echo $value['id'] ?>">

                                        <dt class="col-sm-3">Tindakan</dt>
                                        <dd class="col-sm-9">
                                            <button type="button" class="btn btn-success waves-effect waves-light tambah-ulasan-matlamat" data-matlamat="<?php echo $value['id'] ?>"><i class="fe-save"></i> Simpan</button>
                                        </dd>
                                    </dl>
                                    </form>
                                </div>
                                <?php endif; ?>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                        <?php endforeach; endif;?>

                        <div class="row">
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body" style="font-size: 1rem !important;">
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

                                <div class="card bg-default">
                                    <div class="card-body" style="font-size: 1rem !important;">
                                        <h5 class="card-title mb-0">Bahagian C: Kehadiran</h5>

                                        <div id="cardCollpase2" class="collapse pt-3 show">
                                            <p>Hadir ke sesi pandangan awam?</p>
                                            <span class="btn btn-primary"><?php echo ($data[0]['hadir']) ? $data[0]['hadir']: '-' ?></span>
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

                                <button class="btn btn-secondary d-print-none" id="back"><i class="fe-arrow-left"></i> Kembali</button> <a class="btn btn-info d-print-none" href="<?php echo BASE_URL.'borang/cetak_pskl/'.$data[0]['borang_id'] ?>"><i class="fe-printer"></i> Preview</a>

                            </div>

                            <div class="col-lg-3">

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

                                <div class="card">
                                    <h5 class="card-header">MAKLUMAT SESI PENDENGARAN</h5>
                                    <div class="card-body">
                                        <?php if($sesi): ?>
                                        <dl>
                                            <dt>Jenis</dt>
                                            <dd><?php echo $sesi[0]['jenis'] ?></dd>
                                            <dt>Lokasi</dt>
                                            <dd><?php echo $sesi[0]['lokasi'] ?></dd>
                                            <dt>Tarikh</dt>
                                            <dd><?php echo $sesi[0]['tarikh'] ?></dd>
                                            <dt>Slot Masa</dt>
                                            <dd><?php echo $sesi[0]['slot_masa'] ?></dd>
                                            <dt>Keterangan</dt>
                                            <dd><?php echo html_entity_decode($sesi[0]['keterangan']) ?></dd>
                                        </dl>
                                        <dl>
                                            <dt>Pengerusi</dt>
                                            <dd><?php echo $sesi[0]['chairman'] ?></dd>
                                            <dt>Panel 1</dt>
                                            <dd><?php echo $sesi[0]['ajk_1'] ?></dd>
                                            <dt>Panel 2</dt>
                                            <dd><?php echo $sesi[0]['ajk_2'] ?></dd>
                                            <dt>Panel 3</dt>
                                            <dd><?php echo $sesi[0]['ajk_3'] ?></dd>
                                        </dl>
                                        <button class="btn btn-info">Ubah</button>
                                        <?php else: ?>
                                        <p>Tiada maklumat sesi pendengaran</p>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#sesi-modal">Tambah</button>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php endif; ?>

                            </div>
                        </div>
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- Start modal sesi pendengaran -->
        <div id="sesi-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Sesi Pendengaran</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <div class="modal-body p-4">
                        <form id="sesi-pendengaran" method="post">
                            <div class="form-group row">
                                <label for="topik" class="control-label col-md-4">Sesi Pendengaran</label>
                                <select class="col-md-8" name="sesi_id" id="sesi"></select>
                            </div>
                            <input type="hidden" id="borang_id" name="borang_id" value="<?php echo $data[0]['borang_id'] ?>">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-info waves-effect waves-light" data-dismiss="modal" id="save-sesi">Simpan</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->