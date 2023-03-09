<?php 
include "../config/dbconnect.php";
$id_berita = $_GET['idberita'];
$edit_u = $conn->query("SELECT * FROM berita WHERE idberita='$id_berita'");
$data = mysqli_fetch_array($edit_u);
?>
<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Berita</li>
				<li>Ubah Data Berita</li>
			</ol>
		</div><!--/.row-->
		<form action="" method="post" enctype="multipart/form-data">
<div class="col-md-6">
	<div>
			<div class="col-lg-12">
				<h1 class="page-header">Data Berita</h1>
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
							               		<label >Judul Berita<span style="color:red"> *<span></label>
							                   	<input type="text" class="form-control" name="judulberita" value="<?php echo $data['judulberita']; ?>" required>
							               	</div>
							             </div>
							              <div class="form-group" >
							               	<div class="input-field">
							               		<label >Deskripsi Berita<span style="color:red"> *<span></label>
							                   	<textarea name="deskripsib" minlength="10"  rows="10" type="text" class="form-control" required autofocus>
												   <?php echo $data['berita'];?>
												</textarea>
							               	</div>
							               </div>
							               <div class="form-group">
                              <label class="control-label">File<span style="color:red"> *<span></label>
                                    <input type="file" class="form-control" name="fileberita" required >
                                     <span><?php echo $data['fileberita'];?></span>
                            
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
						       	<a href="?page=berita" class="btn btn-danger z-depth-3">Batal</a>
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
                        $judulberita = $_POST['judulberita'];
                        $berita = $_POST['deskripsib'];
                        // $email = $_POST['email'];
                        // $alamat = $_POST['alamat'];
                        // $phone = $_POST['phone'];

                       $lokasi_file = @$_FILES['fileberita']['tmp_name'];
                        $nama_file = @$_FILES['fileberita']['name'];
                       $file_size = @$_FILES['fileberita']['size'];

 $folder = "../../berita/$nama_file";
                      if($file_size <= 1000000){
                        if($nama_file != ""){
                            move_uploaded_file($lokasi_file,"$folder");
                            if(is_file("../../berita/".$data['fileberita'])) // Jika gambar ada
                                 unlink("../../berita/".$data['fileberita']); // Hapus file  sebelumnya yang ada di folder images
    
                            $update = $conn->query("UPDATE berita SET fileberita='$nama_file', judulberita='$judulberita',
                                                     berita='$berita'WHERE idberita='$id_berita'");
                            if($update){
                                ?>
                              
                                              <script type="text/javascript">alert("Data Berhasil Diubah");document.location.href="?page=berita";</script>
                                <?php
                            } else {
                                ?>
                                <script type="text/javascript">alert("gagal");</script>
                                <?php
                            }
                        } else {
                            $update = $conn->query("UPDATE berita SET fileberita='$nama_file', judulberita='$judulberita',
							berita='$berita'WHERE idberita='$id_berita'");
                            if($update){
                                ?>
                           
                                              <script type="text/javascript">alert("Data Berhasil Diubah");document.location.href="?page=berita";</script>
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

