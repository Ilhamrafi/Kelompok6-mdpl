<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
  ?>

    <script type="text/javascript">
      alert("Kamu Harus Login!");
      window.location.href="FormLogin.php";
    </script>
  <?php

  exit;
  
}

//koneksi database
require 'function.php';

if (isset($_POST["absen"])) {
    
  if (absensi($_POST) > 0 ) {
      ?>
        <script type="text/javascript">
            alert("Anda Berhasil Melakukan Absensi!");
            window.location.href="absensi.php";
        </script>
      <?php
  } else {
      echo mysqli_error($koneksi);
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Absensi Pegawai</title>
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

        <h2 class="mb-4">ABSENSI PEGAWAI</h2>
        <form action="" method="post" name="absens">
        <section >
            <div class="container">
                    <div class="row">
                        <div class="col">
                            <p style="font-size: medium;">NIP Anda</p>
                            <input type="text" name="nomor_pegawai" class="form-control" placeholder="Input NIP">
                        </div>
                        <div class="col">
                            <p style="font-size: medium;">Nama Lengkap</p>
                            <input type="text" name="nama_pegawai" class="form-control" placeholder="Input nama">
                        </div>
                    </div>
            </div>
        </section>
        <section>
            <div class="container" style="padding-top: 50px;">
                    <div class="row d-flex justify-content-center">
                        <div class="col" style="margin-left: 25%; margin-right: 25%;">
                            <p style="font-size: medium;">KEHADIRAN</p>
                            <select name ="kehadiran" id="inputState" class="form-control">
                                <option selected value="">Pilih...</option>
                                <option value ="Hadir">Hadir</option>
                                <option value ="Izin">Izin</option>
                            </select>
                        </div>
                    </div>
            </div>
        </section>
        <section>
            <div class="container" style="padding-top: 50px;">
                    <div class="form-group">
                        <div class="form-check" style="margin-left: 45%; margin-right: 25%;">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                            Check me out
                            </label>
                        </div>
                    </div>
                    <div>
                        <button type="submit" name="absen" value="" class="btn btn-primary" 
                        style="margin-left: 46.8%; margin-right: 25%;">Sign in</button>
                    </div>
                </form>
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