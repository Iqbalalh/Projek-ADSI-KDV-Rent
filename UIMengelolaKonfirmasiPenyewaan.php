<?php
include 'koneksi.php';

$query ="SELECT * FROM transaksiPenyewa";
$sql =  mysqli_query($conn, $query) ;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
 
<div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white border-end border-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-center px-3 pt-2 min-vh-100">
                    <img src="https://github.com/mdo.png" alt="hugenerd" width="130" height="130" class="rounded-circle ">
                    <span class="fs-5 d-none d-sm-inline ">USer90909899</span>
</br>
<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="beranda.php" class="nav-link align-middle px-0">
                                <img width="20" height="20" src="img/iberanda.png"> <span class="ms-1 d-none d-sm-inline">Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a href="UIMengelolaDataPenyewa.php" class="nav-link px-0 align-middle">
                                <img width="20" height="20" src="img/idatapenyewa.png"> <span class="ms-1 d-none d-sm-inline">Data Penyewa</span> </a>
                        </li>
                        <li>
                            <a href="UIMengelolaDataMobil.php" class="nav-link px-0 align-middle">
                                <img width="20" height="20" src="img/idatamobil.png"> <span class="ms-1 d-none d-sm-inline">Data Mobil</span></a>
                        </li>
                        <li>
                            <a href="UIMengelolaDataSupir.php" class="nav-link px-0 align-middle ">
                                <img width="20" height="20" src="img/idatasupir.png"> <span class="ms-1 d-none d-sm-inline">Data Supir</span></a>
                        </li>
                        <li>
                            <a href="UIKonfirmasiPenyewaan.php"  class="nav-link px-0 align-middle">
                                <img width="20" height="20" src="img/itransaksipenyewa.png"> <span class="ms-1 d-none d-sm-inline">Transaksi Penyewaan</span> </a>
                        </li>
                        <li>
                            <a href="FormMembuatLaporanKeuangan.php" class="nav-link px-0 align-middle">
                                <img width="20" height="20" src="img/ilaporankeuangan.png"> <span class="ms-1 d-none d-sm-inline">Laporan Keuangan</span> </a>
                        </li>
                        <li>
                            <a href="index.php" class="nav-link px-0 align-middle">
                                <img width="20" height="20" src="img/ilogout.png"> <span class="ms-1 d-none d-sm-inline">Log Out</span> </a>
                        </li>
                    </ul>
                    <hr>
                    


                </div>
            </div>
            <div class="col py-3">
                <h1>Transaksi Penyewa</h1>
                </br>
                <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Nama Penyewa</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Lama Peminjaman</th>
                        <th>Jumlah Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($result = mysqli_fetch_assoc($sql)) { ?>
                    <tr>
                        <td><?= $result['namaPenyewa']; ?></td>
                        <td><?= $result['tanggalPeminjaman']; ?></td>
                        <td><?= $result['tanggalPengembalian']; ?></td>
                        <td><?= $result['lamaMeminjam']; ?></td>
                        <td><?= $result['jumlahTransaksi']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>