        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center text-uppercase">Laporan Penilaian Pandangan Awam bagi Draf Pelan Struktur Kuala Lumpur 2040</h3>
                    </div>
                </div>     
                <!-- end page title -->

    			<div class="row">
                    <div class="col-md-12">

                        <div class="card-box">

                            <h4 class="header-title"><span data-tag="part"></span> A: BUTIRAN PEMBERI PANDANGAN</h4>

                            <dl class="row">
                                <dt class="col-md-4">NO PANDANGAN</dt>
                                <dd class="col-md-8">PSKL2040/DRAF/<?php echo @$data[0]['id'] ?></dd>

                                <dt class="col-md-4">KATEGORI</dt>
                                <dd class="col-md-8"><?php echo @$data[0]['kategori'] ?></dd>

                                <dt class="col-md-4">NAMA</dt>
                                <dd class="col-md-8"><?php echo @$data[0]['nama_penuh'] ?></dd>

                                <dt class="col-md-4">NO KAD PENGENALAN/PASSPORT</dt>
                                <dd class="col-md-8"><?php echo @$data[0]['ic_passport'] ?></dd>
                            </dl>
                            
                        </div>

                        <div class="card-box">
                            <h4 class="header-title"><span data-tag="part"></span> B: PENILAIAN PANDANGAN</h4>
                            <table class="table table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th rowspan="2" width="5%" class="text-center text-uppercase align-middle">
                                            <p><strong>NO</strong></p>
                                        </th>
                                        <th rowspan="2" width="15%" class="text-center text-uppercase align-middle">
                                            <p><strong>KRITERIA</strong></p>
                                        </th>
                                        <th rowspan="2" width="20%" class="text-center text-uppercase align-middle">
                                            <p><strong>RINGKASAN PANDANGAN/CADANGAN</strong></p>
                                        </th>
                                        <th colspan="4" width="25%" class="text-center text-uppercase align-middle">
                                            <p><strong>RUJUKAN DALAM DRAF PSKL2040</strong></p>
                                        </th>
                                        <th rowspan="2" class="text-center text-uppercase align-middle">
                                            <p><strong>ULASAN</strong></p>
                                        </th>
                                    </tr>
                                    <tr >
                                        <td width="10" class="text-center text-uppercase">
                                            <p><strong>M</strong></p>
                                        </td>
                                        <td width="10" class="text-center text-uppercase">
                                            <p><strong>H.S</strong></p>
                                        </td>
                                        <td width="10" class="text-center text-uppercase">
                                            <p><strong>T</strong></p>
                                        </td>
                                        <td width="10" class="text-center text-uppercase">
                                            <p><strong>M/S</strong></p>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Ulasan -->
                                    <?php $count = 0; foreach ($ulasan as $dataUlasan): $count++;?>
                                    <tr>
                                        <td rowspan="2" class="text-center text-uppercase align-top">
                                            <p><strong><?php echo $count ?></strong></p>
                                        </td>
                                        <td rowspan="2" class="align-top">
                                            <p><strong><?php echo $dataUlasan['kriteria'] ?></strong></p>
                                        </td>
                                        <td colspan="6" class="align-middle">
                                            <p><strong>PANDANGAN</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-top">
                                            <?php echo $dataUlasan['ringkasan'] ?>
                                        </td>
                                        <td class="text-center text-uppercase align-top">
                                            <?php echo str_replace('Matlamat','M', strtok($dataUlasan['matlamat'], ":")) ?>
                                        </td>
                                        <td class="text-center text-uppercase align-top">
                                            <?php echo strtok($dataUlasan['halatuju'], ":") ?>
                                        </td>
                                        <td class="text-center text-uppercase align-top">
                                            <?php echo $dataUlasan['tindakan'] == '- Tidak berkenaan -' ? '-' : strtok($dataUlasan['tindakan'], ":") ?>
                                        </td>
                                        <td class="text-center text-uppercase align-top">
                                            <?php echo $dataUlasan['muka_surat'] ?>
                                        </td>
                                        <td class="align-top">
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
                                        </td>
                                        <td class="align-top">
                                            <?php echo $dataUlasanMatlamat['implikasi'] ?>
                                        </td>
                                        <td class="text-center text-uppercase align-top">
                                            <?php echo str_replace('Matlamat','M', strtok($dataUlasanMatlamat['matlamat'], ":")) ?>
                                        </td>
                                        <td class="text-center text-uppercase align-top">
                                            <?php echo strtok($dataUlasanMatlamat['halatuju'], ":") ?>
                                        </td>
                                        <td class="text-center text-uppercase align-top">
                                            <?php echo $dataUlasanMatlamat['tindakan'] == '- Tidak berkenaan -' ? '-' : strtok($dataUlasanMatlamat['tindakan'], ":") ?>
                                        </td>
                                        <td class="text-center text-uppercase align-top">
                                            <?php echo $dataUlasanMatlamat['muka_surat'] ?>
                                        </td>
                                        <td class="align-top" style="max-width: 200px;">
                                            <?php echo $dataUlasanMatlamat['ulasan'] ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-box">

                            <h4 class="header-title"><span data-tag="part"></span> C: PENGESYORAN URUS SETIA</h4>

                            <div class="form-group">
                                <?php echo @$data[0]['pengesyoran'] ?>
                            </div>
                            
                            <div class="form-group mb-0">
                                <a href="<?php echo BASE_URL.'borang/papar_pskl/'.$data[0]['borang_id'] ?>" class="btn btn-secondary">Kembali ke Borang</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->