        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->                      
        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>" data-tag="site-title"></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Laporan</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Transaksi</a></li>
                                    <li class="breadcrumb-item active"><?php echo $data[0]['transaction_id'] ?></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Keterangan Transaksi</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="header-title">Transaksi</h4>
                                    <p class="sub-header">
                                        Berikut adalah keterangan transaksi yang dihantar kepada user apabila selesai proses pembayaran pembelian dokumen.
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-sm mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Tajuk</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>ID Transaksi</td>
                                                    <td><?php echo $data[0]['transaction_id'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>RM <?php echo number_format($data[0]['amount'],2) ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tarikh</td>
                                                    <td><?php echo $data[0]['payment_date'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Masa</td>
                                                    <td><?php echo $data[0]['payment_time'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Mod Pembayaran</td>
                                                    <td><?php echo $data[0]['payment_type'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Pembayaran</td>
                                                    <td><?php echo $data[0]['payment_mode'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td><?php echo $data[0]['status'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="button" id="back" class="btn btn-secondary">Kembali</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="header-title">Muat Turun</h4>
                                    <p class="sub-header">Berikut adalah keterangan muat-turun berkaitan transaksi ini:</p>
                                    <dl>
                                        <dt>Versi</dt><dd><?php if($download[0]['link'] == getenv('DOWNLOAD_LINK_EN')) echo 'English'; else echo 'Bahasa Melayu'; ?></dd>
                                        <dt>Jumlah muat-turun</dt><dd><?php echo $download[0]['count'] ?></dd>
                                        <dt>Pautan muat-turun</dt><dd><?php echo $download[0]['link'] ?></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="header-title">E-mail Transaksi</h4>
                                    <p class="sub-header">Berikut adalah semua email berkaitan transaksi ini:</p>
                                    <table class="table table-sm mb-0">
                                        <thead>
                                        <tr>
                                            <th>Tajuk</th>
                                            <th>Keterangan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card-box">
                            <h4 class="header-title">Transaksi (Paynet/MIGS)</h4>
                            <p class="sub-header">
                                Berikut adalah keterangan transaksi dari Paynet/MIGS. Jika terdapat pertikaian antara resit pembayaran dan maklumat transaksi ini, maklumat ini boleh digunakan untuk rujukan pihak bank (jika perlu).
                            </p>
                            <div class="table-responsive">
                                <table class="table table-sm mb-0">
                                    <thead>
                                    <tr>
                                        <th>Tajuk</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $eps = unserialize($data[0]['remarks']);
                                        foreach ($eps as $key => $value) {
                                            echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>
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