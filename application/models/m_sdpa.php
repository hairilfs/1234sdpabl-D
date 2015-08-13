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

  	public function update_login($data, $where) {

		$res = $this->db->update('user', $data, $where);

		return $res;

	}

	public function getKonten($where = "") {

		$data = $this->db->query('select * from konten '.$where);
		return $data;

	}

	public function insertData($namaTable, $data) {

		$res = $this->db->insert($namaTable, $data);

		return $res;

	}

	public function getKategori($where = "") {
		$data = $this->db->query('select * from kategori '.$where);
		return $data;
	}

	public function getMahasiswa($where = "") {
		$data = $this->db->query('select * from mahasiswa '.$where);
		return $data->result_array();
	}

	// cek baris data
	public function cek_baris_data($table) {
		$query = $this->db->query("select * from ".$table);
		return $query->result_array();
	}

	// ambil data guru
	public function get_data_guru($where = "") {
		$data = $this->db->query('select * from guru '.$where);
		return $data->result_array();
	}

	public function get_profile_guru($where = "") {
		$data = $this->db->query('select * from guru '.$where);
		return $data->result_array();
	}

	public function get_pass_guru($where = "") {
		$data = $this->db->query('select password from user '.$where);
		return $data->result_array();
	}

	public function insert_data_guru($namaTable, $data) {
		$res = $this->db->insert($namaTable, $data);
		return $res;
	}

	public function update_data_guru($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function update_akun_guru($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function delete_data_guru($namaTable, $where) {
		$res = $this->db->delete($namaTable, $where);
		return $res;
	}

	// ambil data siswa
	public function get_data_siswa($where = "") {
		$data = $this->db->query('select * from siswa '.$where);
		return $data->result_array();
	}

	public function get_profile_siswa($where = "") {
		$data = $this->db->query('select * from siswa '.$where);
		return $data->result_array();
	}

	public function get_pass_siswa($where = "") {
		$data = $this->db->query('select password from user '.$where);
		return $data->result_array();
	}

	public function insert_data_siswa($namaTable, $data) {
		$res = $this->db->insert($namaTable, $data);
		return $res;
	}

	public function update_data_siswa($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function update_akun_siswa($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function delete_data_siswa($namaTable, $where) {
		$res = $this->db->delete($namaTable, $where);
		return $res;
	}

	// ambil data kelas
	public function get_data_kelas($where = "") {
		$data = $this->db->query('select * from kelas '.$where);
		return $data->result_array();
	}

	public function insert_data_kelas($namaTable, $data) {
		$res = $this->db->insert($namaTable, $data);
		return $res;
	}

	public function update_data_kelas($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function delete_data_kelas($namaTable, $where) {
		$res = $this->db->delete($namaTable, $where);
		return $res;
	}

	// ambil data mapel
	public function get_data_mapel($where = "") {
		$data = $this->db->query('select * from mapel '.$where);
		return $data->result_array();
	}

	public function insert_data_mapel($namaTable, $data) {
		$res = $this->db->insert($namaTable, $data);
		return $res;
	}

	public function update_data_mapel($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function delete_data_mapel($namaTable, $where) {
		$res = $this->db->delete($namaTable, $where);
		return $res;
	}

	// ambil data peserta
	public function get_data_peserta($where = "") {
		$data = $this->db->query('select * from peserta '.$where);
		return $data->result_array();
	}

	public function insert_data_peserta($namaTable, $data) {
		$res = $this->db->insert($namaTable, $data);
		return $res;
	}

	public function update_data_peserta($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function delete_data_peserta($namaTable, $where) {
		$res = $this->db->delete($namaTable, $where);
		return $res;
	}

	// ambil data jadwal
	public function get_data_jadwal($where = "") {
		$data = $this->db->query('select * from jadwal '.$where);
		return $data->result_array();
	}

	public function insert_data_jadwal($namaTable, $data) {
		$res = $this->db->insert($namaTable, $data);
		return $res;
	}

	public function update_data_jadwal($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function delete_data_jadwal($namaTable, $where) {
		$res = $this->db->delete($namaTable, $where);
		return $res;
	}

	// DATA LATIHAN

	// cek max latihan
	public function cek_max_lat($where) {
		$query = $this->db->query("select max(kd_lat) as maxlat from latihan ".$where);
		return $query->result_array();
	}

	public function get_data_latihan($where = "") {
		$data = $this->db->query('select * from latihan '.$where);
		return $data->result_array();
	}

	public function insert_data_latihan($namaTable, $data) {
		$res = $this->db->insert($namaTable, $data);
		return $res;
	}

	public function update_data_latihan($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function delete_data_latihan($namaTable, $where) {
		$res = $this->db->delete($namaTable, $where);
		return $res;
	}

	// DATA KUIS
	// cek max kuis
	public function cek_max_kuis($where) {
		$query = $this->db->query("select max(kd_kuis) as maxkuis from kuis ".$where);
		return $query->result_array();
	}

	public function get_data_kuis($where = "") {
		$data = $this->db->query('select * from kuis '.$where);
		return $data->result_array();
	}

	public function insert_data_kuis($namaTable, $data) {
		$res = $this->db->insert($namaTable, $data);
		return $res;
	}

	public function update_data_kuis($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function delete_data_kuis($namaTable, $where) {
		$res = $this->db->delete($namaTable, $where);
		return $res;
	}

	// DATA UAS
	// cek max uas
	public function cek_max_uas($where) {
		$query = $this->db->query("select max(kd_uas) as maxuas from uas ".$where);
		return $query->result_array();
	}

	public function get_data_uas($where = "") {
		$data = $this->db->query('select * from uas '.$where);
		return $data->result_array();
	}

	public function insert_data_uas($namaTable, $data) {
		$res = $this->db->insert($namaTable, $data);
		return $res;
	}

	public function update_data_uas($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function delete_data_uas($namaTable, $where) {
		$res = $this->db->delete($namaTable, $where);
		return $res;
	}

	// DATA UTS
	// cek max uts
	public function cek_max_uts($where) {
		$query = $this->db->query("select max(kd_uts) as maxuts from uts ".$where);
		return $query->result_array();
	}

	public function get_data_uts($where = "") {
		$data = $this->db->query('select * from uts '.$where);
		return $data->result_array();
	}

	public function insert_data_uts($namaTable, $data) {
		$res = $this->db->insert($namaTable, $data);
		return $res;
	}

	public function update_data_uts($namaTable, $data, $where) {
		$res = $this->db->update($namaTable, $data, $where);
		return $res;
	}

	public function delete_data_uts($namaTable, $where) {
		$res = $this->db->delete($namaTable, $where);
		return $res;
	}

// ==================================================================
	public function updateData($namaTable, $data, $where) {

		$res = $this->db->update($namaTable, $data, $where);

		return $res;

	}

	public function deleteData($namaTable, $where) {

		$res = $this->db->delete($namaTable, $where);

		return $res;

	}

	//DATA Jadwal Guru

	public function get_data_jadwal_guru($where = "", $asd="") {
		// $this->db->select('*');    
		// $this->db->from('jadwal');
		// $this->db->join('guru', 'jadwal.employee_id = guru.employee_id');
		// $this->db->where('guru.employee_id', $asd);
		// $data = $this->db->get();
		$data = $this->db->query("select b.nama_guru, d.nm_kelas, c.nm_mapel, a.hari, a.ruang, a.semester, a.thn_ajar, a.kd_jadwal from jadwal a, guru b, mapel c, kelas d ".$where);

		return $data->result_array();
	}

	/*walikelas*/
	public function getWalikelas($where = "") {

		$data = $this->db->query('select * from walikelas '.$where);

		return $data->result_array();

	}

	/*siswa*/
	public function getSiswa($where = "") {

		$data = $this->db->query('select * from Siswa '.$where);

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

	public function getUser3($where = "") {

		$data = $this->db->query('select * from user '.$where);

		return $data->result_array();

	}

	// Walikelas data siswa

	public function getWalikelasDataSiswa($where = "") {

		$data = $this->db->query('select * from guru a, kelas b, siswa c, peserta d, walikelas e '.$where);

		return $data->result_array();

	}
}
