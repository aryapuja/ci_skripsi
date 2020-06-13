<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
          
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><center>Tes Pukul</center></h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="table-responsive">
                    <table id="listNilaiKonversiPukul" class="table table-bordered table-hover" cellspacing="0" width="100%">
                      <thead>
                      <tr>
                        <th class="th-lg no-sort"> No </th>
                        <th class="th-lg"> Nilai Konversi </th>
                        <th class="th-lg"> Nilai Batas Bawah </th>
                        <th class="th-lg"> Nilai Batas Atas </th>
                        <th class="th-lg"> Aksi </th>
                      </tr>
                      </thead>
                      <tbody id="showNilaiKonversiPukul">
                      
                      </tbody>
                      <tfoot>
                      <tr>
                        <th> No </th>
                        <th> Nilai Konversi </th>
                        <th> Nilai Batas Bawah </th>
                        <th> Nilai Batas Atas </th>
                        <th> Aksi </th>
                      </tr>
                      </tfoot>
                    </table>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tes Tangkap</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="listNilaiKonversiTangkap" class="table table-bordered table-hover table-responsive" cellspacing="0" width="100%">
                      <thead>
                      <tr>
                        <th class="th-lg no-sort"> No </th>
                        <th class="th-lg"> Nilai Konversi </th>
                        <th class="th-lg"> Nilai Batas Bawah </th>
                        <th class="th-lg"> Nilai Batas Atas </th>
                        <th class="th-lg"> Aksi </th>
                      </tr>
                      </thead>
                      <tbody id="showNilaiKonversiTangkap">
                      
                      </tbody>
                      <tfoot>
                      <tr>
                        <th> No </th>
                        <th> Nilai Konversi </th>
                        <th> Nilai Batas Bawah </th>
                        <th> Nilai Batas Atas </th>
                        <th> Aksi </th>
                      </tr>
                      </tfoot>
                  </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tes Lempar</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="listNilaiKonversiLempar" class="table table-bordered table-hover table-responsive" cellspacing="0" width="100%">
                      <thead>
                      <tr>
                        <th class="th-lg no-sort"> No </th>
                        <th class="th-lg"> Nilai Konversi </th>
                        <th class="th-lg"> Nilai Batas Bawah </th>
                        <th class="th-lg"> Nilai Batas Atas </th>
                        <th class="th-lg"> Aksi </th>
                      </tr>
                      </thead>
                      <tbody id="showNilaiKonversiLempar">
                      
                      </tbody>
                      <tfoot>
                      <tr>
                        <th> No </th>
                        <th> Nilai Konversi </th>
                        <th> Nilai Batas Bawah </th>
                        <th> Nilai Batas Atas </th>
                        <th> Aksi </th>
                      </tr>
                      </tfoot>
                  </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tes Lari</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="listNilaiKonversiLari" class="table table-bordered table-hover table-responsive" cellspacing="0" width="100%">
                      <thead>
                      <tr>
                        <th class="th-lg no-sort"> No </th>
                        <th class="th-lg"> Nilai Konversi </th>
                        <th class="th-lg"> Nilai Batas Bawah </th>
                        <th class="th-lg"> Nilai Batas Atas </th>
                        <th class="th-lg"> Aksi </th>
                      </tr>
                      </thead>
                      <tbody id="showNilaiKonversiLari">
                      
                      </tbody>
                      <tfoot>
                      <tr>
                        <th> No </th>
                        <th> Nilai Konversi </th>
                        <th> Nilai Batas Bawah </th>
                        <th> Nilai Batas Atas </th>
                        <th> Aksi </th>
                      </tr>
                      </tfoot>
                  </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
            
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

<!-- FORM UPDATE BOBOT -->
  <form id="formEditKonversi">
    <div class="modal fade" id="modalEditKonversi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="max-width: 50%">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Update Informasi Nilai Konversi</h4>
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="form-group col-lg-12">
                  <div class="row">

                  <div class="col-md-6">
                    <label>Jenis Tes</label>
                    <input type="text" id="edt_jenis_tes" name="edt_jenis_tes" class="form-control" style="width: 100%" required readonly>
                  </div>

                  <div class="col-md-6">
                    <label>Nilai Konversi</label>
                    <input type="text" id="edt_nama_konversi" name="edt_nama_konversi" class="form-control"  minlength="6" style="width: 100%" required readonly>
                  </div>

                  <div class="col-md-6">
                    <label>Nilai Batas Bawah</label>
                    <input type="text" id="edt_bts_bawah" name="edt_bts_bawah" class="form-control" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" >
                  </div>

                  <div class="col-md-6">
                    <label>Nilai Batas Atas</label>
                    <input type="text" id="edt_bts_atas" name="edt_bts_atas" class="form-control" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" >
                  </div>
                
                </div>
                </div>
              </div>
              
            </div>      
          </div>
          <div class="modal-footer">
            <input type="hidden" id="edt_id_konversi" name="edt_id_konversi" value="">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<!-- FORM UPDATE BOBOT -->
