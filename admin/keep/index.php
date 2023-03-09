<?php
include "config/koneksi.php";
session_start();
if (@$_SESSION['userweb']!= ""){
  if($_SESSION['akses']="superadmin"){
  header('location:superadmin/index.php');
   
}
else if (@$_SESSION['akses']="admin"){
  header('location:admin/index.php');
}
else if (@$_SESSION['akses']="humas"){
  header('location:humas/index.php');
}
else if (@$_SESSION['akses']="tu"){
  header('location:tu/index.php');
}
else if (@$_SESSION['akses']="kesiswaan"){
  header('location:kesiswaan/index.php');
  }
else if (@$_SESSION['akses']="kurikulum"){
  header('location:kurikulum/index.php');
}
else if (@$_SESSION['akses']="sarpras"){
  header('location:sarpras/index.php');
}
else if (@$_SESSION['akses']="penjamin"){
  header('location:penjamin/index.php');
}
else if (@$_SESSION['akses']="komli"){
  header('location:komli/index.php');
}
else if (@$_SESSION['akses']="perpus"){
  header('location:perpus/index.php');
}
else if (@$_SESSION['akses']="bk"){
  header('location:bk/index.php');
}
else if (@$_SESSION['akses']="extra"){
  header('location:extra/index.php');
}
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Login</title>
	<link href="assetss/css/bootstrap.min.css" rel="stylesheet">
	<link href="assetss/css/styles.css" rel="stylesheet">
	<link href="assetss/css/css1.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body >
	
		
			<div class="">
			<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Form<span>Login</span></div>
		</div>
		<br>
				<div class="login">
					<form role="form" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="username" name="user" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="pass" type="password">
							</div>
						<!--	<div class="checkbox">								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>-->
							<input type="submit" class="btn btn-primary" name="login" value="Login">
							</fieldset>
						</form>
					</div>
					<?php
							 if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $qlogin = mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$user' AND password='$pass'");
    $cek = mysqli_num_rows($qlogin);
    $data = mysqli_fetch_array($qlogin);
    if($cek < 1 ){
      echo"Gagal Login !";
    }else{
    	$_SESSION['userweb']=$data['id_user'];
          $_SESSION['akses']=$data['level'];
      if($data['level']=="superadmin"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai Super Admin");document.location.href="superadmin/index.php";</script>
          <?php

        } else if($data['level']=="admin"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai admin");document.location.href="admin/index.php";</script>
          <?php
        }
			else if($data['level']=="humas"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai Wakasek Humas");document.location.href="humas/index.php";</script>
          <?php

    }
    else if($data['level']=="tu"){
          
          ?>
          <script type="text/javascript">alert("Anda login sebagai Kasubag TU");document.location.href="tu/index.php";</script>
          <?php

    }
    else if($data['level']=="kesiswaan"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai Wakasek kesiswaan");document.location.href="kesiswaan/index.php";</script>
          <?php
 }
else if($data['level']=="kurikulum"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai Wakasek kurikulum");document.location.href="kurikulum/index.php";</script>
          <?php
 }
 else if($data['level']=="sarpras"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai sarpras");document.location.href="sarpras/index.php";</script>
          <?php
 }
  else if($data['level']=="penjamin"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai penjamin Mutu Sekolah");document.location.href="penjamin/index.php";</script>
          <?php
 }
 else if($data['level']=="komli"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai Ketua Program Studi");document.location.href="komli/index.php";</script>
          <?php
 }else if($data['level']=="perpus"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai Koordinator Perpustakaan");document.location.href="perpus/index.php";</script>
          <?php
 }else if($data['level']=="bk"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai Koordinator BK");document.location.href="bk/index.php";</script>
          <?php
 }else if($data['level']=="extra"){
          ?>
          <script type="text/javascript">alert("Anda login sebagai Pembina Ekstra");document.location.href="extra/index.php";</script>
          <?php
 }else{
          header('location:../index.php');

        }
       
    }
} 
?>
					</form>
				</div>
			</div>
		
</body>
</html>
