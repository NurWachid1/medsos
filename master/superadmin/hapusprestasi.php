<?php
include "../config/dbconnect.php";
$idprestasi = $_GET['idprestasi'];
$sql = $conn->query("DELETE FROM prestasi WHERE idprestasi='$idprestasi' ");
?>
<script type="text/javascript">alert("Berhasil Menghapus Data");document.location.href="?page=prestasi";</script>
<?php
?>