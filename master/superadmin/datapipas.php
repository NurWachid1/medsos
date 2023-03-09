<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Proyek PIPAS</li>
				<li>Data PIPAS</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Data PIPAS</h1>
        <a href="?page=pipas&act=add" class="btn btn-primary z-depth-4"><i class="fa fa-plus"></i> Tambah</a>
			</div>
		</div><!--/.row-->
		
<div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Judul Karya</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
  $qjumlah=mysqli_query($conn,"SELECT * FROM pipas ");
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
    
              $pipas = $conn->query("SELECT * FROM pipas limit $posisi,$batas");
              while($data=mysqli_fetch_array($pipas)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                 <td><?php echo $data['judulpipas']; ?></td>
                 <td><img src="karya/pipas/<?php echo $data['foto_pipas'];?>" width="90px" height="70px"/></td>
                <td><?php echo $data['deskripsi_pipas'] ?></td>
                
                <td>
                  <a href="?page=pipas&act=edit&idpipas=<?php echo $data['idpipas']; ?>" class="btn btn-warning z-depth-4"><i class="fa fa-pencil"></i> Ubah</a>
                  <a href="?page=pipas&act=hapus&idpipas=<?php echo  $data['idpipas']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus dari data PIPAS ini?')" class="btn btn-danger z-depth-4"><i class="fa fa-trash"></i> Hapus</a>
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
  <li <?php if($page==$i){ echo "class='active'";}?>><a href="?page=pipas&hal=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
  }
  ?>
  </ul>
</center>
      </div>
    </div>
