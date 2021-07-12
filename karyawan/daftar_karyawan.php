<?php
error_reporting(0); 
require_once("../koneksi.php");
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Idiot-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Idiot-->
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Data Karyawan</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- end script-->
</head>

<body class="animsition">
      <?php 
    // session_start();
    // if (!isset($_SESSION['username'])) {
    //     header("location: index.php");
    // }else {
    //     $username = $_SESSION['username'];  
    // }

 ?>
    <div class="page-wrapper">

            <!-- MAIN CONTENT-->

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           <div class="table-responsive table--no-card m-b-30">
                            <form action="../daftar_karyawan_sv.php" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                <table class="table table-borderless table-striped table-earning" >
                                        
                                        <tbody>
                                            <tr>
                                                <td>NIP</td>
                                                <td>
                                                
                                                <input type="text" class="form-control" maxlength="9" required="" name="id_karyawan" autocomplete="off" size="25px" maxlength="25px">    
                                                
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td>
                                                
                                                <input type="text" class="form-control" required="" name="username" autocomplete="off">    
                                                
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                
                                                <input type="password" class="form-control" required="" name="password" autocomplete="off">    
                                                
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td><input type="text" class="form-control" required="" name="nama" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat dan Tanggal Lahir</td>
                                                <td><input type="text" class="form-control" required="" name="tmp_tgl_lahir" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>
                                                <select class="form-control" required="" name="jenkel">
                                                    <option>--</option>
                                                    <option>Laki-laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td>
                                                    <div class="form-group">
                                                    <select class="form-control" required="" name="agama">
                                                        <option>--</option>
                                                        <option>Islam</option>
                                                        <option>Kristen</option>
                                                        <option>Katholik</option>
                                                        <option>Hindu</option>
                                                        <option>Buddha</option>
                                                        <option>KongHuCu</option>
                                                    </select>    
                                                    </div>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td> 
                                                <td><textarea class="form-control" required="" name="alamat" autocomplete="off"></textarea> </td>
                                            </tr>
                                            <tr>
                                                <td>No Telepon</td>
                                                <td><input type="text" autocomplete="off" maxlength="18" required="" class="form-control" name="no_tel"></td>
                                            </tr>
                                            <tr>
                                                <td>Jabatan</td>
                                                <td>
                                                <select class="form-control" name="jabatan" required="">
                                                <?php 

                                                include '../koneksi.php';

                                                $sql = "SELECT * FROM tb_jabatan";

                                                $hasil = mysqli_query($koneksi, $sql);

                                                

                                                while ($data = mysqli_fetch_array($hasil)) {
                                                    
                                                
                                                

                                                 ?>
                                                <option value="<?php echo $data['jabatan'];?>"><?php echo $data['jabatan']; ?></option>
                                                <?php } ?>
                                                   
                                                </select>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>Foto</td>
                                                <td><input type="file" name="foto" required=""></td>
                                            </tr>

                                            <tr>
                                                <td><button type="submit" name="simpan" class="btn btn-primary">Simpan</button></td>
                                                <!-- <td><input type="reset" name="" value="Batal" class="btn btn-danger"></td> -->
                                                <td><?php 
                                                $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; ?>
                                                <a  class="btn btn-danger" href="<?=$url?>">Batal</a></td>
                                            </tr>
                                            
                                      </tbody>
                                    </table>
                                        </div>
                            </form>
                                    
                                </div>    
                        </div>

                        </div>
                        <!--modal -->
                      
                            
                        <!-- END MODAL-->

            
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
