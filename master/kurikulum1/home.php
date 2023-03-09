        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em></a>
                </li>
                <li>Beranda</li>
            </ol>
        </div><!--/.row-->
        <div class="row" style=" margin-top: 10px;">
          <div class="col-lg=12">
            <div class="col-lg=12">
              <div class="panel panel-info">
                <div class="panel-heading" style="text-align: left; font-family: times new romans; ">
                  Selamat Datang! Anda Masuk sebagai <b style="font-family: calibri; color: blue;">Waka Kurikulum</b>. Anda dapat melakukan pengelolan seputar mata pelajaran, dan proyek siswa.
                </div>


<div class="panel-body">
<div class="panel panel-container">
            <div class="row">
              

  <a href="?page=mapel">
            <div class="col-xs-6 col-md-3 col-lg-3">
                <?php
    $qjumlah=mysqli_query($conn,"SELECT * FROM mapel ");
    $jumlah=mysqli_num_rows($qjumlah);
        ?>
                    <div class="panel panel-teal panel-widget border-right" style="background-color:#D9EDF7;"> 
                        <div><center><em class="fa fa-xl fa-graduation-cap color-blue "></em>
                            <div class="large"><?php echo $jumlah ?></div>
                            <div class="text-muted">Mata Pelajaran</div></center>
                        </div>
                      
                    </div>
                </div>
                </a>
                <a href="?page=pipas">
                <div class="col-xs-6 col-md-3 col-lg-3">
                     <?php
    $qjumlah=mysqli_query($conn,"SELECT * FROM pipas ");
    $jumlah=mysqli_num_rows($qjumlah);
        ?>
                    <div class="panel panel-teal panel-widget border-right" style="background-color:#D9EDF7;">
                        <div><center><em class="fa fa-xl fa-clipboard color-blue"></em>
                            <div class="large"><?php echo $jumlah ?></div>
                            <div class="text-muted">Proyek IPAS</div> </center>
                        </div>
                    </div>
                </div>
            </a>
            <a href="?page=p5bk">
               <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <?php
    $qjumlah=mysqli_query($conn,"SELECT * FROM p5bk");
    $jumlah=mysqli_num_rows($qjumlah);
        ?>
                    <div class="panel panel-teal panel-widget border-right" style="background-color:#D9EDF7;">
                        <div><center><em class="fa fa-xl fa-info-circle color-blue"></em>
                            <div class="large"><?php echo $jumlah ?></div>
                            <div class="text-muted">Karya P5BK</div></center>
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