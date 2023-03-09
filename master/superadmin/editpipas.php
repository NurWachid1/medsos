<?php 
include "../config/dbconnect.php";
$id_pipas = $_GET['idpipas'];
$edit_u = $conn->query("SELECT * FROM pipas WHERE idpipas='$id_pipas'");
$data = mysqli_fetch_array($edit_u);
?>
<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Proyek IPAS</li>
				<li>Ubah Data PIPAS</li>
			</ol>
		</div><!--/.row-->
		<form action="" method="post" enctype="multipart/form-data">
<div class="col-md-6">
	<div>
			<div class="col-lg-12">
				<h1 class="page-header">Data PIPAS</h1>
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
							               		<label >Judul Karya<span style="color:red"> *<span></label>
							                   	<input type="text" class="form-control" name="judulpipas" value="<?php echo $data['judulpipas']; ?>" required>
							               	</div>
							             </div>
							               <div class="form-group" >
							               	<div class="input-field">
							               		<label >Deskripsi<span style="color:red"> *<span></label>
												   <textarea name="deskripsipipas" minlength="10"  rows="10" type="text" class="form-control"  required autofocus>
												   <?php echo $data['deskripsi_pipas']; ?>
												</textarea>
							                   	<!-- <input type="text" class="form-control" name="deskripsipipas" value="<?php echo $data['deskripsi_pipas']; ?>" required> -->
							               	</div>
							   				</div>
							               <div class="form-group">
                              <label class="control-label">Gambar<span style="color:red"> *<span></label>
                                    <input type="file" class="form-control" name="gambar" required >
                                     <span><?php echo $data['foto_pipas'];?></span>
                            
                                   </div>
							              <!-- <div class="row" hidden>
							               	<div class="input-field">
							                   	<input type="text" class="validate" name="level" value="admin" title="Mohon isi data ini" value="<?php echo $data['id_user']; ?>">
							                   	<label >Level</label>
							               	</div>
							           	</div> -->
										   <div class="row" style="margin-top: 10px">
		<div class="row" style="float: right; margin-right: 15px;">
				            <div>
						       	<input type="submit" name="simpan" class="btn btn-info z-depth-3" value="Simpan">
						       	<a href="?page=pipas" class="btn btn-danger z-depth-3">Batal</a>
				            </div>
				        </div>
</div>


</div>
<!-- <div class="col-md-6">
		<div>
			<div class="col-lg-12">
				<h1 class="page-header">Akun Anda!</h1>
			</div>
	</div>
							<div class="form-group" >
							            <div class="input-field">
							               		<label >Username</label>
							                   	<input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>">
							            </div>
							 </div>
							 <div class="form-group" >
							            <div class="input-field">
							               		<label >Kata Sandi</label>
							                   	<input type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>">
							            </div>
							 </div> -->
							 
<!-- </div> -->
</form>
 <?php 
                    if(isset($_POST['simpan'])){
                        $judulpipas = $_POST['judulpipas'];
						$deskripsipipas = $_POST['deskripsipipas'];
                        // $email = $_POST['email'];
                        // $alamat = $_POST['alamat'];
                        // $phone = $_POST['phone'];

                       $lokasi_file = @$_FILES['gambar']['tmp_name'];
                        $nama_file = @$_FILES['gambar']['name'];
                       $file_size = @$_FILES['gambar']['size'];

 $folder = "../../pipas/$nama_file";
                      if($file_size <= 2000000){
                        if($nama_file != ""){
                            move_uploaded_file($lokasi_file,"$folder");
                            if(is_file("../../pipas/".$data['foto_pipas'])) // Jika foto ada
                                 unlink("../../pipas/".$data['foto_pipas']); // Hapus file  sebelumnya yang ada di folder images
    
                            $update = $conn->query("UPDATE pipas SET foto_pipas='$nama_file', judulpipas='$namapipas',
                                                     deskripsi_pipas='$deskripsipipas' WHERE idpipas='$id_pipas'");
                            if($update){
                                ?>
                              
                                              <script type="text/javascript">alert("Data Berhasil Diubah");document.location.href="?page=pipas";</script>
                                <?php
                            } else {
                                ?>
                                <script type="text/javascript">alert("gagal");</script>
                                <?php
                            }
                        } else {
                            $update = $conn->query("UPDATE pipas SET foto_pipas='$nama_file', judulpipas='$namapipas',
							deskripsi_pipas='$deskripsipipas' WHERE idpipas='$id_pipas'");
                            if($update){
                                ?>
                           
                                              <script type="text/javascript">alert("Data Berhasil Diubah");document.location.href="?page=pipas";</script>
                               <?php
                     } else {
                                              ?>
                                              <script type="text/javascript">alert("Data Gagal untuk Diubah");</script>
                                    <?php
                                }
                            }
                        }else{
                            ?>
                            <script type="text/javascript">alert("Maaf, ukuran file yang diupload tidak boleh lebih dari 2MB");</script>
                                              <?php
                                          }
                                      }

                                      
                                  
                                  ?>

