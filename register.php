<?php 
    include "koneksi.php";
    require 'functions.php';

    if(isset($_POST["register"]) ){

        if( register($_POST) > 0 ){
          echo "
            <script>
              alert('Akun berhasil dibuat');
              document.location.href = 'login.php';
            </script>
          ";
        }
    
        else {
          echo "
            <script>
              alert('akun gagal dibuat berhasil dibuat');
              document.location.href = 'login.php';
            </script>
          ";
        }
    
      }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
 

    <form method="POST" action="registrasi.php">
    <div class="login-box">
        <h1>Register</h1>

        <div class="mb-0">
          <label for="exampleInputEmail1" class="form-label"></label>
          <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" placeholder="Nama" required>
          
        </div>

        <div class="mb-0">
          <label for="exampleInputEmail1" class="form-label"></label>
          <input type="text" class="form-control" name="noTelp" aria-describedby="emailHelp" placeholder="No. Telp" required>
          
        </div>

        
        <div class="mb-0">
          <label for="exampleInputEmail1" class="form-label"></label>
          <input type="text" class="form-control" name="user" aria-describedby="emailHelp" placeholder="Username" required>
          
        </div>

        <div class="mb-0">
          <label for="exampleInputPassword1" class="form-label"></label>
          <input type="password" class="form-control" name="pass" placeholder="Password" required>
        </div>

        <input class="form-control" type="hidden" name="idPenyewa" required/>

        <br>
        <br>
        <center><input class="btn btn-primary" type="submit" value="Register" name='register'></center>
        <br>

      </form>

      <center><a href="index.php">Login</a></center>

    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>