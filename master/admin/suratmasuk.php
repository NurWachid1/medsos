  <div>
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em></a>
        </li>
        <li>Surat</li>
        <li>Data Surat</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
            <div class="col-lg-8">
                <h1>Data Surat Masuk</h1>
            </div>
        </div><!--/.row-->
    
<div class="panel-body">
  <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>
                                    No. Surat <br>
                                    tgl
                                </th>
                                <th>
                                    User
                                </th>
                                <th>
                                    Deskripsi <br>
                                    File
                                </th>
                                <th>Pengirim <br> Tujuan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php
  $qjumlah=mysqli_query($conn,"SELECT * FROM tb_surat where id_tipe_srt='T001' ");
  $jumlah=mysqli_num_rows($qjumlah);
  ?>
              <?php

              //pagging
    $batas=3;
    $hal= ceil($jumlah/$batas);
     $page=(isset($_GET['hal'])) ? $_GET['hal']:1;
     $posisi=($page - 1) * $batas;
    //paging
    $no=1+$posisi;
                            $surat_klr = $conn->query("SELECT tb_user. * , tb_surat. * FROM tb_surat INNER JOIN tb_user ON tb_user.id_user = tb_surat.id_user where id_tipe_srt='T001'  limit $posisi,$batas ");
                            while($data=mysqli_fetch_array($surat_klr)){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td>
                                    <?php echo $data['kode_srt']; ?><legend></legend>
                                    <?=date('d F Y', strtotime($data['tgl_srt'])); ?>
                                </td>
                                <td><?php echo $data['fullname']; ?></td>
                                <td style="width: 300px;">
                                    <?php echo $data['deskripsi_srt']; ?> <br><legend></legend>
                                    <b>File :</b><a href="../superadmin/file/<?php echo $data['file_srt']; ?>"><?php echo $data['file_srt']; ?></a>
                                    </td>
                                <td><?php echo $data['pengirim_srt']; ?><legend></legend>
                                    <?php echo $data['tujuan_srt'] ?>
                                </td>
                                <td>
                                  <a href="?page=surat&act=editm&id_srt=<?php echo $data['id_srt']; ?>" class="btn btn-primary  z-depth-4"><i class="fa fa-pencil"></i> Edit</a>
                                  <a href="?page=dispo&act=dispo&id_srt=<?php echo $data['id_srt']; ?>" class="btn btn-success  z-depth-4"><i class="fa fa-file"></i> Disposisi</a><br/><br>
                                  <a href="?page=surat&act=hapusms&id_srt=<?php echo $data['id_srt']; ?>" class="btn btn-danger  z-depth-4"
                                    onclick="return confirm('Jika surat sudah di disposisi maka disposisi akan terhapus juga, lanjutkan')"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                     <center>
  <ul class="pagination">
  <?php
  for($i=1; $i<=$hal; $i++){
  ?>
  <li <?php if($page==$i){ echo "class='active'";}?>><a href="?page=surat&hal=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
  }
  ?>
  </ul>
</center>
                </div>
            </div>


