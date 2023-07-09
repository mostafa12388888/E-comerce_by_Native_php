<?php

 include 'des_include/header.php';
 include 'des_include/nav.php';
 include 'des_include/sidebar.php';

?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">ADD Product</h1>
			</div>

			<form method="POST" action="function/add_product.php" enctype="multipart/form-data">
				<label>Name:</label>
				<input type="text" name="name" placeholder="Name Product" class="form-control">
				<label>Price:</label>
				<input type="text" name="price" placeholder="Price Product" class="form-control">
				<label>Discount:</label>
				<input type="text" name="discount" placeholder="Discount Product" class="form-control">
				<label>Description:</label>
				<textarea class="form-control" name="discription"></textarea>
				<label>Upload Image</label>
				<input type="file" name="image" class="form-control">
				<label>Stock</label>
				<input type="number" name="stock" class="form-control">
				<label>Select Category</label>
				<select class="form-control" name="category">
					<option selected disabled >Choose Category</option>
<?php 
include 'function/connection.php';
$select_all_category = "SELECT * FROM categories";
$result_all_category = $connection->query($select_all_category);
foreach ($result_all_category as $key_category) {
?>
                  <option value="<?php echo $key_category['id']; ?>"><?php echo $key_category['cat_name']; ?></option>

<?php } ?>				
				
					
				</select>
				<br>


				<input type="submit" name="submit" value="ADD New Product" class="btn btn-info">
			</form>
			
		</div><!--/.row-->
		
<?php 
	include 'des_include/footer.php';
?>