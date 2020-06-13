<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
          
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><center>Pengaturan Nilai Standar</center></h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="table-responsive">
                    <table id="listNilaiStandar" class="table table-bordered table-hover" cellspacing="0" width="100%">
                      <thead>
                      <tr>
                        <th class="th-lg no-sort"> No </th>
                        <th class="th-lg"> Jenis Tes </th>
                        <th class="th-lg"> Nilai Standar </th>
                        <th class="th-lg"> Aksi </th>
                      </tr>
                      </thead>
                      <tbody id="showListNilaiStandar">
                      
                      </tbody>
                      <tfoot>
                      <tr>
                        <th> No </th>
                        <th> Jenis Tes </th>
                        <th> Nilai Standar </th>
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
  <form id="formEditStandar">
    <div class="modal fade" id="modalEditStandar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <label>Nilai Standar</label>
                    <input type="number" id="edt_nilai_standar" name="edt_nilai_standar" min="0" max="5" class="form-control"  style="width: 100%" required>
                  </div>
                
                </div>
                </div>
              </div>
              
            </div>      
          </div>
          <div class="modal-footer">
            <input type="hidden" id="edt_id_nilai_std" name="edt_id_nilai_std" value="">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<!-- FORM UPDATE BOBOT -->
