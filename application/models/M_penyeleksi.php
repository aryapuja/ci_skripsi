<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_penyeleksi extends CI_Model {
	
	/*MANAJEMEN USER*/
		public function countUser($status_akun)
		{
			$this->db->where('status_akun', $status_akun);
			$query = $this->db->get('akun');
			return $query->num_rows();
		}	

		public function getInfoAkun($id)
		{
			$this->db->where('id_akun', $id);
			$query = $this->db->get('akun');
			return $query->result();
		}

		public function updateAkun($id,$nama_lengkap,$username,$tgl_lahir,$email,$no_hp,$jenis_kelamin,$alamat_rumah)
		{
			$data = array(
				'nama_lengkap' 		=> $nama_lengkap, 
				'username' 			=> $username, 
				'email' 			=> $email, 
				'tgl_lahir' 		=> $tgl_lahir, 
				'no_hp' 			=> $no_hp, 
				'alamat_rumah' 		=> $alamat_rumah, 
				'jenis_kelamin' 	=> $jenis_kelamin, 
			);
			$this->db->where('id_akun', $id);
			$query = $this->db->update('akun', $data);
			return $query;
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
	
	/*MANAJEMEN NILAI*/
		public function getSeleksi()
		{
			$this->db->where('status_seleksi', 'Belum Selesai');
			$this->db->order_by('status_seleksi','asc');
			$query = $this->db->get('list_seleksi');
			return $query->result();
		}

		public function getPeserta($idSeleksi)
		{
			$this->db->where('id_seleksi', $idSeleksi);
			$query = $this->db->get('list_peserta');
			return $query->result();
		}

		public function getJumlahSet($id_seleksi,$namaTes)
		{
			$this->db->select($namaTes);
			$this->db->where('id_seleksi', $id_seleksi);
			$query = $this->db->get('list_seleksi');
			return $query->result();
		}

		public function getTes()
		{
			$query = $this->db->get('bobot_tes');
			return $query->result();
		}

		public function getSubTes()
		{
			// $this->db->where('id_bobot_tes', $id_bobot_tes);
			$query = $this->db->get('bobot_sub_tes');
			return $query->result();
		}

		public function getNilai($id_akun,$id_seleksi,$id_bobot_sub_tes,$set_ke)
		{
			$this->db->where('id_akun', $id_akun);
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_bobot_sub_tes', $id_bobot_sub_tes);
			$this->db->where('set_ke', $set_ke);
			$query = $this->db->get('nilai_per_tes');
			if($query->num_rows() > 0){
				return true;
			}else{
				return false;
			}
		}

		public function inputNilai($id_akun,$nama_peserta,$id_seleksi,$id_tes,$id_sub_tes,$set_ke,$nilai_asli,$nilai_konversi)
		{
			$data = array(
					'id_akun'			=> $id_akun,
					'nama_peserta'		=> $nama_peserta, 
					'id_seleksi' 		=> $id_seleksi, 
					'id_bobot_tes'		=> $id_tes, 
					'id_bobot_sub_tes'	=> $id_sub_tes, 
					'set_ke' 			=> $set_ke, 
					'nilai_asli' 		=> $nilai_asli, 
					'nilai_konversi' 	=> $nilai_konversi, 
				);
			return $this->db->insert('nilai_per_tes', $data);
		}

		public function updateNilai($id_akun,$id_seleksi,$id_sub_tes,$set_ke,$nilai_asli, $nilai_konversi)
		{
			$data = array('nilai_asli'=> $nilai_asli, 'nilai_konversi'=> $nilai_konversi);
			$this->db->where('id_akun', $id_akun);
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_bobot_sub_tes', $id_sub_tes);
			$this->db->where('set_ke', $set_ke);
	        $result = $this->db->update('nilai_per_tes', $data);
	        return $result;
		}

		public function konversiNilai($id_bobot_tes)
		{
			$this->db->where('id_bobot_tes', $id_bobot_tes);
			$query = $this->db->get('konversi');
			return $query->result_array();
		}

		public function listNilai($id_seleksi,$id_akun)
		{
			$this->db->where('id_akun', $id_akun);
			$this->db->where('id_seleksi', $id_seleksi);
	        $query = $this->db->get('nilai_per_tes');
	        return $query->result();
		}
	/*MANAJEMEN NILAI*/

	}
	
	/* End of file M_admin.php */
	/* Location: ./application/models/M_admin.php */
?>