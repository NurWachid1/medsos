<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Guru & Tendik</li>
				<li>Data Guru</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Data Guru</h1>
        <a href="?page=guru&act=add" class="btn btn-primary z-depth-4"><i class="fa fa-plus"></i> Tambah</a>
			</div>
		</div><!--/.row-->
		
<div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>NIP</th>
                <th>Nama Guru</th>
                <th>Jabatan</th>
                <th>Alamat Domisili</th>
                <th>Pendidikan Terakhir </th>
                <th>Foto</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
  $qjumlah=mysqli_query($conn,"SELECT * FROM guru ");
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
    
              $guru = $conn->query("SELECT * FROM guru limit $posisi,$batas");
              while($data=mysqli_fetch_array($guru)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                 <td><?php echo $data['nip']; ?></td>
                 <td><?php echo $data['namaguru']; ?></td>
                <td><?php echo $data['keterangan'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['pendidikanterakhir'] ?></td>
                <td><img src="../../guru/<?php echo $data['foto'];?>" width="50px" height="50px"/></td>
                <td>
                  <a href="?page=guru&act=edit&id_guru=<?php echo $data['idguru']; ?>" class="btn btn-warning z-depth-4"><i class="fa fa-pencil"></i> Ubah</a>
                  <a href="?page=guru&act=hapus&id_guru=<?php echo  $data['idguru']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus dari data guru ini?')" class="btn btn-danger z-depth-4"><i class="fa fa-trash"></i> Hapus</a>
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
  <li <?php if($page==$i){ echo "class='active'";}?>><a href="?page=guru&hal=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
  }
  ?>
  </ul>
</center>
      </div>
    </div>
