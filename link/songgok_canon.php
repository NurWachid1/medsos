<?php
include '../dbconnect.php';
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
  <link href="../vendor/assets/img/cakra.png" rel="icon">
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


  <!-- Template Main CSS File -->
  <link href="../vendor/assets/css/style_index.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><img src="../vendor/images/cakra1.png" class="animated-logo" alt="" height="50" width="48"><a href="../index.php"  >MUSEUM CAKRANINGRAT</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="../index.php#hero">Beranda</a></li>
          <li class="dropdown-nav">
            <a class="nav-link scrollto dropbtn-nav" href="../index.php#profil">Profil</a>
              
          </li>
          <li><a class="nav-link scrollto" href="../index.php#katalog">Katalog</a></li>
          <li><a class="nav-link scrollto " href="../index.php#medsos">Medsos</a></li>
          <li><a class="nav-link scrollto" href="../index.php#kontak">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

    <!-- ======= profil Section ======= -->
<section id="profil" class="profil">
    <div class="container">
    <div class="row">
     <section>
      <h2 style="text-align: center"><strong>Songgok Canon</strong></h2>
</section>
        <div class="col-xl-6 col-lg-7" >
            <h3 >Data Benda</h3>
            <p >No Inventaris       : 188/BKL/2008
            <br>Ineventaris Museum  : 283/00
            <br>Kategori            : Senjata
            <br>Lokasi Asal         : Aermata Ibu, Arosbaya
            <br>Bahan               : Kayu dan Besi
            <br>Ukuran              : P 208,5 cm; L 8 cm; Tg 6,5 cm
          </p>
        </div>
        <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <img src="../file/songgok_canon.png" class="img-fluid" alt="Songgok Canon">
        </div> 
    </div>
    <section>
          <h3 style="text-align: center">Deskripsi</h3>
          <p style="text-align: justify; text-indent: 50px">Berupa tongkat panjang, dengan salah satu ujung berbentuk menyerupai sendok yang terbuat dari besi, sedangkan ujung di lainnya berupa besi spiral. Warna hitam, kondisi baik.</p>
            </section>
</div>
</section>
    
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
        strings: ["SI NINGRAT"],
        typeSpeed: 100,
        backSpeed: 60,
        loop : true
    });

    
  </script>
</body>
</html>