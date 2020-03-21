<?php
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ujian Berbasis Komputer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http://127.0.0.1/ujian/css/font.css">
      <link rel="stylesheet" href="http://127.0.0.1/ujian/css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand mb-0 h1" href="#">Ujian Berbasis Komputer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link">Yay! Selamat datang : <?php echo $_SESSION['nama']; ?></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php"> Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--List Group-->
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action"><button class="open-button" onclick="openForm()">Open</button>IPS</a>
  <a href="#" class="list-group-item list-group-item-action"><button class="open-button" onclick="openForm()">Open</button>IPA</a>
  <a href="#" class="list-group-item list-group-item-action"><button class="open-button" onclick="openForm()">Open</button>MTK</a>
</div>
<!--Page navigation-->
<nav aria-label="Page navigation">
<ul class="pagination justify-content-end">
 <li class="page-item disabled">
   <a class="page-link" href="#" tabindex="-1">Previous</a>
 </li>
 <li class="page-item"><a class="page-link" href="#">1</a></li>
 <li class="page-item"><a class="page-link" href="#">2</a></li>
 <li class="page-item"><a class="page-link" href="#">3</a></li>
 <li class="page-item">
   <a class="page-link" href="#">Next</a>
 </li>
</ul>
</nav>
<!--Popup Event-->
<div class="form-popup" id="myForm">
  <form action="token_manager.php" class="form-container">
    <h1>Enter The Subject Token:</h1>

    <label for="token"><b>Token</b></label>
    <input type="text" placeholder="Enter Token" name="token" required>

    <button type="submit" class="btn">Login</button>
    <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
   <script src="https://127.0.0.1/js/popup.js"></script>
   <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
