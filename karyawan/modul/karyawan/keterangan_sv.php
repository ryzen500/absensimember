<?php 

include 'koneksi.php';
if (isset($_POST['simpan'])) {
	
	$id = $_POST['id'];
	$id_karyawan = $_POST['id_karyawan'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$alasan = $_POST['alasan'];
	$waktu = $_POST['waktu'];
	$cari_waktu = $_POST['cari_waktu'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];

	//untuk gambar
	$bukti = $_FILES['bukti']['name'];
	$tmp = $_FILES['bukti']['tmp_name'];
	$buktibaru = date('dmYHis').$bukti;
	$path = "images/".$buktibaru;


}

if (move_uploaded_file($tmp, $path)) {
	$sql = "SELECT * FROM tb_keterangan WHERE id = '".$id."'";
	mysqli_query($koneksi, $sql);

}



// Untuk lia save yang ini disesuaikan sama  kolom table keterangan mu 
$query = "INSERT INTO
tb_keterangan (
  id_karyawan,
  nama,
  keterangan,
  alasan,
  waktu,
  cari_waktu,
  bukti,
  status
)
VALUES
(
  '$id_karyawan',
  '$nama',
  '$keterangan',
  '$alasan',
  '$waktu',
  '$cari_waktu',
  '$buktibaru',
  0
)
";
mysqli_query($koneksi, $query);

if ($query) {
	echo "<script>alert('Anda sudah memberi keterangan') </script>";
	echo '<script>window.history.back()</script>';
}else{
	echo "gagal";
}

 ?>