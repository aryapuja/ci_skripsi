<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_anggota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status')==TRUE) 
		{
			$this->load->model('M_anggota');

		}else{	
			redirect('C_login');
		}
	}

	public function index()
	{
		$data['akun']=$this->M_anggota->getInfoAkun($this->session->id_akun);
		$this->load->view('anggota/header', $data);
		$this->load->view('anggota/v_anggota');
		$this->load->view('anggota/footer');
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
			$getpass = $this->M_anggota->getPass($id);
			$getpass2=$getpass[0]['password'];

			if ($passold != $getpass2) {
				$data =['code' => 1];
			}else if ($passnew != $passnew2) {
				$data =['code' => 2];
			}else{
				$data =['code' => 3, 'result' => $this->M_anggota->changePass($id,$passold,$passnew)];
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
			$no_hp_ortu = $this->input->post('edt_no_hp_ortu');
			$jenis_kelamin = $this->input->post('edt_jenis_kelamin');
			$tinggi_badan = $this->input->post('edt_edt_tinggi_badan');
			$berat_badan = $this->input->post('edt_berat_badan');
			$alamat_rumah = $this->input->post('edt_alamat_rumah');
			$riwayat_penyakit = $this->input->post('edt_riwayat_penyakit');
			$asal_sekolah = $this->input->post('edt_asal_sekolah');

			$cekEmail = $this->M_anggota->getEmail($email);
			

			if($cekEmail == true){
				$getIdByEmail = $this->M_anggota->getIdByEmail($email);
				$idEmail = $getIdByEmail[0]['id_akun'];
				if($idEmail == $id){
					$this->session->unset_userdata('nama_lengkap');
					$newdata = array(
									'nama_lengkap' 		=> $nama_lengkap,
									'tgl_lahir' 		=> $tgl_lahir, 
									'email' 			=> $email, 
									'no_hp' 			=> $no_hp, 
									'no_hp_ortu' 		=> $no_hp_ortu, 
									'alamat_rumah' 		=> $alamat_rumah, 
									'asal_sekolah' 		=> $asal_sekolah, 
									'jenis_kelamin' 	=> $jenis_kelamin, 
									'berat_badan' 		=> $berat_badan, 
									'tinggi_badan' 		=> $tinggi_badan, 
									'riwayat_penyakit'	=> $riwayat_penyakit, 
								);
					$this->session->set_userdata($newdata);
					$data =['code' => 2, 'result' => $this->M_anggota->updateAkun($id,$nama_lengkap,$username,$tgl_lahir,$email,$no_hp,$jenis_kelamin,$alamat_rumah)];
				}else{	
					$data =['code' => 1];
				}
			}else{
				$this->session->unset_userdata('nama_lengkap');
				$newdata = array('nama_lengkap' => $nama_lengkap );
				$this->session->set_userdata($newdata);
				$data =['code' => 2, 'result' => $this->M_anggota->updateAkun($id,$nama_lengkap,$username,$tgl_lahir,$email,$no_hp,$jenis_kelamin,$alamat_rumah)];
				// redirect(current_url());
			}

			echo json_encode($data);
		}
	/*MANAJEMEN AKUN*/

	/*MANAJEMEN DAFTAR SELEKSI*/
		Public function viewListSeleksi()
		{
			$data['akun']=$this->M_anggota->getInfoAkun($this->session->id_akun);
			$this->load->view('anggota/header', $data);
			$this->load->view('anggota/v_list_seleksi');
			$this->load->view('anggota/footer.php');
		}

		public function getSeleksi()
		{
			$data=$this->M_anggota->getSeleksi();
			echo json_encode($data);
		}

		public function daftarSeleksi()
		{
			$result="";
			$id_seleksi			= $this->input->post('u_id');
			$nama_seleksi 		= $this->input->post('u_nama_seleksi');
			$jenis_kelamin 		= $this->input->post('u_jenis_kelamin');
			$batas_umur 		= $this->input->post('u_batas_umur');
			$tgl_kejuaraan		= new DateTime($this->input->post('u_tgl_kejuaraan'));

			$id_akun 			= $this->session->id_akun;
			$nama_lengkap 		= $this->session->nama_lengkap;
			$riwayat_penyakit	= $this->session->riwayat_penyakit;
			$tgl_lahir 			= new DateTime($this->session->tgl_lahir);

			$cekdaftar			= $this->M_anggota->getIdPeserta($this->session->id_akun);
			// print_r($cekdaftar);
			// die();
			$umur 				= $tgl_kejuaraan->diff($tgl_lahir)->y;

			if($this->session->jenis_kelamin != $jenis_kelamin){
				$data =['code' => 1];
			}else if($umur >= $batas_umur){
				$data =['code' => 2];
			}
			else if($cekdaftar == true){
				$data =['code' => 3];}
			else{
				$data =['code' => 4, 'result' => $this->M_anggota->daftarSeleksi($id_seleksi,$id_akun,$nama_lengkap,$jenis_kelamin,$riwayat_penyakit)];
			}

			echo json_encode($data);


		}
	/*MANAJEMEN DAFTAR SELEKSI*/


}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
?>