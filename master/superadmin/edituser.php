<?php 
include "../config/dbconnect.php";
$id_user = $_GET['id_user'];
$edit_u = $conn->query("SELECT * FROM user WHERE iduser='$id_user'");
$data = mysqli_fetch_array($edit_u);
?>
<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Pengguna</li>
				<li>Ubah Data Pengguna</li>
			</ol>
		</div><!--/.row-->
		<form action="" method="post" enctype="multipart/form-data">
<div class="col-md-6">
	<div>
			<div class="col-lg-12">
				<h1 class="page-header">Data Pengguna</h1>
			</div>
	</div>

				            		<?php 
				            		// $cari = $conn->query("SELECT max(iduser) from user");
				            		// $data_c = mysqli_fetch_array($cari);
				            		// if($data_c){
				            		// 	$nilai_c =substr($data_c[0], 1);
				            		// 		$kode=(int) $nilai_c;
				            		// 		$kode= $kode+1;
				            		// 		$hasil_c="U".str_pad($kode,3,"0",STR_PAD_LEFT);
				            		// } else {
				            		// 	$hasil_c = "U001";
				            		// }
				            		?>
										<!-- <div class="form-group" >
							               	<div class="input-field">
							               		<label >Id User</label>
							                   	<input type="text" class="form-control" name="id_user" value="">
							               	</div>
							           	</div> -->
							           	<div class="form-group" >
							               	<div class="input-field">
							               		<label >Nama Lengkap<span style="color:red"> *<span></label>
							                   	<input type="text" class="form-control" name="namalengkap" value="<?php echo $data['namalengkap']; ?>" required>
							               	</div>
							             </div>
							              <!-- <div class="form-group" >
							               	<div class="input-field">
							               		<label >Alamat</label>
							                   	<input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
							               	</div>
							               </div>
							               <div class="form-group" >
							               	<div class="input-field">
							               		<label >Email</label>
							                   	<input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>">
							               	</div>
							   				</div>
							               <div class="form-group" >
							               	<div class="input-field">
							               		<label >Phone</label>
							                   	<input type="text" class="form-control" name="phone" value="<?php echo $data['phone']; ?>">
							               	</div>
							   				</div> -->
							               <div class="form-group">
                              <label class="control-label">Gambar<span style="color:red"> *<span></label>
                                    <input type="file" class="form-control" name="gambar"  required>
                                     <span><?php echo $data['fotouser'];?></span>
                            
                                   </div>
							              <div class="row" hidden>
							               	<div class="input-field">
							                   	<input type="text" class="validate" name="level" value="admin" title="Mohon isi data ini" value="<?php echo $data['iduser']; ?>">
							                   	<label >Role<span style="color:red"> *<span></label>
							               	</div>
							           	</div>


</div>
<div class="col-md-6">
		<div>
			<div class="col-lg-12">
				<h1 class="page-header">Akun Pengguna</h1>
			</div>
	</div>
							<div class="form-group" >
							            <div class="input-field">
							               		<label >Username<span style="color:red"> *<span></label>
							                   	<input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" required>
							            </div>
							 </div>
							 <div class="form-group" >
							            <div class="input-field">
							               		<label >Kata Sandi<span style="color:red"> *<span></label>
							                   	<input type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>" required>
							            </div>
							 </div>
							  <div class="row" style="margin-top: 10px">
		<div class="row" style="float: right; margin-right: 15px;">
				            <div>
						       	<input type="submit" name="simpan" class="btn btn-info z-depth-3" value="Simpan">
						       	<a href="?page=user" class="btn btn-danger z-depth-3">Batal</a>
				            </div>
				        </div>
</div>
</div>
</form>
 <?php 
                    if(isset($_POST['simpan'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $fullname = $_POST['namalengkap'];
                        // $email = $_POST['email'];
                        // $alamat = $_POST['alamat'];
                        // $phone = $_POST['phone'];

                       $lokasi_file = @$_FILES['gambar']['tmp_name'];
                        $nama_file = @$_FILES['gambar']['name'];
                       $file_size = @$_FILES['gambar']['size'];

 $folder = "img/$nama_file";
                      if($file_size <= 1000000){
                        if($nama_file != ""){
                            move_uploaded_file($lokasi_file,"$folder");
                            if(is_file("img/".$data['fotouser'])) // Jika foto ada
                                 unlink("img/".$data['fotouser']); // Hapus file  sebelumnya yang ada di folder images
    
                            $update = $conn->query("UPDATE user SET username='$username', password='$password',
                                                    namalengkap='$fullname', fotouser='$nama_file' WHERE iduser='$id_user' ");
                            if($update){
                                ?>
                              
                                              <script type="text/javascript">alert("Data Berhasil Diubah");document.location.href="?page=user";</script>
                                <?php
                            } else {
                                ?>
                                <script type="text/javascript">alert("gagal");</script>
                                <?php
                            }
                        } else {
                            $update = $conn->query("UPDATE user SET username='$username', password='$password',
                                                    namalengkap='$fullname' WHERE iduser='$id_user' ");
                            if($update){
                                ?>
                           
                                              <script type="text/javascript">alert("Data Berhasil Diubah");document.location.href="?page=user";</script>
                               <?php
                     } else {
                                              ?>
                                              <script type="text/javascript">alert("Data Gagal untuk Diubah");</script>
                                    <?php
                                }
                            }
                        }else{
                            ?>
                            <script type="text/javascript">alert("Maaf, ukuran file yang diupload tidak boleh lebih dari 1MB");</script>
                                              <?php
                                          }
                                      }

                                      
                                  
                                  ?>

