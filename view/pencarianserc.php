<?php include "../inc/headerv.php"; ?>
<section class="isi-ctn" id="isinya">
	<div class="container">	
		<h1 class="judl">Latest Post</h1>
	</div>
	<div class="user" id="portfolio">
		<div id="post-area" class="masonry" >
		<?php 
			if(empty($_GET['s'])){
			redir(elink()."home/");
			}
			if(isset($_GET['s'])){
			$id = satpam($_GET['s']);
			$kuerips = tm::pilih("`barang` WHERE `title` LIKE '%$id%';");
			$cekdata = mysqli_num_rows($kuerips);
			if($cekdata > 0){
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
		<?php }
		}else{
			echo "<br><h4>Pencarian data untuk Kata Kunci : \"<b>".$_GET['s']."</b>\" Tidak Ada<h4>";
		}
		}elseif($_GET['s'] == null){
			redir(elink()."home/");
		}

		?>
		</div>
	</div>
	<div class="">
	
	</div>
</section>
<?php include "../inc/footer.php"; ?>