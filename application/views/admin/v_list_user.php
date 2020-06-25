<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">List Akun Terdaftar</h3> -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#Modal_Regis">Tambah Akun Penyeleksi</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="listUser" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="th-lg no-sort"> No </th>
                    <th class="th-lg"> Username </th>
                    <th class="th-lg"> Nama Lengkap </th>
                    <th class="th-lg"> Asal Sekolah </th>
                    <th class="th-lg"> Level Akun </th>
                    <th class="th-lg"> Status Akun </th>
                    <th class="th-lg"> Aksi </th>
                  </tr>
                  </thead>
                  <tbody id="showListUser">
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> No </th>
                    <th> Username </th>
                    <th> Nama Lengkap </th>
                    <th> Asal Sekolah </th>
                    <th> Level Akun </th>
                    <th> Status Akun </th>
                    <th> Aksi </th>
                  </tr>
                  </tfoot>
                </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

            
          </div>
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- FORM UPDATE USER -->
<form id="formEditUser">
  <div class="modal fade" id="modalEditUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <input type="text" id="edt_username" name="edt_username" class="form-control" placeholder="Masukkan 6-12 Karakter" minlength="6" maxlength="12" style="width: 100%" required readonly>
                </div>

                <div class="col-md-6">
                  <label>Nama Lengkap</label>
                  <input type="text" id="edt_nama_lengkap" name="edt_nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" style="width: 100%" required>
                </div>

                <div class="col-md-6">
                  <label>Tanggal Lahir</label>
                  <input type="date" id="edt_tgl_lahir" name="edt_tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" minlength="6" style="width: 100%" required>
                </div>

                <div class="col-md-6">
                  <label>Email</label>
                  <input type="text" id="edt_email" name="edt_email" class="form-control" placeholder="Masukkan Email Aktif" minlength="6" style="width: 100%" required>
                </div>

                <div class="col-md-6">
                  <label>Nomor Telepon</label>
                  <input type="text" id="edt_no_hp" name="edt_no_hp" class="form-control" placeholder="Nomor Aktif" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" >
                </div>

                <div class="col-md-6">
                  <label>Nomor Telepon Orang Tua</label>
                  <input type="text" id="edt_no_hp_ortu" name="edt_no_hp_ortu" class="form-control" placeholder="Nomor Aktif" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" >
                </div>

                <div class="col-md-12">
                  <label>Alamat Rumah</label>
                  <input type="text" id="edt_alamat_rumah" name="edt_alamat_rumah" class="form-control" placeholder="Masukkan alamat Rumah" minlength="6" style="width: 100%" required>
                </div>

                <div class="col-md-12">
                  <label>Asal Sekolah</label>
                  <input type="text" id="edt_asal_sekolah" name="edt_asal_sekolah" class="form-control" placeholder="Masukkan Asal Sekolah" minlength="6" style="width: 100%" required>
                </div>

                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="edt_jenis_kelamin" id="edt_jenis_kelamin" required>
                    <option disabled selected hidden value="">Pilih</option>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label>Tinggi Badan</label>
                  <input type="text" id="edt_tinggi_badan" name="edt_tinggi_badan" class="form-control" placeholder="Satuan cm" maxlength="6" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" required readonly>
                </div>

                <div class="col-md-4">
                  <label>Berat Badan </label>
                  <input type="text" id="edt_berat_badan" name="edt_berat_badan" class="form-control" placeholder="Satuan kg" maxlength="6" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" required readonly>
                </div>

                <div class="col-md-12">
                  <label>Riwayat Penyakit</label>
                  <input type="text" id="edt_riwayat_penyakit" name="edt_riwayat_penyakit" class="form-control" placeholder="Pisahkan dengan tanda koma jika lebih dari 1" style="width: 100%">
                </div>

                <div class="col-md-6">
                  <label>Level Akun</label>
                  <select class="form-control" name="edt_level_akun" id="edt_level_akun" required>
                    <option disabled selected hidden value="">Pilih</option>
                    <option value="admin">Admin PERBASASI</option>
                    <option value="penyeleksi">Penyeleksi</option>
                    <option value="anggota">Anggota</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label>Status Akun</label>
                  <select class="form-control" name="edt_status_akun" id="edt_status_akun" required>
                    <option disabled selected hidden value="">Pilih</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  </select>
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
<!-- FORM UPDATE USER -->

<!-- FORM DELETE USER -->
  <form id="formDeleteUser">
    <div class="modal fade" id="modalDeleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus Akun</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                 
          </div>
          <div class="modal-body">                    
            <div class="form-group col-lg-12">
              <label>Apa Anda Yakin Ingin Meng<font style="color: red;"><b>Hapus</b></font> Akun ini?</label>
              <br />
              <H4 id="msg"></H4>
              <input type="hidden" name="id_del" id="id_del" class="form-control">

            </div>
          </div>
          <div class="modal-footer">
            <center>
              <button type="button" class="btn btn-secondary " data-dismiss="modal" >Cancel</button>
              <button type="submit" class="btn btn-danger" id="btn_delete" >Hapus</button> 
            </center>

          </div>
        </div>
      </div>
    </div>
  </form>
<!-- FORM DELETE USER -->

<!-- FORM REGIS PENYELEKSI -->
  <form id="formRegis">
    <div class="modal fade" id="Modal_Regis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Daftar Akun Penyeleksi Baru</h4>
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
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                      <option disabled selected hidden value="">Pilih</option>
                      <option value="Laki-laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>

                  <div class="col-md-12">
                    <label>Alamat Rumah</label>
                    <input type="text" id="alamat_rumah" name="alamat_rumah" class="form-control" placeholder="Masukkan alamat Rumah" minlength="6" style="width: 100%" required>
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
<!-- FORM REGIS PENYELEKSI -->
