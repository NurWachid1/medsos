<?php
include "../config/dbconnect.php";
$idpipas = $_GET['idpipas'];
$sql = $conn->query("DELETE FROM pipas WHERE idpipas='$idpipas' ");
?>
<script type="text/javascript">alert("Berhasil Menghapus Data");document.location.href="?page=pipas";</script>
<?php
?>