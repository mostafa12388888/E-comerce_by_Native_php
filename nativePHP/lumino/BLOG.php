<?php 
include "headAndNevbar.php";
include 'sidebar.php';
?>		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">BLOG</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">ADD BLOG</h1>
			</div>
			<form action="add_input_admin.php" method="post">
    <button type="button" class="btn btn-danger"><a href="addBLOG.php" class="btn btn-danger">Add product</a></button>
    </form>	
			<table class="table">
  <thead>
    <tr>
      <th scope="col"> # </th>
      <th scope="col">  title </th>
      <th scope="col"> images </th>
      <th scope="col"> active</th>
    </tr>
  </thead>
  <tbody>
	<?php
	
	$select_cat="SELECT * FROM  `blog`;";
	
	
	$counter=0;
foreach($valueOf_cat=$conection->query($select_cat) as $l=>$values):
	$counter++;
	?>
    <tr>
      <th scope="row"><?php echo $counter;?></th>
      <td><?php echo $values['title'];?></td>
      <td><img src="pictuers/<?php echo $values['photo'] ?>" style="width:200px;" alt="" srcset=""></td>
     
	  <td>
	  <a href="dtailsBLOG.php?id=<?php echo $values['id'];?>" class="btn btn-warning">details of product</a>
	  <a href="updataBLOG.php?id=<?php echo $values['id'];?>" class="btn btn-warning">update product</a>
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $values['id']?>">
  delete category 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $values['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       are you sure delat category is <span ><?php echo $values['title']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="delatandupdataadmin/deletinBLOG.php?id=<?php echo $values['id']?>"class="btn  btn-danger">delate admin</a>
      </div>
    </div>
  </div>
</div>
	  </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
		</div><!--/.row-->
<?php 
include "footer.php"

?>
</body>
</html>