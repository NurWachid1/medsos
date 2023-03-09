<?php
include "../config/dbconnect.php";
$id_user = $_GET['iduser'];
$sql = $conn->query("DELETE FROM user WHERE iduser='$id_user' ");
?>
<script type="text/javascript">alert("Berhasil Menghapus Data");document.location.href="?page=user";</script>
<?php
?>