<?php 
	session_start();
	$mysqli=mysqli_connect("localhost","root","","catering");
mysqli_select_db($mysqli,"catering") or die("Gagal terhubung ke database");
	
	// settings
	$url = "http://localhost/PRIORITASWEB/";
	$title = "Website Pemesanan Katering";
	$no = 1;
	
	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}
	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}
	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
?>