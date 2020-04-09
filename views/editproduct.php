<?php include 'admin_header.php';
	  require_once ('../controllers/ProductController.php');
	  require_once ('../controllers/CategoryController.php');
	  $pid = $_GET["id"];
	  $product=getProduct($pid);
	  $categories=getAllCategories();
	  
	  
?>
<!--editproduct starts -->
<div class="center">
<table>
	<td>
		<img class="item-image" style="margin-right:20px" src="<?php echo $product["image"];?>"></img>
	</td>
	<td>
		<form method="post" action="../controllers/ProductController.php" enctype="multipart/form-data" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" name="name" value="<?php echo $product["name"]?>" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Category:</h4> 
				<select class="form-control" name="c_id">
				<?php
					foreach($categories as $category)
					{
						echo "<option value='".$category["id"]."'";
						if($category["id"]==$product["category_id"]) echo "selected";
						echo ">".$category["name"]."</option>";
					}
				?>
					<option>Choose</option>
				</select>
			</div>
			<div class="form-group">
				<h4 class="text">Price:</h4> 
				<input type="text" name="unit_price" value="<?php echo $product["unit_price"]?>" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Quantity:</h4> 
				<input type="text" name="unit_qty" value="<?php echo $product["unit_qty"]?>" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Description:</h4> 
				<textarea type="text" name="description" class="form-control"> <?php echo $product["description"]?> </textarea>
			</div>
			<div class="form-group">
				<h4 class="text">Image</h4> 
				<input type="file" name="image" class="form-control">
			</div>
			<input type="hidden" name="id" value="<?php echo $product["id"]?>" >
			<input type="hidden" name="prev_image" value="<?php echo $product["image"]?>" >
			<div class="form-group text-center">
				
				<input type="submit" class="btn btn-success" name="edit_product" value="Edit Product" class="form-control">
			</div>
		</form>
	</td>
</table>				
</div>

<!--editproduct ends -->
<?php include 'admin_footer.php';?>