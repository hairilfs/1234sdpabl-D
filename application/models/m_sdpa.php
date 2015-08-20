<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_sdpa extends CI_Model {

	var $tbl_mhs = 'mahasiswa';
	var $tbl_ktgr= 'kategori';
	var $konten  = 'konten';

	function cek_user($nip="", $password="") {

		$query = $this->db->get_where('user', array('id_user' => $nip, 'password' => $password));
		$query = $query->result_array();

		return $query;
	}

	function ambil_user($id) {
	    $query = $this->db->get_where('user', array('id_user' => $id));
	    $query = $query->result_array();

	    if($query) {
	        return $query[0];
	    }
  	}

	// CRUD UNIVERSAL

	public function get_data($table, $where = "") {
		$data = $this->db->query('select * from '.$table.' '.$where);
		return $data->result_array();
	}

	public function insert_data($table, $data) {
		$res = $this->db->insert($table, $data);
		return $res;
	}

	public function update_data($table, $data, $where) {
		$res = $this->db->update($table, $data, $where);
		return $res;
	}

	public function delete_data($table, $where) {
		$res = $this->db->delete($table, $where);
		return $res;
	}

	public function get_pass_guru($where = "") {
		$data = $this->db->query('select password from user '.$where);
		return $data->result_array();
	}

	// DATA LATIHAN
	// cek max latihan
	public function cek_max_lat($where) {
		$query = $this->db->query("select max(kd_lat) as maxlat from latihan ".$where);
		return $query->result_array();
	}

	// DATA KUIS
	// cek max kuis
	public function cek_max_kuis($where) {
		$query = $this->db->query("select max(kd_kuis) as maxkuis from kuis ".$where);
		return $query->result_array();
	}

	// DATA UTS
	// cek max uts
	public function cek_max_uts($where) {
		$query = $this->db->query("select max(kd_uts) as maxuts from uts ".$where);
		return $query->result_array();
	}

	// DATA UAS
	// cek max uas
	public function cek_max_uas($where) {
		$query = $this->db->query("select max(kd_uas) as maxuas from uas ".$where);
		return $query->result_array();
	}
	// stop here
	//DATA Jadwal Guru

	public function get_data_jadwal_guru($where = "", $asd="") {
		$data = $this->db->query("select b.nama_guru, d.nm_kelas, c.nm_mapel, a.hari, a.ruang, a.semester, a.thn_ajar, a.kd_jadwal from jadwal a, guru b, mapel c, kelas d ".$where);
		return $data->result_array();
	}

	/*walikelas*/
	public function getWalikelas($where = "") {
		$data = $this->db->query('select * from walikelas '.$where);
		return $data->result_array();
	}

	/*user*/
	public function getUser($where = "") {
		$data = $this->db->query('select * from guru a '.$where);
		return $data->result_array();

	}

	public function getUser2($where = "") {
		$data = $this->db->query('select * from user a, guru b '.$where);
		return $data->result_array();

	}

	// Walikelas data siswa
	public function getWalikelasDataSiswa($where = "") {
		$data = $this->db->query('select * from guru a, kelas b, siswa c, peserta d, walikelas e '.$where);
		return $data->result_array();

	}

}
