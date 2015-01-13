<?php
	// Controller 
	
	function clink(){
		echo "http://".$_SERVER['HTTP_HOST']."/tumbas/";
	}
	
	function elink(){
		return "http://".$_SERVER['HTTP_HOST']."/tumbas/";
	}
	
	function alert($kata,$hal){
		echo "<script language='javascript'>alert('".$kata."');document.location='".$hal."';</script>";
	}
	
	function redir($hal){
		echo "<script language='javascript'>document.location='".$hal."';</script>";
	}
	 
	function satpam($data){
		return addslashes(htmlspecialchars(strtolower(trim(strip_tags($data)))));
	}
	
	function sp($pos){
		return satpam($_POST[$pos]);
	}
	
	function enk($par){
		$salt = "AB87@#5edV!3s)98s^7_9*6HNM%$))$%Has34bk98s*9)&S$@sdaaawO099";
		return sha1($salt.md5($par.sha1($salt.md5($par))));
	}

?>