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

        var pathArray   = window.location.pathname.split('/');
        var segment     = pathArray[3];

		showListSeleksi();
        showListSeleksiBerjalan();
        showListPeserta();

    /*Show Seleksi Berjalan*/
        function showListSeleksiBerjalan(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url()?>index.php/C_penyeleksi/getSeleksiBerjalan',
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
    /*Show Seleksi Berjalan*/

	/*MANAJEMEN AKUN*/
    	/*Edit Akun*/
            //UPDATE record to database (submit button)
            $('#formEditAkun').submit(function(e){
                e.preventDefault(); 
                // memasukkan data dari form update ke variabel untuk update db
                var edt_nama_lengkap 	= $('#edt_nama_lengkap').val();
                var edt_username     	= $('#edt_username').val();
                var edt_email		    = $('#edt_email').val();
                var edt_tgl_lahir   	= $('#edt_tgl_lahir').val();
                var edt_no_hp     		= $('#edt_no_hp').val();
                var edt_alamat_rumah    = $('#edt_alamat_rumah').val();
                var edt_jenis_kelamin   = $('#edt_jenis_kelamin').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_penyeleksi/updateAkun",
                    dataType : "JSON",
                    data : { 
                        edt_nama_lengkap:edt_nama_lengkap,
                        edt_username:edt_username,
                        edt_email:edt_email,
                        edt_tgl_lahir:edt_tgl_lahir,
                        edt_no_hp:edt_no_hp,
                        edt_alamat_rumah:edt_alamat_rumah,
                        edt_jenis_kelamin:edt_jenis_kelamin,
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
                    url  : "<?php echo site_url(); ?>/C_penyeleksi/changePassword",
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

    /*MANAJEMEN INPUT NILAI*/
        /*Show List Seleksi*/
            function showListSeleksi(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_penyeleksi/getSeleksi',
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
                            '<a href="<?php echo site_url();?>/C_penyeleksi/viewListPeserta/'+data[i].id_seleksi+'" class="btn btn-info btn-sm list_peserta" data-id_seleksi="'+data[i].id_seleksi+'"> <b> <span class="fa fa-user-edit"> </span> </b> </a>'
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
        /*Show List Seleksi*/

        /*Show List Peserta*/
            function showListPeserta(){
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_penyeleksi/getPeserta/'+segment,
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+data[i].nama_peserta+' </td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-primary btn-sm input_nilai" data-id_akun="'+data[i].id_akun+'" data-id_seleksi="'+data[i].id_seleksi+'" data-nama_peserta="'+data[i].nama_peserta+'"> <b> <span class="fa fa-edit"> Input Nilai</span> </b> </a>'+
                            '</td>'+
                            '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-primary btn-sm cek_nilai" data-id_akun="'+data[i].id_akun+'" data-id_seleksi="'+data[i].id_seleksi+'" data-nama_peserta="'+data[i].nama_peserta+'"> <b> <span class="fa fa-edit"> Cek Nilai</span> </b> </a>'+
                            '</td>'+
                            '</tr>';
                        }
                        $('#listPeserta').find('tbody').empty();
                        $('#showListPeserta').html(html);
                        $('#listPeserta').DataTable({
                        });

                    }
                });
            }
        /*Show List Peserta*/

        /*Input Nilai*/
        $('#listPeserta').on('click','.input_nilai',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid_akun         = $(this).data('id_akun');
                var upid_seleksi      = $(this).data('id_seleksi');
                var upnama_peserta    = $(this).data('nama_peserta'); 
                
                // memasukkan data ke form updatean
                $('[name="id_akun"]').val(upid_akun);
                $('[name="id_seleksi"]').val(upid_seleksi);
                $('[name="nama_peserta"]').val(upnama_peserta);

                $('#modalInputNilai').modal('show');
            });

            $('#formInputNilai').submit(function(e){
                e.preventDefault(); 
                // memasukkan data dari form update ke variabel untuk update db
                var up_id_akun         = $('#id_akun').val();
                var up_id_seleksi      = $('#id_seleksi').val();
                var up_nama_peserta    = $('#nama_peserta').val();
                var up_id_tes          = $('#id_tes').val();
                var up_id_sub_tes      = $('#id_sub_tes').val();
                var up_set_ke          = $('#set_ke').val();
                var up_nilai_asli      = $('#nilai_asli').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/C_penyeleksi/inputNilai",
                    dataType : "JSON",
                    data : { 
                        u_id_akun:up_id_akun,
                        u_id_seleksi:up_id_seleksi,
                        u_nama_peserta:up_nama_peserta,
                        u_id_tes:up_id_tes,
                        u_id_sub_tes:up_id_sub_tes,
                        u_set_ke:up_set_ke,
                        u_nilai_asli:up_nilai_asli,
                    },

                    success: function(data){
                        if (data.code==1) {
                             Swal.fire({
                                    type: 'error',
                                    title: 'Kesalahan Data',
                                    text: 'Range Nilai Untuk Tes Unjuk Kerja Adalah 1-5',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                        }else if(data.code==2){
                            Swal.fire({
                                    type: 'error',
                                    title: 'Kesalahan Data',
                                    text: 'Range Nilai Untuk Tes Keterampilan Ini Adalah 1-10 Kali',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                        }else if(data.code==3){
                            Swal.fire({
                                    type: 'error',
                                    title: 'Kesalahan Data',
                                    text: 'Range Nilai Untuk Tes Keterampilan Ini Adalah 1-100 Meter',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                        }else{
                            Swal.fire({
                                        type: 'success',
                                        title: 'Nilai Tes Berhasil Dimasukkan',
                                        // text: '',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                            $('#modalInputNilai').modal('hide'); 
                            $('#listPeserta').DataTable().destroy();
                            $('#listPeserta').find('tbody').empty();
                            document.getElementById('formInputNilai').reset();
                            document.getElementById('id_sub_tes').disabled=true;
                            document.getElementById('nilai_asli').disabled=true;
                            document.getElementById('set_ke').setAttribute('disabled','');
                            showListPeserta();
                        }
                    }
                });
                return false;
            });
        /*Input Nilai*/  

        /*Cek Nilai*/
        $('#listPeserta').on('click','.cek_nilai',function(){
                // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                var upid_akun         = $(this).data('id_akun');
                var upid_seleksi      = $(this).data('id_seleksi');
                var upnama_peserta    = $(this).data('nama_peserta'); 
                
                // memasukkan data ke form updatean
                $('[name="cek_id_akun"]').val(upid_akun);
                $('[name="cek_id_seleksi"]').val(upid_seleksi);
                $('[name="cek_nama_peserta"]').val(upnama_peserta);

                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>index.php/C_penyeleksi/lihatNilai/'+upid_akun,
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            var ii = i+1;
                            var jenis_tes, jenis_sub_tes;
                            if(data[i].id_bobot_tes!=4){
                                nilai = parseInt(data[i].nilai_asli);
                            }else{
                                nilai = data[i].nilai_asli;
                            }

                            if(data[i].id_bobot_tes==1){
                                jenis_tes = ' Tes Pukul';
                            }else if(data[i].id_bobot_tes==2){
                                jenis_tes = ' Tes Tangkap';
                            }else if(data[i].id_bobot_tes==3){
                                jenis_tes = ' Tes Lempar';
                            }else if(data[i].id_bobot_tes==4){
                                jenis_tes = ' Tes Lari ';
                            }

                            if(data[i].id_bobot_sub_tes==1 || data[i].id_bobot_sub_tes==3 || data[i].id_bobot_sub_tes== 5){
                                jenis_sub_tes = 'Tes Keterampilan';
                            }else if(data[i].id_bobot_sub_tes==2 || data[i].id_bobot_sub_tes==4 || data[i].id_bobot_sub_tes==6){
                                jenis_sub_tes = 'Tes Unjuk Kerja';
                            }else{
                                jenis_sub_tes = 'Tes Kecepatan';
                            }

                            html += '<tr style="center">'+
                            '<td>'+ii+' </td>'+
                            '<td>'+jenis_tes+' </td>'+
                            '<td>'+jenis_sub_tes+' </td>'+
                            '<td> <center>'+data[i].set_ke+'</center> </td>'+
                            '<td> <center>'+nilai+'</center></td>'+
                            '</tr>';
                        }
                        $('#listNilai').find('tbody').empty();
                        $('#showListNilai').html(html);

                    }
                });

                $('#modalCekNilai').modal('show');
            });
        /*Cek Nilai*/
    /*MANAJEMEN INPUT NILAI*/

	});

$('#listNilai').DataTable({
    "searching"         : true,
    "scrollCollapse"    : false,
    "paging"            : false
});
	   
</script>
</body>
</html>
