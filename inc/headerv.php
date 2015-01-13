<?php include"../inc/viewControl.php" ?>
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
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>asset/js/owl-carousel/owl.theme.css">
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>asset/js/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>asset/js/font-awesome-4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>asset/js/lighter-js/stylesheets/jquery.lighter.css">
		
		<!-- Script Main-->
		<script src="<?php clink(); ?>asset/boot/js/jquery.js"></script>
		<script src="<?php clink(); ?>asset/boot/js/bootstrap.min.js"></script>
		<script src="<?php clink(); ?>asset/js/masonry.js"></script>
		<script src="<?php clink(); ?>asset/js/owl-carousel/owl.carousel.js"></script>
		<script src="<?php clink(); ?>asset/js/nicescroll.js"></script>
		<script src="<?php clink(); ?>asset/js/js.easing.js"></script>
		<script src="<?php clink(); ?>asset/js/lighter-js/javascripts/jquery.lighter.js"></script>
		
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
				<li><a href="<?php clink(); ?>home">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Payment</a></li>
				<li>
				<div class="btn-group btn-group-sm btn-pos" role="group" aria-label="Small button group">
				  <a href="#tbsign" type="button" class="btn btn-default" id="red" data-toggle="modal" data-target="#myModal">sign up</a>
				  <a type="button" class="btn btn-default" id="red1"  data-toggle="modal" data-target="#login">login</a>
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
				<p><a class="btn btn-jb btn-lg easing" href="#isinya" role="button">get it now</a></p>
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
        <li><a href="<?php clink(); ?>home">Home</a></li>
		<?php 
			$kuerimn = tm::pilih("`kategori`");
			while($menu = mysqli_fetch_array($kuerimn)){
		?>
		 <li><a href="<?php clink(); ?>home/<?php echo $menu['id']; ?>/"><?php echo $menu['nama']; ?></a></li>
		<?php
			}
		?>
       
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
<?php include "../inc/bagian.php"; ?>