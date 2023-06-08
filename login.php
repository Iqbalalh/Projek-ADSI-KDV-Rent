<?php
session_start();
include "koneksi.php";

$username = $_POST['user'];
$password = $_POST['pass'];

$query = mysqli_query($conn, "SELECT * FROM admin where user='$username' and pass='$password'");
$penyewa = mysqli_query($conn, "SELECT * FROM penyewa where user='$username' and pass='$password'");
$idPenyewa = mysqli_query($conn, "SELECT idPenyewa FROM penyewa where user='$username' and pass='$password'");
$row = mysqli_fetch_assoc($penyewa);

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['admin'] = true;
    header("location:beranda.php");
} else if ($penyewa > 0){
    $_SESSION['member'] = true;
    header("location:berandaMember.php?idPenyewa=$row[idPenyewa]");
}
