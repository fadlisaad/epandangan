<div class="wrapper">
    <div class="container">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h4>BORANG PANDANGAN AWAM PERUBAHAN 3</h4>
                    <h4>PELAN BANDAR RAYA KUALA LUMPUR 2020</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">

                        <dl class="row">
                            <dt class="col-sm-3">NO. PANDANGAN</dt>
                            <dd class="col-sm-9">PBRKL2020/DRAF/3/<?php echo $data[0]['borang_id'] ?></dd>

                            <dt class="col-sm-3">NO. SESI</dt>
                            <dd class="col-sm-9"></dd>

                            <dt class="col-sm-3">TARIKH/MASA</dt>
                            <dd class="col-sm-9"></dd>

                            <dt class="col-sm-3">TEMPAT</dt>
                            <dd class="col-sm-9"></dd>

                            <dt class="col-sm-3">PENGERUSI</dt>
                            <dd class="col-sm-9"></dd>

                            <dt class="col-sm-3">AHLI JAWATANKUASA</dt>
                            <dd class="col-sm-9"></dd>
                        </dl>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <td>Tarikh Terima</td>
                                <td><?php echo ($data[0]['tarikh_terima']) ? $data[0]['tarikh_terima']: 'Tiada' ?></td>
                            </tr>
                            <tr>
                                <td>Tarikh Key-in</td>
                                <td><?php echo ($data[0]['tarikh_key_in']) ? $data[0]['tarikh_key_in']: 'Tiada' ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Borang</td>
                                <td><?php echo ($data[0]['pegawai']) ? 'Manual' : 'Public' ?></td>
                            </tr>
                            <tr>
                                <td>Rujukan Borang Manual</td>
                                <td><?php echo ($data[0]['rujukan']) ? $data[0]['rujukan'] : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>Hadir Sesi</td>
                                <td><span class="btn btn-primary btn-xs"><?php echo ($data[0]['hadir']) ? $data[0]['hadir']: '-' ?></span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h4>BAHAGIAN A: BUTIRAN PANDANGAN AWAM TERHADAP PERUBAHAN 3 PELAN BANDAR RAYA KUALA LUMPUR 2020</h4>
                    <hr>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <?php foreach ($perubahan as $value): ?>
                            <tr>
                                <td>NO. TAPAK</td>
                                <td><?php echo $value['bil'] ?></td>
                            </tr>
                            <tr>
                                <td>RUJUKAN</td>
                                <td><?php echo $value['rujukan'] ?></td>
                            </tr>
                            <tr>
                                <td>PERKARA</td>
                                <td><?php echo $value['perkara'] ?></td>
                            </tr>
                            <tr>
                                <td>PANDANGAN (ZON)</td>
                                <td>
                                    <p><?php echo @$value['pandangan_zon'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>PANDANGAN (INTENSITI)</td>
                                <td>
                                    <p><?php echo @$value['pandangan_intensiti'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>CADANGAN</td>
                                <td>
                                    <p><?php echo @$value['cadangan'] ?></p>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="text-center">
                    <h4>BAHAGIAN B: BUTIRAN PEMBERI PANDANGAN</h4>
                    <hr>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">NAMA</dt>
                            <dd class="col-sm-9"><?php echo ($data[0]['nama_penuh']) ? $data[0]['nama_penuh']: 'N/A' ?></dd>

                            <dt class="col-sm-3">NO KAD PENGENALAN</dt>
                            <dd class="col-sm-9"><?php echo ($data[0]['ic_passport']) ? $data[0]['ic_passport']: 'N/A' ?></dd>

                            <dt class="col-sm-3">NAMA AGENSI/SYARIKAT</dt>
                            <dd class="col-sm-9"><?php echo ($data[0]['nama_organisasi']) ? $data[0]['nama_organisasi']: '-' ?></dd>

                            <dt class="col-sm-3">ALAMAT SURAT MENYURAT</dt>
                            <dd class="col-sm-9"><?php echo ($data[0]['alamat']) ? $data[0]['alamat']: 'N/A' ?></dd>

                            <dt class="col-sm-3">NO TELEFON RUMAH</dt>
                            <dd class="col-sm-9"><?php echo ($data[0]['telefon_rumah']) ? $data[0]['telefon_rumah']: 'N/A' ?></dd>

                            <dt class="col-sm-3">NO TELEFON PEJABAT</dt>
                            <dd class="col-sm-9"><?php echo ($data[0]['telefon_pejabat']) ? $data[0]['telefon_pejabat']: 'N/A' ?></dd>

                            <dt class="col-sm-3">NO TELEON BIMBIT</dt>
                            <dd class="col-sm-9"><?php echo ($data[0]['telefon_bimbit']) ? $data[0]['telefon_bimbit']: 'N/A' ?></dd>

                            <dt class="col-sm-3">ALAMAT EMEL</dt>
                            <dd class="col-sm-9"><?php echo ($profile[0]['email']) ? $profile[0]['email']: 'N/A' ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="text-center">
                    <h4>BAHAGIAN C: KEHADIRAN PEMBERI PANDANGAN AWAM DALAM SESI PENDENGARAN</h4>
                    <hr>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">ADAKAH SETUJU HADIR</dt>
                            <dd class="col-sm-9"><?php echo ($data[0]['hadir']) ? $data[0]['hadir']: 'N/A' ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>