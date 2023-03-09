<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Pengguna</li>
				<li>Data Pengguna</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Data Pengguna</h1>
			</div>
		</div><!--/.row-->
		
<div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <!-- <th>Id User</th> -->
                <th>Nama</th>
               
                <th>Username</th>
                <th>Password</th>
                <th>Gambar </th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
  $qjumlah=mysqli_query($conn,"SELECT * FROM user ");
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
    
              $user = $conn->query("SELECT * FROM user limit $posisi,$batas");
              while($data=mysqli_fetch_array($user)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <!-- <td><?php echo $data['iduser']; ?></td> -->
                 <td><?php echo $data['namalengkap']; ?></td>
                
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><img src="img/<?php echo $data['fotouser'];?>" width="50px" height="50px"/></td>
                <td>
                  <a href="?page=user&act=edit&id_user=<?php echo $data['iduser']; ?>" class="btn btn-warning z-depth-4"><i class="fa fa-pencil"></i> Ubah</a>
                  <a href="?page=user&act=hapus&id_user=<?php echo  $data['iduser']; ?>" onclick="return confirm('Yakin akan hapus user ini?')" class="btn btn-danger z-depth-4"><i class="fa fa-trash"></i> Hapus</a>
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
  <li <?php if($page==$i){ echo "class='active'";}?>><a href="?page=user&hal=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
  }
  ?>
  </ul>
</center>
      </div>
    </div>
