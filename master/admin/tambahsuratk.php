    <div>
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">
                        <em class="fa fa-home"></em></a>
                    </li>
                    <li>Surat</li>
                    <li>Entry Surat</li>
                </ol>
            </div><!--/.row-->

                <div class="panel-body">
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
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <div class="form-group" >
                                <div class="input-field">
                                    <label >Id Surat</label>
                                    <input type="text" class="form-control" name="id_srt" value="<?php echo $hasil_c; ?>">
                                  </div>
                            </div>
                     

                            <div class="form-group" >
                                <div class="input-field">
                                    <label >Id User</label>
                                    <input type="text" class="form-control" name="id_user" value="<?php echo $profil['id_user']; ?>">
                                  </div>
                            </div>
                            
                                <div class="form-group" hidden>
                                <div class="input-field">
                                    <label >Tipe Surat</label>
                                    <input type="text" class="form-control" name="id_tipe_srt" value="T002">
                                </div>
                            </div>


                          <div class="form-group">
                                <div class="input-field">
                                    <label >Pengirim</label>
                                    <input type="text" class="form-control" name="pengirim_srt">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-field">
                                    <label >No Surat</label>
                                    <input type="text" class="form-control" name="kode_srt">
                                </div>
                            </div>

                           <div class="form-group">
                                <div class="input-field">
                                    <label >Instansi</label>
                                    <input type="text" class="form-control" name="distansi_srt">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <div class="input-field">
                                    <label >Tujuan</label>
                                    <input type="text" class="form-control" name="tujuan_srt">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-field">
                                    <label >Subject</label>
                                    <input type="text" class="form-control" name="subjek_srt">
                                </div>
                            </div>
                            <div class="form-group">
                                 <label class="control-label">Tanggal</label>
                                    <input type="date" class="form-control" name="tgl" >
                                   
                            </div>

                            <div class="form-group">
                                 <label class="control-label">Hari</label>
                                    <input type="text" class="form-control" name="hari" >
                                   
                            </div>
                            <div class="form-group">
                                 <label class="control-label">Waktu</label>
                                    <input type="text" class="form-control" name="waktu" >
                                   
                            </div>
                            <div class="form-group">
                                 <label class="control-label">Tempat</label>
                                    <input type="text" class="form-control" name="tempat" >
                                   
                            </div>
                            <div class="form-group">
                                <div class="input-field">
                                    <label >Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi_srt" id="textarea1">
                               </textarea>
                            </div>
                            </div>
                           
    




                <div class="row" style="margin-top: 30px; margin-left:20px; "    >
                <div>
                  <input type="submit" name="tambah" class="btn btn-info z-depth-3" value="Tambah">
                  <a href="?page=surat&act=add" class="btn btn-danger z-depth-3">Batal</a>
                </div>
              </div>
                        </div>
                                       </form>
                    <?php
                    if(isset($_POST['tambah'])){
                        $id_srt = @$_POST['id_srt'];
                        $id_user = @$_POST['id_user'];
                        $id_tipe_srt = @$_POST['id_tipe_srt'];
                        $pengirim_srt = @$_POST['pengirim_srt'];
                        $kode_srt = @$_POST['kode_srt'];
                        $tgl_srt = date('Y-m-d');
                        $distansi_srt = @$_POST['distansi_srt'];
                        $tujuan_srt = @$_POST['tujuan_srt'];
                        $subjek_srt = @$_POST['subjek_srt'];
                        $deskripsi_srt = @$_POST['deskripsi_srt'];
                        $lokasi_file = @$_FILES['file_srt']['tmp_name'];
                        $nama_file = @$_FILES['file_srt']['name'];
                        $folder = "file/$nama_file";
                         $tgl = date('Y-m-d');
                        $hari = @$_POST['hari'];
                        $waktu = @$_POST['waktu'];
                        $tempat = @$_POST['tempat'];
                        
                        move_uploaded_file($lokasi_file,"$folder");
                        $q="INSERT INTO tb_surat(id_srt,id_user,id_tipe_srt,pengirim_srt,kode_srt,tgl_srt,distansi_srt,tujuan_srt,subjek_srt,deskripsi_srt, file_srt,tgl,hari,waktu,tempat) VALUES('$id_srt', '$id_user', '$id_tipe_srt', '$pengirim_srt', '$kode_srt', '$tgl_srt', '$distansi_srt', '$tujuan_srt', '$subjek_srt', '$deskripsi_srt', '$nama_file','$tgl','$hari','$waktu','$tempat')";
                        mysqli_query($conn,$q);
                        ?>
                        <script type="text/javascript">alert("Tambah data berhasil");document.location.href="?page=home";</script>
                    <?php
                    }
                    ?>
                </div>




</div>