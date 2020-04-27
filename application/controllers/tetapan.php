<?php

class Tetapan extends Controller {

	public function __construct()
	{
		$this->session = $this->loadHelper('session_helper');
		$this->model = $this->loadModel('Tetapan_model');

		$this->css = array(
			'assets/libs/datatables/dataTables.bootstrap4.css',
			'assets/libs/datatables/responsive.bootstrap4.css',
			'assets/libs/datatables/buttons.bootstrap4.css',
			'assets/libs/datatables/select.bootstrap4.css',
			'assets/libs/custombox/custombox.min.css',
			'assets/libs/sweetalert2/sweetalert2.min.css'
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
			'assets/js/pages/sweet-alerts.init.js'
		);

		if(empty($this->session->get('loggedin'))){
			$this->redirect('auth');
		}
	}

	function index($table)
	{
		$custom_js = "<script type=\"text/javascript\">
			
			var base_url = '".BASE_URL."tetapan/process/".$table."';

			function editTetapan(id){

				var post_url = '".BASE_URL."tetapan/get';
				var table = '".$table."';

				$.ajax({
					type: 'POST',
					url: post_url,
					dataType: 'text',
					data: 'table=' + table +'&id=' + id,
					success:function(response){
						var json_data = JSON.parse(response);
						var idd = json_data[0].id;
						var nama = json_data[0].nama;
						var data_html = '<input type=\"text\" class=\"form-control\" name=\"nama\" value=\"'+nama+'\"><input type=\"hidden\" name=\"id\" value=\"'+idd+'\"><input type=\"hidden\" name=\"table\" value=\"'+table+'\">';
						$('#result').html(data_html);
					}
			    });
			}

			// update entry
			function updateTetapan(){

				var post_url = '".BASE_URL."tetapan/update';

				$.ajax({
					type: 'POST',
					url: post_url,
					dataType: 'html',
					data: $('form#edit-tetapan').serialize(),
					success:function(result){
						if(parseInt(result) == 0){
							Swal.fire({
								title: 'Ralat',
								text: 'Tiada maklumat dikemaskini',
								type: 'warning'
							});
						}else{
							Swal.fire({
								title: 'Berjaya',
								text: 'Maklumat telah berjaya dikemaskini.',
								type: 'success'
							}).then(function() {
				                location.reload();
				            });
						}
					}
			    });

			}

			$('button#save-tetapan').bind('click', function(e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				updateTetapan();
			});
			
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
			            { data: 'nama' },
			            { data: 'last_update' },
			            { data: 'action' }
			        ],
			        columnDefs: [
					    { width: '5%', 'targets': 0 },
					    { width: '15%', 'targets': 2 },
					    { width: '15%', 'targets': 3 }
					]
    			});

    			// create entry
				function createTetapan(){

					var post_url = '".BASE_URL."tetapan/add';

					$.ajax({
						type: 'POST',
						url: post_url,
						dataType: 'html',
						data: $('form#tambah-tetapan').serialize(),
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

				$('button#save').bind('click', function(e) {
					e.preventDefault();
					$(this).attr('disabled', 'disabled');
					createTetapan();
				});
    			
    		});

    		// delete entry
			function deleteTetapan(id){

				var delete_url = '".BASE_URL."tetapan/delete';
				var table = '".$table."';

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

		</script>";
		
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('tetapan/index');

		$header->set('css', $this->css);
		$template->set('table', $table);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function get()
	{
		if(isset($_POST['id'])){
			$data = $this->model->getTetapanByID($_POST['table'], $_POST['id']);
			echo json_encode($data);
		}
	}

	function add()
	{
		if(isset($_POST['nama'])){
			
			$data = array(
				'table' => $_POST['table'],
				'nama' => $_POST['nama']
			);

			$add = $this->model->add($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Tetapan',
				'function' => 'add',
				'action' => 'Add new data'
			);
			$log->add($data2);
			return $add;
		}
	}

	function update()
	{
		if(isset($_POST)){

			$data = array(
				'table' => $_POST['table'],
				'nama' => $_POST['nama'],
				'id' => $_POST['id']
			);

			$update = $this->model->update($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Tetapan',
				'function' => 'update',
				'action' => 'Update data'
			);
			$log->add($data2);
			return $update;
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
				'controller' => 'Tetapan',
				'function' => 'delete',
				'action' => 'Delete data'
			);
			$log->add($data2);
			return true;

		}else{
			return false;
		}
	}

	// process datatable
	function process($table)
	{
		$datatable = $this->loadHelper('datatable_helper');
		 
		// Table's primary key
		$primaryKey = 'id';

		$columns = array(
		    array( 'db' => 'id', 'dt' => 'id' ),
		    array( 'db' => 'nama', 'dt' => 'nama' ),
		    array( 'db' => 'last_update', 'dt' => 'last_update' ),
        	array(
		    	'db' => 'id',
		    	'dt' => 'action',
		    	'formatter' => function( $d, $row ) {
            		return "<button class=\"btn btn-info btn-xs edit\" data-toggle=\"modal\" data-target=\"#edit-modal\" onclick=\"editTetapan('".$d."')\"><i class=\"fe-scissors\"></i> Edit</button> <button class=\"delete btn btn-xs btn-danger\" onclick=\"deleteTetapan('".$d."')\"> <i class=\"mdi mdi-delete\"></i> Delete</button>";
        		}
        	)
		);
		 
		// SQL server connection information
		$sql_details = array(
		    'user' => DB_USER,
		    'pass' => DB_PASS,
		    'db'   => DB_NAME,
		    'host' => DB_HOST
		);
		 
		$data = json_encode(
		    $datatable::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
		);
		print_r($data);
	}
}