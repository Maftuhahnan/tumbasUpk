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
					<td><a href="<?php echo elink()."ad-tumbas/hapus/1/".$ktgma['id']."/"; ?>"><i class="glyphicon glyphicon-remove btn-danger" title="Hapus Data"></i></a>
					&nbsp;
					<a href="delete"><i class="glyphicon glyphicon-pencil btn-success" title="Edit Data"></i></a></td>
				  </tr>
				  <?php } ?>
				</fieldset>
</div>