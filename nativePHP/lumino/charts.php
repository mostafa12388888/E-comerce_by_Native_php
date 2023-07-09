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
				<li class="active">Categories</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Categories</h1>
			</div>
<button type="submit" class="btn btn-primary">
	<a href="addcategories.php" class="btn btn-primary">Add categories</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col"> # </th>
      <th scope="col"> categories names </th>
      <th scope="col"> active</th>
    </tr>
  </thead>
  <tbody>
	<?php
	
	$select_cat="SELECT * FROM  `category`;";
	
	
	$counter=0;
foreach($valueOf_cat=$conection->query($select_cat) as $l=>$values):
	$counter++;
	?>
    <tr>
      <th scope="row"><?php echo $counter;?></th>
      <td><?php echo $values['cat-name'];?></td>
	  <td>
	  <a href="updatacatagory.php?id=<?php echo $values['id'];?>" class="btn btn-warning">update category</a>
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
       are you sure delat category is <span ><?php echo $values['cat-name']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="delatandupdataadmin/deleteCategory.php?id=<?php echo $values['id']?>"class="btn  btn-danger">delate admin</a>
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
	<script>
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart5 = document.getElementById("radar-chart").getContext("2d");
	window.myRadarChart = new Chart(chart5).Radar(radarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.05)",
	angleLineColor: "rgba(0,0,0,.2)"
	});
	var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
};
	</script>	
</body>
</html>
