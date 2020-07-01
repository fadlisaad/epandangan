<?php
use Carbon\Carbon as Carbon;
class Borang extends Controller {

	public function __construct()
	{
		$this->session = $this->loadHelper('session_helper');
		$this->model = $this->loadModel('Borang_model');
		$this->a_model = $this->loadModel('Auth_model');
		$this->u_model = $this->loadModel('Pengguna_model');

		$this->css = array(
			'assets/libs/datatables/dataTables.bootstrap4.css',
			'assets/libs/datatables/responsive.bootstrap4.css',
			'assets/libs/datatables/buttons.bootstrap4.css',
			'assets/libs/datatables/select.bootstrap4.css',
			'assets/libs/custombox/custombox.min.css',
			'assets/libs/sweetalert2/sweetalert2.min.css',
			'assets/libs/select2/select2.min.css',
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
			'assets/js/jquery.chained.js',
			'assets/libs/select2/select2.min.js',
			'assets/libs/summernote/summernote.min.js'
		);

		if(empty($this->session->get('loggedin'))){
			$this->redirect('auth');
		}
	}

	function ptkl()
	{
		$custom_js = "<script type=\"text/javascript\">

			var base_url = '".BASE_URL."borang/process/borang_ptkl';
			
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
			            { data: 'nama_penuh' },
			            { data: 'ic_passport' },
			            { data: 'tarikh_terima' },
			            { data: 'action' }
			        ],
			        columnDefs: [
					    { width: '5%', 'targets': 0 },
					    { width: '12%', 'targets': 2 },
					    { width: '12%', 'targets': 3 },
					    { width: '10%', 'targets': 4 }
					]
    			});

    			// create entry
				function create(){

					var post_url = '".BASE_URL."borang/addPTKL';

					$.ajax({
						type: 'POST',
						url: post_url,
						dataType: 'html',
						data: $('form#ptkl').serialize(),
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
        $template = $this->loadView('borang/index-ptkl');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function ptkl_2()
	{
		$custom_js = "<script type=\"text/javascript\">

			var base_url = '".BASE_URL."borang/process/borang_ptkl_2';
			
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
			            { data: 'nama_penuh' },
			            { data: 'ic_passport' },
			            { data: 'tarikh_terima' },
			            { data: 'action' }
			        ],
			        columnDefs: [
					    { width: '5%', 'targets': 0 },
					    { width: '12%', 'targets': 2 },
					    { width: '12%', 'targets': 3 },
					    { width: '10%', 'targets': 4 }
					]
    			});

    			// create entry
				function create(){

					var post_url = '".BASE_URL."borang/addPTKL2';

					$.ajax({
						type: 'POST',
						url: post_url,
						dataType: 'html',
						data: $('form#ptkl').serialize(),
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
        $template = $this->loadView('borang/index-ptkl-2');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function pskl()
	{
		$this->session->set('borang_id', NULL);
		$this->session->set('user_email', NULL);

		$custom_js = "<script type=\"text/javascript\">

			var base_url = '".BASE_URL."borang/process/borang_pskl';

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
			            { data: 'nama_penuh' },
			            { data: 'ic_passport' },
			            { data: 'tarikh_terima' },
			            { data: 'action' }
			        ],
			        columnDefs: [
					    { width: '5%', 'targets': 0 },
					    { width: '12%', 'targets': 2 },
					    { width: '12%', 'targets': 3 },
					    { width: '13%', 'targets': 4 }
					]
    			});

    			// create entry
				function create(){

					var post_url = '".BASE_URL."borang/addPSKL';

					$.ajax({
						type: 'POST',
						url: post_url,
						dataType: 'html',
						data: $('form#pskl').serialize(),
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
        $template = $this->loadView('borang/index-pskl');

		$header->set('css', $this->css);
		$footer->set('custom_js', $custom_js);
		$footer->set('js', $this->js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function edit($borang_id)
	{
		$this->session->set('borang_id', $borang_id);
		$this->redirect('borang/pandangan/pskl');
	}

	function papar_ptkl($id)
	{
		$custom_css = "<style>
		@media print {
		    .printable {
		        background-color: white;
		        height: 100%;
		        width: 100%;
		        position: fixed;
		        top: 0;
		        left: 0;
		        margin: 0;
		        padding: 15px;
		        font-size: 14px;
		        line-height: 18px;
		    }
		}
		</style>";

		$data = $this->model->getByID('ptkl', $id);

		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('borang/view-ptkl');

		$header->set('custom_css', $custom_css);
		$template->set('data', $data);
		$template->set('helper', $this->loadHelper('upload_helper'));
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function papar_ptkl_2($id)
	{
		$custom_css = "<style>
		@media print {
		    .printable {
		        background-color: white;
		        height: 100%;
		        width: 100%;
		        position: fixed;
		        top: 0;
		        left: 0;
		        margin: 0;
		        padding: 15px;
		        font-size: 14px;
		        line-height: 18px;
		    }
		}
		</style>";

		$custom_js = "<script>
			var select_topik = '".BASE_URL."search.php?table=topik';

			$('#topik').select2({
				placeholder: 'Pilih topik',
			    ajax: {
			        url: select_topik,
			        dataType: 'json',
			        processResults: function (data) {
			            return {
			            	results: data
			            };
			        }
			    },
			    cache: true
			});

			var select_zon = '".BASE_URL."search.php?table=zon';

			$('#zon').select2({
				placeholder: 'Pilih zon',
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

			var select_sektor = '".BASE_URL."search.php?table=sektor';

			$('#sektor').select2({
				placeholder: 'Pilih sektor',
			    ajax: {
			        url: select_sektor,
			        dataType: 'json',
			        processResults: function (data) {
			            return {
			            	results: data
			            };
			        }
			    },
			    cache: true
			});

			var select_sesi = '".BASE_URL."search.php?table=sesi_jadual';

			$('#sesi').select2({
				placeholder: 'Pilih sesi pendengaran',
			    ajax: {
			        url: select_sesi,
			        dataType: 'json',
			        processResults: function (data) {
			            return {
			            	results: data
			            };
			        }
			    },
			    cache: true
			});

			// insert tindakan
			function insertTindakan(){

				var post_url = '".BASE_URL."borang/insertTindakanPTKL';

				$.ajax({
					type: 'POST',
					url: post_url,
					dataType: 'html',
					data: $('form#tindakan').serialize(),
					success:function(response){
						if(response == 0){
							Swal.fire({
								title: 'Ralat',
								text: 'Terdapat ralat semasa menyimpan tindakan ini.',
								type: 'warning'
							});
						}else{
							Swal.fire({
								title: 'Berjaya',
								text: 'Tindakan telah berjaya disimpan.',
								type: 'success'
							}).then(function() {
				                location.reload();
				            });
						}
					}
			    });
			}

			$('button#simpan').bind('click', function (e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				insertTindakan();
			});
		</script>";

		$data = $this->model->getByID('ptkl_2', $id);
		$tindakan = $this->model->getSingleByID('tindakan', 'borang_id', $id);

		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('borang/view-ptkl-2');

		$header->set('custom_css', $custom_css);
		$header->set('css', $this->css);
		$template->set('data', $data);
		$template->set('tindakan', $tindakan);
		$template->set('helper', $this->loadHelper('upload_helper'));
		$footer->set('js', $this->js);
		$footer->set('custom_js', $custom_js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function cetak_ptkl_2($id)
	{
		$custom_css = "<style>
		@media print {
		    .printable {
		        background-color: white;
		        height: 100%;
		        width: 100%;
		        position: fixed;
		        top: 0;
		        left: 0;
		        margin: 0;
		        padding: 15px;
		        font-size: 14px;
		        line-height: 18px;
		    }
		}
		</style>";

		$data = $this->model->getByID('ptkl_2', $id);

		$header = $this->loadView('header-print');
		$footer = $this->loadView('footer-print');
        $template = $this->loadView('borang/cetak-ptkl-2');

		$header->set('custom_css', $custom_css);
		$template->set('data', $data);
		$template->set('helper', $this->loadHelper('upload_helper'));
		
		$header->render();
		$template->render();
		$footer->render();
	}

	function cetak_pskl_pa1($id)
	{
		$custom_css = "<style>
		@media print {
			@page {
			  	size: A4 potrait !important;
			  	margin: 25mm 18mm 25mm 25mm;
			}
		    .printable {
		        background-color: white;
		        height: 100%;
		        width: 100%;
		        position: fixed;
		        top: 0;
		        left: 0;
		        margin: 0;
		        padding: 15px;
		        font-size: 14px;
		        line-height: 18px;
		    }
		    div.row{
			    page-break-inside: avoid;
			}
		}
		.square {
			height: 20px;
			width: 20px;
			border: 1px solid grey;
		}
		.square-check{
			padding-left: 20px;
		}
		.borang_title{
			float: right;
			padding: 5px;
			display: block;
			font-weight:bold;
		}
		.borang_id{
			float: right;
			border: 1px solid black;
			padding: 5px;
			display: block;
			font-weight:bold;
		}
		.title-box {
			border: 1px solid black;
		}
		</style>";

		$custom_js = "<script>
    		var get_matlamat = '".$id."';

    		function getMatlamat()
			{
				var get_url = '".BASE_URL."borang/getMatlamat/".$id."';
				var get_data = $.get(get_url, function(data, status){
					$('#success').html(data);
				});
			}

			getMatlamat();
		</script>";

		$header = $this->loadView('header-print');
		$footer = $this->loadView('footer-print');
        $template = $this->loadView('borang/cetak-pskl-pa1');

		$header->set('custom_css', $custom_css);

		$data = $this->model->getByID('pskl', $id);
		$dataMatlamat = $this->model->getByID('matlamat', $id);
		$profile = $this->a_model->getUserProfile($data[0]['user_id']);

		$template->set('profile', $profile);
        $template->set('data', $data);
        $template->set('sesi', $this->model->getSesiByID('sesi_pendengaran', $id));
        $template->set('matlamat', $dataMatlamat);
		$template->set('helper', $this->loadHelper('upload_helper'));
		$template->set('dateHelper', $this->loadHelper('date_helper'));

		$footer->set('custom_js', $custom_js);
		
		$header->render();
		$template->render();
		$footer->render();
	}

	function papar_pskl($id)
	{
		$borang_id = $id;
		$data = $this->model->getByID('pskl', $id);
		$matlamat = $this->model->getByID('matlamat', $id);
		$ulasan = $this->model->getByID('ulasan', $id);
		$ulasanOverall = $this->model->getByID('ulasan_keseluruhan', $id);
		$ulasanMatlamat = $this->model->getByID('ulasan_matlamat', $id);
		$matlamatPegawai = $this->model->getByID('matlamat_pegawai', $id);

		$custom_css = "<style>
		@media print {
		    .printable {
		        background-color: white;
		        height: 100%;
		        width: 100%;
		        position: fixed;
		        top: 0;
		        left: 0;
		        margin: 0;
		        padding: 15px;
		        font-size: 14px;
		        line-height: 18px;
		    }
		}
		</style>";

		$custom_js = "<script>

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

		var select_panel = '".BASE_URL."search.php?table=panel';

		$('#panel').select2({
			placeholder: 'Pilih nama panel',
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

		var select_jawatan = '".BASE_URL."search.php?table=jawatan';

		$('#jawatan').select2({
			placeholder: 'Pilih jawatan panel',
		    ajax: {
		        url: select_jawatan,
		        dataType: 'json',
		        processResults: function (data) {
		            return {
		            	results: data
		            };
		        }
		    },
		    cache: true
		});

		$('#clear_select').click(function(){
			$('#pegawai, #jawatan').val(null).trigger('change');
		});

		// tambah ulasan oleh pegawai
		function createUlasan(){

			var post_url = '".BASE_URL."borang/addUlasan';

			$.ajax({
				type: 'POST',
				url: post_url,
				dataType: 'html',
				data: $('form#ulasan').serialize(),
				success:function(response){
					if(response == 0){
						Swal.fire({
							title: 'Ralat',
							text: 'Terdapat ralat semasa menyimpan ringkasan keseluruhan ini.',
							type: 'warning'
						});
					}else{
						Swal.fire({
							title: 'Berjaya',
							text: 'Ringkasan keseluruhan telah berjaya ditambah.',
							type: 'success'
						}).then(function() {
			                location.reload();
			            });
					}
				}
		    });

		}

		// update ulasan oleh pegawai
		function updateUlasan(ulasan_id){

			var post_url = '".BASE_URL."borang/updateUlasan';

			$.ajax({
				type: 'POST',
				url: post_url,
				dataType: 'html',
				data: $('form#ulasan-'+ulasan_id).serialize(),
				success:function(response){
					if(response == 0){
						Swal.fire({
							title: 'Ralat',
							text: 'Terdapat ralat semasa mengemaskini rigkasan keseluruhan ini.',
							type: 'warning'
						});
					}else{
						Swal.fire({
							title: 'Berjaya',
							text: 'Ringkasan keseluruhan telah berjaya dikemaskini.',
							type: 'success'
						}).then(function() {
			                location.reload();
			            });
					}
				}
		    });
		}

		// tambah ulasan keseluruhan oleh pegawai
		function createUlasanKeseluruhan(){

			var post_url = '".BASE_URL."borang/addUlasanKeseluruhan';

			$.ajax({
				type: 'POST',
				url: post_url,
				dataType: 'html',
				data: $('form#ulasan-keseluruhan').serialize(),
				success:function(response){
					if(response == 0){
						Swal.fire({
							title: 'Ralat',
							text: 'Terdapat ralat semasa menyimpan ulasan keseluruhan ini.',
							type: 'warning'
						});
					}else{
						Swal.fire({
							title: 'Berjaya',
							text: 'Ulasan keseluruhan telah berjaya ditambah.',
							type: 'success'
						}).then(function() {
			                location.reload();
			            });
					}
				}
		    });

		}

		// update ulasan keseluruhan oleh pegawai
		function updateUlasanKeseluruhan(){

			var post_url = '".BASE_URL."borang/updateUlasanKeseluruhan';

			$.ajax({
				type: 'POST',
				url: post_url,
				dataType: 'html',
				data: $('form#ulasan-keseluruhan').serialize(),
				success:function(response){
					if(response == 0){
						Swal.fire({
							title: 'Ralat',
							text: 'Terdapat ralat semasa mengemaskini ulasan keseluruhan ini.',
							type: 'warning'
						});
					}else{
						Swal.fire({
							title: 'Berjaya',
							text: 'Ulasan keseluruhan telah berjaya dikemaskini.',
							type: 'success'
						}).then(function() {
			                location.reload();
			            });
					}
				}
		    });
		}

		// create ulasan matlamat oleh pegawai
		function createUlasanMatlamat(matlamat_id){

			var post_url = '".BASE_URL."borang/addUlasanMatlamat';

			var str = $( 'form#tambah-ulasan-matlamat-'+matlamat_id ).serialize();

			$.ajax({
				type: 'POST',
				url: post_url,
				dataType: 'html',
				data: $('form#tambah-ulasan-matlamat-'+matlamat_id).serialize(),
				success:function(response){
					if(response == 0){
						Swal.fire({
							title: 'Ralat',
							text: 'Terdapat ralat semasa menambah ulasan dan implikasi matlamat ini.',
							type: 'warning'
						});
					}else{
						Swal.fire({
							title: 'Berjaya',
							text: 'Ulasan matlamat telah berjaya ditambah.',
							type: 'success'
						}).then(function() {
			                location.reload();
			            });
					}
				}
		    });
		}

		// update ulasan matlamat oleh pegawai
		function updateUlasanMatlamat(ulasan_id){

			var post_url = '".BASE_URL."borang/updateUlasanMatlamat';

			$.ajax({
				type: 'POST',
				url: post_url,
				dataType: 'html',
				data: $('form#ubah-ulasan-matlamat-'+ulasan_id).serialize(),
				success:function(response){
					if(response == 0){
						Swal.fire({
							title: 'Ralat',
							text: 'Terdapat ralat semasa mengemaskini ulasan dan implikasi ini.',
							type: 'warning'
						});
					}else{
						Swal.fire({
							title: 'Berjaya',
							text: 'Ulasan dan implikasi telah berjaya dikemaskini.',
							type: 'success'
						}).then(function() {
			                location.reload();
			            });
					}
				}
		    });
		}

		var select_sesi = '".BASE_URL."search.php?table=sesi_jadual';

		$('#sesi').select2({
			placeholder: 'Pilih sesi pendengaran',
		    ajax: {
		        url: select_sesi,
		        dataType: 'json',
		        processResults: function (data) {
		            return {
		            	results: data
		            };
		        }
		    },
		    cache: true
		});

		// save sesi pendengaran
		function saveSesi(){

			var post_url = '".BASE_URL."borang/addSesi';

			$.ajax({
				type: 'POST',
				url: post_url,
				dataType: 'html',
				data: $('form#sesi-pendengaran').serialize(),
				success:function(response){
					if(response == 0){
						Swal.fire({
							title: 'Ralat',
							text: 'Terdapat ralat semasa menyimpan sesi pendengaran ini.',
							type: 'warning'
						});
					}else{
						Swal.fire({
							title: 'Berjaya',
							text: 'Sesi pendengaran telah berjaya ditambah.',
							type: 'success'
						}).then(function() {
			                location.reload();
			            });
					}
				}
		    });
		}

		function deleteUlasanMatlamat(id)
		{
			var delete_url = '".BASE_URL."borang/deleteAJAX';
	    
		    Swal.fire({
		        title: 'Anda pasti?',
		        text: 'Ulasan matlamat ini akan dipadam.',
		        type: 'warning',
		        showCancelButton: true,
		        confirmButtonColor: '#DD6B55',
		        confirmButtonText: 'Ya, padam',
		    }).then(function(result){
		    	if (result.value) {
			        $.ajax({
			            url: delete_url,
			            dataType: 'html',
			            data: 'table=ulasan_matlamat&id=' + id,
			            type: 'POST',
			            success: function(response) {
			            	if(parseInt(response) == 1){
			                	Swal.fire('Berjaya!', 'Rekod ini berjaya dihapus', 'success').then((result) => {
			                		location.reload();
			                	});
		                	}else{
		                		Swal.fire('Ralat', 'Sila cuba semula', 'error');
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

		var get_matlamat = '".$id."';

		function getMatlamatPegawai()
		{
			var get_url = '".BASE_URL."borang/getMatlamatPegawai/".$id."';
			var get_data = $.get(get_url, function(data, status){
				$('#success').html(data);
			});
		}

		getMatlamatPegawai();

		$(document).ready(function(){

			$('button.save-ulasan').bind('click', function (e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				createUlasan();
			});

			$('button.update-ulasan').each(function() {
				$(this).bind('click', function (e) {
					var ulasan_id = $(this).data('ulasan');
					e.preventDefault();
					$(this).attr('disabled', 'disabled');
					updateUlasan(ulasan_id);
				});
			});

			$('button#save-ulasan-keseluruhan').bind('click', function (e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				createUlasanKeseluruhan();
			});

			$('button#update-ulasan-keseluruhan').bind('click', function (e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				updateUlasanKeseluruhan();
			});

			$('button.tambah-ulasan-matlamat').each(function() {
				$(this).bind('click', function (e) {
					var matlamat_id = $(this).data('matlamat');
					e.preventDefault();
					$(this).attr('disabled', 'disabled');
					createUlasanMatlamat(matlamat_id);
				});
			});

			$('button.ubah-ulasan-matlamat').each(function() {
				$(this).bind('click', function (e) {
					var ulasan_id = $(this).data('ulasan');
					e.preventDefault();
					$(this).attr('disabled', 'disabled');
					updateUlasanMatlamat(ulasan_id);
				});
			});

			$('button#save-sesi').bind('click', function (e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				saveSesi();
			});

			$('select.kriteria').on('change', function(){

				var kriteria = $(this).val();

				if(kriteria == 'Matlamat, Halatuju dan Tindakan Draf PSKL 2040'){
					$('.rujukan').slideDown();
				}else{
					$('.rujukan').slideUp();
				}
			});

			$('.matlamat').each(function(){
				var id = $(this).data('id');
				$('#halatuju-'+id).chained('#matlamat-'+id);
				$('#tindakan-'+id).chained('#halatuju-'+id);
			});

			$('button.padam-ulasan-matlamat').bind('click', function (e) {
				var id = $(this).data('ulasan');
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				deleteUlasanMatlamat(id);
			});

		});

		</script>";

		if($ulasan){

			$kriteria = $ulasan[0]['kriteria'];

			$custom_js .= "<script>

				var kriteria = '".$kriteria."';

				if(kriteria == 'Matlamat, Halatuju dan Tindakan Draf PSKL 2040'){
					$('.rujukan').show();
				}else{
					$('.rujukan').hide();
				}

				function deleteUlasan(id)
				{
					var delete_url = '".BASE_URL."borang/deleteAJAX';
			    
				    Swal.fire({
				        title: 'Anda pasti?',
				        text: 'Ringkasan dan ulasan bentuk kandungan serta ulasan dan rujukan bagi pandangan ini akan dipadam.',
				        type: 'warning',
				        showCancelButton: true,
				        confirmButtonColor: '#DD6B55',
				        confirmButtonText: 'Ya, padam',
				    }).then(function(result){
				    	if (result.value) {
					        $.ajax({
					            url: delete_url,
					            dataType: 'html',
					            data: 'table=ulasan&id=' + id,
					            type: 'POST',
					            success: function(response) {
					            	if(parseInt(response) == 1){
					                	Swal.fire('Berjaya!', 'Rekod ini berjaya dihapus', 'success').then((result) => {
					                		location.reload();
					                	});
				                	}else{
				                		Swal.fire('Ralat', 'Sila cuba semula', 'error');
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

				$('button.padam-ulasan').bind('click', function (e) {
					var id = $(this).data('ulasan');
					e.preventDefault();
					$(this).attr('disabled', 'disabled');
					deleteUlasan(id);
				});

			</script>";
		}

		foreach ($ulasanMatlamat as $value) {

			$id = $value['id'];
			$kriteriaMatlamat = $value['kriteria'];

			$custom_js .= "<script>
				var kriteria_".$id." = '".$kriteriaMatlamat."';

				if(kriteria_".$id." == 'Matlamat, Halatuju dan Tindakan Draf PSKL 2040'){
					$('#rujukan-".$id."').show();
				}else{
					$('#rujukan-".$id."').hide();
				}

				$('select.kriteria".$id."').on('change', function(){

					var kriteria".$id." = $(this).val();

					if(kriteria".$id." == 'Matlamat, Halatuju dan Tindakan Draf PSKL 2040'){
						$('#rujukan-".$id."').show();
					}else{
						$('#rujukan-".$id."').hide();
					}
				});
			</script>";
		}

		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('borang/view-pskl');

		$header->set('custom_css', $custom_css);
		$header->set('css', $this->css);

		$template->set('data', $data);
		$template->set('sesi', $this->model->getSesiByID('sesi_pendengaran', $borang_id));
		$template->set('matlamat', $matlamat);
		$template->set('ulasan', $ulasan);
		$template->set('ulasanOverall', $ulasanOverall);
		$template->set('ulasanMatlamat', $ulasanMatlamat);
		$template->set('helper', $this->loadHelper('upload_helper'));
		$template->set('dateHelper', $this->loadHelper('date_helper'));

		# dropdown chain select
    	$matlamat_dd = $this->model->getDropdown('pskl_matlamat');
    	$halatuju_dd = $this->model->getDropdown('pskl_halatuju');
    	$tindakan_dd = $this->model->getDropdown('pskl_tindakan');

    	$template->set('matlamat_dd', $matlamat_dd);
    	$template->set('halatuju_dd', $halatuju_dd);
    	$template->set('tindakan_dd', $tindakan_dd);

		$footer->set('js', $this->js);
		$footer->set('custom_js', $custom_js);
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function penilaian($id)
	{
		$custom_css = "<style>
		@media print {
			@page {
			  	size: A4 potrait !important;
			  	margin: 25mm 18mm 25mm 25mm;
			}

			.table-borderless td,
			.table-borderless th {
			    border: 0;
			    padding: 0;
			}

			table.table-bordered > thead > tr > th{
			  	border:1px solid black !important;
			}
		}
		table.table-bordered > thead > tr > th{
		  	border:1px solid black !important;
		}
		table.table-bordered td {
		  	border:1px solid black !important;
		}
		table.table-bordered th {
    		padding: 15px 5px 0px 5px;
    	}
		.borang_title{
			float: right;
			padding: 5px;
			display: block;
			font-weight:bold;
		}
		.borang_id{
			float: right;
			border: 1px solid black;
			padding: 5px;
			display: block;
			font-weight:bold;
		}
		.title-box {
			border: 1px solid black;
		}
		.kepala {
			text-align: center;
			font-weight: bold;
			text-decoration: underline;
		}
		.butiran {
			text-transform: uppercase;
			font-weight: bold;
			text-decoration: underline;
		}
		.table-borderless td,
		.table-borderless th {
		    border: 0;
		}
		.roman{
			list-style-type: lower-alpha;
		}
		</style>";

		$data = $this->model->getByID('pskl', $id);
		$matlamat = $this->model->getByID('matlamat', $id);
		$ulasan = $this->model->getByID('ulasan', $id);
		$ulasanOverall = $this->model->getByID('ulasan_keseluruhan', $id);
		$ulasanMatlamat = $this->model->getByID('ulasan_matlamat', $id);

		$header = $this->loadView('header-print');
		$footer = $this->loadView('footer-print');
        $template = $this->loadView('borang/penilaian-pskl');

		$header->set('custom_css', $custom_css);
		$template->set('data', $data);
		$template->set('matlamat', $matlamat);
		$template->set('ulasan', $ulasan);
		$template->set('ulasanOverall', $ulasanOverall);
		$template->set('ulasanMatlamat', $ulasanMatlamat);
		$template->set('helper', $this->loadHelper('upload_helper'));
		$template->set('dateHelper', $this->loadHelper('date_helper'));
 
		$header->render();
		$template->render();
		$footer->render();
	}

	function penilaian_2($id)
	{
		$custom_css = "<style>
		@media print {
			@page {
			  	size: A4 potrait !important;
			  	margin: 25mm 18mm 25mm 25mm;
			}

			.table-borderless td,
			.table-borderless th {
			    border: 0;
			}
			table.table-bordered > thead > tr > th{
			  	border:1px solid black !important;
			}
			select {
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;
				border: none;
				background: none;
			}
			input {
			    border: none !important;
			    box-shadow: none !important;
			    outline: none !important;
			}
			button {
				display: none !important;
			}
		}
		table.table-bordered > thead > tr > th{
		  	border:1px solid black !important;
		}
		table.table-bordered td {
		  	border:1px solid black !important;
		}
		table.table-bordered th {
    		padding: 15px 5px 0px 5px;
    	}
		.borang_title{
			float: right;
			padding: 5px;
			display: block;
			font-weight:bold;
		}
		.borang_id{
			float: right;
			border: 1px solid black;
			padding: 5px;
			display: block;
			font-weight:bold;
		}
		.title-box {
			border: 1px solid black;
		}
		.kepala {
			text-align: center;
			font-weight: bold;
			text-decoration: underline;
		}
		.butiran {
			text-transform: uppercase;
			font-weight: bold;
			text-decoration: underline;
		}
		.table-borderless td,
		.table-borderless th {
		    border: 0;
		}
		.border-top-2 {
			
		}
		</style>";

		$dataPA3 = $this->model->getPA3('pskl_pa3', $id);

		$custom_js = "<script>

			$('#jawatan_1').chained('#nama_1');
			$('#jawatan_2').chained('#nama_2');
			$('#jawatan_3').chained('#nama_3');

			// insert pa3
			function insertPA3(){

				var post_url = '".BASE_URL."borang/insertPA3';

				$.ajax({
					type: 'POST',
					url: post_url,
					dataType: 'html',
					data: $('form#add-pa3').serialize(),
					success:function(response){
						if(response == 0){
							Swal.fire({
								title: 'Ralat',
								text: 'Terdapat ralat semasa menyimpan data ini.',
								type: 'warning'
							});
						}else{
							Swal.fire({
								title: 'Berjaya',
								text: 'Data telah berjaya disimpan.',
								type: 'success'
							}).then(function() {
				                location.reload();
				            });
						}
					}
			    });
			}

			$('button#save-pa3').bind('click', function (e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				insertPA3();
			});

			// update pa3
			function updatePA3(){

				var post_url = '".BASE_URL."borang/updatePA3';

				$.ajax({
					type: 'POST',
					url: post_url,
					dataType: 'html',
					data: $('form#add-pa3').serialize(),
					success:function(response){
						if(response == 0){
							Swal.fire({
								title: 'Ralat',
								text: 'Terdapat ralat semasa menyimpan borang ini.',
								type: 'warning'
							});
						}else{
							Swal.fire({
								title: 'Berjaya',
								text: 'Data telah berjaya dikemaskini.',
								type: 'success'
							}).then(function() {
				                location.reload();
				            });
						}
					}
			    });
			}

			$('button#update-pa3').bind('click', function (e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				updatePA3();
			});

		</script>";

		if($dataPA3):

			$custom_js .= "<script>

			var pa3 = '".$dataPA3[0]['nama_1']."';
			
			if(pa3){
				$('select#nama_1, select#nama_2, select#nama_3, select#jawatan_1, select#jawatan_2, select#jawatan_3, input#tarikh_1, input#tarikh_2, input#tarikh_3, button#update-pa3').hide();
			}

			$('button#ubah-pa3').bind('click', function (e) {
				
				$('select#nama_1, select#nama_2, select#nama_3, select#jawatan_1, select#jawatan_2, select#jawatan_3, input#tarikh_1, input#tarikh_2, input#tarikh_3, button#update-pa3').show();
				$(this).attr('disabled', 'disabled');
				$('.dataPA3').hide();
				
			});
			</script>";
		endif;

		$ulasanPanel = $this->model->checkPenilaianByID('ulasan_panel', $id);

		$custom_js .= "<script>

			// insert ulasanPanel
			function insertUlasanPanel(){

				var post_url = '".BASE_URL."borang/addUlasanPanel';

				$.ajax({
					type: 'POST',
					url: post_url,
					dataType: 'html',
					data: $('form#add-ulasan-panel').serialize(),
					success:function(response){
						if(response == 0){
							Swal.fire({
								title: 'Ralat',
								text: 'Terdapat ralat semasa menyimpan data ini.',
								type: 'warning'
							});
						}else{
							Swal.fire({
								title: 'Berjaya',
								text: 'Data telah berjaya disimpan.',
								type: 'success'
							}).then(function() {
				                location.reload();
				            });
						}
					}
			    });
			}

			$('button#save-ulasan-panel').bind('click', function (e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				insertUlasanPanel();
			});

			// update ulasanPanel
			function updateUlasanPanel(){

				var post_url = '".BASE_URL."borang/updateUlasanPanel';

				$.ajax({
					type: 'POST',
					url: post_url,
					dataType: 'html',
					data: $('form#add-ulasan-panel').serialize(),
					success:function(response){
						if(response == 0){
							Swal.fire({
								title: 'Ralat',
								text: 'Terdapat ralat semasa menyimpan borang ini.',
								type: 'warning'
							});
						}else{
							Swal.fire({
								title: 'Berjaya',
								text: 'Data telah berjaya dikemaskini.',
								type: 'success'
							}).then(function() {
				                location.reload();
				            });
						}
					}
			    });
			}

			$('button#update-ulasan-panel').bind('click', function (e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				updateUlasanPanel();
			});

			$('#penilaian-06').bind('click', function(){

				if($(this).prop('checked', true)){
					$('#penilaian-other').show()
				}else{
					$('#penilaian-other').hide()
				}
				
			});

			$('#penilaian-01, #penilaian-02, #penilaian-03, #penilaian-04, #penilaian-05').bind('click', function() {
		        $('#penilaian-06').prop('checked', false);
		        $('#penilaian-other-input').val('');
		        $('#penilaian-other').hide();
		    });

		    $('#penilaian-01, #penilaian-02').bind('click', function() {
		        $('#penilaian-03, #penilaian-04, #penilaian-05, #penilaian-06').prop('checked', false);
		        $('#penilaian-other-input').val('');
		        $('#penilaian-other').hide();
		    });

		    $('#penilaian-03, #penilaian-04, #penilaian-05, #penilaian-06').bind('click', function() {
		        $('#penilaian-01, #penilaian-02').prop('checked', false);
		    });

		</script>";

		if($ulasanPanel):

			$custom_js .= "<script>

			var ulasanPanel = '".$ulasanPanel[0]['penilaian']."';
			
			if(ulasanPanel){
				$('button#update-ulasan-panel, .hidePanel').hide();
			}

			$('button#ubah-ulasan-panel').bind('click', function (e) {
				
				$('.hidePanel, button#update-ulasan-panel').show();
				$(this).attr('disabled', 'disabled');
				$('.ulasanPanel, .d-none').hide();
				
			});

			var penilaianText = '".$ulasanPanel[0]['penilaian_other']."';

			if(penilaianText){
				$('#penilaian-other').show()
			}
			</script>";
		endif;

		$data = $this->model->getByID('pskl', $id);
		$matlamat = $this->model->getByID('matlamat', $id);
		$ulasan = $this->model->getByID('ulasan', $id);
		$ulasanOverall = $this->model->getByID('ulasan_keseluruhan', $id);
		$ulasanMatlamat = $this->model->getByID('ulasan_matlamat', $id);
		$jkppa = $this->model->getSesiByID('sesi_pendengaran', $id);

		$header = $this->loadView('header-print');
		$footer = $this->loadView('footer-print');
        #$template = $this->loadView('borang/penilaian-2-pskl');
        $template = $this->loadView('borang/penilaian-2-pskl-v2');

		$header->set('css', $this->css);
		$header->set('custom_css', $custom_css);
		$template->set('data', $data);
		$template->set('matlamat', $matlamat);
		$template->set('ulasan', $ulasan);
		$template->set('ulasanPanel', $ulasanPanel);
		$template->set('ulasanOverall', $ulasanOverall);
		$template->set('ulasanMatlamat', $ulasanMatlamat);
		$template->set('dataPA3', $dataPA3);
		$template->set('jkppa', $jkppa);
		$template->set('helper', $this->loadHelper('upload_helper'));
		$template->set('dateHelper', $this->loadHelper('date_helper'));
		$footer->set('js', $this->js);
		$footer->set('custom_js', $custom_js);
 
		$header->render();
		$template->render();
		$footer->render();
	}

	function catatan($id)
	{
		$custom_css = "<style>
		@media print {
			@page {
			  	size: A4 potrait !important;
			  	margin: 25mm 18mm 25mm 25mm;
			}

			.table-borderless td,
			.table-borderless th {
			    border: 0;
			}
			table.table-bordered > thead > tr > th{
			  	border:1px solid black !important;
			}
			select {
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;
				border: none;
				background: none;
			}
			input {
			    border: none !important;
			    box-shadow: none !important;
			    outline: none !important;
			}
			button {
				display: none !important;
			}
		}
		table.table-bordered > thead > tr > th{
		  	border:1px solid black !important;
		}
		table.table-bordered td {
		  	border:1px solid black !important;
		}
		table.table-bordered th {
    		padding: 15px 5px 0px 5px;
    	}
		.borang_title{
			float: right;
			padding: 5px;
			display: block;
			font-weight:bold;
		}
		.borang_id{
			float: right;
			border: 1px solid black;
			padding: 5px;
			display: block;
			font-weight:bold;
		}
		.title-box {
			border: 1px solid black;
		}
		.kepala {
			text-align: center;
			font-weight: bold;
			text-decoration: underline;
		}
		.butiran {
			text-transform: uppercase;
			font-weight: bold;
			text-decoration: underline;
		}
		.table-borderless td,
		.table-borderless th {
		    border: 0;
		}
		.border-top-2 {
			
		}
		</style>";

		$ulasanPanel = $this->model->checkPenilaianByID('ulasan_panel', $id);

		$custom_js = "<script>

			// insert ulasanPanel
			function insertUlasanPanel(){

				var post_url = '".BASE_URL."borang/addUlasanPanel';

				$.ajax({
					type: 'POST',
					url: post_url,
					dataType: 'html',
					data: $('form#add-ulasan-panel').serialize(),
					success:function(response){
						if(response == 0){
							Swal.fire({
								title: 'Ralat',
								text: 'Terdapat ralat semasa menyimpan data ini.',
								type: 'warning'
							});
						}else{
							Swal.fire({
								title: 'Berjaya',
								text: 'Data telah berjaya disimpan.',
								type: 'success'
							}).then(function() {
				                location.reload();
				            });
						}
					}
			    });
			}

			$('button#save-ulasan-panel').bind('click', function (e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				insertUlasanPanel();
			});

			// update ulasanPanel
			function updateUlasanPanel(){

				var post_url = '".BASE_URL."borang/updateUlasanPanel';

				$.ajax({
					type: 'POST',
					url: post_url,
					dataType: 'html',
					data: $('form#add-ulasan-panel').serialize(),
					success:function(response){
						if(response == 0){
							Swal.fire({
								title: 'Ralat',
								text: 'Terdapat ralat semasa menyimpan borang ini.',
								type: 'warning'
							});
						}else{
							Swal.fire({
								title: 'Berjaya',
								text: 'Data telah berjaya dikemaskini.',
								type: 'success'
							}).then(function() {
				                location.reload();
				            });
						}
					}
			    });
			}

			$('button#update-ulasanPanel').bind('click', function (e) {
				e.preventDefault();
				$(this).attr('disabled', 'disabled');
				updateUlasanPanel();
			});
		</script>";

		if($ulasanPanel):

			$custom_js .= "<script>

			var ulasanPanel = '".$ulasanPanel[0]['penilaian']."';
			
			if(ulasanPanel){
				$('button#update-ulasan-panel, .hidePanel').hide();
			}

			$('button#ubah-ulasan-panel').bind('click', function (e) {
				
				$('.hidePanel, button#update-ulasan-panel').show();
				$(this).attr('disabled', 'disabled');
				$('.ulasanPanel').hide();
				
			});
			</script>";
		endif;

		$data = $this->model->getByID('pskl', $id);
		$matlamat = $this->model->getByID('matlamat', $id);
		$jkppa = $this->model->getSesiByID('sesi_pendengaran', $id);

		$header = $this->loadView('header-print');
		$footer = $this->loadView('footer-print');
        $template = $this->loadView('borang/catatan');

		$header->set('css', $this->css);
		$header->set('custom_css', $custom_css);
		$template->set('data', $data);
		$template->set('jkppa', $jkppa);
		$template->set('ulasanPanel', $ulasanPanel);
		$template->set('helper', $this->loadHelper('upload_helper'));
		$template->set('dateHelper', $this->loadHelper('date_helper'));
		$footer->set('js', $this->js);
		$footer->set('custom_js', $custom_js);
 
		$header->render();
		$template->render();
		$footer->render();
	}

	function insertPA3()
	{
		if(isset($_POST['borang_id'])){
			
			$data = array(
				'borang_id' => $_POST['borang_id'],
				'nama_1' => $_POST['nama_1'],
				'nama_2' => $_POST['nama_2'],
				'nama_3' => $_POST['nama_3'],
				'jawatan_1' => $_POST['jawatan_1'],
				'jawatan_2' => $_POST['jawatan_2'],
				'jawatan_3' => $_POST['jawatan_3'],
				'tarikh_1' => $_POST['tarikh_1'],
				'tarikh_2' => $_POST['tarikh_2'],
				'tarikh_3' => $_POST['tarikh_3']
			);

			$this->model->addPA3($data);
		}
	}

	function updatePA3()
	{
		if(isset($_POST['borang_id'])){
			
			$data = array(
				'borang_id' => $_POST['borang_id'],
				'nama_1' => $_POST['nama_1'],
				'nama_2' => $_POST['nama_2'],
				'nama_3' => $_POST['nama_3'],
				'jawatan_1' => $_POST['jawatan_1'],
				'jawatan_2' => $_POST['jawatan_2'],
				'jawatan_3' => $_POST['jawatan_3'],
				'tarikh_1' => $_POST['tarikh_1'],
				'tarikh_2' => $_POST['tarikh_2'],
				'tarikh_3' => $_POST['tarikh_3']
			);

			$this->model->updatePA3($data);
		}
	}

	function pandangan($borang)
	{
		$easyCSRF = new EasyCSRF\EasyCSRF($this->session);

		# generate token
		$token = $easyCSRF->generate('token');

		$custom_js = "<script>

		var borang_type = '".$borang."';

		$(function () {
			$('#borang-ptkl, #borang-ptkl-2, #borang-pskl').parsley().on('field:validated', function() {
				var ok = $('.parsley-error').length === 0;
				$('#alert-warning').toggleClass('d-none', ok);
			}).on('form:submit', function() {
				return;
			});
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

		if(currentLng == 'my'){
			var msg1_title = 'Makluman';
			var msg1_text = 'Borang Penyertaan Awam Draf Perubahan 1 PBRKL 2020 telah ditutup.';
			var msg2_text = 'Sila baca Panduan Mengisi Borang terlebih dahulu sebelum mengisi borang penyertaan awam ini.';
		}else{
			var msg1_title = 'Attention';
			var msg1_text = 'This form submission has been closed.';
			var msg2_text = 'Please read Guidance for Public Opinion Form before filling up this public opinion form.';
		}

		$('#row-organisasi').hide();

		if(borang_type == 'ptkl'){
			Swal.fire({
				title: msg1_title,
				text: msg1_text,
				type: 'info'
			});
		}else{
			Swal.fire({
				title: msg1_title,
				text: msg2_text,
				type: 'info'
			});
		}

		$('[data-countdown]').each(function () {
			finalDate = $(this).data('countdown');
			$(this).countdown(finalDate, function (event) {
				$(this).html(event.strftime('' + '%D hari %H jam %M minit %S s'));
			});
		});

		$(\"input[name='kategori']\").on('click', function(){
		    $('#row-organisasi').toggle(this.value === 'Organisasi' && this.checked);
		});

		</script>";

		if($borang == 'pskl'){

			if($this->session->get('permission') == 'user'){
				$dataInit = $this->model->getByUserID('pskl',$this->session->get('user_id'));
				$borang_id = $dataInit[0]['borang_id'];
				$this->session->set('borang_id', NULL);
				$this->session->set('user_email', NULL);
			}
			else{
				# kalau pegawai kena simpan then load borang yg currently editing
				if($this->session->get('borang_id') != NULL){
					$borang_id = $this->session->get('borang_id');
				}else{
					$this->session->set('borang_id', NULL);
				 	$borang_id = NULL;
				}
			}

        	$custom_js .= "<script>

        		var get_matlamat = '".$borang_id."';

        		function getMatlamat()
				{
					var get_url = '".BASE_URL."borang/getMatlamat/".$borang_id."';
					var get_data = $.get(get_url, function(data, status){
						$('#success').html(data);
					});
				}

				getMatlamat();

				$('.halatuju').chained('.matlamat');
				$('.tindakan').chained('.halatuju');

			    $('.tindakan').bind('change', function(event) {
			        if ('' != $('option:selected', this).val() && '' != $('option:selected', $('.halatuju')).val()) {
			            $('.extra-pandangan').fadeIn();
			        }
			    });

			    // simpan matlamat
				function simpanMatlamat()
				{
					var post_url = '".BASE_URL."borang/addMatlamat';

					$.ajax({
						type: 'POST',
						url: post_url,
						dataType: 'html',
						data: $('form#borang-matlamat').serialize(),
						success:function(response){
							if(parseInt(response) == 0){
								Swal.fire({
									title: 'Ralat',
									text: 'Ruangan adalah kosong. Sila isi dengan betul.',
									type: 'warning'
								});
							}else{
								Swal.fire({
									title: 'Berjaya',
									text: 'Matlamat telah berjaya ditambah.',
									type: 'success'
								}).then(function() {
					                getMatlamat();
					            });
							}
						}
				    });

				}

				$('.btnAdd').bind('click',function(e) {

					var borang_id = $(this).data('id');
					if(borang_id){
						Swal.fire({
							title: 'Tambah',
							text: 'Sila pilih matlamat, halatuju dan tindakan yang selanjutnya. Sekiranya ingin komen pada matlamat sahaja, pilih - Tidak berkenaan - pada pilihan Halatuju. Sekiranya ingin komen hingga peringkat halatuju sahaja, pilih - Tidak berkenaan - di pilihan Tindakan.',
							type: 'info'
						});
						e.preventDefault();
						simpanMatlamat();
						$('.halatuju, .matlamat, .tindakan').val(null).trigger('change');
						$('.cadangan, justifikasi').val(null);
					}else{
						Swal.fire('Ralat', 'Anda perlu simpan terlebih dahulu borang ini sebelum menambah komen matlamat.', 'info');
						$('button.submit').addClass('animated bounce');
					}
				});

				function deleteMatlamat(id)
				{
					var delete_url = '".BASE_URL."borang/deleteMatlamat';
			    
				    Swal.fire({
				        title: 'Anda pasti?',
				        text: 'Maklumat ini tidak akan disimpan.',
				        type: 'warning',
				        showCancelButton: true,
				        confirmButtonColor: '#DD6B55',
				        confirmButtonText: 'Ya, hapuskan!',
				    }).then(function(result){
				    	if (result.value) {
					        $.ajax({
					            url: delete_url,
					            dataType: 'html',
					            data: 'id=' + id,
					            type: 'POST',
					            success: function(response) {
					            	if(parseInt(response) == 1){
					                	Swal.fire('berjaya!', 'Matlamat ini berjaya dihapus', 'success');
					                	$('#matlamat-'+ id).slideUp();
				                	}else{
				                		Swal.fire('Ralat', 'Sila cuba semula', 'error');
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
		}

		$custom_js .= "<script>

		var select_pegawai = '".BASE_URL."search.php?table=pegawai';

		$('#pegawai').select2({
			placeholder: 'Pilih nama pegawai',
		    ajax: {
		        url: select_pegawai,
		        dataType: 'json',
		        processResults: function (data) {
		            return {
		            	results: data
		            };
		        }
		    },
		    cache: true
		});

		$('#clear_select').click(function(){
			$('#pegawai').val(null).trigger('change');
		});

		// tambah pegawai baru
		function createPegawai(){

			var post_url = '".BASE_URL."borang/addPegawai';

			$.ajax({
				type: 'POST',
				url: post_url,
				dataType: 'html',
				data: $('form#tambah-pegawai').serialize(),
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
							text: 'Nama pegawai telah berjaya ditambah.',
							type: 'success'
						}).then(function() {
			                
			            });
					}
				}
		    });

		}

		$('button#save-pegawai').bind('click', function (e) {
			e.preventDefault();
			$(this).attr('disabled', 'disabled');
			createPegawai();
		});

		</script>";

		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');

        if($borang == 'pskl'){

        	if($this->session->get('permission') == 'officer')
			{
				if($this->session->get('borang_id') != NULL){

					$data = $this->model->getByID('pskl', $borang_id);
					$dataMatlamat = $this->model->getByID('matlamat', $borang_id);
					$profile = $this->a_model->getUserProfile($data[0]['user_id']);
					$this->session->set('user_email', $profile[0]['email']);

					if($data[0]['kategori'] == 'Organisasi'){
						$custom_js .= "<script>
							$('#row-organisasi').show();
						</script>";
					}

				}else{

					$profile = NULL;
					$data = NULL;
					$dataMatlamat = NULL;
				}
			}
			else
			{
				$profile = $this->a_model->getUserProfile($this->session->get('user_id'));
				$data = $this->model->getByUserID('pskl',$this->session->get('user_id'));
				$dataMatlamat = $this->model->getByID('matlamat', $data[0]['borang_id']);
			}

        	$template = $this->loadView('borang/tambah-pskl');

        	# dropdown chain select
        	$matlamat = $this->model->getDropdown('pskl_matlamat');
        	$halatuju = $this->model->getDropdown('pskl_halatuju');
        	$tindakan = $this->model->getDropdown('pskl_tindakan');

        	$template->set('select_matlamat', $matlamat);
        	$template->set('select_halatuju', $halatuju);
        	$template->set('select_tindakan', $tindakan);

        }else if($borang == 'ptkl' || $borang == 'ptkl-2'){

        	$template = $this->loadView('borang/tambah-'.$borang);
        	$data = NULL;
        	$dataMatlamat = NULL;
        	$profile = NULL;
        }

        $header->set('css', $this->css);
        $template->set('token', $token);
        $template->set('profile', $profile);
        $template->set('data', $data);
        $template->set('matlamat', $dataMatlamat);
        $template->set('user_id', $this->session->get('user_id'));
        $footer->set('js', $this->js);
        $footer->set('custom_js', $custom_js);
        $template->set('helper', $this->loadHelper('upload_helper'));
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function addPegawai()
	{
		if(isset($_POST['nama'])){
			
			$data = array(
				'nama' => $_POST['nama']
			);

			$add = $this->model->addPegawai($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Borang',
				'function' => 'addPegawai',
				'action' => 'Add new officer name'
			);
			$log->add($data2);
			return $add;
		}
	}

	function addSesi()
	{
		if(isset($_POST['sesi_id'])){
			
			$data = array(
				'sesi_id' => $_POST['sesi_id'],
				'borang_id' => $_POST['borang_id']
			);

			$add = $this->model->addSesi($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Borang',
				'function' => 'addSesi',
				'action' => 'Add borang_id '.$_POST['borang_id'].' into sessi #'.$_POST['sesi_id']
			);
			$log->add($data2);
			return $add;
		}
	}

	function addUlasanPanel()
	{
		if(isset($_POST['borang_id'])){
			
			$data = array(
				'borang_id' => $_POST['borang_id'],
				'penilaian' => empty($_POST['penilaian']) ? NULL : serialize($_POST['penilaian']),
				'penilaian_other' => empty($_POST['penilaian-other']) ? NULL : $_POST['penilaian-other'],
				'catatan' => empty($_POST['catatan']) ? NULL : $_POST['catatan'],
				'pengesyoran' => empty($_POST['pengesyoran']) ? NULL : $_POST['pengesyoran'],
				'justifikasi' => empty($_POST['justifikasi']) ? NULL : $_POST['justifikasi'],
				'cadangan' => empty($_POST['cadangan']) ? NULL : $_POST['cadangan'],
				'tarikh_panel' => empty($_POST['tarikh_panel']) ? NULL : $_POST['tarikh_panel'],
				'tarikh_disahkan_1' => empty($_POST['tarikh_disahkan_1']) ? NULL : $_POST['tarikh_disahkan_1'],
				'tarikh_disahkan_2' => empty($_POST['tarikh_disahkan_2']) ? NULL : $_POST['tarikh_disahkan_2'],
				'tarikh_disahkan_3' => empty($_POST['tarikh_disahkan_3']) ? NULL : $_POST['tarikh_disahkan_3'],
				'tarikh_disahkan_4' => empty($_POST['tarikh_disahkan_4']) ? NULL : $_POST['tarikh_disahkan_4'],
				'pegawai_1' => empty($_POST['pegawai_1']) ? NULL : $_POST['pegawai_1'],
				'pegawai_2' => empty($_POST['pegawai_2']) ? NULL : $_POST['pegawai_2'],
				'tarikh_urusetia' => empty($_POST['tarikh_urusetia']) ? NULL : $_POST['tarikh_urusetia']
			);

			$add = $this->model->addUlasanPanel($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Borang',
				'function' => 'addUlasanPanel',
				'action' => 'Add borang_id '.$_POST['borang_id'].' into Ulasan Panel'
			);
			$log->add($data2);
			return $add;
		}
	}

	function updateUlasanPanel()
	{
		if(isset($_POST['borang_id'])){
			
			$data = array(
				'borang_id' => $_POST['borang_id'],
				'penilaian' => empty($_POST['penilaian']) ? NULL : serialize($_POST['penilaian']),
				'penilaian_other' => empty($_POST['penilaian-other']) ? NULL : $_POST['penilaian-other'],
				'catatan' => empty($_POST['catatan']) ? NULL : $_POST['catatan'],
				'pengesyoran' => empty($_POST['pengesyoran']) ? NULL : $_POST['pengesyoran'],
				'justifikasi' => empty($_POST['justifikasi']) ? NULL : $_POST['justifikasi'],
				'cadangan' => empty($_POST['cadangan']) ? NULL : $_POST['cadangan'],
				'tarikh_panel' => empty($_POST['tarikh_panel']) ? NULL : $_POST['tarikh_panel'],
				'tarikh_disahkan_1' => empty($_POST['tarikh_disahkan_1']) ? NULL : $_POST['tarikh_disahkan_1'],
				'tarikh_disahkan_2' => empty($_POST['tarikh_disahkan_2']) ? NULL : $_POST['tarikh_disahkan_2'],
				'tarikh_disahkan_3' => empty($_POST['tarikh_disahkan_3']) ? NULL : $_POST['tarikh_disahkan_3'],
				'tarikh_disahkan_4' => empty($_POST['tarikh_disahkan_4']) ? NULL : $_POST['tarikh_disahkan_4'],
				'pegawai_1' => empty($_POST['pegawai_1']) ? NULL : $_POST['pegawai_1'],
				'pegawai_2' => empty($_POST['pegawai_2']) ? NULL : $_POST['pegawai_2'],
				'tarikh_urusetia' => empty($_POST['tarikh_urusetia']) ? NULL : $_POST['tarikh_urusetia'],
				'id' => $_POST['id']
			);

			try{
				$this->model->updateUlasanPanel($data);
			}catch(Exception $e){

			}

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Borang',
				'function' => 'updateUlasanPanel',
				'action' => 'Update borang ulasan panel #'.$_POST['id'].''
			);

			$log->add($data2);
		}
	}

	function addUlasan()
	{
		if(isset($_POST['kriteria'])){
			
			$data = array(
				'borang_id' => $_POST['borang_id'],
				'user_id' => $_POST['user_id'],
				'ringkasan' => empty($_POST['ringkasan']) ? NULL : $_POST['ringkasan'],
				'ulasan' => empty($_POST['ulasan']) ? NULL : $_POST['ulasan'],
				'kriteria' => $_POST['kriteria'],
				'matlamat_id' => empty($_POST['matlamat']) ? NULL : $_POST['matlamat'],
				'halatuju_id' => empty($_POST['halatuju']) ? NULL : $_POST['halatuju'],
				'tindakan_id' => empty($_POST['tindakan']) ? NULL : $_POST['tindakan'],
				'muka_surat' => empty($_POST['muka_surat']) ? NULL : $_POST['muka_surat']
			);

			$add = $this->model->addUlasan($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Borang',
				'function' => 'addUlasan',
				'action' => 'Tambah ulasan borang '.$_POST['borang_id']
			);
			$log->add($data2);

			return $add;
		}
	}

	function addUlasanKeseluruhan()
	{
		if(isset($_POST['ringkasan'])){
			
			$data = array(
				'borang_id' => $_POST['borang_id'],
				'user_id' => $_POST['user_id'],
				'ringkasan' => $_POST['ringkasan'],
				'kriteria' => $_POST['kriteria'],
				'matlamat_id' => empty($_POST['matlamat']) ? NULL : $_POST['matlamat'],
				'halatuju_id' => empty($_POST['halatuju']) ? NULL : $_POST['halatuju'],
				'tindakan_id' => empty($_POST['tindakan']) ? NULL : $_POST['tindakan'],
				'muka_surat' => empty($_POST['muka_surat']) ? NULL : $_POST['muka_surat'],
			);

			$add = $this->model->addUlasanKeseluruhan($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Borang',
				'function' => 'addUlasanKeseluruhan',
				'action' => 'Tambah ulasan keseluruhan borang '.$_POST['borang_id']
			);
			$log->add($data2);

			return $add;
		}
	}

	function addUlasanMatlamat()
	{
		if(isset($_POST['kriteria'])){
			
			$data = array(
				'borang_id' => $_POST['borang_id'],
				'borang_matlamat_id' => $_POST['borang_matlamat_id'],
				'user_id' => $this->session->get('user_id'),
				'ulasan' => $_POST['ulasan'],
				'implikasi' => $_POST['implikasi'],
				'kriteria' => $_POST['kriteria'],
				'matlamat_id' => empty($_POST['matlamat']) ? NULL : $_POST['matlamat'],
				'halatuju_id' => empty($_POST['halatuju']) ? NULL : $_POST['halatuju'],
				'tindakan_id' => empty($_POST['tindakan']) ? NULL : $_POST['tindakan'],
				'muka_surat' => empty($_POST['muka_surat']) ? NULL : $_POST['muka_surat'],
			);

			$add = $this->model->addUlasanMatlamat($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Borang',
				'function' => 'addUlasanMatlamat',
				'action' => 'Tambah ulasan matlamat #ID '.$_POST['borang_matlamat_id']
			);
			$log->add($data2);

			return $add;
		}
	}

	function updateUlasan()
	{
		if(isset($_POST['kriteria'])){
			
			$data = array(
				'id' => $_POST['id'],
				'borang_id' => $_POST['borang_id'],
				'user_id' => $_POST['user_id'],
				'ringkasan' => $_POST['ringkasan'],
				'ulasan' => $_POST['ulasan'],
				'kriteria' => $_POST['kriteria'],
				'matlamat_id' => empty($_POST['matlamat']) ? NULL : $_POST['matlamat'],
				'halatuju_id' => empty($_POST['halatuju']) ? NULL : $_POST['halatuju'],
				'tindakan_id' => empty($_POST['tindakan']) ? NULL : $_POST['tindakan'],
				'muka_surat' => empty($_POST['muka_surat']) ? NULL : $_POST['muka_surat'],
			);

			$add = $this->model->updateUlasan($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Borang',
				'function' => 'updateUlasan',
				'action' => 'Kemaskini ulasan borang '.$_POST['borang_id']
			);
			$log->add($data2);

			return $add;
		}
	}

	function updateUlasanKeseluruhan()
	{
		if(isset($_POST['ringkasan'])){
			
			$data = array(
				'id' => $_POST['id'],
				'borang_id' => $_POST['borang_id'],
				'user_id' => $_POST['user_id'],
				'ringkasan' => $_POST['ringkasan'],
				'kriteria' => $_POST['kriteria'],
				'matlamat_id' => empty($_POST['matlamat']) ? NULL : $_POST['matlamat'],
				'halatuju_id' => empty($_POST['halatuju']) ? NULL : $_POST['halatuju'],
				'tindakan_id' => empty($_POST['tindakan']) ? NULL : $_POST['tindakan'],
				'muka_surat' => empty($_POST['muka_surat']) ? NULL : $_POST['muka_surat'],
			);

			$add = $this->model->updateUlasanKeseluruhan($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Borang',
				'function' => 'updateUlasanKeseluruhan',
				'action' => 'Kemaskini ulasan keseluruhan borang '.$_POST['borang_id']
			);
			$log->add($data2);

			return $add;
		}
	}

	function updateUlasanMatlamat()
	{
		if(isset($_POST['kriteria'])){
			
			$data = array(
				'id' => $_POST['id'],
				'borang_id' => $_POST['borang_id'],
				'borang_matlamat_id' => $_POST['borang_matlamat_id'],
				'user_id' => $this->session->get('user_id'),
				'ulasan' => $_POST['ulasan'],
				'implikasi' => $_POST['implikasi'],
				'kriteria' => $_POST['kriteria'],
				'matlamat_id' => empty($_POST['matlamat']) ? NULL : $_POST['matlamat'],
				'halatuju_id' => empty($_POST['halatuju']) ? NULL : $_POST['halatuju'],
				'tindakan_id' => empty($_POST['tindakan']) ? NULL : $_POST['tindakan'],
				'muka_surat' => empty($_POST['muka_surat']) ? NULL : $_POST['muka_surat'],
			);

			$add = $this->model->updateUlasanMatlamat($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Borang',
				'function' => 'updateUlasanMatlamat',
				'action' => 'Kemaskini ulasan matlamat #ID '.$_POST['borang_matlamat_id']
			);
			$log->add($data2);

			return $add;
		}
	}

	function updateMatlamatPegawai()
	{
		if(isset($_POST['id'])){
			
			$data = array(
				'id' => $_POST['id'],
				'matlamat_id' => $_POST['matlamat'],
				'halatuju_id' => $_POST['halatuju'],
				'tindakan_id' => $_POST['tindakan'],
				'kriteria' => $_POST['kriteria'],
				'muka_surat' => $_POST['muka_surat']
			);

			$add = $this->model->updateMatlamatPegawai($data);

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $this->session->get('user_id'),
				'controller' => 'Borang',
				'function' => 'updateMatlamatPegawai',
				'action' => 'Kemaskini matlamat pegawai #ID '.$_POST['id']
			);
			$log->add($data2);

			return $add;
		}else{
			echo "failed";
		}
	}

	function add_ptkl($table)
	{
		$easyCSRF = new EasyCSRF\EasyCSRF($this->session);

		try{
			$easyCSRF->check('token', $_POST['token']);
		}catch(Exception $e){
			echo $e->getMessage();
		}

		if(isset($_POST['submit'])){

			$this->filter = $this->loadHelper('Filter_helper');

			switch ($this->session->get('permission')) {

				case 'user':

					$dataProfile = array(
						'nama_penuh' => $this->filter->sanitize($_POST['nama_penuh']),
						'ic_passport' => $this->filter->sanitize($_POST['ic_passport']),
						'alamat' => $this->filter->sanitize($_POST['alamat']),
						'poskod' => $this->filter->sanitize($_POST['poskod']),
						'telefon_rumah' => $this->filter->sanitize($_POST['telefon_rumah']),
						'telefon_pejabat' => $this->filter->sanitize($_POST['telefon_pejabat']),
						'telefon_bimbit' => $this->filter->sanitize($_POST['telefon_bimbit']),
						'user_id' => $this->session->get('user_id'),
					);

					$this->u_model->updateProfile($dataProfile);
					$user_id = $this->session->get('user_id');
					$pegawai_id = NULL;
					$tarikh_key_in = NULL;

					break;

				case 'officer':
				case 'admin':
				case 'super':

					# create user
					$username = 'pbrkl2020-draf2-'.rand(0,9999).'@yopmail.com';
					$dataUser = array(
						'username' => $username,
						'password' => '12345678'
					);

					# check if user already exist
					$exist = $this->a_model->getUserByEmail($username);
					
					if($exist == NULL){

						# add new user credential
						$addUser = $this->a_model->addUser($dataUser);

						# get user ID
						$new_id = $this->a_model->getUserByEmail($username);

						# create user profile
						$dataProfile = array(
							'nama_penuh' => $this->filter->sanitize($_POST['nama_penuh']),
							'ic_passport' => $this->filter->sanitize($_POST['ic_passport']),
							'alamat' => $this->filter->sanitize($_POST['alamat']),
							'poskod' => $this->filter->sanitize($_POST['poskod']),
							'telefon_rumah' => $this->filter->sanitize($_POST['telefon_rumah']),
							'telefon_pejabat' => $this->filter->sanitize($_POST['telefon_pejabat']),
							'telefon_bimbit' => $this->filter->sanitize($_POST['telefon_bimbit']),
							'user_id' => $new_id[0]['id'], # special ID ni kena tukar ikut generated above
						);

						$user_id = $new_id[0]['id'];

						# add new user profile
						$this->u_model->addCompleteProfile($dataProfile);

					}else{

						# create user profile
						$dataProfile = array(
							'nama_penuh' => $this->filter->sanitize($_POST['nama_penuh']),
							'ic_passport' => $this->filter->sanitize($_POST['ic_passport']),
							'alamat' => $this->filter->sanitize($_POST['alamat']),
							'poskod' => $this->filter->sanitize($_POST['poskod']),
							'telefon_rumah' => $this->filter->sanitize($_POST['telefon_rumah']),
							'telefon_pejabat' => $this->filter->sanitize($_POST['telefon_pejabat']),
							'telefon_bimbit' => $this->filter->sanitize($_POST['telefon_bimbit']),
							'user_id' => $exist[0]['id'], # special ID ni kena tukar ikut generated above
						);

						$user_id = $exist[0]['id'];

						# apa kena buat kalau dah exist
						$this->u_model->updateProfile($dataProfile);
					}

					$pegawai_id = $this->filter->isInt($_POST['pegawai']);
					$tarikh_key_in = Carbon::now()->toDateString();

					break;
				
				default:
					# code...
					break;
			}

			$dataBorang = array(
				'kategori' => $this->filter->sanitize($_POST['kategori']),
				'nama_organisasi' => $this->filter->sanitize($_POST['nama_organisasi']),
				'jumlah_nama' => $this->filter->isInt($_POST['jumlah_nama']),
				'peta_indeks' => $this->filter->sanitize($_POST['peta_indeks']),
				'no_lot' => $this->filter->sanitize($_POST['no_lot']),
				'muka_surat' => $this->filter->sanitize($_POST['muka_surat']),
				'pandangan_awam' => $this->filter->sanitize($_POST['pandangan_awam']),
				'cadangan' => $this->filter->sanitize($_POST['cadangan']),
				'user_id' => $user_id,
				'pegawai_id' => $pegawai_id,
				'tarikh_terima' => Carbon::now()->toDateString(),
				'tarikh_key_in' => $tarikh_key_in,
				'hadir' => $this->filter->sanitize($_POST['hadir'])
			);

			$insert = $this->model->addPTKL($dataBorang, $table);

			# TODO: hantar notifikasi email

			$msg = array(
				'error_msg' => 'Maklumat borang pandangan awam ini telah berjaya dihantar.',
				'error_url' => BASE_URL.'dashboard',
				'error_type' => 'success',
				'error_title' => 'Borang berjaya dihantar'
			);

			if($this->filter->isInt($insert)){

				if(isset($_FILES)){

					$this->upload = $this->loadHelper('upload_helper');

					if(isset($_FILES['lampiran_a'])){

						$lampiran_a = array(
							'files' => $_FILES['lampiran_a'],
							'file_id' => $insert
						);

						$this->upload->add($lampiran_a);
					}

					if(isset($_FILES['lampiran_c'])){

						$lampiran_c = array(
							'files' => $_FILES['lampiran_c'],
							'file_id' => $insert
						);

						$this->upload->add($lampiran_c);
					}
				}

			}else{
				$msg = array(
					'error_msg' => 'Tiada maklumat pandangan awam diterima. Sila cuba semula.',
					'error_url' => BASE_URL.'borang/pandangan/ptkl',
					'error_type' => 'danger',
					'error_title' => 'Tiada maklumat'
				);
			}

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $user_id,
				'controller' => 'Borang',
				'function' => 'add',
				'action' => 'Add new PTKL form'
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

	function add_pskl()
	{
		$easyCSRF = new EasyCSRF\EasyCSRF($this->session);

		try{
			$easyCSRF->check('token', $_POST['token']);
		}catch(Exception $e){
			echo $e->getMessage();
		}

		if(isset($_POST['submit'])){

			$this->filter = $this->loadHelper('Filter_helper');

			switch ($this->session->get('permission')) {
				case 'user':
					
					$dataProfile = array(
						'nama_penuh' => $this->filter->sanitize($_POST['nama_penuh']),
						'ic_passport' => $this->filter->sanitize($_POST['ic_passport']),
						'alamat' => $this->filter->sanitize($_POST['alamat']),
						'poskod' => $this->filter->sanitize($_POST['poskod']),
						'telefon_rumah' => $this->filter->sanitize($_POST['telefon_rumah']),
						'telefon_pejabat' => $this->filter->sanitize($_POST['telefon_pejabat']),
						'telefon_bimbit' => $this->filter->sanitize($_POST['telefon_bimbit']),
						'user_id' => $this->session->get('user_id'),
					);

					$this->u_model->updateProfile($dataProfile);
					$user_id = $this->session->get('user_id');
					$pegawai_id = NULL;
					$tarikh_key_in = NULL;

					$dataBorang = array(
						'kategori' => $this->filter->sanitize($_POST['kategori']),
						'nama_organisasi' => $this->filter->sanitize($_POST['nama_organisasi']),
						'jumlah_nama' => $this->filter->sanitize($_POST['jumlah_nama']),
						'komen_bentuk_kandungan' => $this->filter->sanitize($_POST['komen_bentuk_kandungan']),
						'komen_lain_lain' => $this->filter->sanitize($_POST['komen_lain_lain']),
						'user_id' => $user_id,
						'pegawai_id' => $pegawai_id,
						'tarikh_terima' => Carbon::now()->toDateString(),
						'tarikh_key_in' => $tarikh_key_in,
						'hadir' => $this->filter->sanitize($_POST['hadir'])
					);

					# check dah pernah hantar ke belum
					$check = $this->model->getByUserID('pskl', $user_id);

					if($check){
						$this->model->updateBorangPSKL($dataBorang);
						$borang_id = $check[0]['borang_id'];
					}else{
						$borang_id = $this->model->addBorangPSKL($dataBorang);
					}

					break;
				
				case 'officer':
				case 'admin':
				case 'super':
					
					# check session email
					if($this->session->get('user_email') != NULL){
						$username = $this->session->get('user_email');
					}else{
						$username = 'pskl2040-draf-'.rand(0,9999).'@yopmail.com';
					}

					# create user
					$dataUser = array(
						'username' => $username,
						'password' => '12345678'
					);

					# check if user already exist
					$exist = $this->a_model->getUserByEmail($username);
					
					if($exist == NULL){

						# add new user credential
						$addUser = $this->a_model->addUser($dataUser);

						# get user ID
						$new_id = $this->a_model->getUserByEmail($username);

						# create user profile
						$dataProfile = array(
							'nama_penuh' => $this->filter->sanitize($_POST['nama_penuh']),
							'ic_passport' => $this->filter->sanitize($_POST['ic_passport']),
							'alamat' => $this->filter->sanitize($_POST['alamat']),
							'poskod' => $this->filter->sanitize($_POST['poskod']),
							'telefon_rumah' => $this->filter->sanitize($_POST['telefon_rumah']),
							'telefon_pejabat' => $this->filter->sanitize($_POST['telefon_pejabat']),
							'telefon_bimbit' => $this->filter->sanitize($_POST['telefon_bimbit']),
							'user_id' => $new_id[0]['id']
						);

						$user_id = $new_id[0]['id'];

						# add new user profile
						$this->u_model->addCompleteProfile($dataProfile);

						# hold email user baru ni utk load balik info
						$this->session->set('user_email', $new_id[0]['email']);

					}else{

						# create user profile
						$dataProfile = array(
							'nama_penuh' => $this->filter->sanitize($_POST['nama_penuh']),
							'ic_passport' => $this->filter->sanitize($_POST['ic_passport']),
							'alamat' => $this->filter->sanitize($_POST['alamat']),
							'poskod' => $this->filter->sanitize($_POST['poskod']),
							'telefon_rumah' => $this->filter->sanitize($_POST['telefon_rumah']),
							'telefon_pejabat' => $this->filter->sanitize($_POST['telefon_pejabat']),
							'telefon_bimbit' => $this->filter->sanitize($_POST['telefon_bimbit']),
							'user_id' => $exist[0]['id'],
						);

						$user_id = $exist[0]['id'];

						# apa kena buat kalau dah exist
						$this->u_model->updateProfile($dataProfile);

						# hold email user baru ni utk load balik info
						$this->session->set('user_email', $exist[0]['email']);
					}

					$pegawai_id = $this->session->get('user_id');
					$tarikh_key_in = Carbon::now()->toDateString();

					$dataBorang = array(
						'kategori' => $this->filter->sanitize($_POST['kategori']),
						'nama_organisasi' => $this->filter->sanitize($_POST['nama_organisasi']),
						'jumlah_nama' => $this->filter->sanitize($_POST['jumlah_nama']),
						'komen_bentuk_kandungan' => $_POST['komen_bentuk_kandungan'],
						'komen_lain_lain' => $_POST['komen_lain_lain'],
						'user_id' => $user_id,
						'pegawai_id' => $pegawai_id,
						'tarikh_terima' => Carbon::now()->toDateString(),
						'tarikh_key_in' => $tarikh_key_in,
						'hadir' => $this->filter->sanitize($_POST['hadir'])
					);

					# check dah pernah hantar ke belum
					$check = $this->model->getByUserID('pskl', $user_id);

					if($check){
						$this->model->updateBorangPSKL($dataBorang);
						$borang_id = $check[0]['borang_id'];
					}else{
						$borang_id = $this->model->addBorangPSKL($dataBorang);
					}

					break;
			}

			$this->session->set('borang_id', $borang_id);

			# TODO: hantar notifikasi email

			$msg = array(
				'error_msg' => 'Maklumat borang pandangan awam anda telah berjaya dihantar.',
				'error_url' => BASE_URL.'borang/pandangan/pskl',
				'error_type' => 'success',
				'error_title' => 'Borang berjaya dihantar'
			);

			if($this->filter->isInt($borang_id)){

				if(isset($_FILES)){

					$this->upload = $this->loadHelper('upload_helper');

					if(isset($_FILES['lampiran_a'])){

						$lampiran_a = array(
							'files' => $_FILES['lampiran_a'],
							'file_id' => $borang_id
						);

						$this->upload->add($lampiran_a);
					}
				}

			}else{
				$msg = array(
					'error_msg' => 'Tiada maklumat pandangan awam diterima. Sila cuba semula.',
					'error_url' => BASE_URL.'borang/pandangan/pskl',
					'error_type' => 'danger',
					'error_title' => 'Tiada maklumat'
				);
			}

			# log user action
			$log = $this->loadHelper('log_helper');
			$data2 = array(
				'user_id' => $_POST['user_id'],
				'controller' => 'Borang',
				'function' => 'add_pskl',
				'action' => 'Add new PSKL form'
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

	function addMatlamat()
	{
		if(isset($_POST['borang_id'])){
			$dataBorangMatlamat = array(
				'borang_id' => $_POST['borang_id'],
				'matlamat_id' => $_POST['matlamat'],
				'halatuju_id' => $_POST['halatuju'],
				'tindakan_id' => $_POST['tindakan'],
				'cadangan' => $_POST['cadangan'],
				'justifikasi' => $_POST['justifikasi']
			);
		}else{
			#
		}

		$this->model->addBorangMatlamat($dataBorangMatlamat);
	}

	function addMatlamatPegawai()
	{
		if(isset($_POST['borang_id'])){
			$dataBorangMatlamat = array(
				'borang_id' => $_POST['borang_id'],
				'pskl_borang_matlamat_id' => $_POST['pskl_borang_matlamat_id'],
				'matlamat_id' => $_POST['matlamat'],
				'halatuju_id' => $_POST['halatuju'],
				'tindakan_id' => $_POST['tindakan'],
				'kriteria' => $_POST['kriteria'],
				'muka_surat' => $_POST['muka_surat']
			);
		}else{
			#
		}

		$this->model->addBorangMatlamatPegawai($dataBorangMatlamat);
	}

	function deleteMatlamat()
	{
		return $this->model->deleteMatlamat($_POST['id']);
	}

	function deleteAJAX()
	{
		$data = array(
			'table' => $_POST['table'],
			'id' => $_POST['id']
		);
		return $this->model->deleteAJAX($data);
	}

	function getMatlamat($borang_id = NULL)
	{
		if($borang_id){
			$matlamat = $this->model->getByID('matlamat', $borang_id);

			if(is_array($matlamat)){
				foreach ($matlamat as $value){
					echo "<div class=\"card\" id=\"matlamat-".$value['id']."\">
		                <div class=\"card-header bg-dark py-3 text-white\">
		                    <div class=\"card-widgets\">
		                        <a data-toggle=\"collapse\" href=\"#cardCollpase-".$value['id']."\" role=\"button\" aria-controls=\"cardCollpase2\"><i class=\"mdi mdi-minus\"></i></a>
		                    </div>
		                    <h5 class=\"card-title mb-0 text-white\">Matlamat #".$value['id']."</h5>
		                </div>
		                <div id=\"cardCollpase-".$value['id']."\" class=\"collapse show\">
		                    <div class=\"card-body\">
		                        <dl class=\"row\">
									<dt class=\"col-md-3\">Matlamat</dt>
									<dd class=\"col-md-9\">".$value['matlamat']."</dd>
									<dt class=\"col-md-3\">Halatuju</dt>
									<dd class=\"col-md-9\">".$value['halatuju']."</dd>
									<dt class=\"col-md-3\">Tindakan</dt>
									<dd class=\"col-md-9\">".$value['tindakan']."</dd>
							        <dt class=\"col-md-3\"><span data-tag=\"padangan-cadangan\"></span></dt>
							        <dd class=\"col-md-9\">".$value['cadangan']."</dd>
							        <dt class=\"col-md-3\"><span data-tag=\"justifikasi\"></span></dt>
							        <dd class=\"col-md-9\">".$value['justifikasi']."</dd>
						       	</dl>
						        <button type=\"button\" data-id=\"".$value['id']."\" class=\"btn btn-danger btn-sm\" onclick=\"deleteMatlamat(".$value['id'].")\"><i class=\"mdi mdi-close\"></i> Padam</button>
		                    </div>
		                </div>
		            </div>";
		    	}
		    }else{
		    	echo "No response";
		    }
		}else{
			echo "<div class=\"alert alert-info\">Sila simpan dahulu borang ini sebelum menambah komen matlamat.</div>";
		}
	}

	function getMatlamatPegawai($borang_id = NULL)
	{
		if($borang_id){
			$matlamat = $this->model->getByID('matlamat_pegawai', $borang_id);

			if(is_array($matlamat)){
				foreach ($matlamat as $value){
					echo "<div class=\"card\" id=\"matlamat-".$value['id']."\">
		                <div class=\"card-header bg-dark py-3 text-white\">
		                    <div class=\"card-widgets\">
		                        <a data-toggle=\"collapse\" href=\"#cardCollpase-".$value['id']."\" role=\"button\" aria-controls=\"cardCollpase2\"><i class=\"mdi mdi-minus\"></i></a>
		                    </div>
		                    <h5 class=\"card-title mb-0 text-white\">Matlamat #".$value['id']."</h5>
		                </div>
		                <div id=\"cardCollpase-".$value['id']."\" class=\"collapse show\">
		                    <div class=\"card-body\">
		                        <dl class=\"row\">
									<dt class=\"col-md-3\">Matlamat</dt>
									<dd class=\"col-md-9\">".$value['matlamat']."</dd>
									<dt class=\"col-md-3\">Halatuju</dt>
									<dd class=\"col-md-9\">".$value['halatuju']."</dd>
									<dt class=\"col-md-3\">Tindakan</dt>
									<dd class=\"col-md-9\">".$value['tindakan']."</dd>
						       	</dl>
						        <button type=\"button\" data-id=\"".$value['id']."\" class=\"btn btn-danger btn-sm\" onclick=\"deleteMatlamat(".$value['id'].")\"><i class=\"mdi mdi-close\"></i> Padam</button>
		                    </div>
		                </div>
		            </div>";
		    	}
		    }else{
		    	echo "No response";
		    }
		}else{
			echo "<div class=\"alert alert-info\">Sila simpan dahulu borang ini sebelum menambah komen matlamat.</div>";
		}
	}

	function process($table)
	{
		$datatable = $this->loadHelper('datatable_helper');
		 
		// Table's primary key
		$primaryKey = 'borang_id';

		if($table == 'borang_ptkl'){
			$columns = array(
			    array(
			    	'db' => 'borang_id',
			    	'dt' => 'id',
			    	'formatter' => function( $d, $row ) {
	            		return "PBRKL2040/DRAF1/".$d;
	        		}
	        	),
			    array( 'db' => 'nama_penuh', 'dt' => 'nama_penuh' ),
			    array( 'db' => 'ic_passport', 'dt' => 'ic_passport' ),
			    array( 'db' => 'tarikh_terima', 'dt' => 'tarikh_terima' ),
	        	array(
			    	'db' => 'borang_id',
			    	'dt' => 'action',
			    	'formatter' => function( $d, $row ) {
	            		return "<a class=\"btn btn-xs btn-info\" href=\"".BASE_URL."borang/papar_ptkl/".$d."\"> <i class=\"mdi mdi-square-edit-outline\"></i> Papar</a>";
	        		}
	        	)
			);
		}

		if($table == 'borang_ptkl_2'){
			$columns = array(
			    array(
			    	'db' => 'borang_id',
			    	'dt' => 'id',
			    	'formatter' => function( $d, $row ) {
	            		return "PBRKL2040/DRAF2/".$d;
	        		}
	        	),
			    array( 'db' => 'nama_penuh', 'dt' => 'nama_penuh' ),
			    array( 'db' => 'ic_passport', 'dt' => 'ic_passport' ),
			    array( 'db' => 'tarikh_terima', 'dt' => 'tarikh_terima' ),
	        	array(
			    	'db' => 'borang_id',
			    	'dt' => 'action',
			    	'formatter' => function( $d, $row ) {
	            		return "<a class=\"btn btn-xs btn-info\" href=\"".BASE_URL."borang/papar_ptkl_2/".$d."\"> <i class=\"mdi mdi-square-edit-outline\"></i> Papar</a>";
	        		}
	        	)
			);
		}

		if($table == 'borang_pskl'){
			$columns = array(
			    array(
			    	'db' => 'borang_id',
			    	'dt' => 'id',
			    	'formatter' => function( $d, $row ) {
	            		return "PSKL2040/DRAF/".$d;
	        		}
	        	),
			    array( 'db' => 'nama_penuh', 'dt' => 'nama_penuh' ),
			    array( 'db' => 'ic_passport', 'dt' => 'ic_passport' ),
			    array( 'db' => 'tarikh_terima', 'dt' => 'tarikh_terima' ),
	        	array(
			    	'db' => 'borang_id',
			    	'dt' => 'action',
			    	'formatter' => function( $d, $row ) {
	            		return "<a class=\"btn btn-xs btn-info\" href=\"".BASE_URL."borang/papar_pskl/".$d."\">Papar</a> <a class=\"btn btn-xs btn-primary\" href=\"".BASE_URL."borang/edit/".$d."\">Ubah</a>";
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
		    $datatable::simple( $_POST, $sql_details, 'view_'.$table, $primaryKey, $columns )
		);
		print_r($data);
	}
}