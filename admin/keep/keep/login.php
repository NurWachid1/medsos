<html>
<head>

	<title>FORM LOGIN</title>
	<link href="log.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="header">
	<header>
		<div class="menu">
			<label>SILAM</label>
			
			<ul>
				<li class="active"><a href="index.php">TENTANG SILAM</a></li>
				<li><a href="mapel/mapel.php">MATA PELAJARAN</a></li>
				<li><a href="siswa/siswa.php">SISWA</a></li>
				<li><a href="kelas/kls.php">KELAS</a></li>
				<li><a href="guru/guru.php">GURU</a></li>
			</ul>
		</div>
	</header>
	<div id="main">
		<img src="avatar.png">
		<h1>Masuk</h1>

	<form action="proseslogin.php" method="POST">
		<input type="text" name="username" placeholder="Username" id="username"><br>
		<input type="password" name="password" placeholder="Kata Sandi" minlength="3" maxlength="20" id="password"><br>
		<button onclick="" class="button" name="login" type="submit">Masuk</button><br>
	</form>
</div>
</body>
</html>