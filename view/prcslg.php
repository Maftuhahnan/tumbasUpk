<?php
session_start();

	include "../conf/config.php";
	include "../inc/model/db.php";
	include "../inc/function.php";

if(isset($_POST['loginin'])){
		$usls = sp('user');
		$pasls = enk(sp('pass'));
		
		$ckls = tm::pilih("`user` WHERE username = '$usls' AND pass = '$pasls'");
		
		$ckrls = mysqli_num_rows($ckls);
		
		if($ckrls == 1){
			$cklsd = mysqli_fetch_array($ckls);
			$_SESSION['idn'] = $cklsd['id'];
			$_SESSION['usertb'] = $cklsd['username'];
			$_SESSION['telp'] = $cklsd['telp'];
			$_SESSION['role'] = $cklsd['role'];
			if($_SESSION['role'] == 1){
				redir(elink()."ad-tumbas");
			}elseif($_SESSION['role'] == 2){
				redir(elink()."home");
			}
		}else{
			redir(elink()."logout");
		}
	}
?>