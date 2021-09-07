<?php
	
	if( isset($_POST['name']) || isset($_POST['pass']) )
	{
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
	}
	$error ="";
	$success ="";

	if(isset($_POST['submit1']))
	{
		if($uname == "admin")
		{
			if($pass == "admin")
			{
				$error = "";
				$success ="Welcome Admin!!!";
				header("Location: admin-index.php");
			}
			else
			{
				$error = "Invalid pass!!!";
				$success ="";	
			}
			
		}
		else
		{
			$error = "Invalid Username!!!";
			$success ="";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher Assistant | Admin Login</title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
</head>
<body>
	<img src="img/illustration.svg" class="illustration" >
	<div class="heading">
		<div class="header"><h5><strong>TEACHER ASSISTANT</strong></h5><br></div>
		<div class="header1"><h1><strong>Admin Login</strong></h1><br></div>
		<p class="error"><?php echo $error; ?></p>
		<p class="success"><?php echo $success; ?></p>
		<form action="" method="POST">
		   <input type="text" name="uname" class="form_input" placeholder="User Name" required><br><br>
		   <input type="text" name="pass" class="form_input" placeholder="pass" required><br><br>
		   <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label><br><br>
		   <!-- <input type="submit" name="" value="submit"> -->
		   <button name="submit1" type="submit" value="LOGIN">Log in</button>
		</form><br>

	</div>
	    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/front.js"></script>
</body>
</html>