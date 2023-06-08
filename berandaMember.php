<?php
include 'koneksi.php';

$idPenyewa = $_GET['idPenyewa'];
  if (isset($_GET['idPenyewa'])) {
  $data = mysqli_query($conn, "SELECT * FROM penyewa WHERE idPenyewa = '$idPenyewa'");
  }

// $query = "SELECT COUNT(*) AS total_penyewa FROM penyewa";
// $result = mysqli_query($conn, $query);
// $row = mysqli_fetch_assoc($result);
// $total_penyewa = $row['total_penyewa'];

// $query2 = "SELECT COUNT(*) AS total_mobil FROM mobil";
// $result2 = mysqli_query($conn, $query2);
// $row2 = mysqli_fetch_assoc($result2);
// $total_mobil = $row2['total_mobil'];

// $query3 = "SELECT COUNT(*) AS total_supir FROM supir";
// $result3 = mysqli_query($conn, $query3);
// $row3 = mysqli_fetch_assoc($result3);
// $total_supir = $row3['total_supir'];
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
<nav class="navbar" style="background-color: #B1E4FC;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/rentcar.png" alt="Logo" width="240" height="83" class="d-inline-block align-text-top">
    </a>
    
  </div>
</nav>

                    <?php
                        while($row = mysqli_fetch_assoc($data)){
                    ?>
 
<div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white border-end border-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-center px-3 pt-2 min-vh-100">
                    <img src="https://github.com/mdo.png" alt="hugenerd" width="130" height="130" class="rounded-circle ">
                    <span class="fs-5 d-none d-sm-inline "><?php echo $row['nama'] ?></span>
</br>
<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item ">
                            <a href="beranda.php?idPenyewa=<?php echo $row['idPenyewa'] ?>" class="nav-link align-middle px-0">
                                <img width="20" height="20" src="img/iberanda.png"> <span class="ms-1 d-none d-sm-inline">Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile.php?idPenyewa=<?php echo $row['idPenyewa'] ?>" class="nav-link px-0 align-middle">
                                <img width="20" height="20" src="img/idatapenyewa.png"> <span class="ms-1 d-none d-sm-inline">Profile</span> </a>
                        </li>
                        <li>
                            <a href="memesan_mobil.php?idPenyewa=<?php echo $row['idPenyewa'] ?>" class="nav-link px-0 align-middle">
                                <img width="20" height="20" src="img/idatamobil.png"> <span class="ms-1 d-none d-sm-inline">Memesan Mobil</span></a>
                        </li>
                        
                        <li>
                            <a href="transaksi_penyewaan.php?idPenyewa=<?php echo $row['idPenyewa'] ?>"  class="nav-link px-0 align-middle">
                                <img width="20" height="20" src="img/itransaksipenyewa.png"> <span class="ms-1 d-none d-sm-inline">Transaksi Penyewaan</span> </a>
                        </li>
                        
                        <li>
                            <a href="logout.php" class="nav-link px-0 align-middle">
                                <img width="20" height="20" src="img/ilogout.png"> <span class="ms-1 d-none d-sm-inline">Log Out</span> </a>
                        </li>
                    </ul>
                    <hr>
                    


                </div>
            </div>
            <div class="col py-3">
                <h1 class='m-5 mb-0'>Beranda</h1>
                <h5 class='m-5 mb-0 mt-0'>Halaman Utama</h5>
            </br>
                <div class="row">
                    <div class="col">
                        <br>
                        <br><br>
                        <br>
                        <h1 class='m-5 mb-0'>Sistem Informasi KDV Rental Mobil</h1>
                        <h5 class='m-5 mb-0 mt-0'>"Dapatkan Pengalaman Rental Mobil Terbaik dengan Sistem Informasi Modern Kami. Hemat Waktu, Lebih Banyak Petualangan!"
                        </h5>
                    </div>

                    <div class="col">
                        <img src="img/awa.png" alt="">
                    </div>
  
                </div>


            </div>
        </div>
    </div>
    <?php
                      }
                    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>