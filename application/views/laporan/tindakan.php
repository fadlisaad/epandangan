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
                                    <li class="breadcrumb-item active">Kriteria, Matlamat, Halatuju dan Tindakan</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Kriteria, Matlamat, Halatuju dan Tindakan</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h3>Kriteria</h3>
                            <table class="table table-striped table-bordered datatable" id="kriteria">
                                <thead>
                                    <tr>
                                        <th>Kriteria</th>
                                        <th>Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($kriteria as $value): ?>
                                    <tr>
                                        <td><?php echo $value['kriteria'] ?></td>
                                        <td><?php echo $value['total'] ?></td>
                                        <td><a href="<?php echo BASE_URL.'laporan/view/kriteria='.$value['kriteria'] ?>" class="btn btn-sm btn-primary">Borang</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- End Row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h3>Matlamat</h3>
                            <table class="table table-striped table-bordered datatable" id="matlamat">
                                <thead>
                                    <tr>
                                        <th>Matlamat</th>
                                        <th>Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($matlamat as $value): ?>
                                    <tr>
                                        <td><?php echo $value['matlamat'] ?></td>
                                        <td><?php echo $value['total'] ?></td>
                                        <td><a href="<?php echo BASE_URL.'laporan/view/matlamat_id='.$value['matlamat_id'] ?>" class="btn btn-sm btn-primary">Borang</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- End Row -->

    			<div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h3>Halatuju</h3>
                            <table class="table table-striped table-bordered datatable" id="halatuju">
                                <thead>
                                    <tr>
                                        <th>Matlamat</th>
                                        <th>Halatuju</th>
                                        <th>Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($halatuju as $value): ?>
                                    <tr>
                                        <td><?php echo strpos($value['matlamat'], ":") ? substr($value['matlamat'], 0, strpos($value['matlamat'], ":")) : $value['matlamat'] ?></td>
                                        <td><?php echo $value['halatuju'] ?></td>
                                        <td><?php echo $value['total'] ?></td>
                                        <td><a href="<?php echo BASE_URL.'laporan/view/halatuju_id='.$value['halatuju_id'] ?>" class="btn btn-sm btn-primary">Borang</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- End Row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h3>Tindakan</h3>
                            <table class="table table-striped table-bordered datatable" id="tindakan">
								<thead>
									<tr>
                                        <th>Matlamat</th>
										<th>Halatuju</th>
                                        <th>Tindakan</th>
                                        <th>Jumlah</th>
                                        <th>Action</th>
									</tr>
								</thead>
                                <tbody>
                                    <?php foreach($tindakan as $value): ?>
                                    <tr>
                                        <td><?php echo strpos($value['matlamat'], ":") ? substr($value['matlamat'], 0, strpos($value['matlamat'], ":")) : $value['matlamat'] ?></td>
                                        <td><?php echo strpos($value['halatuju'], ":") ? substr($value['halatuju'], 0, strpos($value['halatuju'], ":")) : $value['halatuju'] ?></td>
                                        <td><?php echo $value['tindakan'] ?></td>
                                        <td><?php echo $value['total'] ?></td>
                                        <td><a href="<?php echo BASE_URL.'laporan/view/tindakan_id='.$value['tindakan_id'] ?>" class="btn btn-sm btn-primary">Borang</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
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