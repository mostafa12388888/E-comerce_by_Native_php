<?php
 $id = $_GET['id'];


 include 'des_include/header.php';
 include 'des_include/nav.php';
 include 'des_include/sidebar.php';
 include 'function/connection.php';

 $select_one_admin = "SELECT * FROM admin WHERE id = $id";
 $result_one_admin = $connection->query($select_one_admin);
 $row_one_admin = $result_one_admin->fetch_assoc();
 $name_one_admin = $row_one_admin['name'];
 $image_one_admin = $row_one_admin['image'];
 $password_one_admin = $row_one_admin['password'];


?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Admin</h1>
			</div>

			<form method="POST" action="function/edit_admin.php" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<label>UserName:</label>
				<input type="text" name="username" class="form-control" value="<?php echo $name_one_admin ?>">
				<label>Password:</label>
				<input type="password" name="password" value="<?php echo $password_one_admin;  ?>" disabled class="form-control">
				<img style="width:200px;height: 200px;" src="images/<?php echo $image_one_admin; ?>">
				<input type="file" name="image" class="form-control">
				<input type="submit" name="submit" value="Edit Admin" class="btn btn-info">
			</form>
			
		</div><!--/.row-->
		
<?php 
	include 'des_include/footer.php';
?>