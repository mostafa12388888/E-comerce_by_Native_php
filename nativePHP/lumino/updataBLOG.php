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
		</div><!--/.row-->
		<form action="functions/updateblog.php" method="post" enctype="multipart/form-data">
		<label for="name">update title </label>
        <br>
        <input type="text" name="title" placeholder="ENTER title of article"  id="name">
        <br>
        <label for="data">update data</label>
        <br>
        <input type="date" name="data" placeholder="ENTER data"  id="data">
        <br>
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        <br>
        <label for="photo">Enter photo </label>
        <br>
        <input type="file" name="image"   id="photo">
        <br>
        <label for="description">description</label>
		<textarea class="form-control" name="description"></textarea>
		
</br>
<br/>
    <input type="submit" class="btn btn-primary" name="sub"  value="submit">
    </form>		
			<?php 
include "footer.php";

?>
</body>
</html>