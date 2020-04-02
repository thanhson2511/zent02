<?php 
	$severname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "php_blog";

	$conn = new mysqli($severname,$username,$password,$dbname);
	if ($conn->connect_error) {
		echo "Ket noi that bai" . $conn->connect_error;
		exit();
	}else{
		// echo "Ket noi thanh cong";
	}
	mysqli_set_charset($conn,'UTF8');
?>