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
                                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>"><?php echo SITE_TITLE ?></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Laporan</a></li>
                                    <li class="breadcrumb-item active">Matlamat vs Borang</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Matlamat (Ulasan Pegawai) vs Borang</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="card-box">
                            <div id="matlamat"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <th>Nama Matlamat</th>
                                    <th>Jumlah</th>
                                </thead>
                                <tr>
                                    <td>Bab 1</td>
                                    <td><span id="bab-1"></span></td>
                                </tr>
                                <tr>
                                    <td>Bab 2</td>
                                    <td><span id="bab-2"></span></td>
                                </tr>
                                <tr>
                                    <td>Matlamat 1</td>
                                    <td><span id="matlamat-1"></span></td>
                                </tr>
                                <tr>
                                    <td>Matlamat 2</td>
                                    <td><span id="matlamat-2"></span></td>
                                </tr>
                                <tr>
                                    <td>Matlamat 3</td>
                                    <td><span id="matlamat-3"></span></td>
                                </tr>
                                <tr>
                                    <td>Matlamat 4</td>
                                    <td><span id="matlamat-4"></span></td>
                                </tr>
                                <tr>
                                    <td>Matlamat 5</td>
                                    <td><span id="matlamat-5"></span></td>
                                </tr>
                                <tr>
                                    <td>Matlamat 6</td>
                                    <td><span id="matlamat-6"></span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

    			<div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <table id="datatable" class="table table-striped table-bordered">
								<thead>
									<tr>
                                        <th>ID</th>
										<th>Nama Pegawai</th>
                                        <th>Bab/Matlamat</th>
									</tr>
								</thead>
							</table>
                        </div>
                    </div>
                </div> <!-- End Row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->