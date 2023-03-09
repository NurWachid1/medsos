<?php
include "../config/koneksi.php";
$id_srt = @$_GET['id_srt'];
$sql = mysqli_query($conn, "SELECT * FROM tb_surat WHERE id_srt='$id_srt'");
$data = mysqli_fetch_array($sql);
?>
<div>
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em></a>
        </li>
        <li>Surat</li>
        <li>Edit Surat Keluar </li>
      </ol>
    </div>
<div class="col-lg-8">
        <form action="" method="post" enctype="multipart/form-data">
<div class="col-md-8">

<div>
      <div class="col-lg-12">
        <h1 class="page-header">Edit Surat Keluar</h1>
      </div>
</div>
              <div class="form-group" hidden="">

                                 <label class="control-label">Id Surat</label>
                                
                                    <input  type="text" class="form-control" name="id_srt" value="<?php echo $data['id_user']; ?>"  >
                              
                            </div>
                            
                            <div class="form-group" hidden="">
                                    <label class="control-label">Id User</label>
                                    <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $profil['id_user']; ?>" title="Mohon isi data ini">
                                    </div>
                          <div class="form-group" hidden="">
                                    <label class="control-label">Id Tipe Surat</label>
                                    <input type="text" class="form-control" name="id_user" value="<?php echo $data['id_tipe_surat']; ?>" title="Mohon isi data ini">
                            </div>

                            <div class="form-group">
                                <div class="input-field">
                               <label class="control-label">Pengirim Surat</label>
                                    <input type="text" class="form-control" name="pengirim_srt"  value="<?php echo $data['pengirim_srt']; ?>" title="Mohon isi data ini">
                                   
                               </div>
                            </div>
                            <div class="form-group">
                                 <label class="control-label">No Surat</label>
                                    <input type="text" class="form-control" name="kode_srt"  value="<?php echo $data['kode_srt']; ?>" title="Mohon isi data ini">
                                   
                            </div>
                           
                                   
                           <div class="form-group">
                               <label class="control-label">Distansi Surat</label>
                                    <input type="text" class="form-control" name="distansi_srt"  value="<?php echo $data['distansi_srt']; ?>" title="Mohon isi data ini">
                                
                            </div>
                           <div class="form-group">
                                 <label class="control-label">Tujuan Surat</label>
                                    <input type="text" class="form-control" name="tujuan_srt"  value="<?php echo $data['tujuan_srt']; ?>" title="Mohon isi data ini">
                                    
                            </div>
                           <div class="form-group">
                              <label class="control-label">Subjek Surat</label>
                                    <input type="text" class="form-control" name="subjek_srt"   value="<?php echo $data['subjek_srt']; ?>" >
                                   
                            
                                   </div>
                                   <div class="form-group">
                                 <label class="control-label">Tanggal</label>
                                    <input type="date" class="form-control" name="tgl" value="<?php echo $data['tgl']; ?>" >
                                   
                            </div>

                            <div class="form-group">
                                 <label class="control-label">Hari</label>
                                    <input type="text" class="form-control" name="hari" value="<?php echo $data['hari']; ?>" >
                                   
                            </div>
                            <div class="form-group">
                                 <label class="control-label">Waktu</label>
                                    <input type="text" class="form-control" name="waktu" value="<?php echo $data['waktu']; ?>" >
                                   
                            </div>
                            <div class="form-group">
                                 <label class="control-label">Tempat</label>
                                    <input type="text" class="form-control" name="tempat" value="<?php echo $data['tempat']; ?>" >
                                   
                            </div>
                                   <div class="form-group">
                                <div class="input-field">
                                    <label >Deskripsi</label>
                                    <input type="hidden" name="deskripsi_srt" value="<?php echo $data['deskripsi_srt'] ?>">
                                    <textarea class="form-control" name="deskripsi_srt"  value="<?php echo $data['deskripsi_srt']; ?>"> <?php echo $data['deskripsi_srt']; ?>
                               </textarea>
                             </input>
                            </div>
                            </div>
                                   <div class="form-group">
                                <div class="input-field">
                                    <label >File</label>
                                    <input type="file" class="form-control" name="file_srt" > <?php echo $data['file_srt']; ?>
                                </div>
                            </div>

                            <div class="row" style="float: right; margin-right: 15px;">
                    <div>
                    <input type="submit" name="simpan" class="btn btn-info z-depth-3" value="Simpan">
                    <a href="?page=surat" class="btn btn-danger z-depth-3">Batal</a>
                    </div>
                </div>


 <?php

if(isset($_POST['simpan'])){
$id_srt = $_GET['id_srt'];
$pengirim_srt = @$_POST['pengirim_srt'];
$kode_srt = @$_POST['kode_srt'];
$distansi_srt = @$_POST['distansi_srt'];
$tujuan_srt = @$_POST['tujuan_srt'];
$subjek_srt=@$_POST['subjek_srt'];
$deskripsi_srt=@$_POST['deskripsi_srt'];
 $lokasi_file = @$_FILES['file_srt']['tmp_name'];
$nama_file = @$_FILES['file_srt']['name'];
  $tgl = @$_POST['tgl'];
$hari = @$_POST['hari'];
 $tempat = @$_POST['tempat'];
$waktu = @$_POST['waktu'];
$folder = "file/$nama_file";


                        if($nama_file != ""){
                            move_uploaded_file($lokasi_file,"$folder");
                            if(is_file("file/".$data['file_srt'])) // Jika foto ada
                                 unlink("file/".$data['file_srt']); // Hapus file  sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
                  $update = $conn->query("UPDATE tb_surat SET pengirim_srt='$pengirim_srt', kode_srt='$kode_srt', distansi_srt='$distansi_srt', tujuan_srt='$tujuan_srt',subjek_srt='$subjek_srt',deskripsi_srt='$deskripsi_srt',tgl='$tgl',hari='$hari',waktu='$waktu',tempat='$tempat', file_srt='$nama_file' WHERE id_srt='$id_srt' ");
                                          if($update){
                                              ?>
                                              
                                              <script type="text/javascript">alert("Edit File berhasil");document.location.href="?page=surat";</script>
                                              <?php
                                          } else {
                                              ?>
                                              <script type="text/javascript">alert("gagal");</script>
                                              <?php
                                          }
                                      } else {
                                          $update = $conn->query("UPDATE tb_surat SET pengirim_srt='$pengirim_srt', kode_srt='$kode_srt', distansi_srt='$distansi_srt', tujuan_srt='$tujuan_srt',subjek_srt='$subjek_srt',deskripsi_srt='$deskripsi_srt',tgl='$tgl',hari='$hari',waktu='$waktu',tempat='$tempat' WHERE id_srt='$id_srt' ");
                                          if($update){
                                              ?>
                                              
                                                 <script type="text/javascript">alert("Edit data berhasil");document.location.href="?page=surat&act=sk";</script>
                                              <?php
                                          } else {
                                              ?>
                                              <script type="text/javascript">alert("gagal");</script>
                                              <?php
                                          }
                                      }
}
                                      
                                  
                                  ?>


</div>
        </form>
</div>


</div>