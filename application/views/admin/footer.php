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
        showListUser();
		showListSeleksi();
        showListBobot();
        showListBobotPukul();
        showListBobotTangkap();
        showListBobotLempar();
        showNilaiKonversiPukul();
        showNilaiKonversiTangkap();
        showNilaiKonversiLempar();
        showNilaiKonversiLari();
        showListNilaiStandar();
        showHasilSeleksi();

	/*MANAJEMEN AKUN*/
		/*Show Akun*/
    		function showListUser(){
    	        $.ajax({
    	            type  : 'POST',
    	            url   : '<?php echo base_url()?>index.php/C_admin/getUser',
    	            async : false,
    	            dataType : 'json',
    	            success : function(data){
    	                var html = '';
    	                var i;
    	                for(i=0; i<data.length; i++){
    	                    var ii = i+1;
    	                    badge = "";
    	                    if (data[i].status_akun == "Aktif") {
    	                        badge = "badge-success";
    	                    }else if(data[i].status_akun == "Tidak Aktif"){
    	                        badge = "badge-danger";
    	                    }else if(data[i].status_akun == "Menunggu Persetujuan"){
    	                        badge = "badge-warning";
    	                    }
    	                    html += '<tr style="center">'+
    	                    '<td>'+ii+' </td>'+
    	                    '<td>'+data[i].username+' </td>'+
    	                    '<td>'+data[i].nama_lengkap+' </td>'+
    	                    '<td>'+data[i].tgl_lahir+' </td>'+
    	                    '<td>'+data[i].jenis_kelamin+' </td>'+
    	                    '<td>'+data[i].asal_sekolah+' </td>'+
    	                    '<td>'+data[i].email+' </td>'+
                            '<td>'+data[i].level_akun+' </td>'+
    	                    '<td>'+'<h5><span class="badge '+badge+'">'+data[i].status_akun+'</span></h5></td>'+
    	                    // '<td style="background-color:'+color+'">'+data[i].status_akun+' </td>'+
    	                    '<td>'+
    	                    '<a href="javascript:void(0);" class="btn btn-warning btn-sm user_edit" data-id_akun="'+data[i].id_akun+'" data-username="'+data[i].username+'" data-nama_lengkap="'+data[i].nama_lengkap+'" data-email="'+data[i].email+'" data-tgl_lahir="'+data[i].tgl_lahir+'" data-no_hp="'+data[i].no_hp+'" data-no_hp_ortu="'+data[i].no_hp_ortu+'" data-alamat_rumah="'+data[i].alamat_rumah+'" data-jenis_kelamin="'+data[i].jenis_kelamin+'" data-asal_sekolah="'+data[i].asal_sekolah+'" data-berat_badan="'+data[i].berat_badan+'" data-tinggi_badan="'+data[i].tinggi_badan+'" data-riwayat_penyakit="'+data[i].riwayat_penyakit+'" data-level_akun="'+data[i].level_akun+'" data-status_akun="'+data[i].status_akun+'"> <b> <span class="fa fa-edit"> </span> </b> </a>'
    	                    +''+
    	                     '<a href="javascript:void(0);" class="btn btn-danger btn-sm user_delete" data-id_akun="'+data[i].id_akun+'" data-username="'+data[i].username+'" data-nama_lengkap="'+data[i].nama_lengkap+'" data-asal_sekolah="'+data[i].asal_sekolah+'"> <b> <span class="fa fa-trash"> </span> </b> </a>'
    	                    +'</td>'+
    	                    '</tr>';
    	                }
    	                $('#listUser').find('tbody').empty();
    	                $('#showListUser').html(html);
    	                $('#listUser').DataTable({
    				    });
    	            }
    	        });
        	}
    	/*Show Akun*/

    	/*Edit Akun*/
    	    $('#listUser').on('click','.user_edit',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid            	= $(this).data('id_akun');
                var upnama_lengkap  	= $(this).data('nama_lengkap');
                var upusername      	= $(this).data('username'); 
                var upemail	 			= $(this).data('email'); 
                var uptgl_lahir 		= $(this).data('tgl_lahir');
                var upno_hp 			= $(this).data('no_hp');
                var upno_hp_ortu 		= $(this).data('no_hp_ortu');
                var upalamat_rumah 		= $(this).data('alamat_rumah');
                var upasal_sekolah  	= $(this).data('asal_sekolah'); 
                var upjenis_kelamin 	= $(this).data('jenis_kelamin'); 
                var upberat_badan    	= $(this).data('berat_badan'); 
                var uptinggi_badan   	= $(this).data('tinggi_badan'); 
                var upriwayat_penyakit 	= $(this).data('riwayat_penyakit'); 
                var uplevel_akun    	= $(this).data('level_akun'); 
                var upstatus_akun   	= $(this).data('status_akun'); 
                
                // memasukkan data ke form updatean
                $('[name="edt_id_akun"]').val(upid);
                $('[name="edt_nama_lengkap"]').val(upnama_lengkap);
                $('[name="edt_username"]').val(upusername);
                $('[name="edt_email"]').val(upemail);
                $('[name="edt_tgl_lahir"]').val(uptgl_lahir);
                $('[name="edt_no_hp"]').val(upno_hp);
                $('[name="edt_no_hp_ortu"]').val(upno_hp_ortu);
                $('[name="edt_alamat_rumah"]').val(upalamat_rumah);
                $('[name="edt_asal_sekolah"]').val(upasal_sekolah);
                $('[name="edt_jenis_kelamin"]').val(upjenis_kelamin);
                $('[name="edt_berat_badan"]').val(upberat_badan);
                $('[name="edt_tinggi_badan"]').val(uptinggi_badan);
                $('[name="edt_riwayat_penyakit"]').val(upriwayat_penyakit);
                $('[name="edt_level_akun"]').val(uplevel_akun);
                $('[name="edt_status_akun"]').val(upstatus_akun);

                $('#modalEditUser').modal('show');
                
            });

            //UPDATE record to database (submit button)
            $('#formEditUser').submit(function(e){
                e.preventDefault(); 
                // memasukkan data dari form update ke variabel untuk update db
                var up_id           	= $('#edt_id_akun').val();
                var up_nama_lengkap 	= $('#edt_nama_lengkap').val();
                var up_username     	= $('#edt_username').val();
                var up_email		    = $('#edt_email').val();
                var up_tgl_lahir   		= $('#edt_tgl_lahir').val();
                var up_no_hp     		= $('#edt_no_hp').val();
                var up_no_hp_ortu     	= $('#edt_no_hp_ortu').val();
                var up_alamat_rumah     = $('#edt_alamat_rumah').val();
                var up_asal_sekolah     = $('#edt_asal_sekolah').val();
                var up_jenis_kelamin   	= $('#edt_jenis_kelamin').val();
                var up_berat_badan     	= $('#edt_berat_badan').val();
                var up_tinggi_badan     = $('#edt_tinggi_badan').val();
                var up_riwayat_penyakit	= $('#edt_riwayat_penyakit').val();
                var up_level_akun     	= $('#edt_level_akun').val();
                var up_status_akun  	= $('#edt_status_akun').val();
                        // alert(up_email);

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_admin/updateUser",
                    dataType : "JSON",
                    data : { 
                        u_id:up_id,
                        u_nama_lengkap:up_nama_lengkap,
                        u_username:up_username,
                        u_email:up_email,
                        u_tgl_lahir:up_tgl_lahir,
                        u_no_hp:up_no_hp,
                        u_no_hp_ortu:up_no_hp_ortu,
                        u_alamat_rumah:up_alamat_rumah,
                        u_asal_sekolah:up_asal_sekolah,
                        u_jenis_kelamin:up_jenis_kelamin,
                        u_berat_badan:up_berat_badan,
                        u_tinggi_badan:up_tinggi_badan,
                        u_riwayat_penyakit:up_riwayat_penyakit,
                        u_level_akun:up_level_akun,
                        u_status_akun:up_status_akun
                    },

                    success: function(data){
                        if (data.code==2) {
                             Swal.fire({
                                    type: 'error',
                                    title: 'Kesalahan Data',
                                    text: 'Email Sudah Digunakan Akun Lain',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                        }else{
                            Swal.fire({
                                    type: 'success',
                                    title: 'Update data sukses',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            $('#modalEditUser').modal('hide'); 
                        }
                        
                        $('#listUser').DataTable().destroy();
                        $('#listUser').find('tbody').empty();
                        document.getElementById('formEditUser').reset();
                        showListUser();
                    }
                });
                return false;
            });
    	/*Edit Akun*/

    	/*Hapus Akun*/
	    	$('#listUser').on('click','.user_delete',function(){
	                var id = $(this).data('id_akun');
	                var nama_lengkap = $(this).data('nama_lengkap'); 
	                var asal_sekolah = $(this).data('asal_sekolah'); 

	                $('#modalDeleteUser').modal('show');
	                document.getElementById("msg").innerHTML='Nama: "'+nama_lengkap+'" dari "'+asal_sekolah+'"';
	                $('[name="id_del"]').val(id);
	            });

             $('#formDeleteUser').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_del').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_admin/deleteUser",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(){
                        $('[name="id_del"]').val("");
                        Swal.fire({
                                    type: 'success',
                                    title: 'Berhasil menghapus user ',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                        $('#modalDeleteUser').modal('hide'); 
                        $("#listUser").DataTable().destroy();
                        $("#listUser").find('tbody').empty();
                        document.getElementById('formDeleteUser').reset();
                        showListUser();

                    }
                });
                return false;
            });
    	/*Hapus Akun*/

    	/*Buat Penyeleksi*/
        	$('#formRegis').submit(function(e){
    	    	e.preventDefault();
    			// memasukkan data inputan ke variabel
    			var nama_lengkap		= $('#nama_lengkap').val();
    			var username			= $('#username').val();
    			var password			= $('#password').val();
    			var email				= $('#email').val();
    			var tgl_lahir			= $('#tgl_lahir').val();
    			var no_hp				= $('#no_hp').val();
    			var alamat_rumah		= $('#alamat_rumah').val();
    			var jenis_kelamin		= $('#jenis_kelamin').val();

    			$.ajax({
    				type : 'POST',
    				url  : '<?php echo site_url(); ?>/C_admin/daftarPenyeleksi',
    				dataType : 'JSON',
    				data : {
    					nama_lengkap:nama_lengkap,
    					username:username,
    					password:password,
    					email:email,
    					tgl_lahir:tgl_lahir,
    					no_hp:no_hp,
    					alamat_rumah:alamat_rumah,
    					jenis_kelamin:jenis_kelamin,
    				},

    				success: function(data){
    					if(data.code==2){
    						Swal.fire({
    		                            type: 'warning',
    		                            title: 'Username sudah terdaftar',
    		                            showConfirmButton: true,
    		                            // timer: 1500
    		                        })
    					}else if (data.code==3) {
                            Swal.fire({
                                        type: 'warning',
                                        title: 'Email sudah terdaftar',
                                        showConfirmButton: true,
                                        // timer: 1500
                                    })
                        }else{
    		                Swal.fire({
    		                            type: 'success',
    		                            title: 'Pendaftaran Akun Penyeleksi Baru Selesai Dilakukan',
    		                            showConfirmButton: true,
    		                            // timer: 1500
    		                        })
    						$('#Modal_Regis').modal('hide'); 
    						document.getElementById('formRegis').reset();	
                            showListUser();
    					} 
    	            }
    	        });
    			return false;
    			});
    	/*Buat Penyeleksi*/

        /*GANTI PASSWORD*/
            $('#formGantiPassword').submit(function(e){
                e.preventDefault();
                // memasukkan data inputan ke variabel
                var passold     = $('#passold').val();
                var passnew     = $('#passnew').val();
                var passnew2    = $('#passnew2').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_admin/changePassword",
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

    /*MANAJEMEN SELEKSI*/
        /*Show Seleksi*/
            function showListSeleksi(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_admin/getSeleksi',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            badge = "";
                            if (data[i].status_seleksi == "Selesai") {
                                badge = "badge-success";
                            }else if(data[i].status_seleksi == "Belum Selesai"){
                                badge = "badge-danger";
                            }
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+data[i].nama_seleksi+' </td>'+
                            '<td>'+data[i].jenis_olahraga+' ('+data[i].jenis_kelamin+')</td>'+
                            '<td>'+data[i].batas_umur+' Tahun </td>'+
                            '<td>'+data[i].tgl_seleksi+' </td>'+
                            // '<td>'+data[i].tgl_kejuaraan+' </td>'+
                            '<td>'+'<h5><span class="badge '+badge+'">'+data[i].status_seleksi+'</span></h5></td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-warning btn-sm seleksi_edit" data-id_seleksi="'+data[i].id_seleksi+'" data-username="'+data[i].username+'" data-nama_seleksi="'+data[i].nama_seleksi+'" data-tgl_seleksi="'+data[i].tgl_seleksi+'" data-jenis_olahraga="'+data[i].jenis_olahraga+'" data-jenis_kelamin="'+data[i].jenis_kelamin+'" data-batas_umur="'+data[i].batas_umur+'" data-tgl_kejuaraan="'+data[i].tgl_kejuaraan+'" data-status_seleksi="'+data[i].status_seleksi+'" data-jml_set_pukul="'+data[i].jml_set_pukul+'" data-jml_set_tangkap="'+data[i].jml_set_tangkap+'" data-jml_set_lempar="'+data[i].jml_set_lempar+'" data-jml_rep_lari="'+data[i].jml_rep_lari+'"> <b> <span class="fa fa-edit"> </span> </b> </a>'
                            +'   '+
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm seleksi_delete" data-id_seleksi="'+data[i].id_seleksi+'" data-nama_seleksi="'+data[i].nama_seleksi+'" data-status_seleksi="'+data[i].status_seleksi+'"> <b> <span class="fa fa-trash"> </span> </b> </a>'
                             +'   '+
                            '<a href="javascript:void(0);" class="btn btn-success btn-sm seleksi_selesai" data-id_seleksi="'+data[i].id_seleksi+'" data-nama_seleksi="'+data[i].nama_seleksi+'"> <b> <span class="fa fa-check-square"> </span> </b> </a>'
                            +'</td>'+
                            '</tr>';
                        }
                        $('#listSeleksi').find('tbody').empty();
                        $('#showListSeleksi').html(html);
                        $('#listSeleksi').DataTable({
                        });

                    }
                });
            }
        /*Show Seleksi*/

        /*Edit Seleksi*/
            $('#listSeleksi').on('click','.seleksi_edit',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                = $(this).data('id_seleksi');
                var upnama_seleksi      = $(this).data('nama_seleksi');
                var upjenis_olahraga    = $(this).data('jenis_olahraga'); 
                var upjenis_kelamin     = $(this).data('jenis_kelamin'); 
                var upbatas_umur        = $(this).data('batas_umur'); 
                var uptgl_seleksi       = $(this).data('tgl_seleksi');
                var uptgl_kejuaraan     = $(this).data('tgl_kejuaraan'); 
                var upstatus_seleksi    = $(this).data('status_seleksi'); 
                var upset_pukul         = $(this).data('jml_set_pukul'); 
                var upset_tangkap       = $(this).data('jml_set_tangkap'); 
                var upset_lempar        = $(this).data('jml_set_lempar'); 
                var uprep_lari          = $(this).data('jml_rep_lari'); 
                
                // memasukkan data ke form updatean
                $('[name="edt_id_seleksi"]').val(upid);
                $('[name="edt_nama_seleksi"]').val(upnama_seleksi);
                $('[name="edt_jenis_olahraga"]').val(upjenis_olahraga);
                $('[name="edt_jenis_kelamin"]').val(upjenis_kelamin);
                $('[name="edt_batas_umur"]').val(upbatas_umur);
                $('[name="edt_tgl_seleksi"]').val(uptgl_seleksi);
                $('[name="edt_tgl_kejuaraan"]').val(uptgl_kejuaraan);
                $('[name="edt_status_seleksi"]').val(upstatus_seleksi);
                $('[name="edt_set_pukul"]').val(upset_pukul);
                $('[name="edt_set_tangkap"]').val(upset_tangkap);
                $('[name="edt_set_lempar"]').val(upset_lempar);
                $('[name="edt_rep_lari"]').val(uprep_lari);

                $('#modalEditSeleksi').modal('show');
                
            });

            //UPDATE record to database (submit button)
            $('#formEditSeleksi').submit(function(e){
                e.preventDefault(); 
                // memasukkan data dari form update ke variabel untuk update db
                var up_id               = $('#edt_id_seleksi').val();
                var up_nama_seleksi     = $('#edt_nama_seleksi').val();
                var up_jenis_olahraga   = $('#edt_jenis_olahraga').val();
                var up_jenis_kelamin    = $('#edt_jenis_kelamin').val();
                var up_batas_umur       = $('#edt_batas_umur').val();
                var up_tgl_seleksi      = $('#edt_tgl_seleksi').val();
                var up_tgl_kejuaraan    = $('#edt_tgl_kejuaraan').val();
                var up_set_pukul        = $('#edt_set_pukul').val();
                var up_set_tangkap      = $('#edt_set_tangkap').val();
                var up_set_lempar       = $('#edt_set_lempar').val();
                var up_rep_lari         = $('#edt_rep_lari').val();


                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_admin/updateSeleksi",
                    dataType : "JSON",
                    data : { 
                        u_id:up_id,
                        u_nama_seleksi:up_nama_seleksi,
                        u_jenis_olahraga:up_jenis_olahraga,
                        u_jenis_kelamin:up_jenis_kelamin,
                        u_batas_umur:up_batas_umur,
                        u_tgl_seleksi:up_tgl_seleksi,
                        u_tgl_kejuaraan:up_tgl_kejuaraan,
                        u_set_pukul:up_set_pukul,
                        u_set_tangkap:up_set_tangkap,
                        u_set_lempar:up_set_lempar,
                        u_rep_lari:up_rep_lari,
                    },

                    success: function(data){
                        if (data.code==1) {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Update Data Seleksi Sukses',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            $('#modalEditSeleksi').modal('hide'); 
                        }
                        
                        $('#listSeleksi').DataTable().destroy();
                        $('#listSeleksi').find('tbody').empty();
                        document.getElementById('formEditSeleksi').reset();
                        showListSeleksi();
                    }
                });
                return false;
            });
        /*Edit Seleksi*/

        /*Hapus Seleksi*/
            $('#listSeleksi').on('click','.seleksi_delete',function(){
                    var id = $(this).data('id_seleksi');
                    var nama_seleksi = $(this).data('nama_seleksi'); 
                    var status_seleksi = $(this).data('status_seleksi'); 

                    $('#modalDeleteSeleksi').modal('show');
                    document.getElementById("msg").innerHTML='Nama: "'+nama_seleksi+'" dengan status seleksi: "'+status_seleksi+'"';
                    $('[name="id_del"]').val(id);
                });

             $('#formDeleteSeleksi').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_del').val();


                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_admin/deleteSeleksi",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(){
                        $('[name="id_del"]').val("");
                        Swal.fire({
                                    type: 'success',
                                    title: 'Berhasil Menghapus Seleksi ',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                        $('#modalDeleteSeleksi').modal('hide'); 
                        $("#listSeleksi").DataTable().destroy();
                        $("#listSeleksi").find('tbody').empty();
                        document.getElementById('formDeleteSeleksi').reset();
                        showListSeleksi();

                    }
                });
                return false;
            });
        /*Hapus Seleksi*/

        /*Buat Seleksi*/
            $('#formCreateSeleksi').submit(function(e){
                e.preventDefault();
                // memasukkan data inputan ke variabel
                var nama_seleksi    = $('#nama_seleksi').val();
                var jenis_olahraga  = $('#jenis_olahraga').val();
                var jenis_kelamin   = $('#jenis_kelamin').val();
                var batas_umur      = $('#batas_umur').val();
                var tgl_seleksi     = $('#tgl_seleksi').val();
                var tgl_kejuaraan   = $('#tgl_kejuaraan').val();
                var set_pukul       = $('#set_pukul').val();
                var set_tangkap     = $('#set_tangkap').val();
                var set_lempar      = $('#set_lempar').val();
                var rep_lari        = $('#rep_lari').val();

                $.ajax({
                    type : 'POST',
                    url  : '<?php echo site_url(); ?>/C_admin/createSeleksi',
                    dataType : 'JSON',
                    data : {
                        nama_seleksi:nama_seleksi,
                        jenis_olahraga:jenis_olahraga,
                        jenis_kelamin:jenis_kelamin,
                        batas_umur:batas_umur,
                        tgl_seleksi:tgl_seleksi,
                        tgl_kejuaraan:tgl_kejuaraan,
                        set_pukul:set_pukul,
                        set_tangkap:set_tangkap,
                        set_lempar:set_lempar,
                        rep_lari:rep_lari,
                    },

                    success: function(data){
                        if(data.code==2){
                            Swal.fire({
                                        type: 'warning',
                                        title:'Tanggal Hari Ini Sudah Melewati Tanggal Seleksi',
                                        text: 'Silahkan Cek Kembali Tanggal Seleksi Yang Dimasukkan',
                                        showConfirmButton: true,
                                        // timer: 1500
                                    })
                        }else if(data.code==3){
                            Swal.fire({
                                        type: 'warning',
                                        title:'Tanggal Hari Ini Sudah Melewati Tanggal Kejuaraan',
                                        text: 'Silahkan Cek Kembali Tanggal Kejuaraan Yang Dimasukkan',
                                        showConfirmButton: true,
                                        // timer: 1500
                                    })
                        }else{
                            Swal.fire({
                                        type: 'success',
                                        title: 'Jadwal Seleksi Baru Selesai Ditambahkan',
                                        showConfirmButton: true,
                                        // timer: 1500
                                    })
                            $('#modalCreateSeleksi').modal('hide'); 
                            $('#listSeleksi').DataTable().destroy();
                            $('#listSeleksi').find('tbody').empty();
                            document.getElementById('formCreateSeleksi').reset();   
                            showListSeleksi();
                        } 
                    }
                });
                return false;
            });
        /*Buat Seleksi*/

        /*Seleksi Selesai*/
            $('#listSeleksi').on('click','.seleksi_selesai',function(){
                var id = $(this).data('id_seleksi');
                var nama_seleksi = $(this).data('nama_seleksi'); 

                $('#modalStatusSeleksi').modal('show');
                document.getElementById("msg").innerHTML='Seleksi "'+nama_seleksi+'"';
                $('[name="id_status"]').val(id);
            });

            $('#formStatusSeleksi').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_status').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_admin/updateStatus",
                    dataType : "JSON",
                    data : {id:id},

                    success: function(data){
                        if (data.code==1) {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Update Data Seleksi Sukses',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                        }
                        $('#modalStatusSeleksi').modal('hide'); 
                        $("#listSeleksi").DataTable().destroy();
                        $("#listSeleksi").find('tbody').empty();
                        document.getElementById('formStatusSeleksi').reset();
                        showListSeleksi();

                    }
                });
                return false;
            });
        /*Seleksi Selesai*/
    /*MANAJEMEN SELEKSI*/

    /*MANAJEMEN BOBOT*/
        /*Show Bobot*/
            function showListBobot(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_admin/getBobot',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+data[i].jenis_tes+' </td>'+
                            '<td>'+data[i].nilai_bobot_tes+'% </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-warning btn-sm bobot_edit" data-id_bobot_tes="'+data[i].id_bobot_tes+'" data-jenis_tes="'+data[i].jenis_tes+'" data-nilai_bobot_tes="'+data[i].nilai_bobot_tes+'"> <b> <span class="fa fa-edit"> </span> </b> </a>'
                            '</tr>';
                        }
                        $('#listBobot').find('tbody').empty();
                        $('#showListBobot').html(html);
                        $('#listBobot').DataTable({
                        });
                    }
                });
            }
        /*Show Bobot*/

        /*Edit Bobot*/
            $('#listBobot').on('click','.bobot_edit',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                = $(this).data('id_bobot_tes');
                var upjenis_tes         = $(this).data('jenis_tes');
                var upnilai_bobot_tes   = $(this).data('nilai_bobot_tes'); 
                
                // memasukkan data ke form updatean
                $('[name="edt_id_bobot_tes"]').val(upid);
                $('[name="edt_jenis_tes"]').val(upjenis_tes);
                $('[name="edt_nilai_bobot_tes"]').val(upnilai_bobot_tes);

                $('#modalEditBobot').modal('show');
                
            });

            //UPDATE record to database (submit button)
            $('#formEditBobot').submit(function(e){
                e.preventDefault(); 
                // memasukkan data dari form update ke variabel untuk update db
                var up_id               = $('#edt_id_bobot_tes').val();
                var up_jenis_tes        = $('#edt_jenis_tes').val();
                var up_nilai_bobot_tes  = $('#edt_nilai_bobot_tes').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_admin/updateBobot",
                    dataType : "JSON",
                    data : { 
                        u_id:up_id,
                        u_jenis_tes:up_jenis_tes,
                        u_nilai_bobot_tes:up_nilai_bobot_tes,
                    },

                    success: function(data){
                        if (data.code==1) {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Update Data Bobot Seleksi Sukses',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            $('#modalEditBobot').modal('hide'); 
                            $('#listBobot').DataTable().destroy();
                            $('#listBobot').find('tbody').empty();
                            document.getElementById('formEditBobot').reset();
                            showListBobot();
                        }else if(data.code==2){
                            Swal.fire({
                                    type: 'error',
                                    title:'Jumlah Nilai Bobot Lebih Dari 100%',
                                    text: 'Silahkan Cek Kembali Bobot yang dimasukkan',
                                    showConfirmButton: true,
                                    // timer: 1500
                                    })
                        }else if(data.code==3){
                            Swal.fire({
                                    type: 'info',
                                    title:'Jumlah Bobot Kurang Dari 100%',
                                    text: 'Silahkan Cek Kembali Nilai Bobot Seleksi',
                                    showConfirmButton: true,
                                })
                            $('#modalEditBobot').modal('hide'); 
                            $('#listBobot').DataTable().destroy();
                            $('#listBobot').find('tbody').empty();
                            document.getElementById('formEditBobot').reset();
                            showListBobot();
                        }
                
                    }
                });
                return false;
            });
        /*Edit Bobot*/
    /*MANAJEMEN BOBOT*/

    /*MANAJEMEN BOBOT SUB*/
        /*Show Bobot Sub*/
            function showListBobotPukul(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_admin/getSubBobotPukul',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+data[i].jenis_sub_tes+' </td>'+
                            '<td>'+data[i].nilai_bobot_sub_tes+'% </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-warning btn-sm sub_bobot_edit" data-id_bobot_sub_tes="'+data[i].id_bobot_sub_tes+'"data-id_bobot_tes="'+data[i].id_bobot_tes+'" data-jenis_sub_tes="'+data[i].jenis_sub_tes+'" data-nilai_bobot_sub_tes="'+data[i].nilai_bobot_sub_tes+'"> <b> <span class="fa fa-edit"> </span> </b> </a>'
                            '</tr>';
                        }
                        $('#listBobotPukul').find('tbody').empty();
                        $('#showListBobotPukul').html(html);
                        $('#listBobotPukul').DataTable({
                            "paging": false,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": false,
                            "autoWidth": true,
                        });
                    }
                });
            }

            function showListBobotTangkap(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_admin/getSubBobotTangkap',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+data[i].jenis_sub_tes+' </td>'+
                            '<td>'+data[i].nilai_bobot_sub_tes+'% </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-warning btn-sm sub_bobot_edit" data-id_bobot_sub_tes="'+data[i].id_bobot_sub_tes+'"data-id_bobot_tes="'+data[i].id_bobot_tes+'" data-jenis_sub_tes="'+data[i].jenis_sub_tes+'" data-nilai_bobot_sub_tes="'+data[i].nilai_bobot_sub_tes+'"> <b> <span class="fa fa-edit"> </span> </b> </a>'
                            '</tr>';
                        }
                        $('#listBobotTangkap').find('tbody').empty();
                        $('#showListBobotTangkap').html(html);
                        $('#listBobotTangkap').DataTable({
                            "paging": false,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": false,
                            "autoWidth": true,
                        });
                    }
                });
            }

            function showListBobotLempar(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_admin/getSubBobotLempar',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+data[i].jenis_sub_tes+' </td>'+
                            '<td>'+data[i].nilai_bobot_sub_tes+'% </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-warning btn-sm sub_bobot_edit" data-id_bobot_sub_tes="'+data[i].id_bobot_sub_tes+'"data-id_bobot_tes="'+data[i].id_bobot_tes+'" data-jenis_sub_tes="'+data[i].jenis_sub_tes+'" data-nilai_bobot_sub_tes="'+data[i].nilai_bobot_sub_tes+'"> <b> <span class="fa fa-edit"> </span> </b> </a>'
                            '</tr>';
                        }
                        $('#listBobotLempar').find('tbody').empty();
                        $('#showListBobotLempar').html(html);
                        $('#listBobotLempar').DataTable({
                            "paging": false,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": false,
                            "autoWidth": true,
                        });
                    }
                });
            }
        /*Show Bobot Sub*/

        /*Edit Bobot*/
            $('#listBobotPukul').on('click','.sub_bobot_edit',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                    = $(this).data('id_bobot_sub_tes');
                var upjenis_sub_tes         = $(this).data('jenis_sub_tes');
                var upnilai_bobot_sub_tes   = $(this).data('nilai_bobot_sub_tes');
                var jenis_tes               = $(this).data('id_bobot_tes');

                if(jenis_tes == 1){
                    var upjenis_tes     = "Tes Pukul";
                }else if(jenis_tes == 2){
                    var upjenis_tes     = "Tes Tangkap";
                }else{
                    var upjenis_tes     = "Tes Lempar";
                }
                
                // memasukkan data ke form updatean
                $('[name="edt_id_bobot_sub_tes"]').val(upid);
                $('[name="edt_id_bobot_tes"]').val(jenis_tes);
                $('[name="edt_jenis_tes"]').val(upjenis_tes);
                $('[name="edt_jenis_sub_tes"]').val(upjenis_sub_tes);
                $('[name="edt_nilai_bobot_sub_tes"]').val(upnilai_bobot_sub_tes);

                $('#modalEditSubBobot').modal('show');
            });

            $('#listBobotTangkap').on('click','.sub_bobot_edit',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                    = $(this).data('id_bobot_sub_tes');
                var upjenis_sub_tes         = $(this).data('jenis_sub_tes');
                var upnilai_bobot_sub_tes   = $(this).data('nilai_bobot_sub_tes');
                var jenis_tes               = $(this).data('id_bobot_tes');

                if(jenis_tes == 1){
                    var upjenis_tes     = "Tes Pukul";
                }else if(jenis_tes == 2){
                    var upjenis_tes     = "Tes Tangkap";
                }else{
                    var upjenis_tes     = "Tes Lempar";
                }
                
                // memasukkan data ke form updatean
                $('[name="edt_id_bobot_sub_tes"]').val(upid);
                $('[name="edt_id_bobot_tes"]').val(jenis_tes);
                $('[name="edt_jenis_tes"]').val(upjenis_tes);
                $('[name="edt_jenis_sub_tes"]').val(upjenis_sub_tes);
                $('[name="edt_nilai_bobot_sub_tes"]').val(upnilai_bobot_sub_tes);

                $('#modalEditSubBobot').modal('show');
            });

            $('#listBobotLempar').on('click','.sub_bobot_edit',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                    = $(this).data('id_bobot_sub_tes');
                var upjenis_sub_tes         = $(this).data('jenis_sub_tes');
                var upnilai_bobot_sub_tes   = $(this).data('nilai_bobot_sub_tes');
                var jenis_tes               = $(this).data('id_bobot_tes');

                if(jenis_tes == 1){
                    var upjenis_tes     = "Tes Pukul";
                }else if(jenis_tes == 2){
                    var upjenis_tes     = "Tes Tangkap";
                }else{
                    var upjenis_tes     = "Tes Lempar";
                }
                
                // memasukkan data ke form updatean
                $('[name="edt_id_bobot_sub_tes"]').val(upid);
                $('[name="edt_id_bobot_tes"]').val(jenis_tes);
                $('[name="edt_jenis_tes"]').val(upjenis_tes);
                $('[name="edt_jenis_sub_tes"]').val(upjenis_sub_tes);
                $('[name="edt_nilai_bobot_sub_tes"]').val(upnilai_bobot_sub_tes);

                $('#modalEditSubBobot').modal('show');
            });

            //UPDATE record to database (submit button)
            $('#formEditSubBobot').submit(function(e){
                e.preventDefault(); 
                // memasukkan data dari form update ke variabel untuk update db
                var up_id                   = $('#edt_id_bobot_sub_tes').val();
                var up_jenis_tes            = $('#edt_id_bobot_tes').val();
                var up_jenis_sub_tes        = $('#edt_jenis_sub_tes').val();
                var up_nilai_bobot_sub_tes  = $('#edt_nilai_bobot_sub_tes').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_admin/updateSubBobot",
                    dataType : "JSON",
                    data : { 
                        u_id:up_id,
                        u_jenis_tes:up_jenis_tes,
                        u_jenis_sub_tes:up_jenis_sub_tes,
                        u_nilai_bobot_sub_tes:up_nilai_bobot_sub_tes,
                    },

                    success: function(data){
                        if (data.code==1) {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Update Data Bobot Seleksi Sukses',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            $('#modalEditSubBobot').modal('hide'); 
                            $('#listBobotLempar').DataTable().destroy();$('#listBobotLempar').find('tbody').empty();
                            $('#listBobotPukul').DataTable().destroy();$('#listBobotPukul').find('tbody').empty();
                            $('#listBobotTangkap').DataTable().destroy();$('#listBobotTangkap').find('tbody').empty();
                            document.getElementById('formEditSubBobot').reset();
                            showListBobotLempar();showListBobotPukul();showListBobotTangkap();
                        }else if(data.code==2){
                            Swal.fire({
                                    type: 'error',
                                    title:'Jumlah Nilai Bobot Lebih Dari 100%',
                                    text: 'Silahkan Cek Kembali Bobot yang dimasukkan',
                                    showConfirmButton: true,
                                    // timer: 1500
                                    })
                        }else if(data.code==3){
                            Swal.fire({
                                    type: 'info',
                                    title:'Jumlah Nilai Bobot Tes Keterampilan dan Unjuk Kerja Terkait Kurang Dari 100%',
                                    text: 'Silahkan Cek Kembali',
                                    showConfirmButton: true,
                                })
                            $('#modalEditSubBobot').modal('hide'); 
                            $('#listBobotLempar').DataTable().destroy();$('#listBobotLempar').find('tbody').empty();
                            $('#listBobotPukul').DataTable().destroy();$('#listBobotPukul').find('tbody').empty();
                            $('#listBobotTangkap').DataTable().destroy();$('#listBobotTangkap').find('tbody').empty();
                            document.getElementById('formEditSubBobot').reset();
                            showListBobotLempar();showListBobotPukul();showListBobotTangkap();
                        }
                
                    }
                });
                return false;
            });
        /*Edit Bobot*/
    /*MANAJEMEN BOBOT SUB*/

    /*MANAJEMEN NILAI STANDAR*/
        /*Show List Nilai Standar*/
            function showListNilaiStandar(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_admin/getNilaiStandar',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td> Nilai Standar '+data[i].jenis_tes+' </td>'+
                            '<td>'+data[i].nilai_standar+' </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-warning btn-sm std_edit" data-id_nilai_standar="'+data[i].id_nilai_standar+'" data-jenis_tes="'+data[i].jenis_tes+'" data-nilai_standar="'+data[i].nilai_standar+'"> <b> <span class="fa fa-edit"> </span> </b> </a>'
                            '</tr>';
                        }
                        $('#listNilaiStandar').find('tbody').empty();
                        $('#showListNilaiStandar').html(html);
                        $('#listNilaiStandar').DataTable({
                            "paging": false,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": false,
                            "autoWidth": true,
                        });
                    }
                });
            }
        /*Show List Nilai Standar*/

        /*Edit Bobot*/
            $('#listNilaiStandar').on('click','.std_edit',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                = $(this).data('id_nilai_standar');
                var upjenis_tes         = $(this).data('jenis_tes');
                var upnilai_standar    = $(this).data('nilai_standar');
                
                // memasukkan data ke form updatean
                $('[name="edt_id_nilai_std"]').val(upid);
                $('[name="edt_jenis_tes"]').val(upjenis_tes);
                $('[name="edt_nilai_standar"]').val(upnilai_standar);

                $('#modalEditStandar').modal('show');
            });

            //UPDATE record to database (submit button)
            $('#formEditStandar').submit(function(e){
                e.preventDefault(); 
                // memasukkan data dari form update ke variabel untuk update db
                var up_id               = $('#edt_id_nilai_std').val();
                var up_jenis_tes        = $('#edt_jenis_tes').val();
                var up_nilai_standar    = $('#edt_nilai_standar').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_admin/updateNilaiStandar",
                    dataType : "JSON",
                    data : { 
                        u_id:up_id,
                        u_jenis_tes:up_jenis_tes,
                        u_nilai_standar:up_nilai_standar,
                    },

                    success: function(data){
                        if (data.code==1) {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Update Data Nilai Standar Sukses',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            $('#modalEditStandar').modal('hide'); 
                            $('#listNilaiStandar').DataTable().destroy();$('#listNilaiStandar').find('tbody').empty();
                            document.getElementById('formEditStandar').reset();
                            showListNilaiStandar();
                        }
                    }
                });
                return false;
            });
        /*Edit Bobot*/
    /*MANAJEMEN NILAI STANDAR*/

    /*MANAJEMEN NILAI KONVERSI*/
        /*Show Nilai Konversi*/
            function showNilaiKonversiPukul(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_admin/getNilaiKonversiPukul',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+data[i].nama_konversi+' </td>'+
                            '<td>'+data[i].bts_bawah+' </td>'+
                            '<td>'+data[i].bts_atas+' </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-warning btn-sm sub_bobot_edit" data-id_konversi="'+data[i].id_konversi+'"data-id_bobot_tes="'+data[i].id_bobot_tes+'" data-nama_konversi="'+data[i].nama_konversi+'" data-bts_bawah="'+data[i].bts_bawah+'" data-bts_atas="'+data[i].bts_atas+'"> <b> <span class="fa fa-edit"> </span> </b> </a>'
                            '</tr>';
                        }
                        $('#listNilaiKonversiPukul').find('tbody').empty();
                        $('#showNilaiKonversiPukul').html(html);
                        $('#listNilaiKonversiPukul').DataTable({
                            "paging": false,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": false,
                            "autoWidth": true,
                        });
                    }
                });
            }

            function showNilaiKonversiTangkap(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_admin/getNilaiKonversiTangkap',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+data[i].nama_konversi+' </td>'+
                            '<td>'+data[i].bts_bawah+' </td>'+
                            '<td>'+data[i].bts_atas+' </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-warning btn-sm sub_bobot_edit" data-id_konversi="'+data[i].id_konversi+'"data-id_bobot_tes="'+data[i].id_bobot_tes+'" data-nama_konversi="'+data[i].nama_konversi+'" data-bts_bawah="'+data[i].bts_bawah+'" data-bts_atas="'+data[i].bts_atas+'"> <b> <span class="fa fa-edit"> </span> </b> </a>'
                            '</tr>';
                        }
                        $('#listNilaiKonversiTangkap').find('tbody').empty();
                        $('#showNilaiKonversiTangkap').html(html);
                        $('#listNilaiKonversiTangkap').DataTable({
                            "paging": false,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": false,
                            "autoWidth": true,
                        });
                    }
                });
            }

            function showNilaiKonversiLempar(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_admin/getNilaiKonversiLempar',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+data[i].nama_konversi+' </td>'+
                            '<td>'+data[i].bts_bawah+' </td>'+
                            '<td>'+data[i].bts_atas+' </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-warning btn-sm sub_bobot_edit" data-id_konversi="'+data[i].id_konversi+'"data-id_bobot_tes="'+data[i].id_bobot_tes+'" data-nama_konversi="'+data[i].nama_konversi+'" data-bts_bawah="'+data[i].bts_bawah+'" data-bts_atas="'+data[i].bts_atas+'"> <b> <span class="fa fa-edit"> </span> </b> </a>'
                            '</tr>';
                        }
                        $('#listNilaiKonversiLempar').find('tbody').empty();
                        $('#showNilaiKonversiLempar').html(html);
                        $('#listNilaiKonversiLempar').DataTable({
                            "paging": false,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": false,
                            "autoWidth": true,
                        });
                    }
                });
            }

            function showNilaiKonversiLari(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_admin/getNilaiKonversiLari',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+data[i].nama_konversi+' </td>'+
                            '<td>'+data[i].bts_bawah+' detik </td>'+
                            '<td>'+data[i].bts_atas+' detik </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-warning btn-sm sub_bobot_edit" data-id_konversi="'+data[i].id_konversi+'"data-id_bobot_tes="'+data[i].id_bobot_tes+'" data-nama_konversi="'+data[i].nama_konversi+'" data-bts_bawah="'+data[i].bts_bawah+'" data-bts_atas="'+data[i].bts_atas+'"> <b> <span class="fa fa-edit"> </span> </b> </a>'
                            '</tr>';
                        }
                        $('#listNilaiKonversiLari').find('tbody').empty();
                        $('#showNilaiKonversiLari').html(html);
                        $('#listNilaiKonversiLari').DataTable({
                            "paging": false,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": false,
                            "autoWidth": true,
                        });
                    }
                });
            }
        /*Show Nilai Konversi*/

        /*Edit Bobot*/
            $('#listNilaiKonversiPukul').on('click','.sub_bobot_edit',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                    = $(this).data('id_konversi');
                var upnama_konversi         = $(this).data('nama_konversi');
                var upbts_bawah             = $(this).data('bts_bawah');
                var upbts_atas              = $(this).data('bts_atas');
                var jenis_tes               = $(this).data('id_bobot_tes');

                if(jenis_tes == 1){
                    var upjenis_tes     = "Tes Pukul";
                }else if(jenis_tes == 2){
                    var upjenis_tes     = "Tes Tangkap";
                }else if(jenis_tes == 3){
                    var upjenis_tes     = "Tes Lempar";
                }else{
                    var upjenis_tes     = "Tes Lari";
                }
                
                // memasukkan data ke form updatean
                $('[name="edt_id_konversi"]').val(upid);
                $('[name="edt_id_bobot_tes"]').val(jenis_tes);
                $('[name="edt_jenis_tes"]').val(upjenis_tes);
                $('[name="edt_nama_konversi"]').val(upnama_konversi);
                $('[name="edt_bts_bawah"]').val(upbts_bawah);
                $('[name="edt_bts_atas"]').val(upbts_atas);

                $('#modalEditKonversi').modal('show');
            });

            $('#listNilaiKonversiTangkap').on('click','.sub_bobot_edit',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                    = $(this).data('id_konversi');
                var upnama_konversi         = $(this).data('nama_konversi');
                var upbts_bawah             = $(this).data('bts_bawah');
                var upbts_atas              = $(this).data('bts_atas');
                var jenis_tes               = $(this).data('id_bobot_tes');

                if(jenis_tes == 1){
                    var upjenis_tes     = "Tes Pukul";
                }else if(jenis_tes == 2){
                    var upjenis_tes     = "Tes Tangkap";
                }else if(jenis_tes == 3){
                    var upjenis_tes     = "Tes Lempar";
                }else{
                    var upjenis_tes     = "Tes Lari";
                }
                
                // memasukkan data ke form updatean
                $('[name="edt_id_konversi"]').val(upid);
                $('[name="edt_id_bobot_tes"]').val(jenis_tes);
                $('[name="edt_jenis_tes"]').val(upjenis_tes);
                $('[name="edt_nama_konversi"]').val(upnama_konversi);
                $('[name="edt_bts_bawah"]').val(upbts_bawah);
                $('[name="edt_bts_atas"]').val(upbts_atas);

                $('#modalEditKonversi').modal('show');
            });

            $('#listNilaiKonversiLempar').on('click','.sub_bobot_edit',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                    = $(this).data('id_konversi');
                var upnama_konversi         = $(this).data('nama_konversi');
                var upbts_bawah             = $(this).data('bts_bawah');
                var upbts_atas              = $(this).data('bts_atas');
                var jenis_tes               = $(this).data('id_bobot_tes');

                if(jenis_tes == 1){
                    var upjenis_tes     = "Tes Pukul";
                }else if(jenis_tes == 2){
                    var upjenis_tes     = "Tes Tangkap";
                }else if(jenis_tes == 3){
                    var upjenis_tes     = "Tes Lempar";
                }else{
                    var upjenis_tes     = "Tes Lari";
                }
                
                // memasukkan data ke form updatean
                $('[name="edt_id_konversi"]').val(upid);
                $('[name="edt_id_bobot_tes"]').val(jenis_tes);
                $('[name="edt_jenis_tes"]').val(upjenis_tes);
                $('[name="edt_nama_konversi"]').val(upnama_konversi);
                $('[name="edt_bts_bawah"]').val(upbts_bawah);
                $('[name="edt_bts_atas"]').val(upbts_atas);

                $('#modalEditKonversi').modal('show');
            });

            $('#listNilaiKonversiLari').on('click','.sub_bobot_edit',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                    = $(this).data('id_konversi');
                var upnama_konversi         = $(this).data('nama_konversi');
                var upbts_bawah             = $(this).data('bts_bawah');
                var upbts_atas              = $(this).data('bts_atas');
                var jenis_tes               = $(this).data('id_bobot_tes');

                if(jenis_tes == 1){
                    var upjenis_tes     = "Tes Pukul";
                }else if(jenis_tes == 2){
                    var upjenis_tes     = "Tes Tangkap";
                }else if(jenis_tes == 3){
                    var upjenis_tes     = "Tes Lempar";
                }else{
                    var upjenis_tes     = "Tes Lari";
                }
                
                // memasukkan data ke form updatean
                $('[name="edt_id_konversi"]').val(upid);
                $('[name="edt_id_bobot_tes"]').val(jenis_tes);
                $('[name="edt_jenis_tes"]').val(upjenis_tes);
                $('[name="edt_nama_konversi"]').val(upnama_konversi);
                $('[name="edt_bts_bawah"]').val(upbts_bawah);
                $('[name="edt_bts_atas"]').val(upbts_atas);

                $('#modalEditKonversi').modal('show');
            });

            //UPDATE record to database (submit button)
            $('#formEditKonversi').submit(function(e){
                e.preventDefault(); 
                // memasukkan data dari form update ke variabel untuk update db
                var up_id                   = $('#edt_id_konversi').val();
                var up_nama_konversi        = $('#edt_nama_konversi').val();
                var up_bts_bawah            = $('#edt_bts_bawah').val();
                var up_bts_atas             = $('#edt_bts_atas').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_admin/updateNilaiKonversi",
                    dataType : "JSON",
                    data : { 
                        u_id:up_id,
                        u_nama_konversi:up_nama_konversi,
                        u_bts_bawah:up_bts_bawah,
                        u_bts_atas:up_bts_atas,
                    },

                    success: function(data){
                        if (data.code==1) {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Update Data Nilai Konversi Sukses',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            $('#modalEditKonversi').modal('hide'); 
                            $('#listNilaiKonversiLempar').DataTable().destroy();$('#listNilaiKonversiLempar').find('tbody').empty();
                            $('#listNilaiKonversiPukul').DataTable().destroy();$('#listNilaiKonversiPukul').find('tbody').empty();
                            $('#listNilaiKonversiTangkap').DataTable().destroy();$('#listNilaiKonversiTangkap').find('tbody').empty();
                            $('#listNilaiKonversiLari').DataTable().destroy();$('#listNilaiKonversiLari').find('tbody').empty();
                            document.getElementById('formEditKonversi').reset();
                            showNilaiKonversiLempar();showNilaiKonversiPukul();showNilaiKonversiTangkap();showNilaiKonversiLari();
                        }
                
                    }
                });
                return false;
            });
        /*Edit Bobot*/
    /*MANAJEMEN NILAI KONVERSI*/

    /*MANAJEMEN HASIL SELEKSI*/
        /*Show List Hasil Seleksi*/
            function showHasilSeleksi(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_admin/getSeleksiSelesai',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+data[i].nama_seleksi+' </td>'+
                            '<td>'+data[i].jenis_olahraga+' </td>'+
                            '<td>'+data[i].tgl_seleksi+' </td>'+
                            '<td>'+data[i].status_seleksi+' </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm lihat_hasil" data-id_seleksi="'+data[i].id_seleksi+'" data-nama_seleksi="'+data[i].nama_seleksi+'" data-tgl_seleksi="'+data[i].tgl_seleksi+'" data-jenis_olahraga="'+data[i].jenis_olahraga+'" data-jenis_kelamin="'+data[i].jenis_kelamin+'" data-batas_umur="'+data[i].batas_umur+'" data-tgl_kejuaraan="'+data[i].tgl_kejuaraan+'" data-status_seleksi="'+data[i].status_seleksi+'" data-jml_set_pukul="'+data[i].jml_set_pukul+'" data-jml_set_tangkap="'+data[i].jml_set_tangkap+'" data-jml_set_lempar="'+data[i].jml_set_lempar+'" data-jml_rep_lari="'+data[i].jml_rep_lari+'"> <b> <span class="fa fa-eye"> Lihat</span> </b> </a>'
                            +'     '+
                             '<a href="javascript:void(0);" class="btn btn-success btn-sm download_hasil" data-id_seleksi="'+data[i].id_seleksi+'" data-nama_seleksi="'+data[i].nama_seleksi+'" data-tgl_seleksi="'+data[i].tgl_seleksi+'" data-jenis_olahraga="'+data[i].jenis_olahraga+'" data-jenis_kelamin="'+data[i].jenis_kelamin+'" data-batas_umur="'+data[i].batas_umur+'" data-tgl_kejuaraan="'+data[i].tgl_kejuaraan+'" data-status_seleksi="'+data[i].status_seleksi+'" data-jml_set_pukul="'+data[i].jml_set_pukul+'" data-jml_set_tangkap="'+data[i].jml_set_tangkap+'" data-jml_set_lempar="'+data[i].jml_set_lempar+'" data-jml_rep_lari="'+data[i].jml_rep_lari+'"> <b> <span class="fa fa-download"> Download</span> </b> </a>'
                            +'</td>'+
                            '</tr>';
                        }
                        $('#hasilSeleksi').find('tbody').empty();
                        $('#showHasilSeleksi').html(html);
                        $('#hasilSeleksi').DataTable({
                        });

                    }
                });
            }
        /*Show List Hasil Seleksi*/

         /*Edit Seleksi*/
            $('#hasilSeleksi').on('click','.lihat_hasil',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                = $(this).data('id_seleksi');
                var upnama_seleksi      = $(this).data('nama_seleksi');
                var upjenis_olahraga    = $(this).data('jenis_olahraga'); 
                var upjenis_kelamin     = $(this).data('jenis_kelamin'); 
                var upbatas_umur        = $(this).data('batas_umur'); 
                var uptgl_seleksi       = $(this).data('tgl_seleksi');
                var uptgl_kejuaraan     = $(this).data('tgl_kejuaraan'); 
                var upstatus_seleksi    = $(this).data('status_seleksi'); 
                var upset_pukul         = $(this).data('jml_set_pukul'); 
                var upset_tangkap       = $(this).data('jml_set_tangkap'); 
                var upset_lempar        = $(this).data('jml_set_lempar'); 
                var uprep_lari          = $(this).data('jml_rep_lari'); 
                
                // memasukkan data ke form updatean
                $('[name="edt_id_seleksi"]').val(upid);
                $('[name="edt_nama_seleksi"]').val(upnama_seleksi);
                $('[name="edt_jenis_olahraga"]').val(upjenis_olahraga);
                $('[name="edt_jenis_kelamin"]').val(upjenis_kelamin);
                $('[name="edt_batas_umur"]').val(upbatas_umur);
                $('[name="edt_tgl_seleksi"]').val(uptgl_seleksi);
                $('[name="edt_tgl_kejuaraan"]').val(uptgl_kejuaraan);
                $('[name="edt_status_seleksi"]').val(upstatus_seleksi);
                $('[name="edt_set_pukul"]').val(upset_pukul);
                $('[name="edt_set_tangkap"]').val(upset_tangkap);
                $('[name="edt_set_lempar"]').val(upset_lempar);
                $('[name="edt_rep_lari"]').val(uprep_lari);

                $('#modalLihatHasil').modal('show');
                
            });

            //UPDATE record to database (submit button)
            $('#formLihatHasil').submit(function(e){
                e.preventDefault(); 
                // memasukkan data dari form update ke variabel untuk update db
                var up_id_seleksi       = $('#edt_id_seleksi').val();
                var up_nama_seleksi     = $('#edt_nama_seleksi').val();
                var up_jenis_olahraga   = $('#edt_jenis_olahraga').val();
                var up_jenis_kelamin    = $('#edt_jenis_kelamin').val();
                var up_batas_umur       = $('#edt_batas_umur').val();
                var up_tgl_seleksi      = $('#edt_tgl_seleksi').val();
                var up_tgl_kejuaraan    = $('#edt_tgl_kejuaraan').val();
                var up_set_pukul        = $('#edt_set_pukul').val();
                var up_set_tangkap      = $('#edt_set_tangkap').val();
                var up_set_lempar       = $('#edt_set_lempar').val();
                var up_rep_lari         = $('#edt_rep_lari').val();
                var up_jenis_tes        = $('#edt_jenis_tes').val();


                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_admin/lihatHasilSeleksi",
                    dataType : "JSON",
                    data : { 
                        u_id_seleksi:up_id_seleksi,
                        u_nama_seleksi:up_nama_seleksi,
                        u_jenis_olahraga:up_jenis_olahraga,
                        u_jenis_kelamin:up_jenis_kelamin,
                        u_batas_umur:up_batas_umur,
                        u_tgl_seleksi:up_tgl_seleksi,
                        u_tgl_kejuaraan:up_tgl_kejuaraan,
                        u_set_pukul:up_set_pukul,
                        u_set_tangkap:up_set_tangkap,
                        u_set_lempar:up_set_lempar,
                        u_rep_lari:up_rep_lari,
                        u_jenis_tes:up_jenis_tes,
                    },

                    // success: function(data){
                    //     if (data.code==1) {
                    //         Swal.fire({
                    //                 type: 'success',
                    //                 title: 'Update Data Seleksi Sukses',
                    //                 showConfirmButton: false,
                    //                 timer: 1500
                    //             })
                    //         $('#modalEditSeleksi').modal('hide'); 
                    //     }
                        
                    //     $('#hasilSeleksi').DataTable().destroy();
                    //     $('#hasilSeleksi').find('tbody').empty();
                    //     document.getElementById('formLihatHasil').reset();
                    //     showListSeleksi();
                    // }
                });
                return false;
            });
        /*Edit Seleksi*/
    /*MANAJEMEN HASIL SELEKSI*/


	}); 
</script>
</body>
</html>
