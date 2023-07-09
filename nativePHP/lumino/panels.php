<?php 
include "headAndNevbar.php";
include 'sidebar.php';

$selectValue="SELECT * FROM `mesagesent`;";
$val=$conection->query($selectValue);
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Panels</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Alerts &amp; Panels</h1>
			</div>
			<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">number</th>
      <th scope="col">userName</th>
      <th scope="col">active details </th>
      <th scope="col">active delete </th>
    </tr>
  </thead>
  <tbody>
    
		<?php 
		$count=0;
		foreach($val as $value):
		?>
    <tr style="<?php if($value['row']==1){echo"background-color:white;color:black;"; }else{
      echo"background-color:black;color:white;";
    } ?>">
    
		
      <th scope="row"><?php echo ++$count;?></th>
      
      <td><?php echo $value['user_name'];?></td>
      <td><a class="btn btn-danger" href="showmassage.php?id=<?php echo $value['id'];?>" >
    details of mesages
    </a></td>
      <td>
	<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#exampleModal<?php echo $value['id'];?>">
  x
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo$value['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DELETE Mesage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        are you sure delete mesage for <span style="color:red;"><?php echo $value['user_name'];?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-danger btn-round" name="id" href="delatandupdataadmin/deletmesage.php?id=<?php echo $value['id'];?>">DELETE</a>
      </div>
    </div>
  </div>
</div>
	</td>
    </tr>
   
    <?php endforeach; ?>
  </tbody>
</table>
		</div><!--/.row-->
				
		
	
		<?php 
include "footer.php"

?>