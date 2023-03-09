<?php
include "../config/dbconnect.php";
$idkegiatan = $_GET['idkegiatan'];
$sql = $conn->query("DELETE FROM kegiatan WHERE idkegiatan='$idkegiatan' ");
?>
<script type="text/javascript">alert("Berhasil Menghapus Data");document.location.href="?page=kegiatan";</script>
<?php
?>