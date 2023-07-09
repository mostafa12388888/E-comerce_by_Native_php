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
		<form action="functions/adDproudect.php" method="post" enctype="multipart/form-data">
		<label for="name">Enter name </label>
        <br>
        <input type="text" name="name" placeholder="ENTER NAME of product" required id="name">
        <br>
        <label for="price">Enter price</label>
        <br>
        <input type="number" name="price" placeholder="ENTER price"  id="price">
        <br>
        <br>
        <label for="descount">Enter descount</label>
        <br>
        <input type="number" name="descount" placeholder="ENTER descount"  id="descount">
        <br>
        <label for="photo">Enter photo </label>
        <br>
        <input type="file" name="image"  required id="photo">
        <br>
        <label for="description">description</label>
		<textarea class="form-control" name="description"></textarea>
        <br>
      
		<label for="stock">Stock</label>
		<input type="number" name="stock" id="stock" class="form-control">
		<select name="option" class="form-control">
        <?php 
            include "seeachone_acces.php";
            $result="SELECT * FROM `category`;";
            
            foreach($count=$conection->query($result) as $value):
            ?>
        
      <option  value="<?php echo $value['id']; ?>"><?php echo $value['cat-name']; ?></option> 
			
            
            <?php 
        endforeach;
        ?>
		</select>
</br>
<br/>
    <input type="submit" class="btn btn-primary" name="sub"  value="submit">
    </form>		
			<?php 
include "footer.php"

?>
</body>
</html>