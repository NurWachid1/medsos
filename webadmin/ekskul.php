<?php
include 'dbconnect.php';
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
  <link href="../vendor/assets/img/logo-pgri.png" rel="icon">
  <link href="../vendor/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <!-- Vendor CSS Files -->
  <link href="../vendor/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../vendor/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../vendor/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../vendor/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../vendor/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <!-- stylesheet -->
<link rel="stylesheet" href="../vendor/assets/css/style.default.css" id="theme-stylesheet">

  <!-- Template Main CSS File -->
  <link href="../vendor/assets/css/style_index.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>

  <!-- ======= Header ======= -->
  <header class="nav-holder make-sticky" >
    <div class="navbar navbar-light bg-white navbar-expand-lg py-0" id="navbar" >
          <div class="container py-3 py-lg-0 px-lg-0">
      <div class="logo">
        <h4><img src="../vendor/images/logo-pgri.png" class="animated-logo" alt="" height="50" width="48"><a href="index.php"  style="color: white">SMK PGRI 1 BANGKALAN</a></h4>
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

      <!-- ACCORIOND SECTION-->
      <section class="py-5">
        <div class="container">
          <div class="row g-5">
            <!-- PAGE CONTENT-->
            <div class="col-lg-12">
              <div class="accordion mb-5" id="accordion1">
              <p>SMK PGRI 1 Bangkalan memiliki kegiatan ekstrakurikuler seperti di bawah ini: 
</p>        
                      <div class="accordion-item mb-2">
                      
                        <h5 class="accordion-header" id="accordion1-headingTwo">
                          <button class="accordion-button text-uppercase fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseTwo" aria-expanded="false" aria-controls="accordion1-collapseTwo">Data Ekstrakurikuler</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="accordion1-collapseTwo" aria-labelledby="accordion1-collapseTwo" data-bs-parent="#accordion1">
                          <div class="accordion-body">
                            <div class="row">
                            <div class="data-tables datatable-dark">
								<table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead class="thead-dark">
									<tr>
									<th>No</th>
									<th style="text-align:center">Ekstrakurikuler</th>
									</tr></thead><tbody>
                                    <?php 
											$brgs=mysqli_query($conn,"SELECT * from ekskul order by idekskul ASC");
											$no=1;
											while($p=mysqli_fetch_array($brgs)){
												?>
												
												<tr>
													<!-- <td></td> -->
                                                    <td><?php echo $no++?></td>
													<td style="text-align:center"><a href="detail4.php?idekskul=<?=  $p['idekskul'] ?>"><?php echo $p['namaekskul'] ?>
                                                </td>
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
        </div>
                                            </div>
                                            </div>
      </section>
  

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-8">
            <div class="footer-info">
              <h3>SMK PGRI 1 BANGKALAN</h3>
              <p>
                <strong>Alamat:</strong> Jl. Kapten Safiri No. 17 Bangkalan, Pejagan, Kec. Bangkalan, Kab. Bangkalan Prov. Jawa Timur<br>
                <strong>Telepon:</strong> 0896 1389 9282<br>
                <strong>Email:</strong> smkpgri1bkl@gmail.com<br>
              </p>
              
            </div>
          </div>


          <div class="col-lg-4 col-md-8 footer-links">
            <h4>Akun</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Profil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Katalog</a></li>
            </ul>
          </div>

          


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SMK PGRI 1 BANGKALAN</span></strong>
      </div>

    </div>
  </footer><!-- End Footer -->

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="../vendor/assets/vendor/aos/aos.js"></script>
  <script src="../vendor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../vendor/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../vendor/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../vendor/assets/vendor/php-email-form/validate.js"></script>

  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/waypoints/lib/noframework.waypoints.js"></script>
    <script src="../vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../vendor/choices.js/public/assets/scripts/choices.js"></script>
    <script src="../js/theme.js"></script>
    
  <!-- Template Main JS File -->
  <script src="vendor/assets/js/main.js"></script>
  </body>
</html>