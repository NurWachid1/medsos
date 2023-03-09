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
$idkatalog = $_GET['idkatalog'];

// Mengambil data dari table siswa dari idkategori yang tidak sama dengan 0
// $data = mysqli_query($conn,"SELECT * FROM `katalog` where idkatalog='$idkatalog'");

// while ($katalog = mysqli_fetch_array($data)) {
//     # code...


// Jika fungsi ubah lebih dari 0/data terubah, maka munculkan alert dibawah
$katalog = query("SELECT * FROM `katalog` WHERE `idkatalog` = '$idkatalog'")[0];

// Jika fungsi ubah lebih dari 0/data terubah, maka munculkan alert dibawah
if (isset($_POST['ubahkatalog'])) {
    if (ubahkatalog($_POST) > 0) {
        echo "<script>
                alert('Data Katalog berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi ubah dibawah dari 0/data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data Katalog gagal diubah!');
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
    <title>Kelola Katalog</title>
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
							<!-- <li><a href=",,/webadmin/index-admin.php"><span>Kembali ke Website</span></a></li> -->
							<li class="active">
                                <a href="katalog.php" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Katalog
                                    </span></a>
                                <!-- <ul class="collapse">
                                    <li><a href="kategori.php">Kategori</a></li>
                                    <li class="active"><a href="katalog.php">Katalog</a></li>
                                    <li><a href="mapel.php">Mata Pelajaran</a></li>
                                </ul> -->
                            </li>
							<li>
                                <a href="komentar.php"><i class="ti-notepad"></i><span>Kelola Komentar</span></a>
                            </li>
							
							<li><a href="user.php"><span>Kelola Pengguna</span></a></li>
                            <li>
                                <a href="../logout.php"><span>Keluar</span></a>
                                
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
						// <!--
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
                <h3 class="fw-bold text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;Ubah Data Katalog</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label for="idkatalog" class="form-label">ID KATALOG</label>
                        <input type="number" class="form-control w-50" id="idkatalog" value="<?= $katalog['idkatalog']; ?>" name="idkatalog" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="no_inventaris" class="form-label">No Inventaris</label>
                        <input type="text" class="form-control w-50" id="no_inventaris" value="<?= $katalog['no_inventaris']; ?>" name="no_inventaris" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="inven_museum" class="form-label">Inventaris Museum</label>
                        <input type="text" class="form-control w-50" id="inven_museum" value="<?= $katalog['inven_museum']; ?>" name="inven_museum" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_benda" class="form-label">Nama Benda</label>
                        <input type="text" class="form-control w-50" id="nama_benda" value="<?= $katalog['nama_benda']; ?>" name="nama_benda" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
									<label>Nama Kategori</label>
									<select name="idkategori" class="form-control">
									<option selected>Pilih Kategori</option>
                                    <?php
                                        // foreach ($kelas as $row) { 
                                        // $selected = '';
                                        // if ($ubah['id_kelas'] == $row->id_kelas) {
                                        // $selected = 'selected';
                                        // }
                                     ?>
									<?php


									$det=mysqli_query($conn,"select * from kategori order by nama_kategori ASC")or die(mysqli_error());
									while($d=mysqli_fetch_array($det)){
                                        $selected="";
                                        if ($katalog['idkategori']==$d['idkategori']) {
                                            $selected = 'selected';
                                        }
									?>
										<option value="<?php echo $d['idkategori'] ?>" <?= $selected ?>><?php echo $d['nama_kategori'] ?></option>
										<?php
								}
								?>		
									</select>
									
								</div>
                    <div class="mb-3">
                        <label for="lokasi_asal" class="form-label">Lokasi Asal</label>
                        <input type="text" class="form-control w-50" id="lokasi_asal" value="<?= $katalog['lokasi_asal']; ?>" name="lokasi_asal" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="bahan" class="form-label">Bahan</label>
                        <input type="text" class="form-control w-50" id="bahan" value="<?= $katalog['bahan']; ?>" name="bahan" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">Ukuran</label>
                        <input type="text" class="form-control w-50" id="ukuran" value="<?= $katalog['ukuran']; ?>" name="ukuran" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control w-50" id="deskripsi" value="<?= $katalog['deskripsi']; ?>" name="deskripsi" autocomplete="off" required>
                    </div>
                    
                    <hr>
                    <a href="katalog.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning" name="ubahkatalog">Ubah</button>
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