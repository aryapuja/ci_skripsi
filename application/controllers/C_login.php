<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	// public function index()
	// {
	// 	$this->load->view('V_login');
	// }

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('V_login');
		}else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->M_login->login($username,$password);

			if ($cek->num_rows() == 1) {

				$value = $cek->row();

				$userdata = array(
					'id_akun' 			=> $value->id_akun,
					'nama_lengkap'		=> $value->nama_lengkap,
					'username' 			=> $value->username, 
					'password' 			=> $value->password, 
					'email' 			=> $value->email, 
					'tgl_lahir' 		=> $value->tgl_lahir, 
					'no_hp' 			=> $value->no_hp, 
					'no_hp_ortu' 		=> $value->no_hp_ortu, 
					'alamat_rumah' 		=> $value->alamat_rumah, 
					'asal_sekolah' 		=> $value->asal_sekolah, 
					'jenis_kelamin' 	=> $value->jenis_kelamin, 
					'berat_badan' 		=> $value->berat_badan, 
					'tinggi_badan' 		=> $value->tinggi_badan, 
					'riwayat_penyakit'	=> $value->riwayat_penyakit, 
					'status_akun'		=> $value->status_akun,
					'level_akun'		=> $value->level_akun,
					'status' 			=> TRUE,
					'id_seleksi'		=> 0,
				);
				$this->session->set_userdata($userdata);

				if($value->status_akun == 'Menunggu Persetujuan'){
					$this->session->set_flashdata('status_menunggu','Status Menunggu');
					redirect('C_login','refresh');
				}else if($value->status_akun=='Aktif'){
					if($value->level_akun == 'admin'){
						redirect('C_admin','refresh');
					}else if($value->level_akun=="penyeleksi"){
						redirect('C_penyeleksi','refresh');
					}else{
						redirect('C_anggota','refresh');
					}
				}else{
					$this->session->set_flashdata('status_off','Status Off');
					$this->load->view('V_login');
				}
			} else {
				$this->session->set_flashdata('wrong_info','Wrong Info');
				$this->load->view('V_login');
			}
		}
	}

	public function daftarAkun()
	{
		$nama_lengkap 		= $this->input->post('nama_lengkap');
		$username 			= $this->input->post('username');
		$password 			= $this->input->post('password');
		$email 				= $this->input->post('email');
		$tgl_lahir 			= $this->input->post('tgl_lahir');
		$no_hp 				= $this->input->post('no_hp');
		$no_hp_ortu 		= $this->input->post('no_hp_ortu');
		$alamat_rumah 		= $this->input->post('alamat_rumah');
		$asal_sekolah 		= $this->input->post('asal_sekolah');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$berat_badan 		= $this->input->post('berat_badan');
		$tinggi_badan 		= $this->input->post('tinggi_badan');
		$riwayat_penyakit 	= $this->input->post('riwayat_penyakit');

		$cekEmail			= $this->M_login->getEmail($email);
		$cek				= $this->M_login->getUsername($username);

		if($cek == true){
			$data=['code' => 2];
		}else if ($cekEmail == true) {
			$data=['code' => 3];
		}else{
			$data=[ 'result'	=> $this->M_login->daftarAkunAnggota($nama_lengkap,$username,$password,$email,$tgl_lahir,$no_hp,$no_hp_ortu,$alamat_rumah,$asal_sekolah,$jenis_kelamin,$berat_badan,$tinggi_badan,$riwayat_penyakit),
					'code' 		=> 1];
		}
		echo json_encode($data);
	}

	public function logout()
		{
			$userdata = array('id_akun','status');
			$this->session->unset_userdata($userdata);
			echo "<script>alert('Logout Success') </script>";
			redirect('C_login','refresh');
		}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */ ?>