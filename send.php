<?php 
include 'dbconnect.php';
if (isset($_POST['submit'])){
$idkritik= $_POST['idkomentar'];
$email = $_POST['email'];
$namauser = $_POST['namauser'];
// $topik = $_POST['topikpesan'];
$pesan = $_POST['pesanWa'];
$no_wa = $_POST['noWA'];
$tgl = date("Y-m-d");
$tambah= mysqli_query($conn,"insert into kritik values ('$idkomentar', '$email', '$namauser', '$pesan','$tgl')");
  if ($tambah){
    header("location:https://api.whatsapp.com/send?phone=$no_wa&text=%20$namauser%20%0D($email%0D)%20:%20$pesan");
  } else { echo "<script>
    alert('Kritik Anda Tidak Terkirim!');
</script>";
  }


}
else{
    echo "
    <script>
    window.location=history.go(-1);
    </script>
    ";
}
?>