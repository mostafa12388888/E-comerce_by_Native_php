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
    <form action="add_input_admin.php" method="post" enctype="multipart/form-data">
        <label for="email">Enter Email for new Admin</label>
        <br>
        <input type="email" name="email" placeholder="ENTER EMAIL" id="email" required>
        <br>
        <label for="phone">Enter phone number</label>
        <br>
        <input type="text" name="phone" placeholder="ENTER phone"  pattern="+20[0-9]{2}-[0-9]{3}-[0-9]{3}-[0-9]{2}" id="phone">
        <br>
        <label for="name">Enter name </label>
        <br>
        <input type="text" name="name" placeholder="ENTER NAME" required id="name">
        <br>
        <label for="photo">Enter photo </label>
        <br>
        <input type="file" name="image"  required id="photo">
        <br>
        <label for="password">Enter password </label>
        <br>
        <input type="password" name="password" required placeholder="ENTER PASSWORD" id="password">
</br>
<select name="admin" id="">
<option value="0">admin</option>
    <option value="1">super Admin</option>
    
</select>
<br/>
    <input type="submit" class="btn btn-primary" name="sub"  value="submit">
    </form>
</div>
	<?php 
include "footer.php";

?>
	
		
</body>
</html>