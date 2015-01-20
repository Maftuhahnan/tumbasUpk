<?php include "inc/header.php"; ?>
<section class="cara">
	<div class="container">
		<div class="row cent">
		  <div class="col-md-4 pdt">
			<img src="<?php clink(); ?>asset/img/ico1.png" width="120">
			<h3>Cari</h3>
			<p>Cari Barag Yang Ingin Anda Beli</p>
		  </div>
		  <div class="col-md-4">
			<img src="<?php clink(); ?>asset/img/ico3.png" width="180">
			<h3>Beli</h3>
			<p>Klik Button Beli dan Transfer</p>
		 </div>
		  <div class="col-md-4 pdt">
			<img src="<?php clink(); ?>asset/img/ico2.png" width="120">
			<h3>Konfirmasi</h3>
			<p>Konfirmasi Barang Yang Sudah Anda Beli</p>
		  </div>
		</div>
		
	</div>
</section>
<section class="isi-ctn" id="isinya">
	<div class="container">	
		<h1 class="judl">Latest Post</h1>
	</div>
	<div class="user" id="portfolio">
		<div id="post-area" class="masonry" >
		<?php 
			$kuerips = tm::pilih("`barang` ORDER BY `id` DESC");
			while($post = mysqli_fetch_array($kuerips)){
		?>
			<div class="post-copy">
				<div class="graf-image">
					<a href="<?php clink(); ?>tmp/<?php echo $post['gambar']; ?>" id="imgOpened" data-lighter><img width="270" src="<?php clink(); ?>tmp/<?php echo $post['gambar']; ?>" id="imgOpened"></a>
				</div>
				<div class="graf-head">
					<p class="head-jd"><?php echo ucwords($post['title']); ?></p>
					<p class="head-kal">Rp <?php echo number_format($post['harga'],2,",","."); ?></p>
				
					<a href="" class="btn btn-primary">Buy</a>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
	<div class="">
	</div>
</section>
<?php include "inc/footer.php"; ?>