<?php
// Memanggil atau membutuhkan file function.php
include "../config/dbconnect.php";

// Menampilkan semua data dari table siswa berdasarkan nis secara Descending
// $siswa = query("SELECT * FROM kritik ORDER BY idkomentar DESC");
// $id_komentar =@$_GET['idkomentar'];
// $q= mysqli_query($conn,"SELECT * FROM kritik ORDER BY idkomentar DESC");
// $d = mysqli_fetch_array($q);
// $kritik = $conn->query("SELECT * FROM kritik ORDER BY idkomentar DESC");

// Membuat nama file

?>
<html>
    
<body>
    <?php
    $filename = "data kritik-" . date('Ymd') . ".xls";

    // Kodingam untuk export ke excel
    header("Content-Type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Kritik.xls");
    
    ?>
    <center>
        <h2>Data Kritik/Saran</h2>
    </center>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Komentar</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <?php
    $no=1;
    $kritik=mysqli_query($conn, "SELECT * FROM kritik ORDER BY idkomentar DESC");
    while($data = mysqli_fetch_assoc($kritik))
    {
    ?>
    <tbody class="text-center">
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['email']; ?></td>
                <td><?= $data['namauser']; ?></td>
                <td><?= $data['komentar']; ?></td>
                <td><?= $data['tglkirim']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
        </body>

</html>