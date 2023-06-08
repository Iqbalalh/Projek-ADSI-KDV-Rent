<?php
include "koneksi.php";

$namaSupir = $_POST['namaSupir'];
$jenisKelamin = $_POST['jenisKelamin'];
$umurSupir = $_POST['umurSupir'];
$statusSupir = $_POST["statusSupir"];

// menyimpan/menambah data ke database
$sql = "INSERT INTO supir (namaSupir, jenisKelamin, umurSupir, statusSupir) VALUES ('$namaSupir', '$jenisKelamin', '$umurSupir', '$statusSupir')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('Location: UIMengelolaDataSupir.php');
exit();

?>
