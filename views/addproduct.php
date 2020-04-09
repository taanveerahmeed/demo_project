<?php include 'admin_header.php';
	  include '../controllers/CategoryController.php';
	  $categories=getAllCategories();
?>
<!--addproduct starts -->
<div class="center">
	<form method="post" action="../controllers/ProductController.php" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Category:</h4> 
			<select name="c_id" class="form-control">
				<?php
					foreach($categories as $category)
					{
						echo "<option value='".$category["id"]."'>".$category["name"]."</option>";
					}
				?>
				
			</select>
		</div>
		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input type="text" name="unit_price" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Quantity:</h4> 
			<input type="text" name="unit_qty" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<textarea type="text" name="description" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<h4 class="text">Image</h4> 
			<input type="file" name="image" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name="add_product" value="Add Product" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>
