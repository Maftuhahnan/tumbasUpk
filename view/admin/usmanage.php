<?php include "incl/header.php"; ?>
<?php 

	if(isset($_POST['registrasi'])){
		$user = sp('username');
		$nama = sp('nama');
		$em = sp('email');
		$pass = enk(sp('password'));
		$telp = sp('telp');
		$sbg = sp('sbg');
		
		if(empty($user) || empty($nama) || !filter_var($em,FILTER_VALIDATE_EMAIL) || empty($pass) || !is_numeric($telp)){
			alert("Maaf Data Yang Anda Masukan Salah Atau Tidak Valid",elink()."home");
		}else{
			$cekdatadf = tm::pilih("`user` WHERE `nama` = '$nama' OR `email` = '$em' OR `telp` = '$telp'");
			$dfrow = mysqli_num_rows($cekdatadf);
			if($dfrow > 1){
				alert("Maaf Data Yang anda Masukan nama,email,telp Sudah Pernah di Daftarkan",elink()."home");
			}else{
				
					$dftm = tm::masuk("`user` VALUES (null,'$user','$nama','$em','$pass','$telp','$sbg')");
					if($dftm){
						alert("Pendaftaran Sukses",elink()."ad-tumbas/user/");
					}else{
						echo "queri eror";
					}
				
			}
		}
	}
	
	
?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
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
							<span class="input-group-addon modal-st"><i class="glyphicon glyphicon-pushpin"></i></span>
							  <select class="form-control modal-st" name="sbg" >
								<option value="2">User</option>
								<option value="1">Admin</option>
							  </select>
						</div>
					</div>
					
				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="registrasi" class="btn btn-primary">Save</button></form>
      </div>
    </div>
  </div>
</div>

	<section class="boxes">
	<div class="container panel">
		<?php $mnga = tm::pilih("`user` WHERE `role` = '1'"); ?>
				<?php $ipa = mysqli_num_rows($mnga); ?>
				Jumlah Admin : <?php echo $ipa; ?><br><br>
                  <table class="table table-bordered border-px">
				  <thead>
					  <tr class="success">
						<th>ID</th>
						<th>User</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Telp</th>
						<th>Role</th>
						<th>Aksi</th>
					  </tr>
				  </thead>
				  <?php 
					$mng = tm::pilih("`user` ORDER BY `id` DESC");
					while($kmng = mysqli_fetch_array($mng)){
				  ?>
					  <tr <?php 
						if($kmng['role'] == "1"){
							echo "class=\"warning\"";
						}
					  ?>>
						<td><?php echo $kmng['id']; ?></td>
						<td><?php echo $kmng['username']; ?></td>
						<td><?php echo $kmng['nama']; ?></td>
						<td><?php echo $kmng['email']; ?></td>
						<td><?php echo $kmng['telp']; ?></td>
						<td><?php echo $kmng['role']; ?></td>
						<td><a href="<?php echo elink()."ad-tumbas/hapus/3/".$kmng['id']."/"; ?>"><i class="glyphicon glyphicon-remove btn-danger" title="Hapus Data"></i></a>
					&nbsp;
					<a href="delete"><i class="glyphicon glyphicon-pencil btn-success" title="Edit Data"></i></a></td>
					  </tr>
					<?php } ?>
					</table><br><br>
					<!-- Button trigger modal -->
					<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
					  Buat User
					</button>
		
	</div>
	</section>
