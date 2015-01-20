
<?php 
	

	if(isset($_POST['registrasi'])){
		$user = sp('username');
		$nama = sp('nama');
		$em = sp('email');
		$pass = enk(sp('password'));
		$telp = sp('telp');
		$cap = sp('cap');
		
		if(empty($user) || empty($nama) || !filter_var($em,FILTER_VALIDATE_EMAIL) || empty($pass) || !is_numeric($telp)){
			alert("Maaf Data Yang Anda Masukan Salah Atau Tidak Valid",elink()."home");
		}else{
			$cekdatadf = tm::pilih("`user` WHERE `nama` = '$nama' OR `email` = '$em' OR `telp` = '$telp'");
			$dfrow = mysqli_num_rows($cekdatadf);
			if($dfrow > 1){
				alert("Maaf Data Yang anda Masukan nama,email,telp Sudah Pernah di Daftarkan",elink()."home");
			}else{
				if(satpam($_SESSION['captchabroi']) != satpam($cap)){
					alert("Maaf Captcha Yang Anda Masukan Salah",elink()."home");
				}else{
					$dftm = tm::masuk("`user` VALUES (null,'$user','$nama','$em','$pass','$telp','2')");
					if($dftm){
						alert("Pendaftaran Sukses",elink()."home");
					}else{
						echo "queri eror";
					}
				}
			}
		}
	}
	
	
?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-st">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hi, Guest</h4>
      </div>
      <div class="modal-body">
       
		<div role="tabpanel">

		 
			<div role="tabpanel" class="tab-pane active" id="tbsign">
				<br>
				<form method="post" action="">
				<div class="form-group" id="rgs">
					<div class="input-group ">
						<span class="input-group-addon modal-st"><i class="glyphicon glyphicon-user"></i></span>
						  <input type="text" class="form-control modal-st" name="username" placeholder="Username">
					</div>
				</div>
				<div class="form-group" id="rgs">
					<div class="input-group ">
						<span class="input-group-addon modal-st"><i class="glyphicon glyphicon-pencil"></i></span>
						  <input type="text" class="form-control modal-st" name="nama" placeholder="Name">
					</div>
				</div>
				<div class="form-group" id="rgs">
					<div class="input-group ">
						<span class="input-group-addon modal-st"><i class="glyphicon glyphicon-envelope"></i></span>
						  <input type="email" class="form-control modal-st" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group" id="rgs">
					<div class="input-group ">
						<span class="input-group-addon modal-st"><i class="glyphicon glyphicon-lock"></i></span>
						  <input type="password" class="form-control modal-st" name="password" placeholder="Password">
					</div>
				</div>
				<div class="form-group" id="rgs">
					<div class="input-group ">
						<span class="input-group-addon modal-st"><i class="glyphicon glyphicon-earphone"></i></span>
						  <input type="text" class="form-control modal-st" name="telp" placeholder="Nomor Telpon" maxlength="14">
					</div>
				</div>
				<div class="form-group" id="rgs">
					<div class="input-group ">
						<span class="input-group-addon modal-st"><img src="<?php clink(); ?>asset/img/scr/cap.php"></span>
						  <input type="text" class="form-control modal-st cptc" name="cap" placeholder="Captcha" maxlength="14">
					</div>
				</div>
				<button type="submit" name="registrasi" class="btn btn-primary btn-lg " role="button">Sign Up</button>
				</form>
			
		  </div>

		</div>
	   
	   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#login" data-dismiss="modal">Login</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="red">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-st">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Welcome Back</h4>
      </div>
      <div class="modal-body">
       
		<form method="post" action="<?php clink(); ?>login/">
				<div class="form-group" id="rgs">
					<div class="input-group ">
						<span class="input-group-addon modal-st"><i class="glyphicon glyphicon-user"></i></span>
						  <input type="text" class="form-control modal-st" name="user" placeholder="Username">
					</div>
				</div>
				<div class="form-group" id="rgs">
					<div class="input-group ">
						<span class="input-group-addon modal-st"><i class="glyphicon glyphicon-lock"></i></span>
						  <input type="password" class="form-control modal-st" name="pass" placeholder="Password">
					</div>
				</div>
				<button type="submit" name="loginin" class="btn btn-success">Login</button>
		</form>
	   
	   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal" data-dismiss="modal">Sign Up</button>
        <button type="button" class="btn btn-primary" id="red" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>