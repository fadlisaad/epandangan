<?php

class Laporan extends Controller {

	public function __construct()
	{
		$this->session = $this->loadHelper('session_helper');
		$this->model = $this->loadModel('Laporan_model');
		$this->dashboard_model = $this->loadModel('Dashboard_model');

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

	public function download()
	{
		$custom_js = "<script type=\"text/javascript\">
			var base_url = '".BASE_URL."laporan/process_download';
			
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

		$js_url = array(
			'https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js'
		);

		$custom_js = "<script>
			var base_url = '".BASE_URL."laporan/process_view_matlamat_vs_user';
			var lang_url = '".BASE_URL."languages/dataTables.my.json';

			var matlamat_1 = '".$matlamat_1[0]['total']."';
			var matlamat_2 = '".$matlamat_2[0]['total']."';
			var matlamat_3 = '".$matlamat_3[0]['total']."';
			var matlamat_4 = '".$matlamat_4[0]['total']."';
			var matlamat_5 = '".$matlamat_5[0]['total']."';
			var matlamat_6 = '".$matlamat_6[0]['total']."';

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
    				lengthMenu: [
						[ 10, 25, 50, -1 ],
						[ '10', '25', '50', 'Semua' ]
					],
    				dom: 'Bfltip',
			        buttons: [
			            'excel', 'pdf', 'print'
			        ],
    				columns: [
			            { data: 'id' },
			            { data: 'nama_penuh' },
			            { data: 'matlamat' }
			        ],
			        language : {
		                url: lang_url
		            }
    			});

    			$('#matlamat-1').text(matlamat_1);
    			$('#matlamat-2').text(matlamat_2);
    			$('#matlamat-3').text(matlamat_3);
    			$('#matlamat-4').text(matlamat_4);
    			$('#matlamat-5').text(matlamat_5);
    			$('#matlamat-6').text(matlamat_6);
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
		$footer->set('js_url', $js_url);
		
		$header->render();
		$topbar->render();
		$template->render();
		$footer->render();
	}

	public function kehadiran()
	{
		if($this->session->get('permission') == 'user'){
			$this->redirect('dashboard');
		}

		$js_url = array(
			'https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js'
		);

		$custom_js = "<script>
			var base_url = '".BASE_URL."laporan/process_kehadiran';
			var lang_url = '".BASE_URL."languages/dataTables.my.json';

			var ya = ".$this->dashboard_model->countKehadiran('Ya').";
			var tidak = ".$this->dashboard_model->countKehadiran('Tidak').";

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
    				lengthMenu: [
						[ 10, 25, 50, -1 ],
						[ '10', '25', '50', 'Semua' ]
					],
    				dom: 'Bfltip',
			        buttons: [
			            'excel', 'pdf', 'print'
			        ],
    				columns: [
			            { data: 'id' },
			            { data: 'nama_penuh' },
			            { data: 'hadir' }
			        ],
			        language : {
		                url: lang_url
		            }
    			});

    			$('#ya').text(ya);
    			$('#tidak').text(tidak);
    		});

    		$(function () {
    			Morris.Donut({
			    	element: 'kehadiran',
			    	data: [
						{label: 'Ya', value: ".$this->dashboard_model->countKehadiran('Ya').", color: '#1abc9c'},
						{label: 'Tidak', value: ".$this->dashboard_model->countKehadiran('Tidak').", color: '#f1556c' }
			    	],
			    	formatter: function (y) { return y + \" orang\" }
			  	});
    		});
		</script>";

		$header = $this->loadView('header');
		$topbar = $this->loadView('topbar');
        $template = $this->loadView('laporan/kehadiran');
		$footer = $this->loadView('footer');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		$footer->set('js_url', $js_url);
		
		$header->render();
		$topbar->render();
		$template->render();
		$footer->render();
	}

	public function kategori()
	{
		if($this->session->get('permission') == 'user'){
			$this->redirect('dashboard');
		}

		$js_url = array(
			'https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js'
		);

		$custom_js = "<script>
			var base_url = '".BASE_URL."laporan/process_kategori';
			var lang_url = '".BASE_URL."languages/dataTables.my.json';

			var individu = ".$this->dashboard_model->countKategori('Individu').";
			var organisasi = ".$this->dashboard_model->countKategori('Organisasi').";

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
    				lengthMenu: [
						[ 10, 25, 50, -1 ],
						[ '10', '25', '50', 'Semua' ]
					],
    				dom: 'Bfltip',
			        buttons: [
			            'excel', 'pdf', 'print'
			        ],
    				columns: [
			            { data: 'id' },
			            { data: 'nama_penuh' },
			            { data: 'kategori' }
			        ],
			        language : {
		                url: lang_url
		            }
    			});

    			$('#individu').text(individu);
    			$('#organisasi').text(organisasi);
    		});

    		$(function () {
    			Morris.Donut({
			    	element: 'kategori',
			    	data: [
						{label: 'Individu', value: ".$this->dashboard_model->countKategori('Individu').", color: '#1abc9c'},
						{label: 'Organisasi', value: ".$this->dashboard_model->countKategori('Organisasi').", color: '#f1556c' }
			    	],
			    	formatter: function (y) { return y + \" borang\" }
			  	});
    		});
		</script>";

		$header = $this->loadView('header');
		$topbar = $this->loadView('topbar');
        $template = $this->loadView('laporan/kategori');
		$footer = $this->loadView('footer');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		$footer->set('js_url', $js_url);
		
		$header->render();
		$topbar->render();
		$template->render();
		$footer->render();
	}

	public function attachment()
	{
		if($this->session->get('permission') == 'user'){
			$this->redirect('dashboard');
		}

		$js_url = array(
			'https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js'
		);

		$custom_js = "<script>
			var base_url = '".BASE_URL."laporan/process_attachment';
			var lang_url = '".BASE_URL."languages/dataTables.my.json';

			var ada = ".$this->dashboard_model->countAttachment().";
			var tiada = ".$this->dashboard_model->countAttachmentNull().";

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
    				lengthMenu: [
						[ 10, 25, 50, -1 ],
						[ '10', '25', '50', 'Semua' ]
					],
    				dom: 'Bfltip',
			        buttons: [
			            'excel', 'pdf', 'print'
			        ],
    				columns: [
			            { data: 'id' },
			            { data: 'nama_penuh' },
			            { data: 'file_id' }
			        ],
			        language : {
		                url: lang_url
		            }
    			});

    			$('#ada').text(ada);
    			$('#tiada').text(tiada);
    		});

    		$(function () {
    			Morris.Donut({
			    	element: 'attachment',
			    	data: [
						{label: 'Ada', value: ".$this->dashboard_model->countAttachment().", color: '#1abc9c'},
						{label: 'Tiada', value: ".$this->dashboard_model->countAttachmentNull().", color: '#f1556c' }
			    	],
			    	formatter: function (y) { return y + \" borang\" }
			  	});
    		});
		</script>";

		$header = $this->loadView('header');
		$topbar = $this->loadView('topbar');
        $template = $this->loadView('laporan/attachment');
		$footer = $this->loadView('footer');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		$footer->set('js_url', $js_url);
		
		$header->render();
		$topbar->render();
		$template->render();
		$footer->render();
	}

	public function jenis()
	{
		if($this->session->get('permission') == 'user'){
			$this->redirect('dashboard');
		}

		$js_url = array(
			'https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js'
		);

		$custom_js = "<script>
			var base_url = '".BASE_URL."laporan/process_jenis';
			var lang_url = '".BASE_URL."languages/dataTables.my.json';

			var total = ".$this->dashboard_model->countTotal().";
			var pegawai = ".$this->dashboard_model->countSubmitByPegawai().";
			var diff = total-pegawai;

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
    				lengthMenu: [
						[ 10, 25, 50, -1 ],
						[ '10', '25', '50', 'Semua' ]
					],
    				dom: 'Bfltip',
			        buttons: [
			            'excel', 'pdf', 'print'
			        ],
    				columns: [
			            { data: 'borang_id' },
			            { data: 'nama_penuh' }
			        ],
			        language : {
		                url: lang_url
		            }
    			});
    		});

    		$('#pegawai').text(pegawai);
    		$('#public').text(diff);

    		$(function () {
    			Morris.Donut({
			    	element: 'jenis',
			    	data: [
						{label: 'Pegawai', value: pegawai, color: '#1abc9c'},
						{label: 'Public', value: diff, color: '#f1556c' }
			    	],
			    	formatter: function (y) { return y + \" borang\" }
			  	});
    		});
		</script>";

		$header = $this->loadView('header');
		$topbar = $this->loadView('topbar');
        $template = $this->loadView('laporan/jenis');
		$footer = $this->loadView('footer');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		$footer->set('js_url', $js_url);
		
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
	function process_download()
	{
		$datatable = $this->loadHelper('datatable_helper');

		$table = 'download';
		$primaryKey = 'id';
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
	function process_view_matlamat_vs_user()
	{
		$datatable = $this->loadHelper('datatable_helper');

		$table = 'view_matlamat_vs_user';
		$primaryKey = 'id';
		$columns = array(
		    array(
		    	'db' => 'id',
		    	'dt' => 'id',
		    	'formatter' => function( $d, $row ) {
            		return "PSKL2040/DRAF/".$d;
        		}
        	),
		    array( 'db' => 'nama_penuh', 'dt' => 'nama_penuh' ),
		    array( 'db' => 'matlamat', 'dt' => 'matlamat' )
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

	// process kehadiran
	function process_kehadiran()
	{
		$datatable = $this->loadHelper('datatable_helper');

		// DB table to use
		$table = 'view_dashboard';
		 
		// Table's primary key
		$primaryKey = 'borang_id';

		$columns = array(
			array(
		    	'db' => 'borang_id',
		    	'dt' => 'id',
		    	'formatter' => function( $d, $row ) {
            		return "PSKL2040/DRAF/".$d;
        		}
        	),
		    array( 'db' => 'nama_penuh', 'dt' => 'nama_penuh' ),
		    array( 'db' => 'hadir', 'dt' => 'hadir' )

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

	// process jenis
	function process_jenis()
	{
		$datatable = $this->loadHelper('datatable_helper');

		// DB table to use
		$table = 'view_borang_pskl';
		 
		// Table's primary key
		$primaryKey = 'borang_id';

		$columns = array(
			array(
		    	'db' => 'borang_id',
		    	'dt' => 'borang_id',
		    	'formatter' => function( $d, $row ) {
            		return "PSKL2040/DRAF/".$d;
        		}
        	),
		    array( 'db' => 'nama_penuh', 'dt' => 'nama_penuh' )

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

	// process kehadiran
	function process_kategori()
	{
		$datatable = $this->loadHelper('datatable_helper');

		// DB table to use
		$table = 'view_dashboard';
		 
		// Table's primary key
		$primaryKey = 'borang_id';

		$columns = array(
			array(
		    	'db' => 'borang_id',
		    	'dt' => 'id',
		    	'formatter' => function( $d, $row ) {
            		return "PSKL2040/DRAF/".$d;
        		}
        	),
		    array( 'db' => 'nama_penuh', 'dt' => 'nama_penuh' ),
		    array( 'db' => 'kategori', 'dt' => 'kategori' )

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

	// process kehadiran
	function process_attachment()
	{
		$datatable = $this->loadHelper('datatable_helper');
		$this->helper = $this->loadHelper('upload_helper');

		// DB table to use
		$table = 'view_dashboard';
		 
		// Table's primary key
		$primaryKey = 'borang_id';

		$columns = array(
			array(
		    	'db' => 'borang_id',
		    	'dt' => 'id',
		    	'formatter' => function( $d, $row ) {
            		return "PSKL2040/DRAF/".$d;
        		}
        	),
		    array( 'db' => 'nama_penuh', 'dt' => 'nama_penuh' ),
		    array(
		    	'db' => 'file_id',
		    	'dt' => 'file_id',
		    	'formatter' => function( $d, $row ) { 
                    if($d > 0){
                    	#$upload = array('id' => $d);
                    	#$get = $this->helper->get($upload);
                    	return "Ada";
                    	#return "<div class=\"button-list\"><a href=\"".BASE_URL."files/".$get[0]['file']."\" class=\"btn btn-blue\"><span class=\"btn-label\"><i class=\"fas fa-file-pdf\"></i></span>Lampiran</a></div>";
                    }else{
                    	return "Tiada";
                    }
        		}
        	),

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