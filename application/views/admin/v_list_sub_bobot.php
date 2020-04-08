<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
          
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><center>Tes Pukul</center></h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="listBobotPukul" class="table table-bordered table-hover table-responsive" cellspacing="0" width="100%">
                      <thead>
                      <tr>
                        <th class="th-lg no-sort"> No </th>
                        <th class="th-lg"> Jenis Tes </th>
                        <th class="th-lg"> Bobot Tes </th>
                        <th class="th-lg"> Aksi </th>
                      </tr>
                      </thead>
                      <tbody id="showListBobotPukul">
                      
                      </tbody>
                      <tfoot>
                      <tr>
                        <th> No </th>
                        <th> Jenis Tes </th>
                        <th> Bobot Tes </th>
                        <th> Aksi </th>
                      </tr>
                      </tfoot>
                  </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>

              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tes Tangkap</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="listBobotTangkap" class="table table-bordered table-hover table-responsive" cellspacing="0" width="100%">
                      <thead>
                      <tr>
                        <th class="th-lg no-sort"> No </th>
                        <th class="th-lg"> Jenis Tes </th>
                        <th class="th-lg"> Bobot Tes </th>
                        <th class="th-lg"> Aksi </th>
                      </tr>
                      </thead>
                      <tbody id="showListBobotTangkap">
                      
                      </tbody>
                      <tfoot>
                      <tr>
                        <th> No </th>
                        <th> Jenis Tes </th>
                        <th> Bobot Tes </th>
                        <th> Aksi </th>
                      </tr>
                      </tfoot>
                  </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>

              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tes Lempar</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="listBobotLempar" class="table table-bordered table-hover table-responsive" cellspacing="0" width="100%">
                      <thead>
                      <tr>
                        <th class="th-lg no-sort"> No </th>
                        <th class="th-lg"> Jenis Tes </th>
                        <th class="th-lg"> Bobot Tes </th>
                        <th class="th-lg"> Aksi </th>
                      </tr>
                      </thead>
                      <tbody id="showListBobotLempar">
                      
                      </tbody>
                      <tfoot>
                      <tr>
                        <th> No </th>
                        <th> Jenis Tes </th>
                        <th> Bobot Tes </th>
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
  <form id="formEditSubBobot">
    <div class="modal fade" id="modalEditSubBobot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="max-width: 50%">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Update Informasi Nilai Bobot Tes</h4>
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="form-group col-lg-12">
                  <div class="row">

                  <div class="col-md-4">
                    <label>Jenis Tes</label>
                    <input type="text" id="edt_jenis_tes" name="edt_jenis_tes" class="form-control" placeholder="Masukkan 6-12 Karakter" minlength="6" maxlength="12" style="width: 100%" required readonly>
                  </div>

                  <div class="col-md-4">
                    <label>Jenis Sub Tes</label>
                    <input type="text" id="edt_jenis_sub_tes" name="edt_jenis_sub_tes" class="form-control" placeholder="Masukkan 6-12 Karakter" minlength="6" maxlength="12" style="width: 100%" required readonly>
                  </div>

                  <div class="col-md-4">
                    <label>Nilai Bobot</label>
                    <input type="text" id="edt_nilai_bobot_sub_tes" name="edt_nilai_bobot_sub_tes" class="form-control" placeholder="Nomor Aktif" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" >
                  </div>
                
                </div>
                </div>
              </div>
              
            </div>      
          </div>
          <div class="modal-footer">
            <input type="hidden" id="edt_id_bobot_tes" name="edt_id_bobot_tes" value="">
            <input type="hidden" id="edt_id_bobot_sub_tes" name="edt_id_bobot_sub_tes" value="">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<!-- FORM UPDATE BOBOT -->
