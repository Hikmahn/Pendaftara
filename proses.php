<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	
	 
	if($username == 'admin' && $password == 'adminpmh'){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = true;
		header("location:table.php");
		// echo"berhasil";
	}else{
		header("location:login.php?message=gagal");	
		// echo"gagal";

	}
	 

?>