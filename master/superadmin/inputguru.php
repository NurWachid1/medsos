<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Guru & Tendik</li>
				<li>Tambah Guru</li>
			</ol>
		</div><!--/.row-->
		
		

<form action="" method="post" enctype="multipart/form-data" >
<div class="col-md-6">
	<div>
			<div class="col-lg-12">
				<h1 class="page-header">Data Guru</h1>
			</div>
	</div>

				            		<?php 
				            		$cari = $conn->query("SELECT max(idguru) from guru");
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
							               		<label >NIP</label>
							                   	<input type="text" class="form-control" name="nip">
							               	</div>
							             </div>
							           	<div class="form-group" >
							               	<div class="input-field">
							               		<label >Nama Guru<span style="color:red"> *<span></label>
							                   	<input type="text" class="form-control" name="namaguru" required>
							               	</div>
							             </div>
										 <div class="form-group" >
							               	<div class="input-field">
							               		<label >Jabatan<span style="color:red"> *<span></label>
							                   	<input type="text" class="form-control" name="jabatan" required>
							               	</div>
							               </div>
							              <div class="form-group" >
							               	<div class="input-field">
							               		<label >Alamat Domisili<span style="color:red"> *<span></label>
							                   	<input type="text" class="form-control" name="alamat" required>
							               	</div>
							               </div>
										   <div class="form-group" >
							               	<div class="input-field">
							               		<label >Pendidikan Terakhir<span style="color:red"> *<span></label>
							                   	<input type="text" class="form-control" name="pendidikan" required>
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
                        <label class="control-label">Foto<span style="color:red"> *<span></label>
                        <input type="file" name="gambar" class="form-control" required>
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
                        $id_guru= @$_POST['idguru'];
                        $nip = @$_POST['nip'];
                        $namaguru = @$_POST['namaguru'];
                        $jabatan = @$_POST['jabatan'];
                        $alamatdom = @$_POST['alamat'];
						$pendidikanakhir = @$_POST['pendidikan'];
                        $lokasi_file = @$_FILES['gambar']['tmp_name'];
                        $nama_file = @$_FILES['gambar']['name'];
                        $folder = "../../guru/$nama_file";
                        // $level = @$_POST['level'];
                        move_uploaded_file($lokasi_file,"$folder");
                        $q="INSERT INTO guru(idguru,foto,nip,namaguru,keterangan,alamat,pendidikanterakhir) VALUES('$id_guru','$nama_file', '$nip', '$namaguru', '$jabatan', '$alamatdom','$pendidikanakhir')";
                        mysqli_query($conn,$q);
                        ?>
                        <script type="text/javascript">alert("Data Berhasil Ditambahkan");document.location.href="?page=guru";</script>
                    <?php
                    }
                    ?>
</div>
