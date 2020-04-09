<?php
	require_once '../models/database.php';
	if(isset($_POST["add_category"]))
	{
		insertCategory();
	}
	else if(isset($_POST["edit_category"]))
	{
		editCategory();
	}
	function getAllCategories()
	{
		$query="SELECT * FROM categories";
		$categories=get($query);
		return $categories;
	}

	function getCategory($id)
	{
		$query="SELECT * FROM categories WHERE id=$id";
		$category=get($query);
		return $category[0];
	}
	function insertCategory()
	{
		$name=$_POST["name"];
		$query="INSERT INTO categories VALUES(NULL,'$name')";
		execute($query);
		header('Location:../views/allcategories.php');
		
	}
	function editCategory()
	{
		$name=$_POST["name"];
		$id=$_POST["id"];
		$query="UPDATE categories SET name='$name' WHERE id=$id";
		execute($query);
		header('Location:../views/allcategories.php');
	}
?>