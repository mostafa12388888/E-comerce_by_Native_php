<?php 
include "headAndNevbar.php";
include 'sidebar.php';
// $Email=$_SESSION['email'];
// $ss="SELECT * from `admin` WHERE `email`='$Email';";
// $EE=$conection->query($ss);
// $dd=$EE->fetch_assoc();
// $row3=$cc['row'];
// if($row3==1){
//     header("location:index.php");

// };

$cid=$_GET['id'];
$selsct="SELECT * from admin WHERE id=$cid;";
$datafromserver=$conection->query($selsct);
$arrydata=$datafromserver->fetch_assoc();
// include "the_superadmin.php";

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
    <form action="delatandupdataadmin/edit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value=<?php echo $cid;?>>
        <label for="email">Edit Admin enter name</label>
        <br>
        <input type="email" name="email" placeholder="ENTER EMAIL" value="<?php echo $arrydata['email']?>" id="email" required>
        <br>
        <label for="phone">Enter phone number</label>
        <br>
        <input type="text" name="phone" value=<?php echo $arrydata["phone"]; ?>  pattern="+20[0-9]{2}-[0-9]{3}-[0-9]{3}-[0-9]{2}" id="phone">
        <br>
        <label for="name">Enter name </label>
        <br>
        <input type="text" name="name"  value=<?php echo $arrydata["name"]; ?> id="name">
        <br>
        <label for="photo">Enter photo </label>
        <br>
        <img src="pictuers/<?php echo $arrydata['img']; ?>" style="width:200px;" alt="" srcset="">
        <input type="file" name="image"  id="photo">
        <br>
        <label for="password">Enter password </label>
        <br>
        <input type="password" name="password" id="password"  value=<?php echo $arrydata["passord"]; ?> >
</br>
<br/>
    <input type="submit" class="btn btn-primary" name="sub"  value="submit">
    </form>
    <?php
    echo "the id :".$cc['row']."br";
    ?>
</div>
	<?php 
    
include "footer.php";

?>
	
		
</body>
</html>