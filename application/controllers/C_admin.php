<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status')==TRUE) 
		{
			$this->load->model('M_admin');
		}else{	
			redirect('C_login');
		}
	}

	public function index()
	{
		$data['aktif'] = $this->M_admin->countUser('Aktif');
		$data['idle'] = $this->M_admin->countUser('Menunggu Persetujuan');
		$data['nonaktif'] = $this->M_admin->countUser('Tidak Aktif');
		$this->load->view('admin/header.php');
		$this->load->view('admin/v_admin',$data);
		$this->load->view('admin/footer.php');
	}

/*MANAJEMEN USER*/
	public function viewUser()
	{
		$this->load->view('admin/header.php');
		$this->load->view('admin/v_list_user');
		$this->load->view('admin/footer.php');
	}

	public function getUser()
	{
		$data=$this->M_admin->getUser();
		echo json_encode($data);
	}

	public function updateUser()
	{
		$result="";
		$id 				= $this->input->post('u_id');
		$nama_lengkap 		= $this->input->post('u_nama_lengkap');
        $username 			= $this->input->post('u_username');
        $email 				= $this->input->post('u_email');
        $tgl_lahir			= $this->input->post('u_tgl_lahir');
        $no_hp				= $this->input->post('u_no_hp');
        $no_hp_ortu			= $this->input->post('u_no_hp_ortu');
        $alamat_rumah		= $this->input->post('u_alamat_rumah');
        $asal_sekolah		= $this->input->post('u_asal_sekolah');
        $jenis_kelamin		= $this->input->post('u_jenis_kelamin');
        $berat_badan		= $this->input->post('u_berat_badan');
        $tinggi_badan		= $this->input->post('u_tinggi_badan');
        $riwayat_penyakit 	= $this->input->post('u_riwayat_penyakit');
        $level_akun			= $this->input->post('u_level_akun');
        $status_akun		= $this->input->post('u_status_akun');

		$cekEmail	= $this->M_admin->getEmail($email);

		if($cekEmail == true){
			$getIdByEmail = $this->M_admin->getIdByEmail($email);
			$idEmail = $getIdByEmail[0]['id_akun'];

			// print_r($idEmail." == ".$id);die();

			if($idEmail == $id){
				$data = [ 'result'	=> $this->M_admin->updateAkun($id,$nama_lengkap,$username,$email,$tgl_lahir,$no_hp,$no_hp_ortu,$alamat_rumah,$asal_sekolah,$jenis_kelamin,$berat_badan,$tinggi_badan,$riwayat_penyakit,$level_akun,$status_akun), 'code' => 1];
			}else{	
				$data = ['code' => 2];
			}
		}else{
				$data = [ 'result'	=> $this->M_admin->updateAkun($id,$nama_lengkap,$username,$email,$tgl_lahir,$no_hp,$no_hp_ortu,$alamat_rumah,$asal_sekolah,$jenis_kelamin,$berat_badan,$tinggi_badan,$riwayat_penyakit,$level_akun,$status_akun), 'code' => 1];
		}

		echo json_encode($data);
	}

	public function deleteUser()
	{
		$result = $this->M_admin->deleteAkun();
		echo json_decode($result);
	}

	public function daftarPenyeleksi()
	{
		$result="";
		$nama_lengkap 		= $this->input->post('nama_lengkap');
		$username 			= $this->input->post('username');
		$password 			= $this->input->post('password');
		$email 				= $this->input->post('email');
		$tgl_lahir 			= $this->input->post('tgl_lahir');
		$no_hp 				= $this->input->post('no_hp');
		$alamat_rumah 		= $this->input->post('alamat_rumah');
		$asal_sekolah 		= $this->input->post('asal_sekolah');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');

		$cek		= $this->M_admin->getUsername($username);
		$cekEmail	= $this->M_admin->getIdEmail($email);

		if($cekEmail == false){
				$data =['code' => 3];
		}else{
			if($cek == true){
				$data=['code' => 2];
			}else{
				$data=[ 'result'	=> $this->M_admin->daftarAkunPenyeleksi($nama_lengkap,$username,$password,$email,$tgl_lahir,$no_hp,$alamat_rumah,$jenis_kelamin),
						'code' 		=> 1];
			}	
		}

		echo json_encode($data);
	}

	public function changePassword()
	{
		$result="";
		$data = [];
		$id = $this->session->id_akun;
		$passold = $this->input->post('passold');
		$passnew = $this->input->post('passnew');
		$passnew2 = $this->input->post('passnew2');
		$getpass = $this->M_admin->getPass($id);
		$getpass2=$getpass[0]['password'];

		if ($passold != $getpass2) {
			$data =['code' => 1];
		}else if ($passnew != $passnew2) {
			$data =['code' => 2];
		}else{
			$data =['code' => 3, 'result' => $this->M_admin->changePass($id,$passold,$passnew)];
		}

		echo json_encode($data);
	}
/*MANAJEMEN USER*/

/*MANAJEMEN SELEKSI*/
	Public function viewListSeleksi()
	{
		$this->load->view('admin/header.php');
		$this->load->view('admin/v_list_seleksi');
		$this->load->view('admin/footer.php');
	}

	public function getSeleksi()
	{
		$data=$this->M_admin->getSeleksi();
		echo json_encode($data);
	}

	public function createSeleksi()
	{
		$result="";
		$nama_seleksi 		= $this->input->post('nama_seleksi');
        $jenis_olahraga 	= $this->input->post('jenis_olahraga');
        $jenis_kelamin		= $this->input->post('jenis_kelamin');
        $batas_umur			= $this->input->post('batas_umur');
        $tgl_seleksi		= $this->input->post('tgl_seleksi');
        $tgl_kejuaraan 		= $this->input->post('tgl_kejuaraan');
        $now				= date("Y-m-d");

        $set_pukul			= $this->input->post('set_pukul');
        $set_tangkap		= $this->input->post('set_tangkap');
        $set_lempar			= $this->input->post('set_lempar');
        $rep_lari			= $this->input->post('rep_lari');

        if($tgl_seleksi<$now){
       		$data = ['code' => 2];
        }else if($tgl_kejuaraan<$now){
        	$data = ['code' => 3];
        }else{
       		$data = [ 'result'	=> $this->M_admin->createSeleksi($nama_seleksi,$jenis_olahraga,$jenis_kelamin,$batas_umur,$tgl_seleksi,$tgl_kejuaraan,$set_pukul,$set_tangkap,$set_lempar,$rep_lari),
				  'code' => 1];
        }
        
		echo json_encode($data);
	}

	public function updateSeleksi()
	{
		$result="";
		$id_seleksi 		= $this->input->post('u_id');
		$nama_seleksi 		= $this->input->post('u_nama_seleksi');
        $jenis_olahraga 	= $this->input->post('u_jenis_olahraga');
        $jenis_kelamin		= $this->input->post('u_jenis_kelamin');
        $batas_umur			= $this->input->post('u_batas_umur');
        $tgl_seleksi		= $this->input->post('u_tgl_seleksi');
        $tgl_kejuaraan 		= $this->input->post('u_tgl_kejuaraan');
        $now				= date("Y-m-d");
        if($tgl_seleksi>$now){
       		$status_seleksi		= 'Belum Selesai';
        }else{
       		$status_seleksi		= 'Selesai';
        }
        $set_pukul			= $this->input->post('u_set_pukul');
        $set_tangkap		= $this->input->post('u_set_tangkap');
        $set_lempar			= $this->input->post('u_set_lempar');
        $rep_lari			= $this->input->post('u_rep_lari');

		$data = [ 'result'	=> $this->M_admin->updateSeleksi($id_seleksi,$nama_seleksi,$jenis_olahraga,$jenis_kelamin,$batas_umur,$tgl_seleksi,$tgl_kejuaraan,$status_seleksi,$set_pukul,$set_tangkap,$set_lempar,$rep_lari),
				  'code' => 1];

		echo json_encode($data);
	}

	public function deleteSeleksi()
	{
		$result = $this->M_admin->deleteSeleksi();
		echo json_decode($result);
	}

	public function updateStatus()
	{
		$step1="";
		$step2="";
		$step3="";
		$step4="";
		$step5="";
		$result="";
		$id_seleksi = $this->input->post('id');
		$data = [	'step1' => $this->hitungAvgPerTes($id_seleksi), 
					'step2' => $this->hitungNormalisasiAvgPerTes($id_seleksi), 
					'step3' => $this->hitungNilaiQiPerTes($id_seleksi), 
					'step4' => $this->hitungNormalisasiAvgSeleksi($id_seleksi), 
					'step5' => $this->hitungNilaiQiSeleksi($id_seleksi), 
					'result' => $this->M_admin->updateStatus($id_seleksi), 
					'code' => 1
				];
		
		echo json_encode($data);
	}
/*MANAJEMEN SELEKSI*/

/*MANAJEMEN BOBOT TES*/
	Public function viewListBobot()
	{
		$this->load->view('admin/header.php');
		$this->load->view('admin/v_list_bobot');
		$this->load->view('admin/footer.php');
	}

	public function getBobot()
	{
		$data=$this->M_admin->getBobot();
		echo json_encode($data);
	}

	public function updateBobot()
	{
		$result="";
		$id 			= $this->input->post('u_id');
		$jenis_seleksi 	= $this->input->post('u_jenis_tes');
        $nilai_bobot_tes 	= $this->input->post('u_nilai_bobot_tes');

        $cekJumlah = $this->M_admin->cekJumlahBobotSeleksi($id);
        $jumlah = (int)$cekJumlah[0]->nilai_bobot_tes+$nilai_bobot_tes;

        if($jumlah<100){
        	$data = [ 'result'	=> $this->M_admin->updateBobotSeleksi($id,$jenis_tes,$nilai_bobot_tes),
					  'code' => 3];
        }else if($jumlah>100){
        	$data = [ 'code' => 2];
        }else{
			$data = [ 'result'	=> $this->M_admin->updateBobotSeleksi($id,$jenis_tes,$nilai_bobot_tes),
					  'code' => 1];
        }

		echo json_encode($data);
	}
/*MANAJEMEN BOBOT TES*/

/*MANAJEMEN BOBOT SUB TES*/
	Public function viewListBobotSub()
	{
		$this->load->view('admin/header.php');
		$this->load->view('admin/v_list_sub_bobot');
		$this->load->view('admin/footer.php');
	}

	public function getSubBobotPukul()
	{
		$data=$this->M_admin->getSubBobot("1");
		echo json_encode($data);
	}

	public function getSubBobotTangkap()
	{
		$data=$this->M_admin->getSubBobot("2");
		echo json_encode($data);
	}

	public function getSubBobotLempar()
	{
		$data=$this->M_admin->getSubBobot("3");
		echo json_encode($data);
	}

	public function updateSubBobot()
	{
		$result="";
		$id 				= $this->input->post('u_id');
		$id_jenis_tes		= $this->input->post('u_jenis_tes');
        $nilai_bobot_sub_tes 	= $this->input->post('u_nilai_bobot_sub_tes');


        $cekJumlah = $this->M_admin->cekJumlahBobotSubSeleksi($id,$id_jenis_tes);
        $jumlah = (int)$cekJumlah[0]->nilai_bobot_sub_tes+$nilai_bobot_sub_tes;

        // print_r($jumlah);die();

        if($jumlah<100){
        	$data = [ 'result'	=> $this->M_admin->updateBobotSubSeleksi($id,$nilai_bobot_sub_tes),
					  'code' => 3];
        }else if($jumlah>100){
        	$data = [ 'code' => 2];
        }else{
			$data = [ 'result'	=> $this->M_admin->updateBobotSubSeleksi($id,$nilai_bobot_sub_tes),
					  'code' => 1];
        }

		echo json_encode($data);
	}
/*MANAJEMEN BOBOT SUB TES*/

/*MANAJEMEN NILAI KONVERSI*/
	Public function viewListNilaiKonversi()
	{
		$this->load->view('admin/header.php');
		$this->load->view('admin/v_list_nilai_konversi');
		$this->load->view('admin/footer.php');
	}

	public function getNilaiKonversiPukul()
	{
		$data=$this->M_admin->getNilaiKonversi("1");
		echo json_encode($data);
	}

	public function getNilaiKonversiTangkap()
	{
		$data=$this->M_admin->getNilaiKonversi("2");
		echo json_encode($data);
	}

	public function getNilaiKonversiLempar()
	{
		$data=$this->M_admin->getNilaiKonversi("3");
		echo json_encode($data);
	}

	public function getNilaiKonversiLari()
	{
		$data=$this->M_admin->getNilaiKonversi("4");
		echo json_encode($data);
	}

	public function updateNilaiKonversi()
	{
		$result="";
		$id 			= $this->input->post('u_id');
		$id_jenis_tes	= $this->input->post('u_jenis_tes');
        $bts_bawah 		= $this->input->post('u_bts_bawah');
        $bts_atas 		= $this->input->post('u_bts_atas');

        $data = [ 'result'	=> $this->M_admin->updateNilaiKonversi($id,$bts_bawah,$bts_atas),
				  'code' => 1];

		echo json_encode($data);
	}
/*MANAJEMEN NILAI KONVERSI*/

/*MANAJEMEN STANDAR*/
	Public function viewListNilaiStandar()
	{
		$this->load->view('admin/header.php');
		$this->load->view('admin/v_list_nilai_standar');
		$this->load->view('admin/footer.php');
	}

	public function getNilaiStandar()
	{
		$data=$this->M_admin->getNilaiStandar();
		echo json_encode($data);
	}

	public function updateNilaiStandar()
	{
		$result="";
		$id 			= $this->input->post('u_id');
        $nilai_std 		= $this->input->post('u_nilai_standar');

        $data = [ 'result'	=> $this->M_admin->updateNilaiStandar($id,$nilai_std),
				  'code' => 1];

		echo json_encode($data);
	}
/*MANAJEMEN STANDAR*/

/*PERHITUNGAN NILAI*/
	/*Hitung Nilai Rata-Rata Per Tes*/
		public function hitungAvgPerTes($id_seleksi)
		{
			$status_per_tes="";
			$avg_tes=array();
			$peserta = $this->M_admin->getPesertaSeleksi($id_seleksi,'list_peserta', 'Menunggu Hasil Seleksi');
        	foreach ($peserta as $key) {
        		$id_akun = $key['id_akun'];
        		$nama_peserta = $key['nama_peserta'];
        		/*Hitung Rata-Rata Nilai Per Tes*/
        		for ($i=1; $i < 7; $i+=2) { 
					$id_bobot_tes=0;
					if($i == 1){
        				$id_bobot_tes = 1;
        			}else if($i == 3){
        				$id_bobot_tes = 2;
        			}else{
        				$id_bobot_tes = 3;
        			}
        			// Insert Tabel nilai_tes = nilai tiap tes (blm di normalisasi)
        			$avg_keterampilan = number_format($this->M_admin->hitungAvgSubTes($id_seleksi,$id_akun,$i)->nilai_konversi,4);
        			$avg_unjuk_kerja = number_format($this->M_admin->hitungAvgSubTes($id_seleksi,$id_akun,($i+1))->nilai_konversi,4) ;
        			$avg_total = $avg_keterampilan + $avg_unjuk_kerja;
        			$nilai_std = $this->M_admin->getNilaiStd($id_bobot_tes);
        			if($avg_total>=$nilai_std){
        				$status_per_tes = "Memenuhi Standar";
        			}else{
        				$status_per_tes = "Tidak Memenuhi Standar";
        			}

        			$avg_tes[$i] = number_format($avg_total/2,4);
        			$this->M_admin->insertNilaiTes($id_akun,$nama_peserta,$id_seleksi,$id_bobot_tes,$avg_keterampilan,$avg_unjuk_kerja,$status_per_tes);
        		}
        		// Update Tabel list_peserta = nilai tes pukul, tangkap, lempar, lari (blm di normalisasi) dan status peserta seleksi
    			$avg_lari = $this->M_admin->hitungAvgSubTes($id_seleksi,$id_akun,7)->nilai_konversi;
    			$nilai_total = $avg_tes[1]+$avg_tes[3]+$avg_tes[5]+$avg_lari;
	        	$nilai_std_total = $this->M_admin->getNilaiStdSeluruhTes()[0]->nilai_standar;
	        	if($nilai_total < $nilai_std_total){
	        		$status = 'Tidak Lulus';
	        	}else{
	        		$status = 'Lulus';
	        	}
    			$this->M_admin->updateNilaiSeleksi($id_akun,$id_seleksi,$avg_tes[1],$avg_tes[3],$avg_tes[5],$avg_lari,$status);
        	}
		}
	/*Hitung Nilai Rata-Rata Per Tes*/

	/*Menghitung Normalisasi Rata-Rata Per Tes - Nilai Si - Nilai Ri*/
		public function hitungNormalisasiAvgPerTes($id_seleksi)
		{
			$nmax_keterampilan = $nmax_unjuk_kerja = $nmin_keterampilan = $nmin_unjuk_kerja = array();
			$nrml_keterampilan = $nrml_unjuk_kerja = $nilai_s = $nilai_r = array();

			$peserta = $this->M_admin->getPesertaSeleksi($id_seleksi,'nilai_tes','Memenuhi Standar');
			foreach ($peserta as $key) {
        		$id_akun = $key['id_akun'];
        		$nama_peserta = $key['nama_peserta'];
	        	$id_bobot_tes = $key['id_bobot_tes'];
	        	$nilai_tes_keterampilan = $key['nilai_tes_keterampilan'];
	        	$nilai_tes_unjuk_kerja = $key['nilai_tes_unjuk_kerja'];

	        	//Mengambil nilai Bobot per tes
	        	$nmax_keterampilan[$id_bobot_tes] = $this->M_admin->getMaxNilaiTes($id_seleksi,$id_bobot_tes,'nilai_tes_keterampilan');	
        		$nmax_unjuk_kerja[$id_bobot_tes] = $this->M_admin->getMaxNilaiTes($id_seleksi,$id_bobot_tes,'nilai_tes_unjuk_kerja');
        		$nmin_keterampilan[$id_bobot_tes] = $this->M_admin->getMinNilaiTes($id_seleksi,$id_bobot_tes,'nilai_tes_keterampilan');	
        		$nmin_unjuk_kerja[$id_bobot_tes] = $this->M_admin->getMinNilaiTes($id_seleksi,$id_bobot_tes,'nilai_tes_unjuk_kerja'); 

	        	// Hitung nilai normalisasi
	        	$nrml_keterampilan[$id_bobot_tes] = number_format(($nmax_keterampilan[$id_bobot_tes] - $nilai_tes_keterampilan) / ($nmax_keterampilan[$id_bobot_tes] - $nmin_keterampilan[$id_bobot_tes]),4) ;
	        	$nrml_unjuk_kerja[$id_bobot_tes] = number_format(($nmax_unjuk_kerja[$id_bobot_tes] - $nilai_tes_unjuk_kerja) / ($nmax_unjuk_kerja[$id_bobot_tes] - $nmin_unjuk_kerja[$id_bobot_tes]),4) ;

	        	//ambil nilai bobot per tes
	        	$bobot_keterampilan	= $this->M_admin->getNilaiBobotSubTes($id_bobot_tes,'Tes Keterampilan')->nilai_bobot_sub_tes;
	        	$bobot_unjuk_kerja	= $this->M_admin->getNilaiBobotSubTes($id_bobot_tes,'Tes Unjuk Kerja')->nilai_bobot_sub_tes;

	        	//hitung nilai S
	        	$nilai_s[$id_bobot_tes] = number_format(($nrml_keterampilan[$id_bobot_tes] * ($bobot_keterampilan/100)) + ($nrml_unjuk_kerja[$id_bobot_tes] * ($bobot_unjuk_kerja/100)),4);
	        	//Hitung nilai R
	        	if(($nrml_keterampilan[$id_bobot_tes] * ($bobot_keterampilan/100)) > ($nrml_unjuk_kerja[$id_bobot_tes] * ($bobot_unjuk_kerja/100))){
	        		$nilai_r[$id_bobot_tes] = number_format(($nrml_keterampilan[$id_bobot_tes] * ($bobot_keterampilan/100)),4); 
	        	}else{
	        		$nilai_r[$id_bobot_tes] = number_format(($nrml_unjuk_kerja[$id_bobot_tes] * ($bobot_unjuk_kerja/100)),4);
	        	}
        		$this->M_admin->updateNilaiTes($id_akun,$id_seleksi,$id_bobot_tes,$nilai_s[$id_bobot_tes],$nilai_r[$id_bobot_tes]);
	        }
		}
	/*Menghitung Normalisasi Rata-Rata Per Tes - Nilai Si - Nilai Ri*/

	/*Hitung Nilai Qi Per Tes*/
		public function hitungNilaiQiPerTes($id_seleksi)
		{
			$nmax_S = $nmax_R = $nmin_S = $nmin_R = $nilai_q = array();

			$peserta = $this->M_admin->getPesertaSeleksi($id_seleksi,'nilai_tes','Memenuhi Standar');
			foreach ($peserta as $key) {
        		$id_akun = $key['id_akun'];
        		$nama_peserta = $key['nama_peserta'];
	        	$id_bobot_tes = $key['id_bobot_tes'];
	        	$nilai_s = $key['nilai_si'];
	        	$nilai_r = $key['nilai_ri'];

	        	//Ambil nilai min-max dari Si dan Ri
	        	$nmax_S[$id_bobot_tes] = $this->M_admin->getMaxNilaiTes($id_seleksi,$id_bobot_tes,'nilai_si');
        		$nmax_R[$id_bobot_tes] = $this->M_admin->getMaxNilaiTes($id_seleksi,$id_bobot_tes,'nilai_ri');
        		$nmin_S[$id_bobot_tes] = $this->M_admin->getMinNilaiTes($id_seleksi,$id_bobot_tes,'nilai_si');
        		$nmin_R[$id_bobot_tes] = $this->M_admin->getMinNilaiTes($id_seleksi,$id_bobot_tes,'nilai_ri');

	        	//hitung nilai Q || Nilai V = 0,5
	        	$nilai_q[$id_bobot_tes] = number_format((0.5*(($nilai_s-$nmin_S[$id_bobot_tes])/($nmax_S[$id_bobot_tes]-$nmin_S[$id_bobot_tes])))+((1-0.5)*(($nilai_r-$nmin_R[$id_bobot_tes])/($nmax_R[$id_bobot_tes]-$nmin_R[$id_bobot_tes]))),4);

        		$this->M_admin->updateNilaiQTes($id_akun,$id_seleksi,$id_bobot_tes,$nilai_q[$id_bobot_tes]);
	        }
		}
	/*Hitung Nilai Qi Per Tes*/

	/*Menghitung Normalisasi Rata-Rata Seluruh Tes - Nilai Si - Nilai Ri*/
		public function hitungNormalisasiAvgSeleksi($id_seleksi)
		{
			$nilai_tes = $nilai_sr = array();
			$nBobot = $nMax = $nMin = array();
			$nMax =[$this->M_admin->getMaxNilaiSeleksi($id_seleksi,'tes_pukul'),$this->M_admin->getMaxNilaiSeleksi($id_seleksi,'tes_tangkap'),$this->M_admin->getMaxNilaiSeleksi($id_seleksi,'tes_lempar'),$this->M_admin->getMaxNilaiSeleksi($id_seleksi,'tes_lari')];
			$nMin =[$this->M_admin->getMinNilaiSeleksi($id_seleksi,'tes_pukul'),$this->M_admin->getMinNilaiSeleksi($id_seleksi,'tes_tangkap'),$this->M_admin->getMinNilaiSeleksi($id_seleksi,'tes_lempar'),$this->M_admin->getMinNilaiSeleksi($id_seleksi,'tes_lari')];
			$nBobot = [$this->M_admin->getNilaiBobotTes(1)->nilai_bobot_tes,$this->M_admin->getNilaiBobotTes(2)->nilai_bobot_tes,$this->M_admin->getNilaiBobotTes(3)->nilai_bobot_tes,$this->M_admin->getNilaiBobotTes(4)->nilai_bobot_tes];

			$peserta = $this->M_admin->getPesertaSeleksi($id_seleksi,'list_peserta','Lulus');
			foreach ($peserta as $key) {
        		$id_akun = $key['id_akun'];
        		$nama_peserta = $key['nama_peserta'];
        		$nilai_tes = [$key['tes_pukul'],$key['tes_tangkap'],$key['tes_lempar'],$key['tes_lari']];
        		//Menghitung Nilai Normalisasi Seluruh Tes
        		$nrml_pukul =number_format( ($nMax[0]-$nilai_tes[0])/($nMax[0]-$nMin[0]),4);
        		$nrml_tangkap = number_format(($nMax[1]-$nilai_tes[1])/($nMax[1]-$nMin[1]),4);
        		$nrml_lempar = number_format(($nMax[2]-$nilai_tes[2])/($nMax[2]-$nMin[2]),4);
        		$nrml_lari = number_format(($nMax[3]-$nilai_tes[3])/($nMax[3]-$nMin[3]),4);
        		//Menghitung Nilai Si dan Ri Seluruh Tes
        		$nilai_sr = [($nrml_pukul*($nBobot[0]/100)),($nrml_tangkap*($nBobot[1]/100)),($nrml_lempar*($nBobot[2]/100)),($nrml_lari*($nBobot[3]/100))];
        		$nilai_s = number_format(array_sum($nilai_sr),4) ;
        		$nilai_r = number_format(max($nilai_sr),4) ;
        		$this->M_admin->updateNilaiSiRiSeleksi($id_akun,$id_seleksi,$nilai_s,$nilai_r);
	        }
		}
	/*Menghitung Normalisasi Rata-Rata Seluruh Tes - Nilai Si - Nilai Ri*/

	/*Hitung Nilai Qi Seleksi*/
		public function hitungNilaiQiSeleksi($id_seleksi)
		{
			//Ambil nilai min-max dari Si dan Ri
	        $nmax_S = $this->M_admin->getMaxNilaiSeleksi($id_seleksi,'nilai_si');
        	$nmax_R = $this->M_admin->getMaxNilaiSeleksi($id_seleksi,'nilai_ri');
        	$nmin_S = $this->M_admin->getMinNilaiSeleksi($id_seleksi,'nilai_si');
        	$nmin_R = $this->M_admin->getMinNilaiSeleksi($id_seleksi,'nilai_ri');

        	//Ambill List Peserta
			$peserta = $this->M_admin->getPesertaSeleksi($id_seleksi,'list_peserta','Lulus');
			foreach ($peserta as $key) {
        		$id_akun = $key['id_akun'];
        		$nama_peserta = $key['nama_peserta'];
	        	$nilai_s = $key['nilai_si'];
	        	$nilai_r = $key['nilai_ri'];
	        	//hitung nilai Q || Nilai V = 0,5
	        	$nilai_q = number_format((0.5*(($nilai_s-$nmin_S)/($nmax_S - $nmin_S)))+((1-0.5)*(($nilai_r-$nmin_R)/($nmax_R-$nmin_R))),4);
        		$this->M_admin->updateNilaiQiSeleksi($id_akun,$id_seleksi,$nilai_q);
	        }
		}
	/*Hitung Nilai Qi Seleksi*/
/*PERHITUNGAN NILAI*/

/*MANAJEMEN HASIL SELEKSI*/
	Public function viewHasilSeleksi()
	{
		$data['aktif'] = $this->M_admin->countUser('Aktif');
		$data['idle'] = $this->M_admin->countUser('Menunggu Persetujuan');
		$data['nonaktif'] = $this->M_admin->countUser('Tidak Aktif');

		$this->load->view('admin/header.php');
		$this->load->view('admin/v_lihat_hasil_seleksi',$data);
		$this->load->view('admin/footer.php');
	}

	public function getSeleksiSelesai()
	{
		$data=$this->M_admin->getSeleksiSelesai();
		echo json_encode($data);
	}

	public function lihatHasilSeleksi()
	{
		$id 				= $this->input->post('u_id_seleksi');
		$nama_seleksi 		= $this->input->post('u_nama_seleksi');
        $jenis_olahraga 	= $this->input->post('u_jenis_olahraga');
        $jenis_kelamin		= $this->input->post('u_jenis_kelamin');
        $batas_umur			= $this->input->post('u_batas_umur');
        $tgl_seleksi		= $this->input->post('u_tgl_seleksi');
        $tgl_kejuaraan 		= $this->input->post('u_tgl_kejuaraan');
        $set_pukul			= $this->input->post('u_set_pukul');
        $set_tangkap		= $this->input->post('u_set_tangkap');
        $set_lempar			= $this->input->post('u_set_lempar');
        $rep_lari			= $this->input->post('u_rep_lari');
        $jenis_tes 			= $this->input->post('u_jenis_tes');
        if($jenis_tes == 1){
        	$tes_keterampilan =1; $tes_unjuk_kerja =2;
        	print_r($tes_keterampilan.' || '.$tes_unjuk_kerja);die();
        }else if($jenis_tes == 2){
        	$tes_keterampilan =3; $tes_unjuk_kerja =4;
        	print_r($tes_keterampilan.' || '.$tes_unjuk_kerja);die();
        }else if($jenis_tes == 3){
        	$tes_keterampilan =5; $tes_unjuk_kerja =6;
        	print_r($tes_keterampilan.' || '.$tes_unjuk_kerja);die();
        }else if($jenis_tes == 4){
        	$tes_kecepatan = 7;
        	print_r($tes_kecepatan);die();
        }else{
        	$cek = 'Semua Tes';
        	print_r($cek);die();        	
        }

	}
/*MANAJEMEN HASIL SELEKSI*/

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
?>