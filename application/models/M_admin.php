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

		public function getSeleksiBerjalan()
		{
			$this->db->where('status_seleksi', 'Belum Selesai');
			$this->db->order_by('tgl_seleksi','asc');
			$query = $this->db->get('list_seleksi');
			return $query->result();
		}

		public function getSeleksiSelesai()
		{
			$this->db->where('status_seleksi', 'Selesai');
			$query = $this->db->get('list_seleksi');
			return $query->result();
		}

		public function createSeleksi($nama_seleksi,$jenis_olahraga,$jenis_kelamin,$batas_umur,$tgl_seleksi,$tgl_kejuaraan,$set_pukul,$set_tangkap,$set_lempar,$rep_lari)
		{
			$data = array(
						'nama_seleksi'		=> $nama_seleksi,
						'jenis_olahraga' 	=> $jenis_olahraga, 
						'jenis_kelamin' 	=> $jenis_kelamin, 
						'batas_umur' 		=> $batas_umur, 
						'tgl_seleksi' 		=> $tgl_seleksi, 
						'tgl_kejuaraan' 	=> $tgl_kejuaraan, 
						'jml_set_pukul'		=> $set_pukul,
						'jml_set_tangkap' 	=> $set_tangkap, 
						'jml_set_lempar' 	=> $set_lempar, 
						'jml_rep_lari' 		=> $rep_lari, 
						'status_seleksi' 	=> 'Belum Selesai', 
					);
			return $this->db->insert('list_seleksi', $data);
		}

		public function updateSeleksi($id,$nama_seleksi,$jenis_olahraga,$jenis_kelamin,$batas_umur,$tgl_seleksi,$tgl_kejuaraan,$status_seleksi,$set_pukul,$set_tangkap,$set_lempar,$rep_lari)
		{
			$data = array(
				'nama_seleksi' 		=> $nama_seleksi, 
				'jenis_olahraga' 	=> $jenis_olahraga, 
				'jenis_kelamin' 	=> $jenis_kelamin, 
				'batas_umur' 		=> $batas_umur, 
				'tgl_seleksi' 		=> $tgl_seleksi, 
				'tgl_kejuaraan'		=> $tgl_kejuaraan,
				'jml_set_pukul'		=> $set_pukul,
				'jml_set_tangkap' 	=> $set_tangkap, 
				'jml_set_lempar' 	=> $set_lempar, 
				'jml_rep_lari' 		=> $rep_lari, 
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

		public function updateStatus($id_seleksi)
		{
			$data = array('status_seleksi'	=> 'Selesai', );
			$this->db->where('id_seleksi', $id_seleksi);
			$result = $this->db->update('list_seleksi', $data);
			return $result;
		}
	/*MANAJEMEN SELEKSI*/

	/*MANAJEMEN BOBOT*/
		public function getBobot()
		{
			$query = $this->db->get('bobot_tes');
			return $query->result();
		}

		public function cekJumlahBobotSeleksi($id)
		{
			$this->db->select_sum('nilai_bobot_tes');
			$this->db->where_not_in('id_bobot_tes', $id);
			$query = $this->db->get('bobot_tes');
			return $query->result();

		}

		public function updateBobotSeleksi($id,$jenis_tes,$nilai_bobot_tes)
		{
			$data = array(
				'jenis_tes' => $jenis_tes, 
				'nilai_bobot_tes' 	=> $nilai_bobot_tes, 
			);
			$this->db->where('id_bobot_tes', $id);
			$result = $this->db->update('bobot_tes', $data);
			return $result;
		}
	/*MANAJEMEN BOBOT*/

	/*MANAJEMEN SUB BOBOT*/
		public function getSubBobot($id)
		{
			$this->db->where('id_bobot_tes', $id);
			$query = $this->db->get('bobot_sub_tes');
			return $query->result();
		}

		public function cekJumlahBobotSubSeleksi($id,$id_jenis_tes)
		{
			$this->db->select('nilai_bobot_sub_tes');
			$this->db->where('id_bobot_tes', $id_jenis_tes);
			$this->db->where('id_bobot_sub_tes !=', $id);
			$query = $this->db->get('bobot_sub_tes');
			return $query->result();

		}

		public function updateBobotSubSeleksi($id,$nilai_bobot_sub_tes)
		{
			$data = array(
				'nilai_bobot_sub_tes' 	=> $nilai_bobot_sub_tes, 
			);
			$this->db->where('id_bobot_sub_tes', $id);
			$result = $this->db->update('bobot_sub_tes', $data);
			return $result;
		}
	/*MANAJEMEN SUB BOBOT*/

	/*MANAJEMEN KONVERSI NILAI*/
		public function getNilaiKonversi($id)
		{
			$this->db->where('id_bobot_tes', $id);
			$query = $this->db->get('konversi');
			return $query->result();
		}

		public function updateNilaiKonversi($id,$bts_bawah,$bts_atas)
		{
			$data = array(
				'bts_atas' 	=> $bts_atas, 
				'bts_bawah'	=> $bts_bawah
			);
			$this->db->where('id_konversi', $id);
			$result = $this->db->update('konversi', $data);
			return $result;
		}
	/*MANAJEMEN KONVERSI NILAI*/

	/*MANAJEMEN NILAI STANDAR*/
		public function getNilaiStandar()
		{
			$query = $this->db->get('nilai_standar');
			return $query->result();
		}

		public function updateNilaiStandar($id,$nilai_std)
		{
			$data = array(
				'nilai_standar' 	=> $nilai_std, 
			);
			$this->db->where('id_nilai_standar', $id);
			$result = $this->db->update('nilai_standar', $data);
			return $result;
		}
	/*MANAJEMEN NILAI STANDAR*/

	/*PERHITUNGAN METODE*/
		public function getPesertaSeleksi($id_seleksi,$tabel,$status)
		{
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('status', $status);
			// $this->db->where('id_bobot_tes', 2);
			$query = $this->db->get($tabel);
			return $query->result_array();
		}

		public function getNilaiStd($id_bobot_tes)
		{
			$this->db->where('id_bobot_tes', $id_bobot_tes);
			return $this->db->get('nilai_standar')->row()->nilai_standar;
		}

		public function getNilaiStdSeluruhTes()
		{
			$this->db->select_sum('nilai_standar');
			$query = $this->db->get('nilai_standar'); 
			return $query->result();
		}

		public function getNilaiBobotSubTes($id_bobot_tes,$jenis_sub_tes)
		{
			$this->db->where('id_bobot_tes', $id_bobot_tes);
			$this->db->where('jenis_sub_tes', $jenis_sub_tes);
			$query = $this->db->get('bobot_sub_tes');
			return $query->row();
		}

		public function getMaxNilaiTes($id_seleksi,$id_bobot_tes,$kolom)
		{
			$this->db->select_max($kolom);
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_bobot_tes', $id_bobot_tes);
			return $this->db->get('nilai_tes')->row()->$kolom;
		}

		public function getMinNilaiTes($id_seleksi,$id_bobot_tes,$kolom)
		{
			$this->db->select_min($kolom);
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_bobot_tes', $id_bobot_tes);
			return $this->db->get('nilai_tes')->row()->$kolom;
		}

		public function hitungAvgSubTes($id_seleksi,$id_akun,$id_bobot_sub_tes)
		{
			$this->db->select_avg('nilai_konversi');
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_akun', $id_akun);
			$this->db->where('id_bobot_sub_tes', $id_bobot_sub_tes);
			$query = $this->db->get('nilai_per_tes');
			return $query->row();
		}

		public function insertNilaiTes($id_akun,$nama_peserta,$id_seleksi,$id_bobot_tes,$nilai_keterampilan,$nilai_unjuk_kerja,$status_per_tes)
		{
			$data = array(
				'id_akun' => $id_akun,
				'nama_peserta' => $nama_peserta, 
				'id_seleksi' => $id_seleksi,
				'id_bobot_tes' => $id_bobot_tes,
				'nilai_tes_keterampilan' => $nilai_keterampilan,
				'nilai_tes_unjuk_kerja' => $nilai_unjuk_kerja,
				'status' => $status_per_tes,
			);
			return $this->db->insert('nilai_tes', $data);
		}

		public function updateNilaiTes($id_akun,$id_seleksi,$id_bobot_tes,$nilai_s,$nilai_r)
		{
			$data = array(
				'nilai_si' => $nilai_s,
				'nilai_ri' => $nilai_r,
			);
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_akun', $id_akun);
			$this->db->where('id_bobot_tes', $id_bobot_tes);
			$result = $this->db->update('nilai_tes', $data);
			return $result;
		}

		public function updateNilaiQTes($id_akun,$id_seleksi,$id_bobot_tes,$nilai_q1,$nilai_q2,$nilai_q3)
		{
			$data = array(
				'nilai_q1' => $nilai_q1,
				'nilai_q2' => $nilai_q2,
				'nilai_q3' => $nilai_q3,
			);
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_akun', $id_akun);
			$this->db->where('id_bobot_tes', $id_bobot_tes);
			$result = $this->db->update('nilai_tes', $data);
			return $result;
		}

		public function updateNilaiSeleksi($id_akun,$id_seleksi,$tes_pukul,$tes_tangkap,$tes_lempar,$tes_lari,$status)
		{
			$data = array(
				'tes_pukul' => $tes_pukul,
				'tes_tangkap' => $tes_tangkap, 
				'tes_lempar' => $tes_lempar,
				'tes_lari' => $tes_lari,
				'status' => $status
			);
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_akun', $id_akun);
			$result = $this->db->update('list_peserta', $data);
			return $result;
		}

		public function updateStatusPeserta($id_akun,$id_seleksi,$status)
		{
			$data = array(
				'tes_pukul' => $tes_pukul,
				'tes_tangkap' => $tes_tangkap, 
				'tes_lempar' => $tes_lempar,
				'tes_lari' => $tes_lari,
			);
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_akun', $id_akun);
			$result = $this->db->update('list_peserta', $data);
			return $result;
		}

		public function getMaxNilaiSeleksi($id_seleksi,$kolom)
		{
			$this->db->select_max($kolom);
			$this->db->where('id_seleksi', $id_seleksi);
			return $this->db->get('list_peserta')->row()->$kolom;
		}

		public function getMinNilaiSeleksi($id_seleksi,$kolom)
		{
			$this->db->select_min($kolom);
			$this->db->where('id_seleksi', $id_seleksi);
			return $this->db->get('list_peserta')->row()->$kolom;
		}

		public function getNilaiBobotTes($id_bobot_tes)
		{
			$this->db->where('id_bobot_tes', $id_bobot_tes);
			$query = $this->db->get('bobot_tes');
			return $query->row();
		}

		public function updateNilaiSiRiSeleksi($id_akun,$id_seleksi,$nilai_s,$nilai_r)
		{
			$data = array(
				'nilai_si' => $nilai_s,
				'nilai_ri' => $nilai_r,
			);
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_akun', $id_akun);
			$result = $this->db->update('list_peserta', $data);
			return $result;
		}

		public function updateNilaiQiSeleksi($id_akun,$id_seleksi,$nilai_q1,$nilai_q2,$nilai_q3)
		{
			$data = array(
				'nilai_q1' => $nilai_q1,
				'nilai_q2' => $nilai_q2,
				'nilai_q3' => $nilai_q3,
			);
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_akun', $id_akun);
			$result = $this->db->update('list_peserta', $data);
			return $result;
		}
	/*PERHITUNGAN METODE*/

	/*MANAJEMEN HASIL SELEKSI*/
		public function getInfoSeleksi($id_seleksi)
		{
			$this->db->where('id_seleksi', $id_seleksi);
			$query = $this->db->get('list_seleksi');
			return $query->result();
		}

		public function countPeserta($id_seleksi)
		{
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('status', 'Lulus');
			$query = $this->db->get('list_peserta');
			return $query->num_rows();
		}	

		public function getHasil($id_seleksi)
		{
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->order_by('nilai_q2','asc');
			$query = $this->db->get('list_peserta');
			return $query->result();
		}

		public function getNilai($id_seleksi)
		{
			$this->db->where('id_seleksi', $id_seleksi);
			$query = $this->db->get('nilai_per_tes');
			return $query->result();
		}

		public function getRankPerTes($id_seleksi,$id_bobot_tes)
		{
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_bobot_tes', $id_bobot_tes);
			$this->db->order_by('nilai_q2','asc');
			$query = $this->db->get('nilai_tes');
			return $query->result();
		}

		public function getRankLari($id_seleksi,$id_bobot_tes)
		{
			$this->db->select('*, min(nilai_asli) AS nilai_min');
			$this->db->where('id_seleksi', $id_seleksi);
			$this->db->where('id_bobot_tes', $id_bobot_tes);
			$this->db->group_by('id_akun');
			$this->db->order_by('nilai_min','asc');
			$query = $this->db->get('nilai_per_tes');
			return $query->result();
		}
	/*MANAJEMEN HASIL SELEKSI*/

	}
	
	/* End of file M_admin.php */
	/* Location: ./application/models/M_admin.php */
?>