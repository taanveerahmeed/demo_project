<?php include 'admin_header.php';

?>
<!--addproduct starts -->
	<div class="center">
		<form method="post" action="../controllers/CategoryController.php" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" class="btn btn-success" name="add_category" value="Add Category" class="form-control">
			</div>
		</form>
	</div>

<!--addproduct ends -->
<?php include 'admin_footer.php';?>