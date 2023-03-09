<?php 
$id_srt = $_GET['id_srt'];
$tm=mysqli_num_rows(mysqli_query($conn, "select * from tb_disposisi where id_srt='".$_GET['id_srt']."'"));
if ($tm > 0) {
    ?>
<script type="text/javascript">alert("Data Ini Sudah Di disposisi");document.location.href="?page=surat";</script>
    <?php
}else{
        # code...


$edit_u = $conn->query("SELECT * FROM tb_surat WHERE id_srt='$id_srt'");
$data = mysqli_fetch_array($edit_u);
?>
<div>
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em></a>
                </li>
                <li>Disposisi</li>
                <li>Tambah Disposisi</li>
            </ol>
        </div>

<div class="panel-body">
                    <?php 
                                $carid = $conn->query("SELECT max(id_dispo) from tb_disposisi");
                                $data_d = mysqli_fetch_array($carid);
                                    if($data_d){
                                        $nilai_d =substr($data_d[0], 1);
                                        $koded=(int) $nilai_d;
                                        $koded= $koded+1;
                                        $hasil_d="D".str_pad($koded,3,"0",STR_PAD_LEFT);
                                    } else {
                                        $hasil_d = "D001";
                                    }
                                ?>




                                                    <?php 
                    $cari = $conn->query("SELECT max(id_srt) from tb_surat");
                    $data_c = mysqli_fetch_array($cari);
                        if($data_c){
                            $nilai_c =substr($data_c[0], 1);
                            $kode=(int) $nilai_c;
                            $kode= $kode+1;
                            $hasil_c="S".str_pad($kode,3,"0",STR_PAD_LEFT);
                        } else {
                            $hasil_c = "S001";
                        }
                    ?>
            <form action="" method="POST">
            <div class="col-md-6">
            <div class="form-group" >
                <div class="input-field">
                <label >Id Disposisi</label>
                <input type="text" class="form-control" name="id_dispo" value="<?php echo $hasil_d; ?>">
                </div>
            </div>
            <div class="form-group" >
                <div class="input-field">
                <label >Id Surat</label>
                <input type="text" class="form-control" name="id_srt" value="<?php echo $data['id_srt']; ?>">
                </div>
            </div>
            <div class="form-group" >
                <div class="input-field">
                <label >Id User</label>
                <input type="text" class="form-control" name="id_user" value="<?php echo $profil['id_user']; ?>">
                </div>
            </div>
            <div class="form-group" >
                <div class="input-field">
                <label >Menyetujui</label>
                <input type="text" class="form-control" name="dispo_kpd" value="ISHAK,S.pd" >
                </div>
            </div>
            <div class="form-group" >
                <div class="input-field">
                <label >Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="textarea1">
                </textarea>
                </div>
            </div>
            </div>

<div class="col-md-6">
                    <label class="control-label">Balas Kepada</label>
                    <select  class="form-control" name="balas_kpd" style="margin-bottom: 10px">
                                            <option value="Wakasek Humas">Wakasek Humas</option>
                                            <option value="Kasubag.Tata Usaha">Kasubag.Tata Usaha</option>
                                            <option value="Wakasek Kesiswaan">Wakasek Kesiswaan</option>
                                           <option value="Wakasek Kurikulum">Wakasek Kurikulum</option>
                                         <option value="Wakasek Sarana & Prasarana">Wakasek Sarana & Prasarana</option>
                                          <option value="Penjamin Mutu Sekolah">Penjamin Mutu Sekolah</option>
                                          <option value="Ketua Program Studi">Ketua Program Studi</option>
                                          <option value="Koordinator Perpustakaan">Koordinator Perpustakaan</option>
                                          <option value="Koordinator BK">Koordinator BK</option>
                                          <option value="Pembina Ekstra">Pembina Ekstra</option>
                                           
                    </select>

                    <label class="control-label">Pemberitahuan</label>
                    <select  class="form-control" name="notifikasi"style="margin-bottom: 10px">
                                            <option value="Tindak Lanjuti">Tindak Lanjuti</option>
                                            <option value="Selesaikan">Selesaikan</option>
                                            <option value="Untuk Diketahui">Untuk Diketahui</option>
                                            <option value="Saran Kepala Sekolah">Saran Kepala Sekolah</option>
                                            <option value="Siapkan">Siapkan</option>
                                            <option value="Pertimbangkan">Pertimbangkan</option>
                    </select>
                    <label class="control-label">Status</label>
                    <select class="form-control" name="klasifikasi">
                                            <option value="Segera">Segera</option>
                                            <option value="Amat Segera">Amat Segera</option>
                                            <option value="Penting">Penting</option>
                    </select>
</div>
                        
                      <div style="float: right; margin-right: 15px; margin-top: 15px">
                                         <input type="submit" name="tambah" class="btn btn-info z-depth-3" value="Tambah">
                                        <a href="?page=home" class="btn btn-danger z-depth-3">Batal</a>
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

                $sql = "INSERT INTO tb_disposisi(id_dispo,id_srt,id_user,dispo_kpd,balas_kpd,deskripsi,notifikasi,klasifikasi) VALUES('$id_dispo','$id_srt','$id_user','$dispo_kpd','$balas_kpd','$deskripsi','$notifikasi','$klasifikasi')";
                mysqli_query($conn,$sql);
                        ?>
                        <script type="text/javascript">alert("Tambah data berhasil");document.location.href="?page=dispo";</script>
                    <?php
                    }
                    ?>
</div>
</div>







</div>
<?php 
}
 ?>