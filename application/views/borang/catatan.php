<div class="wrapper">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <img src="<?php echo BASE_URL ?>assets/images/logo-dbkl.png" class="text-center">
            </div>
        </div>

        <div class="row bg-dark">
            <div class="col-12">
                <h1 class="text-white">BORANG CATATAN SESI<br>PENDENGARAN PANDANGAN<br>AWAM</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-sm">
                    <tr>
                        <td width="300px" class="font-weight-bold">NO PANDANGAN</td>
                        <td width="10px" class="font-weight-bold">:</td>
                        <td class="font-weight-bold">PSKL2040/DRAF/<?php echo @$data[0]['borang_id'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">KATEGORI</td>
                        <td class="font-weight-bold">:</td>
                        <td class="font-weight-bold"><?php echo @$data[0]['kategori'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">NAMA</td>
                        <td class="font-weight-bold">:</td>
                        <td class="font-weight-bold"><?php echo @$data[0]['nama_penuh'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">NO KAD PENGENALAN/PASSPORT</td>
                        <td class="font-weight-bold">:</td>
                        <td class="font-weight-bold"><?php echo @$data[0]['ic_passport'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <h4 class="butiran">F. PENGESYORAN PANDANGAN (DIISI OLEH PANEL JKPPA)</h4>                         
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <form id="add-ulasan-panel" name="add-ulasan-panel">
                            <dl class="row">
                                <dt class="col-sm-3">Penilaian Pandangan</dt>
                                <dd class="col-sm-9">
                                    <?php if(isset($ulasanPanel[0]['penilaian'])): $penilaian = unserialize($ulasanPanel[0]['penilaian']); foreach ($penilaian as $value):?>
                                    <div class="custom-control custom-checkbox ulasanPanel">
                                        <input type="checkbox" class="custom-control-input" value="<?php echo $value ?>" checked>
                                        <label class="custom-control-label"><?php echo $value ?></label>
                                    </div>
                                    <?php endforeach; else: ?>
                                    <div class="showPanel">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-01" value="Berkaitan Draf PSKL2040" name="penilaian[]">
                                            <label class="custom-control-label" for="penilaian-01">Berkaitan Draf PSKL2040</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-02" value="Tidak Berkaitan Draf PSKL2040" name="penilaian[]">
                                            <label class="custom-control-label" for="penilaian-02">Tidak Berkaitan Draf PSKL2040</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-03" value="Aspek Pengurusan" name="penilaian[]">
                                            <label class="custom-control-label" for="penilaian-03">Aspek Pengurusan</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-04" value="Aspek Perundangan" name="penilaian[]">
                                            <label class="custom-control-label" for="penilaian-04">Aspek Perundangan</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-05" value="Aspek Penguatkuasaan" name="penilaian[]">
                                            <label class="custom-control-label" for="penilaian-05">Aspek Penguatkuasaan</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="penilaian-06" value="Lain-lain" name="penilaian[]">
                                            <label class="custom-control-label" for="penilaian-06">Lain-lain</label>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </dd>
                                <dt class="col-sm-3">Catatan/Ringkasan Pandangan Ahli Panel</dt>
                                <dd class="col-sm-9">
                                    <?php if(isset($ulasanPanel[0]['catatan'])): ?>
                                    <p class="ulasanPanel"><?php echo $ulasanPanel[0]['catatan'] ?></p>
                                    <textarea class="form-control hidePanel" rows="10" name="catatan"><?php echo $ulasanPanel[0]['catatan'] ?></textarea>
                                    <?php else: ?>
                                    <textarea class="form-control showPanel" rows="10" name="catatan"></textarea>
                                    <?php endif; ?>
                                </dd>
                                <dt class="col-sm-3">Pengesyoran Pandangan</dt>
                                <dd class="col-sm-9">
                                    <?php if(isset($ulasanPanel[0]['pengesyoran'])): ?>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="pengesyoran-diterima" name="pengesyoran" class="custom-control-input hidePanel" value="Diterima" <?php echo empty($ulasanPanel[0]['pengesyoran']) ? "" : "checked" ?>>
                                        <label class="custom-control-label" for="pengesyoran-diterima">Diterima</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="pengesyoran-ditolak" name="pengesyoran" class="custom-control-input hidePanel" value="Ditolak" <?php echo empty($ulasanPanel[0]['pengesyoran']) ? "" : "checked" ?>>
                                        <label class="custom-control-label" for="pengesyoran-ditolak">Ditolak</label>
                                    </div>
                                    <?php else: ?>
                                    <div class="showPanel">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="pengesyoran-diterima" name="pengesyoran" class="custom-control-input" value="Diterima">
                                            <label class="custom-control-label" for="pengesyoran-diterima">Diterima</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="pengesyoran-ditolak" name="pengesyoran" class="custom-control-input" value="Ditolak">
                                            <label class="custom-control-label" for="pengesyoran-ditolak">Ditolak</label>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </dd>
                                <dt class="col-sm-3">Justifikasi</dt>
                                <dd class="col-sm-9">
                                    <?php if(isset($ulasanPanel[0]['justifikasi'])): ?>
                                    <p class="ulasanPanel"><?php echo empty($ulasanPanel[0]['justifikasi']) ? "Tiada" : $ulasanPanel[0]['justifikasi'] ?></p>
                                    <textarea class="form-control hidePanel" rows="10" name="justifikasi"><?php echo empty($ulasanPanel[0]['justifikasi']) ? "Tiada" : $ulasanPanel[0]['justifikasi'] ?></textarea>
                                    <?php else: ?>
                                    <textarea class="form-control showPanel" rows="10" name="justifikasi"></textarea>
                                    <?php endif; ?>
                                </dd>
                            </dl>
                            <input type="hidden" name="borang_id" value="<?php echo $data[0]['borang_id'] ?>">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php if($ulasanPanel): ?>
        <button class="btn btn-success" id="ubah-ulasan-panel">Ubah</button>
        <button class="btn btn-primary" id="update-ulasan-panel">Kemaskini</button>
        <?php else: ?>
        <button class="btn btn-primary" id="save-ulasan-panel">Simpan</button>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body m-b-5">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 offset-md-4 offset-sm-4">
                                <div class="text-center mt-5">
                                    <br><br><br><br><br><br><br>
                                    <div class="border-top-2 text-center">---------------------------------------</div>
                                    <p class="font-weight-bold">Pengerusi JKPPA</p>
                                    <p class="font-weight-bold"><?php echo @$jkppa[0]['chairman'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php if($jkppa[0]['ajk_3'] != NULL){
                                $col = 4;
                            }else{
                                $col = 6;
                            } ?>
                            <div class="col-md-<?php echo $col ?> col-sm-<?php echo $col ?>">
                                <div class="text-center mt-5">
                                    <div class="border-top-2 text-center">---------------------------------------</div>
                                    <p class="font-weight-bold">Ahli JKPPA</p>
                                    <p class="font-weight-bold"><?php echo @$jkppa[0]['ajk_1'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-<?php echo $col ?> col-sm-<?php echo $col ?>">
                                <div class="text-center mt-5">
                                    <div class="border-top-2 text-center">---------------------------------------</div>
                                    <p class="font-weight-bold">Ahli JKPPA</p>
                                    <p class="font-weight-bold"><?php echo @$jkppa[0]['ajk_2'] ?></p>
                                </div>
                            </div>
                            <?php if($jkppa[0]['ajk_3'] != NULL): ?>
                            <div class="col-md-4 col-sm-4">
                                <div class="text-center mt-5">
                                    <div class="border-top-2 text-center">---------------------------------------</div>
                                    <p>Ahli JKPPA</p>
                                    <?php echo @$jkppa[0]['ajk_3'] ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>