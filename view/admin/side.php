<?php include "../../inc/adminControl.php"; ?>
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
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>asset/boot/css/boots-c.css">
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>asset/core/ad-style.css">
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
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
	  <div class="container">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">Tumbas Cloud Administrator</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#">User</a></li>
			<li><a href="#">Order</a></li>
			<li><a href="#">Konfirmasi <span class="badge" title="Pending Account">1</span></a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="#">My Account</a></li>
				<li><a href="#">Edit Password</a></li>
				<li class="divider"></li>
				<li><a href="#">Keluar</a></li>
			  </ul>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	  </div>
	</nav>
	<section class="boxes">
	<div class="container panel">
		
		<div role="tabpanel">

		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Buat Barang</a></li>
			<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Edit Barang</a></li>
			<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Buat User</a></li>
			<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Edit User</a></li>
			<li role="presentation"><a href="#kategori" aria-controls="settings" role="tab" data-toggle="tab">Buat Category</a></li>
			<li role="presentation"><a href="#editkate" aria-controls="settings" role="tab" data-toggle="tab">Edit Category</a></li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="home"><?php include "incl/buatbarang.php"; ?></div>
			<div role="tabpanel" class="tab-pane" id="profile"></div>
			<div role="tabpanel" class="tab-pane" id="messages">...</div>
			<div role="tabpanel" class="tab-pane" id="settings">...</div>
			<div role="tabpanel" class="tab-pane" id="kategori"><?php include "incl/buatcategori.php" ?></div>
			<div role="tabpanel" class="tab-pane" id="editkate">...</div>
		  </div>

		</div>
	</div>
	</section>