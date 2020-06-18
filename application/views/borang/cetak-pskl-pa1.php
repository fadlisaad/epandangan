        <div class="wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <h2 class="borang_id">ID: PSKL2040/DRAF/<?php echo $data[0]['borang_id'] ?></h2>
                        <div class="clearfix"></div>
                        <h2 class="borang_title">BORANG PA1</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <img src="<?php echo BASE_URL ?>assets/images/pskl-logo-bm.png" height="100px">
                            <h3>BORANG SESI PANEL PENDENGARAN AWAM</h3>
                            <h3>DRAF PELAN STRUKTUR KUALA LUMPUR 2040</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="title-box">
                            <h4 style="padding-left:10px;">SEKSYEN A : MAKLUMAT SESI JAWATANKUASA PENDENGARAN PANDANGAN AWAM</h4>
                        </div>

                        <div class="card title-box">
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
                                            <dd class="col-sm-8"><?php echo $dateHelper->convertDate($sesi[0]['tarikh']) ?></dd>
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
                        <div class="title-box">
                            <h4 style="padding-left:10px;">SEKSYEN B : BUTIRAN PEMBERI PANDANGAN</h4>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card title-box">
                                    <div class="card-body" style="font-size: 1rem !important;">
                                        <div class="row">
                                            <div class="col-md-6">
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
                                            </div>

                                            <div class="col-md-6">

                                                <dl class="row">
                                                    <dt class="col-sm-4">Kehadiran</dt>
                                                    <dd class="col-sm-8"><?php echo $data[0]['hadir'] ?></dd>
                                                    <dt class="col-sm-4">Tarikh Terima</dt>
                                                    <dd class="col-sm-8"><?php echo ($data[0]['tarikh_terima']) ? $dateHelper->convertDate($data[0]['tarikh_terima']): '-' ?></dd>
                                                    <dt class="col-sm-4">Jenis Borang</dt>
                                                    <dd class="col-sm-8"><?php echo $data[0]['kategori'] ?></dd>
                                                </dl>
                                            </div>
                                        </div>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="title-box">
                            <h4 style="padding-left:10px;">SEKSYEN C : BUTIRAN PANDANGAN TERHADAP DRAF PELAN STRUKTUR KUALA LUMPUR 2040 (DRAF PSKL2040)</h4>
                        </div>

                        <div class="card-box title-box">
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
                            </div>
                        </div>

                        <?php if($matlamat): $count = 0; ?>
                        <?php foreach ($matlamat as $value): $count++; ?>
                        <div class="card-box ribbon-box title-box">
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
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                        <?php endforeach; endif;?>

                    </div><!-- end col-->
                </div>

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->