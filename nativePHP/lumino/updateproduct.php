<?php 
include "headAndNevbar.php";
include 'sidebar.php';
$ID=$_GET['id'];

$result="SELECT * FROM `proudect` WHERE id=$ID;";
 $val=$conection->query($result);
 $value=$val->fetch_assoc();
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
				<h1 class="page-header">Edit product</h1>
			</div>
		</div><!--/.row-->
		<form action="delatandupdataadmin/editproduct.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $ID; ?>">
        <label for="name">Edit name </label>
        <br>
        <input type="text" name="name" value="<?php echo $value['p_name'];?>"  id="name">
        <br>
        <label for="price">Edit price</label>
        <br>
        <input type="number" name="price" value="<?php echo $value['price'];?>"  id="price">
        <br>
        <br>
        <label for="discount">Edit discount</label>
        <br>
        <input type="number" name="discount" value="<?php echo $value['discount'];?>"  id="discount">
        <br>
        <label for="photo">Edit photo </label>
        <br>
        <img src="pictuers/<?php echo $value['img'];?>" style="width:200px" alt="" srcset="">
        <br>
        <input type="file" name="image"   id="photo">
        <br>
        <label for="description" >description</label>
		<textarea class="form-control"  name="description"><?php echo $value['descrption'];?></textarea>
        <br>
		<label for="stock">Stock</label>
		<input type="number" name="stock" id="stock" value="<?php echo $value['stock'];?>" class="form-control">
</br>
<select name="option" class="form-control">
        <?php 
           
            $result="SELECT * FROM `category`;";
            
            foreach($count=$conection->query($result) as $values):
            ?>
        
      <option   value="<?php echo $values['id'];?>" <?php if($values['id']==$value['id_catgoury']) {echo "selected";}; ?>><?php echo $values['cat-name']; ?></option> 
            <?php 
        endforeach;
        ?>
		</select>
<br/>
    <input type="submit" class="btn btn-primary" name="sub"  value="submit">
    </form>		
			<?php 
include "footer.php"

?>
</body>
</html>