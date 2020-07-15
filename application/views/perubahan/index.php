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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tetapan</a></li>
                                    <li class="breadcrumb-item active">Perubahan 3 PTKL 2040</li>
                                </ol>
                            </div>
                            <h4 class="page-title"><i class="fe-list"></i> Senarai Perubahan 3 PTKL 2040</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-md-12">
                        <div class="text-sm-right">
                            <div class="btn-group pull-right m-t-15">
                                <a href="<?php echo BASE_URL ?>perubahan/tambah" class="btn btn-info waves-effect waves-light mb-2 mr-1"><i class="mdi mdi-plus-circle mr-1"></i> Tambah</a>
                            </div>
                        </div>
                        <div class="card-box">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Bil.</th>
                                        <th>Perkara</th>
                                        <th>Zon</th>
                                        <th>Kemaskini</th>
                                        <th>Action</th>
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