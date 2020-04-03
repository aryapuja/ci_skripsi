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

        if($tgl_seleksi<$now){
       		$data = ['code' => 2];
        }else if($tgl_kejuaraan<$now){
        	$data = ['code' => 3];
        }else{
       		$data = [ 'result'	=> $this->M_admin->createSeleksi($nama_seleksi,$jenis_olahraga,$jenis_kelamin,$batas_umur,$tgl_seleksi,$tgl_kejuaraan),
				  'code' => 1];
        }
        
		echo json_encode($data);
	}

	public function updateSeleksi()
	{
		$result="";
		$id 				= $this->input->post('u_id');
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
        // print_r($tgl_seleksi.' || '.$now.' || '.$status_seleksi);die();

		$data = [ 'result'	=> $this->M_admin->updateSeleksi($id,$nama_seleksi,$jenis_olahraga,$jenis_kelamin,$batas_umur,$tgl_seleksi,$tgl_kejuaraan,$status_seleksi),
				  'code' => 1];

		echo json_encode($data);
	}

	public function deleteSeleksi()
	{
		$result = $this->M_admin->deleteSeleksi();
		echo json_decode($result);
	}
/*MANAJEMEN SELEKSI*/

/*MANAJEMEN BOBOT*/
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
		$jenis_seleksi 	= $this->input->post('u_jenis_seleksi');
        $nilai_bobot 	= $this->input->post('u_nilai_bobot');

        $cekJumlah = $this->M_admin->cekJumlahBobotSeleksi($id);
        $jumlah = (int)$cekJumlah[0]->nilai_bobot+$nilai_bobot;

        if($jumlah<100){
        	$data = [ 'result'	=> $this->M_admin->updateBobotSeleksi($id,$jenis_seleksi,$nilai_bobot),
					  'code' => 3];
        }else if($jumlah>100){
        	$data = [ 'code' => 2];
        }else{
			$data = [ 'result'	=> $this->M_admin->updateBobotSeleksi($id,$jenis_seleksi,$nilai_bobot),
					  'code' => 1];
        }

		echo json_encode($data);
	}
/*MANAJEMEN BOBOT*/


}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
?>