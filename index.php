<?php include "inc/control.php"?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Tumbas Cloud</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Include CSS main-->
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Slab:100normal,300normal,400normal,700normal">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300normal,300italic,400normal,400italic,600normal,600italic,700normal">
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>asset/boot/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>asset/core/style.css">
		
		<!-- Script Main-->
		<script src="<?php clink(); ?>asset/boot/js/jquery.js"></script>
		<script src="<?php clink(); ?>asset/boot/js/bootstrap.min.js"></script>
		<script src="<?php clink(); ?>asset/js/masonry.js"></script>
		<script src="<?php clink(); ?>asset/js/core.js"></script>
		
	</head>
	<body>
		<header class="bg-head">
		<!-- Header Main-->
		<nav class="navbar navbar-default trans hd-comp">
		  <div class="container-fluid">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#"><img src="<?php clink(); ?>asset/img/logo.png" width="120"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			 
			  <ul class="nav navbar-nav navbar-right menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Payment</a></li>
				<li>
				<div class="btn-group btn-group-sm btn-pos" role="group" aria-label="Small button group">
				  <button type="button" class="btn btn-default" id="red">sign up</button>
				  <button type="button" class="btn btn-default" id="red1">login</button>
				</div>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
			</div>
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="container">
			<div class="jumbotron trans jb-color">
				<img src="<?php clink(); ?>asset/img/logo.png" width="190">
				<h1>BELANJA MURAH, MUDAH, DAN BERKUALITAS</h1>
				<p>Dapatkan Diskon Tiap Hari</p>
				<p><a class="btn btn-jb btn-lg " href="#" role="button">get it now</a></p>
			</div>
		</div>
		</header>
	
<section class="sc-menu">
	<div class="container">
	<nav class="navbar navbar-default trans hd-comp mn-clr">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse menu-sc" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav menu-scc">
        <li><a href="#">Home</a></li>
        <li><a href="#">Laptop</a></li>
        <li><a href="#">Handphone</a></li>
        <li><a href="#">Tablet</a></li>
        <li><a href="#">Kamera</a></li>
        <li><a href="#">Fashion</a></li>
        <li><a href="#">Kesehatan</a></li>
        <li><a href="#">Aksesoris</a></li>
       
      </ul>
	  <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>
</section>
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
			<p>Klik Button Beli dan tulis jumlah</p>
		 </div>
		  <div class="col-md-4 pdt">
			<img src="<?php clink(); ?>asset/img/ico2.png" width="120">
			<h3>Konfirmasi</h3>
			<p>Konfirmasi Barang Yang Sudah Anda Beli</p>
		  </div>
		</div>
		
	</div>
</section>

<div class="user" id="portfolio">
		<div id="post-area" class="masonry" >
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="http://localhost/toko/wp-content/uploads/2014/07/4ALUVYYlQLC004zkGhd9_Sunset-at-Windermere.jpg">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="../css/pic/wow.png">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="../css/pic/hp.png">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="../css/pic/jos.png">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="../css/pic/hp.png">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="../css/pic/jos.png">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="http://localhost/toko/wp-content/uploads/2014/07/4ALUVYYlQLC004zkGhd9_Sunset-at-Windermere.jpg">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="http://localhost/toko/wp-content/uploads/2014/07/4ALUVYYlQLC004zkGhd9_Sunset-at-Windermere.jpg">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung IndiBung IndiBung IndiBung IndiBung IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
		</div>

	</body>
</html>