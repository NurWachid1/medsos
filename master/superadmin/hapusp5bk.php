<?php
include "../config/dbconnect.php";
$idp5bk = $_GET['idp5bk'];
$sql = $conn->query("DELETE FROM p5bk WHERE idp5bk='$idp5bk' ");
?>
<script type="text/javascript">alert("Berhasil Menghapus Data");document.location.href="?page=p5bk";</script>
<?php
?>