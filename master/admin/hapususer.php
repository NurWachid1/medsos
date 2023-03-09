<?php
include "../config/koneksi.php";
$id_user = $_GET['id_user'];
$sql = $conn->query("DELETE FROM tb_user WHERE id_user='$id_user' ");
?>
<script type="text/javascript">alert("User berhasil di hapus");document.location.href="?page=user";</script>
<?php
?>