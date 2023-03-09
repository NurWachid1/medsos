
<!-- // session_start();
// require 'functions.php';
// if(isset($_SESSION['login'])){
//     if(isset($_SESSION["id_admin"])){
//         header("Location: halaman-utama.php");
//     }else{header("Location: halaman-siswa.php");
//         exit;
//     }
// }

// if(isset($_POST['login'])){
//     $login = login($_POST);

// } -->

<?php
include "config/dbconnect.php";
session_start();
if (@$_SESSION['userweb']!= ""){
  if($_SESSION['akses']="admin"){
  header('location:superadmin/index.php');
   
}
else if (@$_SESSION['akses']="kurikulum"){
  header('location:kurikulum1/index.php');
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="assetss/css/style-login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="overlay"></div>
    <form action="" method="post" class="box">
        <div class="header">
            <img src="../vendor/images/logo-pgri.png" alt="logo">
            <h1>FORM <span style="color:blue">LOGIN<span></h1>
            <?php if(isset($login['error'])) :?>
                <p style="font-style: italic; color:red;font-size:12px;"> <?= $login['pesan'];?> </p>
            <?php endif; ?>
        </div>
        <div class="login-area">
            <input type="text" name="username" class="username" placeholder="Username" autofocus autocomplete="off">
            <input type="password" name="password" class="password" placeholder="Kata Sandi">
            <!-- <input type="checkbox" name="checkbox" id="checkbox" class="checkbox"><label for="checkbox" class="label">Remember me</label>
            <a href="#" name="forget" class="forget">Forget password?</a> -->
            <input type="submit" name="login" value="MASUK" class="submit">
            
        </div>
    </form>
    <?php
							 if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $qlogin = mysqli_query($conn,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
    $cek = mysqli_num_rows($qlogin);
    $data = mysqli_fetch_array($qlogin);
    if($cek < 1 ){
      echo"Gagal Login !";
    }else{
    	$_SESSION['userweb']=$data['iduser'];
          $_SESSION['akses']=$data['role'];
      if($data['role']=="kurikulum"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai Waka Kurikulum");document.location.href="kurikulum1/index.php";</script>
          <?php

        // } else if($data['role']=="admin"){
        //  
      }
else if($data['role']=="admin"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai Admin");document.location.href="superadmin/index.php";</script>
          <?php
 }
  else{
          header('location:../index.php');

        }
       
    }
} 
?>
</body>
</html>

