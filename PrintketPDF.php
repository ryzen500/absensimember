<?php

require('plugin/fpdf/fpdf.php');
$pdf = new FPDF('P', 'mm','A4');

$pdf->AddPage();

$pdf->Date('d-m-Y H:i:s',25,5,27);
$pdf->Image('img/logo.jpeg',25,5,27);
$pdf->SetFont('Times','B',22);
$pdf->Cell(0,7,'Laporan Absen Keterangan',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',11);

$pdf->Cell(8,7,'No',1,0,'C');
$pdf->Cell(15,7,'Id',1,0,'C');
$pdf->Cell(40,7,'Nama',1,0,'C');
$pdf->Cell(23,7,'Keterangan',1,0,'C');
$pdf->Cell(40,7,'Alasan',1,0,'C');
$pdf->Cell(65,7,'Waktu',1,1,'C');

$pdf->SetFont('Times','',11);

//Membuat Koneksi ke database akademik
$host="localhost";
$user="root";
$password="";
$db="karyawansi";

$kon = mysqli_connect($host,$user,$password,$db);

$no=1;
$jk='';
//Query untuk mengambil data mahasiswa pada tabel mahasiswa
$hasil = mysqli_query($kon, "select * from tb_keterangan order by id asc");
while ($data = mysqli_fetch_array($hasil)){
    $pdf->Cell(8,7,$no,1,0);
    $pdf->Cell(15,7,$data['id_karyawan'],1,0);
    $pdf->Cell(40,7,$data['nama'],1,0);
    $pdf->Cell(23,7,$data['keterangan'],1,0);
    $pdf->Cell(40,7,$data['alasan'],1,0);
    $pdf->Cell(65,7,$data['waktu'],1,1);
    $no++;
}

$pdf->Output();
?>