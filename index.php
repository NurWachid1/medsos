<?php
include 'dbconnect.php';

if(isset($_POST["addkomen"])) {
  $email_user= $_POST['email'];
  $nama_user = $_POST['namauser'];
  $komentar = $_POST['komentar'];
  $tgl = date("Y-m-d");

  $tambahkomen= mysqli_query($conn,"insert into kritik values ('', '$email_user', '$nama_user', '$komentar','$tgl')");
  if ($tambahkomen){
    echo "<script>
    alert('Komentar Anda Telah Terkirim!');
    document.location.href = 'index.php';
</script>";
  } else { echo "<script>
    alert('Komentar Anda Tidak Terkirim!');
</script>";
  }
};

// function get_CURL($url){
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL,'$url');
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// $result= curl_exec($curl);
// curl_close($curl);

// return json_decode($result, true);
// }

// // Instagram API
// $idFB="113090224916361";
// $idhalaman="";
// $access_tokenFB="EAAPx2ipg4agBAKDucvhUsFZBaZCkXISrsZAE7A0XFNx63IdDzH4jO9qZC1km5e8BBbeNpA6EuUBSD785AFUa0gtcKeROPnfFqZAzbhGVd3BQwbo7LFAKiLgEWBIBgy3RbXyPBCplueVgobCpnE3Pcr8KJZAPfx1GZAcxsIyIMMvzZB2ZCyQyZAjVhUjHQyZBACDBSLVLgfcuVlvcwZDZD";
// $access_tokenPG="EAAPx2ipg4agBAOlmbofhQDAKIzH33edZBtPzUfr2jL875ueiuERUr2VlhE3em7PrPdc0Ey9ciOqLseQPEPSNQV0avilz8rEthZBYAYQslMEZBjrRWLgogE3rqBJ1ZBKG9XbLnQIhmxxJLprfUZB1C7sOXUblSAmx2n0HR8ZBTRpWRyC0WsVyvTzZB4ZBiCFTTGEbL9y7aPbZCfTnZA7jVVJV63";
// $result = get_CURL("https://graph.facebook.com/v15.0/me?fields=id%2Cname%2Cposts.limit(5)%7Bfull_picture%7D%2Caccounts%7Bemails%2Cusername%7D&access_token=EAAPx2ipg4agBAJiESmvPoCP6Cmb4t97UKaTO5L3zQ7PUj21VfTHtA2R4J4JiIK5nyOjyHc8JeL6DedoLMRrMpVlP1sWE5XzNSpWiHNBrDZBMwhtqvrdXfEJOVyexIC4zolhH3cHSnMtLxv6fFxUbphpwEZBPmoXaiJFXFWZClBdBZA1F6F3DXrOz7653xZA2ghDNbt6BuqV79ZAQ4rJtlg");

// //  "https://graph.facebook.com/v15.0/me?fields=id%2Cname%2Cposts.limit(5)%7Bfull_picture%7D%2Caccounts%7Bemails%2Cusername%7D&access_token=EAAPx2ipg4agBAPE1N0iglOj0XMnTqb321hW22uEcrRHPwei1QIK3uJ1BP1cIradqcEpGeRHqaz7WUPBQt2kUtxdsvClhiS15ZBnKD6iFbFDLW58mxrV7ZC2Jj6iDBrjlsqNEGRC4fU9effhEuYNjZASLBPVZAu8maTeS9f8q5U3ZCguoi2DDIgTmWh9xBMBGUcEpAuuHgTBn5WWohmsDw";
// $namaFB = $result;
// var_dump($namaFB);
// die;
// $photos=[];
// foreach($result['posts'] as $photo){
//   $photos[]=$photo['full_picture'];
// }
// var_dump($photos);
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
  <link href="vendor/assets/img/logo-pgri.png" rel="icon">
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
<!-- stylesheet -->
<link rel="stylesheet" href="vendor/assets/css/style.default.css" id="theme-stylesheet">

  <!-- Template Main CSS File -->
  <link href="vendor/assets/css/style_index.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>

  <!-- ======= Header ======= -->
  <header class="make-sticky nav-holder" >
    <div class="navbar navbar-light fixed-top bg-white navbar-expand-lg py-0" id="navbar" >
          <div class="container py-3 py-lg-0 px-lg-0">
      <div class="logo">
        <h4><img src="vendor/images/logo-pgri.png" class="animated-logo" alt="" height="50" width="48"><a href="index.php"  style="color: white">SMK PGRI 1 BANGKALAN</a></h4>
      </div>
      <button class="navbar-toggler text-primary border-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navigationCollapse" aria-controls="navigationCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="sr-only">Menu Navigasi</span><i class="fas fa-align-justify"></i></button>
      <!-- Collapsed Navigation    -->
      <div class="collapse navbar-collapse" id="navigationCollapse">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- Menu -->
                <li class="nav-item"><a class="nav-link" id="hpDropdown" href="index.php" role="button" aria-expanded="false">Beranda</a>
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
                    <li><a class="dropdown-item text-uppercase border-bottom" href="lokasi.php">Lokasi</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="contactMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Akademik</a>
                  <ul class="dropdown-menu dropdown-menu-end m-0" aria-labelledby="contactMegamenu">
                    <li><a class="dropdown-item text-uppercase border-bottom" href="programahli.php">Program Keahlian</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="mapel.php">Mata Pelajaran</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="contactMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Siswa</a>
                  <ul class="dropdown-menu dropdown-menu-end m-0" aria-labelledby="contactMegamenu">
                    <li><a class="dropdown-item text-uppercase border-bottom" href="prestasi.php">Prestasi</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="ekskul.php">Ekstrakurikuler</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="pipas.php">Proyek IPAS</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="pbk.php">Karya P5BK</a></li>
                  </ul>
                </li>
                <li class="nav-item menu-large"><a class="nav-link " id="featuresMegamenu" href="guru.php" role="button"  aria-expanded="false">Guru dan Tendik</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="contactMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lain-Lain</a>
                  <ul class="dropdown-menu dropdown-menu-end m-0" aria-labelledby="contactMegamenu">
                    <li><a class="dropdown-item text-uppercase border-bottom" href="medsos.php">Medsos</a></li>
                    <!-- <li><a class="dropdown-item text-uppercase border-bottom" href="kritik.php">Kritik/Saran</a></li> -->
                    <li><a class="dropdown-item text-uppercase border-bottom" href="hubungi.php">Hubungi Kami<i class="bi bi-whatsapp"></i> </a></li>
                  </ul>
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
      <p style="color:white"><strong>SMK PGRI 1 Bangkalan merupakan salah satu sekolah menengah kejuruan yang terletak pada Kabupaten Bangkalan. Sekolah ini memiliki 2 program keahlian yaitu TSM, dan TKJ</strong></p>
      
    </div>
  </section><!-- End Hero -->

  <main id="content">

    <!-- ======= profil Section ======= -->
    <section id="profil" class="profil">
      <div class="container">

        <div class="row-profil">
          <div class="col-xl-5 col-lg-5" data-aos="fade-right">
            <img src="vendor/assets/img/halaman-pgri.jpeg" class="img-fluid" alt="Logo SMK">
          </div>
          <div class="col-xl-7 col-lg-7 pt-5 pt-lg-0">
            <h3 data-aos="fade-up" style="font-family:Quick Sand">SMK PGRI 1 Bangkalan</h3>
            <p data-aos="fade-up" style="text-align: justify">
            SMK PGRI 1 Bangkalan merupakan salah satu sekolah menengah kejuruan yang terletak pada Kabupaten Bangkalan. Sekolah ini memiliki beberapa data yang dirincikan pada keterangan di bawah ini: <br>
             <!-- <br>
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
              </li> -->
            </p>
            <table id="dataTable3" class="display" >
                              
                      <tbody style="margin-right:auto; padding:10px">
												
												<tr>
													<td style="width:40%">NPSN</td>
                          <td style="width:5%">:</td>
													<td >20531221</td>
												</tr>
                        <tr>
                        <td>Status</td>
                          <td>:</td>
                        <td>Swasta</td>
                        </tr>	
                        <tr>
                        <td >No. SK Pendirian</td>
                          <td>:</td>
													<td>382/32.B-1987</td>
                        </tr>
                        <tr>
                        <td>Tanggal SK. Pendirian</td>
                          <td>:</td>
													<td>16 Juli 1987</td>
                        </tr>
                        <tr>
                        <td>Alamat Sekolah</td>
                          <td>:</td>
													<td>Jl. Kapten Syafiri 17, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69112.</td>
                        </tr>
                        <tr>
                        <td>Program Keahlian</td>
                          <td>:</td>
													<td>
                              1. Teknik Sepeda Motor <br>
                              2. Teknik Komputer dan Jaringan
                            
                          </td>
                        </tr>
										</tbody>
										</table>
          </div>
        </div>

      </div>
    </section>
    <!-- ======= berita Section ======= -->
    
    <!-- End profil Section -->

<!-- ======= berita Section ======= -->
<!-- <section id="medsos" class="medsos bg-blue">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="color:white; font-family:Quick Sand">Media Sosial</h2>
        </div>

        // Facebook Login

<script>

  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '790219695538137',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : 'v15.0'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };
 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }

</script>


The JS SDK Login Button

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>

Load the JS SDK asynchronously
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="row">
          <div class="col-md-6 ">
          <img src="vendor/pgri/foto-pgri.jpeg" class="rounded circle img-thumbnail" width="300">
          </div>
          <img src="vendor/pgri/foto-pgri.jpeg" class="rounded circle img-thumbnail" width="300">
              <div class="col-md-8 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <h4 class="title"></a></h4>
              <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="true" data-use-continue-as="true"></div>
            </div>
          </div>
              
            </div>
            <div class="row">
            <div class="col">
              <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CkFFxYQhXuF/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CkFFxYQhXuF/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">ดูโพสต์นี้บน Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CkFFxYQhXuF/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">โพสต์ที่แชร์โดย SMK PGRI 1 Bangkalan (@smk_pgri1bkl)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
             <div class="ig-thumbnail">
                <img src="vendor/pgri/1.jpg" alt="">
            </div>
            <div class="ig-thumbnail">
                <img src="vendor/pgri/1.jpg" alt="">
            </div> 
          </div>
          </div>

          

        </div>

      </div>
 </section> -->

      <!-- Guru & Tendik -->
      <section class="py-5  border-gray-600">
        <div class="container py-1" data-aos="fade-up">
          <header class="mb-5">
            <h2 class="lined lined-center text-uppercase mb-4">Guru & Tendik</h2>
            <p class="lead text-center">SMK PGRI 1 BANGKALAN</p>
          </header>
          <!-- Testimonials slider-->
          <div class="swiper-container testimonials-slider" data-aos="fade-up">
            <div class="swiper-wrapper">
              <?php
              $query=mysqli_query($conn,"SELECT * from guru");
                while ($data = mysqli_fetch_assoc($query)) {
?>
<div class="swiper-slide h-auto mb-5">
                <!-- <div class="p-4 bg-white h-100 d-flex flex-column justify-content-between">
                  <div class="mb-2"> -->
                    <!-- <p class="text-sm text-gray-600">Aplikasi mudah digunakan, pelayanan ramah, sangat membantu.</p> -->
                    <!-- <p class="text-sm text-gray-600"><?= $data['testimoni']; ?>
                    <p class="text-sm text-gray-600"></p> -->
                  <!-- </div> -->
                  <!-- <div class="d-flex align-items-center justify-content-between">
                    <i class="fas fa-quote-left text-primary fa-2x"></i> -->
                    <div class="d-flex align-items-center ms-3">
                      <div class="me-3 text-end">
                        <h5 class="mb-0"><?= $data['namaguru']; ?></h5>
                        <p class="small text-muted mb-0"><?= $data['keterangan']; ?></p>
                      </div><img class="avatar-profil p-1 flex-shrink-0" src="guru/<?= $data['foto']; ?>" alt="Foto Guru" width="60">
                    </div>
                  <!-- </div>
                </div>  -->
              </div> 
<?php
                }
              ?>
              
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <!-- Promosi -->
      <section class="py-5 bg-blue border-gray-600">
        <div class="container py-1" data-aos="fade-up">
          <header class="mb-5">
            <h2 class="lined lined-center text-uppercase mb-4" style="color:white">Kenapa Harus di SMK PGRI 1 Bangkalan?</h2>
            <!-- <p class="lead text-center">SMK PGRI 1 BANGKALAN</p> -->
          </header>
          <!-- Testimonials slider-->
          <img class="avatar-profil p-1 flex-shrink-0" src=" guru/kesiswaan.png" alt="Foto Guru" style="margin-left:auto; margin-right:auto; display:block; width:125px; height:175px">
        <br><p style="color:white; text-align:justify">
          SMK PGRI 1 Bangkalan merupakan salah satu sekolah kejuruan swasta yang pertama kali berdiri pada Kabupaten Bangkalan. Selain itu, SMK PGRI 1 Bangkalan juga telah <strong> melahirkan lulusan-lulusan yang siap bekerja dalam dunia usaha dan dunia industri </strong> seperti berwirausaha hingga pegawai sipil. SMK PGRI 1 Bangkalan juga memiliki guru-guru serta tenaga kependidikan yang berkompeten pada bidangnya masing-masing. Selain dituntut untuk mengajar, guru-guru di sekolah SMK PGRI 1 Bangkalan juga telaten dalam menghadapi karakter dan perilaku siswa untuk dibentuk dan diubah sesuai dengan visi misi yang telah ditentukan.
        </p>
        </div>
      </section>
    <!-- ======= Fasilitas Section ======= -->
    <section id="katalog" class="katalog">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2 style="font-family: Quick Sand">Fasilitas</h2>
          </div>

         
          <div class="row katalog-container" data-aos="fade-up">
          <?php 
          $brgs=mysqli_query($conn,"SELECT * from fasilitas order by idfasilitas ASC");
					while($p=mysqli_fetch_array($brgs)){
            ?>
            <div class="col-lg-4 col-md-6 katalog-item filter">
              <div class="katalog-wrap">
                
                <img src="fasilitas/<?php echo $p['foto'] ?>" class="img-fluid" style="width: 100%"alt="">
                <div class="katalog-info">
                  <h4><?php echo $p['namafasilitas'] ?></h4>
                  <div class="katalog-links">
                    <a href="fasilitas/<?php echo $p['foto'] ?>" data-gallery="katalogGallery" class="katalog-lightbox" title="<?php echo $p['namafasilitas'] ?>"><i class="bx bx-images"></i></a>
                    <!-- <a href="detail3.php?idfasilitas=<?=  $p['idfasilitas'] ?>" title="Lihat Detail"><i class="bx bx-link"></i></a> -->
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
            <!-- <div class="col-lg-5 d-flex align-items-stretch">
              <div class="title" data-aos="fade-up">
                <h4 style="text-align: center">Kritik/Saran</h4>
                <form action="send.php" method="post" enctype="multipart/form-data" style="width: 350px" >
                <div class="form-group">
                  <label>Email<span style="color: red">*</span></label>
                  <input name="email" type="text" class="form-control" required autofocus>
								</div>
								<div class="form-group">
									<label>Nama Anda<span style="color: red">*</span></label>
									<input name="namauser" type="text" class="form-control" required autofocus>
								</div>		
                <div class="form-group">
									<label>Pesan Anda<span style="color: red">*</span></label>
									<textarea name="pesanWa" rows="10" type="text" class="form-control" required autofocus></textarea>
								</div>
                <input name="noWA" type="hidden" value="6281231718622">
                <div class="modal-footer">
                  <input name="sumbit" type="submit" class="btn btn-primary" value="Kirim">
                </div>
              </form>
              </div>
            </div> -->
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
                <p>info.smkpgri1bkl@gmail.com</p>
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
    <!-- <section id="lokasi" class="profil">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
          <h2><i>G-Maps</i> Lokasi Sekolah</h2>
          </div>

          <div class="row no-gutters justify-content-center" data-aos="fade-up">

            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.84993492259!2d112.75675441414593!3d-7.026919170791589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd80f7fc3862b11%3A0x20115267ebc78e7a!2sSMK%20PGRI%201%20Bangkalan!5e0!3m2!1sid!2sid!4v1665472386943!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              

            </div>

          </div>
      </section> -->
      <!-- End Contact Section -->
      <section class="py-5 bg-blue">
        <div class="container py-2">
          <header class="mb-5" data-aos="fade-up">
            <h2 class="text-uppercase lined lined-center mb-4" style="color:white">Lokasi Sekolah</h2>
          </header>
          <!-- Customer slider-->
          <div class="row no-gutters justify-content-center" data-aos="fade-up">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.84993492259!2d112.75675441414593!3d-7.026919170791589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd80f7fc3862b11%3A0x20115267ebc78e7a!2sSMK%20PGRI%201%20Bangkalan!5e0!3m2!1sid!2sid!4v1665472386943!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </section>
  </main><!-- End #main -->

<aside id="aside">
<div class="artikellain" data-aos="fade-up">
        <h1>BERITA</h1>
        <!-- <div class="artikellain ">
            <h2>BERITA</h2> -->
        <?php
  $qjumlah=mysqli_query($conn,"SELECT * FROM berita ORDER BY idberita DESC");
  $jumlah=mysqli_num_rows($qjumlah);
  ?>
              <?php

              //pagging
    $batas=3;
    $hal= ceil($jumlah/$batas);
     $page=(isset($_GET['hal'])) ? $_GET['hal']:1;
     $posisi=($page - 1) * $batas;
    //paging
    $no=1+$posisi;
    
              $berita = $conn->query("SELECT * FROM berita limit $posisi,$batas");
              while($data=mysqli_fetch_array($berita)){
              ?>
        <div >
            <img src="vendor/assets/img/logo-pgri.png" alt="logo smk pgri 1 bkl">
            <h4><a href="detailberita.php?idberita=<?=  $data['idberita'] ?>" ><?php echo $data['judulberita']; ?></a></h4>
            <!-- <p><a href="detailberita.php?idberita=<?=  $data['idberita'] ?>">Baca Berita</a></p> -->
        </div>
        <hr size="10px">
        <!-- <div>
            <img src="assets/image/soto.jpg" alt="">
            <h4>SOTO AYAM SEBAGAI MAKANAN KHAS LAMONGAN</h4>
            <p><a href="">Baca Selengkapnya</a></p>
        </div>
        <div>
            <img src="assets/image/banjirlamongan.jpg" alt="" class="gambarartikel">
            <h4>BANJIR DI DESA TIWET TIDAK KUNJUNG SURUT</h4>
            <p><a href="">Baca Selengkapnya</a></p>
        </div> -->
        <!-- <button type="submit" class="tombol" onclick="popupArtikel()">BACA ARTIKEL LAIN..</button> -->
          
<?php }

?>
</div>
<div class="infolain" data-aos="fade-up">
        <h2>INFORMASI LAIN <i class="bi bi-instagram"></i></h2>
        
        <div >
            <img src="vendor/assets/img/logo-pgri.png" alt="logo smk pgri 1 bkl">
            <h5><a href="https://www.instagram.com/p/CnyRNNISjtR/?igshid=MDM3ZDc5MmU=" >Kegiatan Penilaian Kinerja Kepala Sekolah Tahun 2022</a></h5>
            <!-- <p><a href="detailberita.php?idberita=<?=  $data['idberita'] ?>">Baca Berita</a></p> -->
        </div>
        <hr size="10px">
        <div>
            <img src="vendor/assets/img/logo-pgri.png" alt="">
            <h5><a href="https://www.instagram.com/smk_pgri1bkl?igshid=Mzc0YWU1OWY=" >Akun Instagram Sekolah untuk Informasi Lain</a></h5>
            <!-- <p><a href="">Baca Selengkapnya</a></p> -->
        </div>
        <hr size="10px">
        <!-- <div>
            <img src="assets/image/banjirlamongan.jpg" alt="" class="gambarartikel">
            <h4>BANJIR DI DESA TIWET TIDAK KUNJUNG SURUT</h4>
            <p><a href="">Baca Selengkapnya</a></p>
        </div> -->
        <!-- <button type="submit" class="tombol" onclick="popupArtikel()">BACA ARTIKEL LAIN..</button> -->
          

</div>

<div class="infolain justify-content-center align-items-stretch" data-aos="fade-up">
          <!-- <div class="row no-gutters justify-content-center" data-aos="fade-up">
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="title" data-aos="fade-up"> -->
        <h2>HUBUNGI KAMI <i class="bi bi-whatsapp"></i></h2>
        <form action="send.php" method="post" target ="_blank" enctype="multipart/form-data" style="width: 350px" >
                <div class="form-group">
                <label>Email Anda<span style="color: red">*</span></label>
                  <input name="email" minlength="10"  type="text" class="form-control" required autofocus>
								</div>
								<div class="form-group">
									<label>Nama Lengkap<span style="color: red">*</span></label>
									<input name="namauser" minlength="3" type="text" class="form-control" required autofocus>
								</div>		
                <!-- <div class="form-group">
									<label>Topik<span style="color: red">*</span></label>
									<input name="topikpesan" minlength="3" type="text" class="form-control" required autofocus>
								</div>	 -->
                <div class="form-group">
									<label>Pesan<span style="color: red">*</span></label>
									<textarea name="pesanWa" minlength="10"  rows="10" type="text" class="form-control" required autofocus></textarea>
								</div>
                <input name="noWA" type="hidden" value="6281231718622">
                
                <div class="modal-footer">
                  <input name="submit" type="submit" class="btn btn-primary" value="Kirim">
                </div>

                <!-- <button type="submit" name="submit" class="btn btn-primary">Kirim</button> -->
                <!-- <div class="modal-footer">
                  <input name="addkomen" type="submit" class="btn btn-primary" value="Kirim">
                </div> -->
              </form>
</div>
<!-- </div>
</div>
</div> -->

<div class="slide">
        <h2 id="galeri" data-aos="fade-up">GALERI</h2>
            <div class="slide">
           <nav class="slide1"><img src="kegiatan/maulid.jpg"></nav>
           <nav class="slide2"><img src="kegiatan/istigosah.jpg"></nav>
            </div>
        </div>

<!-- </article> -->
</aside>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-8">
            <div class="footer-info">
              <h3>SMK PGRI 1 BANGKALAN</h3>
              <table id="dataTable3" class="display" >
                              
                              <tbody style="margin-right:auto; padding:10px">
                                
                                <tr>
                                  <td style="width:38%"><strong><i class="bi bi-geo-alt"></i>  Alamat Sekolah </strong></td>
                                  <td style="width:3%">:</td>
                                  <td >Jl. Kapten Syafiri 17, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69112.</td>
                                </tr>
                                <td><strong><i class="bi bi-phone"></i> Telepon</strong></td>
                                  <td>:</td>
                                  <td> 031-3096725</td>
                                </tr>
                                <tr>
                                <td> <strong><i class="bi bi-envelope"></i> Email</strong></td>
                                  <td>:</td>
                                  <td>
                                  info.smkpgri1bkl@gmail.com 
                                  </td>
                                </tr>
                                <tr>
                                <td ><strong><i class="bi bi-instagram"></i> Instagram</strong></td>
                                  <td>:</td>
                                  <td>
                                  <a href="https://www.instagram.com/smk_pgri1bkl?igshid=Mzc0YWU1OWY=" style="color:#0035c6;">@smkpgri1_bkl </a>
                                  </td>
                                </tr>
                            </tbody>
                            </table>
              <!-- <p>
                <strong>Alamat:</strong> Jl. Kapten Safiri No. 17 Bangkalan, Pejagan, Kec. Bangkalan, Kab. Bangkalan Prov. Jawa Timur<br>
                <strong>Telepon:</strong> 031-3096725<br>
                <strong>Email:</strong> info.smkpgri1bkl@gmail.com<br>
              </p> -->
              
            </div>
          </div>


          <div class="col-lg-4 col-md-8 footer-links">
            <h4>Fitur-Fitur</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="visi-misi.php">Visi Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="kritik.php">Kritik/Saran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="hubungi.php">Hubungi Kami</a></li>
            </ul>
          </div>

          


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2023 <strong><span>SMK PGRI 1 BANGKALAN</span></strong>
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
          <img src="vendor/assets/img/pgri1.png" alt="selamat datang" class="image-welcome">
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
    //  var typed = new Typed(".typing", {
    //     strings: ["SI NINGRAT"],
    //     typeSpeed: 100,
    //     backSpeed: 60,
    //     loop : true
    // });

    
  </script>
</body>
</html>