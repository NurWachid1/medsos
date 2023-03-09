


	<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>User</li>
				<li>Data User</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Data User</h1>
			</div>
		</div><!--/.row-->
		
<div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Username</th>
                 <th>Gambar </th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              $user = $conn->query("SELECT * FROM tb_user where id_user='$_SESSION[userweb]'");
              while($data=mysqli_fetch_array($user)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                 <td><?php echo $data['fullname']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['username'] ?></td>
                  <td><img src="../superadmin/img/<?php echo $data['gambar'];?>" width="50px" height="50px"/></td>
                <td>
                  <a href="?page=disposisi&act=edit&id_user=<?php echo $data['id_user']; ?>" class="btn btn-primary z-depth-4"><i class="fa fa-pencil"></i> Edit</a>
                 
              </tr>
              <?php 
              }
              ?>
            </tbody>
          </table>
      </div>
    </div>
