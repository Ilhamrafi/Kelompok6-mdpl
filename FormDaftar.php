<?php

require 'function.php';

if (isset($_POST["register"])) {
    
    if (registrasi($_POST) > 0 ) {
        ?>

            <script type="text/javascript">
                alert("Data Berhasil Ditambahkan!");
                window.location.href="index.php";
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
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <title>Register Karyawan</title>
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
        <div class="container d-flex justify-content-center" style="margin-top: 2%; margin-bottom: 5%;background-color: whitesmoke; border-radius: 25px;">
                <div class="col-md-8 col-lg-6">
                        <div class="container d-flex justify-content-center" style="margin-bottom: 10%; margin-top: 15%;">
                            <i class="fas fa-user-circle fa-8x" style="color: black;"></i>
                        </div>
                        <div class="container d-flex justify-content-center" style="margin-top:10%; font-size: large;"> <p> TAMBAH KARYAWAN </p></div>
                        
                    <div class="container" style="margin-bottom: 15%; margin-top: 6%;">
                            <form method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIP Karyawan</label>
                                    <input type="text" class="form-control" name="nomor_pegawai" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input NIP">
                                    <small id="emailHelp" class="form-text text-muted">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Karyawan</label>
                                    <input type="text" class="form-control" name="nama_pegawai" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama">
                                    <small id="emailHelp" class="form-text text-muted">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input alamat">
                                    <small id="emailHelp" class="form-text text-muted">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No Handphone</label>
                                    <input type="number" class="form-control" name="no_hp" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input no. HP ">
                                    <small id="emailHelp" class="form-text text-muted">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Input   Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Konfirm Password</label>
                                    <input type="password" class="form-control" name="password2" id="exampleInputPassword1" placeholder="Konfirm Password">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>    
                                </div>
                                <button type="submit" name="register" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                </div>
        </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>