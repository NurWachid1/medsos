<?php
// Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "smkpgri1bangkalan");

// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $conn;

    $result = mysqli_query($conn, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//fungsi login
function login($data){
    global $conn;error_reporting(0);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);

    if(isset($username)){
        if( $result=query("SELECT * FROM user WHERE username='$username' && password='$password'")[0]){
        var_dump($result);
            if($result["level_user"] === "admin"){
            $_SESSION["login"] = true;
            $_SESSION["id_admin"] = $result["iduser"];
            header("Location: halaman-admin.php");
        }
        elseif($result["level_user"] === "waka") {
            $_SESSION["login"] = true;
            $_SESSION["id_waka"] = $result["iduser"];
            header("Location: halaman-waka.php");
         }}else{
            return [
            'error' => true,
            'pesan' => 'Username atau Kata Sandai yang Anda Masukan Salah'];
            }
        }
}

// Membuat fungsi tambah
// function tambah($data)
// {
//     global $koneksi;

//     $nis = htmlspecialchars($data['nis']);
//     $nama = htmlspecialchars($data['nama']);
//     $tmpt_Lahir = htmlspecialchars($data['tmpt_Lahir']);
//     $tgl_Lahir = $data['tgl_Lahir'];
//     $jekel = $data['jekel'];
//     $jurusan = $data['jurusan'];
//     $email = htmlspecialchars($data['email']);
//     $gambar = upload();
//     $alamat = htmlspecialchars($data['alamat']);

//     if (!$gambar) {
//         return false;
//     }

//     $sql = "INSERT INTO siswa VALUES ('$nis','$nama','$tmpt_Lahir','$tgl_Lahir','$jekel','$jurusan','$email','$gambar','$alamat')";

//     mysqli_query($koneksi, $sql);

//     return mysqli_affected_rows($koneksi);
// }

// Membuat fungsi hapus
// Guru
function hapusguru($idguru)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM guru WHERE idguru = $idguru");
    return mysqli_affected_rows($conn);
}
function ubahguru($dataguru)
{
    global $conn;

    $idguru = $dataguru['idguru'];
    $nip = $dataguru['nip'];
    $guru = $dataguru['namaguru'];
    $keterangan = $dataguru['keterangan'];
    $alamat = $dataguru['alamat'];
    $pendidikanterakhir = $dataguru['pendidikanterakhir'];

    $gambarLama = $dataguru['gambarLama'];

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploadguru();
    }

    $sql = "UPDATE `guru` SET `foto`='$gambar',`nip` = '$nip', `namaguru` = '$guru', `keterangan` = '$keterangan', `alamat` = '$alamat', `pendidikanterakhir` = '$pendidikanterakhir' WHERE `guru`.`idguru` = '$idguru'";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

// Membuat fungsi ubah
// function ubahkatalog($datakatalog)
// {
//     global $conn;

//     $idkatalog = $datakatalog['idkatalog'];
//     $no_inventaris = $datakatalog['no_inventaris'];
//     $invent_museum = $datakatalog['inven_museum'];
//     $idkategori = $datakatalog['idkategori'];
//     $nama_benda = $datakatalog['nama_benda'];
//     $lokasi_asal=$datakatalog['lokasi_asal'];
//     $bahanbenda=$datakatalog['bahan'];
//     $ukuranbenda=$datakatalog['ukuran'];
//     $deskripsi=$datakatalog['deskripsi'];

    // $gambarLama = $datakatalog['gambar'];

    // if ($_FILES['gambar']['error'] === 4) {
    //     $nama = $gambarLama;
    // } else {
    //     $nama = upload();
    // }

//     $sql = "UPDATE `katalog` SET `no_inventaris`='$no_inventaris',`inven_museum`='$invent_museum',`idkategori`='$idkategori',`nama_benda`='$nama_benda',`lokasi_asal`='$lokasi_asal',`bahan`='$bahanbenda',`ukuran`='$ukuranbenda',`deskripsi`='$deskripsi' WHERE `idkatalog`='$idkatalog'";

//     mysqli_query($conn, $sql);

//     return mysqli_affected_rows($conn);
// }

// Membuat fungsi upload gambar
function uploadguru()
{
    // Syarat
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Jika tidak mengupload gambar atau tidak memenuhi persyaratan diatas maka akan menampilkan alert dibawah
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    // format atau ekstensi yang diperbolehkan untuk upload gambar adalah
    $extValid = ['jpg', 'png'];
    $ext = explode('.', $namaFile);
    $ext = strtolower(end($ext));

    // Jika format atau ekstensi bukan gambar maka akan menampilkan alert dibawah
    if (!in_array($ext, $extValid)) {
        echo "<script>alert('Yang anda upload bukanlah gambar!');</script>";
        return false;
    }

    // Jika ukuran gambar lebih dari 3.000.000 byte maka akan menampilkan alert dibawah
    if ($ukuranFile > 4000000) {
        echo "<script>alert('Ukuran gambar anda terlalu besar!');</script>";
        return false;
    }

    // nama gambar akan berubah angka acak/unik jika sudah berhasil tersimpan
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ext;

    // memindahkan file ke dalam folde img dengan nama baru
    move_uploaded_file($tmpName, '../guru/' . $namaFileBaru);

    return $namaFileBaru;
}

// Komentar
function hapuskomentar($idkomentar)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM komentar WHERE idkomentar = '$idkomentar'");
    return mysqli_affected_rows($conn);
}

// Membuat fungsi ubah
// function ubahkomentar($datakomentar)
// {
//     global $conn;

//     $email_user = $datakomentar['email_user'];
//     $nama_user = $datakomentar['nama_user'];
//     $komentar = $datakomentar['komentar'];

    

//     $sql = "UPDATE komen SET email_user = '$email_user', nama_user = '$nama_user', komentar='$komentar'";

//     mysqli_query($conn, $sql);

//     return mysqli_affected_rows($conn);
// }

// Kategori

// function hapuskategori($idkategori)
// {
//     global $conn;

//     mysqli_query($conn, "DELETE FROM kategori WHERE idkategori = $idkategori");
//     return mysqli_affected_rows($conn);
// }

// // Membuat fungsi ubah
// function ubahkategori($datakategori)
// {
//     global $conn;

//     $idkategori = $datakategori['idkategori'];
//     $nama_kategori = $datakategori['nama_kategori'];

    

//     $sql = "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE idkategori='$idkategori'";

//     mysqli_query($conn, $sql);

//     return mysqli_affected_rows($conn);
// }

// Jam Operasional
function ubahwaktu($datawaktu)
{
    global $conn;

    $idwaktu = $datawaktu['idwaktu'];
    $hari = $datawaktu['hari'];
    $jamoperasional = $datawaktu['jamoperasional'];

    

    $sql = "UPDATE `operasional` SET `idwaktu` = '$idwaktu',`hari` = '$hari', `jamoperasional` = '$jamoperasional' WHERE `operasional`.`idwaktu` = $idwaktu";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapuswaktu($idwaktu)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM `operasional` WHERE idwaktu = $idwaktu");
    return mysqli_affected_rows($conn);
}

// Prestasi
function ubahprestasi($dataprestasi)
{
    global $conn;

    $idprestasi = $_POST['idprestasi'];
    $nama = $_POST['nama'];
    $prestasi = $_POST['prestasi'];
    $tahun = $_POST['tahun'];

    

    $sql = "UPDATE `prestasi` SET `prestasi` = '$prestasi',`nama` = '$nama', `tahun` = '$tahun' WHERE `prestasi`.`idprestasi` = '$idprestasi'";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapusprestasi($idprestasi)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM prestasi WHERE idprestasi = $idprestasi");
    return mysqli_affected_rows($conn);
}

// Mapel
function ubahmapel($datamapel)
{
    global $conn;

    $idmapel = $datamapel['idmapel'];
    $kodemp = $datamapel['kodemp'];
    $mapel = $datamapel['namamapel'];

    

    $sql = "UPDATE `mapel` SET `kodemp` = '$kodemp',`namamapel` = '$mapel' WHERE `mapel`.`idmapel` = '$idmapel'";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapusmapel($idmapel)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM mapel WHERE idmapel = $idmapel");
    return mysqli_affected_rows($conn);
}

// Ekstrakurikuler
function ubahekskul($dataekskul)
{
    global $conn;

    $idekskul = $dataekskul['idekskul'];
    $namaekskul = $dataekskul['namaekskul'];
    $deskripsi = $dataekskul['deskripsie'];

    if ($_FILES['foto']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploadekskul();
    }

    $sql = "UPDATE `ekskul` SET `namaekskul` = '$namaekskul', `foto`='$gambar', `deskripsie`='$deskripsi' WHERE `ekskul`.`idekskul` = $idekskul";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function uploadekskul()
{
    // Syarat
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // Jika tidak mengupload gambar atau tidak memenuhi persyaratan diatas maka akan menampilkan alert dibawah
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    // format atau ekstensi yang diperbolehkan untuk upload gambar adalah
    $extValid = ['jpg',  'png'];
    $ext = explode('.', $namaFile);
    $ext = strtolower(end($ext));

    // Jika format atau ekstensi bukan gambar maka akan menampilkan alert dibawah
    if (!in_array($ext, $extValid)) {
        echo "<script>alert('Yang anda upload bukanlah gambar!');</script>";
        return false;
    }

    // Jika ukuran gambar lebih dari 3.000.000 byte maka akan menampilkan alert dibawah
    if ($ukuranFile > 4000000) {
        echo "<script>alert('Ukuran gambar anda terlalu besar!');</script>";
        return false;
    }

    // nama gambar akan berubah angka acak/unik jika sudah berhasil tersimpan
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ext;

    // memindahkan file ke dalam folde img dengan nama baru
    move_uploaded_file($tmpName, '../ekskul/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapusekskul($idekskul)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM ekskul WHERE idekskul = $idekskul");
    return mysqli_affected_rows($conn);
}

// Program Keahlian
function ubahkeahlian($datakeahlian)
{
    global $conn;

    $idkeahlian = $_POST['idkeahlian'];
    $programkeahlian = $_POST['programkeahlian'];

    

    $sql = "UPDATE `keahlian` SET `programkeahlian` = '$programkeahlian' WHERE `keahlian`.`idkeahlian` = $idkeahlian";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapuskeahlian($idkeahlian)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM keahlian WHERE idkeahlian = $idkeahlian");
    return mysqli_affected_rows($conn);
}

// Fasilitas
function ubahfasilitas($datafasilitas)
{
    global $conn;

    $idfasilitas = $datafasilitas['idfasilitas'];
    $namafasilitas = $datafasilitas['namafasilitas'];
    $jumlah = $datafasilitas['jumlah'];
    $deskripsi = $datafasilitas['deskripsi'];

    $gambarLama = $datafasilitas['gambarLama'];

    if ($_FILES['foto']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploadfasilitas();
    }

    $sql = "UPDATE `fasilitas` SET `namafasilitas` = '$namafasilitas', `jumlah` = '$jumlah', `deskripsi`='$deskripsi' WHERE `fasilitas`.`idfasilitas` = '$idfasilitas'";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}
function hapusfasilitas($idfasilitas)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM fasilitas WHERE idfasilitas = $idfasilitas");
    return mysqli_affected_rows($conn);
}
// Membuat fungsi upload gambar
function uploadfasilitas()
{
    // Syarat
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // Jika tidak mengupload gambar atau tidak memenuhi persyaratan diatas maka akan menampilkan alert dibawah
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    // format atau ekstensi yang diperbolehkan untuk upload gambar adalah
    $extValid = ['jpg',  'png'];
    $ext = explode('.', $namaFile);
    $ext = strtolower(end($ext));

    // Jika format atau ekstensi bukan gambar maka akan menampilkan alert dibawah
    if (!in_array($ext, $extValid)) {
        echo "<script>alert('Yang anda upload bukanlah gambar!');</script>";
        return false;
    }

    // Jika ukuran gambar lebih dari 3.000.000 byte maka akan menampilkan alert dibawah
    if ($ukuranFile > 4000000) {
        echo "<script>alert('Ukuran gambar anda terlalu besar!');</script>";
        return false;
    }

    // nama gambar akan berubah angka acak/unik jika sudah berhasil tersimpan
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ext;

    // memindahkan file ke dalam folde img dengan nama baru
    move_uploaded_file($tmpName, '../fasilitas/' . $namaFileBaru);

    return $namaFileBaru;
}
// Admin
function ubahadmin($dataadmin)
{
    global $conn;

    $idadmin = $dataadmin['idadmin'];
    $username = $dataadmin['username'];
    $password = $dataadmin['password'];
    $namaadmin = $dataadmin['namaadmin'];

    $q=mysqli_query($conn, "SELECT*FROM `admin` WHERE `username`='$username'");
        $cek=mysqli_num_rows($q);

        if($cek==0){
            $tambahadmin = mysqli_query($conn,"UPDATE `admin` SET `username` = '$username', `password` = '$password', `namaadmin` = '$namaadmin' WHERE `admin`.`idadmin` = '$idadmin'");
            if ($tambahadmin){
            echo"<script>
                    alert('Data Admin Berhasil Ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
            } else { echo "<script>
                alert('Data Admin Gagal Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
            };
        }
        else{
            echo "<script>
                alert('Username Telah Digunakan!');
                document.location.href = 'admin.php';
            </script>";
        }

    // $sql = "UPDATE `user` SET `username` = '$username', `password` = '$password', `namaadmin` = '$namaadmin' WHERE `user`.`idadmin` = '$idadmin'";

    // mysqli_query($conn, $sql);

    // return mysqli_affected_rows($conn);
}
function hapusadmin($idadmin)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM `admin` WHERE idadmin = $idadmin");
    return mysqli_affected_rows($conn);
}
// Kegiatan
function ubahkegiatan($datakegiatan)
{
    global $conn;

    $idkegiatan = $datakegiatan['idkegiatan'];
    $namakegiatan = $datakegiatan['namakegiatan'];
    $deskripsi = $datakegiatan['deskripsik'];

    $gambarLama = $datakegiatan['gambarLama'];

    if ($_FILES['foto']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploadkegiatan();
    }

    $sql = "UPDATE `kegiatan` SET `namakegiatan` = '$namakegiatan', `deskripsik`='$deskripsi' WHERE `kegiatan`.`idkegiatan` = '$idkegiatan'";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}
function hapuskegiatan($idkegiatan)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM kegiatan WHERE idkegiatan = $idkegiatan");
    return mysqli_affected_rows($conn);
}
// Membuat fungsi upload gambar
function uploadkegiatan()
{
    // Syarat
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // Jika tidak mengupload gambar atau tidak memenuhi persyaratan diatas maka akan menampilkan alert dibawah
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    // format atau ekstensi yang diperbolehkan untuk upload gambar adalah
    $extValid = ['jpg', 'png'];
    $ext = explode('.', $namaFile);
    $ext = strtolower(end($ext));

    // Jika format atau ekstensi bukan gambar maka akan menampilkan alert dibawah
    if (!in_array($ext, $extValid)) {
        echo "<script>alert('Yang anda upload bukanlah gambar!');</script>";
        return false;
    }

    // Jika ukuran gambar lebih dari 3.000.000 byte maka akan menampilkan alert dibawah
    if ($ukuranFile > 4000000) {
        echo "<script>alert('Ukuran gambar anda terlalu besar!');</script>";
        return false;
    }

    // nama gambar akan berubah angka acak/unik jika sudah berhasil tersimpan
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ext;

    // memindahkan file ke dalam folde img dengan nama baru
    move_uploaded_file($tmpName, '../kegiatan/' . $namaFileBaru);

    return $namaFileBaru;
}