<?php
include "koneksi.php";
require 'functions.php';

$idMobil = $_POST['idMobil'];
$namaMobil = $_POST['namaMobil'];
$hargaSewa = $_POST['hargaSewa'];
$statusPenyewaan = $_POST["statusPenyewaan"];
$kondisiMobil = $_POST["kondisiMobil"];
$viewMobil = upload(); // Mengambil nama file view mobil

// Menyimpan/menambah data ke database
$sql = "INSERT INTO mobil (idMobil, namaMobil, hargaSewa, statusPenyewaan, kondisiMobil, viewMobil) 
        VALUES ('$idMobil', '$namaMobil', '$hargaSewa', '$statusPenyewaan', '$kondisiMobil', '$viewMobil')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$targetDir = 'C:/xampp/htdocs/web/adsi/img/';  // Lokasi folder tujuan
$targetFile = $targetDir . basename($_FILES["viewMobil"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Periksa apakah file gambar yang diunggah valid
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["viewMobil"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Periksa apakah file sudah ada di server
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Batasi jenis file yang diizinkan
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
if (!in_array($imageFileType, $allowedExtensions)) {
    echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
    $uploadOk = 0;
}

// Jika semua kondisi terpenuhi, pindahkan file ke folder tujuan
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["viewMobil"]["tmp_name"], $targetFile)) {
        echo "The file " . basename($_FILES["viewMobil"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

header('Location: UIMengelolaDataMobil.php');
exit();
?>
