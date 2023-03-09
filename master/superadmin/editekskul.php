<?php 
include "../config/dbconnect.php";
$id_ekskul = $_GET['idekskul'];
$edit_u = $conn->query("SELECT * FROM ekskul WHERE idekskul='$id_ekskul'");
$data = mysqli_fetch_array($edit_u);
?>
<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Ekstrakurikuler</li>
				<li>Ubah Data Ekstrakurikuler</li>
			</ol>
		</div><!--/.row-->
		<form action="" method="post" enctype="multipart/form-data">
<div class="col-md-6">
	<div>
			<div class="col-lg-12">
				<h1 class="page-header">Data Ekstrakurikuler</h1>
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
							               		<label >Nama Ekstrakurikuler<span style="color:red"> *<span></label>
							                   	<input type="text" class="form-control" name="ekskul" value="<?php echo $data['namaekskul']; ?>" required>
							               	</div>
							             </div>
							               <div class="form-group" >
							               	<div class="input-field">
							               		<label >Deskripsi<span style="color:red"> *<span></label>
												   <textarea name="deskripsie" minlength="10"  rows="10" type="text" class="form-control"  required autofocus>
												   <?php echo $data['deskripsie']; ?>	
												</textarea>
							                   	<!-- <input type="text" class="form-control" name="deskripsie" value="<?php echo $data['deskripsie']; ?>" required> -->
							               	</div>
							   				</div>
							               <div class="form-group">
                              <label class="control-label">Gambar<span style="color:red"> *<span></label>
                                    <input type="file" class="form-control" name="gambar" required >
                                     <span><?php echo $data['foto'];?></span>
                            
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
						       	<a href="?page=ekskul" class="btn btn-danger z-depth-3">Batal</a>
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
                        $namaekskul = $_POST['ekskul'];
						$deskripsie = $_POST['deskripsie'];
                        // $email = $_POST['email'];
                        // $alamat = $_POST['alamat'];
                        // $phone = $_POST['phone'];

                       $lokasi_file = @$_FILES['gambar']['tmp_name'];
                        $nama_file = @$_FILES['gambar']['name'];
                       $file_size = @$_FILES['gambar']['size'];

					   $folder = "../../ekskul/$nama_file";
                      if($file_size <= 1000000){
                        if($nama_file != ""){
                            move_uploaded_file($lokasi_file,"$folder");
                            if(is_file("../../ekskul/".$data['foto'])) // Jika foto ada
                                 unlink("../../ekskul/".$data['foto']); // Hapus file  sebelumnya yang ada di folder images
    
                            $update = $conn->query("UPDATE ekskul SET foto='$nama_file', namaekskul='$namaekskul',
                                                      deskripsie='$deskripsie' WHERE idekskul='$id_ekskul'");
                            if($update){
                                ?>
                              
                                              <script type="text/javascript">alert("Data Berhasil Diubah");document.location.href="?page=ekskul";</script>
                                <?php
                            } else {
                                ?>
                                <script type="text/javascript">alert("gagal");</script>
                                <?php
                            }
                        } else {
                            $update = $conn->query("UPDATE ekskul SET foto='$nama_file', namaekskul='$namaekskul',
							deskripsie='$deskripsie' WHERE idekskul='$id_ekskul'");
                            if($update){
                                ?>
                           
                                              <script type="text/javascript">alert("Data Berhasil Diubah");document.location.href="?page=ekskul";</script>
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

