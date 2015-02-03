<?php
	session_start();
	include "../../inc/function.php";
	include "../../conf/config.php";
	include "../../inc/model/db.php";
	if(empty($_SESSION['idn'])){
		redir(elink()."home");
	}
	
	if(empty($_SESSION['role'])){
		redir(elink()."home");
	}elseif($_SESSION['role'] != 1){
		redir(elink()."home");
	}
	
?>