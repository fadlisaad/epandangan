<div class="wrapper">
    <div class="container">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h4>BORANG SESI PANEL PENDENGARAN AWAM DRAF PERUBAHAN 3 PELAN BANDAR RAYA KUALA LUMPUR 2020</h4>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">

                        <dl class="row">
                            <dt class="col-sm-3">No. Pandangan</dt>
                            <dd class="col-sm-9">PBRKL2020/DRAF/3/<?php echo $data[0]['borang_id'] ?></dd>

                            <dt class="col-sm-3">No. Sesi</dt>
                            <dd class="col-sm-9"></dd>

                            <dt class="col-sm-3">Tarikh/Masa</dt>
                            <dd class="col-sm-9"></dd>

                            <dt class="col-sm-3">Tempat</dt>
                            <dd class="col-sm-9"></dd>

                            <dt class="col-sm-3">Pengerusi</dt>
                            <dd class="col-sm-9"></dd>

                            <dt class="col-sm-3">AJK</dt>
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
                                <td>No Pandangan</td>
                                <td>PBRKL2020/DRAF/3/<?php echo $data[0]['borang_id'] ?></td>
                            </tr>
                            <tr>
                                <td>Tarikh Terima</td>
                                <td><?php echo ($data[0]['tarikh_terima']) ? $data[0]['tarikh_terima']: 'Tiada' ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Borang</td>
                                <td><?php echo ($data[0]['pegawai']) ? 'Manual' : 'Public' ?></td>
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
                    <h4>BUTIRAN PEMBERI PANDANGAN</h4>
                    <hr>
                </div>
                
                <div class="card">
                    <div class="card-body">
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
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h4>BAHAGIAN A: BUTIRAN PANDANGAN AWAM TERHADAP DRAF PERUBAHAN 3 PELAN BANDAR RAYA KUALA LUMPUR 2020</h4>
                    <hr>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%" class="text-center text-uppercase align-middle">
                                        <p><strong>Bil.</strong></p>
                                    </th>
                                    <th class="text-center text-uppercase align-middle">
                                        <p><strong>Rujukan</strong></p>
                                    </th>
                                    <th class="text-center text-uppercase align-middle">
                                        <p><strong>Perkara</strong></p>
                                    </th>
                                    <th class="text-center text-uppercase align-middle">Pandangan</th>
                                    <th class="text-center text-uppercase align-middle">Cadangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($perubahan as $value): ?>
                                    <tr>
                                        <td><?php echo $value['bil'] ?></td>
                                        <td><?php echo $value['rujukan'] ?></td>
                                        <td><?php echo $value['perkara'] ?></td>
                                        <td>
                                            <p>Pandangan (Zon): <?php echo @$value['pandangan_zon'] ?></p>
                                            <p>Pandangan (Intensiti): <?php echo @$value['pandangan_intensiti'] ?></p>
                                        </td>
                                        <td><?php echo @$value['cadangan'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>