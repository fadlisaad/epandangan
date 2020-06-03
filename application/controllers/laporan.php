<?php
/*TODO: select
concat('DRAF/PSKL2040/',borang_id) as borang,
nama_penuh
tarikh_terima,
hadir,
kategori,
nama_organisasi,
jumlah_nama,
alamat,
poskod,
telefon_rumah,
telefon_pejabat,
telefon_bimbit
from view_borang_pskl */
class Laporan extends Controller {

	public function __construct()
	{
		$this->session = $this->loadHelper('session_helper');
		$this->model = $this->loadModel('Laporan_model');

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
			'assets/js/pages/sweet-alerts.init.js',
			'assets/libs/morris-js/morris-js.min.js',
			'assets/libs/raphael/raphael.min.js'
		);

		if(empty($this->session->get('loggedin'))){
			$this->redirect('auth');
		}
	}

	function download()
	{
		$custom_js = "<script type=\"text/javascript\">
			var base_url = '".BASE_URL."laporan/process/download';
			
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
			            { data: 'transaction_id' },
			            { data: 'link' },
			            { data: 'count' },
			            { data: 'last_update' },
			            { data: 'action' }
			        ],
			        columnDefs: [
					    { width: '5%', 'targets': 0 },
					    { width: '25%', 'targets': 1 },
					    { width: '20%', 'targets': 2 },
					    { width: '10%', 'targets': 3 }
					]
    			});
    			
    		});

		</script>";
		
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('laporan/download');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	public function matlamat()
	{
		if($this->session->get('permission') == 'user'){
			$this->redirect('dashboard');
		}

		$matlamat_1 = $this->model->countMatlamat(1);
		$matlamat_2 = $this->model->countMatlamat(2);
		$matlamat_3 = $this->model->countMatlamat(3);
		$matlamat_4 = $this->model->countMatlamat(4);
		$matlamat_5 = $this->model->countMatlamat(5);
		$matlamat_6 = $this->model->countMatlamat(6);

		$custom_js = "<script>
			var base_url = '".BASE_URL."laporan/process/view_matlamat_vs_user';
			var lang_url = '".BASE_URL."languages/dataTables.my.json';

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
			            { data: 'matlamat' },
			            { data: 'nama_penuh' },
			            { data: 'action' }
			        ],
			        language : {
		                url: lang_url
		            }
    			});
    		});

    		$(function () {
			  	Morris.Bar({
					element: 'matlamat',
					data: [
						{device: 'Matlamat 1', geekbench: ".$matlamat_1[0]['total']."},
						{device: 'Matlamat 2', geekbench: ".$matlamat_2[0]['total']."},
						{device: 'Matlamat 3', geekbench: ".$matlamat_3[0]['total']."},
						{device: 'Matlamat 4', geekbench: ".$matlamat_4[0]['total']."},
						{device: 'Matlamat 5', geekbench: ".$matlamat_5[0]['total']."},
						{device: 'Matlamat 6', geekbench: ".$matlamat_6[0]['total']."}
					],
					xkey: 'device',
					ykeys: ['geekbench'],
					labels: ['Borang'],
					barRatio: 0.5,
					xLabelAngle: 35,
					hideHover: 'auto',
					barColors: function (row, series, type) {
					    if (type === 'bar') {
					      var red = Math.ceil(255 * row.y / this.ymax);
					      return 'rgb(' + red + ',0,0)';
					    }
					    else {
					      return '#000';
					    }
					 }
				});
    		});
		</script>"; 

		$header = $this->loadView('header');
		$topbar = $this->loadView('topbar');
        $template = $this->loadView('laporan/matlamat');
		$footer = $this->loadView('footer');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		
		$header->render();
		$topbar->render();
		$template->render();
		$footer->render();
	}

	function payment($trans_id)
	{
		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('laporan/payment');

		$data = $this->model->getByID('payments', 'transaction_id', $trans_id);
		$template->set('data', $data);

		$download = $this->model->getByID('download', 'transaction_id', $trans_id);
		$template->set('download', $download);

		$eps = unserialize($data[0]['remarks']);
        foreach ($eps as $key => $value) {
            if(in_array($key, array('payee_email'))){
            	$email = $this->model->getEmail($value);
            	$template->set('email', $email);
            }
        }
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	// process datatable
	function process($table)
	{
		$datatable = $this->loadHelper('datatable_helper');
		 
		// Table's primary key
		$primaryKey = 'id';

		if($table = 'download'){
			$columns = array(
			    array( 'db' => 'id', 'dt' => 'id' ),
			    array( 'db' => 'transaction_id', 'dt' => 'transaction_id' ),
			    array(
			    	'db' => 'link',
			    	'dt' => 'link',
			    	'formatter' => function( $d, $row ) {
			    		if($d == getenv('DOWNLOAD_LINK_EN')) $data = 'English';
			    		else $data = 'Bahasa Melayu';
			    		return $data;
			    	}
			    ),
			    array( 'db' => 'count', 'dt' => 'count' ),
			    array( 'db' => 'last_update', 'dt' => 'last_update' ),
			    array(
			    	'db' => 'transaction_id',
			    	'dt' => 'action',
			    	'formatter' => function( $d, $row ) {
	            		return "<a class=\"btn btn-xs btn-info\" href=\"".BASE_URL."laporan/payment/".$d."\"> <i class=\"mdi mdi-square-edit-outline\"></i> Papar</a>";
	        		}
	        	)
			);
		}

		if($table = 'view_matlamat_vs_user'){
			$columns = array(
			    array( 'db' => 'id', 'dt' => 'id' ),
			    array( 'db' => 'matlamat', 'dt' => 'matlamat' ),
			    array( 'db' => 'nama_penuh', 'dt' => 'nama_penuh' ),
			    array(
			    	'db' => 'id',
			    	'dt' => 'action',
			    	'formatter' => function( $d, $row ) {
	            		return "<a class=\"btn btn-xs btn-info\" href=\"".BASE_URL."laporan/payment/".$d."\"> <i class=\"mdi mdi-square-edit-outline\"></i> Papar</a>";
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