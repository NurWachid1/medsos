	    <div class="">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em></a>
                </li>
                <li>HOME</li>
            </ol>
        </div><!--/.row-->
        <div class="row" style="margin-left: 10px; margin-right: 10px; margin-top: 10px;">
          <div class="col-lg=12">
            <div class="col-lg=12">
              <div class="panel panel-info">
                <div class="panel-heading" style="text-align: left; font-family: times new romans; ">
                  WELCOME! Penjamin Mutu Sekolah
                </div>


<div class="panel-body">
<div class="panel panel-container">
            <div class="row">
             <a href="?page=disposisi">
                <div class="col-xs-6 col-md-3 col-lg-3">
                     <?php
     $q=mysqli_query($conn,"SELECT tb_user. * , tb_surat. * , tb_disposisi. * FROM tb_disposisi
                  INNER JOIN tb_user ON tb_user.id_user = tb_disposisi.id_user
                  INNER JOIN tb_surat ON tb_surat.id_srt = tb_disposisi.id_srt  where balas_kpd='Penjamin Mutu Sekolah'");
    $jumlah=mysqli_num_rows($q);
        ?>
        
                    <div class="panel panel-teal panel-widget border-right" style="background-color:#D9EDF7;">
                        <div><center><em class="fa fa-xl fa-clipboard color-blue"></em>
                            <div class="large"><?php echo $jumlah ?></div>
                            <div class="text-muted">Data Disposisi</div> </center>
                        </div>
                    </div>
                </div>
            </a>
            <a href="?page=disposisi&act=datasaya">
               <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
       <div class="panel panel-teal panel-widget border-right" style="background-color:#D9EDF7;">
                        <div><center><em class="fa fa-xl fa-user color-blue"></em>
                            <div class="large"><?php echo 1 ?></div>
                            <div class="text-muted">Data User</div></center>
                        </div>
                    </div>
                </div>
            </a>
               
</div>

</div>
    </div>
</div>
</div>
</div>
</div>
</div>