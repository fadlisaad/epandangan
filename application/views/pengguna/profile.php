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
                                    <li class="breadcrumb-item active">Akaun Saya</li>
                                </ol>
                            </div>
                            <h4 class="page-title"><?php echo $user[0]['nama_penuh'] ?></h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="card-box">
                            
                            <h4 class="list-group-item-heading">Nama Penuh</h4>
                            <p class="list-group-item-text"><?php echo ($user[0]['nama_penuh']) ? $user[0]['nama_penuh']: '-' ?></p>

                            <h4 class="list-group-item-heading">E-mail</h4>
                            <p class="list-group-item-text"><?php echo $user[0]['email'] ?></p>

                            <h4 class="list-group-item-heading">No Kad Pengenalan/Passport</h4>
                            <p class="list-group-item-text"><?php echo ($user[0]['ic_passport']) ? $user[0]['ic_passport']: '-' ?></p>

                            <h4 class="list-group-item-heading">Alamat</h4>
                            <p class="list-group-item-text"><?php echo ($user[0]['alamat']) ? $user[0]['alamat']: '-' ?></p>

                            <h4 class="list-group-item-heading">Poskod</h4>
                            <p class="list-group-item-text"><?php echo ($user[0]['poskod']) ? $user[0]['poskod']: '-' ?></p>

                            <h4 class="list-group-item-heading">Telefon Rumah</h4>
                            <p class="list-group-item-text"><?php echo ($user[0]['telefon_rumah']) ? $user[0]['telefon_rumah']: '-' ?></p>

                            <h4 class="list-group-item-heading">Telefon Pejabat</h4>
                            <p class="list-group-item-text"><?php echo ($user[0]['telefon_pejabat']) ? $user[0]['telefon_pejabat']: '-' ?></p>

                            <h4 class="list-group-item-heading">Telefon Bimbit</h4>
                            <p class="list-group-item-text"><?php echo ($user[0]['telefon_bimbit']) ? $user[0]['telefon_bimbit']: '-' ?></p>

                            <div class="form-group m-b-0">
                                <a href="<?php echo BASE_URL.'pengguna/edit/'.$user[0]['user_id'] ?>" class="btn btn-primary waves-effect waves-light m-b-5">Kemaskini</a>
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