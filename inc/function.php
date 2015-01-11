<?php
	// Controller 
	
	function clink(){
		echo "http://".$_SERVER['HTTP_HOST']."/tumbas/";
	}
	
	 function alert($kata,$hal){
		echo "<script language='javascript'>alert('".$kata."');document.location='".$hal."';</script>";
	}
	 
	
	
	function enk($par){
		$salt = "AB87@#5edV!3s)98s^7_9*6HNM%$))$%Has34bk98s*9)&S$@sdaaawO099";
		return sha1($salt.md5($par.sha1($salt.md5($par))));
	}

?>