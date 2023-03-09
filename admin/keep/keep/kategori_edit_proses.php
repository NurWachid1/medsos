<?php
include 'dbconnect.php';

$idkategori	=	$_POST['idkategori'];
$nama_kategori = $_POST['nama_kategori']

$nama_file    = $_FILES['file']['name'];
$lokasi_file  = $_FILES['file']['tmp_name'];
$tipe_file    = $_FILES['file']['type'];

 if($lokasi_file==""){
	$simpan = mysqli_query("UPDATE kategori SET nama_kategori='$nama_kategori' WHERE idkategori='$idkategori'") or die(mysqli_error());
 }
 else {
	  $data=mysqli_fetch_array(mysqli_query("SELECT * FROM kategori WHERE idkategori='$_POST[idkategori]'"));
      if($data['file'] != "") unlink("poto/$data[file]");
	  
	  move_uploaded_file($lokasi_file,"poto/$nama_file");
     $simpan =  mysqli_query("UPDATE kategori SET idkategori='$idkategori',nama_kategori='$nama_kategori' WHERE idkategori='$_POST[idkategori]'") 
	  or die(mysqli_error());
 }
 

if($simpan)
	{
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="kategori.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="kategori.php"</script>'; 
	}

?>