<?php

class Email extends Controller {

	public function __construct()
	{
		$this->session = $this->loadHelper('session_helper');
		$this->model = $this->loadModel('Email_model');
		$this->email = $this->loadHelper('Email_helper');
		$this->mailer = $this->loadModel('Mailer_model');

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
			var base_url = '".BASE_URL."email/process/email_log';
			
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
			            { data: 'recipient' },
			            { data: 'subject' },
			            { data: 'last_update' },
			            { data: 'action' }
			        ],
			        columnDefs: [
					    { width: '5%', 'targets': 0 },
					    { width: '25%', 'targets': 1 },
					    { width: '20%', 'targets': 2 },
					    { width: '15%', 'targets': 4 }
					]
    			});
    			
    		});

		</script>";
		
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('email/index');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function details($id)
	{
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('email/view');

        $template->set('data', $this->model->getByID('email_log', 'id', $id));

		$log = $this->loadHelper('log_helper');
		$log_data = array(
			'user_id' => $this->session->get('user_id'),
			'controller' => 'Log',
			'function' => 'email',
			'action' => 'View email log details #'.$id
		);
		$log->add($log_data);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function resend($id)
	{
		$data = $this->model->getByID('email_log', 'id', $id);

		$email_data = array(
			'email' => $data[0]['recipient'], 
			'subject' => $data[0]['subject'], 
			'content' => $data[0]['body']
		);

		# send the email
		$submit = $this->email->resend($email_data);

		if($submit = true){

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Email',
				'function' => 'resend',
				'action' => 'Resend email to '.$data[0]['recipient']
			);
			$log->add($data2);

			$msg = array(
				'error_msg' => 'E-mail berkenaan telah berjaya dihantar.',
				'error_url' => BASE_URL.'email',
				'error_type' => 'success',
				'error_title' => 'Berjaya!'
			);
		}else{

			$msg = array(
				'error_msg' => 'E-mail berkenaan gagal dihantar. Sila cuba semula',
				'error_url' => BASE_URL.'email',
				'error_type' => 'error',
				'error_title' => 'Gagal!'
			);

		}

		$header = $this->loadView('auth-header');
		$footer = $this->loadView('auth-footer');
        $template = $this->loadView('error/notification');
		$template->set('data', $msg);

		$header->render();
		$template->render();
		$footer->render();
	}

	// process datatable
	function process($table)
	{
		$datatable = $this->loadHelper('datatable_helper');
		 
		// Table's primary key
		$primaryKey = 'id';

		if($table = 'email_log'){
			$columns = array(
			    array( 'db' => 'id', 'dt' => 'id' ),
			    array( 'db' => 'recipient', 'dt' => 'recipient' ),
			    array( 'db' => 'subject', 'dt' => 'subject' ),
			    array( 'db' => 'last_update', 'dt' => 'last_update' ),
			    array(
			    	'db' => 'id',
			    	'dt' => 'action',
			    	'formatter' => function( $d, $row ) {
	            		return "<a class=\"btn btn-xs btn-info\" href=\"".BASE_URL."email/resend/".$d."\"> <i class=\"fe-send\"></i> Resend</a> <a class=\"btn btn-xs btn-primary\" href=\"".BASE_URL."email/details/".$d."\"> <i class=\"fe-search\"></i> Papar</a>";
	        		}
	        	)
			);
		}
		
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