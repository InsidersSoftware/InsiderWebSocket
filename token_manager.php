<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'connect.php';

$matapelajaran = $_POST['matapelajaran'];
$token = $_POST['token'];

$result = mysqli_query($koneksi,"SELECT `matapelajaran`, `token` FROM `tokenpelajaran` WHERE 1");

$cek = mysqli_num_rows($result);

if($cek > 0)
{
  $data = mysqli_fetch_assoc($result);
  $_SESSION['matapelajaran'] = $matapelajaran;
  $_SESSION['token'] = $token;
  header("location:soal_ujian.php");
} else {
  header("location:home.php?pesan=token yang dimasukan salah");
}
?>
