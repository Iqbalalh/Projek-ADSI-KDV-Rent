<?php
include "koneksi.php";

        $idPenyewa = $_POST["idPenyewa"];
		$nama = $_POST["nama"];
		$noTelp = $_POST["noTelp"];
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$sql = "INSERT INTO penyewa (idPenyewa, nama, noTelp, user, pass) VALUES (NULL, '$nama', '$noTelp', '$user', '$pass');";

// menyimpan/menambah data ke database

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('Location: login.php');
exit();
