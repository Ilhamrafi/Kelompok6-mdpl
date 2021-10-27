<?php
session_start();

if (isset($_SESSION["login"])) {
    header("location:index.php");
    exit;
}

require 'function.php';

if (isset($_POST['login'])) {
    
    $nama_pegawai = $_POST["nama_pegawai"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM tb_register WHERE nama_pegawai 
    = '$nama_pegawai'");

    //cek nomor pegawai
    if (mysqli_num_rows($result) === 1 ) {
        
        //cek password 
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ) {
            //set session
            $_SESSION["login"] = true;
            $_SESSION["nama_pegawai"] = $row['nama_pegawai'];
            $_SESSION["alamat"] = $row['alamat'];
            $_SESSION["no_hp"] = $row['no_hp'];
            ?>

            <script type="text/javascript">
                alert("Kamu Berhasil Melakukan Login!");
                window.location.href="index.php";
            </script>

        <?php
            exit;
        }
    }

    $error = true;
}


?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php if (isset($error)) {
            echo "<script>
                alert('Login gagal, Username & Password kamu salah!');
                </script>";
        } ?>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Login Karyawan</title>
        <style>
            .container{
            margin-top: 5%;
            }
            .col{
                margin-top: 20%;
            }
            .card{
                margin-top: 25%;
                margin-bottom: 25%;
            }
            body{ 
            background-image:url(bg.jpg); 
            background-size:cover; 
            background-attachment: fixed; 
            }
            .row {
            box-shadow: -10px -10px 4px rgba(0,0,0,0.4);
            padding: 10px;
            border: 1px solid none;
            border-radius: 25px;
            }
        </style>
        <script src="https://kit.fontawesome.com/dbc8013e61.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section>
            <!-- <img src="bg.jpg" alt="BACKGROUND" style="width: 100%; height: 100%;"> -->
        <div class="container" style="margin-top: 10%; background-color: whitesmoke; border-radius: 25px;">
            <div class="row justify-content-center"> 
                <div class="col-md-8 col-lg-6">
                        <div class="container d-flex justify-content-center" style="margin-bottom: 30%; margin-top: 35%;">
                            <i class="fas fa-user-circle fa-8x" style="color: black;"></i>
                        </div>
                </div>
                <div class="col-md-8 col-lg-6 d ">
                    <div class="container d-flex justify-content-center" style="margin-top:10%; font-size: large;"> <p> LOGIN </p></div>
                    <div class="container d-flex justify-content-center" style="margin-bottom: 15%; margin-top: 6%;">
                            <form method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NAMA KARYAWAN</label>
                                    <input type="text" class="form-control" name="nama_pegawai" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">PASSWORD</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" name="login" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>