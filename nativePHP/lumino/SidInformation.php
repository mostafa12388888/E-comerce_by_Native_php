<?php 
include "headAndNevbar.php";
include 'sidebar.php';?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		
		</div><!--/.row-->
<table class="table">
  <thead>
    <tr>
      
      <th scope="col-6">#</th>
      <th scope="col-2">name</th>
      <th scope="col-2">details</th>
      <th scope="col-2">active</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $selec="SELECT * FROM `sidinformation`";
    
    $val=$conection->query($selec);
    $value=$val->fetch_assoc();
    $K=0; ?>
            <tr>
                <th scope="row"><?php echo ++$K;?></th>
                <td>adress</td>
                <td><?php echo $value['adress']; ?></td>
                <td>  
                    <?php 
                    $SESSion=$_SESSION['email'];
                    $supers="SELECT * FROM `admin` WHERE `email`='$SESSion';";
                    $row=$conection->query($supers);
                    $roww=$row->fetch_assoc();
                    if($roww['row']==1):?>
                    <a href="updata_information.php" class="btn btn-warning">updata information</a>
                    <!-- Button trigger modal -->
            <?php endif;?>
        </td>
            </tr>
            <tr>
                <th scope="row"><?php echo ++$K;?></th>
                <td>facebook</td>
                <td><?php echo $value['facebook']; ?></td>
                <td>  
                    <?php 
                    $SESSion=$_SESSION['email'];
                    $supers="SELECT * FROM `admin` WHERE `email`='$SESSion';";
                    $row=$conection->query($supers);
                    $roww=$row->fetch_assoc();
                    if($roww['row']==1):?>
                    <a href="updata_information1.php" class="btn btn-warning">updata information</a>
                    <!-- Button trigger modal -->
            <?php endif;?>
        </td>
            </tr>
            <tr>
                <th scope="row"><?php echo ++$K;?></th>
                <td>touters</td>
                <td><?php echo $value['tout']; ?></td>
                <td>  
                    <?php 
                    $SESSion=$_SESSION['email'];
                    $supers="SELECT * FROM `admin` WHERE `email`='$SESSion';";
                    $row=$conection->query($supers);
                    $roww=$row->fetch_assoc();
                    if($roww['row']==1):?>
                    <a href="updata_information2.php" class="btn btn-warning">updata information</a>
                    <!-- Button trigger modal -->
            <?php endif;?>
        </td>
            </tr>
            <tr>
                <th scope="row"><?php echo ++$K;?></th>
                <td>phone:</td>
                <td><?php echo $value['phone']; ?></td>
                <td>  
                    <?php 
                    $SESSion=$_SESSION['email'];
                    $supers="SELECT * FROM `admin` WHERE `email`='$SESSion';";
                    $row=$conection->query($supers);
                    $roww=$row->fetch_assoc();
                    if($roww['row']==1):?>
                    <a href="updata_information3.php" class="btn btn-warning">updata information</a>
                    <!-- Button trigger modal -->
            <?php endif;?>
        </td>
            </tr>
            <tr>
                <th scope="row"><?php echo ++$K;?></th>
                <td>LinkedIN</td>
                <td><?php echo $value['linked']; ?></td>
                <td>  
                    <?php 
                    $SESSion=$_SESSION['email'];
                    $supers="SELECT * FROM `admin` WHERE `email`='$SESSion';";
                    $row=$conection->query($supers);
                    $roww=$row->fetch_assoc();
                    if($roww['row']==1):?>
                    <a href="updata_information4.php" class="btn btn-warning">updata information</a>
                    <!-- Button trigger modal -->
            <?php endif;?>
        </td>
            </tr>
            <tr>
                <th scope="row"><?php echo ++$K;?></th>
                <td>LinkedIN</td>
                <td><?php echo $value['email']; ?></td>
                <td>  
                    <?php 
                    $SESSion=$_SESSION['email'];
                    $supers="SELECT * FROM `admin` WHERE `email`='$SESSion';";
                    $row=$conection->query($supers);
                    $roww=$row->fetch_assoc();
                    if($roww['row']==1):?>
                    <a href="updata_information5.php" class="btn btn-warning">updata information</a>
                    <!-- Button trigger modal -->
            <?php endif;?>
        </td>
            </tr>

  </tbody>
</table>
	</div>





<?php include "footer.php";?>