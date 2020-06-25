    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $aktif+$idle+$nonaktif; ?> Akun</h3>

                <p>Terdaftar</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $aktif; ?> Akun</h3>

                <p>Berstatus Aktif</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $idle; ?> Akun</h3>

                <p>Menunggu Konfirmasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $nonaktif; ?> Akun</h3>

                <p>Berstatus Nonaktif</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- List Seleksi Yang Sedang Berjalan -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Seleksi Yang Sedang Berjalan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table id="listSeleksiBerjalan" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th class="th-lg no-sort"> No </th>
                        <th class="th-lg"> Nama Seleksi </th>
                        <th class="th-lg"> Jenis Olahraga </th>
                        <th class="th-lg"> Batas Umur (Maksimal)</th>
                        <th class="th-lg"> Tanggal Seleksi </th>
                        <th class="th-lg"> Tanggal Kejuaraan </th>
                      </tr>
                      </thead>
                      <tbody id="showListSeleksiBerjalan">
                      
                      </tbody>
                      <tfoot>
                      <tr>
                        <th> No </th>
                        <th> Nama Seleksi </th>
                        <th> Jenis Olahraga </th>
                        <th> Batas Umur (Maksimal)</th>
                        <th> Tanggal Seleksi </th>
                        <th> Tanggal Kejuaraan </th>
                      </tr>
                      </tfoot>
                    </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.3-pre
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->