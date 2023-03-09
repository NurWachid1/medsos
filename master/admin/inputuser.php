<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>User</li>
				<li>Entry User</li>
			</ol>
		</div><!--/.row-->
		
		

<form action="" method="post" enctype="multipart/form-data" >
<div class="col-md-6">
	<div>
			<div class="col-lg-12">
				<h1 class="page-header">Data Anda!</h1>
			</div>
	</div>

				            		<?php 
				            		$cari = $conn->query("SELECT max(iduser) from user");
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
							                   	<input type="text" class="form-control" name="id_user" value="<?php echo $hasil_c; ?>">
							               	</div>
							           	</div> -->
							           	<div class="form-group" >
							               	<div class="input-field">
							               		<label >Nama</label>
							                   	<input type="text" class="form-control" name="namalengkap">
							               	</div>
							             </div>
							              <div class="form-group" >
							               	<div class="input-field">
							               		<label >Alamat</label>
							                   	<input type="text" class="form-control" name="alamat" >
							               	</div>
							               </div>
							               <!-- <div class="form-group" >
							               	<div class="input-field">
							               		<label >Email</label>
							                   	<input type="email" class="form-control" name="email" >
							               	</div>
							   				</div>
							               <div class="form-group" >
							               	<div class="input-field">
							               		<label >Phone</label>
							                   	<input type="text" class="form-control" name="phone" >
							               	</div>
							   				</div> -->
							               
							                <div class="form-group">
                        <label class="control-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
							              <div class="row" hidden>
							               	<div class="input-field">
							                   	<input type="text" class="validate" name="role" value="admin" title="Mohon isi data ini">
							                   	<label >Level</label>
							               	</div>
							           	</div>


</div>
<div class="col-md-6">
		<div>
			<div class="col-lg-12">
				<h1 class="page-header">Akun Anda!</h1>
			</div>
	</div>
							<div class="form-group" >
							            <div class="input-field">
							               		<label >Username</label>
							                   	<input type="text" class="form-control" name="username">
							            </div>
							 </div>
							 <div class="form-group" >
							            <div class="input-field">
							               		<label >Kata Sandi</label>
							                   	<input type="password" class="form-control" name="password">
							            </div>
							 </div>
							  <div class="row" style="margin-top: 10px">
                <div style="float: right; margin-right: 15px;">
                  <input type="submit" name="tambah" class="btn btn-info z-depth-3" value="Tambah">
                  <a href="" class="btn btn-danger z-depth-3">Batal</a>
                </div>
              </div>
</form>
<?php
                    if(isset($_POST['tambah'])){
                        $id_user= @$_POST['iduser'];
                        $username = @$_POST['username'];
                        $password = @$_POST['password'];
                        $fullname = @$_POST['fullname'];
                        $email = @$_POST['email'];
                        $alamat = @$_POST['alamat'];
                        $phone = @$_POST['phone'];
                        $lokasi_file = @$_FILES['gambar']['tmp_name'];
                        $nama_file = @$_FILES['gambar']['name'];
                        $folder = "img/$nama_file";
                        $level = @$_POST['level'];
                        move_uploaded_file($lokasi_file,"$folder");
                        $q="INSERT INTO user(iduser,username,password,namalengkap,fotouser,role) VALUES('$id_user', '$username', '$password', '$fullname', '$nama_file','$level')";
                        mysqli_query($conn,$q);
                        ?>
                        <script type="text/javascript">alert("Data Berhasil Ditambahkan");document.location.href="?page=user";</script>
                    <?php
                    }
                    ?>
</div>
