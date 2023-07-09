<?php
include 'project_des/header.php';
include 'project_des/nav.php';
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
                    <h1 class="page-header">details of  product</h1>
                </div>
                
        <table class="table">
        <tbody>
            <?php
            $ID=$_GET['id'];
            $select_pro="SELECT * FROM  `proudect`WHERE `id`='$ID';";
            $val=$conection->query($select_pro);
            $values=$val->fetch_assoc();

            ?>
            <tr>
            <td> <span>product Name:</span><?php echo $values['p_name'];?></td>
            <td><img src="../lumino/pictuers/<?php echo $values['img'] ?>" style="width:200px;" alt="" srcset=""></td>
            </tr>
            <tr>
            <td><?php echo $values['descrption'];?></td>
            </tr>
            <tr>
            <td><span>price:</span><?php echo " ".$values['price'];?></td>
            <td><span>discount:</span><?php echo " ".$values['discount']?></td>
            
            </tr>

        </tbody>
        </table>

        <button type="button" class="btn btn-danger"><a href="shop.php" class="btn btn-danger">Back TO Products</a></button>
    </div>

<!--/.row-->
</div>
 <?php include 'project_des/footer.php'; ?>