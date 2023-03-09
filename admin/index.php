<?php 
	session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}

// Memanggil atau membutuhkan file function.php


	include '../dbconnect.php';
		
	$itungadmin = mysqli_query($conn,"select count(idadmin) as jumlahadmin from `admin`");
	$itungadmin2 = mysqli_fetch_assoc($itungadmin);
	$itungadmin3 = $itungadmin2['jumlahadmin'];
	
	$itungguru = mysqli_query($conn,"select count(idguru) as jumlahguru from guru");
	$itungguru2 = mysqli_fetch_assoc($itungguru);
	$itungguru3 = $itungguru2['jumlahguru'];
	
	$itungkomen = mysqli_query($conn,"select count(idkomentar) as jumlahkomen from komentar");
	$itungkomen2 = mysqli_fetch_assoc($itungkomen);
	$itungkomen3 = $itungkomen2['jumlahkomen'];
	
	?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bagian Admin | SMK PGRI 1 Bangkalan</title>
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
                        <!-- <li><a href="../webadmin/index-admin.php"><span>Kembali ke Website</span></a></li> -->
							<li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Data Kesiswaan
                                    </span></a>
                                <ul class="collapse">
								<li><a href="prestasi.php"><span>Data Prestasi</span></a></li>
								<li><a href="ekskul.php"><span>Data Ekstrakulikuler</span></a></li>
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
			
			
			<!-- header area end -->
			<?php 
			/*
				$periksa_bahan=mysqli_query($conn,"select * from stock_brg where stock <10");
				while($p=mysqli_fetch_array($periksa_bahan)){	
					if($p['stock']>=1){	
						?>	
						<script>
							$(document).ready(function(){
								$('#pesan_sedia').css("color","white");
								$('#pesan_sedia').append("<i class='ti-flag'></i>");
							});
						</script>
						<?php
						echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button>Stok  <strong><u>".$p['nama']. "</u> <u>".($p['jenis'])."</u></strong> yang tersisa kurang dari 10</div>";		
					}
				}
				
				*/
				?>
			
            
            <!-- page title area end -->
            <div class="main-content-inner">
			
                
               <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Admin</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1> <?php echo $itungadmin3 ?></h1>
                                    </div>
									</div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-users" ></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Guru</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php echo $itungguru3 ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-book"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Komentar</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php echo $itungkomen3 ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                
                <!-- overview area end -->
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Selamat Datang</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    Anda masuk sebagai <strong>Admin</strong>
									<br>
									<p>Pada halaman admin, Anda dapat mengelola data kegiatan, prestasi, data admin, dan seluruh hal terkait sekolah serta dapat mengelola data komentar yang diberikan oleh pengunjung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
    </div>
    <!-- page container area end -->

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
