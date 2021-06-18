<?php
session_start();
error_reporting(0);
include 'koneksi.php';

//proses input
if (isset($_POST['ubahdata'])) {
  $id = $_POST['id'];
  $jabatan = $_POST['jabatan'];

      // Proses ubah data ke Database
      $sql_f = "UPDATE tb_jabatan set jabatan ='$jabatan' WHERE id='$id'";
      $ubah  = mysqli_query($koneksi, $sql_f);
      if($ubah){
        echo "<script>alert('Ubah Data Jabatan = ".$id." Berhasil') </script>";
        echo "<script>window.location.href = \"datajabatan.php\" </script>";
      } else {
        $sql    = "SELECT * FROM tb_jabatan WHERE id = '".$id."' ";
        $query  = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          echo "<br><a href=\"edit_jabatan.php?id=".$row['id']."\"> Kembali Ke From ! </a>";
        }
      }
    }

?>
