<?php include 'main_header.php';
	require_once("../controllers/ProductController.php");
	$pid = $_GET["id"];
	$product=getProduct($pid);
?>
<!--item starts -->
<div class="center">
	<table>
		<tr>
			<td>
				<img class="item-image" src="<?php echo $product["image"];?>"></img>
				<input type="number" placeholder="1" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
				<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</a></span></div>
			</td>
			<td>
				<h1 class="text"><?php echo $product["name"];?></h1>
				<h2 class="text">BDT <?php echo $product["unit_price"];?></h2>
				<p class="text"> <?php echo $product["description"];?></p>
				
			</td>
		</tr>
	</table>
	
</div>

<!--item ends -->
<?php include 'main_footer.php';?>