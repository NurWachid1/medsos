<?php
include "../config/koneksi.php";
$id_dispo =@$_GET['id_dispo'];
$q= mysqli_query($conn,"SELECT tb_user. * , tb_surat. * , tb_disposisi . *
FROM tb_disposisi
INNER JOIN tb_user ON tb_user.id_user = tb_disposisi.id_user
INNER JOIN tb_surat ON tb_surat.id_srt = tb_disposisi.id_srt where id_dispo='$id_dispo'");
$d = mysqli_fetch_array($q);
?>
<html>
<head>
<link rel="stylesheet" href="report/css/bootstrap.min.css">

<title>.</title>
</head>
<body>
<div class="row">
<div style="width:20%;float:left;">
<img src="report/css/logo/lambangjatim.jpg" style=" height:140px; margin-left: 30px;">
</div>
<div style="width:60%; float:left;">
<center>
<font size="3">PEMERINTAH PROVINSI JAWA TIMUR</font>
<br>
<font size="4">DINAS PENDIDIKAN</font>
<br>
<font size="4"><b>SEKOLAH MENENGAH KEJURUAN NEGERI 1 SUMENEP<b></font>
<br>
<small>Jl. Truojoyo No. 298 Patean Telp.(0328) 664107, Fax.(0328) 673517</small>
<br>
<small>WebSite : <b><i>http://www.smkn1smn.sch.id</i></b>&nbsp &nbsp &nbsp  Email : info@smk1smn.sch.id</small>
<br>
<font size="4"><u>SUMENEP</U></font>
<br>
<font size="1" style="margin-left:400px;">Kode Post : 69451</font>
</center>
</div>
<div class="row">
<div style="width:20%;float:right;">
<img src="report/css/logo/smk.png" style=" height:140px;">
</div>
</div>
<div class="row">
<center>
<font size="5">LEMBAR DISPOSISI</font>
</center>
</div>
<br>
<div class="row" style="margin-left: 20px;">
<div class="col-md-12">
<table class="table table-bordered">
<tr style="height:50px;">
<td colspan="2">Surat Dari : <?php echo $d['pengirim_srt'];?></td>
</tr>
<tr>
<td style="width:50%;">Diterima Tanggal : <?php echo $d['tgl_srt'];?></td><td style="width:50%;">Nomor Surat : <?php echo $d['kode_srt'];?></td>
</tr>
<tr>
<td style="width:50%;">Id Disposisi : <?php echo $d['id_dispo'];?></td><td style="width:50%;">Id Surat : <?php echo $d['id_srt'];?></td>
</tr>
<tr style="height:50px;">
<td colspan="2">Deskripsi : <?php echo $d['deskripsi'];?></td>
</tr>
<tr>
<td style="height:200px;">Disposisi :
<br>
<b><?php echo$d['notifikasi'];?></b>
<br>
<br>
<br>Sifat :
<b><?php echo$d['klasifikasi'];?></b>
</td>
<td style="">Diteruskan Kepada : 
<br>
<b><?php echo $d['balas_kpd'];?></b></td>
</tr>
</table>
<br>
<div style="width:30%;float:right;">
<center>
<font size="2" align="left">Kepala Sekolah</font>
<br>
<br>
<br>
<br>
<font size="2"><b><u><?php echo $d['dispo_kpd'];?></u></b></font>
<br>
<font size="1">Pembina Tk.1</font>
<br>
<font size="2">NIP. 19641012 198903 1 011</font>
</center>
</div>
</div>
</div>
</body>
</html>
<script>
window.print();
</script>