<?php
session_start(); 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	
	$id_karyawan = $_POST['id_karyawan'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];
	$tmp_tgl_lahir = $_POST['tmp_tgl_lahir'];
	$jenkel = $_POST['jenkel'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$no_tel = $_POST['no_tel'];
	$jabatan = $_POST['jabatan'];


	//untuk gambar
	$foto     = $_FILES['foto']['name'];
	$tmp      = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path     = "images/".$fotobaru;
}

if (move_uploaded_file($tmp, $path)) {
	$sql = "SELECT * FROM tb_karyawan WHERE id_karyawan = '".$id_karyawan."'";
	$tambah = mysqli_query($koneksi, $sql);
}

if ($row = mysqli_fetch_row($tambah)) {
echo "<script>alert('Data Dengan NIP = ".$id_karyawan." sudah ada') </script>";
		echo "<script>window.location.href = \"karyawan/login_karyawan.php\" </script>";

}

$query = "INSERT INTO tb_karyawan (id_karyawan,username,`password`,nama,tmp_tgl_lahir,jenkel,agama,alamat,no_tel,jabatan,foto) VALUES('$id_karyawan','$username','$password','$nama','$tmp_tgl_lahir','$jenkel','$agama','$alamat','$no_tel','$jabatan','$fotobaru')";
$tambah = mysqli_query($koneksi, $query);

if($tambah){
    echo "<script>alert('Pendaftaran Berhasil') </script>";
    echo "<script>window.location.href = \"karyawan/login_karyawan.php\" </script>";
  } else {
    $sql    = "SELECT * FROM tb_karyawan WHERE id_karyawan = '".$id_karyawan."' ";
    $query  = mysqli_query($koneksi, $sql);
    while ($row = mysqli_fetch_array($query)) {
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href=\"karyawan/login_karyawan.php?id_karyawan=".$row['id_karyawan']."\"> Kembali Ke From ! </a>";
    }
  }

// if ($query) {
// 	// header("location: karyawan/login_karyawan.php");
// }else{
// 	echo "gagal";
// }

 ?>