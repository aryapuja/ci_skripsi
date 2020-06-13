<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Seleksi yang Sedang Berjalan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">

                <table id="listSeleksi" class="table table-responsive table-bordered table-hover" >
                  <thead style="width: 100%">
                  <tr style="width: 100%">
                    <th class="th-lg no-sort"> No </th>
                    <th class="th-lg"> Nama Seleksi </th>
                    <th class="th-lg"> Jenis Olahraga </th>
                    <th class="th-lg"> Batas Umur (Maksimal)</th>
                    <th class="th-lg"> Tanggal Seleksi </th>
                    <th class="th-lg"> Tanggal Mulai Kejuaraan </th>
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


<!-- FORM REGIS SELEKSI -->
  <form id="formDaftarSeleksi">
    <div class="modal fade" id="modalDaftarSeleksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Formulir Pendaftaran Keikutsertaan Seleksi</h4>
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">

            <div class="container-fluid">
              <div class="row">
                <div class="form-group col-lg-12">
                  <div class="row">

                  <div class="col-md-12">
                    <label>Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" style="width: 100%" value="<?php echo $this->session->nama_lengkap ?>" required readonly>
                  </div>

                  <div class="col-md-12">
                    <label>Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" style="width: 100%" value="<?php echo $this->session->tgl_lahir ?>" required readonly>
                  </div>

                  <div class="col-md-12">
                    <label>Riwayat Penyakit</label>
                    <input type="text" id="riwayat_penyakit" name="riwayat_penyakit" class="form-control" style="width: 100%" value="<?php echo $this->session->riwayat_penyakit ?>" readonly>
                  </div>

                  <div class="col-md-6">
                    <label>Nama Seleksi</label>
                    <input type="text" id="nama_seleksi" name="nama_seleksi" class="form-control" placeholder="Masukkan Nama Seleksi" style="width: 100%" required readonly>
                  </div>

                  <div class="col-md-6">
                    <label>Jenis Olahraga</label>
                    <input type="text" id="jenis_olahraga" name="jenis_olahraga" class="form-control" placeholder="Masukkan Nama Seleksi" style="width: 100%" required readonly>
                  </div>
                
                </div>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <input type="hidden" id="id_akun" name="id_akun" value="<?php echo $this->session->id_akun ?>">
            <input type="hidden" id="id_seleksi" name="id_seleksi" value="">
            <input type="hidden" id="batas_umur" name="batas_umur" value="">
            <input type="hidden" id="jenis_kelamin" name="jenis_kelamin" value="">
            <input type="hidden" id="tgl_kejuaraan" name="tgl_kejuaraan" value="">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Daftar</button>
          </div>
          
        </div>
        
      </div>
      
    </div>
  </form>
<!-- FORM REGIS SELEKSI -->
