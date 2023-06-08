<?php 

include "koneksi.php"; 
    function upload(){

		$namaFile = $_FILES['viewMobil']['name'];
		$ukuranFile = $_FILES['viewMobil']['size'];
		$error = $_FILES['viewMobil']['error'];
		$tmpName = $_FILES['viewMobil']['tmp_name'];

		if ( $error === 4 ){
			echo "
				<script>
					alert('Pilih gambar terlebih dahulu!');
				</script>
			";
			return false;
		}

		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
			echo "
				<script>
					alert('Yang anda upload bukan gambar');
				</script>
			";
			return false;
		}

		if ( $ukuranFile > 2000000 ){
			echo "
				<script>
					alert('Ukuran gambar terlalu besar');
				</script>
			";
			return false;
		}

		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;

		move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

		return $namaFileBaru;

	}

	// function register($penyewa) {
	// 	global $conn;

	// 	$idPenyewa = htmlspecialchars($penyewa["idPenyewa"]);
	// 	$nama = htmlspecialchars($penyewa["nama"]);
	// 	$noTelp = htmlspecialchars($penyewa["noTelp"]);
	// 	$user = htmlspecialchars($penyewa["user"]);
	// 	$pass = mysqli_real_escape_string($conn, $penyewa["pass"]);
	// 	$query = "INSERT INTO `penyewa` (`idPenyewa`, `nama`, `noTelp`, `user`, `pass`) VALUES (NULL, $nama, $noTelp, $user, $pass);";


	// mysqli_query($conn, $query);

	// return mysqli_affected_rows($conn);
	// }
?>