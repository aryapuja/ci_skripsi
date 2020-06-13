<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Seleksi PERBASASI Kota Malang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="hasilSeleksi" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="th-lg no-sort"> No </th>
                    <th class="th-lg"> Nama Seleksi </th>
                    <th class="th-lg"> Jenis Olahraga </th>
                    <th class="th-lg"> Tanggal Seleksi </th>
                    <th class="th-lg"> Status Seleksi </th>
                    <th class="th-lg"> Hasil Seleksi </th>
                  </tr>
                  </thead>
                  <tbody id="showHasilSeleksi">
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> No </th>
                    <th> Nama Seleksi </th>
                    <th> Jenis Olahraga </th>
                    <th> Tanggal Seleksi </th>
                    <th> Status Seleksi </th>
                    <th> Hasil Seleksi </th>
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

<!-- FORM UPDATE SELEKSI -->
  <form id="formLihatHasil">
    <div class="modal fade" id="modalLihatHasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hasil Seleksi</h4>
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">

            <div class="container-fluid">
              <div class="row">
                <div class="form-group col-lg-12">
                  <div class="row">

                  <div class="col-md-6">
                    <label>Nama Seleksi</label>
                    <input type="text" id="edt_nama_seleksi" name="edt_nama_seleksi" class="form-control" placeholder="Masukkan Nama Seleksi" style="width: 100%" required readonly="">
                  </div>

                  <div class="col-md-6">
                    <label>Jenis Olahraga</label>
                    <input type="text" id="edt_jenis_olahraga" name="edt_jenis_olahraga" class="form-control" placeholder="Masukkan Nama Seleksi" style="width: 100%" required readonly="">
                  </div>

                  <div class="col-md-6">
                      <label>Tanggal Seleksi</label>
                      <input type="date" id="edt_tgl_seleksi" name="edt_tgl_seleksi" class="form-control" placeholder="Masukkan Tanggal Seleksi" style="width: 100%" required readonly>
                  </div>

                  <div class="col-md-6">
                      <label>Status Seleksi</label>
                      <input type="text" id="edt_status_seleksi" name="edt_status_seleksi" class="form-control" placeholder="Masukkan Tanggal Seleksi" style="width: 100%" required readonly>
                  </div>

                  <div class="col-md-12">
                    <label>Jenis Tes</label>
                    <select class="form-control" name="edt_jenis_tes" id="edt_jenis_tes" style="width: 100%" required>
                      <option selected value="0">Seluruh Tes</option>
                      <option value="1">Tes Pukul</option>
                      <option value="2">Tes Tangkap</option>
                      <option value="3">Tes Lempar</option>
                      <option value="4">Tes Lari</option>
                    </select>
                  </div>
                
                </div>
                </div>
              </div>
              
            </div>      
          </div>
          <div class="modal-footer">
            <input type="hidden" id="edt_id_seleksi" name="edt_id_seleksi" value="">
            <input type="hidden" id="edt_batas_umur" name="edt_batas_umur" value="">
            <input type="hidden" id="edt_jenis_kelamin" name="edt_jenis_kelamin">
            <input type="hidden" id="edt_tgl_kejuaraan" name="edt_tgl_kejuaraan">
            <input type="hidden" id="jml_set_pukul" name="jml_set_pukul">
            <input type="hidden" id="jml_set_tangkap" name="jml_set_tangkap">
            <input type="hidden" id="jml_set_lempar" name="jml_set_lempar">
            <input type="hidden" id="jml_rep_lari" name="jml_rep_lari">
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

<!-- FORM LIHAT SELEKSI
  <form id="formLihatHasilSeleksi">
    <div class="modal fade" id="modalLihatHasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hasil Seleksi</h4>
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">

            <div class="container-fluid">
              <div class="row">
                <div class="form-group col-lg-12">
                  <div class="row">

                  <div class="col-md-6">
                    <label>Nama Seleksi</label>
                    <input type="text" id="edt_nama_seleksi" name="edt_nama_seleksi" class="form-control" placeholder="Masukkan Nama Seleksi" style="width: 100%" required>
                  </div>

                  <div class="col-md-6">
                    <label>Jenis Olahraga</label>
                    <input type="text" id="edt_jenis_olahraga" name="edt_jenis_olahraga" class="form-control" placeholder="Masukkan Nama Seleksi" style="width: 100%" required readonly="">
                  </div>

                  <div class="col-md-6">
                      <label>Tanggal Seleksi</label>
                      <input type="date" id="edt_tgl_seleksi" name="edt_tgl_seleksi" class="form-control" placeholder="Masukkan Tanggal Seleksi" style="width: 100%" required readonly>
                  </div>

                  <div class="col-md-4">
                    <label>Jenis Tes</label>
                    <select class="form-control" name="edt_jenis_tes" id="edt_jenis_tes" required>
                      <option selected value="0">Seluruh Tes</option>
                      <option value="1">Tes Pukul</option>
                      <option value="2">Tes Tangkap</option>
                      <option value="3">Tes Lempar</option>
                      <option value="4">Tes Lari</option>
                    </select>
                  </div>

                  </div>
                </div>
              </div>
              
            </div>      
          </div>
          <div class="modal-footer">
            <input type="hidden" id="edt_id_seleksi" name="edt_id_seleksi" value="">
            <input type="text" id="edt_jenis_kelamin" name="edt_jenis_kelamin">
            <input type="text" id="jml_set_pukul" name="jml_set_pukul">
            <input type="text" id="jml_set_tangkap" name="jml_set_tangkap">
            <input type="text" id="jml_set_lempar" name="jml_set_lempar">
            <input type="text" id="jml_rep_lari" name="jml_rep_lari">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </form>
FORM LIHAT SELEKSI -->