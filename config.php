<?php  

	// ini koneksi ke database wisata
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wisata";

	$connection = mysqli_connect($servername, $username, $password, $dbname);
	if(!$connection){
		die("Connection Failed : ".mysqli_connect_error());
	}

?>