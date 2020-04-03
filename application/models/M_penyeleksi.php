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
	
	}
	
	/* End of file M_admin.php */
	/* Location: ./application/models/M_admin.php */
?>