        <div class="wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <img src="<?php echo BASE_URL ?>assets/images/pskl-logo-bm.png">
                            <h3>BORANG SESI PANEL PENDENGARAN AWAM DRAF PELAN STRUKTUR KUALA LUMPUR 2040</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h4>SEKSYEN A : MAKLUMAT SESI JAWATANKUASA PENDENGARAN PANDANGAN AWAM</h4>
                        </div>

                        <div class="card">
                            <div class="card-body" style="font-size: 1rem !important;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <dl class="row">
                                            <dt class="col-sm-4">ID Pandangan</dt>
                                            <dd class="col-sm-8">PSKL2040/DRAF/<?php echo $data[0]['borang_id'] ?></dd>
                                        </dl>
                                        <dl class="row">
                                            <dt class="col-sm-4">Pengerusi</dt>
                                            <dd class="col-sm-8"><?php echo $sesi[0]['chairman'] ?></dd>
                                            <dt class="col-sm-4">Panel 1</dt>
                                            <dd class="col-sm-8"><?php echo $sesi[0]['ajk_1'] ?></dd>
                                            <dt class="col-sm-4">Panel 2</dt>
                                            <dd class="col-sm-8"><?php echo $sesi[0]['ajk_2'] ?></dd>
                                            <dt class="col-sm-4">Panel 3</dt>
                                            <dd class="col-sm-8"><?php echo $sesi[0]['ajk_3'] ?></dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-6">
                                        <dl class="row">
                                            <dt class="col-sm-4">Lokasi</dt>
                                            <dd class="col-sm-8"><?php echo $sesi[0]['lokasi'] ?></dd>
                                            <dt class="col-sm-4">Tarikh</dt>
                                            <dd class="col-sm-8"><?php echo $sesi[0]['tarikh'] ?></dd>
                                            <dt class="col-sm-4">Slot Masa</dt>
                                            <dd class="col-sm-8"><?php echo $sesi[0]['slot_masa'] ?></dd>
                                            <dt class="col-sm-4">Keterangan</dt>
                                            <dd class="col-sm-8"><?php echo html_entity_decode($sesi[0]['keterangan']) ?></dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h4>SEKSYEN B : BUTIRAN PEMBERI PANDANGAN</h4>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body" style="font-size: 1rem !important;">
                                        <dl class="row">
                                            <dt class="col-sm-4">Nama</dt>
                                            <dd class="col-sm-8"><?php echo ($data[0]['nama_penuh']) ? $data[0]['nama_penuh']: '-' ?></dd>

                                            <dt class="col-sm-4">No. Kad Pengenalan/Passport</dt>
                                            <dd class="col-sm-8"><?php echo ($data[0]['ic_passport']) ? $data[0]['ic_passport']: '-' ?></dd>

                                            <dt class="col-sm-4">Nama Agensi/Organisasi</dt>
                                            <dd class="col-sm-8"><?php echo ($data[0]['nama_organisasi']) ? $data[0]['nama_organisasi']: '-' ?></dd>

                                            <dt class="col-sm-4">Jumlah Nama</dt>
                                            <dd class="col-sm-8"><?php echo ($data[0]['jumlah_nama']) ? $data[0]['jumlah_nama']: '-' ?></dd>

                                            <dt class="col-sm-4">Alamat Surat Menyurat</dt>
                                            <dd class="col-sm-8"><?php echo ($data[0]['alamat']) ? $data[0]['alamat']: '-' ?></dd>

                                            <dt class="col-sm-4">No. Telefon Rumah</dt>
                                            <dd class="col-sm-8"><?php echo ($data[0]['telefon_rumah']) ? $data[0]['telefon_rumah']: '-' ?></dd>

                                            <dt class="col-sm-4">No. Telefon Pejabat</dt>
                                            <dd class="col-sm-8"><?php echo ($data[0]['telefon_pejabat']) ? $data[0]['telefon_pejabat']: '-' ?></dd>

                                            <dt class="col-sm-4">No. Telefon Bimbit</dt>
                                            <dd class="col-sm-8"><?php echo ($data[0]['telefon_bimbit']) ? $data[0]['telefon_bimbit']: '-' ?></dd>
                                        </dl>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div>
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body" style="font-size: 1rem !important;">
                                        <dl class="row">
                                            <dt class="col-sm-4">Kehadiran</dt>
                                            <dd class="col-sm-8"><?php echo $data[0]['hadir'] ?></dd>
                                            <dt class="col-sm-4">Tarikh Terima</dt>
                                            <dd class="col-sm-8"><?php echo ($data[0]['tarikh_terima']) ? $data[0]['tarikh_terima']: '-' ?></dd>
                                            <dt class="col-sm-4">Jenis Borang</dt>
                                            <dd class="col-sm-8"><?php echo $data[0]['kategori'] ?></dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h4>SEKSYEN C : BUTIRAN PANDANGAN TERHADAP DRAF PELAN STRUKTUR KUALA LUMPUR 2040 (DRAF PSKL2040)</h4>
                        </div>

                        <div class="card-box">
                            <div class="ribbon-content" style="font-size: 1rem !important;">
                                <dl>
                                    <dt>Bentuk dan Kandungan</dt>
                                    <dd>
                                        <?php echo empty($data[0]['komen_bentuk_kandungan']) ? "Tiada komen" : urldecode(urldecode($data[0]['komen_bentuk_kandungan'])) ?>
                                    </dd>
                                    <dt>Lain-lain</dt>
                                    <dd>
                                        <?php print empty($data[0]['komen_lain_lain']) ? "Tiada komen" : urldecode(urldecode($data[0]['komen_lain_lain'])) ?>
                                    </dd>
                                </dl>

                                <?php if($ulasan): ?>
                                <hr>
                                <h4>Ulasan Pegawai</h4>
                                <dl>
                                    <dt>Ringkasan Keseluruhan</dt>
                                    <dd>
                                        <?php echo empty($ulasan[0]['ringkasan']) ? "Tiada" : $ulasan[0]['ringkasan'] ?>
                                    </dd>
                                    <dt>Nama Pegawai</dt>
                                    <dd><?php echo empty($ulasan[0]['nama_penuh']) ? "Tiada" : $ulasan[0]['nama_penuh'] ?></dd>

                                    <dt>Tarikh Kemaskini</dt>
                                    <dd><?php echo empty($ulasan[0]['last_update']) ? "Tiada" : $ulasan[0]['last_update'] ?></dd>
                                </dl>
                                <?php endif;?>
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
                                        <?php echo empty($value['cadangan']) ? "Tiada komen" : $value['cadangan'] ?>
                                    </dd>

                                    <dt class="col-sm-3">Justifikasi</dt>
                                    <dd class="col-sm-9">
                                        <?php echo empty($value['justifikasi']) ? "Tiada komen" : $value['justifikasi'] ?>
                                    </dd>
                                </dl>

                                <?php $ulasanLogic = false; if($ulasanMatlamat && $_SESSION['permission'] != 'user'): ?>
                                    <?php foreach ($ulasanMatlamat as $value_ulasan): ?>
                                        <?php if(in_array($value_ulasan['borang_matlamat_id'], array($value['id'])) == true): $ulasanLogic = true; ?>
                                        <hr>
                                        <h4>Ulasan Matlamat oleh Pegawai</h4>
                                        <dl class="row">
                                            <dt class="col-sm-3">Ulasan</dt>
                                            <dd class="col-sm-9">
                                                <?php echo empty($value_ulasan['ulasan']) ? "Tiada" : $value_ulasan['ulasan'] ?>
                                            </dd>

                                            <dt class="col-sm-3">Implikasi</dt>
                                            <dd class="col-sm-9">
                                                <?php echo empty($value_ulasan['implikasi']) ? "Tiada" : $value_ulasan['implikasi'] ?>
                                            </dd>

                                            <dt class="col-sm-3">Nama Pegawai</dt>
                                            <dd class="col-sm-9"><?php echo empty($value_ulasan['nama_penuh']) ? "Tiada" : $value_ulasan['nama_penuh'] ?></dd>

                                            <dt class="col-sm-3">Tarikh Kemaskini</dt>
                                            <dd class="col-sm-9"><?php echo empty($value_ulasan['last_update']) ? "Tiada" : $value_ulasan['last_update'] ?></dd>
                                        </dl>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                                
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                        <?php endforeach; endif;?>

                        <div class="card bg-default d-print-none">
                            <div class="card-body" style="font-size: 1rem !important;">
                                <h5 class="card-title">Lampiran A (Memorandum)</h5>

                                <?php $upload = array('id' => $data[0]['borang_id']); 
                                $get = $helper->get($upload);
                                if($get) echo "<div class=\"button-list\"><a href=\"".BASE_URL."files/".$get[0]['file']."\" class=\"btn btn-blue\"><span class=\"btn-label\"><i class=\"fas fa-file-pdf\"></i></span>Lampiran #</a></div>";
                                else echo "Tiada lampiran."; ?>

                            </div>
                        </div> <!-- end card-->

                        
                    </div><!-- end col-->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h4>SEKSYEN E : PENGESYORAN PANDANGAN (DIISI OLEH PANEL JKPPA)</h4>
                        </div>

                        <div class="card">
                            <div class="card-body" style="font-size: 1rem !important;">
                                <dl class="row">
                                    <dt class="col-sm-3">Penilaian Pandangan</dt>
                                    <dd class="col-sm-9">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-01">
                                            <label class="custom-control-label" for="penilaian-01">Berkaitan Draf PSKL2040</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-02">
                                            <label class="custom-control-label" for="penilaian-02">Tidak Berkaitan Draf PSKL2040</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-03">
                                            <label class="custom-control-label" for="penilaian-03">Aspek Pengurusan</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-04">
                                            <label class="custom-control-label" for="penilaian-04">Aspek Perundangan</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-05">
                                            <label class="custom-control-label" for="penilaian-05">Aspek Penguatkuasaan</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-06">
                                            <label class="custom-control-label" for="penilaian-06">Lain-lain</label>
                                        </div>
                                    </dd>
                                    <dt class="col-sm-3">Catatan/Ringkasan Pandangan Ahli Panel</dt>
                                    <dd class="col-sm-9">
                                        <textarea class="form-control" rows="10"></textarea>
                                    </dd>
                                    <dt class="col-sm-3">Pengesyoran Pandangan</dt>
                                    <dd class="col-sm-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="pengesyoran-diterima" name="pengesyoran" class="custom-control-input">
                                            <label class="custom-control-label" for="pengesyoran-diterima">Diterima</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="pengesyoran-ditolak" name="pengesyoran" class="custom-control-input">
                                            <label class="custom-control-label" for="pengesyoran-ditolak">Ditolak</label>
                                        </div>
                                    </dd>
                                    <dt class="col-sm-3">Justifikasi</dt>
                                    <dd class="col-sm-9">
                                        <textarea class="form-control" rows="10"></textarea>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h4>PENGESAHAN</h4>
                        </div>

                        <div class="card">
                            <div class="card-body" style="font-size: 1rem !important;">
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <div class="text-center mt-5">
                                            <hr>
                                            <p>(<?php echo $sesi[0]['chairman'] ? $sesi[0]['chairman']: '-' ?>)</p>
                                            <p>Pengerusi JKPPA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="text-center mt-5">
                                            <hr>
                                            <p>(<?php echo $sesi[0]['ajk_1'] ? $sesi[0]['ajk_1']: '-' ?>)</p>
                                            <p>Panel JKPPA</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center mt-5">
                                            <hr>
                                            <p>(<?php echo $sesi[0]['ajk_2'] ? $sesi[0]['ajk_2']: '-' ?>)</p>
                                            <p>Panel JKPPA</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center mt-5">
                                            <hr>
                                            <p>(<?php echo $sesi[0]['ajk_3'] ? $sesi[0]['ajk_3']: '-' ?>)</p>
                                            <p>Panel JKPPA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-secondary d-print-none" id="back"><i class="fe-arrow-left"></i> Kembali</button> <a class="btn btn-info d-print-none" href="javascript:window.print()"><i class="fe-printer"></i> Cetak</a>

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->