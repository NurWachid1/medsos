<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Mata Pelajaran</li>
				<li>Data Mata Pelajaran</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Data Mata Pelajaran</h1>
        <a href="?page=mapel&act=add" class="btn btn-primary z-depth-4"><i class="fa fa-plus"></i> Tambah</a>
			</div>
		</div><!--/.row-->
		
<div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Kode Mata Pelajaran</th>
                <th>Mata Pelajaran</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
  $qjumlah=mysqli_query($conn,"SELECT * FROM mapel ");
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
    
              $mapel = $conn->query("SELECT * FROM mapel limit $posisi,$batas");
              while($data=mysqli_fetch_array($mapel)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['kodemp'] ?></td>
                 <td><?php echo $data['namamapel']; ?></td>
                
                <td>
                  <a href="?page=mapel&act=edit&idmapel=<?php echo $data['idmapel']; ?>" class="btn btn-primary z-depth-4"><i class="fa fa-pencil"></i> Ubah</a>
                  <a href="?page=mapel&act=hapus&idmapel=<?php echo  $data['idmapel']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus dari data mata pelajaran ini?')" class="btn btn-danger z-depth-4"><i class="fa fa-trash"></i> Hapus</a>
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
  <li <?php if($page==$i){ echo "class='active'";}?>><a href="?page=mapel&hal=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
  }
  ?>
  </ul>
</center>
      </div>
    </div>
