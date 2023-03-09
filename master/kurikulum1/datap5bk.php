<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Karya P5BK</li>
				<li>Data P5BK</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Data P5BK</h1>
        <a href="?page=p5bk&act=add" class="btn btn-primary z-depth-4"><i class="fa fa-plus"></i> Tambah</a>
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
  $qjumlah=mysqli_query($conn,"SELECT * FROM p5bk ");
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
    
              $p5bk = $conn->query("SELECT * FROM p5bk limit $posisi,$batas");
              while($data=mysqli_fetch_array($p5bk)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                 <td><?php echo $data['judulp']; ?></td>
                 <td><img src="karya/p5bk/<?php echo $data['fotop'];?>" width="90px" height="70px"/></td>
                <td><?php echo $data['deskripsip'] ?></td>
                
                <td>
                  <a href="?page=p5bk&act=edit&idp5bk=<?php echo $data['idp5bk']; ?>" class="btn btn-primary z-depth-4"><i class="fa fa-pencil"></i> Ubah</a>
                  <a href="?page=p5bk&act=hapus&idp5bk=<?php echo  $data['idp5bk']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus dari data P5BK ini?')" class="btn btn-danger z-depth-4"><i class="fa fa-trash"></i> Hapus</a>
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
  <li <?php if($page==$i){ echo "class='active'";}?>><a href="?page=p5bk&hal=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
  }
  ?>
  </ul>
</center>
      </div>
    </div>
