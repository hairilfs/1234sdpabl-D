<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
 function __construct() {
  parent::__construct();

  $this->load->model('m_sdpa');
  $this->auth->cek_auth();
  $this->load->helper(array('form', 'url'));
}


function index() {
  $asd = $this->session->userdata('u_id');
  $ambil_akun = $this->m_sdpa->ambil_user($asd);

  $this->load->library('user_agent');

  $stat = $this->session->userdata('lvl');

  if ($stat=="admin"){
    $this->template->load('vtemplate','sdpa_bl/hello');

  } elseif ($stat == "guru") {
    $data = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
    $data2 = $this->m_sdpa->get_profile_guru("where employee_id in (select b.Employee_id from walikelas b) and employee_id = '$asd'");
    $this->template->load('vtemplate_guru','sdpa_bl/hello_guru', array('isi' => $data, 'isi2' => $data2));

  } else {
    echo "user";
    echo "<a href='".base_url()."index.php/dashboard/logout"."'> logout</a>";

  }
}

function login() {
  $session = $this->session->userdata('isLogin');

  if($session == FALSE) {

    $this->load->view('sdpa_bl/login.php');

  } else {

    redirect('dashboard');

  }
}

function logout() {

  $this->session->sess_destroy();
  redirect('login','refresh');

}


public function master_guru() {

  $data = $this->m_sdpa->get_data_guru();
  $this->template->load('vtemplate','sdpa_bl/v_lihat_guru', array('isi' => $data));

}

public function master_profile_guru() {
  $asd = $this->session->userdata('u_id');
  $data = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
  $data2 = $this->m_sdpa->get_profile_guru("where employee_id in (select b.Employee_id from walikelas b) and employee_id = '$asd'");
  $this->template->load('vtemplate_guru','sdpa_bl/v_profile_guru', array('isi' => $data, 'isi2' => $data2));

}

public function master_akun_guru() {
  $asd = $this->session->userdata('u_id');
  $data = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
  $data2 = $this->m_sdpa->get_profile_guru("where employee_id in (select b.Employee_id from walikelas b) and employee_id = '$asd'");
  $this->template->load('vtemplate_guru','sdpa_bl/v_akun_guru', array('isi' => $data, 'isi2' => $data2));

}

public function master_kelas() {

  $data = $this->m_sdpa->get_data_kelas();
  $this->template->load('vtemplate','sdpa_bl/v_lihat_kelas', array('isi' => $data));

}

public function master_mapel() {

  $data = $this->m_sdpa->get_data_mapel();
  $this->template->load('vtemplate','sdpa_bl/v_lihat_mapel', array('isi' => $data));

}

public function master_peserta() {

  $data = $this->m_sdpa->get_data_peserta();
  $this->template->load('vtemplate','sdpa_bl/v_lihat_peserta', array('isi' => $data));

}

public function master_jadwal() {

  $data = $this->m_sdpa->get_data_jadwal();
  $data2 = $this->m_sdpa->get_data_mapel();
  $this->template->load('vtemplate','sdpa_bl/v_lihat_jadwal', array('isi' => $data, 'isi2' => $data2));

}

public function master_jadwal_guru() {

  $asd    = $this->session->userdata('u_id');
  $data   = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
  $data4  = $this->m_sdpa->get_data_jadwal_guru("where a.employee_id=b.employee_id AND a.kd_mapel=c.kd_mapel AND a.kd_kelas=d.kd_kelas AND a.employee_id = '$asd' ");
  $data2  = $this->m_sdpa->get_profile_guru("where employee_id in (select b.Employee_id from walikelas b) and employee_id = '$asd'");
  $this->template->load('vtemplate_guru','sdpa_bl/v_lihat_jadwal_guru', array('isi' => $data, 'isi4' => $data4, 'isi2' => $data2));

}

public function master_walikelas_data_siswa() {

  $asd    = $this->session->userdata('u_id');
  $data   = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
  $data4  = $this->m_sdpa->get_data_jadwal_guru("where a.employee_id=b.employee_id AND a.kd_mapel=c.kd_mapel AND a.kd_kelas=d.kd_kelas AND a.employee_id = '$asd' ");
  $data2  =$this->m_sdpa->get_profile_guru("where employee_id in (select b.Employee_id from walikelas b) and employee_id = '$asd'");
  $data3  = $this->m_sdpa->getWalikelasDataSiswa("where a.employee_id=e.Employee_id and b.kd_kelas=d.kd_kelas and c.NIS=d.nis and d.kd_kelas=e.Kd_kelas and e.Employee_id='$asd' ");

  $this->template->load('vtemplate_guru','sdpa_bl/v_lihat_siswa_walikelas', array('isi' => $data, 'isi4' => $data4, 'isi3' => $data3, 'isi2' => $data2));

}

public function pilih_tahun() {
  $asd = $this->session->userdata('u_id');
  $data = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
  $data2 = $this->m_sdpa->get_profile_guru("where employee_id in (select b.Employee_id from walikelas b) and employee_id = '$asd'");
  $this->template->load('vtemplate_guru','sdpa_bl/v_penilaian_guru', array('isi' => $data, 'isi2' => $data2));
}

public function daftar_jadwal() {
  $asd = $this->session->userdata('u_id');
  $tahun     = isset($_POST['thn_ajar']) ? $_POST['thn_ajar'] : '' ;
  $semester  = isset($_POST['semester']) ? $_POST['semester'] : '' ;

  $data = $this->m_sdpa->get_data_jadwal("where thn_ajar='$tahun' and semester='$semester' and employee_id='$asd' ");
  $data2 = $this->m_sdpa->get_data_mapel();
  $data3 = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
  $data4 = $this->m_sdpa->get_profile_guru("where employee_id in (select b.Employee_id from walikelas b) and employee_id = '$asd'");

  $this->template->load('vtemplate_guru','sdpa_bl/v_daftar_jadwal', array('isi_jadwal' => $data, 'isi_mapel' => $data2, 'isi' => $data3, 'isi2' => $data4));
}


public function master_nilai($semester,$kelas,$jadwal) {
  if(isset($kelas) AND isset($jadwal)) {
    $asd = $this->session->userdata('u_id');
    $data_guru = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
    $data_peserta = $this->m_sdpa->get_data_peserta("where kd_kelas = '$kelas' ");
    $data_siswa = $this->m_sdpa->get_data_siswa();
    $data_latihan = $this->m_sdpa->get_data_latihan();
    $data_kuis = $this->m_sdpa->get_data_kuis();
    $data_uas = $this->m_sdpa->get_data_uas();
    $data_uts = $this->m_sdpa->get_data_uts();
    $data2 = $this->m_sdpa->get_profile_guru("where employee_id in (select b.Employee_id from walikelas b) and employee_id = '$asd'");

    $this->template->load('vtemplate_guru','sdpa_bl/v_data_nilai', array('data_latihan' => $data_latihan, 'a'=> $jadwal, 'isi' => $data_guru,
    'isi_peserta' => $data_peserta, 'isi_siswa' => $data_siswa, 'data_kuis' => $data_kuis, 'data_uas' => $data_uas, 'data_uts' => $data_uts, 'isi2' => $data2));
  } else {
    redirect("dashboard");
  }
}

// ISI LATIHAN
public function isi_latihan($semester, $kelas, $jadwal) {
  $asd = $this->session->userdata('u_id');
  $data_guru = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
  $data_peserta = $this->m_sdpa->get_data_peserta("where kd_kelas = '$kelas' ");
  $data_siswa = $this->m_sdpa->get_data_siswa();
  // $data_latihan = $this->m_sdpa->get_data_latihan();

  $query = $this->db->query("select * from latihan where kd_jadwal='$jadwal'");
  $maxdat = $this->m_sdpa->cek_max_lat("where kd_jadwal='$jadwal' ");
  foreach ($maxdat as $keymax) {
  }
  $isimax = $keymax['maxlat'];
  if($query->num_rows() > 0 ) {
    $a = substr($isimax, -1);
    $b = substr($isimax,0,5); //LT0001
    $c = $a+1;
    $kd_latihan = $b.$c;
  } else {
    $kd_latihan = "LT0001";
  }

  $tahun_skrng = date("Y");
  $tahun_depan = date("Y")+1;
  $tahun_yg_dicari = $tahun_skrng."/".$tahun_depan;
  foreach ($data_peserta as $key_p) {
    $as = $key_p['nis'];
    $nilai_latihan = array(
      'kd_lat' => $kd_latihan,
      'kd_jadwal'=> $jadwal,
      'nis' => $key_p['nis'],
      'nilai' => $_POST[$as],
      'tahun' => $tahun_yg_dicari,
      'semester' => $semester
    );
    $this->m_sdpa->insert_data_latihan('latihan', $nilai_latihan);
  }
  redirect("dashboard/master_nilai/$semester/$kelas/$jadwal");
}

// ISI KUIS
public function isi_kuis($semester, $kelas, $jadwal) {
  $asd = $this->session->userdata('u_id');
  $data_guru = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
  $data_peserta = $this->m_sdpa->get_data_peserta("where kd_kelas = '$kelas' ");
  $data_siswa = $this->m_sdpa->get_data_siswa();

  $query = $this->db->query("select * from kuis where kd_jadwal='$jadwal'");
  $maxdat = $this->m_sdpa->cek_max_kuis("where kd_jadwal='$jadwal' ");
  foreach ($maxdat as $keymax) {
  }
  $isimax = $keymax['maxkuis'];
  if($query->num_rows() > 0 ) {
    $a = substr($isimax, -1);
    $b = substr($isimax,0,5); //QZ0001
    $c = $a+1;
    $kd_kuis = $b.$c;
  } else {
    $kd_kuis = "QZ0001";
  }

  $tahun_skrng = date("Y");
  $tahun_depan = date("Y")+1;
  $tahun_yg_dicari = $tahun_skrng."/".$tahun_depan;
  foreach ($data_peserta as $key_p) {
    $as = $key_p['nis'];
    $nilai_kuis = array(
      'kd_kuis' => $kd_kuis,
      'kd_jadwal'=> $jadwal,
      'nis' => $key_p['nis'],
      'nilai' => $_POST[$as],
      'tahun' => $tahun_yg_dicari,
      'semester' => $semester
    );
    $this->m_sdpa->insert_data_kuis('kuis', $nilai_kuis);
  }
  redirect("dashboard/master_nilai/$semester/$kelas/$jadwal");
}

// ISI UAS
public function isi_uas($semester, $kelas, $jadwal) {
  $asd = $this->session->userdata('u_id');
  $data_guru = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
  $data_peserta = $this->m_sdpa->get_data_peserta("where kd_kelas = '$kelas' ");
  $data_siswa = $this->m_sdpa->get_data_siswa();

  $query = $this->db->query("select * from uas where kd_jadwal='$jadwal'");
  $maxdat = $this->m_sdpa->cek_max_uas("where kd_jadwal='$jadwal' ");
  foreach ($maxdat as $keymax) {
  }
  $isimax = $keymax['maxuas'];
  if($query->num_rows() > 0 ) {
    $a = substr($isimax, -1);
    $b = substr($isimax,0,5); //QZ0001
    $c = $a+1;
    $kd_uas = $b.$c;
  } else {
    $kd_uas = "UA0001";
  }

  $tahun_skrng = date("Y");
  $tahun_depan = date("Y")+1;
  $tahun_yg_dicari = $tahun_skrng."/".$tahun_depan;
  foreach ($data_peserta as $key_p) {
    $as = $key_p['nis'];
    $nilai_uas = array(
      'kd_uas' => $kd_uas,
      'kd_jadwal'=> $jadwal,
      'nis' => $key_p['nis'],
      'nilai' => $_POST[$as],
      'tahun' => $tahun_yg_dicari,
      'semester' => $semester
    );
    $this->m_sdpa->insert_data_uas('uas', $nilai_uas);
  }
  redirect("dashboard/master_nilai/$semester/$kelas/$jadwal");
}

// ISI UTS
public function isi_uts($semester, $kelas, $jadwal) {
  $asd = $this->session->userdata('u_id');
  $data_guru = $this->m_sdpa->get_profile_guru("where employee_id = '$asd' ");
  $data_peserta = $this->m_sdpa->get_data_peserta("where kd_kelas = '$kelas' ");
  $data_siswa = $this->m_sdpa->get_data_siswa();

  $query = $this->db->query("select * from uts where kd_jadwal='$jadwal'");
  $maxdat = $this->m_sdpa->cek_max_uts("where kd_jadwal='$jadwal' ");
  foreach ($maxdat as $keymax) {
  }
  $isimax = $keymax['maxuts'];
  if($query->num_rows() > 0 ) {
    $a = substr($isimax, -1);
    $b = substr($isimax,0,5); //QZ0001
    $c = $a+1;
    $kd_uts = $b.$c;
  } else {
    $kd_uts = "UT0001";
  }

  $tahun_skrng = date("Y");
  $tahun_depan = date("Y")+1;
  $tahun_yg_dicari = $tahun_skrng."/".$tahun_depan;
  foreach ($data_peserta as $key_p) {
    $as = $key_p['nis'];
    $nilai_uts = array(
      'kd_uts' => $kd_uts,
      'kd_jadwal'=> $jadwal,
      'nis' => $key_p['nis'],
      'nilai' => $_POST[$as],
      'tahun' => $tahun_yg_dicari,
      'semester' => $semester
    );
    $this->m_sdpa->insert_data_uts('uts', $nilai_uts);
  }
  redirect("dashboard/master_nilai/$semester/$kelas/$jadwal");
}

// CRUD GURU
public function do_insert_guru() {

  $this->load->library('upload');
  $nmfile                   = "file_".time();
  $config['upload_path']    = './assets/uploads/';
  $config['allowed_types']  = 'gif|jpg|png';
  $config['max_size']       = 2048;
  $config['max_width']      = 1024;
  $config['max_height']     = 768;
  $config['file_name']      = $nmfile;

  $this->upload->initialize($config);
  $this->upload->do_upload('foto');

  $gbr  = $this->upload->data();
  $foto = base_url()."assets/uploads/".$gbr['file_name'];

  $data_insert = array(
    'employee_id'       => $_POST['employee_id'],   'NIP'               => $_POST['nip'],
    'NUPTK'             => $_POST['nuptk'],         'nama_guru'         => $_POST['nama'],
    'tempat_lahir'      => $_POST['tmpt_lhr'],      'tanggal_lahir'     => $_POST['tgl_lhr'],
    'jenis_kelamin'     => $_POST['jenkel'],        'alamat'            => $_POST['alamat'],
    'agama'             => $_POST['agama'],         'kewarganegaraan'   => $_POST['kwngrn'],
    'warga_negara'      => $_POST['wrg_ngr'],       'status_anak'       => $_POST['stat_anak'],
    'anak_ke'           => $_POST['anak_ke'],       'status_pernikahan' => $_POST['stat_nikah'],
    'tahun_menikah'     => $_POST['thn_mnkh'],      'telp_rumah'        => $_POST['telp_rmh'],
    'no_hp'             => $_POST['no_hp'],         'email'             => $_POST['email'],
    'jml_saudara'       => $_POST['jml_sdr'],       'thn_mulai_tugas'   => $_POST['thn_tgs'],
    'no_sk_dinas'       => $_POST['no_sk_dns'],     'tgl_sk_dinas'      => $_POST['tgl_sk_dns'],
    'bdg_studi_ajar'    => $_POST['b_studi_ajar'],  'mutasi_dari'       => $_POST['mutasi_dari'],
    'no_sk_mutasi'      => $_POST['no_sk_mutasi'],  'stat_karyawan'     => $_POST['stat_kar'],
    'gol_darah'         => $_POST['gol_dar'],       'foto'              => $foto, //$_POST['foto'],
    'tempat_bekerja'    => $_POST['tmpt_krj'],      'jabatan'           => $_POST['jbtn'],
    'pangkat_golongan'  => $_POST['pgkt_gol'],      'stat_pegawai'      => $_POST['stat_pegawai'],
    'mengajar_dikelas'  => $_POST['mgjr_kls'],      'tugas_tambahan'    => $_POST['tgs_tmbhn'],
    'tgkt_jnjg_pddkn'   => $_POST['pddk_terakhir'], 'thn_msk_pddkn'     => $_POST['thn_msk_pddk'],
    'thn_lulus_pddkn'   => $_POST['thn_lls_pddk'],  'nama_bapak'        => $_POST['nm_bpk'],
    'nama_ibu'          => $_POST['nm_ibu'],        'nama_suami'        => $_POST['nm_sm'],
    'nama_istri'        => $_POST['nm_is'],         'tinggi_badan'      => $_POST['tg_bdn'],
    'berat_badan'       => $_POST['brt_bdn'],       'wajah'             => $_POST['wajah'],
    'rambut'            => $_POST['rambut'],        'pykt_derita'       => $_POST['riw_pykt']
    );

  $res = $this->m_sdpa->insert_data_guru('guru', $data_insert);

  if ($res >= 1) {
    $this->session->set_flashdata('pesan', 'Tambah data sukses!');
    redirect("dashboard/master_guru");

  } else {

    echo "Insert data gagal";

  }
}

public function do_edit_guru() {
  $this->load->library('upload');
  $nmfile                   = "file_".time();
  $config['upload_path']    = './assets/uploads/';
  $config['allowed_types']  = 'gif|jpg|png';
  $config['max_size']       = 2048;
  $config['max_width']      = 1024;
  $config['max_height']     = 768;
  $config['file_name']      = $nmfile;

  $this->upload->initialize($config);
  $this->upload->do_upload('foto');

  $gbr  = $this->upload->data();
  $foto = base_url()."assets/uploads/".$gbr['file_name'];

  $data_update = array(
    'employee_id'       => $_POST['employee_id'],   'NIP'               => $_POST['nip'],
    'NUPTK'             => $_POST['nuptk'],         'nama_guru'         => $_POST['nama'],
    'tempat_lahir'      => $_POST['tmpt_lhr'],      'tanggal_lahir'     => $_POST['tgl_lhr'],
    'jenis_kelamin'     => $_POST['jenkel'],        'alamat'            => $_POST['alamat'],
    'agama'             => $_POST['agama'],         'kewarganegaraan'   => $_POST['kwngrn'],
    'warga_negara'      => $_POST['wrg_ngr'],       'status_anak'       => $_POST['stat_anak'],
    'anak_ke'           => $_POST['anak_ke'],       'status_pernikahan' => $_POST['stat_nikah'],
    'tahun_menikah'     => $_POST['thn_mnkh'],      'telp_rumah'        => $_POST['telp_rmh'],
    'no_hp'             => $_POST['no_hp'],         'email'             => $_POST['email'],
    'jml_saudara'       => $_POST['jml_sdr'],       'thn_mulai_tugas'   => $_POST['thn_tgs'],
    'no_sk_dinas'       => $_POST['no_sk_dns'],     'tgl_sk_dinas'      => $_POST['tgl_sk_dns'],
    'bdg_studi_ajar'    => $_POST['b_studi_ajar'],  'mutasi_dari'       => $_POST['mutasi_dari'],
    'no_sk_mutasi'      => $_POST['no_sk_mutasi'],  'stat_karyawan'     => $_POST['stat_kar'],
    'gol_darah'         => $_POST['gol_dar'],       'foto'              => $foto,
    'tempat_bekerja'    => $_POST['tmpt_krj'],      'jabatan'           => $_POST['jbtn'],
    'pangkat_golongan'  => $_POST['pgkt_gol'],      'stat_pegawai'      => $_POST['stat_pegawai'],
    'mengajar_dikelas'  => $_POST['mgjr_kls'],      'tugas_tambahan'    => $_POST['tgs_tmbhn'],
    'tgkt_jnjg_pddkn'   => $_POST['pddk_terakhir'], 'thn_msk_pddkn'     => $_POST['thn_msk_pddk'],
    'thn_lulus_pddkn'   => $_POST['thn_lls_pddk'],  'nama_bapak'        => $_POST['nm_bpk'],
    'nama_ibu'          => $_POST['nm_ibu'],        'nama_suami'        => $_POST['nm_sm'],
    'nama_istri'        => $_POST['nm_is'],         'tinggi_badan'      => $_POST['tg_bdn'],
    'berat_badan'       => $_POST['brt_bdn'],       'wajah'             => $_POST['wajah'],
    'rambut'            => $_POST['rambut'],        'pykt_derita'       => $_POST['riw_pykt']
    );

  $res = $this->m_sdpa->update_data_guru('guru', $data_update, array('employee_id' => $_POST['employee_id']) );

  if ($res >= 1) {

    $this->session->set_flashdata('pesan', 'Update data sukses!');
    redirect("dashboard/master_guru");

  } else {

    echo "Update data gagal";

  }
}

public function do_edit_akun_guru() {
  $asd = $this->session->userdata('u_id');
  $q = $this->m_sdpa->get_pass_guru("where id_user = '$asd' ");
  foreach($q as $row)  {

  $a = $row['password'];
  }

  $nowpass   = md5($_POST['nowpass']);
  $newpass   = $_POST['newpass'];
  $renewpass = $_POST['renewpass'];
  $wew = md5($_POST['renewpass']);
  $data_update = array(
    'password'  => $wew
    );

  if($a == $nowpass) {
    if ($newpass == $renewpass) {
      $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button><p align="center">Ubah password SUKSES!</p></div>';
      $res = $this->m_sdpa->update_akun_guru('user', $data_update, array('id_user' => $asd) );

    } else {
      $notif = '<div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button><p align="center">Pengulangan password tidak sama, ubah password GAGAL!</p></div>';
    }
  } else {
    $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Password saat ini tidak sama, ubah password GAGAL!</p></div>';
  }
    $this->session->set_flashdata('pesan', $notif);
    redirect("dashboard/master_akun_guru");

}

public function do_delete_guru($employee_id)
  {
    $res = $this->m_sdpa->delete_data_guru('guru', array('employee_id' => $employee_id));

    if ($res >= 1) {

      $this->session->set_flashdata('pesan', 'Delete data sukses!');
      redirect("dashboard/master_guru");

    } else {

      echo "Delete data gagal";

    }
  }

// CRUD KELAS
public function do_insert_kelas() {

  $data_insert = array(
    'kd_kelas'  => $_POST['kd_kelas'],
    'nm_kelas'  => $_POST['nm_kelas'],
    'kapasitas' => $_POST['kapasitas']
    );

  $res = $this->m_sdpa->insert_data_kelas('kelas', $data_insert);

  if ($res >= 1) {
    $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Tambah data SUKSES!</p></div>';
    // $notif = "<h2 class='jumbotron'> Tambah kelas SUKSES! </h2>";
  } else {
    $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>Tambah data GAGAL!</div>';
    // $notif = "<h2 class='jumbotron'> Tambah kelas GAGAL! </h2>";
  }
    $this->session->set_flashdata('pesan', $notif);
    redirect("dashboard/master_kelas");

}

public function do_edit_kelas() {
  $data_update= array(
    'kd_kelas'  => $_POST['kd_kelas'],
    'nm_kelas'  => $_POST['nm_kelas'],
    'kapasitas' => $_POST['kapasitas']
    );

  $res = $this->m_sdpa->update_data_kelas('kelas', $data_update, array('kd_kelas' => $_POST['kd_kelas']) );

  if ($res >= 1) {
    $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Ubah data SUKSES!</p></div>';
  } else {
    $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Ubah data GAGAL!</p></div>';
  }
    $this->session->set_flashdata('pesan', $notif);
    redirect("dashboard/master_kelas");
}

public function do_delete_kelas($kd_kelas) {
    $res = $this->m_sdpa->delete_data_kelas('kelas', array('kd_kelas' => $kd_kelas));

    if ($res >= 1) {
      $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button><p align="center">Hapus data SUKSES!</p></div>';
    } else {
      $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button><p align="center">Hapus data GAGAL!</p></div>';
    }
      $this->session->set_flashdata('pesan', $notif);
      redirect("dashboard/master_kelas");
  }

// CRUD MAPEL
public function do_insert_mapel() {

  $data_insert = array(
    'kd_mapel'  => $_POST['kd_mapel'],
    'nm_mapel'  => $_POST['nm_mapel'],
    'kkm'       => $_POST['kkm']
    );

  $res = $this->m_sdpa->insert_data_mapel('mapel', $data_insert);
  if ($res >= 1) {
    $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Tambah data SUKSES!</p></div>';
  } else {
    $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Tambah data GAGAL!</p></div>';
  }
    $this->session->set_flashdata('pesan', $notif);
    redirect("dashboard/master_mapel");
}

public function do_edit_mapel() {
  $data_update= array(
    'kd_mapel'  => $_POST['kd_mapel'],
    'nm_mapel'  => $_POST['nm_mapel'],
    'kkm'       => $_POST['kkm']
    );

  $res = $this->m_sdpa->update_data_mapel('mapel', $data_update, array('kd_mapel' => $_POST['kd_mapel']) );

  if ($res >= 1) {
    $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Ubah data SUKSES!</p></div>';
  } else {
    $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Ubah data GAGAL!</p></div>';
  }
    $this->session->set_flashdata('pesan', $notif);
    redirect("dashboard/master_mapel");
}

public function do_delete_mapel($kd_mapel)
  {
    $res = $this->m_sdpa->delete_data_mapel('mapel', array('kd_mapel' => $kd_mapel));

    if ($res >= 1) {
      $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button><p align="center">Hapus data SUKSES!</p></div>';
    } else {
      $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button><p align="center">Hapus data GAGAL!</p></div>';
    }
      $this->session->set_flashdata('pesan', $notif);
      redirect("dashboard/master_mapel");
  }

// CRUD PESERTA
public function do_insert_peserta() {

  $data_insert = array(
    'nis'       => $_POST['nis'],
    'kd_kelas'  => $_POST['kd_kelas'],
    'thn_ajar'  => $_POST['thn_ajar']
    );

  $res = $this->m_sdpa->insert_data_peserta('peserta', $data_insert);
  if ($res >= 1) {
    $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Tambah data SUKSES!</p></div>';
  } else {
    $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Tambah data GAGAL!</p></div>';
  }
    $this->session->set_flashdata('pesan', $notif);
    redirect("dashboard/master_peserta");
}

public function do_edit_peserta() {
  $data_update= array(
    'nis'       => $_POST['nis'],
    'kd_kelas'  => $_POST['kd_kelas'],
    'thn_ajar'  => $_POST['thn_ajar']
    );

  $res = $this->m_sdpa->update_data_peserta('peserta', $data_update, array('nis' => $_POST['nis']) );

  if ($res >= 1) {
    $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Ubah data SUKSES!</p></div>';
  } else {
    $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Ubah data GAGAL!</p></div>';
  }
    $this->session->set_flashdata('pesan', $notif);
    redirect("dashboard/master_peserta");
}

public function do_delete_peserta($nis)
  {
    $res = $this->m_sdpa->delete_data_peserta('peserta', array('nis' => $nis));

    if ($res >= 1) {
      $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button><p align="center">Hapus data SUKSES!</p></div>';
    } else {
      $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button><p align="center">Hapus data GAGAL!</p></div>';
    }
      $this->session->set_flashdata('pesan', $notif);
      redirect("dashboard/master_peserta");
  }

// CRUD JADWAL
public function do_insert_jadwal() {

  $data_insert = array(
    'kd_jadwal'   => $_POST['kd_jadwal'],
    'thn_ajar'    => $_POST['thn_ajar'],
    'semester'    => $_POST['semester'],
    'kd_mapel'    => $_POST['kd_mapel'],
    'employee_id' => $_POST['employee_id'],
    'kd_kelas'    => $_POST['kd_kelas'],
    'hari'        => $_POST['hari'],
    'ruang'       => $_POST['ruang']
    );

  $res = $this->m_sdpa->insert_data_jadwal('jadwal', $data_insert);

  if ($res >= 1) {
    $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Tambah data SUKSES!</p></div>';
  } else {
    $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Tambah data GAGAL!</p></div>';
  }
    $this->session->set_flashdata('pesan', $notif);
    redirect("dashboard/master_jadwal");
}

public function do_edit_jadwal() {
  $data_update= array(
    'thn_ajar'    => $_POST['thn_ajar'],
    'semester'    => $_POST['semester'],
    'kd_mapel'    => $_POST['kd_mapel'],
    'employee_id' => $_POST['employee_id'],
    'kd_kelas'    => $_POST['kd_kelas'],
    'hari'        => $_POST['hari'],
    'ruang'       => $_POST['ruang']
    );

  $res = $this->m_sdpa->update_data_jadwal('jadwal', $data_update, array('kd_jadwal' => $_POST['kd_jadwal']) );

  if ($res >= 1) {
    $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Ubah data SUKSES!</p></div>';
  } else {
    $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button><p align="center">Ubah data GAGAL!</p></div>';
  }
    $this->session->set_flashdata('pesan', $notif);
    redirect("dashboard/master_jadwal");
}

public function do_delete_jadwal($kd_jadwal)
  {
    $res = $this->m_sdpa->delete_data_jadwal('jadwal', array('kd_jadwal' => $kd_jadwal));

    if ($res >= 1) {
      $notif = '<div class="alert alert-info alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button><p align="center">Hapus data SUKSES!</p></div>';
    } else {
      $notif = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button><p align="center">Hapus data GAGAL!</p></div>';
    }
      $this->session->set_flashdata('pesan', $notif);
      redirect("dashboard/master_jadwal");
  }

// function do_upload()
// {
//   if($this->input->post('upload'))
//   {
//     $config['upload_path'] = './uploads/';
//     $config['allowed_types'] = 'gif|jpg|png';
//     $config['max_size']    = '1024';
//     $config['max_width']  = '1024';
//     $config['max_height']  = '768';
//     $this->load->library('upload', $config);
//     if ( ! $this->upload->do_upload())
//     {
//       $error = array('error' => $this->upload->display_errors());
//       $this->load->view('upload_form', $error);
//     }
//     else
//     {
//       $data=$this->upload->data();
//       $this->thumb($data);
//       $file=array(
//         'img_name'=>$data['raw_name'],
//         'thumb_name'=>$data['raw_name'].'_thumb',
//         'ext'=>$data['file_ext'],
//         'upload_date'=>time()
//         );
//       $this->upload_model->add_image($file);
//       $data = array('upload_data' => $this->upload->data());
//       $this->load->view('upload_success', $data);
//     }
//   }
//   else
//   {
//     redirect(site_url('upload'));
//   }
// }

public function addData() {

  echo "<h2>Tambah data</h2>";
  $this->load->view('form_add');

}

public function doEdit($nim) {
  $mhs        = $this->m_sdpa->getMahasiswa("where nim = '$nim' ");
  $data       = array(
    'nim'   => $mhs[0]['nim'],
    'nama'  => $mhs[0]['nama'],
    'alamat'=> $mhs[0]['alamat']
    );

  $this->load->view('form_edit', $data);
}


/* Walikelas */

public function master_walikelas() {
  
    $data = $this->m_sdpa->getWalikelas();
    $data2  = $this->m_sdpa->getUser("where a.employee_id not in (select b.Employee_id from walikelas b)");
    $data3 = $this->m_sdpa->get_data_kelas();
    $this->template->load('vtemplate','sdpa_bl/v_lihat_walikelas', array('isi' => $data, 'isi2' => $data2, 'isi3' => $data3));

}

public function do_insert_walikelas() {
    $tahun_ajar_wali= $_POST['tahun_ajar_wali'];
    $employee_id    = $_POST['employee_id'];
    $nip  = $_POST['nip'];
    $kd_kelas       = $_POST['kd_kelas'];

    $a= "N";
    $data3 = $this->m_sdpa->getUser3("where id_user = '$employee_id' ");
    if(isset($data3)) {
      $a = "Y";
    } else {
      $a = "N";
    }

    $data_insert= array(
        'Tahun_ajar_wali'   => $tahun_ajar_wali,  
        'Employee_id'       => $employee_id,
        'NIP'  => $nip,
        'Kd_kelas'          => $kd_kelas
    );

    $data_update= array(
        'walikelas' => $a
    );

    $res2 = $this->m_sdpa->updateData('user', $data_update, array('id_user' =>$employee_id));
    
    $res = $this->m_sdpa->insertData('walikelas', $data_insert);
    
    if ($res >= 1 || $res2 >=1 ) {
    
        $this->session->set_flashdata('pesan', 'Tambah data sukses!');
        redirect("dashboard/master_walikelas");
    
    } else {
      
        echo "Insert data gagal";
    
    }
}

public function do_edit_walikelas() {
    $kd_walikelas     = $_POST['kd_walikelas'];
    $tahun_ajar_wali  = $_POST['tahun_ajar_wali'];
    $employee_id      = $_POST['employee_id'];
    $nip        = $_POST['nip'];
    $kd_kelas   = $_POST['kd_kelas'];

    $data_update= array(
        'Tahun_ajar_wali'   => $tahun_ajar_wali,
        'Employee_id'       => $employee_id,
        'NIP'       => $nip,
        'Kd_kelas'  => $kd_kelas
    );

    $res = $this->m_sdpa->updateData('walikelas', $data_update, array('Kd_walikelas' =>$kd_walikelas));
    
    if ($res >= 1) {
    
      $this->session->set_flashdata('pesan', 'Update data sukses!');
      redirect("dashboard/master_walikelas");

    } else {

      echo "Update data gagal";

    }
}

public function do_delete_walikelas($kd_walikelas) {
    $res = $this->m_sdpa->deleteData('walikelas', array('Kd_walikelas' => $kd_walikelas));

    if ($res >= 1) {

        $this->session->set_flashdata('pesan', 'Delete data sukses!');
        redirect("dashboard/master_walikelas");

    } else {

        echo "Delete data gagal";

    }
}

public function master_siswa() {
      
    $data = $this->m_sdpa->getSiswa();
    $this->template->load('vtemplate','sdpa_bl/v_lihat_siswa', array('isi' => $data));

}

public function do_insert_siswa() {
    $this->load->library('upload');
    $nmfile     = "file_".time(); 
    $config['upload_path']  = 'assets/uploads/';
    $config['allowed_types']= 'gif|jpg|png|jpeg|bmp'; 
    $config['max_size']     = '2048'; 
    $config['max_width']    = '1288'; 
    $config['max_height']   = '768'; 
    $config['file_name']    = $nmfile; 

    $this->upload->initialize($config);
    $this->upload->do_upload('filefoto');

    $nis        = $_POST['nis'];
    $nisn       = $_POST['nisn'];
    $nama       = $_POST['nama'];
    $tempat_lahir     = $_POST['tempat_lahir'];
    $tanggal_lahir    = $_POST['tanggal_lahir'];
    $agama      = $_POST['agama'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $alamat           = $_POST['alamat'];
    $nama_ayah  = $_POST['nama_ayah'];
    $nama_ibu   = $_POST['nama_ibu'];
    $kewarganegaraan  = $_POST['kewarganegaraan'];
    $warga_negara     = $_POST['warga_negara'];
    $status_anak      = $_POST['status_anak'];
    $anak_ke    = $_POST['anak_ke'];
    $jumlah_saudara   = $_POST['jumlah_saudara'];
    $telepon_rumah    = $_POST['telepon_rumah'];
    $nomor_hp         = $_POST['nomor_hp'];
    $tinggi_badan     = $_POST['tinggi_badan'];
    $berat_badan      = $_POST['berat_badan'];
    $wajah            = $_POST['wajah'];
    $rambut           = $_POST['rambut'];
    $golongan_darah   = $_POST['golongan_darah'];
    $penyakit_riwayat = $_POST['penyakit_riwayat'];
    $asal_sekolah     = $_POST['asal_sekolah'];
    $prestasi   = $_POST['prestasi'];
    $gbr        = $this->upload->data();
    $foto       = $gbr['file_name'];

    $data_insert= array(
        'NIS'   => $nis,  
        'NISN'  => $nisn,
        'Nama'  => $nama,
        'Tempat_lahir'    => $tempat_lahir,
        'Tanggal_lahir'   => $tanggal_lahir,
        'Agama' => $agama,
        'Jenis_kelamin'   => $jenis_kelamin,
        'Alamat'          => $alamat,
        'Nama_ayah'       => $nama_ayah,
        'Nama_ibu'        => $nama_ibu,
        'Kewarganegaraan' => $kewarganegaraan,
        'Warga_negara'    => $warga_negara,
        'Status_anak'     => $status_anak,
        'Anak_ke'         => $anak_ke,
        'Jumlah_saudara'  => $jumlah_saudara,
        'Telepon_rumah'   => $telepon_rumah,
        'Nomor_hp'        => $nomor_hp,
        'Tinggi_badan'    => $tinggi_badan,
        'Berat_badan'     => $berat_badan,
        'Wajah' => $wajah,
        'Rambut'=> $rambut,
        'Golongan_darah'  => $golongan_darah,
        'Penyakit_riwayat'=> $penyakit_riwayat,
        'Asal_sekolah'    => $asal_sekolah,
        'Prestasi'        => $prestasi,
        'Foto'  => $foto
    );
    
    $res = $this->m_sdpa->insertData('siswa', $data_insert);
    
    if ($res >= 1) {
    
        $this->session->set_flashdata('pesan', 'Tambah data sukses!');
        redirect("dashboard/master_siswa");
    
    } else {
      
        echo "Insert data gagal";
    
    }
}

public function do_edit_siswa() {
    $this->load->library('upload');
    $nmfile     = "file_".time(); 
    $config['upload_path']  = 'assets/uploads/';
    $config['allowed_types']= 'gif|jpg|png|jpeg|bmp'; 
    $config['max_size']     = '2048'; 
    $config['max_width']    = '1288'; 
    $config['max_height']   = '768'; 
    $config['file_name']    = $nmfile; 

    $this->upload->initialize($config);
    $this->upload->do_upload('filefoto');

    $nis        = $_POST['nis'];
    $nisn       = $_POST['nisn'];
    $nama       = $_POST['nama'];
    $tempat_lahir     = $_POST['tempat_lahir'];
    $tanggal_lahir    = $_POST['tanggal_lahir'];
    $agama      = $_POST['agama'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $alamat           = $_POST['alamat'];
    $nama_ayah  = $_POST['nama_ayah'];
    $nama_ibu   = $_POST['nama_ibu'];
    $kewarganegaraan  = $_POST['kewarganegaraan'];
    $warga_negara     = $_POST['warga_negara'];
    $status_anak      = $_POST['status_anak'];
    $anak_ke    = $_POST['anak_ke'];
    $jumlah_saudara   = $_POST['jumlah_saudara'];
    $telepon_rumah    = $_POST['telepon_rumah'];
    $nomor_hp         = $_POST['nomor_hp'];
    $tinggi_badan     = $_POST['tinggi_badan'];
    $berat_badan      = $_POST['berat_badan'];
    $wajah            = $_POST['wajah'];
    $rambut           = $_POST['rambut'];
    $golongan_darah   = $_POST['golongan_darah'];
    $penyakit_riwayat = $_POST['penyakit_riwayat'];
    $asal_sekolah     = $_POST['asal_sekolah'];
    $prestasi   = $_POST['prestasi'];
    $gbr        = $this->upload->data();
    $foto       = $gbr['file_name'];

    $data_update= array(
        'NISN'  => $nisn,
        'Nama'  => $nama,
        'Tempat_lahir'    => $tempat_lahir,
        'Tanggal_lahir'   => $tanggal_lahir,
        'Agama' => $agama,
        'Jenis_kelamin'   => $jenis_kelamin,
        'Alamat'          => $alamat,
        'Nama_ayah'       => $nama_ayah,
        'Nama_ibu'        => $nama_ibu,
        'Kewarganegaraan' => $kewarganegaraan,
        'Warga_negara'    => $warga_negara,
        'Status_anak'     => $status_anak,
        'Anak_ke'         => $anak_ke,
        'Jumlah_saudara'  => $jumlah_saudara,
        'Telepon_rumah'   => $telepon_rumah,
        'Nomor_hp'        => $nomor_hp,
        'Tinggi_badan'    => $tinggi_badan,
        'Berat_badan'     => $berat_badan,
        'Wajah' => $wajah,
        'Rambut'=> $rambut,
        'Golongan_darah'  => $golongan_darah,
        'Penyakit_riwayat'=> $penyakit_riwayat,
        'Asal_sekolah'    => $asal_sekolah,
        'Prestasi'        => $prestasi,
        'Foto'  => $foto
    );

    $res = $this->m_sdpa->updateData('siswa', $data_update, array('NIS' =>$nis));
    
    if ($res >= 1) {
    
      $this->session->set_flashdata('pesan', 'Update data sukses!');
      redirect("dashboard/master_siswa");

    } else {

      echo "Update data gagal";

    }
}

public function do_delete_siswa($nis) {
    $res = $this->m_sdpa->deleteData('siswa', array('NIS' => $nis));

    if ($res >= 1) {

        $this->session->set_flashdata('pesan', 'Delete data sukses!');
        redirect("dashboard/master_siswa");

    } else {

        echo "Delete data gagal";

    }
}

/* User */

public function master_user() {
  
    $data  = $this->m_sdpa->getUser("where a.employee_id not in (select b.id_user from user b)");
    $data2 = $this->m_sdpa->getUser2("where a.id_user = b.employee_id and (level = 'guru')");
    $data3 = $this->m_sdpa->getWalikelas();
    $this->template->load('vtemplate','sdpa_bl/v_lihat_user', array('isi' => $data, 'isi2' => $data2, 'isi3' => $data3));

}

public function do_insert_user() {
    $data3 = $this->m_sdpa->getWalikelas();

    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $a = "N";

    foreach ($data3 as $key3) {

        $x = isset($key3['Employee_id']) ? $key3['Employee_id'] : '';

        if($x == $user) {
            $a= "Y";
        } else {
            $a= "N";
        }
    }
                                        
    $level      = $_POST['level'];
    $password   = md5($_POST['password']);

    $data_insert= array(
        'id_user'   => $user, 
        'level'     => $level, 
        'password'  => $password,
        'walikelas' => $a
    );
    
    $res = $this->m_sdpa->insertData('user', $data_insert);
    
    if ($res >= 1) {
    
        $this->session->set_flashdata('pesan', 'Tambah data sukses!');
        redirect("dashboard/master_user");
    
    } else {
      
        echo "Insert data gagal";
    
    }
}

public function do_edit_user() {
    $id_user        = $_POST['user'];
    $level          = $_POST['level'];
    $password       = md5($_POST['password']);

    $data_update= array(
        'level'  => $level,
        'password'  => $password
    );

    $res = $this->m_sdpa->updateData('user', $data_update, array('id_user' =>$id_user));
    
    if ($res >= 1) {
    
      $this->session->set_flashdata('pesan', 'Update data sukses!');
      redirect("dashboard/master_user");

    } else {

      echo "Update data gagal";

    }
}

public function do_delete_user($id_user) {
    $res = $this->m_sdpa->deleteData('user', array('id_user' => $id_user));

    if ($res >= 1) {

        $this->session->set_flashdata('pesan', 'Delete data sukses!');
        redirect("dashboard/master_user");

    } else {

        echo "Delete data gagal";

    }
}

}
