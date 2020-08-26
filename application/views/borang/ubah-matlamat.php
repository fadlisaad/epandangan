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
                                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>" data-tag="site-title"></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);" data-tag="borang"></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);" data-tag="pandangan-awam"></a></li>
                                    <li class="breadcrumb-item active" data-tag="borang-pskl"></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Ubah Matlamat</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

    			<div class="row">
                    <div class="col-md-12">

                        <div class="card-box">
                            <form id="borang-matlamat" action="#" data-parsley-validate="">
                                <div class="form-group">
                                    <label for="matlamat"><span data-tag="matlamat"></span> <span class="text-danger">*</span></label>
                                    <select class="form-control matlamat" name="matlamat" form="borang-matlamat">
                                        <option value="" data-tag="pilih"></option>
                                        <?php foreach ($matlamat as $select): ?>
                                            <option value="<?php echo $select['id'] ?>" <?php echo $data[0]['matlamat_id'] == $select['id'] ? "selected" : "" ?>><?php echo $select['tajuk'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="halatuju" data-tag="halatuju"></label>
                                    <select class="form-control halatuju" name="halatuju" form="borang-matlamat">
                                        <option value="" data-tag="pilih"></option>
                                        <?php foreach ($halatuju as $select): ?>
                                        <option value="<?php echo $select['id'] ?>" class="<?php echo $select['matlamat_id'] ?>" <?php echo $data[0]['halatuju_id'] == $select['id'] ? "selected" : "" ?>><?php echo $select['tajuk'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="tindakan" data-tag="tindakan"></label>
                                    <select class="form-control tindakan" name="tindakan" form="borang-matlamat">
                                        <option value="" data-tag="pilih"></option>
                                        <?php foreach ($tindakan as $select): ?>
                                        <option value="<?php echo $select['id'] ?>" class="<?php echo $select['halatuju_id'] ?>" <?php echo $data[0]['tindakan_id'] == $select['id'] ? "selected" : "" ?>><?php echo $select['tajuk'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="cadangan"><span data-tag="padangan-cadangan"></span> <span class="text-danger">*</span></label>
                                    <textarea class="form-control cadangan summernote" name="cadangan" rows="5" form="borang-matlamat"><?php echo $data[0]['cadangan'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="justifikasi"><span data-tag="justifikasi"></span> <span class="text-danger">*</span></label>
                                    <textarea class="form-control justifikasi summernote" name="justifikasi" rows="5" form="borang-matlamat"><?php echo $data[0]['justifikasi'] ?></textarea>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $data[0]['id'] ?>" form="borang-matlamat">
                                <input type="hidden" id="borang_id" value="<?php echo @$data[0]['borang_id'] ?>" form="borang-matlamat">
                                <button class="btn btn-secondary d-print-none" id="back"><i class="fe-arrow-left"></i> Kembali</button>
                                <button type="button" class="btn btn-primary" id="save-matlamat">Kemaskini</button>
                            </form>

                        </div>

                    </div>
                </div> <!-- End Row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->