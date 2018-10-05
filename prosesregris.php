<?php

$localhost = "localhost";
$username = "root";
$password = "";
$db = "mahasiswa";

$conn = mysqli_connect($host, $username, $password, $db) or die ("Koneksi Gagal...");

if (isset($_POST['kirim'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$cekemail = "@gmail.com";
	$cariemail = strpos($email, $cekemail);


	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$cekemail = "@gmail.com";
	$cariemail = strpos($email, $cekemail);

	if (strlen($nim)==10){
		if (strlen($nama)<25) {
			if (strpos($email, "@gmail.com")) {
				$sql = $conn->query("INSERT INTO `data_mhs`(`nim`,`nama`,`email`)VALUES('$nim','$nama','$email')");
				echo "Registrasi Berhasil...";
				# code...
			}else{
				echo "Gagal... email tidak sesuai harus '@gmail.com'";
			}
			
			# code...
		}else{
			echo "Gagal... Nama tidak sesuai";
			
		
		# code...
		}
	}else{
		echo "Gagal... NIM tidak sesuai";
	}
	# code...
}

?>
