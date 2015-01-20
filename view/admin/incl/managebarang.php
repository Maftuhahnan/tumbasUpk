<div class="well bs-component">
              
                <fieldset>
                  <legend>Buat Barang</legend>
                  <table class="table table-bordered">
				  <thead>
					  <tr class="success">
						<th>ID</th>
						<th>Title</th>
						<th>Harga</th>
						<th>Gambar</th>
						<th>kategori</th>
						<th>Aksi</th>
					  </tr>
				  </thead>
				  <?php 
					$mng = tm::pilih("`barang` ORDER BY `id` DESC");
					while($kmng = mysqli_fetch_array($mng)){
				  ?>
					  <tr>
						<td><?php echo $kmng['id']; ?></td>
						<td><?php echo $kmng['title']; ?></td>
						<td>Rp <?php echo number_format($kmng['harga'],2,",","."); ?></td>
						<td><img src="<?php echo elink()."/tmp/".$kmng['gambar']; ?>" width="100"> </td>
						<td><?php 
							$ktgmb = tm::pilih("kategori WHERE id = '$kmng[kategori]'");
							$ektmgb = mysqli_fetch_array($ktgmb);
							echo $ektmgb['nama'];
						?></td>
						<td>Aksi</td>
					  </tr>
					<?php } ?>
					</table>
                </fieldset>

            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
</div>