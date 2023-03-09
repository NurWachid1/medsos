	<div>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em></a>
				</li>
				<li>Disposisi</li>
				<li>Data Disposisi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Data Disposisi</h1>
			</div>
		</div><!--/.row-->
<div class="panel-body">
	<table class="table">
		                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Disposisi </th>
                                 <th> Kode Surat</th>
                               
                                <th>User</th>
                                <th>Menyetujui</th>
                                <th>Balas Kepada</th>
                                 <th>Pemberitahuan</th>
                                  <th>Klasifikasi</th>
                                  <th>File Surat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                              <?php
              $no=1;
                $q=mysqli_query($conn,"SELECT tb_user. * , tb_surat. * , tb_disposisi. * FROM tb_disposisi
                  INNER JOIN tb_user ON tb_user.id_user = tb_disposisi.id_user
                  INNER JOIN tb_surat ON tb_surat.id_srt = tb_disposisi.id_srt  where balas_kpd='Pembina Ekstra' " );
                while ($data=mysqli_fetch_array ($q)) {
                  # code...
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['id_dispo']; ?></td>
                <td><?php echo $data['id_srt']; ?></td>
                <td><?php echo $data['fullname']; ?></td>
                <td><?php echo $data['dispo_kpd']; ?></td>
                <td><?php echo $data['balas_kpd'] ?></td>
                   <td><?php echo $data['notifikasi'] ?></td>
                      <td><?php echo $data['klasifikasi'] ?></td>
                      <td><a href="../superadmin/file/<?php echo $data['file_srt'];?>"><?php echo $data['file_srt'] ?></td>
                                <td>
                                  <a href="print.php?id_dispo=<?php echo $data['id_dispo'];?>" class="btn btn-warning  z-depth-4"><i class="fa fa-print"></i> Print</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>





	</table>	
</div>
	</div>