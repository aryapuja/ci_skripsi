<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">List Akun Terdaftar</h3> -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modalCreateSeleksi">Tambah Jadwal Seleksi</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="listSeleksi" class="table table-bordered table-hover table-responsive">
                  <thead>
                  <tr>
                    <th class="th-lg no-sort"> No </th>
                    <th class="th-lg"> Nama Seleksi </th>
                    <th class="th-lg"> Jenis Olahraga </th>
                    <th class="th-lg"> Batas Umur (Maksimal)</th>
                    <th class="th-lg"> Tanggal Seleksi </th>
                    <th class="th-lg"> Tanggal Mulai Kejuaraan </th>
                    <th class="th-lg"> Status Seleksi </th>
                    <th class="th-lg"> Aksi </th>
                  </tr>
                  </thead>
                  <tbody id="showListSeleksi">
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> No </th>
                    <th> Nama Seleksi </th>
                    <th> Jenis Olahraga </th>
                    <th> Batas Umur (Maksimal)</th>
                    <th> Tanggal Seleksi </th>
                    <th> Tanggal Mulai Kejuaraan </th>
                    <th> Status Seleksi </th>
                    <th> Aksi </th>
                  </tr>
                  </tfoot>
              </table>
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

<!-- FORM UPDATE SELEKSI -->
  <form id="formEditSeleksi">
    <div class="modal fade" id="modalEditSeleksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Update Informasi Seleksi</h4>
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">

            <div class="container-fluid">
              <div class="row">
                <div class="form-group col-lg-12">
                  <div class="row">

                  <div class="col-md-12">
                    <label>Nama Seleksi</label>
                    <input type="text" id="edt_nama_seleksi" name="edt_nama_seleksi" class="form-control" placeholder="Masukkan Nama Seleksi" style="width: 100%" required>
                  </div>

                  <div class="col-md-4">
                    <label>Jenis Olahraga</label>
                    <select class="form-control" name="edt_jenis_olahraga" id="edt_jenis_olahraga" required>
                      <option disabled selected hidden value="">Pilih</option>
                      <option value="Baseball">Baseball</option>
                      <option value="Softball">Softball</option>
                    </select>
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
                    <label>Batas Umur</label>
                    <input type="text" id="edt_batas_umur" name="edt_batas_umur" class="form-control" placeholder="Masukkan Batas Umur" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" >
                  </div>

                  <div class="col-md-6">
                      <label>Tanggal Seleksi</label>
                      <input type="date" id="edt_tgl_seleksi" name="edt_tgl_seleksi" class="form-control" placeholder="Masukkan Tanggal Seleksi" style="width: 100%" required>
                    </div>

                  <div class="col-md-6">
                      <label>Tanggal Kejuaraan</label>
                      <input type="date" id="edt_tgl_kejuaraan" name="edt_tgl_kejuaraan" class="form-control" placeholder="Masukkan Tanggal Kejuaraan" style="width: 100%" required>
                    </div>

                  <div class="col-md-6">
                    <label>Status Seleksi</label>
                    <select class="form-control" name="edt_status_seleksi" id="edt_status_seleksi" required readonly>
                      <option disabled selected hidden value="">Pilih</option>
                      <option value="Selesai">Selesai</option>
                      <option value="Belum Selesai">Belum Selesai</option>
                    </select>
                  </div>
                
                </div>
                </div>
              </div>
              
            </div>      
          </div>
          <div class="modal-footer">
            <input type="hidden" id="edt_id_seleksi" name="edt_id_seleksi" value="">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<!-- FORM UPDATE SELEKSI -->

<!-- FORM DELETE SELEKSI -->
  <form id="formDeleteSeleksi">
    <div class="modal fade" id="modalDeleteSeleksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus Seleksi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                 
          </div>
          <div class="modal-body">                    
            <div class="form-group col-lg-12">
              <label>Apa Anda Yakin Ingin Meng<font style="color: red;"><b>Hapus</b></font> Jadwal Seleksi ini?</label>
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
<!-- FORM DELETE SELEKSI -->

<!-- FORM REGIS SELEKSI -->
  <form id="formCreateSeleksi">
    <div class="modal fade" id="modalCreateSeleksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Jadwal Seleksi Baru</h4>
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">

            <div class="container-fluid">
              <div class="row">
                <div class="form-group col-lg-12">
                  <div class="row">

                  <div class="col-md-12">
                    <label>Nama Seleksi</label>
                    <input type="text" id="nama_seleksi" name="nama_seleksi" class="form-control" placeholder="Masukkan Nama Seleksi" style="width: 100%" required>
                  </div>

                  <div class="col-md-4">
                    <label>Jenis Olahraga</label>
                    <select class="form-control" name="jenis_olahraga" id="jenis_olahraga" required>
                      <option disabled selected hidden value="">Pilih</option>
                      <option value="Baseball">Baseball</option>
                      <option value="Softball">Softball</option>
                    </select>
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
                    <label>Batas Umur</label>
                    <input type="text" id="batas_umur" name="batas_umur" class="form-control" placeholder="Masukkan Batas Umur" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" >
                  </div>

                  <div class="col-md-6">
                      <label>Tanggal Seleksi</label>
                      <input type="date" id="tgl_seleksi" name="tgl_seleksi" class="form-control" placeholder="Masukkan Tanggal Seleksi" style="width: 100%" required>
                    </div>

                  <div class="col-md-6">
                      <label>Tanggal Kejuaraan</label>
                      <input type="date" id="tgl_kejuaraan" name="tgl_kejuaraan" class="form-control" placeholder="Masukkan Tanggal Kejuaraan" style="width: 100%" required>
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
<!-- FORM REGIS SELEKSI -->
