<?php
	require_once '../models/database.php';
	if(isset($_POST["add_product"]))
	{
		insertProduct();
	}
	else if(isset($_POST["edit_product"]))
	{
		editProduct();
	}
	function getAllProducts()
	{
		$query ="SELECT * FROM products";
		$products = get($query);
		return $products;	
	}
	function getProduct($id)
	{
		$query="SELECT * FROM products WHERE id=$id";
		$product=get($query);
		return $product[0];
		
	}
	function deleteProduct($id)
	{
		
	}
	function insertProduct()
	{
		$name=$_POST["name"];
		$cid=$_POST["c_id"];
		$price=$_POST["unit_price"];
		$qty=$_POST["unit_qty"];
		$desc=$_POST["description"];
		 //file upload
        $target_dir="../storage/product_image/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		//echo $target_file;
		$query="INSERT INTO products VALUES(NULL,'$name',$cid,$price,$qty,'$desc','$target_file')";
		execute($query);
		header("Location:../views/allproducts.php");
		
	}
	function editProduct()
	{
		$target_file=$_POST["prev_image"];
		$id=$_POST["id"];
		$name=$_POST["name"];
		$cid=$_POST["c_id"];
		$price=$_POST["unit_price"];
		$qty=$_POST["unit_qty"];
		$desc=$_POST["description"];
		if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) 
		{
			$target_dir="../storage/product_image/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
			//echo 'No upload';
		}
		$query="UPDATE products SET name='$name',category_id=$cid,unit_price=$price,unit_qty=$qty,description='$desc',image='$target_file' WHERE id=$id";
		echo $query;
		execute($query);
		header("Location:../views/allproducts.php");
	}
?>