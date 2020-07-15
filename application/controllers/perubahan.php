<?php

class Perubahan extends Controller {

	public function __construct()
	{
		$this->session = $this->loadHelper('session_helper');
		$this->model = $this->loadModel('Perubahan_model');

		$this->css = array(
			'assets/libs/datatables/dataTables.bootstrap4.css',
			'assets/libs/datatables/responsive.bootstrap4.css',
			'assets/libs/datatables/buttons.bootstrap4.css',
			'assets/libs/datatables/select.bootstrap4.css',
			'assets/libs/sweetalert2/sweetalert2.min.css',
			'assets/libs/select2/select2.min.css'
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
			'assets/libs/sweetalert2/sweetalert2.min.js',
			'assets/js/pages/sweet-alerts.init.js',
			'assets/libs/parsleyjs/parsleyjs.min.js',
			'assets/libs/select2/select2.min.js'
		);

		if(empty($this->session->get('loggedin'))){
			$this->redirect('auth');
		}
	}

	public function index()
	{
		$custom_js = "<script type='text/javascript'>
			var base_url = '".BASE_URL."perubahan/process';
			var lang_url = '".BASE_URL."languages/dataTables.my.json';
			
			$(document).ready(function() {
    			$('#datatable').DataTable({
    				responsive : true,
    				serverSide : true,
    				processing : true,
    				ajax : {
    					url : base_url,
    					type : 'POST'
    				},
    				error : true,
    				columns: [
			            { data: 'id' },
			            { data: 'bil' },
			            { data: 'perkara' },
			            { data: 'zon' },
			            { data: 'last_update' },
			            { data: 'action' }
			        ],
			        columnDefs: [
					    {
			                targets: [ 0 ],
			                visible: false,
			                searchable: false
			            }
					],
				    order: [
						[ 0, 'desc' ]
					],
			        language : {
		                url: lang_url
		            }
    			});

    			var delete_url = '".BASE_URL."perubahan/delete';
				var main_url = '".BASE_URL."perubahan/index';

			    $('.delete').on('click', function(){
			        swal({
			            title: 'Are you sure?',
			            text: 'You will not be able to recover this record!',
			            type: 'question',
			            showCancelButton: true,
			            confirmButtonText: 'Yes, delete it!',
			            cancelButtonText: 'Cancel'
			        }).then(function(){
						$.ajax({
							type: 'POST',
							url: delete_url,
							success: function(){
								
							}
						})
						.done(function() {
							swal({
								title: 'Success',
								text: 'The record is successfully deleted.',
								type: 'success'
							}).then(function() {
								window.location.href = main_url;
							});
						})
						.error(function() {
							swal('Oops', 'Error connecting to the server!', 'error');
						});
					}, function (dismiss) {
						if (dismiss === 'cancel') {
							swal(
								'Cancelled',
								'The record is safe :)',
								'info'
							)
						}
					});
			    });
    		});
		</script>";
		
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('perubahan/index');

		$header->set('css', $this->css);
		$footer->set('js', $this->js);
		$footer->set('custom_js', $custom_js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();

		$log = $this->loadHelper('log_helper');
		$log_data = array(
			'user_id' => $this->session->get('user_id'),
			'controller' => 'Perubahan',
			'function' => 'index',
			'action' => 'View perubahan index'
		);
		$log->add($log_data);
	}

	public function pilih_zon()
	{
		$custom_js = "<script type='text/javascript'>
		</script>";
		
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('perubahan/pilih-zon');

		$header->set('css', $this->css);
		$footer->set('js', $this->js);
		$template->set('zon', $this->model->getZon());
		$footer->set('custom_js', $custom_js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();

		$log = $this->loadHelper('log_helper');
		$log_data = array(
			'user_id' => $this->session->get('user_id'),
			'controller' => 'Perubahan',
			'function' => 'pilih_zon',
			'action' => 'Pilih zon'
		);
		$log->add($log_data);
	}

	public function pilih_tapak($zon_id)
	{
		$custom_js = "<script type='text/javascript'>
		$(document).ready(function() {
			// clear session cache
			sessionStorage.removeItem('tapak');
		});
		</script>";
		
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('perubahan/pilih-tapak');

		$header->set('css', $this->css);
		$footer->set('js', $this->js);
		$template->set('zon', $this->model->getZonByID($zon_id));
		$template->set('perubahan', $this->model->getTapak($zon_id));
		$footer->set('custom_js', $custom_js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();

		$log = $this->loadHelper('log_helper');
		$log_data = array(
			'user_id' => $this->session->get('user_id'),
			'controller' => 'Perubahan',
			'function' => 'pilih_tapak',
			'action' => 'Pilih tapak perubahan'
		);
		$log->add($log_data);
	}

	function tambah()
	{
		$easyCSRF = new EasyCSRF\EasyCSRF($this->session);

		# generate token
		$token = $easyCSRF->generate('token');

		$custom_js = "<script>
		var select_zon = '".BASE_URL."search.php?table=zon';

		$(document).ready(function(){

			$('#zon_id').select2({
				placeholder: 'Pilih',
			    ajax: {
			        url: select_zon,
			        dataType: 'json',
			        processResults: function (data) {
			            return {
			            	results: data
			            };
			        }
			    },
			    cache: true
			});

		});

		$(function () {
			$('#borang').parsley().on('field:validated', function() {
				var ok = $('.parsley-error').length === 0;
				$('.success').toggleClass('d-none', !ok);
				$('.warning').toggleClass('d-none', ok);
			});
		});
		</script>";

		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('perubahan/tambah');

        $header->set('css', $this->css);
        $template->set('token', $token);
        $footer->set('js', $this->js);
        $footer->set('custom_js', $custom_js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function create()
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

			$insert = $this->model->add($data);

			if($this->filter->isInt($insert)){

				$msg = array(
					'error_msg' => 'Maklumat jadual sesi pendengaran ini telah berjaya disimpan.',
					'error_url' => BASE_URL.'perubahan/index',
					'error_type' => 'success',
					'error_title' => 'Sesi berjaya disimpan'
				);

			}else{

				$msg = array(
					'error_msg' => 'Tiada maklumat jadual sesi pendengaran diterima. Sila cuba semula.',
					'error_url' => BASE_URL.'perubahan/tambah',
					'error_type' => 'danger',
					'error_title' => 'Tiada maklumat disimpan'
				);
			}

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Perubahan',
				'function' => 'create',
				'action' => 'Tambah perubahan 3'
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

	public function delete()
	{
		$data = array(
			'id' => $_POST['id'],
			'table' => 'ptkl_perubahan'
		);
		return $this->model->delete($data);
	}

	public function process()
	{
		$table = 'view_perubahan_3';
		 
		$primaryKey = 'id';

		$columns = array(
		    array( 'db' => 'id', 'dt' => 'id' ),
		    array( 'db' => 'bil', 'dt' => 'bil' ),
		    array( 'db' => 'perkara', 'dt' => 'perkara' ),
		    array( 'db' => 'zon', 'dt' => 'zon' ),
		    array( 'db' => 'attachment_1', 'dt' => 'attachment_1' ),
		    array( 'db' => 'attachment_2', 'dt' => 'attachment_2' ),
		    array( 'db' => 'last_update', 'dt' => 'last_update' ),
		    array(
			    	'db' => 'id',
			    	'dt' => 'action',
			    	'formatter' => function( $d, $row ) {
	            		return "<a class=\"btn btn-xs btn-info\" href=\"".BASE_URL."perubahan/papar/".$d."\">Papar</a> <a class=\"btn btn-xs btn-primary\" href=\"".BASE_URL."perubahan/edit/".$d."\">Ubah</a>";
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