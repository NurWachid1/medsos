<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Kritik/Saran</li>
				<li>Data Kritik/Saran</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Data Kritik/Saran</h1>
        <a href="export.php" class="btn btn-primary z-depth-4"><i class="fa fa-plus"></i> Ekspor Data</a>
			</div>
		</div><!--/.row-->
		
<div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Email Pengguna</th>
                <th>Nama Pengirim</th>
                <th>Komentar</th>
                <th>Tanggal</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
  $qjumlah=mysqli_query($conn,"SELECT * FROM kritik ");
  $jumlah=mysqli_num_rows($qjumlah);
  ?>
              <?php

              //pagging
    $batas=5;
    $hal= ceil($jumlah/$batas);
     $page=(isset($_GET['hal'])) ? $_GET['hal']:1;
     $posisi=($page - 1) * $batas;
    //paging
    $no=1+$posisi;
    
              $kritik = $conn->query("SELECT * FROM kritik limit $posisi,$batas");
              while($data=mysqli_fetch_array($kritik)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['email'] ?></td>
                 <td><?php echo $data['namauser']; ?></td>
                 <td><?php echo $data['komentar']; ?></td>
                 <td><?php echo $data['tglkirim']; ?></td>
                
                <td>
                  <!-- <a href="?page=mapel&act=edit&idmapel=<?php echo $data['idmapel']; ?>" class="btn btn-primary z-depth-4"><i class="fa fa-pencil"></i> Ubah</a> -->
                  <a href="?page=kritik&act=hapus&idkomentar=<?php echo  $data['idkomentar']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus Komentar ini?')" class="btn btn-danger z-depth-4"><i class="fa fa-trash"></i> Hapus</a>
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
  <li <?php if($page==$i){ echo "class='active'";}?>><a href="?page=kritik&hal=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
  }
  ?>
  </ul>
</center>
      </div>
    </div>
