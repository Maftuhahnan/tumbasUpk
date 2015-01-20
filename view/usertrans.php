<?php 
	include "../inc/headerv.php";
?>
<section class="isi-ctn" id="isinya">
	<div class="container pdt">	
		<div class="row">
		  <div class="col-md-4">
			<!--<ul class="list-group">
			  <li class="list-group-item">Cras justo odio</li>
			  <li class="list-group-item">Dapibus ac facilisis in</li>
			  <li class="list-group-item">Morbi leo risus</li>
			  <li class="list-group-item">Porta ac consectetur ac</li>
			  <li class="list-group-item">Vestibulum at eros</li>
			</ul>-->
		  </div>
		  <div class="col-md-8">
			<div class="btn-group">
					<button type="button" class="btn btn-default"><span class="fa fa-book"></span> <?php echo $_SESSION['usertb']; ?></button>
					<button type="button" class="btn btn-default"><span class="fa fa-film"></span> Dokumenter</button>
					<button type="button" class="btn btn-default"><span class="fa fa-camera"></span> Lainnya</button>
					<button type="button" class="btn btn-default"><span class="fa fa-plus"></span> Post Project</button>
			</div>
		  </div>
		</div>
		
	</div>
</section>
<?php
	include "../inc/footer.php";
?>