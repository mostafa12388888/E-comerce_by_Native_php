<?php
 $id = $_GET['id'];


 include 'des_include/header.php';
 include 'des_include/nav.php';
 include 'des_include/sidebar.php';
 include 'function/connection.php';

 $select_one_product = "SELECT * FROM products WHERE id = $id";
 $result_one_product = $connection->query($select_one_product);
 $row_one_product = $result_one_product->fetch_assoc();
 


?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit product</h1>
			</div>

			<form method="POST" action="function/edit_product.php" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $row_one_product['id']; ?>">
				<label>Name:</label>
				<input type="text" name="name" value="<?php echo $row_one_product['p_name']; ?>" class="form-control">
				<label>Price:</label>
				<input type="text" name="price" value="<?php echo $row_one_product['price']; ?>" class="form-control">
				<label>Discount:</label>
				<input type="text" name="discount" value="<?php echo $row_one_product['discount']; ?>" class="form-control">
				<label>Description:</label>
				<textarea class="form-control" name="discription"><?php echo $row_one_product['description']; ?></textarea>
				<img src="images/<?php echo $row_one_product['image']; ?>"><br>
				<label>Upload Image</label>
				<input type="file" name="image" class="form-control">
				<label>Stock</label>
				<input type="number" name="stock" class="form-control" value="<?php echo $row_one_product['stock']; ?>">
				<label>Select Category</label>
				<select class="form-control" name="category">

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


				<input type="submit" name="submit" value="Edit Product" class="btn btn-info">
			</form>
			
		</div><!--/.row-->
		
<?php 
	include 'des_include/footer.php';
?>