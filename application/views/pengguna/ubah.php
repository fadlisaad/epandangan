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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Akaun Saya</a></li>
                                    <li class="breadcrumb-item active">Ubah</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Ubah Akaun Saya</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Ubah Akaun Saya</h3>
                            	<!-- Content start -->
                            	<form method="post" role="form" action="<?php echo BASE_URL ?>pengguna/update" id="update-user">
                                <div class="row">
                                    <div class="col-md-6">
        								<div class="form-group">
        									<label for="nama_penuh">Nama Penuh</label>
        									<input type="text" name="nama_penuh" class="form-control" required value="<?php echo $data[0]['nama_penuh'] ?>">
        								</div>
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input type="email" name="email" class="form-control" required value="<?php echo $data[0]['email'] ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="ic_passport">No kad pengenalan/passport</label>
                                            <input type="text" name="ic_passport" class="form-control" required value="<?php echo $data[0]['ic_passport'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" required value="<?php echo $data[0]['alamat'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="poskod">Poskod</label>
                                            <input type="text" name="poskod" class="form-control" required value="<?php echo $data[0]['poskod'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="telefon_bimbit">Telefon bimbit</label>
                                            <input type="text" name="telefon_bimbit" class="form-control" required value="<?php echo $data[0]['telefon_bimbit'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="telefon_rumah">Telefon rumah</label>
                                            <input type="text" name="telefon_rumah" class="form-control" value="<?php echo $data[0]['telefon_rumah'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="telefon_pejabat">Telefon pejabat</label>
                                            <input type="text" name="telefon_pejabat" class="form-control" value="<?php echo $data[0]['telefon_pejabat'] ?>">
                                        </div>
                                    </div>
                                </div>
								<!-- Content end -->
                                <div class="form-group m-b-0">
                                    <input type="hidden" name="user_id" value="<?php echo $data[0]['user_id'] ?>">
                                    <input type="hidden" name="type" value="user">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Kemaskini</button>
                                    <button type="button" class="btn btn-warning waves-effect waves-light m-b-5" id="back">Batal</button>
                                </div>
                                </form>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Bantuan</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Sila kemaskini maklumat anda dengan tepat</p>
                        </div>
                    </div>
                </div> <!-- container -->
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->