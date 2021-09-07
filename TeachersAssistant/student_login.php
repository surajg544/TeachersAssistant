<?php
	$connect = mysqli_connect("localhost","root","","admin_database") or die("Connection Failed");
	if(isset($_POST['submit1']))
	{
		$email = $_POST['email'];
		$Password = $_POST['Password'];
		$query ="select * from studentreg where email ='$email' && Password='$Password'" ;
		$result = mysqli_query($connect,$query);
		$count = mysqli_num_rows($result);
		if($count > 0)
		{
			echo "Login Successful";
			header("location: student_Index.php");
		}
		else
		{
			echo "Login Not Successful";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher Assistant | Student Login</title>
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
		<div class="header1"><h1><strong>Student Login</strong></h1><br></div>
		<form action="" method="POST">
		   <input type="email" name="email" class="form_input" placeholder="Email address" required><br><br>
		   <input type="Password" name="Password" class="form_input" placeholder="Password" required><br><br>
		   <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label><br>
		   <button name="submit1" type="submit">Log in</button><br><br>
		</form><br>
		<label>Don't have a account? </label><a href="student_registration.php">  Register Here</a>
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