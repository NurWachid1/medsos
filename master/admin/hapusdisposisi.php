<?php
include "../config/koneksi.php";
$id_dispo = @$_GET['id_dispo'];
mysqli_query($conn	,"DELETE FROM tb_disposisi WHERE id_dispo='$id_dispo'");
?>
<script type="text/javascript">alert("Hapus data  berhasil"); window.location.href="?page=dispo";

</script>
