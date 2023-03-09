<?php 
	session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}

// Memanggil atau membutuhkan file function.php
// require 'function.php';
	include 'dbconnect.php';
			
	if(isset($_POST["addekskul"])) {
		$deskripsi=$_POST['deskripsie'];
		$namaekskul=$_POST['namaekskul'];
		
		
		
		// $nama_file = $_FILES['uploadgambar']['name'];
		// $ext = pathinfo($nama_file, PATHINFO_EXTENSION);
		// $random = crypt($nama_file, time());
		// $ukuran_file = $_FILES['uploadgambar']['size'];
		// $tipe_file = $_FILES['uploadgambar']['type'];
		// $tmp_file = $_FILES['uploadgambar']['tmp_name'];
		// $path = "../katalog/".$random.'.'.$ext;
		// $pathdb = "katalog/".$random.'.'.$ext;

		// $nama_link = $_FILES['uploadlink']['name'];
		// $ext = pathinfo($nama_link, PATHINFO_EXTENSION);
		// $random = crypt($nama_link, time());
		// $ukuran_file = $_FILES['uploadlink']['size'];
		// $tipe_file = $_FILES['uploadlink']['type'];
		// $tmp_file = $_FILES['uploadlink']['tmp_name'];
		// $path = "../link/".$random.'.'.$ext;
		// $pathdb2 = "link/".$random.'.'.$ext;

		$ekstensi_diperbolehkan	= array('png','jpg');
			$namabaru = $_FILES['uploadgambar']['name'];
			$x = explode('.', $namabaru);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['uploadgambar']['size'];
			$file_tmp = $_FILES['uploadgambar']['tmp_name'];	
		
			// $ekstensi_diperbolehkan2	= array('php','html');
			// $nama2 = $_FILES['uploadlink']['name'];
			// $x = explode('.', $nama);
			// $ekstensi2 = strtolower(end($x));
			// $ukuran2	= $_FILES['uploadlink']['size'];
			// $file_tmp2 = $_FILES['uploadlink']['tmp_name'];
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1944070){			
					move_uploaded_file($file_tmp, '../ekskul/'.$namabaru);
					$query = "insert into ekskul (`namaekskul`,`foto`, `deskripsie`) values('$namaekskul','$namabaru','$deskripsi')";
			  		$sql = mysqli_query($conn, $query);
					
					if($sql){
						echo "<script>
                alert('Data Ekstra Berhasil Ditambahkan!');
                document.location.href = 'ekskul.php';
            </script>";
					}else{
						echo "<script>
                alert('Data Ekstra Gagal Diubah!');
            </script>";
					}
				}else{
					echo "<script>
					alert('Ukuran Terlalu Besar!');
				</script>";;
				}
			}else{
				echo "<script>
                alert('File Bukan Termasuk JPG/PNG!');
            </script>";;
			}
	
	};

	// if(isset($_POST["addlink"])) {
	// 	// $no_inventaris=$_POST['no_inventaris'];
	// 	// $invent_museum=$_POST['inven_museum'];
	// 	// $idkategori=$_POST['idkategori'];
	// 	// // // $gambar_katalog=$_POST['gambar'];
	// 	// $nama_benda=$_POST['nama_benda'];
	// 	// // $idkategori=$_POST['idkategori'];
	// 	// $lokasi_asal=$_POST['lokasi_asal'];
	// 	// $bahanbenda=$_POST['bahan'];
	// 	// $ukuranbenda=$_POST['ukuran'];
	// 	// $deskripsi=$_POST['deskripsi'];

	// $ekstensi_diperbolehkan2	= array('php','html');
	// 		$nama2 = $_FILES['uploadlink']['name'];
	// 		$x2 = explode('.', $nama2);
	// 		$ekstensi2 = strtolower(end($x2));
	// 		$ukuran2	= $_FILES['uploadlink']['size'];
	// 		$file_tmp2 = $_FILES['uploadlink']['tmp_name'];
 
	// 		if(in_array($ekstensi2, $ekstensi_diperbolehkan2) === true){
	// 			if($ukuran2 < 1044070){			
	// 				move_uploaded_file($file_tmp2, '../akses_link/'.$nama2);
	// 				$query2 = "UPDATE `katalog` SET `akses_link` = '$nama2' WHERE `idkatalog='$idkatalog'";
	// 		  		$sql2 = mysqli_query($conn, $query2);
					
	// 				if($sql2){
	// 					echo 'FILE BERHASIL DI UPLOAD';
	// 				}else{
	// 					echo 'GAGAL MENGUPLOAD FILE';
	// 				}
	// 			}else{
	// 				echo 'UKURAN FILE TERLALU BESAR';
	// 			}
	// 		}else{
	// 			echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	// 		}

	// 	};
	?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMK PGRI 1 BANGKALAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="vendor/assets/img/logo-pgri.png" rel="icon">
  <link href="vendor/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  
  <link rel="stylesheet" href="admin/assets/css/default-css.css">
    <link rel="stylesheet" href="admin/assets/css/styles.css">
    <link rel="stylesheet" href="admin/assets/css/responsive.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	
     <!-- stylesheet -->
<link rel="stylesheet" href="vendor/assets/css/style.default.css" id="theme-stylesheet">

<!-- Template Main CSS File -->
<link href="vendor/assets/css/style_index.css?v=<?php echo time(); ?>" rel="stylesheet">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- preloader area end -->
    <!-- page container area start -->
     <!-- ======= Header ======= -->
  <header class="nav-holder make-sticky" >
    <div class="navbar navbar-light bg-white navbar-expand-lg py-0" id="navbar" >
          <div class="container py-3 py-lg-0 px-lg-0">
      <div class="logo">
        <h4><img src="vendor/images/logo-pgri.png" class="animated-logo" alt="" height="50" width="48"><a href="index.php"  style="color: white">SMK PGRI 1 BANGKALAN</a></h4>
      </div>
      <button class="navbar-toggler text-primary border-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navigationCollapse" aria-controls="navigationCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="sr-only">Menu Navigasi</span><i class="fas fa-align-justify"></i></button>
      <!-- Collapsed Navigation    -->
      <div class="collapse navbar-collapse" id="navigationCollapse">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- Menu -->
                <li class="nav-item"><a class="nav-link " id="hpDropdown" href="index.php" role="button" aria-expanded="false">Beranda</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="contactMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                  <ul class="dropdown-menu dropdown-menu-end m-0" aria-labelledby="contactMegamenu">
                    <li><a class="dropdown-item text-uppercase border-bottom" href="index.php#profil">Profil Sekolah</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="sejarah.php">Sejarah</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="visi-misi.php">Visi Misi dan Tujuan</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="struk-organ.php">Struktur Organinasi</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="kegiatan.php">Kegiatan</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="fasilitas.php">Fasilitas</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="jamoperasional.php">Jam Operasional</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="contactMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kurikulum</a>
                  <ul class="dropdown-menu dropdown-menu-end m-0" aria-labelledby="contactMegamenu">
                    <li><a class="dropdown-item text-uppercase border-bottom" href="programahli.php">Program Keahlian</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="mapel.php">Mata Pelajaran</a></li>

                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="contactMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kesiswaan</a>
                  <ul class="dropdown-menu dropdown-menu-end m-0" aria-labelledby="contactMegamenu">
                    <li><a class="dropdown-item text-uppercase border-bottom" href="prestasi.php">Prestasi</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="ekskul.php">Ekstrakulikuler</a></li>
                  </ul>
                </li>
                <li class="nav-item menu-large"><a class="nav-link " id="featuresMegamenu" href="guru.php" role="button"  aria-expanded="false">Guru dan Tendik</a>
                </li>
                
                 <li class="nav-item "><a class="nav-link" id="allPagesMegamenu" href="index.php#medsos"  aria-expanded="false">Medsos</a>
                </li>
                <li class="nav-item "><a class="nav-link" id="allPagesMegamenu" href="komentar.php"  aria-expanded="false">Komentar</a>
                </li>
                <li class="nav-item "><a class="nav-link" id="allPagesMegamenu" href="lokasi.php"  aria-expanded="false">Lokasi</a>
                </li>
                
              </ul>
        </div>
          </div>
        </div>
        </nav>
      <!-- .navbar -->
  </header><!-- End Header -->

  

  <main id="main">

  <section class="bg-pentagon py-4">
              <div class="container py-3">
                <div class="row d-flex align-items-center gy-4">
                  <div class="col-md-7">
                    <h1 class="h2 mb-0 text-uppercase">Ekstrakurikuler</h1>
                  </div>
                  <div class="col-md-5">
                    <!-- Breadcrumb-->
                    <ol class="text-sm justify-content-start justify-content-lg-end mb-0 breadcrumb undefined">
                      <li class="breadcrumb-item"><a class="text-uppercase" href="index.php">Kesiswaan</a></li>
                      <li class="breadcrumb-item text-uppercase active">Ekstrakurikuler</li>
                    </ol>
                  </div>
                </div>
              </div>
            </section>

   
    <!-- ======= profil Section ======= -->
    <section class="py-5 bg-fixed bg-cover bg-center dark-overlay" style="background: url(vendor/assets/img/foto-pgri.jpeg)">
        <div class="overlay-content">
          <div class="container py-4 text-white text-center">
            <div class="icon icon-outlined icon-lg mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg>
            </div>
            <h2 class="text-uppercase mb-3">SMK PGRI 1 Bangkalan</h2>
            <!-- <p class="lead mb-4">Museum Cakraningrat merupakan museum yang terletak pada Kabupaten Bangkalan. Museum ini terletak pada Jl. Soekarno Hatta No.35, Wr 08, Mlajah, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 6911</p> -->
          </div>
        </div>
      </section>
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
            
            
            <!-- page title area end -->
            <div class="main-content-inner">
               
                <!-- Katalog area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
							<h2>Data Ekstrakurikuler</h2>
							<div class="row my-2">
								<div class="col-md">
								<!-- <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Tambah Ekstrakurikuler</button> -->
								<!-- <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal2" class="btn btn-success ms-1">Tambah Akses Link</button> -->
								</div>
							</div>
                                
                                    <div class="data-tables datatable-dark">
										 <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No.</th>
												<!-- <th>Foto</th> -->
												<th>Nama Ekstrakurikuler</th>
												<!-- <th>Deskripsi</th> -->
												<!-- <th>Aksi</th> -->
												
											</tr></thead><tbody>
											<?php 
											$brgs=mysqli_query($conn,"SELECT * from `ekskul`");
											$no=1;
											while($p=mysqli_fetch_array($brgs)){
												
												?>
												
												<tr>
													<td><?php echo $no++?></td>
													<td><img src="ekskul/<?php echo $p['foto'] ?>" width="50%"\></td>
													
													<td><?php echo $p['namaekskul'] ?></td>
													<!-- <td><?php echo $p['deskripsie'] ?></td> -->
													<!-- <td><a href="ubahekskul.php?idekskul=<?= $p['idekskul']; ?>" class="btn btn-warning btn-sm" style="font-weight: 600;"><i class="bi bi-pencil-square"></i>&nbsp;Ubah</a> |
													<a href="hapusekskul.php?idekskul=<?= $p['idekskul']; ?>" class="btn btn-danger btn-sm" style="font-weight: 600;" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $row['namaekskul']; ?> ?');"><i class="bi bi-trash-fill"></i>&nbsp;Hapus</a> -->
												</td>
												</tr>		
												
												<?php 
											}
											
												
											
		
											?>
										</tbody>
										</table>
                                    </div>
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
                                        </main>
	<!-- modal input -->
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Ekstrakurikuler</h4>
						</div>
						
						<div class="modal-body">
						<form action="ekskul.php" method="post" enctype="multipart/form-data" >
						
								<div class="form-group">
									<label>Nama Ekstrakurikuler</label>
									<input name="namaekskul" type="text" placeholder="Masukkan Nama Ekstra" class="form-control" required autofocus>
								</div>	
								<div class="form-group">
									<label>Deskripsi</label>
									<input name="deskripsie" type="text" placeholder="Masukkan Deskripsi" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Foto</label>
									<input name="uploadgambar" type="file" class="form-control">
								</div>
								<!-- <div class="form-group">
									<label>Akses Link</label>
									<input name="uploadlink" type="file" class="form-control">
								</div> -->

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input name="addekskul" type="submit" class="btn btn-primary" value="Tambah">
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- modal input
			<div id="myModal2" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Akses Link</h4>
						</div>
						
						<div class="modal-body">
						<form action="katalog.php" method="post" enctype="multipart/form-data" >
						<div class="form-group">
									
								<div class="form-group">
									<label>Akses Link</label>
									<input name="uploadlink" type="file" class="form-control">
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input name="addlink" type="submit" class="btn btn-primary" value="Tambah">
							</div>
						</form>
					</div>
				</div>
			</div> -->
	
	<script>
	$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	} );
	</script>
	
	<!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- Start datatable js -->
	 <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
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
