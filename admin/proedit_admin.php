<?php
session_start();
error_reporting(0);
include '../koneksi.php';

$rules=[
    $confpassword  = matches(['password'])
];

//proses input
if (isset($_POST['ubahdata'],$rules)) {
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);


      // Proses ubah data ke Database
      $sql_f = "UPDATE tb_daftar set username='$username', password='$password' WHERE id='$id'";
      $ubah  = mysqli_query($koneksi, $sql_f);
      if($ubah){
        echo "<script>alert('Ubah Data Dengan ID User = ".$id." Berhasil') </script>";
        echo "<script>window.location.href = \"../datauser.php\" </script>";
      } else {
        $sql    = "SELECT * FROM tb_daftar WHERE id = '".$id."' ";
        $query  = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          echo "<br><a href=\"edit_admin.php?id=".$row['id']."\"> Kembali Ke From ! </a>";
        }
      }
}

?>
