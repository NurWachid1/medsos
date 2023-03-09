<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Prestasi Siswa</li>
				<li>Data Prestasi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Data Prestasi </h1>
        <a href="?page=prestasi&act=add" class="btn btn-primary z-depth-4"><i class="fa fa-plus"></i> Tambah</a>
			</div>
		</div><!--/.row-->
		
<div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama Prestasi</th>
                <th>Nama Siswa</th>
                <th>Tahun</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
  $qjumlah=mysqli_query($conn,"SELECT * FROM prestasi ");
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
    
              $prestasi = $conn->query("SELECT * FROM prestasi limit $posisi,$batas");
              while($data=mysqli_fetch_array($prestasi)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['namalomba'] ?></td>
                 <td><?php echo $data['namasiswa']; ?></td>
                 <td><?php echo $data['tahun']; ?></td>
                
                <td>
                  <a href="?page=prestasi&act=edit&idprestasi=<?php echo $data['idprestasi']; ?>" class="btn btn-warning z-depth-4"><i class="fa fa-pencil"></i> Ubah</a>
                  <a href="?page=prestasi&act=hapus&idprestasi=<?php echo  $data['idprestasi']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus dari data prestasi ini?')" class="btn btn-danger z-depth-4"><i class="fa fa-trash"></i> Hapus</a>
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
  <li <?php if($page==$i){ echo "class='active'";}?>><a href="?page=prestasi&hal=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
  }
  ?>
  </ul>
</center>
      </div>
    </div>
