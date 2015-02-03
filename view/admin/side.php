<?php include "incl/header.php"; ?>
	<section class="boxes">
	<div class="container panel">
		
		<div role="tabpanel">

		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Buat Barang</a></li>
			<li role="presentation"><a href="#userb" aria-controls="userb" role="tab" data-toggle="tab">Manage Barang</a></li>
			<li role="presentation"><a href="#kategori" aria-controls="kategori" role="tab" data-toggle="tab">Buat Category</a></li>
			<li role="presentation"><a href="#editkate" aria-controls="editkate" role="tab" data-toggle="tab">Manage Category</a></li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="home"><?php include "incl/buatbarang.php"; ?></div>
			<div role="tabpanel" class="tab-pane" id="userb"><?php include "incl/managebarang.php"; ?></div>
			<div role="tabpanel" class="tab-pane" id="kategori"><?php include "incl/buatcategori.php"; ?></div>
			<div role="tabpanel" class="tab-pane" id="editkate"><?php include "incl/managekat.php" ?></div>
		  </div>

		</div>
	</div>
	</section>
