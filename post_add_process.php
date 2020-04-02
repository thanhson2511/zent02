<?php 
	require 'connect.php';
	$data = $_POST;
	$query = "INSERT INTO users (title,description,content, user_id, category_id) VALUES ('".$data['title']."','".$data['description']."', '".$data['content']."' ,'".$data['user_id']."', '".$data['category_id']."')";
	$status = $conn->query($query);
	
 
	header("Location: posts.php");
	if ($status) {
		echo "THanh cong";
	}else{echo 'loi';}
 ?>