<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher Assistant | Admin Login</title>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/styleAdminHome.css">
    <link rel="stylesheet" type="text/css" href="css/styleAddTeacher.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Favicon-->
	<link rel="shortcut icon" href="img/favicon.png?3">

	<title>Teacher Assistan</title>
</head>
<body>
	<?php
	$servername ="localhost";
	$username ="root";
	$password ="";
	$dbname ="admin_database";

	$id="";
	$title ="";
	$subject ="";

	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	try
	{
		$conn = mysqli_connect($servername,$username,$password,$dbname);
	}
	catch(MySQLi_Sql_Exception $ex)
	{
		echo("error in connecting");
	}

	function getData()
	{
		$data = array();

		$data[1] = $_POST['title'];
		$data[2] = $_POST['subject'];
		return $data;
	}

	if(isset($_POST['submit']))
	{
		$info = getData();
		$insert_query="INSERT INTO `addforum`(`title`,`subject`) 
		VALUES ('$info[1]','$info[2]')";
		try
		{
			$insert_result = mysqli_query($conn, $insert_query);
			if($insert_result)
			{
				if(mysqli_affected_rows($conn)>0)  
				{
					echo("data inserted successfully");
				}
				else
				{
					echo("data are not inserted");
				}
			}
		}
		catch(Exception $ex)
		{
			echo("error inserted" .$ex ->getMessage());
		}
	}

?>
	<!-- header area start -->
	<header>
		<strong class="left_bar"><i class="fas fa-align-left"></i></strong>
		<div class="left_area">
			<h4>TEACHER ASSISTANT</h4>
		</div>
		<div class="right_area">
			<h3 class="welcome_btn"><strong> W E L C O M E </strong><br><br><span><h6> Admin</h6></span></h3>
		</div>
	</header>
	<!-- header area end -->
	<!-- sidebar start -->
		<div class="sidebar">
			<h5>Main</h5>
      <a href="addSubject.php"><i class="fas fa-home"></i><span> Home</span></a>
      <a href="addTeacher.php"><i class="fas fa-home"></i><span> Add Teacher</span></a>
      <a href="viewTeacher.php" ><i class="fas fa-edit"></i><span> View Teacher</span></a>
      <a href="student_registration.php"><i class="fas fa-home"></i><span> Add Student</span></a>
      <a href="viewStudent.php"><i class="fas fa-home"></i><span> View Student</span></a>
      <a href="addSubject.php" class="active"><i class="fas fa-edit"></i><span> Add Subject</span></a>
      <a href="viewSubject.php"><i class="fas fa-edit"></i><span> View Subject</span></a>
		</div>
	<!-- sidebar end -->
	
	<!-- add teacher form start -->
	<div class="container">
		<div class="header1"><h1><strong>ADD SUBJECT</strong></h1></div>
		<hr>
			<form action="" method="POST">
				<label>Title  </label>
		   		<input type="text" name="title" class="form_input" placeholder="Title" value="<?php echo($title);?>" required><br><br><br>
		   		<label>Subject  </label>
		   		<input type="text" name="subject" class="form_input" placeholder="Subject" value="<?php echo($subject);?>" required><br><br><br>
		   		<button name="submit" type="submit" value="Add">Save changes</button>
			</form><br>
			
			<a href="addForum.php"><button type="button">Cancle</button><br><br></a>
			
		</div>
	</div>
	<!-- add teacher form end -->

	
</body>
</html>