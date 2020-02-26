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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pengguna</a></li>
                                    <li class="breadcrumb-item active">Ubah</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Ubah Pengguna</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Edit User</h3>
                            	<!-- Content start -->
                            	<form method="post" role="form" action="<?php echo BASE_URL ?>pengguna/update" id="update-user">
                                <div class="row">
                                    <div class="col-md-6">
        								<div class="form-group">
        									<label for="nama_penuh">Full Name</label>
        									<input type="text" name="nama_penuh" class="form-control" required value="<?php echo $data[0]['nama_penuh'] ?>">
        								</div>
                                        <div class="form-group">
                                            <label for="email">E-mail Address</label>
                                            <input type="email" name="email" class="form-control" required value="<?php echo $data[0]['email'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="permission">User Role</label>
                                            <select id="permission" name="permission" class="form-control" required>
                                                <option value="user" <?php if($data[0]['permission'] == 'user') echo "selected='selected'"; ?>>Public</option>
                                                <option value="officer" <?php if($data[0]['permission'] == 'officer') echo "selected='selected'"; ?>>Pegawai</option>
                                                <option value="admin" <?php if($data[0]['permission'] == 'admin') echo "selected='selected'"; ?>>Administrator</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
								<!-- Content end -->
                                <div class="form-group m-b-0">
                                    <input type="hidden" name="user_id" value="<?php echo $data[0]['user_id'] ?>">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Update</button>
                                    <button type="button" class="btn btn-warning waves-effect waves-light m-b-5" id="back">Cancel</button>
                                </div>
                                </form>
                            </div>
                        </div>
					</div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make
                                    up the bulk of the card's content.</p>
                                <a href="javascript:void(0);" class="card-link text-custom">Card link</a>
                                <a href="javascript:void(0);" class="card-link text-custom">Another link</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->