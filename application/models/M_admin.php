<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_admin extends CI_Model {
	
	/*MANAJEMEN USER*/
		public function countUser($status_akun)
		{
			$this->db->where('status_akun', $status_akun);
			$query = $this->db->get('akun');
			return $query->num_rows();
		}	

		public function getUser()
		{
			$this->db->order_by('level_akun','asc');
			$query = $this->db->get('akun');
			return $query->result();
		}	

		public function updateAkun($id,$nama_lengkap,$username,$email,$tgl_lahir,$no_hp,$no_hp_ortu,$alamat_rumah,$asal_sekolah,$jenis_kelamin,$berat_badan,$tinggi_badan,$riwayat_penyakit,$level_akun,$status_akun)
		{
			$data = array(
				'nama_lengkap' 		=> $nama_lengkap, 
				'username' 			=> $username, 
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
				'level_akun' 		=> $level_akun, 
				'status_akun' 		=> $status_akun, 
			);
			$this->db->where('id_akun', $id);
			$result = $this->db->update('akun', $data);
			return $result;
		}

		public function getEmail($email)
		{
			$this->db->where('email', $email);
			$query = $this->db->get('akun');
			if($query->num_rows() > 0){
				return true;
			}else{
				return false;
			}
		}

		public function getIdByEmail($email)
		{
			$this->db->select('id_akun');
	        $this->db->where('email', $email);
	        $query=$this->db->get('akun');
	        return $query->result_array();
		}

		public function deleteAkun()
		{
			$id = $this->input->post('id');
			$this->db->where('id_akun', $id);
			$result = $this->db->delete('akun');
			return $result;
		}

		public function daftarAkunPenyeleksi($nama_lengkap,$username,$password,$email,$tgl_lahir,$no_hp,$alamat_rumah,$jenis_kelamin)
		{
			$data = array(
						'nama_lengkap'		=> $nama_lengkap,
						'username' 			=> $username, 
						'password' 			=> $password, 
						'email' 			=> $email, 
						'tgl_lahir' 		=> $tgl_lahir, 
						'no_hp' 			=> $no_hp, 
						'alamat_rumah' 		=> $alamat_rumah, 
						'jenis_kelamin' 	=> $jenis_kelamin, 
						'level_akun'		=> 'Penyeleksi', 
						'status_akun'		=> 'Aktif', 
					);
			return $this->db->insert('akun', $data);
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

		public function changePass($id,$passold,$passnew)
	    {
	        $data = array( 'password'=>$passnew );

	        $this->db->where('id_akun', $id);
	        $this->db->where('password', $passold);
	        $result = $this->db->update('akun', $data);
	        return $result;
	    }

	    public function getPass($id)
	    {
	        $this->db->select('password');
	        $this->db->where('id_akun', $id);
	        $query=$this->db->get('akun');
	        return $query->result_array();
    	}
	/*MANAJEMEN USER*/

	/*MANAJEMEN SELEKSI*/
		public function getSeleksi()
		{
			$this->db->order_by('status_seleksi','asc');
			$query = $this->db->get('list_seleksi');
			return $query->result();
		}

		public function createSeleksi($nama_seleksi,$jenis_olahraga,$jenis_kelamin,$batas_umur,$tgl_seleksi,$tgl_kejuaraan)
		{
			$data = array(
						'nama_seleksi'		=> $nama_seleksi,
						'jenis_olahraga' 	=> $jenis_olahraga, 
						'jenis_kelamin' 	=> $jenis_kelamin, 
						'batas_umur' 		=> $batas_umur, 
						'tgl_seleksi' 		=> $tgl_seleksi, 
						'tgl_kejuaraan' 	=> $tgl_kejuaraan, 
						'status_seleksi' 	=> 'Belum Selesai', 
					);
			return $this->db->insert('list_seleksi', $data);
		}

		public function updateSeleksi($id,$nama_seleksi,$jenis_olahraga,$jenis_kelamin,$batas_umur,$tgl_seleksi,$tgl_kejuaraan,$status_seleksi)
		{
			$data = array(
				'nama_seleksi' 		=> $nama_seleksi, 
				'jenis_olahraga' 	=> $jenis_olahraga, 
				'jenis_kelamin' 	=> $jenis_kelamin, 
				'batas_umur' 		=> $batas_umur, 
				'tgl_seleksi' 		=> $tgl_seleksi, 
				'tgl_kejuaraan'		=> $tgl_kejuaraan, 
				'status_seleksi'	=> $status_seleksi, 
			);
			$this->db->where('id_seleksi', $id);
			$result = $this->db->update('list_seleksi', $data);
			return $result;
		}

		public function deleteSeleksi()
		{
			$id = $this->input->post('id');
			$this->db->where('id_seleksi', $id);
			$result = $this->db->delete('list_seleksi');
			return $result;
		}
	/*MANAJEMEN SELEKSI*/

	/*MANAJEMEN BOBOT*/
		public function getBobot()
			{
				$query = $this->db->get('bobot_seleksi');
				return $query->result();
			}

		public function cekJumlahBobotSeleksi($id)
		{
			$this->db->select_sum('nilai_bobot');
			$this->db->where_not_in('id_bobot_seleksi', $id);
			$query = $this->db->get('bobot_seleksi');
			return $query->result();

		}

		public function updateBobotSeleksi($id,$jenis_seleksi,$nilai_bobot)
		{
			$data = array(
				'jenis_seleksi' => $jenis_seleksi, 
				'nilai_bobot' 	=> $nilai_bobot, 
			);
			$this->db->where('id_bobot_seleksi', $id);
			$result = $this->db->update('bobot_seleksi', $data);
			return $result;
		}
	/*MANAJEMEN BOBOT*/

	
	}
	
	/* End of file M_admin.php */
	/* Location: ./application/models/M_admin.php */
?>