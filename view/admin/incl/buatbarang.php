<?php 
	if(isset($_POST['artikel'])){
		$title = sp('judul');
		$harga = sp('harga');
		$gmb = $_FILES['gambar']['name'];
		$tipe =  $_FILES['gambar']['type'];
		$kategorib = sp('kategorib');
		$tgl = date('Y-m-d');
		$timed = date('Y-m-d H:i:s');
		$filtgm = md5($timed).str_replace(" ","-",$gmb);
		
		if(empty($title) || empty($harga) || empty($kategorib) ){
			alert("Maaf Data Yang Anda Masukan Tidak Boleh Kosong !",elink()."ad-tumbas");
		}else{
		if($tipe === "image/jpeg" || $tipe === "image/png" || $tipe === "image/jpg" || $tipe === "image/gif"){
			$cgmup = move_uploaded_file($_FILES['gambar']['tmp_name'],"../../tmp/".$filtgm);
			if($cgmup){
				$cekar = tm::masuk("`barang` VALUES (null,'$title','$harga','$filtgm','$kategorib','$tgl')");
				if($cekar){
					alert("Data Sukses Di Masukan",elink()."ad-tumbas");
				}else{
					alert("Koneksi Ke Database Salah !",elink()."ad-tumbas");
				}
			}else{
				alert("Upload gagal !",elink()."ad-tumbas");
			}
		}else{
			alert("Image Harus Berformat jpg,jpeg,png,gif !!",elink()."ad-tumbas");
		}
		
		}
	}
?>
<div class="well bs-component">
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                  <legend>Buat Barang</legend>
                  <div class="form-group">
                    <label for="user" class="col-lg-2 control-label">Title</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="judul" id="user" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama" class="col-lg-2 control-label">Harga</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="nama" name="harga" placeholder="ex : 100000">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="emailu" class="col-lg-2 control-label">Gambar</label>
                    <div class="col-lg-10">
                      <input type="file" class="form-control" id="emailu" name="gambar" >
                    </div>
				</div>
				<div class="form-group">
				  <label for="select" class="col-lg-2 control-label">Kategori</label>
				  <div class="col-lg-10">
					<select class="form-control" id="select" name="kategorib">
					 <option value="0">:: KATEGORI ::</option>
					 <?php 
						$kuerimn = tm::pilih("`kategori`");
						while($menu = mysqli_fetch_array($kuerimn)){
					?>
					<option value="<?php echo $menu['id']; ?>"><?php echo $menu['nama']; ?></option>
					<?php 
						}
					?>	 
					</select>
				  </div>
				</div>
				 
				
				<div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" name="artikel" class="btn btn-primary">Buat Data</button>
                    </div>
                </div>
                </fieldset>
              </form>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>