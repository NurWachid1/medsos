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

  

  
  <?php
  $idkegiatan = $_GET['idkegiatan'];
$sql = "SELECT*from kegiatan where idkegiatan='$idkegiatan'";
$result = mysqli_query($conn, $sql);
if ($result) {
  // $_SESSION['flashdata'] = "<div class='alert alert-success' role='alert'>Berhasil mengedit data</div>";
  // header("Location:tambah_ebook.php");
  // exit(0);
  while ($data = mysqli_fetch_array($result)) {
      // var_dump($data);
      
      ?>
  <!-- Breadcrumbs -->
  <main id="main">
  <section class="bg-pentagon py-4">
              <div class="container py-3">
                <div class="row d-flex align-items-center gy-4">
                  <div class="col-md-7">
                    <h1 class="h2 mb-0 text-uppercase"><?php echo $data['namakegiatan'] ?></h1>
                  </div>
                  <div class="col-md-5">
                    <!-- Breadcrumb-->
                    <ol class="text-sm justify-content-start justify-content-lg-end mb-0 breadcrumb undefined">
                      <li class="breadcrumb-item"><a class="text-uppercase" href="index.php">Profil</a></li>
                      <li class="breadcrumb-item text-uppercase active">Kegiatan</li>
                    </ol>
                  </div>
                </div>
              </div>
            </section>

            <!-- ACCORDION SECTION-->
      <section class="py-5">
        <div class="container">
          <div class="row g-5">
            <!-- PAGE CONTENT-->
            <div class="col-lg-12">
              <div class="accordion mb-5" id="accordion1">
              <div class="accordion-item mb-2">
                        <h5 class="accordion-header" id="accordion1-headingOne">
                          <button class="accordion-button text-uppercase fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseOne" aria-expanded="true" aria-controls="accordion1-collapseOne">Data Kegiatan</button>
                        </h5>
                        <div class="accordion-collapse collapse show" id="accordion1-collapseOne" aria-labelledby="accordion1-collapseOne" data-bs-parent="#accordion1">
                          <div class="accordion-body">

                            <div class="row">
                              <div class="col-md-4"><img class="img-fluid" src=" kegiatan/<?php echo $data['foto'] ?>" alt="Foto Ekskul">
                              </div>
                              <div class="col-md-8">
                                <br>Nama Kegiatan  : <?php echo $data['namakegiatan'] ?>
                                <br>Deskripsi              : <?php echo $data['deskripsik'] ?>
                              </p>  
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a href="kegiatan.php" class="btn btn-primary btn-sm my-1 detaildata" ><i class="fas fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                      <?php } }else {
  echo "Something Error: " . mysqli_error($conn);
}
?>
                      </div>
            </div>
          </div>
        </div>
<!-- </div> -->
      </section>

    <!-- ======= penjelasan Section =======
<section id="link-info" class="link-info">

    <div class="container">
    <div class="row">
      <section>
      <h2 style="text-align: center; color: black"><strong>Kereta Meriam</strong></h2>
</section>
        <div class="col-xl-6 col-lg-7" style="color:black">
            <h3 >Data Benda</h3>
            <p >No Inventaris       : 180/BKL/2008
            <br>Ineventaris Museum  : 300/00
            <br>Kategori            : Meriam
            <br>Lokasi Asal         : Aermata Ibu, Mlajah
            <br>Bahan               : Kayu, Besi, dan Perunggu
        <br><ol>Ukuran           
                <li>Meriam          :  P 147 cm, L 25 cm, Lubang 7,5 cm</li>
                <li>Kereta          : P 292 cm, L 138,5 cm, P.Roda 123,5 cm</li>
            </ol></p>
        </div>
        <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <img src=" katalog/keretameriam.jpg" class="img-fluid" alt="Museum Cakra">
        </div> 
    </div>
</div>
</section>
    <section style="color: black" class="profil-lain section-bg">
    <div class="container">
          <h3 style="text-align: center">Deskripsi</h3>
          <p style="text-align: justify; text-indent: 50px"> Meriam berbentuk bulat panjang. Di bagian depan ukurannya terdapat kecil, makin kebelakang makin membesar. Di bagian pangkal terdapat tonjolan bulat. Pada bagian badan terdapat penjepit menyerupai cincin sebanyak 4 buah. Di bagian pangkal terdapat cap keraton dengan tulisan TJAKRAADIE NINGRAT III. di bawah cap terdapat lubang sumbu kecil. Kondisi baik, berwarna hitam.</p>
            <p  style="text-align: justify; text-indent: 50px"> Tempat untuk meletakkan meriam terletak di bagian tengah. Di bagian samping kanan dan kiri terdapat roda dengan ukuran besar. Terdapat dua lengan pendorong kereta. Warna hitam kecoklatan, dengan kondisi baik.</p>
</div>
</section> -->

    
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