<?php
include "../config/dbconnect.php";
$id_guru = $_GET['id_guru'];
$sql = $conn->query("DELETE FROM guru WHERE idguru='$id_guru' ");
?>
<script type="text/javascript">alert("Data Telah Dihapus");document.location.href="?page=guru";</script>
<?php
?>