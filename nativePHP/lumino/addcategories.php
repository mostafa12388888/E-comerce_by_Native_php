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
    <form action="functions/catagerieadd.php" method="post" enctype="multipart/form-data">
        <label for="name">Enter name </label>
        <br>
        <input type="text" name="cat-name" placeholder="ENTER NAME" required id="name">
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