<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Pengguna</li>
				<li>Profil Saya</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Profil Saya</h1>
			</div>
		</div><!--/.row-->
		
<div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
               
                <th>Username</th>
                <th>Gambar </th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              $user = $conn->query("SELECT * FROM user where iduser='$_SESSION[userweb]'");
              while($data=mysqli_fetch_array($user)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                 <td><?php echo $data['namalengkap']; ?></td>
                
                <td><?php echo $data['username'] ?></td>
                <td><img src="img/<?php echo $data['fotouser'];?>" width="50px" height="50px"/></td>
                <td>
                  <a href="?page=user&act=editprofil&id_user=<?php echo $data['iduser']; ?>" class="btn btn-primary z-depth-4"><i class="fa fa-pencil"></i> Ubah</a>
                </td>
              </tr>
              <?php 
              }
              ?>
            </tbody>
          </table>
      </div>
    </div>
