<?php
include 'koneksi.php';

if (isset($_POST['konfirmasi'])) {
  $ids = $_POST['konfirmasi'];

  // Perbarui status konfirmasi menjadi 'ya' untuk checkbox yang dicentang
  mysqli_query($conn, "UPDATE transaksiPenyewa SET konfirmasi = 'ya' WHERE id IN (" . implode(',', $ids) . ")");

  // Perbarui status konfirmasi menjadi 'tidak' untuk checkbox yang tidak dicentang
  mysqli_query($conn, "UPDATE transaksiPenyewa SET konfirmasi = 'tidak' WHERE id NOT IN (" . implode(',', $ids) . ")");

  echo "Konfirmasi berhasil diperbarui.";
}
?>