<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="vendor/assets/css/stylewa.css">
        <!-- <link rel="stylesheet" href="vendor/assets/css/style.default.css" id="theme-stylesheet"> -->
    </head>
<body>
    

    <div class="container">
        <div class="chat-box">
            <!-- clinet -->
            
            <div class="client-info">
            <img src="vendor/assets/img/logo-pgri.png" style="width:50px;height:50px" alt="logo WA">
                <h2>Hubungi Kami</h2>
            </div>
            <!-- main chat -->
            <!-- <div class="chats"> -->
            <form action="send.php" method="post" target ="_blank" enctype="multipart/form-data" style="width: 350px" >
                <div class="form-group">
                <label>Email Anda<span style="color: red">*</span></label>
                  <input name="email" minlength="10"  type="text" class="form-control" required autofocus>
								</div>
								<div class="form-group">
									<label>Nama Lengkap<span style="color: red">*</span></label>
									<input name="namauser" minlength="3" type="text" class="form-control" required autofocus>
								</div>		
                <!-- <div class="form-group">
									<label>Topik<span style="color: red">*</span></label>
									<input name="topikpesan" minlength="3" type="text" class="form-control" required autofocus>
								</div>	 -->
                <div class="form-group">
									<label>Pesan<span style="color: red">*</span></label>
									<textarea name="pesanWa" minlength="10"  rows="5" type="text" class="form-control" required autofocus></textarea>
								</div>
                <input name="noWA" type="hidden" value="6281231718622">
                
                <div class="modal-footer">
                  <input name="submit" type="submit" class="btn btn-primary" value="Kirim">
                </div>

                <!-- <button type="submit" name="submit" class="btn btn-primary">Kirim</button> -->
                <!-- <div class="modal-footer">
                  <input name="addkomen" type="submit" class="btn btn-primary" value="Kirim">
                </div> -->
              </form>
            </div>
        <!-- </div> -->

        <div class="chat-btn">
            <img src="vendor/assets/img/logo-wa.png" style="margin-left:auto;margin-right:auto;display:block" alt="logo-WA">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="vendor/assets/css/scriptwa.js"></script>
</body>
</html>