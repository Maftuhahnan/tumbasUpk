<?php 
	session_start();
	date_default_timezone_set("Asia/Jakarta");
	$datem = date("Y-m-d");
	include "../conf/config.php";
	include "../inc/model/db.php";
	include "../inc/function.php";
	
	
	if(isset($_GET['barang'])){
		$id = abs($_GET['barang']);
		$ckb = tm::pilih("`barang` WHERE id = '$id'");
		$rckb = mysqli_num_rows($ckb);
		
		
		
		if($rckb == 0){
			echo "<script language='javascript'>alert('Maaf Barang Yang Anda Cari Tidak Ada'); window.history.back();</script>";
		}else{
			if(empty($_SESSION['idn'])){
				echo "<script language='javascript'>alert('Anda Harus Login Terlebih Dahulu !'); window.history.back();</script>";
			}else{
				$ckd = mysqli_fetch_array($ckb);
				
				$inor = tm::masuk("`order` VALUES (null,'$_SESSION[idn]','$id','$datem','1','$ckd[harga]','0','0000-00-00','N')");
				
				if($inor){
					echo "<script language='javascript'>alert('Barang Sudah Di Masukan Dalam Keranjang'); window.history.back();</script>";
				}
			}
		}
		
	}else{
		redir(elink().'home');	
	}
?>