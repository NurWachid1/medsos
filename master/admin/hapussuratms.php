<?php
include "../config/koneksi.php";
$id_srt = $_GET['id_srt'];
mysqli_query($conn	,"DELETE FROM tb_disposisi WHERE id_srt='$id_srt'");
$sql = $conn->query("DELETE FROM tb_surat WHERE id_srt='$id_srt' ");

?>
<script type="text/javascript">alert("Surat berhasil di hapus");document.location.href="?page=surat";</script>
<?php
?>