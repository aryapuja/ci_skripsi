<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_penyeleksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status')==TRUE) 
		{
			$this->load->model('M_penyeleksi');
			// redirect('Dc_Controller/index');
		}else{	
			redirect('C_login');
		}
	}

	public function index()
	{
		$data['akun']=$this->M_penyeleksi->getInfoAkun($this->session->id_akun);
		$this->load->view('penyeleksi/header', $data);
		$this->load->view('penyeleksi/v_penyeleksi');
		$this->load->view('penyeleksi/footer');
	}

	public function getSeleksiBerjalan()
	{
		$data=$this->M_penyeleksi->getSeleksi();
		echo json_encode($data);
	}

	/*MANAJEMEN AKUN*/
		public function changePassword()
		{
			$result="";
			$data = [];
			$id = $this->session->id_akun;
			$passold = $this->input->post('passold');
			$passnew = $this->input->post('passnew');
			$passnew2 = $this->input->post('passnew2');
			$getpass = $this->M_penyeleksi->getPass($id);
			$getpass2=$getpass[0]['password'];

			if ($passold != $getpass2) {
				$data =['code' => 1];
			}else if ($passnew != $passnew2) {
				$data =['code' => 2];
			}else{
				$data =['code' => 3, 'result' => $this->M_penyeleksi->changePass($id,$passold,$passnew)];
			}

			echo json_encode($data);
		}

		public function updateAkun()
		{
			$result="";
			$data = [];
			$id = $this->session->id_akun;
			$username = $this->session->username;
			$nama_lengkap = $this->input->post('edt_nama_lengkap');
			$tgl_lahir = $this->input->post('edt_tgl_lahir');
			$email = $this->input->post('edt_email');
			$no_hp = $this->input->post('edt_no_hp');
			$jenis_kelamin = $this->input->post('edt_jenis_kelamin');
			$alamat_rumah = $this->input->post('edt_alamat_rumah');

			$cekEmail = $this->M_penyeleksi->getEmail($email);
			

			if($cekEmail == true){
				$getIdByEmail = $this->M_penyeleksi->getIdByEmail($email);
				$idEmail = $getIdByEmail[0]['id_akun'];
				if($idEmail == $id){
					$this->session->unset_userdata('nama_lengkap');
					$newdata = array(
									'nama_lengkap' 		=> $nama_lengkap, 
									'username' 			=> $username, 
									'email' 			=> $email, 
									'tgl_lahir' 		=> $tgl_lahir, 
									'no_hp' 			=> $no_hp, 
									'alamat_rumah' 		=> $alamat_rumah, 
									'jenis_kelamin' 	=> $jenis_kelamin,  
								);
					$this->session->set_userdata($newdata);
					$data =['code' => 2, 'result' => $this->M_penyeleksi->updateAkun($id,$nama_lengkap,$username,$tgl_lahir,$email,$no_hp,$jenis_kelamin,$alamat_rumah)];
				}else{	
					$data =['code' => 1];
				}
			}else{
				$this->session->unset_userdata('nama_lengkap');
				$newdata = array(
									'nama_lengkap' 		=> $nama_lengkap, 
									'username' 			=> $username, 
									'email' 			=> $email, 
									'tgl_lahir' 		=> $tgl_lahir, 
									'no_hp' 			=> $no_hp, 
									'alamat_rumah' 		=> $alamat_rumah, 
									'jenis_kelamin' 	=> $jenis_kelamin,  
								);
				$this->session->set_userdata($newdata);
				$data =['code' => 2, 'result' => $this->M_penyeleksi->updateAkun($id,$nama_lengkap,$username,$tgl_lahir,$email,$no_hp,$jenis_kelamin,$alamat_rumah)];
			}

			echo json_encode($data);
		}
	/*MANAJEMEN AKUN*/

	/*MANAJEMEN INPUT NILAI*/
		Public function viewListSeleksi()
		{
			$data['akun']=$this->M_penyeleksi->getInfoAkun($this->session->id_akun);
			$this->load->view('penyeleksi/header', $data);
			$this->load->view('penyeleksi/v_list_seleksi');
			$this->load->view('penyeleksi/footer.php');
		}

		public function getSeleksi()
		{
			$data=$this->M_penyeleksi->getSeleksi();
			echo json_encode($data);
		}

		Public function viewListPeserta($id_seleksi)
		{
			$data['akun']=$this->M_penyeleksi->getInfoAkun($this->session->id_akun);
			$newdata = array('id_seleksi' 	=> $id_seleksi);
			$this->session->set_userdata($newdata);

			$data['jumlahSet']=$this->M_penyeleksi->getSeleksi();
			$data['jenisTes']=$this->M_penyeleksi->getTes();
			$data['jenisSubTes']=$this->M_penyeleksi->getSubTes();

			$this->load->view('penyeleksi/header', $data);
			$this->load->view('penyeleksi/v_list_peserta',$data);
			$this->load->view('penyeleksi/footer.php');
		}

		public function getPeserta()
		{
			$data=$this->M_penyeleksi->getPeserta($this->session->id_seleksi);
			echo json_encode($data);
		}

		public function getJumlahSet()
		{
			$namaTes = '';
			$jenisTes = $this->input->post('jenisTes');

			if($jenisTes == '1'){
				$namaTes='jml_set_pukul';
			}else if($jenisTes == '2'){
				$namaTes='jml_set_tangkap';
			}else if($jenisTes == '3'){
				$namaTes='jml_set_lempar';
			}else if($jenisTes == '4'){
				$namaTes='jml_rep_lari';
			}
			$data=$this->M_penyeleksi->getJumlahSet($this->session->id_seleksi,$namaTes);
			echo json_encode($data);
		}

		public function inputNilai()
		{
			$result="";
			$id_akun 		= $this->input->post('u_id_akun');
			$id_seleksi 	= $this->input->post('u_id_seleksi');
		    $nama_peserta 	= $this->input->post('u_nama_peserta');
		    $id_tes 		= $this->input->post('u_id_tes');
		    $id_sub_tes		= $this->input->post('u_id_sub_tes');
		    $set_ke			= $this->input->post('u_set_ke');
		    $nilai_asli		= $this->input->post('u_nilai_asli');
		    $nilai_konversi	= $this->konversiNilai($id_tes,$nilai_asli,$id_sub_tes);

		    $cekNilai =	$this->M_penyeleksi->getNilai($id_akun,$id_seleksi,$id_sub_tes,$set_ke);

		    if($cekNilai == TRUE){
		    	//update Nilai
		    	if($id_sub_tes == 1 || $id_sub_tes == 3){
		    		// code nilai maksimal 10
		    		if($nilai_asli > 10){	
						$data =['code' => 2];
		    		}else{
						$data =['code' => 4, 'result' => $this->M_penyeleksi->updateNilai($id_akun,$id_seleksi,$id_sub_tes,$set_ke,$nilai_asli,$nilai_konversi)];
		    		}
		    	}else if($id_sub_tes == 5 ){
		    		// code nilai maksimal 100
					if($nilai_asli > 100){	
						$data =['code' => 3];
		    		}else{
						$data =['code' => 4, 'result' => $this->M_penyeleksi->updateNilai($id_akun,$id_seleksi,$id_sub_tes,$set_ke,$nilai_asli,$nilai_konversi)];
		    		}
		    	}else if($id_sub_tes == 2 || $id_sub_tes == 4 || $id_sub_tes == 6 ){
		    		// code nilai maksimal 5
					if($nilai_asli > 5){	
						$data =['code' => 1];
		    		}else{
						$data =['code' => 4, 'result' => $this->M_penyeleksi->updateNilai($id_akun,$id_seleksi,$id_sub_tes,$set_ke,$nilai_asli,$nilai_asli)];
		    		}
		    	}else{
						$data =['code' => 4, 'result' => $this->M_penyeleksi->updateNilai($id_akun,$id_seleksi,$id_sub_tes,$set_ke,$nilai_asli,$nilai_konversi)];
		    	}
		    }else{
		    	if($id_sub_tes == 1 || $id_sub_tes == 3){
		    		// code nilai maksimal 10
		    		if($nilai_asli > 10){	
						$data =['code' => 2];
		    		}else{
						$data =['code' => 4, 'result' => $this->M_penyeleksi->inputNilai($id_akun,$nama_peserta,$id_seleksi,$id_tes,$id_sub_tes,$set_ke,$nilai_asli,$nilai_konversi)];
		    		}
		    	}else if($id_sub_tes == 5 ){
		    		// code nilai maksimal 100
					if($nilai_asli > 100){	
						$data =['code' => 3];
		    		}else{
						$data =['code' => 4, 'result' => $this->M_penyeleksi->inputNilai($id_akun,$nama_peserta,$id_seleksi,$id_tes,$id_sub_tes,$set_ke,$nilai_asli,$nilai_konversi)];
		    		}
		    	}else if($id_sub_tes == 2 || $id_sub_tes == 4 || $id_sub_tes == 6 ){
		    		// code nilai maksimal 5
					if($nilai_asli > 5){	
						$data =['code' => 1];
		    		}else{
						$data =['code' => 4, 'result' => $this->M_penyeleksi->inputNilai($id_akun,$nama_peserta,$id_seleksi,$id_tes,$id_sub_tes,$set_ke,$nilai_asli,$nilai_asli)];
		    		}
		    	}else{
						$data =['code' => 4, 'result' => $this->M_penyeleksi->inputNilai($id_akun,$nama_peserta,$id_seleksi,$id_tes,$id_sub_tes,$set_ke,$nilai_asli,$nilai_konversi)];
		    	}

		    }

			echo json_encode($data);    
		}

		public function konversiNilai($id_tes,$nilai_asli,$id_sub_tes)
		{
			$cek="";
			$nilai_konversi = 0;
			$data = $this->M_penyeleksi->konversiNilai($id_tes);
			foreach ($data as $key ) {
				$bts_bawah = $key['bts_bawah'];
				$bts_atas = $key['bts_atas'];
				if($id_sub_tes == 7){
					if($nilai_asli >= $bts_atas && $nilai_asli <= $bts_bawah){
						$nilai_konversi = $key['nilai_konversi'];
					}	
				}else{
					if($nilai_asli >= $bts_bawah && $nilai_asli <= $bts_atas){
						$nilai_konversi = $key['nilai_konversi'];
					}	
				}
			}
			return $nilai_konversi;
		}

		public function lihatNilai($id_akun)
		{
			$data=$this->M_penyeleksi->listNilai($this->session->id_seleksi,$id_akun);
			echo json_encode($data);
		}
	/*MANAJEMEN INPUT NILAI*/


}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
?>