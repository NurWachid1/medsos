<?php
include "../config/dbconnect.php";
$idmapel = $_GET['idmapel'];
$sql = $conn->query("DELETE FROM mapel WHERE idmapel='$idmapel' ");
?>
<script type="text/javascript">alert("Berhasil Menghapus Data");document.location.href="?page=mapel";</script>
<?php
?>