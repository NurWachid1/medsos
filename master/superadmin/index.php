
<?php
include"../config/dbconnect.php";
session_start();
  if($_SESSION['userweb']==""){
    header('location:../index.php');
  }
  // if(@$_SESSION['akses']=="admin"){
  //   header('location:../admin/index.php');
  else if(@$_SESSION['akses']=="tu"){
    header('location:../tu/index.php');
  }else if(@$_SESSION['akses']=="humas"){
    header('location:../humas/index.php');
  }else if(@$_SESSION['akses']=="kesiswaan"){
    header('location:../kesiswaan/index.php');
     }else if(@$_SESSION['akses']=="kurikulum"){
    header('location:../kurikulum/index.php');
    }else if(@$_SESSION['akses']=="sarpras"){
    header('location:../sarpras/index.php');
  }else if(@$_SESSION['akses']=="penjamin"){
    header('location:../penjamin/index.php');
    }else if(@$_SESSION['akses']=="komli"){
    header('location:../komli/index.php');
  }
  else if(@$_SESSION['akses']=="perpus"){
    header('location:../perpus/index.php');
  }
else if(@$_SESSION['akses']=="bk"){
    header('location:../bk/index.php');
  }
else if(@$_SESSION['akses']=="extra"){
    header('location:../extra/index.php');
  }




  $qprofil = mysqli_query($conn,"SELECT * FROM user WHERE iduser='$_SESSION[userweb]' ");
  $profil = mysqli_fetch_array($qprofil);
?>
<html>
<head>
    <title>DATA SEKOLAH | SMK PGRI 1 BANGKALAN</title>
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="?page=home" class="site_title"><i class="fa fa-home"></i> <span>Beranda</span></a>
            </div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="img/<?php echo $profil['fotouser'];?>" alt="..." width="60px" height="60px" class="img-circle profile_img /">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $profil['namalengkap'];?></h2>
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" >
              <div class="menu_section">
           
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-book"></i> Akademik <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <!-- <li><a href="?page=surat&act=add">Tambah Surat Masuk</a></li> -->
                      <li><a href="?page=guru">Guru & Tendik</a></li>
                      <li><a href="?page=mapel">Mata Pelajaran</a></li>
                      <li><a href="?page=prestasi">Prestasi Siswa</a></li>
                      <!-- <li><a href="?page=surat&act=addk">Tambah Surat Keluar</a></li>
                      <li><a href="?page=surat&act=sk">Surat Keluar</a></li> -->
                    </ul>
                  </li>

                 <li><a><i class="fa fa-user"></i> Data Pengguna <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=user&act=add">Tambah Pengguna</a></li>
                      <li><a href="?page=user">Lihat Data Pengguna</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-university"></i> Informasi Sekolah <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=berita">Berita</a></li>
                      <li><a href="?page=kegiatan">Kegiatan</a></li>
                      <li><a href="?page=fasilitas">Fasilitas</a></li>
                      <li><a href="?page=ekskul">Ekstrakurikuler</a></li>
                       <!-- <li><a href="?page=dispo&act=belum">Belum Di Disposisi</a></li> -->
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-pencil-square-o"></i> Karya Siswa <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=pipas">Proyek IPAS</a></li>
                      <li><a href="?page=p5bk">P5BK</a></li>
                       <!-- <li><a href="?page=dispo&act=belum">Belum Di Disposisi</a></li> -->
                    </ul>
                  </li>

                  <li><a href="?page=kritik"><i class="fa fa-clipboard"></i> Kritik/Saran </a>
                    
                  </li>

                </ul>
              </div>
            </div>
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="img/<?php echo $profil['fotouser'];?>" alt="...">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="?page=user&act=lihat"> Profil Saya</a></li>
                    <li><a href="Logout.php"><i class="fa fa-sign-out pull-right"></i>Keluar</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
<div  class="right_col" role="main">
       

<?php 
            $page = @$_GET['page'];
            $act = @$_GET['act'];
            // if($page == "surat"){
            //     if($act == ""){
            //         include "suratmasuk.php";
            //     } else if($act == "sk"){
            //         include "suratkeluar.php";
            //     } else if($act == "add"){
            //         include "tambahsurat.php";
            //     }
            //      else if($act == "addk"){
            //         include "tambahsuratk.php";
            //     }
            //     else if($act == "editm"){
            //         include "editsurat.php";
            //     }
            //     else if($act == "editsk"){
            //         include "editsk.php";
            //     }
            //     else if($act == "hapus"){
            //         include "hapussurat.php";
            //     }else if($act == "hapusms"){
            //         include "hapussuratms.php";
                
            //     }
            if($page == "home" || $page == ""){
                include "home.php";
            } else if($page == "profil"){
                include "profil.php";
            } else if($page == "user"){
                if($act == ""){
                    include "datauser.php";
                } else if($act == "add"){
                    include "inputuser.php";
                } else if($act == "edit"){
                    include "edituser.php";
                } else if($act == "hapus"){
                    include "hapususer.php";
                } else if($act == "lihat"){
                  include "profiluser.php";
              } else if($act == "editprofil"){
                include "editprofil.php";
            }
            } else if($page == "home" || $page == ""){
                include "home.php";
            } else if($page == "profil"){
                include "profil.php";
            } else if($page == "guru"){
                if($act == ""){
                    include "dataguru.php";
                } else if($act == "add"){
                    include "inputguru.php";
                } else if($act == "edit"){
                    include "editguru.php";
                } else if($act == "hapus"){
                    include "hapusguru.php";
                }
            
            } else if($page == "home" || $page == ""){
                include "home.php";
            } else if($page == "profil"){
                include "profil.php";
            } else if($page == "mapel"){
                if($act == ""){
                    include "datamapel.php";
                } else if($act == "add"){
                    include "inputmapel.php";
                } else if($act == "edit"){
                    include "editmapel.php";
                } else if($act == "hapus"){
                    include "hapusmapel.php";
                }

            } else if($page == "home" || $page == ""){
                include "home.php";
            } else if($page == "profil"){
                include "profil.php";
            } else if($page == "prestasi"){
                if($act == ""){
                    include "dataprestasi.php";
                } else if($act == "add"){
                    include "inputprestasi.php";
                } else if($act == "edit"){
                    include "editprestasi.php";
                } else if($act == "hapus"){
                    include "hapusprestasi.php";
                }
              } else if($page == "home" || $page == ""){
                include "home.php";
            } else if($page == "profil"){
                include "profil.php";
            } else if($page == "berita"){
                if($act == ""){
                    include "databerita.php";
                } else if($act == "add"){
                    include "inputberita.php";
                } else if($act == "edit"){
                    include "editberita.php";
                } else if($act == "hapus"){
                    include "hapusberita.php";
                }

              } else if($page == "home" || $page == ""){
                include "home.php";
            } else if($page == "profil"){
                include "profil.php";
            } else if($page == "kegiatan"){
                if($act == ""){
                    include "datakegiatan.php";
                } else if($act == "add"){
                    include "inputkegiatan.php";
                } else if($act == "edit"){
                    include "editkegiatan.php";
                } else if($act == "hapus"){
                    include "hapuskegiatan.php";
                }
              } else if($page == "home" || $page == ""){
                include "home.php";
            } else if($page == "profil"){
                include "profil.php";
            } else if($page == "fasilitas"){
                if($act == ""){
                    include "datafasilitas.php";
                } else if($act == "add"){
                    include "inputfasilitas.php";
                } else if($act == "edit"){
                    include "editfasilitas.php";
                } else if($act == "hapus"){
                    include "hapusfasilitas.php";
                }
              } else if($page == "home" || $page == ""){
                include "home.php";
            } else if($page == "profil"){
                include "profil.php";
            } else if($page == "ekskul"){
                if($act == ""){
                    include "dataekskul.php";
                } else if($act == "add"){
                    include "inputekskul.php";
                } else if($act == "edit"){
                    include "editekskul.php";
                } else if($act == "hapus"){
                    include "hapusekskul.php";
                }
              } else if($page == "home" || $page == ""){
                include "home.php";
            } else if($page == "profil"){
                include "profil.php";
            } else if($page == "pipas"){
                if($act == ""){
                    include "datapipas.php";
                } else if($act == "add"){
                    include "inputpipas.php";
                } else if($act == "edit"){
                    include "editpipas.php";
                } else if($act == "hapus"){
                    include "hapuspipas.php";
                }
              } else if($page == "home" || $page == ""){
                include "home.php";
            } else if($page == "profil"){
                include "profil.php";
            } else if($page == "p5bk"){
                if($act == ""){
                    include "datap5bk.php";
                } else if($act == "add"){
                    include "inputp5bk.php";
                } else if($act == "edit"){
                    include "editp5bk.php";
                } else if($act == "hapus"){
                    include "hapusp5bk.php";
                }
            } else if($page == "kritik"){
               if($act == ""){
                    include "datakritik.php";
                } else if($act == "hapus"){
                    include "hapuskritik.php";
                    
               } else if($page == "ekspor"){
                  if($act == ""){
                       include "export.php";
                   } else if($act == "surat"){
                       include "cetak.php";
                   }
               }
            }
            ?>

      
</div>
        <footer style="background-color: #F7F7F7;">
          <div >
           <center> SMK PGRI 1 BANGKALAN
          </center>
        </div>
      </footer>
    </div>
  </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
   
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
