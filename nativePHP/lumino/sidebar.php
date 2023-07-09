<?php 
$Email=$_SESSION['email'];
$ss="SELECT * FROM `admin` WHERE `email`='$Email'";
$pp=$conection->query($ss);
$cc=$pp->fetch_assoc();
?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="pictuers/<?php 
				
				echo $cc['img'];?>" style="width:200px;"alt="no img">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php
				echo $cc['name'];?>
				</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.php"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.php"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="SidInformation.php"><em class="fa fa-toggle-off">&nbsp;</em>Sid Information</a></li>
			<li><a href="BLOG.php"><em class="fa fa-toggle-off">&nbsp;</em>BLOG</a></li>
			<li><a href="panels.php"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="reverslogin.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>)
	</div><!--/.sidebar-->
	<?php
	// $row3=$cc['row'];
	// if($cc['row']==1):
	// 	header("location:index.php");
	
	// endif;
	
	?>
		