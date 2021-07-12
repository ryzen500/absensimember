<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
	$id_karyawan = $_POST['id_karyawan'];
	$nama = $_POST['nama'];
	$waktu = $_POST['waktu'];
	$cari_waktu = $_POST['cari_waktu'];

}

$save = "INSERT INTO tb_absen SET id_karyawan='$id_karyawan', nama='$nama', waktu='$waktu', cari_waktu='$cari_waktu'";
mysqli_query($koneksi, $save);

if ($save) {
	echo "<script>alert('Anda sudah absen untuk hari ini') </script>";
	 echo "<script>window.location.href = \"index.php?m=awal\" </script>";	
}else{
	echo "kryptosssss";
}

 ?>