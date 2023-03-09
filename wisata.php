<?php
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SI NINGRAT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="vendor/assets/img/cakra1.png" rel="icon">
  <link href="vendor/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <!-- Vendor CSS Files -->
  <link href="vendor/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="vendor/assets/css/style_index.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><img src="vendor/images/cakra1.png" class="animated-logo" alt="" height="50" width="48"><a href="index.php"  >MUSEUM CAKRANINGRAT</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#profil">Profil</a></li>
          <li><a class="nav-link scrollto" href="#katalog">Katalog</a></li>
          <li><a class="nav-link scrollto " href="#medsos">Medsos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1 class="text-center typing">Si Ningrat</h1>
      <h2>Si Ningrat merupakan sistem informasi berbasis website yang berisi atas seluruh informasi dar Museum Cakraningrat.</h2>
      <a href="login.php" class="btn-get-started scrollto">Mulai</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="profil" class="profil">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
          <img src="vendor/assets/img/museum-cakra.jpeg" class="img-fluid" alt="Museum Cakra">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">MUSEUM CAKRANINGRAT</h3>
            <p data-aos="fade-up">
              Museum Cakraningrat merupakan museum yang terletak pada Kabupaten Bangkalan. Museum ini memiliki beberapa data yang dirincikan pada keterangan di bawah ini: <br>
              <br>
              Alamat : Jl. Soekarno Hatta No.35, Wr 08, Mlajah, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69116. <br> <br>
              Kontak : 089613899282
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="profil" class="profil-lain section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Profil Museum</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Sejarah</a></h4>
              <p class="description">Didasari pemikiran dan rasa tanggungjawab untuk merawat dan melestarikan benda-benda bernilai sejarah warisan nenek moyang<span id="dots">...</span><span id="more"></span></p>
              <a href="sejarah-museum.php">Lebih Lengkap</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Visi Misi</a></h4>
              <p class="description">Anda dapat memilih jenis CCTV di bawah ini.<br>1. 2 MP 4 CHANEL 4 KAMERA (3.000.0000) <br>2. 2 MP 8 CHANEL 6 KAMERA (5.000.000)</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Video Profil</a></h4>
              <p class="description">Anda dapat melihat video profil pada link berikut<span id="dots">...</span><span id="more"></span></p>
              <a href="video-profil.php">Lebih Lengkap</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Jam Operasional</a></h4>
              <p class="description">Museum Cangkraningrat dapat dikunjungi sesuai dengan jadwal di bawah ini<span id="dots">...</span><span id="more"></span></p>
              <a href="video-profil.php">Lebih Lengkap</a>
            </div>
          </div>
        </div>

      </div>
</section>
    <!-- End profil Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="katalog" class="katalog section-bg">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Katalog</h2>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="katalog-flters">
                <li data-filter="*" class="filter-active">Seluruh Katalog</li>
                <li data-filter=".filter-app">Meriam</li>
                <li data-filter=".filter-card">Kesenian</li>
                <li data-filter=".filter-web">Senjata</li>
              </ul>
            </div>
          </div>

          <?php 
          $brgs=mysqli_query($conn,"SELECT * from kategori k, katalog p where k.idkategori=p.idkategori order by idkatalog ASC");
					while($p=mysqli_fetch_array($brgs)){
            ?>
          <div class="row katalog-container" data-aos="fade-up">

            <div class="col-lg-4 col-md-6 katalog-item filter-app">
              <div class="katalog-wrap">
                
                <img src="katalog/<?php echo $p['gambar'] ?>" class="img-fluid" sty;e="width: 50%"alt="">
                <div class="katalog-info">
                  <h4><?php echo $p['nama_benda'] ?></h4>
                  <p><?php echo $p['nama_kategori'] ?></p>
                  <div class="katalog-links">
                    <a href="katalog/<?php echo $p['gambar'] ?>" data-gallery="katalogGallery" class="katalog-lightbox" title="<?php echo $p['nama_benda'] ?>"><i class="bx bx-plus"></i></a>
                    <a href="akses_link/<?php echo $p['akses_link'] ?>" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <?php }
                     ?> 

           
          </div>

        </div>
      </section><!-- End Portfolio Section -->
      <section id="medsos" class="medsos section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Media Sosial</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Penjualan Website</a></h4>
              <p class="description">Anda dapat memilih Fitur Pemesanan Website dibawah ini: <br> 1. Very Basic (1.500.000) <br>2. Simple Silver (2.500.000) <br> 3. Medium Gold (3.000.000)</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Penjualan dan Pemasangan CCTV</a></h4>
              <p class="description">Anda dapat memilih jenis CCTV di bawah ini.<br>1. 2 MP 4 CHANEL 4 KAMERA (3.000.0000) <br>2. 2 MP 8 CHANEL 6 KAMERA (5.000.000)</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Penjualan dan Service Alat Elektronik</a></h4>
              <p class="description">Anda dapat membeli dan memperbaiki alat elktronik seperti komputer, laptop, dll</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Pelatihan Kursus</a></h4>
              <p class="description">Anda dapat memilih jenis kursus di bawah ini: <br>1. Regular, Rp. 200.000 per bulan (Satu minggu 1x pertemuan)<br>2. Private , Rp. 250.000 per bulan (Satu minggu 1x pertemuan)<br>3. Paket pelatihan kerja 1 tahun + pemagangan, Rp. 5.500.000 (Satu minggu 2x pertemuan)</p>
            </div>
          </div>

        </div>

      </div>

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
          <h2>Kontak</h2>
          </div>

          <div class="row no-gutters justify-content-center" data-aos="fade-up">

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Lokasi:</h4>
                  <p><a href="https://maps.app.goo.gl/6GxaRtergLcZU6bd6">Jl. Soekarno Hatta No.35, Mlajah</a></p>
                </div>

                <div class="email mt-4">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>museumcakra@gmail.com</p>
                </div>

                <div class="phone mt-4">
                  <i class="bi bi-phone"></i>
                  <h4>Telepon:</h4>
                  <p>0896 1389 9282 <br> 0852 5755 9996</p>
                </div>

              </div>

            </div>

          </div>
      </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-8">
            <div class="footer-info">
              <h3>MUSEUM CAKRANINGRAT</h3>
              <p>
                <strong>Alamat:</strong> Jl. Soekarno Hatta No.35, Mlajah<br><br>
                <strong>Telepon:</strong> 0896 1389 9282<br><br>
                <strong>Email:</strong> museumcakra@gmail.com<br>
              </p>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-8 footer-links">
            <h4>Katalog</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Penjualan Website</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Penjualan dan Pemasangan CCTV</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Penjualan dan Service Elektronik</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Lembaga Kursus Pelatihan</a></li>
            </ul>
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
        &copy; Copyright <strong><span>Museum Cakraningrat</span></strong>
      </div>

    </div>
  </footer><!-- End Footer -->

  <!-- Modal Welcome -->
  <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">SELAMAT DATANG DI SI NINGRAT</h5>
          <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="vendor/assets/img/SI-Ningrat.png" alt="selamat datang" class="image-welcome">
        </div>

      </div>
    </div>
  </div>
  <!-- End Modal Welcome -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/assets/vendor/aos/aos.js"></script>
  <script src="vendor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="vendor/assets/js/main.js"></script>

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
        strings: ["Si Ningrat"],
        typeSpeed: 100,
        backSpeed: 60,
        loop : true
    });

    
  </script>
</body>
</html>