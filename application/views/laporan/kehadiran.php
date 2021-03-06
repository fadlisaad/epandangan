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
                                    <li class="breadcrumb-item active">Kehadiran</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Senarai Kehadiran</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="card-box">
                            <div id="kehadiran"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <th>Kehadiran</th>
                                    <th>Jumlah</th>
                                </thead>
                                <tr>
                                    <td>Ya</td>
                                    <td><span id="ya"></span></td>
                                </tr>
                                <tr>
                                    <td>Tidak</td>
                                    <td><span id="tidak"></span></td>
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
										<th>Nama Penuh</th>
                                        <th>Kehadiran</th>
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