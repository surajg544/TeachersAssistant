<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ="admin_database";

    $id="";
    $fullname ="";
    $email ="";
    $MobileNum ="";
    $Password ="";
    $year ="";
    $branch = "";


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

        $data[1] = $_POST['fullname'];
        $data[2] = $_POST['email'];
        $data[3] = $_POST['MobileNum'];
        $data[4] = $_POST['Password'];
        $data[5] = $_POST['year'];
        $data[6] = $_POST['branch'];
        return $data;
    }

    if(isset($_POST['submit']))
    {
        $info = getData();
        $insert_query="INSERT INTO `studentreg`(`fullname`,`email`,`MobileNum`,`Password`,`year`,`Branch`) 
        VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]')";
        try
        {
            $insert_result = mysqli_query($conn, $insert_query);
            if($insert_result)
            {
                if(mysqli_affected_rows($conn)>0)  
                {
                    echo("");
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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher Assistant | Student Registration</title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/styleStudentRegistration.css">
    
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
</head>
<body>
	<img src="img/illustration.svg" class="illustration" >
	<div class="heading">
		<div class="header"><h5><strong>TEACHER ASSISTANT</strong></h5><br></div>
		<div class="header1"><h1><strong>Student Registration</strong></h1><br></div>
		<form action="" method="POST">
		   <input type="text" name="fullname" class="form_input" placeholder="Full Name" value="<?php echo($fullname);?>" autocomplete="off" required><br><br>
		   <input type="email" name="email" class="form_input" placeholder="Email address"value="<?php echo($email);?>" autocomplete="off" required><br><br>
           <input type="text" name="MobileNum" class="form_input" placeholder="Mobile number"value="<?php echo($MobileNum);?>" autocomplete="off" required><br><br>
		   <input type="Password" name="Password" class="form_input" placeholder="Password" value="<?php echo($Password);?>" required><br><br>
		     <select name="year" id="Year" class="form_input" value="<?php echo($year);?>" required >
    			<option value="Year">---Select Year---</option>
    			<option value="2001">2001</option>
    			<option value="2002">2002</option>
    			<option value="2003">2003</option>
  			 </select><br><br>
  			 <select name="branch" id="Year" class="form_input" value="<?php echo($branch);?>" required >
    			<option value="branch">---Select Branch---</option>
    			<option value="Computer">Computer</option>
    			<option value="I.T">I.T</option>
    			<option value="Civil">Civil</option>
                <option value="Electronics">Electronics</option>
  			 </select><br>
		   <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label><br>
           <button name="submit" type="submit">Register</button><br><br>
		</form>
		
		<!-- <button type="button">Register</button><br><br> -->
		<label>Don't have a account? </label><a href="student_login.php">  Login Here</a>
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