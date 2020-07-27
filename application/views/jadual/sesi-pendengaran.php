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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);" data-tag="site-title"></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Jadual</a></li>
                                    <li class="breadcrumb-item active">Senarai Borang dalam Sesi Pendengaran</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Senarai Borang dalam Sesi Pendengaran <?php echo html_entity_decode($jadual[0]['keterangan']) ?></h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

                <div class="row">
                    <div class="col-6">
                        <div class="card-box">
                            <dl class="row">
                                <dt class="col-md-3">Jenis</dt>
                                <dd class="col-md-9"><?php echo $jadual[0]['jenis'] ?></dd>
                                <dt class="col-md-3">Lokasi</dt>
                                <dd class="col-md-9"><?php echo $jadual[0]['lokasi'] ?></dd>
                                <dt class="col-md-3">Tarikh</dt>
                                <dd class="col-md-9"><?php echo $jadual[0]['tarikh'] ?></dd>
                                <dt class="col-md-3">Slot Masa</dt>
                                <dd class="col-md-9"><?php echo $jadual[0]['slot_masa'] ?></dd>
                                <dt class="col-md-3">Keterangan</dt>
                                <dd class="col-md-9"><?php echo html_entity_decode($jadual[0]['keterangan']) ?></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-box">
                            <dl class="row">
                                <dt class="col-md-3">Pengerusi</dt>
                                <dd class="col-md-9"><?php echo $jadual[0]['chairman'] ?></dd>
                                <dt class="col-md-3">Panel 1</dt>
                                <dd class="col-md-9"><?php echo $jadual[0]['ajk_1'] ?></dd>
                                <dt class="col-md-3">Panel 2</dt>
                                <dd class="col-md-9"><?php echo $jadual[0]['ajk_2'] ?></dd>
                                <dt class="col-md-3">Panel 3</dt>
                                <dd class="col-md-9"><?php echo @$jadual[0]['ajk_3'] ?></dd>
                                <dt class="col-md-3">Panel 4</dt>
                                <dd class="col-md-9"><?php echo @$jadual[0]['ajk_4'] ?></dd>
                            </dl>
                        </div>
                    </div>
                </div> <!-- End Row -->

    			<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <table id="datatable" class="table table-striped dt-responsive nowrap">
    								<thead>
    									<tr>
                                            <th>No. Pandangan</th>
                                            <th>Nama Penuh</th>
                                            <th>No. IC/Passport</th>
                                            <th>Tarikh Terima</th>
                                            <th>E-mail</th>
                                            <th>Hadir</th>
                                            <th>Tindakan</th>
    									</tr>
    								</thead>
    							</table>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

                