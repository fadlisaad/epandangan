<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="borang_id">ID: PSKL2040/DRAF/<?php echo $data[0]['borang_id'] ?></h3>
                <div class="clearfix"></div>
                <h3 class="borang_title">BORANG PA2</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4 class="butiran">RINGKASAN ULASAN PANDANGAN AWAM BAGI</h4>
                <h4 class="butiran">DRAF PELAN STRUKTUR KUALA LUMPUR 2040 (PSKL 2040)</h4>
                <hr>
                <h4 class="butiran">D1: BUTIRAN PEMBERI PANDANGAN</h4>
                <table class="table table-borderless table-sm">
                    <tr>
                        <td width="300px" class="font-weight-bold">NO PANDANGAN</td>
                        <td width="10px" class="font-weight-bold">:</td>
                        <td class="font-weight-bold">PSKL2040/DRAF/<?php echo @$data[0]['borang_id'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">KATEGORI</td>
                        <td class="font-weight-bold">:</td>
                        <td class="font-weight-bold"><?php echo @$data[0]['kategori'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">NAMA</td>
                        <td class="font-weight-bold">:</td>
                        <td class="font-weight-bold"><?php echo @$data[0]['nama_penuh'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">NO KAD PENGENALAN/PASSPORT</td>
                        <td class="font-weight-bold">:</td>
                        <td class="font-weight-bold"><?php echo @$data[0]['ic_passport'] ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h4 class="butiran">D2: PENILAIAN PANDANGAN</h4>                         
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="5px" class="text-center text-uppercase align-middle">
                                <p><strong>NO</strong></p>
                            </th>
                            <th width="15%" class="text-center text-uppercase align-middle">
                                <p><strong>KRITERIA</strong></p>
                            </th>
                            <th width="30%" class="text-center text-uppercase align-middle">
                                <p><strong>RINGKASAN PANDANGAN/CADANGAN</strong></p>
                            </th>
                            <th width="50%" class="text-center text-uppercase align-middle">
                                <p><strong>ULASAN</strong></p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ulasan -->
                        <?php $count = 0; foreach ($ulasan as $dataUlasan): $count++;?>
                        <tr>
                            <td class="text-center text-uppercase align-top">
                                <p><strong><?php echo $count ?></strong></p>
                            </td>
                            <td class="align-top">
                                <p><strong><?php echo $dataUlasan['kriteria'] ?></strong></p>
                                <?php if($dataUlasan['kriteria'] == 'Lain-Lain'): ?>
                                <p>Pandangan kepada Kementerian/Agensi/DBKL berkaitan;</p>
                                <ul class="roman">
                                    <li>Pengurusan</li>
                                    <li>Pelaksanaan</li>   
                                    <li>Penguatkuasaan</li>
                                    <li>Penyelenggaraan</li>
                                    <li>Lain-lain</li>
                                </ul>
                                <?php endif; ?>
                            </td>
                            <td class="align-top">
                                <?php echo $dataUlasan['ringkasan'] ?>
                            </td>
                            
                            <td class="align-top">
                                <?php if($dataUlasan['matlamat']): ?>
                                <table>
                                    <tr>
                                        <td colspan="2">RUJUKAN DALAM DRAF PSKL 2040</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Matlamat</strong></td>
                                        <td>
                                            <?php echo $dataUlasan['matlamat'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Halatuju</strong></td>
                                        <td >
                                            <?php echo $dataUlasan['halatuju'] == '- Tidak berkenaan -' ? '-' : $dataUlasan['halatuju'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tindakan</strong></td>
                                        <td >
                                            <?php echo $dataUlasan['tindakan'] == '- Tidak berkenaan -' ? '-' : $dataUlasan['tindakan'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>M/S</strong></td>
                                        <td>
                                            <?php echo $dataUlasan['muka_surat'] ?>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <?php endif; ?>
                                <?php echo $dataUlasan['ulasan'] ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        <!-- Matlamat -->
                        <?php $countMatlamat = 0; foreach ($ulasanMatlamat as $dataUlasanMatlamat): $countMatlamat++;?>
                        <tr>
                            <td class="text-center text-uppercase align-top">
                                <p><strong><?php echo $countMatlamat ?></strong></p>
                            </td>
                            <td class="align-top">
                                <p><strong><?php echo $dataUlasanMatlamat['kriteria'] ?></strong></p>
                                <?php if($dataUlasanMatlamat['kriteria'] == 'Lain-Lain'): ?>
                                <p>Pandangan kepada Kementerian/Agensi/DBKL berkaitan;</p>
                                <ul class="roman">
                                    <li>Pengurusan</li>
                                    <li>Pelaksanaan</li>   
                                    <li>Penguatkuasaan</li>
                                    <li>Penyelenggaraan</li>
                                    <li>Lain-lain</li>
                                </ul>
                                <?php endif; ?>
                            </td>
                            <td class="align-top">
                                <?php echo $dataUlasanMatlamat['implikasi'] ?>
                            </td>
                            <td class="align-top" style="max-width: 200px;">
                                <?php if($dataUlasanMatlamat['matlamat']): ?>
                                <table>
                                    <tr>
                                        <td colspan="2">RUJUKAN DALAM DRAF PSKL 2040</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Matlamat</strong></td>
                                        <td><?php echo $dataUlasanMatlamat['matlamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Halatuju</strong></td>
                                        <td><?php echo $dataUlasanMatlamat['halatuju'] == '- Tidak berkenaan -' ? '-' : $dataUlasanMatlamat['halatuju'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tindakan</strong></td>
                                        <td><?php echo $dataUlasanMatlamat['tindakan'] == '- Tidak berkenaan -' ? '-' : $dataUlasanMatlamat['tindakan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>M/S</strong></td>
                                        <td><?php echo $dataUlasanMatlamat['muka_surat'] ?></td>
                                    </tr>
                                </table>
                                <br>
                                <?php endif; ?>
                                <?php echo $dataUlasanMatlamat['ulasan'] ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>