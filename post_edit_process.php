<?php 
	$data = $_POST;
	$id = $_POST['id'];
	require 'connect.php';
	$query = " UPDATE posts SET title ='". $data['title'] . "',description='". $data['description'] ."',content='". $data['content'] . "' ,user_id='". $data['user_id'] ."' ,category_id='". $data['category_id'] ."' WHERE id= " . $id ;

	$status = $conn->query($query);
	header("Location: posts.php");
 ?>