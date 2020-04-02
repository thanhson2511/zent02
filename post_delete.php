<?php 
$id = $_GET['id'];
	require 'connect.php';
	$query = "DELETE from posts where id=$id";
	$status = $conn->query($query);
	header("Location: posts.php");
 ?>