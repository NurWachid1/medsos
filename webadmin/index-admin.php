<?php
include 'dbconnect.php';

if(isset($_POST["addkomen"])) {
  $email_user= $_POST['email'];
  $nama_user = $_POST['namauser'];
  $komentar = $_POST['komentar'];
			  
  $tambahkomen= mysqli_query($conn,"insert into komentar values ('', '$email_user', '$nama_user', '$komentar')");
  if ($tambahkomen){
  echo "
  <meta http-equiv='refresh' content='20; url= index.php'/>  ";
  } else { echo "
   <meta http-equiv='refresh' content='20; url= index.php'/> ";
  }
};

// function get_CURL($url){
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL,'$url');
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// $result= curl_exec($curl);
// curl_close($curl);

// return json_decode($reesult, true);
// }

// $result = get_CURL();

// $instagramprofilepict = $result['items'][0]['snippet']['thumbnails']['medium']['url']
// $userig = $result['items'][0]['snippet']['title'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta property= "fb:app_id" content= "433696012240070" />

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
                <li class="nav-item"><a class="nav-link " id="hpDropdown" href="index-admin.php" role="button" aria-expanded="false">Beranda</a>
                </li>
                <li class="nav-item"><a class="nav-link " id="hpDropdown" href="../admin/index.php" role="button" aria-expanded="false">Halaman Admin</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="contactMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                  <ul class="dropdown-menu dropdown-menu-end m-0" aria-labelledby="contactMegamenu">
                    <li><a class="dropdown-item text-uppercase border-bottom" href="#profil">Profil Sekolah</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="sejarah.php">Sejarah</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="visi-misi.php">Visi Misi dan Tujuan</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="struk-organ.php">Struktur Organinasi</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="kegiatan.php">Kegiatan</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="#katalog">Fasilitas</a></li>
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
                    <li><a class="dropdown-item text-uppercase border-bottom" href="#prestasi">Prestasi</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="ekskul.php">Ekstrakulikuler</a></li>
                  </ul>
                </li>
                <li class="nav-item menu-large"><a class="nav-link " id="featuresMegamenu" href="guru.php" role="button"  aria-expanded="false">Guru dan Tendik</a>
                </li>
                
                 <li class="nav-item "><a class="nav-link" id="allPagesMegamenu" href="#medsos"  aria-expanded="false">Medsos</a>
                </li>
                <li class="nav-item "><a class="nav-link" id="allPagesMegamenu" href="#komlok"  aria-expanded="false">Komentar</a>
                </li>
                <li class="nav-item "><a class="nav-link" id="allPagesMegamenu" href="#lokasi"  aria-expanded="false">Lokasi</a>
                </li>
                
              </ul>
        </div>
          </div>
        </div>
      <!-- .navbar -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-ups">
      <h1 class="text-center">SMK PGRI 1 BANGKALAN</h1>
      <h2 >SMK PGRI 1 Bangkalan merupakan salah satu sekolah menengah kejuruan yang terletak pada Kabupaten Bangkalan. Sekolah ini memiliki 2 program keahlian yaitu TSM, dan TKJ</h2>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= profil Section ======= -->
    <section id="profil" class="profil">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="../vendor/assets/img/halaman-pgri.jpeg" class="img-fluid" alt="Logo SMK">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">SMK PGRI 1 Bangkalan</h3>
            <p data-aos="fade-up" style="text-align: justify">
            SMK PGRI 1 Bangkalan merupakan salah satu sekolah menengah kejuruan yang terleyak pada Kabupaten Bangkalan. Sekolah ini memiliki beberapa data yang dirincikan pada keterangan di bawah ini: <br>
             <br>
              NPSN : 20531221 <br>
              Status : Swasta <br>
              Nomor SK. Pendirian : 382/32.B-1987 <br>
              Tanggal SK. Pendirian : 16 Juli 1987<br>
              Alamat : Jl. Kapten Syafiri 17, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69112. <br> 
              Kontak : 031-3096725
              <ol>
              Program Keahlian :
                <li>
                  Teknik Sepeda Motor
              </li>
              <li>
                  Teknik Komputer dan Jaringan
              </li>
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- ======= berita Section ======= -->
    <section id="profil" class="profil-lain section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Profil Sekolah</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Sejarah</a></h4>
              <p class="description">SMK PGRI 1 Bangkalan merupakan SMK tertua yang ada di Bangkalan dengan perjalanan sejarah yang cukup panjang. Pada awalnya SMK PGRI 1 Bangkalan menempati sekolah milik Sekolah Teknik (ST) yang sederajat dengan SMP.<span id="dots">...</span><span id="more"></span></p>
              <a href="sejarah.php">Lebih Lengkap</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Visi Misi</a></h4>
              <p class="description">Visi misi pada sekolah ini adalah<span id="dots">...</span><span id="more"></span></p>
              <a href="visi-misi.php">Lebih Lengkap</a>
            </div>
          </div>

          <!-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Video Profil</a></h4>
              <p class="description">Anda dapat melihat video profil pada link berikut<span id="dots">...</span><span id="more"></span></p>
              <a href="video-profil.php">Lebih Lengkap</a>
            </div>
          </div> -->

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Jam Operasional</a></h4>
              <p class="description">Jam operasional pada SMK ini dapat dilihat pada halaman berikut<span id="dots">...</span><span id="more"></span></p>
              <a href="jamoperasional.php">Lebih Lengkap</a>
            </div>
          </div>
        </div>

      </div>
</section>
    <!-- End profil Section -->

<!-- ======= berita Section ======= -->
<section id="medsos" class="medsos section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Media Sosial</h2>
        </div>


        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="row">
          <div class="col-md-6 ">
          <img src="../vendor/pgri/foto-pgri.jpeg" class="rounded circle img-thumbnail" width="300">
          </div>
          <!-- <img src="vendor/pgri/foto-pgri.jpeg" class="rounded circle img-thumbnail" width="300"> -->
              <div class="col-md-8 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <h4 class="title">@smk_pgri1bkl</a></h4>
              
            </div>
          </div>
              
            </div>
            <div class="row">
            <div class="col">
              <div class="ig-thumbnail">
                <img src="../vendor/pgri/1.jpg" alt="">
            </div>
            <div class="ig-thumbnail">
                <img src="../vendor/pgri/1.jpg" alt="">
            </div>
            <div class="ig-thumbnail">
                <img src="../vendor/pgri/1.jpg" alt="">
            </div>
          </div>
          </div>

          

        </div>

      </div>


    <!-- ======= katalog Section ======= -->
    <section id="katalog" class="katalog section-bg">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Fasilitas</h2>
          </div>

          <!-- <div class="row" data-aos="fade-up">
            
            <div class="col-lg-12 d-flex justify-content-center">
           
              <ul id="katalog-flters">
                
                <li data-filter="*" class="filter-active">Seluruh Katalog</li>
                <li data-filter=".filter-perabotan">Perabotan</li>
                <li data-filter=".filter-senjata">Senjata</li>
              </ul>
            </div>
          </div> -->

         
          <div class="row katalog-container" data-aos="fade-up">
          <?php 
          $brgs=mysqli_query($conn,"SELECT * from fasilitas order by idfasilitas ASC");
					while($p=mysqli_fetch_array($brgs)){
            ?>
            <div class="col-lg-4 col-md-6 katalog-item filter-<?php echo $p['nama_kategori'] ?>">
              <div class="katalog-wrap">
                
                <img src="../fasilitas/<?php echo $p['foto'] ?>" class="img-fluid" style="width: 100%"alt="">
                <div class="katalog-info">
                  <h4><?php echo $p['namafasilitas'] ?></h4>
                  <div class="katalog-links">
                    <a href="../fasilitas/<?php echo $p['foto'] ?>" data-gallery="katalogGallery" class="katalog-lightbox" title="<?php echo $p['namafasilitas'] ?>"><i class="bx bx-plus"></i></a>
                    <a href="detail3.php?idfasilitas=<?=  $p['idfasilitas'] ?>" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <?php }
                     ?>   

          </div>

        </div>
      </section><!-- End katalog Section -->

    
      

      <!-- ======= Contact Section ======= -->
      <section id="komlok" class="komlok">
        <div class="container">
          <div class="row no-gutters justify-content-center" data-aos="fade-up">
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="title" data-aos="fade-up">
                <h4 style="text-align: center">Komentar & Saran</h4>
                <form action="index.php" method="post" enctype="multipart/form-data" style="width: 350px" >
                <div class="form-group">
                  <label>Email</label>
                  <input name="email" type="text" class="form-control" required autofocus>
								</div>
								<div class="form-group">
									<label>Nama</label>
									<input name="namauser" type="text" class="form-control" required autofocus>
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
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="title" data-aos="fade-up">
              <h4 style="text-align: center">Kontak</h4>
              <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p><a href="https://maps.app.goo.gl/6GxaRtergLcZU6bd6">Jl. Kapten Safiri No. 17 Bangkalan, Pejagan, Kec. Bangkalan, Kab. Bangkalan Prov. Jawa Timur</a></p>
              </div>
              <div class="email mt-4">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>smkpgri1bkl@gmail.com</p>
              </div>

              <div class="phone mt-4">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>031-3096725</p>
              </div>
            </div>
          </div>
        </div>
      <!-- </div> -->
      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section id="lokasi" class="profil">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
          <h2><i>G-Maps</i> Lokasi Sekolah</h2>
          </div>

          <div class="row no-gutters justify-content-center" data-aos="fade-up">

            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.84993492259!2d112.75675441414593!3d-7.026919170791589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd80f7fc3862b11%3A0x20115267ebc78e7a!2sSMK%20PGRI%201%20Bangkalan!5e0!3m2!1sid!2sid!4v1665472386943!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              

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
              <h3>SMK PGRI 1 BANGKALAN</h3>
              <p>
                <strong>Alamat:</strong> Jl. Kapten Safiri No. 17 Bangkalan, Pejagan, Kec. Bangkalan, Kab. Bangkalan Prov. Jawa Timur<br>
                <strong>Telepon:</strong> 031-3096725<br>
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
  <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title">SELAMAT DATANG DI SI SMK PGRI 1 BANGKALAN</h6>
          <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Tutup">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="../vendor/assets/img/pgri1.png" alt="selamat datang" class="image-welcome">
        </div>

      </div>
    </div>
  </div>
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
        strings: ["SMK PGRI 1 BANGKALAN"],
        typeSpeed: 100,
        backSpeed: 60,
        loop : true
    });

    
  </script>
</body>
</html>