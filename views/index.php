<?php include 'main_header.php';
	require_once("../controllers/ProductController.php");
	$products=getAllProducts();
?>
<!--Products starts -->
<div class="col-md-12">
		<?php
			foreach($products as $product)
			{
		?>
			<div class="card-product col-md-4">
				
					<a href="item.php?id=<?php echo $product["id"];?>">
						<img class="card-image" src="<?php echo $product["image"];?>"></img>
						<b class="text"> <?php echo $product["name"];?></b>
					</a>
					<div class="price-label"><span ><b><?php echo $product["unit_price"];?> BDT</b></span></div>
					<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</a></span></div>
				
			</div>
		<?php
			}
		?>
	
</div>

<!--Products ends -->
<?php include 'main_footer.php';?>