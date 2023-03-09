<?php
include 'dbconnect.php';

if(isset($_POST["addkomen"])) {
  $email_user= $_POST['email_user'];
  $nama_user = $_POST['nama_user'];
  $komentar = $_POST['komentar'];
			  
  $tambahkomen= mysqli_query($conn,"insert into komen values ('', '$email_user', '$nama_user', '$komentar')");
  if ($tambahkomen){
  echo "
  <meta http-equiv='refresh' content='20; url= index.php'/>  ";
  } else { echo "
   <meta http-equiv='refresh' content='20; url= index.php'/> ";
  }
};
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
                    <li><a class="dropdown-item text-uppercase border-bottom" href="index.php#katalog">Fasilitas</a></li>
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
                    <h1 class="h2 mb-0 text-uppercase">Program Keahlian</h1>
                  </div>
                  <div class="col-md-5">
                    <!-- Breadcrumb-->
                    <ol class="text-sm justify-content-start justify-content-lg-end mb-0 breadcrumb undefined">
                      <li class="breadcrumb-item"><a class="text-uppercase" href="index.php">Kurikulum</a></li>
                      <li class="breadcrumb-item text-uppercase active">Program Keahlian</li>
                    </ol>
                  </div>
                </div>
              </div>
            </section>

   
    <!-- ======= profil Section ======= -->
    <section class="py-5 bg-fixed bg-cover bg-center dark-overlay" style="background: url(../vendor/assets/img/foto-pgri.jpeg)">
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
            <p>SMK PGRI 1 Bangkalan memiliki 2 program keahlian sebagaimana yang dijelaskan pada data berikut:</p>
            <!-- PAGE CONTENT-->
            <div class="col-lg-12">
              <div class="accordion mb-5" id="accordion1">
              <div class="row gy-4">
                <div class="col-lg-6">
                  <div class="accordion mb-5" id="accordion2">
                          <div class="accordion-item mb-2">
                            <h5 class="accordion-header" id="accordion2-headingOne">
                              <button class="accordion-button text-uppercase fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#accordion2-collapseOne" aria-expanded="true" aria-controls="accordion2-collapseOne">Teknik Sepeda Motor</button>
                            </h5>
                            <div class="accordion-collapse collapse show" id="accordion2-collapseOne" aria-labelledby="accordion2-collapseOne" data-bs-parent="#accordion2">
                              <div class="accordion-body">
                                <p style="text-align; text-indent: 50px">
                                Teknik sepeda motor (TSM) merupakan salah satu program keahlian yang berfokus pada perbaikan dan bisnis sepeda motor. Program keahlian ini telah berakreditasi "B"</p>
                              </div>
                            </div>
                          </div>
                          </div>
                </div>
                <div class="col-lg-6">
                  <div class="accordion mb-5" id="accordion3">
                          <div class="accordion-item mb-2">
                            <h5 class="accordion-header" id="accordion3-headingOne">
                              <button class="accordion-button text-uppercase fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#accordion3-collapseOne" aria-expanded="true" aria-controls="accordion3-collapseOne">Teknik Komputer dan Jaringan</button>
                            </h5>
                            <div class="accordion-collapse collapse show" id="accordion3-collapseOne" aria-labelledby="accordion3-collapseOne" data-bs-parent="#accordion3">
                            <div class="accordion-body">
                                <p style="text-align; text-indent: 50px">
                                Teknik komputer dan jaringan (TKJ) merupakan salah satu program keahlian yang berfokus pada komputer dan jaringan. Program keahlian ini telah berakreditasi "B"</p>
                              </div>
                            </div>
                          </div>
                </div>
                </div>
                      
                      <!-- <div class="accordion-item mb-2">
                        <h5 class="accordion-header" id="accordion1-headingTwo">
                          <button class="accordion-button text-uppercase fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseTwo" aria-expanded="false" aria-controls="accordion1-collapseTwo">Tujuan</button>
                        </h5>
                        <div class="accordion-collapse collapse" id="accordion1-collapseTwo" aria-labelledby="accordion1-collapseTwo" data-bs-parent="#accordion1">
                          <div class="accordion-body">
                            <div class="row">
                              
                                <p style="text-align:justify">SMK PGRI 1 Bangkalan dirancang untuk menghasilkan lulusan/tamatan yang memiliki pemahaman dan keahlian/ketrampilan serta memiliki wawasan kewirausahaan di bidang teknologi dan industri untuk mengisi kebutuhan pasar tenaga kerja. Oleh karena itu tujuan dari SMK PGRI 1 Bangkalan sebagaimana berikut: </p><ol>
                                  <li>Proses kegiatan pendidikan dan pelatihan kompetensi yang terencana, terorganisasi, terlaksana dan terevaluasi dengan tertib dan lancar.</li>
                                  <li>Pengembangan sumber daya manusia (Guru, Staff TU, Siswa).</li>
                                  <li>Penyelenggaraam uji kompetensi secara profesional</li>
                                  <li>Pemberdayaan penelusuran tamatan.</li>
                                  <li>Menghasilkan lulusan yang kompeten.</li>
                                  <li>Menyiapkan peserta didik agar mampu mengembangkan sikap profesional, mampu beradaptasi dan berkompetensi.</li>
                                  <li>Meningkatkan kepuasan masyarakat untuk memperoleh layanan pendidikan.</li>
                                  <li>Konsistensi pelaksanaan aktifitas, kendali mutu dan jaminan mutu sekolah.</li></ol>
                                
                            </div>
                          </div>
                        </div>
                      </div>
                      </div> -->
              
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- End profil Section -->

    
      <!-- ======= Contact Section ======= -->
      <!-- <section id="komlok" class="komlok">
        <div class="container">
          <div class="row no-gutters justify-content-center" data-aos="fade-up">
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="title" data-aos="fade-up">
                <h4 style="text-align: center">Komentar & Saran</h4>
                <form action="index.php" method="post" enctype="multipart/form-data" style="width: 350px" >
                <div class="form-group">
                  <label>Email</label>
                  <input name="email_user" type="text" class="form-control" required autofocus>
								</div>
								<div class="form-group">
									<label>Nama</label>
									<input name="nama_user" type="text" class="form-control" required autofocus>
								</div>		
                <div class="form-group">
									<label>Komentar</label>
									<input name="komentar" type="text" class="form-control" required autofocus>
								</div>
                <div class="modal-footer">
                  <input name="addkomen" type="submit" class="btn btn-primary" value="Kirim">
                </div>
              </form>
              </div>
            </div>
          
      </div>
      </div>
    </section>End Contact Section -->

  </main><!-- End #main -->

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

  <!-- Modal Welcome -->
  <!-- <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title">SELAMAT DATANG DI SI SMK PGRI 1 BANGKALAN</h6>
          <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Tutup">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="vendor/assets/img/pgri1.png" alt="selamat datang" class="image-welcome">
        </div>

      </div>
    </div>
  </div> -->
  <!-- End Modal Welcome -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../vendor/assets/vendor/aos/aos.js"></script>
  <script src="../vendor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../vendor/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../vendor/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../vendor/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../vendor/assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  <script type="text/javascript">
    window.onload = function() {
      OpenBootstrapPopup();
    };

    function OpenBootstrapPopup() {
      $("#simpleModal").modal('show');
    }

    $('#close').on('click', function() {
      $("#simpleModal").modal('hide');
    })
     // typing text animation script
     var typed = new Typed(".typing", {
        strings: ["SI NINGRAT"],
        typeSpeed: 100,
        backSpeed: 60,
        loop : true
    });

    
  </script>
</body>
</html>