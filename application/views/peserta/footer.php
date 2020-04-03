<!-- jQuery -->
<script src="<?php echo base_url();?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<!-- <script src="<?php echo base_url();?>assets/adminlte/plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<!-- <script src="<?php echo base_url();?>assets/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script> -->
<!-- <script src="<?php echo base_url();?>assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/adminlte/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>assets/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/adminlte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php echo base_url();?>assets/adminlte/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/adminlte/dist/js/demo.js"></script>
<!--  DataTables -->
<script src="<?php echo base_url();?>assets/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- SweetAlert -->
<script src="<?php echo base_url();?>assets/sa/dist/sweetalert2.all.min.js"></script>
<!-- Fungsi -->
<script>
	$(document).ready(function(){
		// showListUser();

	/*MANAJEMEN AKUN*/

    	/*Edit Akun*/

            //UPDATE record to database (submit button)
            $('#formEditAkun').submit(function(e){
                e.preventDefault(); 
                // memasukkan data dari form update ke variabel untuk update db
                var edt_nama_lengkap 	    = $('#edt_nama_lengkap').val();
                var edt_username     	    = $('#edt_username').val();
                var edt_email		        = $('#edt_email').val();
                var edt_tgl_lahir   	    = $('#edt_tgl_lahir').val();
                var edt_no_hp               = $('#edt_no_hp').val();
                var edt_no_hp_ortu     		= $('#edt_no_hp_ortu').val();
                var edt_jenis_kelamin       = $('#edt_jenis_kelamin').val();
                var edt_tinggi_badan        = $('#edt_tinggi_badan').val();
                var edt_berat_badan         = $('#edt_berat_badan').val();
                var edt_alamat_rumah        = $('#edt_alamat_rumah').val();
                var edt_asal_sekolah        = $('#edt_asal_sekolah').val();
                var edt_riwayat_penyakit    = $('#edt_riwayat_penyakit').val();

                // alert(edt_email);exit();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_peserta/updateAkun",
                    dataType : "JSON",
                    data : { 
                        edt_nama_lengkap:edt_nama_lengkap,
                        edt_username:edt_username,
                        edt_email:edt_email,
                        edt_tgl_lahir:edt_tgl_lahir,
                        edt_no_hp:edt_no_hp,
                        edt_no_hp_ortu:edt_no_hp_ortu,
                        edt_jenis_kelamin:edt_jenis_kelamin,
                        edt_tinggi_badan:edt_tinggi_badan,
                        edt_berat_badan:edt_berat_badan,
                        edt_alamat_rumah:edt_alamat_rumah,
                        edt_asal_sekolah:edt_asal_sekolah,
                        edt_riwayat_penyakit:edt_riwayat_penyakit,
                    },

                    success: function(data){
                        if(data.code == 1){
                            Swal.fire({
                                type: 'error',
                                title: 'Kesalahan Data',
                                text: 'Email Sudah Digunakan Akun Lain',
                            })
                        }else{
                            Swal.fire({
                                type: 'success',
                                title: 'Update data sukses',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#modalEditAkun').modal('hide'); 
                            
                            document.getElementById('formEditAkun').reset();
                            location.reload();
                        }
                    }
                });
                return false;
            });
    	/*Edit Akun*/

        /*GANTI PASSWORD*/
            $('#formGantiPassword').submit(function(e){
                e.preventDefault();
                // memasukkan data inputan ke variabel
                var passold     = $('#passold').val();
                var passnew     = $('#passnew').val();
                var passnew2    = $('#passnew2').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_peserta/changePassword",
                    dataType : "JSON",
                    data : {
                        passold:passold,
                        passnew:passnew,
                        passnew2:passnew2,
                    },

                    success: function(data){ 
                        if (data.code == 1) {
                            Swal.fire({
                                type: 'error',
                                title: 'Kesalahan Data',
                                text: 'Password Lama Tidak Sesuai',
                            })
                        }else if (data.code == 2) {
                            Swal.fire({
                                type: 'error',
                                title: 'Kesalahan Data',
                                text: 'Konfirmasi Password Baru Tidak Cocok',
                            })
                        }else{
                            Swal.fire({
                                type: 'success',
                                title: 'Berhasil mengubah password ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#modalGantiPassword').modal('hide'); 

                            document.getElementById('formGantiPassword').reset();

                        }
                    }
                });
                return false;
            });
        /*GANTI PASSWORD*/



	/*MANAJEMEN AKUN*/



	});
	   
</script> -->
</body>
</html>
