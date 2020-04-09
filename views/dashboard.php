<?php include 'admin_header.php';
	require_once ('../controllers/ProductController.php');
	require_once ('../controllers/CategoryController.php');
	$t_products=count(getAllProducts());
	$t_categories=count(getAllCategories());
?>
<!--dashboard starts -->
<div>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>
					<?php echo $t_products;?>
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total Categories <br>
					<?php echo $t_categories;?>
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total Sales <br>
					100
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="center">
	<h3 class="text">Recent Sales</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Sales Qty</th>
			<th>Sales Date</th>
		</thead>
		<tbody>
			<td>1</td>
			<td>Onion</td>
			<td>100</td>
			<td>10</td>
			<td>10.2.2020</td>
		</tbody>
	</table>
</div>
<!--dashboard ends -->
<?php include 'admin_footer.php';?>