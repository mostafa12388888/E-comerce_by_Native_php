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
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">ADD Admin</h1>
			</div>

			<form method="POST" action="function/add_admin.php" enctype="multipart/form-data">
				<label>UserName:</label>
				<input type="text" name="username" placeholder="Username" class="form-control">
				<label>Password:</label>
				<input type="password" name="password" placeholder="Password" class="form-control">
				<input type="file" name="image" class="form-control">
				<input type="submit" name="submit" value="ADD New Admin" class="btn btn-info">
			</form>
			
		</div><!--/.row-->
		
<?php 
	include 'des_include/footer.php';
?>