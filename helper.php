<?php 
	function getCategories($conn) {
	$query = "SELECT * FROM categories";
	$result = $conn->query($query);

	$categories = array();
	while ($row = $result->fetch_assoc()) {
		$categories[] = $row;
	}
	return $categories;
}

	function getUsers($conn){
		$users_query = "SELECT * FROM users";
		$users_result = $conn->query($users_query);
		$users = array();
		while ($row = $users_result->fetch_assoc()) {
				$users[] = $row;
			}
	return $users;
	}

	function getPost($conn, $id){
		$post_query = "SELECT * FROM posts WHERE id= " .$id;
	$post_resutl = $conn->query($post_query);
	$post = $post_resutl->fetch_assoc();

	if ($post['user_id']) {
		$user_query = "SELECT * FROM users WHERE id= " .$post['user_id'];
		$user_result = $conn->query($user_query);
		$user  = $user_result->fetch_assoc();
		$post['user'] = $user;
	}

	if ($post['category_id']) {
		$category_query = "SELECT * FROM categories WHERE id= " .$post['category_id'];
		$category_result = $conn->query($category_query);
		$category  = $category_result->fetch_assoc();
		$post['category'] = $category;
		}
		return $post;
	}
 ?>