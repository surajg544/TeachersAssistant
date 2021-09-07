<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher Assistant | View Notes</title>

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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleViewStudent.css">
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
      <h5>Main</h5>
      <a href="viewSubject.php"><i class="fas fa-home"></i><span> Home</span></a>
      <a href="addTeacher.php"><i class="fas fa-home"></i><span> Add Teacher</span></a>
      <a href="viewTeacher.php"><i class="fas fa-edit"></i><span> View Teacher</span></a>
      <a href="student_registration.php"><i class="fas fa-home"></i><span> Add Student</span></a>
      <a href="viewStudent.php"><i class="fas fa-home"></i><span> View Student</span></a>
      <a href="addSubject.php"><i class="fas fa-edit"></i><span> Add Subject</span></a>
      <a href="viewSubject.php" class="active"><i class="fas fa-edit"></i><span> View Subject</span></a>
    </div>
  <!-- sidebar end -->
  
  <div class="container">
    <div class="header1"><h1><strong>VIEW SUBJECT</strong></h1></div>
    <hr>
    <p>Show <select class="option" name="page" id="page">
          <option value="page">10</option>
          <option value="page">9</option>
          <option value="page">8</option>
          <option value="page">7</option>
        </select> entries </p>
        <div class="right_Search">
          <p>Search <input class="search" type="search" name="search"></p>
        </div>
      <table class="content-table">
          <tr>
            <th>#</th>
            <th>Subject</th>
            <th>Title</th>
            <th>View</th>
          </tr>
          <?php
          $conn = mysqli_connect("localhost","root","","admin_database");
          if($conn-> connect_error)
          {
            die("Connection fail:" .$conn-> connect_error);
          }

          $sql = "SELECT id, title, subject, view from addforum";
          $result = $conn-> query($sql);

          if ($result-> num_rows > 0)
          { 
            while ($row = $result-> fetch_assoc())
            {
              echo "<tr><td>". $row["id"] . "</td><td>". $row["title"] . "</td><td>". $row["subject"] . "</td><td>". $row["view"] . "</td></tr>"; 
            }
            echo "</table>";
          }
          else
          {
            echo "0 result";
          }
          ?>

      </table>  
    </div>
  </div>
</body>
</html>