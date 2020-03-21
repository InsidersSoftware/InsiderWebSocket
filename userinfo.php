<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'connect.php';


$nama = $_POST['nama'];

// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT `nama` FROM `user` WHERE 1");

$cek = mysqli_num_rows($result);

if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	$_SESSION['nama'] = $data['nama'];
	header("location:soal_ujian.php");
} else {
	header("location:home.php?pesan=gagal login data tidak ditemukan.");
}
?>
