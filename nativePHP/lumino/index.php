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
				<li class="active">Dashboard</li>
			</ol>
		
		</div><!--/.row-->
		<button class="btn-primary btn" ><a href="add_admin.php" style="color:black;" class="btn">ADD ADMIN</a></button>
		<table class="table">
  <thead>
    <tr>
      <th scope="col-6">#</th>
      <th scope="col-2">name</th>
      <th scope="col-2">email</th>

      <th scope="col-2">phone</th>
      <th scope="col-2">image</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
 $selec="SELECT * FROM admin";
 
 $K=0;
foreach($result=$conection->query($selec) as $value):
  ?>
  
    <tr>
      <th scope="row"><?php echo ++$K;?></th>
      <td><?php echo $value['name']; ?></td>
      <td><?php echo $value['email']; ?></td>
      <td><?php echo $value['phone'] ;?></td>
	  
      <td><img src="<?php echo 'pictuers/'.$value['img'] ;?>" style="width:200px;" alt="no any image " srcset=""></td>
 
  <td> 
	<?php 
	$SESSion=$_SESSION['email'];
	$supers="SELECT * FROM `admin` WHERE `email`='$SESSion';";
	$row=$conection->query($supers);
	$roww=$row->fetch_assoc();
	if($roww['row']==1):
	?>
	<a href="updata_admin.php?id=<?php echo $value['id']; ?>" class="btn btn-warning">updata admin</a>
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $value['id']?>">
  delete admin 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $value['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delet Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       are you sure delat admin is <span ><?php echo $value['name']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="delatandupdataadmin/delate_admin.php?id=<?php echo $value['id']?>"class="btn  btn-danger">delate admin</a>
      </div>
    </div>
  </div>
</div>
	<?php endif;?>
   </td>
	</tr>
<?php endforeach; ?>
  </tbody>
</table>
	</div>
		

		<?php 
		
include "footer.php";

?>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>