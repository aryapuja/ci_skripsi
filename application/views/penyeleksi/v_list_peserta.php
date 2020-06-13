<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Peserta Seleksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  
                <table id="listPeserta" class="table table-bordered table-hover" >
                  <thead style="width: 100%">
                  <tr style="width: 100%">
                    <th class="th-lg no-sort"> No </th>
                    <th class="th-lg"> Nama Peserta </th>
                    <th class="th-lg"> Input Nilai </th>
                    <th class="th-lg"> Lihat Nilai</th>
                  </tr>
                  </thead>
                  <tbody id="showListPeserta">
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> No </th>
                    <th> Nama Peserta </th>
                    <th> Input Nilai </th>
                    <th> Lihat Nilai</th>
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

<!-- FORM INPUT Nilai TES -->
  <form id="formInputNilai">
    <div class="modal fade" id="modalInputNilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Formulir Input Nilai Tes</h4>
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">

            <div class="container-fluid">
              <div class="row">
                <div class="form-group col-lg-12">
                  <div class="row">

                  <div class="col-md-12">
                    <label>Nama Lengkap</label>
                    <input type="text" id="nama_peserta" name="nama_peserta" class="form-control" placeholder="Masukkan Nama Lengkap" style="width: 100%"  required readonly>
                  </div>

                  <div class="col-md-6">
                    <label>Jenis Tes</label>
                    <select class="form-control slct_jenis_tes" name="id_tes" id="id_tes" required onchange="jenisTes($(this).val(),this)">
                      <option disabled selected hidden value="">Pilih</option>
                      <?php foreach ($jenisTes as $key) { ?>
                        <option value="<?php echo $key->id_bobot_tes ?>"> <?php  echo $key->jenis_tes ?> </option>
                      <?php }  ?>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label>Jenis Sub Tes</label>
                    <select class="form-control slct_jenis_sub_tes" name="id_sub_tes" id="id_sub_tes" required disabled>
                      <option selected hidden class="sub_hide">Pilih</option>
                      <?php foreach ($jenisSubTes as $key) { ?>
                        <option value="<?php echo $key->id_bobot_sub_tes ?>" class="sub-tes-<?php echo $key->id_bobot_tes ?>"> <?php echo $key->jenis_sub_tes ?> </option>
                      <?php }  ?>

                    </select>
                  </div>

                   <div class="col-md-6">
                    <label>Set Ke</label>
                    <select class="form-control" name="set_ke" id="set_ke" required disabled>
                      <option selected hidden >Pilih</option>

                    </select>
                  </div>

                  <div class="col-md-6">
                    <label>Nilai</label>
                    <input type="number" id="nilai_asli" name="nilai_asli" class="form-control" placeholder="Masukkan Nilai Tes" min="0" step="any" style="width: 100%" required>
                  </div>
                
                </div>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <input type="hidden" id="id_akun" name="id_akun">
            <input type="hidden" id="id_seleksi" name="id_seleksi" value="">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Daftar</button>
          </div>
          
        </div>
        
      </div>
      
    </div>
  </form>
<!-- FORM INPUT Nilai TES -->

<!-- FORM LIHAT NILAI -->
  <form id="formCekNilai">
    <div class="modal fade" id="modalCekNilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Formulir Input Nilai Tes</h4>
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">

            <div class="container-fluid">
              <div class="row">
                <div class="form-group col-lg-12">
                  <div class="row">
                     <div class="table-responsive">
                      <table id="listNilai" class="table table-bordered table-hover" >
                        <thead style="width: 100%">
                        <tr style="width: 100%">
                          <th class="th-lg no-sort"> No </th>
                          <th class="th-lg"> Jenis Tes </th>
                          <th class="th-lg"> Nilai Tes </th>
                        </tr>
                        </thead>
                        <tbody id="showlistNilai">
                        
                        </tbody>
                        <tfoot>
                        <tr>
                          <th> No </th>
                          <th> Jenis Tes </th>
                          <th> Nilai Tes </th>
                        </tr>
                        </tfoot>
                      </table>
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
<!-- FORM LIHAT NILAI -->


<script type="text/javascript">
  function jenisTes(value,target) {
    let jenisTes = value;

    $(target).parents('.row').find('.slct_jenis_sub_tes').find('option').not('.sub_hide').hide();
    $(target).parents('.row').find('.slct_jenis_sub_tes').val('0');
    $(target).parents('.row').find('.slct_jenis_sub_tes').find('.sub-tes-'+jenisTes).show();
    document.getElementById('id_sub_tes').removeAttribute('disabled');
    document.getElementById('set_ke').removeAttribute('disabled');

    $.ajax({
        type  : 'POST',
        url   : '<?php echo base_url()?>index.php/C_penyeleksi/getJumlahSet',
        data  :{jenisTes,jenisTes},
        dataType : 'json',
    }).done(function(data){
      $("#set_ke").html("");
      var html = ""; var i = 0;
      
      if(jenisTes==1){
        for(i=1;i<=data[0].jml_set_pukul;i++){
          html+='<option value='+i+'>'+i+'</option>';
        }  
      }else if(jenisTes==2){
        for(i=1;i<=data[0].jml_set_tangkap;i++){
          html+='<option value='+i+'>'+i+'</option>';
        }
      }else if(jenisTes==3){
        for(i=1;i<=data[0].jml_set_lempar;i++){
          html+='<option value='+i+'>'+i+'</option>';
        }
      }else if(jenisTes==4){
        for(i=1;i<=data[0].jml_rep_lari;i++){
          html+='<option value='+i+'>'+i+'</option>';
        }
      }
      
      $("#set_ke").html(html);
    })
  }
</script>
