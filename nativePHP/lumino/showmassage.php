<?php 
if(isset($_GET['id'])):
include "headAndNevbar.php";
include 'sidebar.php';


$ID=$_GET['id'];

$update="UPDATE `mesagesent` SET `row`=1 WHERE `id`='$ID';";
$val=$conection->query($update);
$selectValue="SELECT * FROM `mesagesent` WHERE `id`='$ID';";
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
  <tbody>
		<tr>
     
      <td><?php echo "userName:".$value['user_name'];?></td>
      <td><?php echo "email:".$value['user_email'];?></td>
        </tr>
        <tr>
      <td><?php echo "Details Of Mesage:".$value['mesage_details'];?></td>
      
    </tr>
  </tbody>
</table>
<button class="btn-close" class="btn btn-danger" type="submit"><a href="panels.php" class="btn btn-dangerous"> back to msages</a></button>
		</div><!--/.row-->
				
		
	
		<?php 
        
include "footer.php";
    endif;
?>