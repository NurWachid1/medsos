<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Kegiatan</li>
				<li>Data Kegiatan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Data Kegiatan</h1>
        <a href="?page=kegiatan&act=add" class="btn btn-primary z-depth-4"><i class="fa fa-plus"></i> Tambah</a>
			</div>
		</div><!--/.row-->
		
<div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama Kegiatan</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
  $qjumlah=mysqli_query($conn,"SELECT * FROM kegiatan ");
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
    
              $kegiatan = $conn->query("SELECT * FROM kegiatan limit $posisi,$batas");
              while($data=mysqli_fetch_array($kegiatan)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                 <td><?php echo $data['namakegiatan']; ?></td>
                 <td><img src="../../kegiatan/<?php echo $data['foto'];?>" width="90px" height="70px"/></td>
                <td><?php echo $data['deskripsik'] ?></td>
                
                <td>
                  <a href="?page=kegiatan&act=edit&idkegiatan=<?php echo $data['idkegiatan']; ?>" class="btn btn-warning z-depth-4"><i class="fa fa-pencil"></i> Ubah</a>
                  <a href="?page=kegiatan&act=hapus&idkegiatan=<?php echo  $data['idkegiatan']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus dari data kegiatan ini?')" class="btn btn-danger z-depth-4"><i class="fa fa-trash"></i> Hapus</a>
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
  <li <?php if($page==$i){ echo "class='active'";}?>><a href="?page=kegiatan&hal=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
  }
  ?>
  </ul>
</center>
      </div>
    </div>
