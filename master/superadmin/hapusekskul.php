<?php
include "../config/dbconnect.php";
$idekskul = $_GET['idekskul'];
$sql = $conn->query("DELETE FROM ekskul WHERE idekskul='$idekskul' ");
?>
<script type="text/javascript">alert("Berhasil Menghapus Data");document.location.href="?page=ekskul";</script>
<?php
?>