<?php
session_start();
// error_reporting(0);
include '../koneksi.php';

// $rules=[
//     $confpassword  = matches(['password'])
// ];

//proses input
if (isset($_POST['ubahdata'])) {
  $id = $_POST['id'];
  $username = $_POST['username'];



      // Proses ubah data ke Database
      //Querynya 
      $sql_f = "UPDATE tb_daftar set username='$username' WHERE id='$id'";
      $ubah  = mysqli_query($koneksi, $sql_f);
      if($ubah){
        echo "<script>alert('Ubah Data Dengan ID User = ".$id." Berhasil') </script>";
        echo "<script>window.location.href = '../datauser.php' </script>";
      } else {
        $sql    = "SELECT * FROM tb_daftar WHERE id = '".$id."' ";
        $query  = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          echo "<br><a href=\"edit_admin.php?id=".$row['id']."\"> Kembali Ke From ! </a>";
        }
      }
}



//proses  direct page password
if(isset($_POST['ubahpassword'])){
  $id = $_POST['id'];
  var_dump($id);
  echo "<script> var yakin =confirm('yakin ingin Mengubah Password ??');
    if(yakin){
      window.location = 'password_edit.php?id=$id';
    }else {
    document.write('Tetap disini saja ya  !!');
    }
  
  </script>";
  
}

if(isset($_POST['berubah'])){
  // error_reporting(0);
  $id = $_POST['id'];
  // $username = $_POST['username'];
  $password = $_POST['password'];

//  var_dump($id); 
      // Proses ubah data ke Database
      //Querynya 
      $sql_f = "UPDATE tb_daftar set password='$password' WHERE id=2";
      $ubah  = mysqli_query($koneksi, $sql_f);

      // var_dump($ubah); 
      if($ubah){
        echo "<script>alert('Ubah Data Dengan ID User = ".$id." Berhasil') </script>";
        echo "<script>window.location.href = '../datauser.php' </script>";
      }
      else {
        $sql    = "SELECT * FROM tb_daftar WHERE id = '".$id."' ";
        $query  = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          echo "<br><a href=\"edit_admin.php?id=".$row['id']."\"> Kembali Ke From ! </a>";
        }
      }
    
}
?>
