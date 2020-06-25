<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Hasil Seleksi <?php echo $info[0]->nama_seleksi ?></h2>
                <a href="<?php echo site_url()?>/C_admin/downloadHasilSeleksi/<?php echo $info[0]->id_seleksi; ?>"> <button type="button" class="btn btn-primary btn-sm float-right">Download Hasil Seleksi</button> </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  
                <table id="hasilSeleksi" class="table table-bordered table-hover" >
                  <thead style="width: 100%">
                  <tr style="width: 100%">
                    <th class="th-lg no-sort"> Peringkat </th>
                    <th class="th-lg"> Nama Peserta </th>
                    <th class="th-lg"> Status Seleksi</th>
                    <th class="th-lg"> Nilai Q</th>
                    <th class="th-lg"> Nilai DQ</th>
                    <th class="th-lg"> Keterangan Perhitungan VIKOR</th>
                  </tr>
                  </thead>
                  <tbody id="showHasilSeleksi">
                    <?php 
                    $QA1  = $hasil[0]->nilai_q2;
                    $DQ   = 1/($jmlPeserta-1);
                    foreach ($hasil as $key => $value): ?>
                    <tr style="width: 100%">
                      <td><?php echo $key+1 ?></td>
                      <td><?php echo $value->nama_peserta ?></td>

                      <?php if($key+1 > 15){ ?>
                        <td><?php echo "Tidak Lulus" ?></td>
                      <?php }else{ ?>
                        <td><?php echo $value->status ?></td>
                      <?php }; ?>

                      <td><?php echo $value->nilai_q2 ?></td>
                      <td><?php echo $DQ ?></td>

                      <?php if ($key == 0) { ?>
                        <td> <?php echo '-'; ?></td> 
                      <?php }else if(($value->nilai_q2 - $QA1) >= 0){ ?>
                        <td> <?php echo 'Kondisi Acceptable Advantage Terpenuhi'; ?></td> 
                      <?php }else{ ?>
                        <td> <?php echo 'Kondisi Acceptable Advantage Tidak Terpenuhi, Dan Peserta Selanjutnya bisa direkomendasikan sebagai solusi kompromi'; ?></td> 
                      <?php } ?> 
                      
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> Peringkat </th>
                    <th> Nama Peserta </th>
                    <th> Status </th>
                    <th> Nilai Q </th>
                    <th> Nilai DQ </th>
                    <th> Keterangan Perhitungan VIKOR</th>

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