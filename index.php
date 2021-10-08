<?php
session_start();
include ("koneksi.php");

 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Karyawan - Home</title>

    <link rel="icon" href="img/Fevicon.png" type="image/png">

<link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
<link rel="stylesheet" href="vendors/linericon/style.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
      <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="img/" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" >Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="#login" rel="page-scroll">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="#kontak" rel="page-scroll">Kontak</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
   <!--================Header Menu Area =================-->

   <main class="side-main">
    <!--================ Hero sm Banner start =================-->      
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/logokaryawan.png" alt="">
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              <h1>Tentang Website Ini</h1>
              <p>Website ini berfungsi sebagai absensi karyawan dan sebagai sistem informasi karyawan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero sm Banner end =================-->
    <!-- <div class="case" id="kasus">
        <ul class="widget text-dark">
          <li class="positif">
            <span class="tag">Jumlah Positif</span>
            <span class="value">-</span>
            <span class="orang">Orang</span>
          </li>
          <li class="sembuh">
            <span class="tag">Jumlah Sembuh</span>
            <span class="value">-</span>
            <span class="orang">Orang</span>
          </li>
          <li class="meninggal">
            <span class="tag">Jumlah Meninggal</span>
            <span class="value">-</span>
            <span class="orang">Orang</span>
          </li>
          <li class="dirawat">
            <span class="tag">Jumlah Dirawat</span>
            <span class="value">-</span>
            <span class="orang">Orang</span>
          </li>
        </ul>
      </div>
    </div> -->
</main>

    <!-- Login Feature Section Start -->

    <section class="side-main">
		<div class="grad">
		<div class="head">
			<div>Login<span>Sebagai</span></div>
		</div>
		<br>
		<div class="login">
        <a href="login.php"><input type="button" value="ADMIN"></a>
        <a href="karyawan/login_karyawan.php"><input type="button" value="PEGAWAI"></a>
		</div>
</div>
    </section>


    <!-- Login Feature Section End -->
    
   <!-- ================ start footer Area ================= -->
 <footer class="footer-area ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li><a href="#">C</a></li>
                <li><a href="#">UI Design</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">Java</a></li>
                <li><a href="#">Android</a></li>
                <li><a href="#">Templates</a></li>
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Contribute</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
           <a href="#">Lati Development</a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
  </footer>
  <!-- ================ End footer Area ================= -->
</body>
</html>