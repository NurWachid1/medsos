<?php 
include "../config/koneksi.php";
$id_user = $_GET['id_user'];
$edit_u = $conn->query("SELECT * FROM tb_user WHERE id_user='$id_user'");
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
        <h1 class="page-header">Data Anda!</h1>
      </div>
  </div>

                        <?php 
                        $cari = $conn->query("SELECT max(id_user) from tb_user");
                        $data_c = mysqli_fetch_array($cari);
                        if($data_c){
                          $nilai_c =substr($data_c[0], 1);
                            $kode=(int) $nilai_c;
                            $kode= $kode+1;
                            $hasil_c="U".str_pad($kode,3,"0",STR_PAD_LEFT);
                        } else {
                          $hasil_c = "U001";
                        }
                        ?>
                    <div class="form-group" >
                              <div class="input-field">
                                <label >Id User</label>
                                  <input type="text" class="form-control" name="id_user" value="<?php echo $data['id_user']; ?>">
                              </div>
                          </div>
                          <div class="form-group" >
                              <div class="input-field">
                                <label >Nama</label>
                                  <input type="text" class="form-control" name="fullname" value="<?php echo $data['fullname']; ?>">
                              </div>
                           </div>
                            <div class="form-group" >
                              <div class="input-field">
                                <label >Alamat</label>
                                  <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
                              </div>
                             </div>
                             <div class="form-group" >
                              <div class="input-field">
                                <label >Email</label>
                                  <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>">
                              </div>
                        </div>
                             <div class="form-group" >
                              <div class="input-field">
                                <label >Phone</label>
                                  <input type="text" class="form-control" name="phone" value="<?php echo $data['phone']; ?>">
                              </div>
                        </div>
                             
                            <div class="row" hidden>
                              <div class="input-field">
                                  <input type="text" class="validate" name="level" value="admin" title="Mohon isi data ini" value="<?php echo $data['id_user']; ?>">
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
                                  <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>">
                          </div>
               </div>
               <div class="form-group" >
                          <div class="input-field">
                                <label >Password</label>
                                  <input type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>">
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
                  $fullname = $_POST['fullname'];
                  $email = $_POST['email'];
                  $alamat = $_POST['alamat'];
                  $phone = $_POST['phone'];

                  $sql_edit = "UPDATE tb_user SET username='$username', password='$password', fullname='$fullname', email='$email', alamat='$alamat', phone='$phone' WHERE id_user='$id_user' ";
                  $conn->query($sql_edit);
                  ?>
                  <script type="text/javascript">alert("Update data sukses");document.location.href="?page=disposisi&act=datasaya";</script>
                  <?php
                }
                ?>
              </div>