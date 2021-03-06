<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PERBASASI | ADMIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/plugins/jqvmap/jqvmap.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- SweetAlert -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/sa/dist/sweetalert2.min.css">

</head>
<body class="sidebar-mini sidebar-collapse layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url();?>index.php/C_penyeleksi" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo $this->session->username.' ('.$this->session->level_akun.')'; ?></span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalEditAkun">
            <i class="fas fa-edit mr-2"></i> Edit Informasi Akun
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalGantiPassword">
            <i class="fas fa-key mr-2"></i> Ganti Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url();?>index.php/C_login/logout" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<!--     <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url();?>assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->username; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo site_url();?>/C_penyeleksi/viewUser" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Daftar Akun
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Selamat Datang, <?php echo $this->session->nama_lengkap; ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- FORM GANTI PASSWORD -->
    <form id="formGantiPassword">
      <div class="modal fade" id="modalGantiPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ganti Password</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
            </div>
            <div class="modal-body">               
              <div class="container-fluid">   
                <div class="row">        
                  <!-- form inputan nama kegiatan -->
                  <div class="form-group col-lg-12 ">
                    <div class="col-lg-12">
                      <label>Password Lama</label>
                      <input type="password" id="passold" class="form-control" placeholder="Masukkan Password Lama" style="width: 100%" required>
                    </div>
                    <div class="col-lg-12">
                      <label>Password Baru</label>
                      <input type="password" id="passnew" class="form-control" minlength="6" placeholder="Minimal 6 karakter" style="width: 100%" required>
                    </div>
                    <div class="col-lg-12">
                      <label>Konfirmasi Password Baru</label>
                      <input type="password" id="passnew2" class="form-control" minlength="6" placeholder="Konfirmasi Password Baru" style="width: 100%" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <!-- inputan button simpan dan Batal -->
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Batal</button>
                    <button type="submit" id="btn_push" class="btn btn-primary ">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  <!-- FORM GANTI PASSWORD -->

  <!-- FORM EDIT AKUN -->
    <form id="formEditAkun">
      <div class="modal fade" id="modalEditAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 70%">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Informasi Akun</h4>
              <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="form-group col-lg-12">
                    <div class="row">

                    <div class="col-md-6">
                      <label>Username</label>
                      <input type="text" id="edt_username" name="edt_username" class="form-control" placeholder="Masukkan 6-12 Karakter" minlength="6" maxlength="12" style="width: 100%" required readonly value="<?php echo $akun[0]->username ?>">
                    </div>

                    <div class="col-md-6">
                      <label>Nama Lengkap</label>
                      <input type="text" id="edt_nama_lengkap" name="edt_nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" style="width: 100%" required value="<?php echo $akun[0]->nama_lengkap ?>">
                    </div>

                    <div class="col-md-6">
                      <label>Tanggal Lahir</label>
                      <input type="date" id="edt_tgl_lahir" name="edt_tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" minlength="6" style="width: 100%" required value="<?php echo $akun[0]->tgl_lahir ?>">
                    </div>

                    <div class="col-md-6">
                      <label>Email</label>
                      <input type="text" id="edt_email" name="edt_email" class="form-control" placeholder="Masukkan Email Aktif" minlength="6" style="width: 100%" required value="<?php echo $akun[0]->email ?>">
                    </div>

                    <div class="col-md-6">
                      <label>Nomor Telepon</label>
                      <input type="text" id="edt_no_hp" name="edt_no_hp" class="form-control" placeholder="Nomor Aktif" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" value="<?php echo $akun[0]->no_hp ?>">
                    </div>

                    <div class="col-md-6">
                      <label>Nomor Telepon Orang Tua</label>
                      <input type="text" id="edt_no_hp_ortu" name="edt_no_hp_ortu" class="form-control" placeholder="Nomor Aktif" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" value="<?php echo $akun[0]->no_hp_ortu ?>" >
                    </div>

                    <div class="col-md-4">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="edt_jenis_kelamin" id="edt_jenis_kelamin" required>
                        <option selected hidden value="<?php echo $akun[0]->jenis_kelamin ?>"><?php echo $akun[0]->jenis_kelamin ?></option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                      </select>
                    </div>

                    <div class="col-md-4">
                      <label>Tinggi Badan</label>
                      <input type="text" id="edt_tinggi_badan" name="edt_tinggi_badan" class="form-control" placeholder="Satuan cm" maxlength="6" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" required value="<?php echo $akun[0]->tinggi_badan ?>">
                    </div>

                    <div class="col-md-4">
                      <label>Berat Badan </label>
                      <input type="text" id="edt_berat_badan" name="edt_berat_badan" class="form-control" placeholder="Satuan kg" maxlength="6" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" required value="<?php echo $akun[0]->berat_badan ?>">
                    </div>

                    <div class="col-md-12">
                      <label>Alamat Rumah</label>
                      <input type="text" id="edt_alamat_rumah" name="edt_alamat_rumah" class="form-control" placeholder="Masukkan alamat Rumah" minlength="6" style="width: 100%" required value="<?php echo $akun[0]->alamat_rumah ?>">
                    </div>

                    <div class="col-md-12">
                      <label>Asal Sekolah</label>
                      <input type="text" id="edt_asal_sekolah" name="edt_asal_sekolah" class="form-control" placeholder="Masukkan Asal Sekolah" minlength="6" style="width: 100%" required value="<?php echo $akun[0]->asal_sekolah ?>">
                    </div>

                    <div class="col-md-12">
                      <label>Riwayat Penyakit</label>
                      <input type="text" id="edt_riwayat_penyakit" name="edt_riwayat_penyakit" class="form-control" placeholder="Pisahkan dengan tanda koma jika lebih dari 1" style="width: 100%" value="<?php echo $akun[0]->riwayat_penyakit ?>">
                    </div>
                  
                  </div>
                  </div>
                </div>
                
              </div>      
            </div>
            <div class="modal-footer">
              <input type="hidden" id="edt_id_akun" name="edt_id_akun" value="">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  <!-- FORM EDIT AKUN -->
