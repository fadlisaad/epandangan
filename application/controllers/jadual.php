<?php
class Jadual extends Controller {

	public function __construct()
	{
		$this->session = $this->loadHelper('session_helper');
		$this->model = $this->loadModel('Jadual_model');

		$this->css = array(
			'assets/libs/datatables/dataTables.bootstrap4.css',
			'assets/libs/datatables/responsive.bootstrap4.css',
			'assets/libs/datatables/buttons.bootstrap4.css',
			'assets/libs/datatables/select.bootstrap4.css',
			'assets/libs/custombox/custombox.min.css',
			'assets/libs/sweetalert2/sweetalert2.min.css',
			'assets/libs/select2/select2.min.css',
			'assets/libs/flatpickr/flatpickr.min.css',
			'assets/libs/fullcalendar/fullcalendar.min.css',
			'assets/libs/summernote/summernote.min.css'
		);

		$this->js = array(
			'assets/libs/datatables/jquery.dataTables.min.js',
			'assets/libs/datatables/dataTables.bootstrap4.js',
			'assets/libs/datatables/dataTables.responsive.min.js',
			'assets/libs/datatables/responsive.bootstrap4.min.js',
			'assets/libs/datatables/dataTables.buttons.min.js',
			'assets/libs/datatables/buttons.html5.min.js',
			'assets/libs/datatables/buttons.flash.min.js',
			'assets/libs/datatables/buttons.print.min.js',
			'assets/js/pages/datatables.init.js',
			'assets/libs/custombox/custombox.min.js',
			'assets/libs/sweetalert2/sweetalert2.min.js',
			'assets/js/pages/sweet-alerts.init.js',
			'assets/libs/parsleyjs/parsleyjs.min.js',
			'assets/libs/parsleyjs/il8n/ms.js',
			'assets/libs/select2/select2.min.js',
			'assets/libs/flatpickr/flatpickr.min.js',
			'assets/libs/moment/moment.min.js',
			'assets/libs/fullcalendar/fullcalendar.min.js',
			'assets/libs/summernote/summernote.min.js'
		);

		if(empty($this->session->get('loggedin'))){
			$this->redirect('auth');
		}
	}

	function senarai()
	{
		$custom_js = "<script type=\"text/javascript\">

			var base_url = '".BASE_URL."jadual/process_senarai';

			// delete entry
			function deleteJadual(id){

				var delete_url = '".BASE_URL."jadual/delete';
				var table = 'sesi_jadual';

				Swal.fire({
					title: 'Anda pasti?',
					text: 'Data ini akan dipadam dan tidak boleh dipulihkan',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya',
					cancelButtonText: 'Batal',
					preConfirm: function() {
					return new Promise(function(result) {
						console.log(result);
						$.ajax({
							url: delete_url,
							type: 'POST',
							data: 'table=' + table +'&id=' + id,
							success:function(response){
								Swal.fire(
									'Berjaya!',
									'Maklumat ini telah berjaya dipadam',
									'success'
								).then(function() {
					                location.reload();
					            });
							}
						})
					});
					}
				})
			}
			
			$(document).ready(function() {

    			$('#datatable').DataTable({
    				serverSide : true,
    				processing : true,
    				ajax : {
    					url : base_url,
    					type : 'POST'
    				},
    				deferRender : true,
    				error : true,
    				columns: [
			            { data: 'id' },
			            { data: 'lokasi' },
			            { data: 'jenis' },
			            { data: 'tarikh' },
			            { data: 'slot_masa' },
			            { data: 'chairman' },
			            { data: 'ajk_1' },
			            { data: 'ajk_2' },
			            { data: 'ajk_3' },
			            { data: 'action' }
			        ],
			        columnDefs: [
					    { width: '5%', 'targets': 0 },
					    { width: '10%', 'targets': 8 }
					]
    			});

    			// create entry
				function create(){

					var post_url = '".BASE_URL."jadual/addJadual';

					$.ajax({
						type: 'POST',
						url: post_url,
						dataType: 'html',
						data: $('form#jadual').serialize(),
						success:function(response){
							if(parseInt(response) == 0){
								Swal.fire({
									title: 'Ralat',
									text: 'Ruangan nama adalah kosong. Sila isi dengan betul.',
									type: 'warning'
								});
							}else{
								Swal.fire({
									title: 'Berjaya',
									text: 'Maklumat telah berjaya ditambah.',
									type: 'success'
								}).then(function() {
					                location.reload();
					            });
							}
						}
				    });

				}
    			
    		});

		</script>";
		
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('jadual/index-jadual');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function sesi()
	{
		$custom_js = "<script>
			$('#calendar').fullCalendar();
		</script>";

		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('jadual/sesi');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function editJadual($id)
	{
		$easyCSRF = new EasyCSRF\EasyCSRF($this->session);

		# generate token
		$token = $easyCSRF->generate('token');

		$data = $this->model->getByID('sesi_jadual', $id);

		$custom_js = "<script>

		var select_lokasi = '".BASE_URL."search.php?table=lokasi';
		var select_panel = '".BASE_URL."search.php?table=panel';
		var tarikh = '".$data[0]['tarikh']."';

		$(document).ready(function(){
			
			$('#lokasi').select2({
				placeholder: 'Pilih lokasi',
			    ajax: {
			        url: select_lokasi,
			        dataType: 'json',
			        processResults: function (data) {
			            return {
			            	results: data
			            };
			        }
			    },
			    cache: true
			});

			$('#chairman,#ajk_1,#ajk_2,#ajk_3').select2({
				placeholder: 'Pilih',
			    ajax: {
			        url: select_panel,
			        dataType: 'json',
			        processResults: function (data) {
			            return {
			            	results: data
			            };
			        }
			    },
			    cache: true
			});

			$('#datepicker').flatpickr({
				defaultDate: tarikh,
				altInput: true,
				altFormat: \"j F Y\",
				dateFormat: \"Y-m-d\"
			});

			$('.timepicker').flatpickr({
				enableTime: true,
				noCalendar: true,
				dateFormat: \"H:i K\"
			});

			$('.summernote').summernote({
			    height: 250,
			    minHeight: null,
			    maxHeight: null,
			    focus: false,
			    toolbar: [
					['style', ['bold', 'italic', 'underline', 'clear']],
					['para', ['ul', 'ol']],
				]
			});
		});

		// update jadual
		function updateJadual(){

			var post_url = '".BASE_URL."jadual/updateJadual';

			$.ajax({
				type: 'POST',
				url: post_url,
				dataType: 'html',
				data: $('form#update-jadual').serialize(),
				success:function(response){
					if(parseInt(response) == 0){
						Swal.fire({
							title: 'Ralat',
							text: 'Terdapat ruangan wajib tidak lengkap. Sila isi dengan betul.',
							type: 'warning'
						});
					}else{
						Swal.fire({
							title: 'Berjaya',
							text: 'Jadual ini berjaya dikemaskini.',
							type: 'success'
						}).then(function() {
			                
			            });
					}
				}
		    });

		}

		$('button#save-jadual').bind('click', function (e) {
			e.preventDefault();
			$(this).attr('disabled', 'disabled');
			updateJadual();
		});
		</script>";
		
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('jadual/ubah-sesi');

		$header->set('css', $this->css);
		$template->set('token', $token);
		$template->set('data', $data);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function updateJadual()
	{
		$this->filter = $this->loadHelper('Filter_helper');
			
		$data = array(
			'id' => $this->filter->isInt($_POST['id']),
			'lokasi_id' => $this->filter->isInt($_POST['lokasi_id']),
			'jenis' => $this->filter->sanitize($_POST['jenis']),
			'tarikh' => $this->filter->sanitize($_POST['tarikh']),
			'slot_masa' => $this->filter->sanitize($_POST['masa_mula']).'-'.$this->filter->sanitize($_POST['masa_tamat']),
			'chairman' => $this->filter->isInt($_POST['chairman']),
			'ajk_1' => $this->filter->isInt($_POST['ajk_1']),
			'ajk_2' => $this->filter->isInt($_POST['ajk_2']),
			'ajk_3' => empty($_POST['ajk_3']) ? NULL : $_POST['ajk_3'],
			'keterangan' => $this->filter->htmlEntity($_POST['keterangan'])
		);

		$this->model->updateJadual($data);
	}

	function tambahSesi()
	{
		$easyCSRF = new EasyCSRF\EasyCSRF($this->session);

		# generate token
		$token = $easyCSRF->generate('token');

		$custom_js = "<script>
		var select_lokasi = '".BASE_URL."search.php?table=lokasi';
		var select_panel = '".BASE_URL."search.php?table=panel';

		$(document).ready(function(){
			
			$('#lokasi').select2({
				placeholder: 'Pilih lokasi',
			    ajax: {
			        url: select_lokasi,
			        dataType: 'json',
			        processResults: function (data) {
			            return {
			            	results: data
			            };
			        }
			    },
			    cache: true
			});

			$('#chairman,#ajk_1,#ajk_2,#ajk_3').select2({
				placeholder: 'Pilih',
			    ajax: {
			        url: select_panel,
			        dataType: 'json',
			        processResults: function (data) {
			            return {
			            	results: data
			            };
			        }
			    },
			    cache: true
			});

			$('#datepicker').flatpickr({
				altInput: true,
				minDate: \"today\",
				altFormat: \"j F Y\",
				dateFormat: \"Y-m-d\"
			});

			$('.timepicker').flatpickr({
				enableTime: true,
				noCalendar: true,
				dateFormat: \"H:i K\"
			});
		});

		$(function () {
			$('#borang-sesi').parsley().on('field:validated', function() {
				var ok = $('.parsley-error').length === 0;
				$('.bs-callout-info').toggleClass('hidden', !ok);
				$('.bs-callout-warning').toggleClass('hidden', ok);
			});
		});
		</script>";

		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('jadual/tambah-sesi');

        $header->set('css', $this->css);
        $template->set('token', $token);
        $footer->set('js', $this->js);
        $footer->set('custom_js', $custom_js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function createSesi()
	{
		$easyCSRF = new EasyCSRF\EasyCSRF($this->session);

		try{
			$easyCSRF->check('token', $_POST['token']);
		}catch(Exception $e){
			echo $e->getMessage();
		}

		if(isset($_POST['submit'])){

			$this->filter = $this->loadHelper('Filter_helper');
			
			$data = array(
				'lokasi_id' => $this->filter->sanitize($_POST['lokasi_id']),
				'jenis' => $this->filter->sanitize($_POST['jenis']),
				'tarikh' => $this->filter->sanitize($_POST['tarikh']),
				'slot_masa' => $this->filter->sanitize($_POST['masa_mula']).'-'.$this->filter->sanitize($_POST['masa_tamat']),
				'chairman' => $this->filter->sanitize($_POST['chairman']),
				'ajk_1' => $this->filter->sanitize($_POST['ajk_1']),
				'ajk_2' => $this->filter->sanitize($_POST['ajk_2']),
				'ajk_3' => empty($_POST['ajk_3']) ? NULL : $_POST['ajk_3'],
				'keterangan' => $this->filter->sanitize($_POST['keterangan'])
			);

			$insert = $this->model->addSesi($data);

			if($this->filter->isInt($insert)){

				$msg = array(
					'error_msg' => 'Maklumat jadual sesi pendengaran ini telah berjaya disimpan.',
					'error_url' => BASE_URL.'jadual/senarai',
					'error_type' => 'success',
					'error_title' => 'Sesi berjaya disimpan'
				);

			}else{

				$msg = array(
					'error_msg' => 'Tiada maklumat jadual sesi pendengaran diterima. Sila cuba semula.',
					'error_url' => BASE_URL.'jadual/tambahSesi',
					'error_type' => 'danger',
					'error_title' => 'Tiada maklumat disimpan'
				);
			}

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Jadual',
				'function' => 'createSesi',
				'action' => 'Tambah sesi pendengaran'
			);
			$log->add($data2);

			$header = $this->loadView('auth-header');
			$footer = $this->loadView('auth-footer');
	        $template = $this->loadView('error/notification');
			$template->set('data', $msg);

			$header->render();
			$template->render();
			$footer->render();
		}
	}

	function sesiPendengaran($jadual_id)
	{
		$easyCSRF = new EasyCSRF\EasyCSRF($this->session);

		# generate token
		$token = $easyCSRF->generate('token');

		$js_url = array(
			'https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js'
		);

		$jadual = $this->model->getByID('sesi_jadual', $jadual_id);
		$data = $this->model->getByID('sesi_pendengaran', $jadual_id);

		$custom_js = "<script type=\"text/javascript\">

			var base_url = '".BASE_URL."jadual/process_sesi_pendengaran/".$jadual_id."';
			var sesi_id = '".$jadual_id."';
			var lang_url = '".BASE_URL."languages/dataTables.my.json';
			
			$(document).ready(function() {

    			var table = $('#datatable').DataTable({
    				serverSide : true,
    				processing : true,
    				ajax : {
    					url : base_url,
    					type : 'POST'
    				},
    				deferRender : true,
    				error : true,
    				columns: [
			            { data: 'borang_id' },
			            { data: 'nama_penuh' },
			            { data: 'ic_passport' },
			            { data: 'tarikh_terima' },
			            { data: 'email' },
			            { data: 'hadir' },
			            { data: 'action' }
			        ],
			        lengthMenu: [
						[ 10, 25, 50, -1 ],
						[ '10', '25', '50', 'Semua' ]
					],
    				dom: 'Bfltip',
			        buttons: [
			            {
			                extend: 'excel',
			                exportOptions: {
			                    columns: [ 0, 1, 2, 4 ]
			                }
			            },
			            {
			                extend: 'pdf',
			                exportOptions: {
			                    columns: ':visible',
			                    columns: [ 0, 1, 2, 4 ],
			                    messageTop: 'Senarai Sesi Pendengaran Siri #' + sesi_id
			                }
			            },
			            {
			                extend: 'print',
			                exportOptions: {
			                    columns: [ 0, 1, 2, 4 ],
			                    messageTop: 'Senarai Sesi Pendengaran Siri #' + sesi_id
			                }
			            }
			        ],
			        language : {
		                url: lang_url
		            }
    			});
    			
    		});

    		function deleteBorang(borang_id)
			{
				var delete_url = '".BASE_URL."jadual/deleteBorang';
		    
			    Swal.fire({
			        title: 'Anda pasti?',
			        text: 'Maklumat ini tidak akan disimpan.',
			        type: 'warning',
			        showCancelButton: true,
			        confirmButtonColor: '#DD6B55',
			        confirmButtonText: 'Ya, teruskan!',
			    }).then(function(result){
			    	if (result.value) {
				        $.ajax({
				            url: delete_url,
				            dataType: 'html',
				            data: 'borang_id=' + borang_id + '&sesi_id=' + sesi_id,
				            type: 'POST',
				            success: function(response) {
				            	if(parseInt(response) == 1){
				                	Swal.fire('berjaya!', 'Borang ini telah dikeluarkan dari sesi ini', 'success');
				                	location.reload();
			                	}else{
			                		Swal.fire('Ralat', 'Sila cuba semula. Error: '+response, 'error');
			                	}
				            },
				            error: function (xhr, ajaxOptions, thrownError) {
				                Swal.fire('Ralat!', 'Sila cuba semula', 'error');
				            }
				        });
				    }else if(result.dismiss === Swal.DismissReason.cancel) {
				    	Swal.fire('Cancelled', 'Tiada maklumat yang dihapus', 'info');	
				    }
			    });
			}

		</script>";
		
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('jadual/sesi-pendengaran');

		$header->set('css', $this->css);
		$template->set('token', $token);
		$template->set('jadual', $jadual);
		$template->set('data', $data);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		$footer->set('js_url', $js_url);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function deleteBorang()
	{
		if(isset($_POST)){

			$data = array(
				'sesi_id' => $_POST['sesi_id'],
				'borang_id' => $_POST['borang_id']
			);

			$this->model->deleteBorang($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Jadual',
				'function' => 'deleteBorang',
				'action' => 'Delete borang ID '.$_POST['borang_id'].' dari sesi ID '.$_POST['sesi_id']
			);
			$log->add($data2);
			return true;

		}else{
			return false;
		}
	}

	function delete()
	{
		if(isset($_POST)){

			$data = array(
				'table' => $_POST['table'],
				'id' => $_POST['id']
			);

			$this->model->delete($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Jadual',
				'function' => 'delete',
				'action' => 'Delete jadual'
			);
			$log->add($data2);
			return true;

		}else{
			return false;
		}
	}

	public function process_senarai()
	{
		$table = 'view_sesi_jadual';
		 
		$primaryKey = 'id';

		$columns = array(
		    array( 'db' => 'id', 'dt' => 'id' ),
		    array( 'db' => 'lokasi', 'dt' => 'lokasi' ),
		    array( 'db' => 'jenis', 'dt' => 'jenis' ),
		    array( 'db' => 'tarikh', 'dt' => 'tarikh' ),
		    array( 'db' => 'slot_masa', 'dt' => 'slot_masa' ),
		    array( 'db' => 'chairman', 'dt' => 'chairman' ),
		    array( 'db' => 'ajk_1', 'dt' => 'ajk_1' ),
		    array( 'db' => 'ajk_2', 'dt' => 'ajk_2' ),
		    array( 'db' => 'ajk_3', 'dt' => 'ajk_3' ),
		    array(
		    	'db' => 'id',
		    	'dt' => 'action',
		    	'formatter' => function( $d, $row ) {
            		return "<a href=\"".BASE_URL."jadual/editJadual/".$d."\" class=\"btn btn-primary btn-xs\"><i class=\"fe-scissors\"></i> Edit</a> <a href=\"".BASE_URL."jadual/sesiPendengaran/".$d."\" class=\"btn btn-info btn-xs\"><i class=\"fe-glass\"></i> Papar Sesi</a> <button class=\"btn btn-xs btn-danger\" onclick=\"deleteJadual('".$d."')\"> <i class=\"mdi mdi-delete\"></i> Padam</button>";
        		}
        	)
		);
		 
		$sql_details = array(
		    'user' => DB_USER,
		    'pass' => DB_PASS,
		    'db'   => DB_NAME,
		    'host' => DB_HOST
		);

		$datatable = $this->loadHelper('datatable_helper');
		 
		$data = json_encode(
		    $datatable::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
		);
		print_r($data);
	}

	public function process_sesi_pendengaran()
	{
		$table = 'view_sesi_pendengaran';
		 
		$primaryKey = 'id';

		$columns = array(
		    array(
		    	'db' => 'borang_id',
		    	'dt' => 'borang_id',
		    	'formatter' => function( $d, $row ) {
            		return "PSKL2040/DRAF/".$d;
        		}
        	),
		    array( 'db' => 'nama_penuh', 'dt' => 'nama_penuh' ),
		    array( 'db' => 'ic_passport', 'dt' => 'ic_passport' ),
		    array( 'db' => 'tarikh_terima', 'dt' => 'tarikh_terima' ),
		    array( 'db' => 'email', 'dt' => 'email' ),
		    array( 'db' => 'hadir', 'dt' => 'hadir' ),
        	array(
		    	'db' => 'borang_id',
		    	'dt' => 'action',
		    	'formatter' => function( $d, $row ) {
            		return "<a class=\"btn btn-xs btn-info\" href=\"".BASE_URL."borang/papar_pskl/".$d."\"> <i class=\"mdi mdi-square-edit-outline\"></i> Papar</a> <a class=\"btn btn-xs btn-primary\" href=\"".BASE_URL."borang/cetak_pskl/".$d."\"><i class=\"fe-printer\"></i> Cetak</a> <button class=\"btn btn-xs btn-danger\" onclick=\"deleteBorang(".$d.")\">Padam</button>";
        		}
        	)
		);

		$sql_details = array(
		    'user' => DB_USER,
		    'pass' => DB_PASS,
		    'db'   => DB_NAME,
		    'host' => DB_HOST
		);

		$datatable = $this->loadHelper('datatable_helper');
		 
		$data = json_encode(
		    $datatable::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
		);
		print_r($data);
	}

}