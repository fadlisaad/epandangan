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
        <button class="btn btn-success" id="ubah-pa3">Ubah</button>
        <button class="btn btn-primary" id="update-pa3">Kemaskini</button>
        <?php else: ?>
        <button class="btn btn-primary" id="save-pa3">Simpan</button>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <h4 class="butiran">F. PENGESYORAN PANDANGAN (DI ISI OLEH AHLI PANEL)</h4>
                <form id="add-ulasan-panel" name="add-ulasan-panel">
                <table class="table table-bordered">
                    <tr>
                        <td><strong>1. Catatan maklumbalas oleh ahli panel Jawatankuasa Pendengaran Pandangan Awam (JKKPA)</strong></td>
                    </tr>
                    <tr>
                        <td><?php if(isset($ulasanPanel[0]['catatan'])): ?>
                            <p class="ulasanPanel"><?php echo $ulasanPanel[0]['catatan'] ?></p>
                            <textarea class="form-control hidePanel" rows="10" name="catatan"><?php echo $ulasanPanel[0]['catatan'] ?></textarea>
                            <?php else: ?>
                            <textarea class="form-control showPanel" rows="10" name="catatan"></textarea>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>2. Kategori Pengesyoran Pandangan Yang Didengar (Sila Tanda Bagi Yang Berkenaan)</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <?php if(isset($ulasanPanel[0]['penilaian'])): $penilaian = unserialize($ulasanPanel[0]['penilaian']); foreach ($penilaian as $value):
                                switch ($value) {
                                    case 'Berkaitan Draf PSKL2040':
                                        $checkbox_id_01 = 'checked';
                                        break;

                                    case 'Tidak Berkaitan Draf PSKL2040':
                                        $checkbox_id_02 = 'checked';
                                        break;

                                    case 'Aspek Pengurusan':
                                        $checkbox_id_03 = 'checked';
                                        break;

                                    case 'Aspek Perundangan':
                                        $checkbox_id_04 = 'checked';
                                        break;

                                    case 'Aspek Penguatkuasaan':
                                        $checkbox_id_05 = 'checked';
                                        break;

                                    case 'Lain-lain':
                                        $checkbox_id_06 = 'checked';
                                        break;
                                }
                            ?>
                            <?php endforeach; ?>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="penilaian-01" value="Berkaitan Draf PSKL2040" name="penilaian[]" <?php echo @$checkbox_id_01 ?>>
                                    <label class="custom-control-label" for="penilaian-01">Berkaitan Draf PSKL2040</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="penilaian-02" value="Tidak Berkaitan Draf PSKL2040" name="penilaian[]" <?php echo @$checkbox_id_02 ?>>
                                    <label class="custom-control-label" for="penilaian-02">Tidak Berkaitan Draf PSKL2040</label>
                                </div>
                                <label style="padding-left: 24px;">Lain-lain</label>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="penilaian-03" value="Aspek Pengurusan" name="penilaian[]" <?php echo @$checkbox_id_03 ?>>
                                    <label class="custom-control-label" for="penilaian-03">Aspek Pengurusan</label>
                                </div>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="penilaian-04" value="Aspek Perundangan" name="penilaian[]" <?php echo @$checkbox_id_04 ?>>
                                    <label class="custom-control-label" for="penilaian-04">Aspek Perundangan</label>
                                </div>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="penilaian-05" value="Aspek Penguatkuasaan" name="penilaian[]" <?php echo @$checkbox_id_05 ?>>
                                    <label class="custom-control-label" for="penilaian-05">Aspek Penguatkuasaan</label>
                                </div>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="penilaian-06" value="Lain-lain" name="penilaian[]" <?php echo @$checkbox_id_06 ?>>
                                    <label class="custom-control-label" for="penilaian-06">Lain-lain</label>
                                </div>
                                <div style="padding-left: 48px;width:50%;display:none;" id="penilaian-other">
                                    <input type="text" class="form-control" name="penilaian-other" id="penilaian-other-input" value="<?php echo @$ulasanPanel[0]['penilaian_other'] ?>">
                                </div>
                            <?php else: ?>
                            <div class="showPanel">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="penilaian-01" value="Berkaitan Draf PSKL2040" name="penilaian[]">
                                    <label class="custom-control-label" for="penilaian-01">Berkaitan Draf PSKL2040</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="penilaian-02" value="Tidak Berkaitan Draf PSKL2040" name="penilaian[]">
                                    <label class="custom-control-label" for="penilaian-02">Tidak Berkaitan Draf PSKL2040</label>
                                </div>
                                <label style="padding-left: 24px;">Lain-lain</label>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="penilaian-03" value="Aspek Pengurusan" name="penilaian[]">
                                    <label class="custom-control-label" for="penilaian-03">Aspek Pengurusan</label>
                                </div>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="penilaian-04" value="Aspek Perundangan" name="penilaian[]">
                                    <label class="custom-control-label" for="penilaian-04">Aspek Perundangan</label>
                                </div>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="penilaian-05" value="Aspek Penguatkuasaan" name="penilaian[]">
                                    <label class="custom-control-label" for="penilaian-05">Aspek Penguatkuasaan</label>
                                </div>
                                <div class="custom-control custom-checkbox" style="padding-left: 48px;">
                                    <input type="checkbox" class="custom-control-input" id="penilaian-06" value="Lain-lain" name="penilaian[]">
                                    <label class="custom-control-label" for="penilaian-06">Lain-lain</label>
                                </div>
                                <div style="padding-left: 48px;width:50%;display:none;" id="penilaian-other">
                                    <input type="text" class="form-control" name="penilaian-other" id="penilaian-other-input">
                                </div>
                            </div>
                            <?php endif; ?>
                            <p class="text-small">NOTA: Pandangan yang tidak berkaitan dengan Draf PSKL 2040 akan dipanjangkan ke Agensi/jabatan berkaitan</p>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>3. Pengesyoran Panel Dan Justifikasi (Isu-isu di bawah adalah sama dengan yang disenaraikan dalam perkara 1)</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <?php if(isset($ulasanPanel[0]['pengesyoran'])): ?>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="pengesyoran-diterima" name="pengesyoran" class="custom-control-input hidePanel" value="Diterima" <?php echo $ulasanPanel[0]['pengesyoran'] == 'Diterima' ? "checked" : "" ?>>
                                <label class="custom-control-label" for="pengesyoran-diterima">Diterima</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="pengesyoran-ditolak" name="pengesyoran" class="custom-control-input hidePanel" value="Ditolak" <?php echo $ulasanPanel[0]['pengesyoran'] == 'Ditolak' ? "checked" : "" ?>>
                                <label class="custom-control-label" for="pengesyoran-ditolak">Ditolak</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="pengesyoran-ambil-maklum" name="pengesyoran" class="custom-control-input hidePanel" value="Ambil Maklum" <?php echo $ulasanPanel[0]['pengesyoran'] == 'Ambil Maklum' ? "checked" : "" ?>>
                                <label class="custom-control-label" for="pengesyoran-ambil-maklum">Ambil Maklum</label>
                            </div>
                            <?php else: ?>
                            <div class="showPanel">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="pengesyoran-diterima" name="pengesyoran" class="custom-control-input" value="Diterima">
                                    <label class="custom-control-label" for="pengesyoran-diterima">Diterima</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="pengesyoran-ditolak" name="pengesyoran" class="custom-control-input" value="Ditolak">
                                    <label class="custom-control-label" for="pengesyoran-ditolak">Ditolak</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="pengesyoran-ambil-maklum" name="pengesyoran" class="custom-control-input" value="Ambil Maklum">
                                    <label class="custom-control-label" for="pengesyoran-ambil-maklum">Ambil Maklum</label>
                                </div>
                            </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>4. Justifikasi Pengesyoran</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <?php if(isset($ulasanPanel[0]['justifikasi'])): ?>
                            <p class="ulasanPanel"><?php echo empty($ulasanPanel[0]['justifikasi']) ? "Tiada" : $ulasanPanel[0]['justifikasi'] ?></p>
                            <textarea class="form-control hidePanel" rows="10" name="justifikasi"><?php echo empty($ulasanPanel[0]['justifikasi']) ? "Tiada" : $ulasanPanel[0]['justifikasi'] ?></textarea>
                            <?php else: ?>
                            <textarea class="form-control showPanel" rows="10" name="justifikasi"></textarea>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>5. Cadangan Bagi Penambahbaikan Draf PSKL2040</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <?php if(isset($ulasanPanel[0]['cadangan'])): ?>
                            <p class="ulasanPanel"><?php echo empty($ulasanPanel[0]['cadangan']) ? "Tiada" : $ulasanPanel[0]['cadangan'] ?></p>
                            <textarea class="form-control hidePanel" rows="10" name="cadangan"><?php echo empty($ulasanPanel[0]['cadangan']) ? "Tiada" : $ulasanPanel[0]['cadangan'] ?></textarea>
                            <?php else: ?>
                            <textarea class="form-control showPanel" rows="10" name="cadangan"></textarea>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="borang_id" value="<?php echo $data[0]['borang_id'] ?>">
                <input type="hidden" name="id" value="<?php echo $ulasanPanel[0]['id'] ?>">
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
                                    <input type="date" id="tarikh_disahkan_1" name="tarikh_disahkan_1">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php if($jkppa[0]['ajk_3'] != NULL){
                                $col = 4;
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
                                    <input type="date" id="tarikh_disahkan_2" name="tarikh_disahkan_2">
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
                                    <input type="date" id="tarikh_disahkan_3" name="tarikh_disahkan_3">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if($jkppa[0]['ajk_3'] != NULL): ?>
                            <div class="col-md-4 col-sm-4">
                                <div class="text-center mt-5">
                                    <div class="border-top-2 text-center">---------------------------------------</div>
                                    <p>Ahli Panel 4</p>
                                    <p class="font-weight-bold"><?php echo @$jkppa[0]['ajk_3'] ?></p>
                                    <?php if(isset($ulasanPanel[0]['tarikh_disahkan_4'])): ?>
                                    <div class="ulasanPanel">Tarikh: <?php echo @$dateHelper->convertDate($ulasanPanel[0]['tarikh_disahkan_4']) ?></div>
                                    <input type="date" id="tarikh_disahkan_4" name="tarikh_disahkan_4" value="<?php echo @$ulasanPanel[0]['tarikh_disahkan_4'] ?>" class="hidePanel">
                                    <?php else: ?>
                                    <input type="date" id="tarikh_disahkan_4" name="tarikh_disahkan_4">
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

        <?php if($ulasanPanel): ?>
        <button class="btn btn-success" id="ubah-ulasan-panel">Ubah</button>
        <button class="btn btn-primary" id="update-ulasan-panel">Kemaskini</button>
        <?php else: ?>
        <button class="btn btn-primary" id="save-ulasan-panel">Simpan</button>
        <?php endif; ?>
        </form>

    </div>
</div>