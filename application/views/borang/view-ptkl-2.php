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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">PBRKL 2020</a></li>
                                    <li class="breadcrumb-item active">PBRKL2020/DRAF/2/<?php echo $data[0]['borang_id'] ?></li>
                                </ol>
                            </div>
                            <h4 class="page-title">PBRKL2020/DRAF/2/<?php echo $data[0]['borang_id'] ?></h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-9">
                        <div class="card-box ribbon-box">
                            <div class="ribbon ribbon-primary float-right"><i class="fas fa-user"></i> <?php echo $data[0]['kategori'] ?></div>
                            <h4 class="header-title">Bahagian A: Pandangan anda terhadap Draf Perubahan 2 PBRKL 2020</h4>
                            <div class="ribbon-content">
                                <dl class="row">
                                    <dt class="col-sm-3">Jilid Laporan</dt>
                                    <dd class="col-sm-9">Jilid 1</dd>

                                    <dt class="col-sm-3">Muka Surat</dt>
                                    <dd class="col-sm-9"><?php echo $data[0]['muka_surat'] ?></dd>

                                    <dt class="col-sm-3">No. Pelan Indexs</dt>
                                    <dd class="col-sm-9"><?php echo $data[0]['peta_indeks'] ?></dd>

                                    <dt class="col-sm-3">Pandangan Awam</dt>
                                    <dd class="col-sm-9">
                                        <p><?php echo $data[0]['pandangan_awam'] ?></p>
                                    </dd>

                                    <dt class="col-sm-3">Cadangan Penambahbaikan</dt>
                                    <dd class="col-sm-9">
                                        <p><?php echo @$data[0]['cadangan'] ?></p>
                                    </dd>
                                </dl>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->

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
                                <button class="btn btn-secondary" id="back">Kembali</button>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
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
                                <h5 class="card-title">Lampiran A & C</h5>

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
                                            <td><?php echo ($data[0]['pegawai']) ? $data[0]['pegawai']: 'Tiada' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tarikh Key-in</td>
                                            <td><?php echo ($data[0]['tarikh_key_in']) ? $data[0]['tarikh_key_in']: 'Tiada' ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-print-none">
                                <button class="btn btn-warning" id="tindakan" data-toggle="modal" data-target="#tindakan-modal">Tindakan</button>
                                <a class="btn btn-info" href="<?php echo BASE_URL."borang/cetak_ptkl_2/".$data[0]['borang_id'] ?>">Cetak</a>
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
                        <form id="tindakan" method="post">
                            <div class="form-group row">
                                <label for="topik" class="control-label col-md-4">Topik</label>
                                <select class="col-md-8" name="topik_id" id="topik">
                                    <option value="<?php echo @$tindakan[0]['topik_id'] ?>" selected><?php echo @$tindakan[0]['topik'] ?></option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="zon" class="control-label col-md-4">Zon Strategik</label>
                                <select class="col-md-8" name="zon_id" id="zon">
                                    <option value="<?php echo @$tindakan[0]['zon_id'] ?>" selected><?php echo @$tindakan[0]['zon'] ?></option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="sektor" class="control-label col-md-4">Sektor</label>
                                <select class="col-md-8" name="sektor_id" id="sektor">
                                    <option value="<?php echo @$tindakan[0]['sektor_id'] ?>" selected><?php echo @$tindakan[0]['sektor'] ?></option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="sesi" class="control-label col-md-4">Sesi Pendengaran</label>
                                <select class="col-md-8" name="sesi_id" id="sesi">
                                    <option value="<?php echo @$tindakan[0]['sesi_id'] ?>" selected><?php echo @$tindakan[0]['sesi'] ?></option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="control-label col-md-4">Status</label>
                                <select class="col-md-8" name="status" id="status">
                                    <option value="<?php echo @$tindakan[0]['status'] ?>" selected><?php echo @$tindakan[0]['status'] ?></option>
                                    <option value="Diterima">Diterima</option>
                                    <option value="Ditolak">Ditolak</option>
                                    <option value="Ambil maklum">Ambil Maklum</option>
                                </select>
                            </div>
                            <input type="hidden" id="borang_id" name="borang_id" value="<?php echo $data[0]['borang_id'] ?>">
                            <input type="hidden" id="pegawai_id" name="pegawai_id" value="<?php echo $_SESSION['user_id'] ?>">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-info waves-effect waves-light" data-dismiss="modal" id="simpan">Simpan</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->