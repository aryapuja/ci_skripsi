
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<style type="text/css">
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  th, td{
     padding: 5px;
  }
</style>
<body>
  <!-- Tabel Rangking -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="card">
          <div class="card-header">
            <center><h3 class="card-title">Hasil Seleksi: <?php echo $info[0]->nama_seleksi; ?></h3></center>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              
            <table id="hasilSeleksi" style="width: 100%" >
              <thead style="width: 100%">
              <tr style="width: 100%">
                <th class="th-lg no-sort"> Peringkat </th>
                <th class="th-lg"> Nama Peserta </th>
                <th class="th-lg"> Riwayat Penyakit </th>
                <th class="th-lg"> Status </th>
                <th class="th-lg"> Keterangan </th>
              </tr>
              </thead>
              <tbody id="showHasilSeleksi">
                <?php foreach ($hasil as $key => $value): ?>
                <tr style="width: 100%">
                  <td> <center><?php echo $key+1 ?></center></td>
                  <td><?php echo $value->nama_peserta ?></td>
                  <td> <?php echo $value->riwayat_penyakit ?></td>
                  <?php if($key+1 > 15){ ?>
                    <td><?php echo "Tidak Lulus" ?></td>
                  <?php }else{ ?>
                    <td><?php echo $value->status ?></td>
                  <?php } ?>

                  <?php if($value->status == "Lulus"){ ?>
                    <td><?php echo "Nilai keseluruhan tes melewati nilai standar" ?></td>
                  <?php }else{ ?>
                    <td><?php echo "Nilai keseluruhan tes tidak melewati nilai standar" ?></td>
                  <?php } ?>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->

  <!-- Tabel Tes Pukul -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="card">
          <div class="card-header">
            <center><h3 class="card-title">Hasil Tes Pukul</h3></center>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              
            <table style="width: 100%" >
              <thead style="width: 100%">
              <tr style="width: 100%">
                <th class="th-lg" rowspan="2"> Peringkat </th>
                <th class="th-lg" rowspan="2"> Nama Peserta </th>
                <th class="th-lg" colspan=" <?php echo $info[0]->jml_set_pukul?> "> Tes Keterampilan </th>
                <th class="th-lg" colspan=" <?php echo $info[0]->jml_set_pukul?> "> Tes Unjuk Kerja </th>
              </tr>
              <tr>
                <?php for ($i=0; $i < $info[0]->jml_set_pukul; $i++) { ?>
                  <td> <center><?php echo $i+1 ?></center></td>
                <?php } ?>
                <?php for ($i=0; $i < $info[0]->jml_set_pukul; $i++) { ?>
                  <td> <center><?php echo $i+1 ?></center></td>
                <?php } ?>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($rankPukul as $key => $rank): ?>
                  <tr>
                  <td><center><?php echo $key+1 ?></center></td>
                  <td><?php echo $rank->nama_peserta ?></td>
                  <?php foreach ($nilai as $key => $n): 
                    for ($i=0; $i < $info[0]->jml_set_pukul; $i++) { 
                    if($rank->id_akun == $n->id_akun AND $n->id_bobot_sub_tes==1 AND $n->set_ke == ($i+1)) { ?>
                    <td><?php echo (int)$n->nilai_asli.' Kali Kena' ?></td>
                    <?php } 
                    }
                  endforeach ?>
                  <?php foreach ($nilai as $key => $n): 
                    for ($i=0; $i < $info[0]->jml_set_pukul; $i++) { 
                    if($rank->id_akun == $n->id_akun AND $n->id_bobot_sub_tes==2 AND $n->set_ke == ($i+1)) { ?>
                    <td><?php echo (int)$n->nilai_asli.' Posisi Benar' ?></td>
                    <?php } 
                    }
                  endforeach ?>
                  </tr>
                  <?php endforeach ?>
            </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>

        
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->

    <!-- Tabel Tes Tangkap -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="card">
          <div class="card-header">
            <center><h3 class="card-title">Hasil Tes Tangkap</h3></center>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              
            <table style="width: 100%" >
              <thead style="width: 100%">
              <tr style="width: 100%">
                <th class="th-lg" rowspan="2"> Peringkat </th>
                <th class="th-lg" rowspan="2"> Nama Peserta </th>
                <th class="th-lg" colspan=" <?php echo $info[0]->jml_set_tangkap?> "> Tes Keterampilan </th>
                <th class="th-lg" colspan=" <?php echo $info[0]->jml_set_tangkap?> "> Tes Unjuk Kerja </th>
              </tr>
              <tr>
                <?php for ($i=0; $i < $info[0]->jml_set_tangkap; $i++) { ?>
                  <td> <center><?php echo $i+1 ?></center></td>
                <?php } ?>
                <?php for ($i=0; $i < $info[0]->jml_set_tangkap; $i++) { ?>
                  <td> <center><?php echo $i+1 ?></center></td>
                <?php } ?>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($rankTangkap as $key => $rank): ?>
                  <tr>
                  <td><center><?php echo $key+1 ?></center></td>
                  <td><?php echo $rank->nama_peserta ?></td>
                  <?php foreach ($nilai as $key => $n): 
                    for ($i=0; $i < $info[0]->jml_set_tangkap; $i++) { 
                    if($rank->id_akun == $n->id_akun AND $n->id_bobot_sub_tes==3 AND $n->set_ke == ($i+1)) { ?>
                    <td><?php echo (int)$n->nilai_asli.' Kali Tangkap' ?></td>
                    <?php } 
                    }
                  endforeach ?>
                  <?php foreach ($nilai as $key => $n): 
                    for ($i=0; $i < $info[0]->jml_set_pukul; $i++) { 
                    if($rank->id_akun == $n->id_akun AND $n->id_bobot_sub_tes==4 AND $n->set_ke == ($i+1)) { ?>
                    <td><?php echo (int)$n->nilai_asli.' Posisi Benar' ?></td>
                    <?php } 
                    }
                  endforeach ?>
                  </tr>
                  <?php endforeach ?>
            </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->

  <!-- Tabel Tes Lempar -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="card">
          <div class="card-header">
            <center><h3 class="card-title">Hasil Tes Lempar</h3></center>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              
            <table style="width: 100%" >
              <thead style="width: 100%">
              <tr style="width: 100%">
                <th class="th-lg" rowspan="2"> Peringkat </th>
                <th class="th-lg" rowspan="2"> Nama Peserta </th>
                <th class="th-lg" colspan=" <?php echo $info[0]->jml_set_lempar?> "> Tes Keterampilan </th>
                <th class="th-lg" colspan=" <?php echo $info[0]->jml_set_lempar?> "> Tes Unjuk Kerja </th>
              </tr>
              <tr>
                <?php for ($i=0; $i < $info[0]->jml_set_lempar; $i++) { ?>
                  <td> <center><?php echo $i+1 ?></center></td>
                <?php } ?>
                <?php for ($i=0; $i < $info[0]->jml_set_lempar; $i++) { ?>
                  <td> <center><?php echo $i+1 ?></center></td>
                <?php } ?>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($rankLempar as $key => $rank): ?>
                  <tr>
                  <td><center><?php echo $key+1 ?></center></td>
                  <td><?php echo $rank->nama_peserta ?></td>
                  <?php foreach ($nilai as $key => $n): 
                    for ($i=0; $i < $info[0]->jml_set_lempar; $i++) { 
                    if($rank->id_akun == $n->id_akun AND $n->id_bobot_sub_tes==5 AND $n->set_ke == ($i+1)) { ?>
                    <td><?php echo (int)$n->nilai_asli.' Meter' ?></td>
                    <?php } 
                    }
                  endforeach ?>
                  <?php foreach ($nilai as $key => $n): 
                    for ($i=0; $i < $info[0]->jml_set_pukul; $i++) { 
                    if($rank->id_akun == $n->id_akun AND $n->id_bobot_sub_tes==6 AND $n->set_ke == ($i+1)) { ?>
                    <td><?php echo (int)$n->nilai_asli.' Posisi Benar' ?></td>
                    <?php } 
                    }
                  endforeach ?>
                  </tr>
                  <?php endforeach ?>
            </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->

    <!-- Tabel Tes Pukul -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="card">
          <div class="card-header">
            <center><h3 class="card-title">Hasil Tes Lari</h3></center>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              
            <table style="width: 100%" >
              <thead style="width: 100%">
              <tr style="width: 100%">
                <th class="th-lg" rowspan="2"> Peringkat </th>
                <th class="th-lg" rowspan="2"> Nama Peserta </th>
                <th class="th-lg" colspan=" <?php echo $info[0]->jml_rep_lari?> "> Tes Kecepatan </th>
                <th class="th-lg" rowspan="2"> Waktu Tercepat </th>
              </tr>
              <tr>
                <?php for ($i=0; $i < $info[0]->jml_rep_lari; $i++) { ?>
                  <td> <center><?php echo $i+1 ?></center></td>
                <?php } ?>
              </tr>
              </thead>
              <tbody>
                <tbody>
                <?php foreach ($rankLari as $key => $rank): ?>
                  <tr>
                  <td><center><?php echo $key+1 ?></center></td>
                  <td><?php echo $rank->nama_peserta ?></td>
                  <?php foreach ($nilai as $key => $n): 
                    for ($i=0; $i < $info[0]->jml_rep_lari; $i++) { 
                    if($rank->id_akun == $n->id_akun AND $n->id_bobot_sub_tes==7 AND $n->set_ke == ($i+1)) { ?>
                    <td><?php echo $n->nilai_asli.' detik' ?></td>
                    <?php } 
                    }
                  endforeach ?>
                  <td> <?php echo $rank->nilai_min. ' detik' ?></td>
                  </tr>
                  <?php endforeach ?>
            </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->

</body>
</html>
