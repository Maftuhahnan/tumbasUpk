<div class="well bs-component">
              
                <fieldset>
                  <legend>Manage Kategori</legend>
                  <table class="table table-bordered">
				  <thead>
					  <tr class="success">
						<th>ID</th>
						<th>Nama</th>
						<th>Aksi</th>
					  </tr>
				  </thead>
				   <?php 
					$ktgm = tm::pilih("`kategori` ORDER BY `id` DESC");
					while($ktgma = mysqli_fetch_array($ktgm)){
				  ?>
				  <tr>
					<td><?php echo $ktgma['id'] ?></td>
					<td><?php echo $ktgma['nama'] ?></td>
					<td></td>
				  </tr>
				  <?php } ?>
				</fieldset>
</div>