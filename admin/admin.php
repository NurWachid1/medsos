
<?php 
	session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}

// Memanggil atau membutuhkan file function.php
require 'function.php';
	include '../dbconnect.php';
		
	if(isset($_POST['addadmin']))
	{
		$username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['namaadmin'];
			  
		$q=mysqli_query($conn, "SELECT*FROM `admin` WHERE `username`='$username'");
        $cek=mysqli_num_rows($q);

        if($cek==0){
            $tambahadmin = mysqli_query($conn,"INSERT INTO `admin` (`idadmin`, `username`, `password`, `namaadmin`) VALUES ('', '$username', '$password', '$nama')");
            if ($tambahadmin){
            echo"<script>
                    alert('Data Admin Berhasil Ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
            } else { echo "<script>
                alert('Data Admin Gagal Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
            };
        }
        else{
            echo "<script>
                alert('Username Telah Digunakan!');
                document.location.href = 'admin.php';
            </script>";
        }
		
	};
   
	?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kelola Admin | SMK PGRI 1 Bangkalan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
	
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                <nav>
                        <ul class="metismenu" id="menu">
                        <li><a href="index.php"><span>Beranda</span></a></li>
                        <li><a href="admin.php"><i class="ti-user"></i><span>Data Admin</span></a></li>
							<!-- <li><a href=",,/webadmin/index-admin.php"><span>Kembali ke Website</span></a></li> -->
							<li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Data Kesiswaan
                                    </span></a>
                                <ul class="collapse">
								<li><a href="prestasi.php"><span>Data Prestasi</span></a></li>
								<li><a href="ekskul.php"><span>Data Ekstrakulikuler</span></a></li>
                                </ul>
                            </li>
							<li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-ruler-pencil"></i><span>Kelola Data Kurikulum
                                    </span></a>
                                <ul class="collapse">
                                    <!-- <li class="active"><a href="keahlian.php">Program Keahlian</a></li> -->
                                    <li class="active"><a href="mapel.php">Data Mata Pelajaran</a></li>
                                </ul>
                            </li>
                            <li><a href="guru.php"><i class="ti-id-badge"></i><span> Data Guru</span></a></li>
                            <li><a href="kegiatan.php"><i class="ti-calendar"></i><span> Data Kegiatan</span></a></li>
                            <li><a href="fasilitas.php"><span>Data Fasilitas</span></a></li>
                            <!-- <li><a href="operasional.php"><span>Kelola Jam Operasional</span></a></li> -->
                            <li>
                                <a href="komentar.php"><i class="ti-notepad"></i><span>Data Komentar</span></a>
                            </li>
							<!-- <li><a href="user.php"><span>Kelola Admin</span></a></li> -->
							
                            
                            <li>
                                <a href="logout.php"><span>Keluar</span></a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
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
               
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <h2>Data Admin</h2>
							<div class="row my-2">
								<div class="col-md">
								<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Tambah Admin</button>
								</div>
							</div>

                                    <div class="data-tables datatable-dark">
										 <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No.</th>
												<th>ID Pengguna</th>
												<th>Password</th>
												<th>Nama Admin</th>
                                                <th style="text-align: center">Aksi</th>
											</tr></thead><tbody>
											<?php
                                            // $sql = mysql_query($conn, "SELECT * FROM kategori order by idkategori ASC") or die(mysql_error());
											$brgs=mysqli_query($conn,"SELECT * from `admin` order by `idadmin` ASC");
											// $no=1;
											while($p=mysqli_fetch_array($brgs)){
												$id = $p['idadmin'];

												?>
												
												<tr>
													<td><?php echo $p['idadmin'] ?></td>
                                                    <td><?php echo $p['username'] ?></td>
                                                    <td><?php echo $p['password'] ?></td>
													<td><?php echo $p['namaadmin'] ?></td>
                                                    <td style="text-align: center">
                                                        <!-- <button class="btn btn-success btn-sm text-white detail" data-id="" style="font-weight: 600;"><i class="bi bi-info-circle-fill"></i>&nbsp;Detail</button> | -->
                                                        <a href="ubahadmin.php?idadmin=<?= $p['idadmin']; ?>" class="btn btn-warning btn-sm" style="font-weight: 600;"><i class="bi bi-pencil-square"></i>&nbsp;Ubah</a> |
                                                        <a href="hapusadmin.php?idadmin=<?= $p['idadmin']; ?>" class="btn btn-danger btn-sm" style="font-weight: 600;" onclick="return confirm('Apakah anda yakin ingin menghapus komentar dari <?= $p['username']; ?> ?');"><i class="bi bi-trash-fill"></i>&nbsp;Hapus</a>
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
	
	<!-- modal input -->
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Data Admin</h4>
						</div>
						<div class="modal-body">
							<form method="post">
								<div class="form-group">
									<label><i>Username</i><span style="color: red">*</span></label>
									<input name="username" minlength="3" maxlength="20" type="text" placeholder="Id Admin" class="form-control" required autofocus>
								</div>
                                <div class="form-group">
									<label>Kata Sandi<span style="color: red">*</span></label>
									<input name="password" minlength="3" maxlength="10" type="text" placeholder="Kata Sandi" class="form-control" required autofocus>
								</div>
                                <div class="form-group">
									<label>Nama Admin<span style="color: red">*</span></label>
									<input name="namaadmin" type="text" class="form-control" required autofocus>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input name="addadmin" type="submit" class="btn btn-primary" value="Tambah">
							</div>
						</form>
					</div>
				</div>
			</div>
	
            
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
