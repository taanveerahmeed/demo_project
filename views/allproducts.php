<?php 
	include 'admin_header.php';
	require '../controllers/ProductController.php';
	$products = getAllProducts();
	//echo "<pre>";
	//print_r($products);
	//echo "</pre>";
	
?>

<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Category </th>
			<th> Price</th>
			<th> Quantity</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($products as $product)
				{
					echo "<tr>";
						echo "<td>".$product["id"]."</td>";
						echo "<td>".$product["name"]."</td>";
						echo "<td>".$product["category_id"]."</td>";
						echo "<td>".$product["unit_price"]."</td>";
						echo "<td>".$product["unit_qty"]."</td>";
						echo '<td><a href="editproduct.php?id='.$product["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
				}
			?>
			
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>