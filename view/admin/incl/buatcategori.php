<?php 
	if(isset($_POST['kategori'])){
		$nkat = sp('kategorinama');
		
		if(empty($nkat)){
			alert("Maaf Data Yang Anda Masukan Tidak Boleh Kosong !",elink()."ad-tumbas");
		}else{
			$katc = tm::masuk("`kategori` VALUES (null,'$nkat')");
			
			if($katc){
				alert("Data Sukses Di Masukan",elink()."ad-tumbas");
			}else{
				alert("Koneksi Ke Database Salah !",elink()."ad-tumbas");
			}
		}
	}
?>
<div class="well bs-component">
              <form class="form-horizontal" method="post" action="">
                <fieldset>
                  <legend>Buat Kategori</legend>
                  <div class="form-group">
                    <label for="user" class="col-lg-2 control-label">Nama Kategori</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="kategorinama" id="user" >
                    </div>
                  </div>
				<div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" name="kategori" class="btn btn-primary">Buat Kategori</button>
                    </div>
                </div>
                </fieldset>
              </form>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
</div>