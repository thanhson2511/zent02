<?php 
	require 'connect.php';
	require 'helper.php';

	$id = $_GET['id'];
	$post = getPost($conn, $id);
	
 ?>
 <div>Title:<?php echo $post['title'] ?></div>
 <div>Name:<?php echo $post['user']['name'] ?></div>
 <div>Category:<?php echo $post['category']['name'] ?></div>
 <div>Content:<?php echo $post['content'] ?></div>