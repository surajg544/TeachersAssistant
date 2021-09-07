<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher Assistant | View Student</title>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->

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
    <!-- <link rel="stylesheet" type="text/css" href="css/styleAdminHome.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleViewRecords.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/styleViewStudent.css"> -->

    
    <!-- Favicon-->
	<link rel="shortcut icon" href="img/favicon.png?3">

	<title>Teacher Assistan</title>
</head>
<body>
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
			<!-- <center> -->
			<h5>Main</h5>
	  <a href="viewRecords.php"><i class="fas fa-home"></i><span> Home</span></a>
      <a href="addTeacher.php"><i class="fas fa-home"></i><span> Add Teacher</span></a>
      <a href="viewTeacher.php" ><i class="fas fa-edit"></i><span> View Teacher</span></a>
      <a href="student_registration.php"><i class="fas fa-home"></i><span> Add Student</span></a>
      <a href="viewStudent.php"><i class="fas fa-home"></i><span> View Student</span></a>
      <a href="addSubject.php"><i class="fas fa-edit"></i><span> Add Subject</span></a>
      <a href="viewSubject.php"><i class="fas fa-edit"></i><span> View Subject</span></a>
			<!-- </center>			 -->
		</div>
		<div class="container">
			<div class="header1"><h1><strong>STUDENT DETAILS</strong></h1></div>
			<hr>
			<p><h1>Priya</h1></p>
			<p><h5>Email : priya@gmail.com</h5></p>
			<p><h5>Mobile : 8875448712</h5></p>
			<p><h5>Branch : Computer</h5></p>
			<p><h5>Year : F.E.</h5></p>
		</div>
		<div class="container1">
			<div class="percent"><h1><strong>75%</strong></h1></div>
			<div><h5>ATTENDANCE</h5></div>
			<div class="box">
				<div class="percent">
					<svg>
						<circle cx="70" cy="70" r="70"></circle>
						<circle cx="70" cy="70" r="70"></circle>
					</svg>
				</div>
			</div>
		</div>
		<div class="container2">
			<div class="percent"><h1><strong>62%</strong></h1></div>
			<div><h5>Marks( % )</h5></div>
			<div class="box">
				<div class="percent">
					<svg>
						<circle cx="70" cy="70" r="70"></circle>
						<circle cx="70" cy="70" r="70"></circle>
					</svg>
				</div>
			</div>
		</div>
		<div class="container3">
			<div class="header1"><h1><strong>ATTENDANCE</strong></h1></div>
			<hr>
			<table class="table">
		  		<tr>
    				<th>#</th>
   				 	<th>Subject</th>
    				<th>Attendance</th>
  				</tr>
  				<tr>
    				<th>1</th>
    				<th>Java</th>
    				<th>75</th>
    			</tr>
    		</table>
		</div>
		<div class="container4">
			<div class="header2"><h1><strong>MANUAL MARKS</strong></h1></div>
			<hr>
			<table class="table1">
				<tr>
					<th>#</th>
					<th>Subject</th>
					<th colspan="10">Marks</th>
					<th>Percentage</th>
				</tr>
				<tr>
					<th>  </th>
					<th>  </th>
					<th>E1</th>
					<th>E2</th>
					<th>E3</th>
					<th>E4</th>
					<th>E5</th>
					<th>E6</th>
					<th>E7</th>
					<th>E8</th>
					<th>E9</th>
					<th>E10</th>
					<th >   </th>
				</tr>
				<tr>
					<th>1</th>
					<th>Java</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>62</th>
				</tr>
			</table>
		</div>
		<div class="container5">
			<div class="header2"><h1><strong>CLASS TEST MARKS</strong></h1></div>
			<hr>
			<table class="table1">
				<tr>
					<th>#</th>
					<th>Subject</th>
					<th colspan="10">Marks</th>
					<th>Percentage</th>
				</tr>
				<tr>
					<th>  </th>
					<th>  </th>
					<th>CT1</th>
					<th>CT2</th>
					<th>CT3</th>
					<th>CT4</th>
					<th>CT5</th>
					<th>CT6</th>
					<th>CT7</th>
					<th>CT8</th>
					<th>CT9</th>
					<th>CT10</th>
					<th>   </th>
				</tr>
				<tr>
					<th>1</th>
					<th>Java</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>62</th>
				</tr>
			</table>
		</div>
		<div class="container6">
			<div class="header2"><h1><strong>INTERNAL MARKS</strong></h1></div>
			<hr>
			<table class="table1">
				<tr>
					<th>#</th>
					<th>Subject</th>
					<th colspan="10">Marks</th>
					<th>Percentage</th>
				</tr>
				<tr>
					<th>  </th>
					<th>  </th>
					<th>I1</th>
					<th>I2</th>
					<th>I3</th>
					<th>I4</th>
					<th>I5</th>
					<th>I6</th>
					<th>I7</th>
					<th>I8</th>
					<th>I9</th>
					<th>I10</th>
					<th >   </th>
				</tr>
				<tr>
					<th>1</th>
					<th>Java</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>62</th>
				</tr>
			</table>
		</div>
		<div class="container9">
			<div class="header2"><h1><strong>MINI PROJECT MARKS</strong></h1></div>
			<hr>
			<table class="table1">
				<tr>
					<th>#</th>
					<th>Subject</th>
					<th colspan="10">Marks</th>
					<th>Percentage</th>
				</tr>
				<tr>
					<th>  </th>
					<th>  </th>
					<th>M1</th>
					<th>M2</th>
					<th>M3</th>
					<th>M4</th>
					<th>M5</th>
					<th>M6</th>
					<th>M7</th>
					<th>M8</th>
					<th>M9</th>
					<th>M10</th>
					<th>   </th>
				</tr>
				<tr>
					<th>1</th>
					<th>Java</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>25</th>
					<th>62</th>
				</tr>
			</table>
		</div>

	<!-- sidebar end -->

	
</body>
</html>