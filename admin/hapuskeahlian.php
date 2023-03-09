<?php
session_start();
// // Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
// if (!isset($_SESSION['login'])) {
//     header('location:login.php');
//     exit;
// }
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Mengambil data dari nis dengan fungsi get
$idkeahlian = $_GET['idkeahlian'];

// Jika fungsi hapus lebih dari 0/data terhapus, maka munculkan alert dibawah
if (hapuskeahlian($idkeahlian) > 0) {
    echo "<script>
                alert('Program Keahlian Berhasil Dihapus!');
                document.location.href = 'keahlian.php';
            </script>";
} else {
    // Jika fungsi hapus dibawah dari 0/data tidak terhapus, maka munculkan alert dibawah
    echo "<script>
            alert('Program Keahlian Gagal Dihapus!');
        </script>";
}
