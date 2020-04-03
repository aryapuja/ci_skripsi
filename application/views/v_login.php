<!DOCTYPE html>
<html lang="en">
<head>
	<title>Perbasasi Kota Malang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/css/main.css">
<!--===============================================================================================-->
  	<link rel="stylesheet" href="<?php echo base_url();?>assets/sa/dist/sweetalert2.min.css">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="<?php echo base_url().'index.php/C_login'?>" method='post'>
					<span class="login100-form-title p-b-51">
						Halaman Login PERBASASI Kota Malang
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Masukkan Username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Masukkan Password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" data-toggle="modal" data-target="#Modal_Regis">
							Daftar
						</button>
					</div>

			</div>
		</div>
	</div>
	
	<form id="formRegis">
		<div class="modal fade" id="Modal_Regis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document" >
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Daftar Akun Baru</h4>
						<button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="form-group col-lg-12">
									<div class="row">

									<div class="col-md-12">
										<label>Nama Lengkap</label>
										<input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" style="width: 100%" required>
									</div>
									
									
									<div class="col-md-6">
										<label>Username</label>
										<input type="text" id="username" name="username" class="form-control" placeholder="Masukkan 6-12 Karakter" minlength="6" maxlength="12" style="width: 100%" required>
									</div>

									<div class="col-md-6">
										<label>Password</label>
										<input type="password" id="password" name="password" class="form-control" placeholder="Masukkan 6-12 Karakter" minlength="6" maxlength="12" style="width: 100%" required>
									</div>

									<div class="col-md-6">
										<label>Tanggal Lahir</label>
										<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" minlength="6" style="width: 100%" required>
									</div>

									<div class="col-md-6">
										<label>Email</label>
										<input type="text" id="email" name="email" class="form-control" placeholder="Masukkan Email Aktif" minlength="6" style="width: 100%" required>
									</div>

									<div class="col-md-6">
										<label>Nomor Telepon</label>
										<input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="Nomor Aktif" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" >
									</div>

									<div class="col-md-6">
										<label>Nomor Telepon Orang Tua</label>
										<input type="text" id="no_hp_ortu" name="no_hp_ortu" class="form-control" placeholder="Nomor Aktif" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" >
									</div>

									<div class="col-md-12">
										<label>Alamat Rumah</label>
										<input type="text" id="alamat_rumah" name="alamat_rumah" class="form-control" placeholder="Masukkan alamat Rumah" minlength="6" style="width: 100%" required>
									</div>

									<div class="col-md-12">
										<label>Asal Sekolah</label>
										<input type="text" id="asal_sekolah" name="asal_sekolah" class="form-control" placeholder="Masukkan Asal Sekolah" minlength="6" style="width: 100%" required>
									</div>

									<div class="col-md-4">
										<label>Jenis Kelamin</label>
										<select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
											<option disabled selected hidden value="">Pilih</option>
											<option value="Laki-laki">Laki-Laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
									</div>

									<div class="col-md-4">
										<label>Tinggi Badan</label>
										<input type="text" id="tinggi_badan" name="tinggi_badan" class="form-control" placeholder="Satuan cm" maxlength="6" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" required>
									</div>

									<div class="col-md-4">
										<label>Berat Badan </label>
										<input type="text" id="berat_badan" name="berat_badan" class="form-control" placeholder="Satuan kg" maxlength="6" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" required>
									</div>

									<div class="col-md-12">
										<label>Riwayat Penyakit</label>
										<input type="text" id="riwayat_penyakit" name="riwayat_penyakit" class="form-control" placeholder="Pisahkan dengan tanda koma jika lebih dari 1" style="width: 100%">
									</div>
								
								</div>
								</div>
							</div>
							
						</div>			
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Daftar</button>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</form>


	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login/js/main.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/sa/dist/sweetalert2.all.min.js"></script>
<!--===============================================================================================-->

<script>
	$(document).ready(function(){

		<?php if ($this->session->flashdata('status_off')): ?>
         Swal.fire({
            type: 'error',
            title: 'Akun Anda Berstatus Nonaktif',
            text: 'Hubungi admin PERBASASI untuk keterangan lebih lanjut',
            showConfirmButton: false,
            timer: 2500
        });
        <?php endif; ?>

        <?php if ($this->session->flashdata('status_menunggu')): ?>
         Swal.fire({
            type: 'info',
            title: 'Akun Telah Terdaftar Namun Belum Diaktifkan',
            text: 'Silahkan menunggu sampai akun diaktifkan Atau hubungi admin untuk keterangan lebih lanjut',
            showConfirmButton: false,
            timer: 2500
        });
        <?php endif; ?>

        <?php if ($this->session->flashdata('wrong_info')): ?>
         Swal.fire({
            type: 'warning',
            title: 'Akun Tidak Terdaftar',
            text: 'Silahkan periksa Nomor Induk dan password yang anda masukkan',
            showConfirmButton: false,
            timer: 2500
        });
        <?php endif; ?>

		$('#formRegis').submit(function(e){
	    	e.preventDefault();
			// memasukkan data inputan ke variabel
			var nama_lengkap		= $('#nama_lengkap').val();
			var username			= $('#username').val();
			var password			= $('#password').val();
			var email				= $('#email').val();
			var tgl_lahir			= $('#tgl_lahir').val();
			var no_hp				= $('#no_hp').val();
			var no_hp_ortu			= $('#no_hp_ortu').val();
			var alamat_rumah		= $('#alamat_rumah').val();
			var asal_sekolah		= $('#asal_sekolah').val();
			var jenis_kelamin		= $('#jenis_kelamin').val();
			var berat_badan			= $('#berat_badan').val();
			var tinggi_badan		= $('#tinggi_badan').val();
			var riwayat_penyakit	= $('#riwayat_penyakit').val();

			$.ajax({
				type : 'POST',
				url  : '<?php echo site_url(); ?>/C_login/daftarAkun',
				dataType : 'JSON',
				data : {
					nama_lengkap:nama_lengkap,
					username:username,
					password:password,
					email:email,
					tgl_lahir:tgl_lahir,
					no_hp:no_hp,
					no_hp_ortu:no_hp_ortu,
					alamat_rumah:alamat_rumah,
					asal_sekolah:asal_sekolah,
					jenis_kelamin:jenis_kelamin,
					berat_badan:berat_badan,
					tinggi_badan:tinggi_badan,
					riwayat_penyakit:riwayat_penyakit,
				},

				success: function(data){
					if(data.code==2){
						Swal.fire({
		                            type: 'warning',
		                            title: 'Username sudah terdaftar',
		                            text: 'Gunakan username lain atau hubungi admin untuk info lebih lanjut',
		                            showConfirmButton: true,
		                            // timer: 1500
		                        })
					}else{
		                Swal.fire({
		                            type: 'success',
		                            title: 'Pendaftaran Akun Baru Selesai Dilakukan',
		                            text: 'Akun bisa digunakan setelah disetujui oleh PERBASASI dalam waktu 1-3 hari kerja',
		                            showConfirmButton: true,
		                            // timer: 1500
		                        })
						$('#Modal_Regis').modal('hide'); 
						document.getElementById('formRegis').reset();	
					} 
	            }
	        });
			return false;
			});
	});
</script>

</body>
</html>