<?php 
include "../config/koneksi.php";
$id_dispo = $_GET['id_dispo'];
$edit_u = $conn->query("SELECT * FROM tb_disposisi WHERE id_dispo='$id_dispo'");
$data = mysqli_fetch_array($edit_u);
?>
<div>
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em></a>
                </li>
                <li>User</li>
                <li>Edit User</li>
            </ol>
        </div><!--/.row-->
        <form action="" method="post">
<div class="col-md-6">
<div>
            <div class="col-lg-12">
                <h1 class="page-header">Disposisi</h1>
            </div>
</div>
            <div class="form-group" >
                <div class="input-field">
                <label >Id Dispo</label>
                <input type="text" class="form-control" name="id_dispo" value="<?php echo $data['id_dispo']; ?>">
                </div>
            </div>
            <div class="form-group" >
                <div class="input-field">
                <label >Menyetujui</label>
                <input type="text" class="form-control" name="dispo_kpd" value="<?php echo $data['dispo_kpd']; ?>" >
                </div>
            </div>
            
            <div class="form-group" >
                <label class="control-label" >Deskripsi</label>
                <textarea id="textarea1" class="form-control" name="deskripsi"  value="<?php echo$data['deskripsi']; ?>"><?php echo$data['deskripsi']; ?> </textarea>
                
            </div>
</div>




<div class="col-md-6" >
    <div>
            <div class="col-lg-12" style="margin-bottom: 108px">
            
            </div>
    </div>
    <label style="color: gray;">Balas Kepada : </label>
                                        <select class="form-control" name="balas_kpd" style="margin-bottom: 10px"> 
                                            <option value="Wakasek Humas">Wakasek Humas</option>
                                            <option value="Kasubag.Tata Usaha" <?php if($data['balas_kpd'] == 'Kasubag.Tata Usaha') { echo 'selected'; }  ?>>Kasubag.Tata Usaha</option>
                                            <option value="Wakasek Kesiswaan" <?php if($data['balas_kpd'] == 'Wakasek Kesiswaan') { echo 'selected'; }  ?> >Wakasek Kesiswaan</option>
                                           <option value="Wakasek Kurikulum"<?php if($data['balas_kpd'] == 'Wakasek Kurikulum') { echo 'selected'; }  ?>>Wakasek Kurikulum</option>
                                         <option value="Wakasek Sarana & Prasarana"<?php if($data['balas_kpd'] == 'Wakasek Sarana & Prasarana') { echo 'selected'; }  ?>>Wakasek Sarana & Prasarana</option>
                                          <option value="Penjamin Mutu Sekolah"<?php if($data['balas_kpd'] == 'Penjamin Mutu Sekolah') { echo 'selected'; }  ?>>Penjamin Mutu Sekolah</option>
                                          <option value="Ketua Program Studi"<?php if($data['balas_kpd'] == 'Ketua Program Studi') { echo 'selected'; }  ?>>Ketua Program Studi</option>
                                          <option value="Koordinator Perpustakaan"<?php if($data['balas_kpd'] == 'Koordinator Perpustakaan') { echo 'selected'; }  ?>>Koordinator Perpustakaan</option>
                                          <option value="Koordinator BK"<?php if($data['balas_kpd'] == 'Koordinator BK') { echo 'selected'; }  ?>>Koordinator BK</option>
                                          <option value="Pembina Ekstra"<?php if($data['balas_kpd'] == 'Pembina Ekstra') { echo 'selected'; }  ?>>Pembina Ekstra</option>
                                        </select>

    <label style="color: gray;">Status : </label>
                                        <select class="form-control" name="klasifikasi" style="margin-bottom: 10px"> 
                                            <option value="Segera">Segera</option>
                                            <option value="Amat Segera" <?php if($data['klasifikasi'] == 'Amat Segera') { echo 'selected'; }  ?> >Amat Segera</option>
                                            <option value="Penting" <?php if($data['klasifikasi'] == 'Penting') { echo 'selected'; }  ?> >Penting</option>

                                        </select>





                    <label style="color: gray;">Pemberitahuan : </label>
                                        <select class="form-control" name="notifikasi">
                                            <option value="Tindak Lanjuti">Tindak Lanjuti</option>
                                            <option value="Selesaikan" <?php if($data['notifikasi'] == 'Selesaikan') { echo 'selected'; }  ?> >Selesaikan</option>
                                            <option value="Untuk Diketahui" <?php if($data['notifikasi'] == 'Untuk Diketahui') { echo 'selected'; }  ?> >Untuk Diketahui</option>
                                            <option value="Saran Kepala Sekolah" <?php if($data['notifikasi'] == 'Saran Kepala Sekolah') { echo 'selected'; }  ?> >Saran Kepala Sekolah</option>
                                            <option value="Siapkan" <?php if($data['notifikasi'] == 'Siapkan') { echo 'selected'; }  ?> >Siapkan</option>
                                            <option value="Pertimbangkan" <?php if($data['notifikasi'] == 'Pertimbangkan') { echo 'selected'; }  ?> >Pertimbangkan</option>
                                        </select>
</div>
                        
                      <div style="float: right; margin-right: 15px; margin-top: 15px">
                                         <input type="submit" name="tambah" class="btn btn-info z-depth-3" value="Simpan">
                                        <a href="?page=dispo" class="btn btn-danger z-depth-3">Batal</a>
                       </div>

        </form>
         <?php
                   
                    if(isset($_POST['tambah'])){
                 $id_dispo = @$_POST['id_dispo'];
                $id_srt = @$_POST['id_srt'];
                $id_user = @$_POST['id_user'];
                $dispo_kpd = @$_POST['dispo_kpd'];
                $balas_kpd = @$_POST['balas_kpd'];
                $deskripsi = @$_POST['deskripsi'];
                $notifikasi = @$_POST['notifikasi'];
                $klasifikasi = @$_POST['klasifikasi'];

                       
                    $sql = "UPDATE tb_disposisi SET dispo_kpd='$dispo_kpd', balas_kpd='$balas_kpd', deskripsi='$deskripsi', notifikasi='$notifikasi', klasifikasi='$klasifikasi' WHERE id_dispo='$id_dispo' ";
                mysqli_query($conn,$sql);
                        ?>
                        <script type="text/javascript">alert("Tambah data berhasil");document.location.href="?page=dispo";</script>
                    <?php
                  
                    ?>
                        <script type="text/javascript">
                        alert('Selamat Anda Berhasil Menambah Disposisi');
                        document.location.href="?page=dispo";
                        </script>
                        <?php
                        } 

                    ?>
    </div>
