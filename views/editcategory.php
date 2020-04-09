<?php include 'admin_header.php';
	  require '../controllers/CategoryController.php';
	  $cid=$_GET["id"];
	  $category=getCategory($cid);

?>
<!--edit category starts -->
<div class="center">
	<form method="post" action="../controllers/CategoryController.php" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="name" value="<?php echo $category["name"];?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			<input type="hidden" name="id" value="<?php echo $category["id"];?>">
			<input type="submit" class="btn btn-success" name="edit_category" value="Edit Category" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
<?php include 'admin_footer.php';?>