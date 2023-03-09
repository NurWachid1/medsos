<?php
include "../config/dbconnect.php";
$idberita = $_GET['idberita'];
$sql = $conn->query("DELETE FROM berita WHERE idberita='$idberita' ");
?>
<script type="text/javascript">alert("Berhasil Menghapus Data");document.location.href="?page=gambar";</script>
<?php
?>