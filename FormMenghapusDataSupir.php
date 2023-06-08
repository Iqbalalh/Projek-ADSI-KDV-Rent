<?php
include"koneksi.php";

$idSupir = $_GET['idSupir'];
$sql = "DELETE FROM supir WHERE idSupir ='$idSupir'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil DiHapus.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header('Location: UIMengelolaDataSupir.php');
exit();
?>