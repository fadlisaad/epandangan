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
			'assets/libs/jquery-countdown/jquery-countdown.min.js',
			'assets/js/jquery.chained.js',
			'assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.js',
			'assets/libs/select2/select2.min.js',
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

			$('#rootwizard').bootstrapWizard({
		        'onNext': function (tab, navigation, index) {
		            var form = $($(tab).data(\"targetForm\"));
		            if (form) {
		                form.addClass('was-validated');
		                if (form[0].checkValidity() === false) {
		                    event.preventDefault();
		                    event.stopPropagation();
		                    return false;
		                }
		            }
		        }
		    });

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

		$data = $this->model->getByID('ptkl_2', $id);

		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('borang/view-ptkl-2');

		$header->set('custom_css', $custom_css);
		$template->set('data', $data);
		$template->set('helper', $this->loadHelper('upload_helper'));
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
	}

	function papar_pskl($id)
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

		$data = $this->model->getByID('pskl', $id);
		$matlamat = $this->model->getByID('matlamat', $id);

		$header = $this->loadView('header');
		$navigation = $this->loadView('topbar');
		$footer = $this->loadView('footer');
        $template = $this->loadView('borang/view-pskl');

		$header->set('custom_css', $custom_css);
		$template->set('data', $data);
		$template->set('matlamat', $matlamat);
		$template->set('helper', $this->loadHelper('upload_helper'));
		
		$header->render();
		$navigation->render();
		$template->render();
		$footer->render();
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

					$pegawai_id = $this->filter->sanitize($_POST['pegawai']);
					$tarikh_key_in = Carbon::now()->toDateString();

					break;
				
				default:
					# code...
					break;
			}

			$dataBorang = array(
				'kategori' => $this->filter->sanitize($_POST['kategori']),
				'nama_organisasi' => $this->filter->sanitize($_POST['nama_organisasi']),
				'jumlah_nama' => $this->filter->sanitize($_POST['jumlah_nama']),
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

	function deleteMatlamat()
	{
		return $this->model->deleteMatlamat($_POST['id']);
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
								</dl>
						        <div class=\"form-group\">
						            <label><span data-tag=\"padangan-cadangan\"></span></label>
						            <textarea class=\"form-control\" rows=\"5\" readonly=\"\">".$value['cadangan']."</textarea>
						        </div>
						        <div class=\"form-group\">
						            <label><span data-tag=\"justifikasi\"></span></label>
						            <textarea class=\"form-control\" rows=\"5\" readonly=\"\">".$value['justifikasi']."</textarea>
						        </div>
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

	// process datatable
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