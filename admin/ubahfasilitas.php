<?php
session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}

// Memanggil atau membutuhkan file function.php
require 'function.php';

// Mengambil data dari nis dengan fungsi get
$idfasilitas = $_GET['idfasilitas'];

// Mengambil data dari table siswa dari idkategori yang tidak sama dengan 0
$fasilitas = query("SELECT * FROM fasilitas WHERE idfasilitas = $idfasilitas")[0];

// Jika fungsi ubah lebih dari 0/data terubah, maka munculkan alert dibawah
if (isset($_POST['ubahfasilitas'])) {
    if (ubahfasilitas($_POST) > 0) {
        echo "<script>
                alert('Data Fasilitas Berhasil Diubah!');
                document.location.href = 'fasilitas.php';
            </script>";
    } else {
        // Jika fungsi ubah dibawah dari 0/data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data Fasilitas Gagal Diubah!');
            </script>";
    }
}


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Fasilitas | SMK PGRI 1 Bangkalan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
	
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                <nav>
                        <ul class="metismenu" id="menu">
                        <li><a href="index.php"><span>Beranda</span></a></li>
                        <li><a href="admin.php"><i class="ti-user"></i><span>Data Admin</span></a></li>
							<!-- <li><a href=",,/webadmin/index-admin.php"><span>Kembali ke Website</span></a></li> -->
							<li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Data Kesiswaan
                                    </span></a>
                                <ul class="collapse">
								<li><a href="prestasi.php"><span>Data Prestasi</span></a></li>
								<li><a href="ekskul.php"><span>Data Ekstrakurikuler</span></a></li>
                                </ul>
                            </li>
							<li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-ruler-pencil"></i><span>Kelola Data Kurikulum
                                    </span></a>
                                <ul class="collapse">
                                    <!-- <li class="active"><a href="keahlian.php">Program Keahlian</a></li> -->
                                    <li class="active"><a href="mapel.php">Data Mata Pelajaran</a></li>
                                </ul>
                            </li>
                            <li><a href="guru.php"><i class="ti-id-badge"></i><span> Data Guru</span></a></li>
                            <li><a href="kegiatan.php"><i class="ti-calendar"></i><span> Data Kegiatan</span></a></li>
                            <li><a href="fasilitas.php"><span>Data Fasilitas</span></a></li>
                            
                            <!-- <li><a href="operasional.php"><span>Kelola Jam Operasional</span></a></li> -->
                            <li>
                                <a href="komentar.php"><i class="ti-notepad"></i><span>Data Komentar</span></a>
                            </li>
							<!-- <li><a href="user.php"><span>Kelola Admin</span></a></li> -->
							
                            
                            <li>
                                <a href="logout.php"><span>Keluar</span></a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
    <!-- Close Navbar -->

    <!-- Container -->
    <div class="main-content-inner">
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;Ubah Data Fasilitas</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="gambarLama" value="<?= $fasilitas['foto']; ?>">
                    <div class="mb-3">
                        <label for="idfasilitas" class="form-label">ID FASILITAS<span style="color: red">*</span></label>
                        <input type="number" class="form-control w-50" id="idfasilitas" value="<?= $fasilitas['idfasilitas']; ?>" name="idfasilitas" readonly>
                    </div>
                    
                    <div class="mb-3">
                        <label for="foto" class="form-label">Gambar <i>(Saat ini)</i><span style="color: red">*</span></label> <br>
                        <img src="../fasilitas/<?= $fasilitas['foto']; ?>" width="20%" style="margin-bottom: 10px;">
                        <input class="form-control form-control-sm w-50" id="foto" name="foto" type="file">
                        <p style="font-size: 12px"><b>File yang Diterima:</b> jpg, png maks. 4MB</p>
                    </div>
                    <div class="mb-3">
                        <label for="namafasilitas" class="form-label">Fasilitas<span style="color: red">*</span></label>
                        <input type="text" class="form-control w-50" id="namafasilitas" value="<?= $fasilitas['namafasilitas']; ?>" name="namafasilitas" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah<span style="color: red">*</span></label>
                        <input type="number" class="form-control w-50" id="jumlah" value="<?= $fasilitas['jumlah']; ?>" name="jumlah" autocomplete="off" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi<span style="color: red">*</span></label>
                        <input type="text" class="form-control w-50"  id="deskripsi" value="<?= $fasilitas['deskripsi']; ?>" name="deskripsi" autocomplete="off" required>
                    </div>
                    <hr>
                    <a href="fasilitas.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning" name="ubahfasilitas">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- Close Container -->

<!-- jquery latest version -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>