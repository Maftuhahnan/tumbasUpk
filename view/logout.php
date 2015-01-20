<?php
	include_once "../inc/function.php";
	session_start();
	session_destroy();
	
	header("location:".elink()."home");
?>