<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
  ?>

    <script type="text/javascript">
      alert("Kamu belum login!");
      window.location.href="FormLogin.php";
    </script>
  <?php

  exit;
  
}


//koneksi database
require 'function.php';
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Profil Pegawai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/dbc8013e61.js" crossorigin="anonymous"></script>

  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <!-- <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
	            </ul>
	          </li> -->
	          <li>
	              <a href="index.php">Profil Saya</a>
	          </li>
	          <!-- <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#">Portfolio</a>
	          </li> -->
	          <li>
              <a href="absensi.php">Absensi</a>
              <a href="FormDaftar.php">Register</a>
	          </li>
	        </ul>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user fa-lg"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="index.php">Profil</a>
                      <a class="dropdown-item" href="logout.php">Logout</a>
                  </div>
              </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">PROFIL PEGAWAI</h2>
        <section >
          <div class="container d-flex justify-content-center ">
            <img src="logo.jpg" alt="" class="rounded-circle" width="25%" height="50%" style="display: block;">
          </div>
          <div class="container" style="margin-top: 70px;">
            <table class="table">
              <tbody>
                <tr>
                  <td name ="nama_pegawai">Nama Pegawai</td>
                  <td><?php echo $_SESSION['nama_pegawai'] ?></td>
                </tr>
                <tr>
                  <td name = "alamat">Alamat</td>
                  <td><?php echo $_SESSION['alamat'] ?></td>
                </tr>
                <tr>
                  <td name = no_hp>No Handphone</td>
                  <td><?php echo $_SESSION['no_hp'] ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>