<?php
include "../config/dbconnect.php";
$idkritik = $_GET['idkomentar'];
$sql = $conn->query("DELETE FROM kritik WHERE idkomentar='$idkritik' ");
?>
<script type="text/javascript">alert("Data Berhasil Dihapus");document.location.href="?page=kritik";</script>
<?php
?>