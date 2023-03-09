<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Berita</li>
				<li>Data Berita</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Data Berita</h1>
        <a href="?page=berita&act=add" class="btn btn-primary z-depth-4"><i class="fa fa-plus"></i> Tambah</a>
			</div>
		</div><!--/.row-->
		
<div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Judul Berita</th>
                <th>File Berita</th>
                <th>Berita</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
  $qjumlah=mysqli_query($conn,"SELECT * FROM berita ");
  $jumlah=mysqli_num_rows($qjumlah);
  ?>
              <?php

              //pagging
    $batas=10;
    $hal= ceil($jumlah/$batas);
     $page=(isset($_GET['hal'])) ? $_GET['hal']:1;
     $posisi=($page - 1) * $batas;
    //paging
    $no=1+$posisi;
    
              $berita = $conn->query("SELECT * FROM berita limit $posisi,$batas");
              while($data=mysqli_fetch_array($berita)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                 <td><?php echo $data['judulberita']; ?></td>
                 <td><a href="../../berita/<?= $data['fileberita'];?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Lihat</a></td>
                 <!-- <td><img src="../../berita/<?php  $data['fileberita'];?>" width="90px" height="70px"/></td> -->
                <td><?php echo $data['berita'] ?></td>
                
                <td>
                  <a href="?page=berita&act=edit&idberita=<?php echo $data['idberita']; ?>" class="btn btn-warning z-depth-4"><i class="fa fa-pencil"></i> Ubah</a>
                  <a href="?page=berita&act=hapus&idberita=<?php echo  $data['idberita']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus berita ini?')" class="btn btn-danger z-depth-4"><i class="fa fa-trash"></i> Hapus</a>
                </td>
              </tr>
              <?php 
              }
              ?>
            </tbody>
          </table>
          <center>
  <ul class="pagination">
  <?php
  for($i=1; $i<=$hal; $i++){
  ?>
  <li <?php if($page==$i){ echo "class='active'";}?>><a href="?page=berita&hal=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
  }
  ?>
  </ul>
</center>
      </div>
    </div>
