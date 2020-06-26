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
        
    </div>
</div>