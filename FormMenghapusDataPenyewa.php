<?php
include"koneksi.php";

$idPenyewa = $_GET['idPenyewa'];
$sql = "DELETE FROM penyewa WHERE idPenyewa ='$idPenyewa'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil DiHapus.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('Location: UIMengelolaDataPenyewa.php');
exit();
?>