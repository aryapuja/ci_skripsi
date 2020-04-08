<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">List Akun Terdaftar</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="listBobot" class="table table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                  <tr>
                    <th class="th-lg no-sort"> No </th>
                    <th class="th-lg"> Jenis Tes </th>
                    <th class="th-lg"> Bobot Tes </th>
                    <th class="th-lg"> Aksi </th>
                  </tr>
                  </thead>
                  <tbody id="showListBobot">
                  
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
  <form id="formEditBobot">
    <div class="modal fade" id="modalEditBobot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                  <div class="col-md-6">
                    <label>Jenis Tes</label>
                    <input type="text" id="edt_jenis_tes" name="edt_jenis_tes" class="form-control" placeholder="Masukkan 6-12 Karakter" minlength="6" maxlength="12" style="width: 100%" required readonly>
                  </div>

                  <div class="col-md-6">
                    <label>Nilai Bobot</label>
                    <input type="text" id="edt_nilai_bobot_tes" name="edt_nilai_bobot_tes" class="form-control" placeholder="Nomor Aktif" style="width: 100%" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39" >
                  </div>
                
                </div>
                </div>
              </div>
              
            </div>      
          </div>
          <div class="modal-footer">
            <input type="hidden" id="edt_id_bobot_tes" name="edt_id_bobot_tes" value="">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<!-- FORM UPDATE BOBOT -->
