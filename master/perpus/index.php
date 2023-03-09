<?php
include"../config/koneksi.php";
session_start();
  if($_SESSION['userweb']==""){
    header('location:../index.php');
  }
  if(@$_SESSION['akses']=="admin"){
    header('location:../admin/index.php');
  }else if(@$_SESSION['akses']=="tu"){
    header('location:../tu/index.php');
  }else if(@$_SESSION['akses']=="superadmin"){
    header('location:../superadmin/index.php');
  }else if(@$_SESSION['akses']=="kesiswaan"){
    header('location:../kesiswaan/index.php');
     }else if(@$_SESSION['akses']=="humas"){
    header('location:../humas/index.php');
  }else if(@$_SESSION['akses']=="kurikulum"){
    header('location:../kurikulum/index.php');
  }else if(@$_SESSION['akses']=="sarpras"){
    header('location:../sarpras/index.php');
      }else if(@$_SESSION['akses']=="penjamin"){
    header('location:../penjamin/index.php');
  }else if(@$_SESSION['akses']=="komli"){
    header('location:../komli/index.php');
  }
else if(@$_SESSION['akses']=="bk"){
    header('location:../bk/index.php');
  }
else if(@$_SESSION['akses']=="extra"){
    header('location:../extra/index.php');
  }



  $qprofil = mysqli_query($conn,"SELECT * FROM tb_user WHERE id_user='$_SESSION[userweb]' ");
  $profil = mysqli_fetch_array($qprofil);
?>
<html>
<head>
    <title>APS 2018</title>
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
              <a href="?page=home" class="site_title"><i class="fa fa-home"></i> <span>Home</span></a>
            </div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../superadmin/img/<?php echo $profil['gambar'];?>" alt="..." width="60px" height="60px" class="img-circle profile_img /">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $profil['fullname'];?></h2>
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
           
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-clipboard"></i> Disposisi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=disposisi">Disposisi</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> 
                      <li><a href="?page=disposisi&act=datasaya">Lihat Data saya</a></li>
                    </ul>
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
                    <img src="../superadmin/img/<?php echo $profil['gambar'];?>" alt="...">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="?page=disposisi&act=datasaya"> Profile</a></li>
                    <li><a href="Logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
            if($page == "disposisi"){
                if($act == ""){
                    include "dispohumas.php";
                } else if($act == "datasaya"){
                    include "datasaya.php";
                } else if($act == "edit"){
                    include "edit_profil.php";
               }
              }
               else if($page == "home" || $page == ""){
                include "home.php";
            }
            ?>
</div>
        <footer>
          <div >
           <center> XII RPL @2
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
   
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>
