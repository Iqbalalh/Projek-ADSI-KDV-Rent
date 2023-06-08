<?php
include"koneksi.php";

$idMobil = $_GET['idMobil'];
$sql = "DELETE FROM mobil WHERE idMobil ='$idMobil'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil DiHapus.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('Location: UIMengelolaDataMobil.php');
exit();
?>