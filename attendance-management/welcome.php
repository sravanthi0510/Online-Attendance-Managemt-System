<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome</title>
      <link rel="stylesheet" href="./css/dashboard.css">
   </head>
   
   <body>
   	<?php include('header.php')?>
     <!-- <h1 style="text-align: center;">Welcome! <?php echo $login_session; ?></h1> -->
      <div class="content">
      <div class="box">
      	   	 <a style="text-decoration: none;" href="attendance-form.php">
      <img src="./images/attendance.png" class="dashboardIcons" alt="Attendance">
      <p>Attendance</p></a>
  </div>
   <div class="box">
   	 <a style="text-decoration: none;" href="student-data.php">
      <img src="./images/register.png" class="dashboardIcons" alt="Attendance">
    <p> Register a student!</p>
 </a>
  </div>
  <?php 
  if(isset($_SESSION['admin']) && $_SESSION['admin'] == "ADMIN"){
   echo " <div class='box'>";
   echo "<a style='text-decoration: none;' href='signup.php'>";
   echo "<img src='./images/register.png' class='dashboardIcons' alt='Attendance'>";
   echo "<p> Register a Teacher!</p>";
   echo "</a></div>";
  }?>
</div>
   </body>
   
</html>