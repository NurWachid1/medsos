<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Karya P5BK</li>
				<li>Tambah Proyek</li>
			</ol>
		</div><!--/.row-->
		
		

<form action="" method="post" enctype="multipart/form-data" >
<div class="col-md-6">
	<div>
			<div class="col-lg-12">
				<h1 class="page-header">Data Karya P5BK!</h1>
			</div>
	</div>

				            		<?php 
				            		$cari = $conn->query("SELECT max(idp5bk) from p5bk");
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
							                   	<input type="text" class="form-control" name="iduser" value="<?php echo $hasil_c; ?>">
							               	</div>
							           	</div> -->
										   
							           	<div class="form-group" >
							               	<div class="input-field">
							               		<label >Judul Karya<span style="color:red"> *<span></label>
							                   	<input type="text" class="form-control" name="judulp5bk">
							               	</div>
							             </div>
							              <div class="form-group" >
							               	<div class="input-field">
							               		<label >Deskripsi<span style="color:red"> *<span></label>
							                   	<input type="text" class="form-control" name="deskripsip5bk" >
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
							   				</div>
							                -->
							                <div class="form-group">
                        <label class="control-label">Gambar<span style="color:red"> *<span></label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
					<div class="row" style="margin-top: 10px">
                <div style="float: right; margin-right: 15px;">
                  <input type="submit" name="tambah" class="btn btn-info z-depth-3" value="Tambah">
                  <a href="" class="btn btn-danger z-depth-3">Batal</a>
                </div>
              </div>             
                     <!-- <div class="form-group">
                                 <label class="control-label">Level</label>
                                    <select type="text" class="form-control" name="level" title="Mohon isi data ini">
                                          <option value="admin">admin</option>
                                          <option value="kesiswaan">Wakasek Kesiswaan</option>
                                          <option value="humas">Wakasek Humas</option>
                                          <option value="tu">Kasubag Tata Usaha</option>
                                          <option value="Kurikulum">Wakasek Kurikulum</option>
                                         <option value="sarpras">Wakasek Sarana & Prasarana</option>
                                          <option value="penjamin">Penjamin Mutu Sekolah</option>
                                          <option value="komli">Ketua Program Studi</option>
                                          <option value="perpus">Koordinator Perpustakaan</option>
                                          <option value="bk">Koordinator BK</option>
                                          <option value="extra">Pembina Ekstra</option>
                                          </select>
                                    
                            </div> -->

</div>
<!-- <div class="col-md-6">
		<div>
			<div class="col-lg-12">
				<h1 class="page-header">Akun Pengguna!</h1>
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
							 </div> -->

							  
</form>
<?php
                    if(isset($_POST['tambah'])){
                        $idp5bk= @$_POST['idp5bk'];
                        $judulp5bk = @$_POST['judulp5bk'];
                        $deskripsip5bk= @$_POST['deskripsip5bk'];
                        $lokasi_file = @$_FILES['gambar']['tmp_name'];
                        $nama_file = @$_FILES['gambar']['name'];
                        $folder = "karya/p5bk/$nama_file";
                        // $level = @$_POST['level'];
                        move_uploaded_file($lokasi_file,"$folder");
                        $q="INSERT INTO p5bk(idp5bk,fotop,judulp,deskripsip) VALUES('$idp5bk','$nama_file', '$judulp5bk', '$deskripsip5bk')";
                        mysqli_query($conn,$q);
                        ?>
                        <script type="text/javascript">alert("Data Berhasil Ditambahkan");document.location.href="?page=p5bk";</script>
                    <?php
                    }
                    ?>
</div>
