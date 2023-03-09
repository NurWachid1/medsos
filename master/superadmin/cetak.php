<?php
include "../config/dbconnect.php";
$id_srt =@$_GET['id_srt'];
$q= mysqli_query($conn,"SELECT tb_user. * , tb_surat. * FROM tb_surat INNER JOIN tb_user ON tb_user.id_user = tb_surat.id_user where id_srt='$id_srt'");
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
<font size="1" style="margin-left:350px;">Kode Post : 69451</font>
</center>
</div>
<div style="width:20%;float:right;">
<img src="report/css/logo/smk.png" style="height:140px;">
</div>
</div>
<div class="row">
<center>
<font size="5">LEMBAR SURAT</font>
</center>
</div>
<br>
<div class="row">
<div class="col-md-12">
<table>
<tr style="height:50px;">
<td style="width: 50%;">Nomor : <?php echo $d['kode_srt'];?></td><td style="width:50%;text-align: right;">sumenep, <?php echo $d['tgl_srt'];?></td>
</tr>
<tr>
<td style="width: 50%;">Dari : <?php echo $d['pengirim_srt']; ?></td><td style="width:50%;padding-left: 220px">Kepada</td>
</tr>
<tr style="height:50px;">
<td style="width: 50%;"></td><td style="width:50%;padding-left: 230px;">Yth. <?php echo $d['tujuan_srt'];?></td>
</tr>
<br>
<td colspan="2"><p style="padding-left: 50px; padding-top: 30px;"> Dengan Memohon rahmat dan ridho ALLAH SWT, maka dengan adanya surat ini <?php echo $d['deskripsi_srt'] ?>, pada :</td>
<tr>
<td colspan="2" style="padding-left: 79px; padding-top: 20px;">Hari &nbsp &nbsp  : <?php echo $d['hari'];?>  </td>
</tr>
<tr>
<td colspan="2" style="padding-left: 77px; padding-top: 20px;">Waktu &nbsp  : <?php echo $d['waktu'];?>  </td>
</tr>
<tr>
<td colspan="2" style="padding-left: 74px; padding-top: 20px;">Tanggal : <?php echo $d['tgl'];?> </td>
</tr>
<tr>
<td colspan="2" style="padding-left: 77px; padding-top: 20px;">Tempat :  <?php echo $d['tempat'];?> </td>
</tr>
<tr>
<td colspan="2" style="padding-left: 80px; padding-top: 20px;">Acara &nbsp : <?php echo $d['subjek_srt']; ?></td>
</tr>
<tr>
<td colspan="2"><p style="padding-left: 50px; padding-top: 50px;">Demikian surat ini kami sampaikan, apa bila ada tutur kata yang kurang menyenangkan kami mohon maaf yang sebesar-besarnya. Atas perhatiannya kami ucapkan terimakasih</td>
</tr>
</table>
<br>
<div style="width:30%;float:right;">
<center>
<font size="2" align="left">Hormat Kami</font>
<br>
<font size="2" align="left">Kepala Sekolah SMKN 1 Sumenep</font>
<br>
<br>
<br>
<br>
<font size="2"><b><u>ISHAK, S.Pd</u></b></font>
<br>
<font size="1">-</font>
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