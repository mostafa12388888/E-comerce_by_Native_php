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
				<li class="active">product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">ADD product</h1>
			</div>
			
			<table class="table">
  <tbody>
	<?php
	$ID=$_GET['id'];
	$select_pro="SELECT * FROM  `blog`WHERE `id`='$ID';";
    $val=$conection->query($select_pro);
    $values=$val->fetch_assoc();

	?>
    <tr>
     
      <td><img src="pictuers/<?php echo $values['photo'] ?>" style="width:200px;" alt="" srcset=""></td>
    </tr>
    <tr>
    <td> <span>title is:</span><?php echo $values['title'];?></td>
    </tr>
    <tr>
    <td><span>date:</span><?php echo $values['dete'];?></td>
    <td><?php echo $values['Explain'];?></td>
    </tr>

  </tbody>
</table>
<form action="add_input_admin.php" method="post">
    <button type="button" class="btn btn-danger"><a href="elements.php" class="btn btn-danger">Back TO Products</a></button>
    </form>	
		</div><!--/.row-->
			




<?php 
include "footer.php"

?>
</body>
</html>