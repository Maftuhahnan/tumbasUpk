<?php include "../../inc/adminControl.php"; ?>
<?php 
	
	if(empty($_SESSION['role'])){
		alert("Anda Harus Login Terlebih Dahulu",elink()."home");
	}elseif($_SESSION['role'] != "1"){
		alert("Anda Bukan Admin",elink()."home");
	}else{
	if(isset($_GET)){
		$idnya = abs($_GET['jenis']);
		$kat = abs($_GET['kat']);
		if($idnya=="1"){
			$scs = tm::bebas("DELETE FROM `kategori` WHERE id='$kat'");
			if($scs){	
				alert("Data Sudah Di Hapus",elink()."ad-tumbas");
			}
		}
		
		if($idnya=="2"){
			$scs = tm::bebas("DELETE FROM `barang` WHERE id='$kat'");
			if($scs){	
				alert("Data Sudah Di Hapus",elink()."ad-tumbas");
			}
		}
		
		if($idnya=="3"){
			$scs = tm::bebas("DELETE FROM `user` WHERE id='$kat'");
			if($scs){	
				alert("Data Sudah Di Hapus",elink()."ad-tumbas");
			}
	}
		
	}else{
		redir(elink."ad-admin");
	}}
	
?>