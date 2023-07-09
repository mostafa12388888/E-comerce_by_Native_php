<?php 
session_start();
if(!isset($_SESSION["email"])){
	header("location:login.php");
  };
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">update information</div>
				<div class="panel-body">
					<form  method="post" action="phpfuncthion/updetinformationsid4.php">
						<fieldset>
                        <div class="form-group">
								<label for="likedin">Enter New likedin</label>
								<input id="likedin" class="form-control" placeholder="likedin" name="likedin" type="email">
                          </div>
							<button class="btn btn-primary " name="sub">update information</button></fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>