<?php

class Log extends Controller {

	public function __construct()
	{
		$this->session = $this->loadHelper('session_helper');
		$this->model = $this->loadModel('Log_model');

		$this->css = array(
			'assets/libs/datatables/dataTables.bootstrap4.css',
			'assets/libs/datatables/responsive.bootstrap4.css',
			'assets/libs/datatables/buttons.bootstrap4.css',
			'assets/libs/datatables/select.bootstrap4.css',
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
			'assets/libs/sweetalert2/sweetalert2.min.js',
			'assets/js/pages/sweet-alerts.init.js'
		);

		if(empty($this->session->get('loggedin'))){
			$this->redirect('auth');
		}
	}

	public function audit()
	{
		$custom_js = "<script type='text/javascript'>
			var base_url = '".BASE_URL."log/process_audit';
			
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
			            { data: 'nama_penuh' },
			            { data: 'email' },
			            { data: 'controller' },
			            { data: 'function' },
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
					]
    			});

    			var delete_url = '".BASE_URL."log/deleteLog/audit_log';
				var main_url = '".BASE_URL."log/audit/';

			    $('#clear-log-button').on('click', function(){
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
        $template = $this->loadView('log/audit');

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
			'controller' => 'Log',
			'function' => 'audit',
			'action' => 'View audit log'
		);
		$log->add($log_data);
	}

	function deleteLog($table)
	{
		$this->model->deleteLog($table);

		# log user action
		$log = $this->loadHelper('log_helper');
		$log_data = array(
			'user_id' => $this->session->get('user_id'),
			'controller' => 'Log',
			'function' => 'truncate',
			'action' => 'Truncate '.$table
		);
		$log->add($log_data);
	}

	public function error()
	{
		$custom_js = "<script type='text/javascript'>

			var base_url = '".BASE_URL."log/process_error';
			
			$(document).ready(function() {

    			$('#datatable').dataTable({
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
			            { data: 'error_title' },
			            { data: 'error_content' },
			            { data: 'last_update' }
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
					]
    			});

    			var delete_url = '".BASE_URL."log/deleteLog/error_log';
				var main_url = '".BASE_URL."log/error/';

			    $('#clear-log-button').on('click', function(){
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
        $template = $this->loadView('log/error');

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
			'controller' => 'Log',
			'function' => 'error',
			'action' => 'View error log'
		);
		$log->add($log_data);
	}

	public function process_audit()
	{
		$table = 'view_audit_log';
		 
		$primaryKey = 'id';

		$columns = array(
		    array( 'db' => 'id', 'dt' => 'id' ),
		    array( 'db' => 'nama_penuh', 'dt' => 'nama_penuh' ),
		    array( 'db' => 'email', 'dt' => 'email' ),
		    array( 'db' => 'controller', 'dt' => 'controller' ),
		    array( 'db' => 'function', 'dt' => 'function' ),
		    array( 'db' => 'action', 'dt' => 'action' )
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

	public function process_error()
	{
		$table = 'error_log';
		 
		$primaryKey = 'id';

		$columns = array(
		    array( 'db' => 'id', 'dt' => 'id' ),
		    array( 'db' => 'error_title', 'dt' => 'error_title' ),
		    array( 'db' => 'error_content', 'dt' => 'error_content' ),
		    array( 'db' => 'last_update', 'dt' => 'last_update' )
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