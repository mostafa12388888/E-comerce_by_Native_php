
<?php 
include "headAndNevbar.php";
include 'sidebar.php';
$ID=$_GET['id'];
$SELECT="SELECT * FROM `category` WHERE `id`='$ID';";
$val=$conection->query($SELECT);
$value=$val->fetch_assoc();
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
    <form action="delatandupdataadmin/editcatagories.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $ID; ?>">    
    <label for="name">UPDATE name </label>
        <br>
        <input type="text" name="cat-name" placeholder="ENTER NAME" value="<?php echo $value['cat-name'] ?>" id="name">
        <br>
       
       
</br>
<br/>
    <input type="submit" class="btn btn-primary" name="sub"  value="submit">
    </form>
</div>
	<?php 
include "footer.php";

?>
	
		
</body>
</html>