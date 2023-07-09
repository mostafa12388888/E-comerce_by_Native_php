<?php
 $id = $_GET['id'];


 include 'des_include/header.php';
 include 'des_include/nav.php';
 include 'des_include/sidebar.php';
 include 'function/connection.php';

 $select_one_category = "SELECT * FROM categories WHERE id = $id";
 $result_one_category = $connection->query($select_one_category);
 $row_one_category = $result_one_category->fetch_assoc();
 $name_one_category = $row_one_category['cat_name'];


?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Category</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Category</h1>
			</div>

			<form method="POST" action="function/edit_cat.php">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" value="<?php echo $name_one_category; ?>"><br>
				<input type="submit" name="submit" value="Edit Category" class="btn btn-info">
			</form>
			
		</div><!--/.row-->
		
<?php 
	include 'des_include/footer.php';
?>