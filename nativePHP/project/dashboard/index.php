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
				<h1 class="page-header">Admin</h1>
			</div>
			<a href="add_admin.php" class="btn btn-primary">Add New Admin</a>

			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Image</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
<?php
    $count = 1;

    include 'function/connection.php';
	$select_all_admin = "SELECT name , image , id  FROM admin ORDER BY id DESC LIMIT 5";
	$result_all_admin = $connection->query($select_all_admin);
	foreach ($result_all_admin as $key_admin) {
		$name = $key_admin['name'];
		$image = $key_admin['image'];

		

?>			  	
			    <tr>
			      <th scope="row"><?php echo $count++; ?></th>
			      <td><?php echo $name; ?></td>
			      <td><img style="width: 100px;height: 100px;" src="images/<?php echo $image; ?>"></td>
			      <td>
			      	<a class="btn btn-warning" href="edit_admin.php?id=<?php echo $key_admin['id']; ?>">Edit</a>
			      	
			      	<!-- Button trigger modal -->
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $key_admin['id']; ?>">
					  Delete
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal<?php echo $key_admin['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        Are You Sure To Delete Admin  <span style="color: red;"><?php echo $name;  ?></span>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <a href="function/delete_admin.php?id=<?php echo $key_admin['id']; ?>" class="btn btn-danger">Delete</a>
					      </div>
					    </div>
					  </div>
</div>
			      </td>
			    </tr>
<?php } ?>			    



			  </tbody>
			</table>
		</div><!--/.row-->
		
<?php 
	include 'des_include/footer.php';
?>