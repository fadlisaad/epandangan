<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="borang_id">ID: PSKL2040/DRAF/<?php echo $data[0]['borang_id'] ?></h3>
                <div class="clearfix"></div>
                <h3 class="borang_title">BORANG PA3</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h4 class="butiran">E: PENGESYORAN URUS SETIA</h4>                         
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="9">
                                <?php echo empty($ulasanOverall[0]['ringkasan']) ? "Tiada" : $ulasanOverall[0]['ringkasan'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="font-weight-bold">Disediakan:</td>
                            <td colspan="3" class="font-weight-bold">Disemak:</td>
                            <td colspan="3" class="font-weight-bold">Disahkan:</td>
                        </tr>
                        <tr>
                            <td colspan="3"><br><br><br><br><br></td>
                            <td colspan="3"><br><br><br><br><br></td>
                            <td colspan="3"><br><br><br><br><br></td>
                        </tr>
                        <form id="add-pa3" name="add-pa3">
                        <tr>
                            <td width="5%" class="font-weight-bold">Nama</td>
                            <td width="1%">:</td>
                            <td width="27%">
                                <?php if(isset($dataPA3[0]['nama_1_text'])): ?>
                                <div class="dataPA3"><?php echo @$dataPA3[0]['nama_1_text'] ?></div>
                                <select id="nama_1" class="nama_1" name="nama_1">
                                    <option value="<?php echo @$dataPA3[0]['nama_1'] ?>" selected><?php echo @$dataPA3[0]['nama_1_text'] ?></option>
                                    <option value="">- Pilih -</option>
                                    <option value="nama_1_1">Nurulhalina binti Jalaluddin</option>
                                    <option value="nama_1_2">Mohd Saiful bin Ameri</option>
                                    <option value="nama_1_3">Abdullah Hakim bin Abdul Hamid</option>
                                    <option value="nama_1_4">Fatin Nadiah binti Abdul Malek</option>
                                    <option value="nama_1_5">Hasarudin bin Idris</option>
                                    <option value="nama_1_6">Noreza binti Dahari</option>
                                    <option value="nama_1_7">Roslen binti Mohd. Ariffin @ Ramli</option>
                                    <option value="nama_1_8">Nur Harniza binti Mohammad Zin</option>
                                    <option value="nama_1_9">Norazrin binti Ahmad Robangi</option>
                                    <option value="nama_1_10">Noor Azmi bin Mohd Salleh</option>
                                    <option value="nama_1_11">Ashraf Fudhail bin Abu Bakar</option>
                                    <option value="nama_1_12">Norliyana binti Kamal Arifin</option>
                                    <option value="nama_1_13">Zull Aniss Nabil'la binti Din</option>
                                    <option value="nama_1_14">Mohammad Izzuddin bin Ariffin</option>
                                    <option value="nama_1_15">Norliana binti Azahar</option>
                                    <option value="nama_1_16">Wan Abdul Hakim bin Wan Abdul Halim</option>
                                </select>
                                <?php else: ?>
                                <select id="nama_1" class="nama_1" name="nama_1">
                                    <option value="">- Pilih -</option>
                                    <option value="nama_1_1">Nurulhalina binti Jalaluddin</option>
                                    <option value="nama_1_2">Mohd Saiful bin Ameri</option>
                                    <option value="nama_1_3">Abdullah Hakim bin Abdul Hamid</option>
                                    <option value="nama_1_4">Fatin Nadiah binti Abdul Malek</option>
                                    <option value="nama_1_5">Hasarudin bin Idris</option>
                                    <option value="nama_1_6">Noreza binti Dahari</option>
                                    <option value="nama_1_7">Roslen binti Mohd. Ariffin @ Ramli</option>
                                    <option value="nama_1_8">Nur Harniza binti Mohammad Zin</option>
                                    <option value="nama_1_9">Norazrin binti Ahmad Robangi</option>
                                    <option value="nama_1_10">Noor Azmi bin Mohd Salleh</option>
                                    <option value="nama_1_11">Ashraf Fudhail bin Abu Bakar</option>
                                    <option value="nama_1_12">Norliyana binti Kamal Arifin</option>
                                    <option value="nama_1_13">Zull Aniss Nabil'la binti Din</option>
                                    <option value="nama_1_14">Mohammad Izzuddin bin Ariffin</option>
                                    <option value="nama_1_15">Norliana binti Azahar</option>
                                    <option value="nama_1_16">Wan Abdul Hakim bin Wan Abdul Halim</option>
                                </select>
                                <?php endif; ?>
                            </td>
                            <td width="5%" class="font-weight-bold">Nama</td>
                            <td width="1%">:</td>
                            <td width="27%">
                                <?php if(isset($dataPA3[0]['nama_2_text'])): ?>
                                <div class="dataPA3"><?php echo @$dataPA3[0]['nama_2_text'] ?></div>
                                <select id="nama_2" class="nama_2" name="nama_2">
                                    <option value="<?php echo @$dataPA3[0]['nama_2'] ?>" selected><?php echo @$dataPA3[0]['nama_2_text'] ?></option>
                                    <option value="">- Pilih -</option>
                                    <option value="nama_2_1">Siti Hanim binti Abdul Rahman</option>
                                    <option value="nama_2_2">Nurulhalina binti Jalaluddin</option>
                                    <option value="nama_2_3">Mohd Saiful bin Ameri</option>
                                    <option value="nama_2_4">Abdullah Hakim bin Abdul Hamid</option>
                                    <option value="nama_2_5">Fatin Nadiah binti Abdul Malek</option>
                                </select>
                                <?php else: ?>
                                <select id="nama_2" class="nama_2" name="nama_2">
                                    <option value="">- Pilih -</option>
                                    <option value="nama_2_1">Siti Hanim binti Abdul Rahman</option>
                                    <option value="nama_2_2">Nurulhalina binti Jalaluddin</option>
                                    <option value="nama_2_3">Mohd Saiful bin Ameri</option>
                                    <option value="nama_2_4">Abdullah Hakim bin Abdul Hamid</option>
                                    <option value="nama_2_5">Fatin Nadiah binti Abdul Malek</option>
                                </select>
                                <?php endif; ?>
                            </td>
                            <td width="5%" class="font-weight-bold">Nama</td>
                            <td width="1%">:</td>
                            <td width="27%">
                                <?php if(isset($dataPA3[0]['nama_3_text'])): ?>
                                <div class="dataPA3"><?php echo @$dataPA3[0]['nama_3_text'] ?></div>
                                <select id="nama_3" class="nama_3" name="nama_3">
                                    <option value="<?php echo @$dataPA3[0]['nama_3'] ?>" selected><?php echo @$dataPA3[0]['nama_3_text'] ?></option>
                                    <option value="">- Pilih -</option>
                                    <option value="nama_3_1">Hjh. Nor Fajariah binti Sulaiman</option>
                                    <option value="nama_3_2">Siti Hanim binti Abdul Rahman</option>
                                    <option value="nama_3_3">Nurulhalina binti Jalaluddin</option>
                                </select>
                                <?php else: ?>
                                <select id="nama_3" class="nama_3" name="nama_3">
                                    <option value="">- Pilih -</option>
                                    <option value="nama_3_1">Hjh. Nor Fajariah binti Sulaiman</option>
                                    <option value="nama_3_2">Siti Hanim binti Abdul Rahman</option>
                                    <option value="nama_3_3">Nurulhalina binti Jalaluddin</option>
                                </select>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Jawatan</td>
                            <td>:</td>
                            <td>
                                <?php if(isset($dataPA3[0]['jawatan_1'])): ?>
                                <div class="dataPA3"><?php echo @$dataPA3[0]['jawatan_1_text'] ?></div>
                                <select id="jawatan_1" class="jawatan_1" name="jawatan_1">
                                    <option value="<?php echo @$dataPA3[0]['jawatan_1'] ?>" selected><?php echo @$dataPA3[0]['jawatan_1_text'] ?></option>
                                    <option value="jawatan_1_1" class="nama_1_1">Ketua Pegawai Perancang Bandar dan Desa</option>
                                    <option value="jawatan_1_2" class="nama_1_2">Pegawai Perancang Bandar & Desa Kanan</option>
                                    <option value="jawatan_1_3" class="nama_1_3 nama_1_4">Pegawai Perancang Bandar & Desa</option>
                                    <option value="jawatan_1_4" class="nama_1_5 nama_1_6 nama_1_7 nama_1_8 nama_1_9 nama_1_10 nama_1_11 nama_1_12 nama_1_13 nama_1_14 nama_1_15 nama_1_16">Penolong Pegawai Perancang Bandar & Desa</option>
                                </select>
                                <?php else: ?>
                                <select id="jawatan_1" class="jawatan_1" name="jawatan_1">
                                    <option value="jawatan_1_1" class="nama_1_1">Ketua Pegawai Perancang Bandar dan Desa</option>
                                    <option value="jawatan_1_2" class="nama_1_2">Pegawai Perancang Bandar & Desa Kanan</option>
                                    <option value="jawatan_1_3" class="nama_1_3 nama_1_4">Pegawai Perancang Bandar & Desa</option>
                                    <option value="jawatan_1_4" class="nama_1_5 nama_1_6 nama_1_7 nama_1_8 nama_1_9 nama_1_10 nama_1_11 nama_1_12 nama_1_13 nama_1_14 nama_1_15 nama_1_16">Penolong Pegawai Perancang Bandar & Desa</option>
                                </select>
                                <?php endif; ?>
                            </td>
                            <td class="font-weight-bold">Jawatan</td>
                            <td>:</td>
                            <td>
                                <?php if(isset($dataPA3[0]['jawatan_2'])): ?>
                                <div class="dataPA3"><?php echo @$dataPA3[0]['jawatan_2_text'] ?></div>
                                <select id="jawatan_2" class="jawatan_2" name="jawatan_2">
                                    <option value="<?php echo @$dataPA3[0]['jawatan_2'] ?>" selected><?php echo @$dataPA3[0]['jawatan_2_text'] ?></option>
                                    <option value="jawatan_2_1" class="nama_2_1">Timbalan Pengarah</option>
                                    <option value="jawatan_2_2" class="nama_2_2">Ketua Pegawai Perancang Bandar dan Desa</option>
                                    <option value="jawatan_2_3" class="nama_2_3">Pegawai Perancang Bandar & Desa Kanan</option>
                                    <option value="jawatan_2_4" class="nama_2_4 nama_2_5">Pegawai Perancang Bandar & Desa</option>
                                </select>
                                <?php else: ?>
                                <select id="jawatan_2" class="jawatan_2" name="jawatan_2">
                                    <option value="jawatan_2_1" class="nama_2_1">Timbalan Pengarah</option>
                                    <option value="jawatan_2_2" class="nama_2_2">Ketua Pegawai Perancang Bandar dan Desa</option>
                                    <option value="jawatan_2_3" class="nama_2_3">Pegawai Perancang Bandar & Desa Kanan</option>
                                    <option value="jawatan_2_4" class="nama_2_4 nama_2_5">Pegawai Perancang Bandar & Desa</option>
                                </select>
                                <?php endif; ?>
                            </td>
                            <td class="font-weight-bold">Jawatan</td>
                            <td>:</td>
                            <td>
                                <?php if(isset($dataPA3[0]['jawatan_3'])): ?>
                                <div class="dataPA3"><?php echo @$dataPA3[0]['jawatan_3_text'] ?></div>
                                <select id="jawatan_3" class="jawatan_3" name="jawatan_3">
                                    <option value="<?php echo @$dataPA3[0]['jawatan_3'] ?>" selected><?php echo @$dataPA3[0]['jawatan_3_text'] ?></option>
                                    <option value="jawatan_3_1" class="nama_3_1">Timbalan Pengarah Kanan</option>
                                    <option value="jawatan_3_2" class="nama_3_2">Timbalan Pengarah</option>
                                    <option value="jawatan_3_3" class="nama_3_3">Ketua Pegawai Perancang Bandar dan Desa</option>
                                </select>
                                <?php else: ?>
                                <select id="jawatan_3" class="jawatan_3" name="jawatan_3">
                                    <option value="jawatan_3_1" class="nama_3_1">Timbalan Pengarah Kanan</option>
                                    <option value="jawatan_3_2" class="nama_3_2">Timbalan Pengarah</option>
                                    <option value="jawatan_3_3" class="nama_3_3">Ketua Pegawai Perancang Bandar dan Desa</option>
                                </select>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Tarikh</td>
                            <td>:</td>
                            <td>
                                <?php if(isset($dataPA3[0]['tarikh_1'])): ?>
                                <div class="dataPA3"><?php echo @$dateHelper->convertDate($dataPA3[0]['tarikh_1']) ?></div>
                                <input type="date" id="tarikh_1" name="tarikh_1" value="<?php echo @$dataPA3[0]['tarikh_1'] ?>">
                                <?php else: ?>
                                <input type="date" id="tarikh_1" name="tarikh_1">
                                <?php endif; ?>
                            </td>
                            <td class="font-weight-bold">Tarikh</td>
                            <td>:</td>
                            <td>
                                <?php if(isset($dataPA3[0]['tarikh_2'])): ?>
                                <div class="dataPA3"><?php echo @$dateHelper->convertDate($dataPA3[0]['tarikh_2']) ?></div>
                                <input type="date" name="tarikh_2" id="tarikh_2" value="<?php echo @$dataPA3[0]['tarikh_2'] ?>">
                                <?php else: ?>
                                <input type="date" name="tarikh_2" id="tarikh_2">
                                <?php endif; ?>
                            </td>
                            <td class="font-weight-bold">Tarikh</td>
                            <td>:</td>
                            <td>
                                <?php if(isset($dataPA3[0]['tarikh_3'])): ?>
                                <div class="dataPA3"><?php echo @$dateHelper->convertDate($dataPA3[0]['tarikh_3']) ?></div>
                                <input type="date" name="tarikh_3" id="tarikh_3" value="<?php echo @$dataPA3[0]['tarikh_3'] ?>">
                                <?php else: ?>
                                <input type="date" name="tarikh_3" id="tarikh_3">
                                <?php endif; ?>
                            </td>
                        </tr>
                        <input type="hidden" name="borang_id" value="<?php echo $data[0]['borang_id'] ?>">
                        </form>
                    </tbody>
                </table>
            </div>
        </div>

        <?php if($dataPA3): ?>
        <button class="btn btn-success" id="ubah-pa3">Ubah Bahagian E</button>
        <button class="btn btn-primary" id="update-pa3">Kemaskini Bahagian E</button>
        <?php else: ?>
        <button class="btn btn-primary" id="save-pa3">Simpan Bahagian E</button>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <h4 class="butiran">F. PENGESYORAN PANDANGAN (DI ISI OLEH AHLI PANEL)</h4>
                
                <?php
                foreach ($matlamat as $pegawai) {
                    echo "<table class=\"table table-bordered\"><tr>
                        <td width=\"100px\">Matlamat</td>
                        <td>".$pegawai['matlamat']."</td>
                    </tr>
                    <tr>
                        <td>Halatuju</td>
                        <td>".$pegawai['halatuju']."</td>
                    </tr>
                    <tr>
                        <td>Tindakan</td>
                        <td>".$pegawai['tindakan']."</td>
                    </tr>
                    <tr>
                        <td>Cadangan</td>
                        <td>".$pegawai['cadangan']."</td>
                    </tr>
                    <tr>
                        <td>Justifikasi</td>
                        <td>".$pegawai['justifikasi']."</td>
                    </tr></table>
                    <button type=\"button\" class=\"btn btn-primary waves-effect waves-light show-pegawai-button\" data-toggle=\"modal\" data-target=\"#myModal\">Tambah Catatan/justifikasi/pengesyoran</button>";
                }
                ?>
                <form id="add-ulasan-panel" name="add-ulasan-panel">
                <table class="table table-bordered">
                    <tr>
                        <td><strong>1. Pertimbangan dan Pandangan Jawatankuasa</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="showPanel">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="berkaitan" value="Berkaitan Draf PSKL2040" name="penilaian[]">
                                    <label class="custom-control-label" for="berkaitan">Berkaitan Draf PSKL2040</label>
                                </div>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="pandangan-diterima" value="Pandangan Diterima" name="penilaian[]">
                                    <label class="custom-control-label" for="pandangan-diterima">Pandangan Diterima</label>
                                </div>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="pandangan-tidak-diterima" value="Pandangan Tidak Diterima" name="penilaian[]">
                                    <label class="custom-control-label" for="pandangan-tidak-diterima">Pandangan Tidak Diterima</label>
                                </div>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="penambahbaikan-draf-pskl2040" value="Penambahbaikan Draf PSKL2040" name="penilaian[]">
                                    <label class="custom-control-label" for="penambahbaikan-draf-pskl2040">Pandangan Tidak Diterima</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="tidak-berkaitan" value="Tidak Berkaitan Draf PSKL2040" name="penilaian[]">
                                    <label class="custom-control-label" for="tidak-berkaitan">Tidak Berkaitan Draf PSKL2040</label>
                                </div>
                                
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="kajian-terperinci" value="Kajian Terperinci oleh PTKL2040" name="penilaian[]">
                                    <label class="custom-control-label" for="kajian-terperinci">Kajian Terperinci oleh PTKL2040</label>
                                </div>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="garis-panduan" value="Garis panduan / Kajian terperinci" name="penilaian[]">
                                    <label class="custom-control-label" for="garis-panduan">Garis panduan / Kajian terperinci</label>
                                </div>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="lain-lain" value="Lain-lain (Pengurusan, Penguatkuasaan, Perundangan, Penyelenggaraan, Pelaksanaan)" name="penilaian[]">
                                    <label class="custom-control-label" for="lain-lain">Lain-lain (Pengurusan, Penguatkuasaan, Perundangan, Penyelenggaraan, Pelaksanaan)</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="borang_id" value="<?php echo $data[0]['borang_id'] ?>">
                <?php if(isset($ulasanPanel[0]['cadangan'])): ?>
                <input type="hidden" name="id" value="<?php echo $ulasanPanel[0]['id'] ?>">
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <?php if(isset($ulasanPanel[0]['tarikh_panel'])): ?>
                    <div class="custom-control custom-checkbox ulasanPanel">
                        <input type="checkbox" class="custom-control-input" id="tarikh_panel" value="1" name="tarikh_panel" checked>
                        <label class="custom-control-label" for="tarikh_panel">Telah disemak oleh Pengerusi Panel</label>
                    </div>
                    <?php else: ?>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="tarikh_panel" value="1" name="tarikh_panel">
                        <label class="custom-control-label" for="tarikh_panel">Telah disemak oleh Pengerusi Panel</label>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body m-b-5">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 offset-md-4 offset-sm-4">
                                <div class="text-center mt-5">
                                    <p>Disahkan:</p>
                                    <br><br><br><br><br><br><br>
                                    <div class="border-top-2 text-center">---------------------------------------</div>
                                    <p>Pengerusi Panel</p>
                                    <p class="font-weight-bold"><?php echo @$jkppa[0]['chairman'] ?></p>
                                    <?php if(isset($ulasanPanel[0]['tarikh_disahkan_1'])): ?>
                                    <div class="ulasanPanel">Tarikh: <?php echo @$dateHelper->convertDate($ulasanPanel[0]['tarikh_disahkan_1']) ?></div>
                                    <input type="date" id="tarikh_disahkan_1" name="tarikh_disahkan_1" value="<?php echo @$ulasanPanel[0]['tarikh_disahkan_1'] ?>" class="hidePanel">
                                    <?php else: ?>
                                    Tarikh: <span class="date-border" style="display: none;">____________</span><input type="date" id="tarikh_disahkan_1" name="tarikh_disahkan_1" class="date">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php if(isset($jkppa[0]['ajk_3']) && ($jkppa[0]['ajk_3'] != NULL) && $jkppa[0]['ajk_4'] == NULL){
                                $col = 4;
                            }elseif(isset($jkppa[0]['ajk_4']) && ($jkppa[0]['ajk_4'] != NULL)){
                                $col = 3;
                            }else{
                                $col = 6;
                            } ?>
                            <div class="col-md-<?php echo $col ?> col-sm-<?php echo $col ?>">
                                <div class="text-center mt-5">
                                    <div class="border-top-2 text-center">---------------------------------------</div>
                                    <p>Ahli Panel 2</p>
                                    <p class="font-weight-bold"><?php echo @$jkppa[0]['ajk_1'] ?></p>
                                    <?php if(isset($ulasanPanel[0]['tarikh_disahkan_2'])): ?>
                                    <div class="ulasanPanel">Tarikh: <?php echo @$dateHelper->convertDate($ulasanPanel[0]['tarikh_disahkan_2']) ?></div>
                                    <input type="date" id="tarikh_disahkan_2" name="tarikh_disahkan_2" value="<?php echo @$ulasanPanel[0]['tarikh_disahkan_2'] ?>" class="hidePanel">
                                    <?php else: ?>
                                    Tarikh: <span class="date-border" style="display: none;">____________</span><input type="date" id="tarikh_disahkan_2" name="tarikh_disahkan_2" class="date">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-<?php echo $col ?> col-sm-<?php echo $col ?>">
                                <div class="text-center mt-5">
                                    <div class="border-top-2 text-center">---------------------------------------</div>
                                    <p>Ahli Panel 3</p>
                                    <p class="font-weight-bold"><?php echo @$jkppa[0]['ajk_2'] ?></p>
                                    <?php if(isset($ulasanPanel[0]['tarikh_disahkan_3'])): ?>
                                    <div class="ulasanPanel">Tarikh: <?php echo @$dateHelper->convertDate($ulasanPanel[0]['tarikh_disahkan_3']) ?></div>
                                    <input type="date" id="tarikh_disahkan_3" name="tarikh_disahkan_3" value="<?php echo @$ulasanPanel[0]['tarikh_disahkan_3'] ?>" class="hidePanel">
                                    <?php else: ?>
                                    Tarikh: <span class="date-border" style="display: none;">____________</span><input type="date" id="tarikh_disahkan_3" name="tarikh_disahkan_3" class="date">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if(isset($jkppa[0]['ajk_3']) && ($jkppa[0]['ajk_3'] != NULL)): ?>
                            <div class="col-md-<?php echo $col ?> col-sm-<?php echo $col ?>">
                                <div class="text-center mt-5">
                                    <div class="border-top-2 text-center">---------------------------------------</div>
                                    <p>Ahli Panel 4</p>
                                    <p class="font-weight-bold"><?php echo @$jkppa[0]['ajk_3'] ?></p>
                                    <?php if(isset($ulasanPanel[0]['tarikh_disahkan_4'])): ?>
                                    <div class="ulasanPanel">Tarikh: <?php echo @$dateHelper->convertDate($ulasanPanel[0]['tarikh_disahkan_4']) ?></div>
                                    <input type="date" id="tarikh_disahkan_4" name="tarikh_disahkan_4" value="<?php echo @$ulasanPanel[0]['tarikh_disahkan_4'] ?>" class="hidePanel">
                                    <?php else: ?>
                                    Tarikh: <span class="date-border" style="display: none;">____________</span><input type="date" id="tarikh_disahkan_4" name="tarikh_disahkan_4" class="date">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if(isset($jkppa[0]['ajk_4']) && ($jkppa[0]['ajk_4'] != NULL)): ?>
                            <div class="col-md-3 col-sm-3">
                                <div class="text-center mt-5">
                                    <div class="border-top-2 text-center">---------------------------------------</div>
                                    <p>Ahli Panel 5</p>
                                    <p class="font-weight-bold"><?php echo @$jkppa[0]['ajk_4'] ?></p>
                                    <?php if(isset($ulasanPanel[0]['tarikh_disahkan_5'])): ?>
                                    <div class="ulasanPanel">Tarikh: <?php echo @$dateHelper->convertDate($ulasanPanel[0]['tarikh_disahkan_5']) ?></div>
                                    <input type="date" id="tarikh_disahkan_5" name="tarikh_disahkan_5" value="<?php echo @$ulasanPanel[0]['tarikh_disahkan_5'] ?>" class="hidePanel">
                                    <?php else: ?>
                                    Tarikh: <span class="date-border" style="display: none;">____________</span><input type="date" id="tarikh_disahkan_5" name="tarikh_disahkan_5" class="date">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <table class="table table-bordered">
                        <td>
                    <p><strong>Nota : Untuk Kegunaan Urus Setia</strong></p>
                    <p>Maklumat dalam pangkalan data telah dikemaskini:</p>
                    <dl class="row">
                        <dt class="col-lg-4">Nama Pegawai / Urus Setia</dt>
                        <dd class="col-lg-8">
                            <?php if(isset($ulasanPanel[0]['pegawai_1'])): ?>
                            <div class="ulasanPanel"><?php echo @$ulasanPanel[0]['pegawai_1'] ?></div>
                            <select class="pegawai_1 hidePanel" name="pegawai_1">
                                <option value="<?php echo @$ulasanPanel[0]['pegawai_1'] ?>" selected><?php echo @$ulasanPanel[0]['pegawai_1'] ?></option>
                                <option value="">- Pilih -</option>
                                <option value="Nurulhalina binti Jalaluddin">Nurulhalina binti Jalaluddin</option>
                                <option value="Mohd Saiful bin Ameri">Mohd Saiful bin Ameri</option>
                                <option value="Abdullah Hakim bin Abdul Hamid">Abdullah Hakim bin Abdul Hamid</option>
                                <option value="Fatin Nadiah binti Abdul Malek">Fatin Nadiah binti Abdul Malek</option>
                                <option value="Hasarudin bin Idris">Hasarudin bin Idris</option>
                                <option value="Noreza binti Dahari">Noreza binti Dahari</option>
                                <option value="Roslen binti Mohd. Ariffin @ Ramli">Roslen binti Mohd. Ariffin @ Ramli</option>
                                <option value="Nur Harniza binti Mohammad Zin">Nur Harniza binti Mohammad Zin</option>
                                <option value="Norazrin binti Ahmad Robangi">Norazrin binti Ahmad Robangi</option>
                                <option value="Noor Azmi bin Mohd Salleh">Noor Azmi bin Mohd Salleh</option>
                                <option value="Ashraf Fudhail bin Abu Bakar">Ashraf Fudhail bin Abu Bakar</option>
                                <option value="Norliyana binti Kamal Arifin">Norliyana binti Kamal Arifin</option>
                                <option value="Zull Aniss Nabil'la binti Din">Zull Aniss Nabil'la binti Din</option>
                                <option value="Mohammad Izzuddin bin Ariffin">Mohammad Izzuddin bin Ariffin</option>
                                <option value="Norliana binti Azahar">Norliana binti Azahar</option>
                                <option value="Wan Abdul Hakim bin Wan Abdul Halim">Wan Abdul Hakim bin Wan Abdul Halim</option>
                            </select>
                            <?php else: ?>
                            <select class="pegawai_1" name="pegawai_1">
                                <option value="">- Pilih -</option>
                                <option value="Nurulhalina binti Jalaluddin">Nurulhalina binti Jalaluddin</option>
                                <option value="Mohd Saiful bin Ameri">Mohd Saiful bin Ameri</option>
                                <option value="Abdullah Hakim bin Abdul Hamid">Abdullah Hakim bin Abdul Hamid</option>
                                <option value="Fatin Nadiah binti Abdul Malek">Fatin Nadiah binti Abdul Malek</option>
                                <option value="Hasarudin bin Idris">Hasarudin bin Idris</option>
                                <option value="Noreza binti Dahari">Noreza binti Dahari</option>
                                <option value="Roslen binti Mohd. Ariffin @ Ramli">Roslen binti Mohd. Ariffin @ Ramli</option>
                                <option value="Nur Harniza binti Mohammad Zin">Nur Harniza binti Mohammad Zin</option>
                                <option value="Norazrin binti Ahmad Robangi">Norazrin binti Ahmad Robangi</option>
                                <option value="Noor Azmi bin Mohd Salleh">Noor Azmi bin Mohd Salleh</option>
                                <option value="Ashraf Fudhail bin Abu Bakar">Ashraf Fudhail bin Abu Bakar</option>
                                <option value="Norliyana binti Kamal Arifin">Norliyana binti Kamal Arifin</option>
                                <option value="Zull Aniss Nabil'la binti Din">Zull Aniss Nabil'la binti Din</option>
                                <option value="Mohammad Izzuddin bin Ariffin">Mohammad Izzuddin bin Ariffin</option>
                                <option value="Norliana binti Azahar">Norliana binti Azahar</option>
                                <option value="Wan Abdul Hakim bin Wan Abdul Halim">Wan Abdul Hakim bin Wan Abdul Halim</option>
                            </select>
                            <?php endif; ?>
                        </dd>

                        <dt class="col-lg-4">Nama Pegawai / Urus Setia</dt>
                        <dd class="col-lg-8">
                            <?php if(isset($ulasanPanel[0]['pegawai_2'])): ?>
                            <div class="ulasanPanel"><?php echo @$ulasanPanel[0]['pegawai_2'] ?></div>
                            <select class="pegawai_2 hidePanel" name="pegawai_2">
                                <option value="<?php echo @$ulasanPanel[0]['pegawai_2'] ?>" selected><?php echo @$ulasanPanel[0]['pegawai_2'] ?></option>
                                <option value="">- Pilih -</option>
                                <option value="Nurulhalina binti Jalaluddin">Nurulhalina binti Jalaluddin</option>
                                <option value="Mohd Saiful bin Ameri">Mohd Saiful bin Ameri</option>
                                <option value="Abdullah Hakim bin Abdul Hamid">Abdullah Hakim bin Abdul Hamid</option>
                                <option value="Fatin Nadiah binti Abdul Malek">Fatin Nadiah binti Abdul Malek</option>
                                <option value="Hasarudin bin Idris">Hasarudin bin Idris</option>
                                <option value="Noreza binti Dahari">Noreza binti Dahari</option>
                                <option value="Roslen binti Mohd. Ariffin @ Ramli">Roslen binti Mohd. Ariffin @ Ramli</option>
                                <option value="Nur Harniza binti Mohammad Zin">Nur Harniza binti Mohammad Zin</option>
                                <option value="Norazrin binti Ahmad Robangi">Norazrin binti Ahmad Robangi</option>
                                <option value="Noor Azmi bin Mohd Salleh">Noor Azmi bin Mohd Salleh</option>
                                <option value="Ashraf Fudhail bin Abu Bakar">Ashraf Fudhail bin Abu Bakar</option>
                                <option value="Norliyana binti Kamal Arifin">Norliyana binti Kamal Arifin</option>
                                <option value="Zull Aniss Nabil'la binti Din">Zull Aniss Nabil'la binti Din</option>
                                <option value="Mohammad Izzuddin bin Ariffin">Mohammad Izzuddin bin Ariffin</option>
                                <option value="Norliana binti Azahar">Norliana binti Azahar</option>
                                <option value="Wan Abdul Hakim bin Wan Abdul Halim">Wan Abdul Hakim bin Wan Abdul Halim</option>
                            </select>
                            <?php else: ?>
                            <select class="pegawai_2" name="pegawai_2">
                                <option value="">- Pilih -</option>
                                <option value="Nurulhalina binti Jalaluddin">Nurulhalina binti Jalaluddin</option>
                                <option value="Mohd Saiful bin Ameri">Mohd Saiful bin Ameri</option>
                                <option value="Abdullah Hakim bin Abdul Hamid">Abdullah Hakim bin Abdul Hamid</option>
                                <option value="Fatin Nadiah binti Abdul Malek">Fatin Nadiah binti Abdul Malek</option>
                                <option value="Hasarudin bin Idris">Hasarudin bin Idris</option>
                                <option value="Noreza binti Dahari">Noreza binti Dahari</option>
                                <option value="Roslen binti Mohd. Ariffin @ Ramli">Roslen binti Mohd. Ariffin @ Ramli</option>
                                <option value="Nur Harniza binti Mohammad Zin">Nur Harniza binti Mohammad Zin</option>
                                <option value="Norazrin binti Ahmad Robangi">Norazrin binti Ahmad Robangi</option>
                                <option value="Noor Azmi bin Mohd Salleh">Noor Azmi bin Mohd Salleh</option>
                                <option value="Ashraf Fudhail bin Abu Bakar">Ashraf Fudhail bin Abu Bakar</option>
                                <option value="Norliyana binti Kamal Arifin">Norliyana binti Kamal Arifin</option>
                                <option value="Zull Aniss Nabil'la binti Din">Zull Aniss Nabil'la binti Din</option>
                                <option value="Mohammad Izzuddin bin Ariffin">Mohammad Izzuddin bin Ariffin</option>
                                <option value="Norliana binti Azahar">Norliana binti Azahar</option>
                                <option value="Wan Abdul Hakim bin Wan Abdul Halim">Wan Abdul Hakim bin Wan Abdul Halim</option>
                            </select>
                            <?php endif; ?>
                        </dd>

                        <dt class="col-lg-4">Tarikh</dt>
                        <dd class="col-lg-8">
                            <?php if(isset($ulasanPanel[0]['tarikh_urusetia'])): ?>
                            <div class="ulasanPanel"><?php echo @$dateHelper->convertDate($ulasanPanel[0]['tarikh_urusetia']) ?></div>
                            <input type="date" id="tarikh_urusetia" name="tarikh_urusetia" value="<?php echo @$ulasanPanel[0]['tarikh_urusetia'] ?>" class="hidePanel">
                            <?php else: ?>
                            <input type="date" id="tarikh_urusetia" name="tarikh_urusetia">
                            <?php endif; ?>
                        </dd>
                    </dl>
                </td>
                    </table>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Tambah Ulasan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="cadangan"> 1. Catatan maklumbalas oleh ahli panel Jawatankuasa Pendengaran Pandangan Awam (JKKPA)<span class="text-danger">*</span></label>
                            <textarea class="form-control summernote" rows="5" name="catatan" form="add-ulasan-panel"><?php echo @$ulasanPanel[0]['catatan'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="justifikasi">4. Justifikasi Pengesyoran <span class="text-danger">*</span></label>
                            <textarea class="form-control summernote" name="justifikasi" rows="5" form="add-ulasan-panel"><?php echo @$ulasanPanel[0]['justifikasi'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="justifikasi">5. Cadangan Bagi Penambahbaikan Draf PSKL2040</label>
                            <textarea class="form-control summernote" name="cadangan" rows="5" form="add-ulasan-panel"><?php echo @$ulasanPanel[0]['cadangan'] ?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-info update-ulasan-panel btn-sm" data-dismiss="modal"><i class="fas fa-plus-circle"></i> Simpan/Kemaskini Bahagian F (1,4,5)</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <?php if($ulasanPanel): ?>
        <button class="btn btn-success" type="button" id="ubah-ulasan-panel">Ubah Bahagian F dan Urus Setia</button>
        <button class="btn btn-primary update-ulasan-panel" id="update-ulasan-panel">Kemaskini</button>
        <button type="button" class="btn btn-primary waves-effect waves-light show-ubah-button" data-toggle="modal" data-target="#myModal">Ubah Bahagian F (1)</button>
        <?php else: ?>
        <button class="btn btn-info" id="save-ulasan-panel">Simpan Bahagian F dan Urus Setia</button>
        <button type="button" class="btn btn-primary waves-effect waves-light show-ubah-button" data-toggle="modal" data-target="#myModal">Tambah Bahagian F (1)</button>
        <?php endif; ?>
        </form>

    </div>
</div>