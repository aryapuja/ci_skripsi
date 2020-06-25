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
        showListSeleksi();
		showListSeleksiBerjalan();

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
                    url  : "<?php echo site_url(); ?>/C_anggota/updateAkun",
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
                            location.reload();
                            Swal.fire({
                                type: 'success',
                                title: 'Update data sukses',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#modalEditAkun').modal('hide'); 
                            
                            document.getElementById('formEditAkun').reset();
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
                    url  : "<?php echo site_url(); ?>/C_anggota/changePassword",
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

    /*MANAJEMEN DAFTAR SELEKSI*/
        /*Show List*/
            function showListSeleksiBerjalan(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_anggota/getSeleksi',
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
                            '<td>'+data[i].jenis_olahraga+' ('+data[i].jenis_kelamin+')</td>'+
                            '<td>'+data[i].batas_umur+' Tahun </td>'+
                            '<td>'+data[i].tgl_seleksi+' </td>'+
                            '<td>'+data[i].tgl_kejuaraan+' </td>'+
                            '</tr>';
                        }
                        $('#listSeleksiBerjalan').find('tbody').empty();
                        $('#showListSeleksiBerjalan').html(html);
                        $('#listSeleksiBerjalan').DataTable({
                        });

                    }
                });
            }
        /*Show List*/

        /*Show List*/
            function showListSeleksi(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_anggota/getSeleksi',
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
                            '<td>'+data[i].jenis_olahraga+' ('+data[i].jenis_kelamin+')</td>'+
                            '<td>'+data[i].batas_umur+' Tahun </td>'+
                            '<td>'+data[i].tgl_seleksi+' </td>'+
                            '<td>'+data[i].tgl_kejuaraan+' </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm seleksi_daftar" data-id_seleksi="'+data[i].id_seleksi+'"  data-nama_seleksi="'+data[i].nama_seleksi+'" data-tgl_seleksi="'+data[i].tgl_seleksi+'" data-jenis_olahraga="'+data[i].jenis_olahraga+'" data-jenis_kelamin="'+data[i].jenis_kelamin+'" data-batas_umur="'+data[i].batas_umur+'" data-tgl_kejuaraan="'+data[i].tgl_kejuaraan+'" data-status_seleksi="'+data[i].status_seleksi+'" data-tgl_kejuaraan="'+data[i].tgl_kejuaraan+'"> <b> <span class="fa fa-user-edit"> </span> </b> </a>'
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
        /*Show List*/

        /*Daftar Seleksi*/
            $('#listSeleksi').on('click','.seleksi_daftar',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid                = $(this).data('id_seleksi');
                var upnama_seleksi      = $(this).data('nama_seleksi');
                var upjenis_olahraga    = $(this).data('jenis_olahraga'); 
                var upjenis_kelamin     = $(this).data('jenis_kelamin'); 
                var upbatas_umur        = $(this).data('batas_umur'); 
                var uptgl_kejuaraan     = $(this).data('tgl_kejuaraan'); 
                
                // memasukkan data ke form updatean
                $('[name="id_seleksi"]').val(upid);
                $('[name="nama_seleksi"]').val(upnama_seleksi);
                $('[name="jenis_olahraga"]').val(upjenis_olahraga);
                $('[name="jenis_kelamin"]').val(upjenis_kelamin);
                $('[name="batas_umur"]').val(upbatas_umur);
                $('[name="tgl_kejuaraan"]').val(uptgl_kejuaraan);
                
                $('#modalDaftarSeleksi').modal('show');
            });

            $('#formDaftarSeleksi').submit(function(e){
                e.preventDefault(); 
                // memasukkan data dari form update ke variabel untuk update db
                var up_id               = $('#id_seleksi').val();
                var up_nama_seleksi     = $('#nama_seleksi').val();
                var up_jenis_olahraga   = $('#jenis_olahraga').val();
                var up_jenis_kelamin    = $('#jenis_kelamin').val();
                var up_batas_umur       = $('#batas_umur').val();
                var up_tgl_kejuaraan    = $('#tgl_kejuaraan').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_anggota/daftarSeleksi",
                    dataType : "JSON",
                    data : { 
                        u_id:up_id,
                        u_nama_seleksi:up_nama_seleksi,
                        u_jenis_olahraga:up_jenis_olahraga,
                        u_jenis_kelamin:up_jenis_kelamin,
                        u_batas_umur:up_batas_umur,
                        u_tgl_kejuaraan:up_tgl_kejuaraan,
                    },

                    success: function(data){
                        if (data.code==1) {
                             Swal.fire({
                                    type: 'error',
                                    title: 'Tidak Layak Untuk Mendaftar',
                                    text: 'Event ini ditujukan untuk gender yang berbeda',
                                    showConfirmButton: true,
                                })
                            $('#modalDaftarSeleksi').modal('hide'); 
                        }else if (data.code==2){
                            Swal.fire({
                                    type: 'error',
                                    title: 'Tidak Layak Untuk Mendaftar',
                                    text: 'Melewati batas umur yang ditetapkan',
                                    showConfirmButton: true,
                                })
                            $('#modalDaftarSeleksi').modal('hide'); 
                        }else if (data.code==3){
                            Swal.fire({
                                    type: 'error',
                                    title: 'Akun telah terdaftar pada seleksi yang sama',
                                    showConfirmButton: true,
                                })
                            $('#modalDaftarSeleksi').modal('hide'); 
                        }else{
                            Swal.fire({
                                    type: 'success',
                                    title: 'Pendaftaran Berhasil',
                                    // text: '',
                                    showConfirmButton: true,
                                    timer: 2000
                                })
                            $('#modalDaftarSeleksi').modal('hide'); 
                        }
                        
                        $('#listSeleksi').DataTable().destroy();
                        $('#listSeleksi').find('tbody').empty();
                        document.getElementById('formDaftarSeleksi').reset();
                        showListSeleksi();
                    }
                });
                return false;
            });
        /*Daftar Seleksi*/

    /*MANAJEMEN DAFTAR SELEKSI*/



	});
	   
</script> -->
</body>
</html>
