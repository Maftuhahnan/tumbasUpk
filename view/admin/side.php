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
	<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<aside>
          <div id="sidebar" class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none;">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  	
                  <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu dcjq-parent-li">
                      <a href="javascript:;" class="dcjq-parent">
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      <span class="dcjq-icon"></span></a>
                      <ul class="sub" style="display: none;">
                          <li><a href="general.html">General</a></li>
                          <li><a href="buttons.html">Buttons</a></li>
                          <li><a href="panels.html">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu dcjq-parent-li">
                      <a class="active dcjq-parent" href="javascript:;">
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      <span class="dcjq-icon"></span></a>
                      <ul class="sub" style="display: block;">
                          <li class="active"><a href="calendar.html">Calendar</a></li>
                          <li><a href="gallery.html">Gallery</a></li>
                          <li><a href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu dcjq-parent-li">
                      <a href="javascript:;" class="dcjq-parent">
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      <span class="dcjq-icon"></span></a>
                      <ul class="sub" style="display: none;">
                          <li><a href="blank.html">Blank Page</a></li>
                          <li><a href="login.html">Login</a></li>
                          <li><a href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu dcjq-parent-li">
                      <a href="javascript:;" class="dcjq-parent">
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      <span class="dcjq-icon"></span></a>
                      <ul class="sub" style="display: none;">
                          <li><a href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu dcjq-parent-li">
                      <a href="javascript:;" class="dcjq-parent">
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      <span class="dcjq-icon"></span></a>
                      <ul class="sub" style="display: none;">
                          <li><a href="basic_table.html">Basic Table</a></li>
                          <li><a href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu dcjq-parent-li">
                      <a href="javascript:;" class="dcjq-parent">
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      <span class="dcjq-icon"></span></a>
                      <ul class="sub" style="display: none;">
                          <li><a href="morris.html">Morris</a></li>
                          <li><a href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>