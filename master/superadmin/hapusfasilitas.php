<?php
include "../config/dbconnect.php";
$idfasilitas = $_GET['idfasilitas'];
$sql = $conn->query("DELETE FROM fasilitas WHERE idfasilitas='$idfasilitas' ");
?>
<script type="text/javascript">alert("Berhasil Menghapus Data");document.location.href="?page=fasilitas";</script>
<?php
?>