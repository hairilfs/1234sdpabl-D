<?php
// $this->load->library('fpdf');
$this->fpdf->FPDF("P","cm","A4");
// kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm
$this->fpdf->SetMargins(2.5,2.5,2.5,2.5);
/* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
di footer, nanti kita akan membuat page number dengan format : number page / total page
*/
$this->fpdf->AliasNbPages();
// AddPage merupakan fungsi untuk membuat halaman baru
$this->fpdf->AddPage();
// Setting Font : String Family, String Style, Font size
$this->fpdf->SetFont('Arial','B',12);
// $this->fpdf->Image(base_url()."assets/images/visa.png", 3, 3, 2,2);
$this->fpdf->Cell(0, 0, "Laporan Data Guru", 0, 1,'C');
$this->fpdf->Cell(0, 1, "SD Budi Luhur Pondok Aren", 0, 1,'C');
$this->fpdf->Cell(1, 1, "No.", 1, 0,'C');
$this->fpdf->Cell(2, 1, "Emp. ID", 1, 0,'C');
$this->fpdf->Cell(6, 1, "Nama", 1, 0,'C');
$this->fpdf->Cell(3, 1, "Jenis Kelamin", 1, 0,'C');
$this->fpdf->Cell(4, 1, "Agama", 1, 0,'C');
// $this->fpdf->Line(3,3,8,8);
$this->fpdf->Ln(1);
$no = 1;
foreach ($data_guru as $key_guru) {
  $this->fpdf->Cell(1, 1, $no, 1, 0,'C');
  $this->fpdf->Cell(2, 1, $key_guru['employee_id'], 1, 0,'C');
  $this->fpdf->Cell(6, 1, $key_guru['nama_guru'], 1, 0,'L');
  $this->fpdf->Cell(3, 1, $key_guru['jenis_kelamin'], 1, 0,'C');
  $this->fpdf->Cell(4, 1, $key_guru['agama'], 1, 1,'C');
  $no++;
}
$this->fpdf->Output("laporan.pdf","I");
?>
