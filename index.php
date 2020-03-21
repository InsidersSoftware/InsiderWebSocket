
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Ujian Berbasis Komputer</title>
     <link rel="stylesheet" href="http://127.0.0.1/ujian/css/style.css">
     <link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
   </head>
   <body>
     <form class="box" action="login.php" method="post">
        <h1>Login</h1>
         <input type="text" name="username" placeholder="Username">
           <input type="password" name="password" placeholder="Password">
         <input type="submit" value="Login">
        </form>
        <?php if(isset($_GET['pesan'])) { ?>
    <div class="error">
      <label>Oopps... <?php echo $_GET['pesan']; ?></label>
    </div>
  <?php } ?>
        <?php if(isset($_GET['pesan'])) {  ?>
	         <label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	       <?php } ?>
    <script type="text/javascript" src="http://127.0.0.1/ujian/js/main.js"></script>
   </body>
 </html>
