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
					$newdata = array('nama_lengkap' => $nama_lengkap );
					$this->session->set_userdata($newdata);
					$data =['code' => 2, 'result' => $this->M_penyeleksi->updateAkun($id,$nama_lengkap,$username,$tgl_lahir,$email,$no_hp,$jenis_kelamin,$alamat_rumah)];
				}else{	
					$data =['code' => 1];
				}
			}else{
				$this->session->unset_userdata('nama_lengkap');
				$newdata = array('nama_lengkap' => $nama_lengkap );
				$this->session->set_userdata($newdata);
				$data =['code' => 2, 'result' => $this->M_penyeleksi->updateAkun($id,$nama_lengkap,$username,$tgl_lahir,$email,$no_hp,$jenis_kelamin,$alamat_rumah)];
			}

			echo json_encode($data);
		}
	/*MANAJEMEN AKUN*/

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
?>