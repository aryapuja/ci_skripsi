<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function login($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('akun');
	}	

	public function daftarAkunAnggota($nama_lengkap,$username,$password,$email,$tgl_lahir,$no_hp,$no_hp_ortu,$alamat_rumah,$asal_sekolah,$jenis_kelamin,$berat_badan,$tinggi_badan,$riwayat_penyakit)
	{
		$data = array(
					'nama_lengkap'		=> $nama_lengkap,
					'username' 			=> $username, 
					'password' 			=> $password, 
					'email' 			=> $email, 
					'tgl_lahir' 		=> $tgl_lahir, 
					'no_hp' 			=> $no_hp, 
					'no_hp_ortu' 		=> $no_hp_ortu, 
					'alamat_rumah' 		=> $alamat_rumah, 
					'asal_sekolah' 		=> $asal_sekolah, 
					'jenis_kelamin' 	=> $jenis_kelamin, 
					'berat_badan' 		=> $berat_badan, 
					'tinggi_badan' 		=> $tinggi_badan, 
					'riwayat_penyakit'	=> $riwayat_penyakit, 
					'level_akun'		=> 'Anggota', 
					'status_akun'		=> 'Menunggu Persetujuan', 
				);
		return $this->db->insert('akun', $data);
	}

	public function getStatusAkun($status)
	{
		$this->db->where('status_akun', $status);
		$query = $this->db->get('user');
		return $query->num_rows();
	}

	public function getUsername($value)
	{
		$this->db->where('username', $value);
		$query = $this->db->get('akun');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	
}

/* End of file ksokp.php */
/* Location: ./application/models/ksokp.php */