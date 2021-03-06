<?php

class Template extends Controller {

	public function __construct()
	{
		$this->session = $this->loadHelper('session_helper');
		$this->model = $this->loadModel('Mailer_model');

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

	function index()
	{
		$custom_js = "<script type=\"text/javascript\">
			var base_url = '".BASE_URL."template/process';
			
			$(document).ready(function() {
    			$('#datatable').dataTable({
    				serverSide : true,
    				processing : true,
    				ajax : {
    					url : base_url,
    					type : 'POST'
    				},
    				deferRender : true,
    				error : true,
    				columns: [
			            { data: 'recipient' },
			            { data: 'subject' },
			            { data: 'last_update' },
			            { data: 'action' }
			        ]
    			});
    		});
		</script>";
		
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('template/index');

		$header->set('css', $this->css);
		$footer->set('js', $this->js);
		$footer->set('custom_js', $custom_js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function email_log()
	{
		$custom_js = "<script type=\"text/javascript\">
			var base_url = '".BASE_URL."template/process_emaillog';
			
			$(document).ready(function() {
    			$('#datatable').dataTable({
    				serverSide : true,
    				processing : true,
    				ajax : {
    					url : base_url,
    					type : 'POST'
    				},
    				deferRender : true,
    				error : true,
    				columns: [
			            { data: 'recipient' },
			            { data: 'subject' },
			            { data: 'last_update' },
			            { data: 'action' }
			        ]
    			});
    		});
		</script>";
		
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('template/email-log');

		$header->set('css', $this->css);
		$footer->set('js', $this->js);
		$footer->set('custom_js', $custom_js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}
	
	function add()
	{
		$session = $this->loadHelper('session_helper');
		if(empty($session->get('loggedin'))){
			$this->redirect('auth');
		}

		$css = array(
			'assets/plugins/select2/select2.min.css',
			'assets/plugins/select2/select2-bootstrap.css',
			'assets/plugins/summernote/summernote.css',
		);

		$js = array(
			'assets/plugins/select2/select2.min.js',
			'assets/plugins/summernote/summernote.min.js'
		);

		$custom_js = "<script type=\"text/javascript\">

			$('.summernote').summernote({
                height: 400,                 // set editor height

                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor

                focus: true                 // set focus to editable area after initializing summernote
            });
		</script>";

		$header = $this->loadView('header');
		$navigation = $this->loadView('navigation');
		$footer = $this->loadView('footer');
        $template = $this->loadView('template/insert');

        $header->set('css', $css);
		$footer->set('js', $js);
        $footer->set('custom_js', $custom_js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}
	
	function create()
	{
		$session = $this->loadHelper('session_helper');
		if(empty($session->get('loggedin'))){
			$this->redirect('auth');
		}

		$model = $this->loadModel('Template_model');
		if(isset($_POST)){
			
			$data = array(
				'recipient' => '{{EMAIL}}',
				'subject' => $_POST['subject'],
				'body' => $_POST['body']
			);
			$model->addRecord($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $session->get('user_id'),
				'controller' => 'Template',
				'function' => 'create',
				'action' => 'Add new email template'
			);
			$log->add($data2);

			$this->redirect('template/index');
			
		}else{
			die('Error: Unable to add the record.');
		}
	}
	
	function edit($id)
	{
		$session = $this->loadHelper('session_helper');
		if(empty($session->get('loggedin'))){
			$this->redirect('auth');
		}

		$css = array(
			'assets/plugins/select2/select2.min.css',
			'assets/plugins/select2/select2-bootstrap.css',
			'assets/plugins/wysihtml5/bootstrap-wysihtml5.css',
			'assets/plugins/summernote/summernote.css',
		);

		$js = array(
			'assets/plugins/select2/select2.min.js',
			'assets/plugins/wysihtml5/wysihtml5-0.3.0.js',
			'assets/plugins/wysihtml5/bootstrap-wysihtml5.js',
			'assets/plugins/summernote/summernote.min.js'
		);

		$custom_js = "<script type='text/javascript'>

			$('.wysihtml5').wysihtml5();

			$('.summernote').summernote({
                height: 400,                 // set editor height

                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor

                focus: true                 // set focus to editable area after initializing summernote
            });

			//Parameter
			var delete_url = '".BASE_URL."template/delete/".$id."';
			var main_url = '".BASE_URL."template/index/';

		    $('#delete').click(function(){
		        swal({
		            title: 'Are you sure?',
		            text: 'You will not be able to recover this record!',
		            type: 'warning',
		            showCancelButton: true,
		            confirmButtonText: 'Yes, delete it!',
		            cancelButtonText: 'Cancel',
		            closeOnConfirm: false,
		            closeOnCancel: true
		        },function(){
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
						},function() {
							window.location.href = main_url;
						});
					})
					.error(function() {
						swal('Oops', 'Error connecting to the server!', 'error');
					});
				});
		    });
		</script>";

		$model = $this->loadModel('template_model');
		$data = $model->listSingle($id);

		$header = $this->loadView('header');
		$navigation = $this->loadView('navigation');
		$footer = $this->loadView('footer');
        $template = $this->loadView('template/edit');

		$header->set('css', $css);
		$footer->set('js', $js);
		$footer->set('custom_js', $custom_js);
		$template->set('data', $data);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}
	
	function update()
	{
		$session = $this->loadHelper('session_helper');
		if(empty($session->get('loggedin'))){
			$this->redirect('auth');
		}

		$model = $this->loadModel('Template_model');
		if(isset($_POST)){
			$id = $_POST['id'];
			$data = array(
				'subject' => $_POST['subject'], 
				'body' => $_POST['body']
			);
			$model->editRecord($data,$id);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $session->get('user_id'),
				'controller' => 'Template',
				'function' => 'update',
				'action' => 'Update email template #'.$id
			);
			$log->add($data2);

			$this->redirect('template/index');
			
		}else{
			die('Error: Unable to update the record.');
		}
	}
	
	function delete($id)
	{
		$session = $this->loadHelper('session_helper');
		if(empty($session->get('loggedin'))){
			$this->redirect('auth');
		}

		if(isset($id)){

			$model = $this->loadModel('Template_model');
			$model->deleteRecord($id);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $session->get('user_id'),
				'controller' => 'Template',
				'function' => 'delete',
				'action' => 'Delete email template #'.$id
			);
			$log->add($data2);

			$this->redirect('template/index');
		}else{
			die('Error: Unable to delete the record.');
		}
	}

	// process datatable
	function process()
	{
		$datatable = $this->loadHelper('datatable_helper');

		// DB table to use
		$table = 'email_template';
		 
		// Table's primary key
		$primaryKey = 'id';
		 
		// Array of database columns which should be read and sent back to DataTables. The `db` parameter represents the column name in the database, while the `dt` parameter represents the DataTables column identifier. In this case object parameter names

		$columns = array(
		    array( 'db' => 'recipient', 'dt' => 'recipient' ),
		    array( 'db' => 'subject', 'dt' => 'subject' ),
		    array( 'db' => 'last_update', 'dt' => 'last_update' ),
        	array(
		    	'db' => 'id',
		    	'dt' => 'action',
		    	'formatter' => function( $d, $row ) {
            		return "<a href=\"".BASE_URL."template/edit/".$d."\" class=\"btn btn-info btn-xs\">Edit</a>";
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

	// process datatable
	function process_emaillog()
	{
		$datatable = $this->loadHelper('datatable_helper');

		// DB table to use
		$table = 'email_log';
		 
		// Table's primary key
		$primaryKey = 'id';
		 
		// Array of database columns which should be read and sent back to DataTables. The `db` parameter represents the column name in the database, while the `dt` parameter represents the DataTables column identifier. In this case object parameter names

		$columns = array(
		    array( 'db' => 'recipient', 'dt' => 'recipient' ),
		    array( 'db' => 'subject', 'dt' => 'subject' ),
		    array( 'db' => 'last_update', 'dt' => 'last_update' ),
        	array(
		    	'db' => 'id',
		    	'dt' => 'action',
		    	'formatter' => function( $d, $row ) {
            		return "<a href=\"".BASE_URL."template/view_email/".$d."\" class=\"btn btn-info btn-xs\">Edit</a>";
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