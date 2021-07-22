
<?php

   include('config.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $_SESSION['date'] = $_POST['date'];
      $_SESSION['subject'] = $_POST['subject'];
      $_SESSION['year'] = $_POST['regdno'];
      $_SESSION['period'] = $_POST['period'];
      $_SESSION['studentList'] = array();
      $year = $_SESSION['year'];
      
      $sql = "SELECT name,regdno FROM students WHERE regdno like '$year%'";
      $result = $db->query($sql);
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if ($result->num_rows > 0) {
       echo "<html><head><title>Attendance</title><link rel='stylesheet' href='./css/dashboard.css'></head><body>";
       echo file_get_contents("header.php");
       echo "<form action='attendance-be.php' method='POST'>";
       echo "<table>";
       echo "<tr>";

       echo "<th>Slno</th>";
       echo "<th>Regdno</th>";
       echo "<th>Name</th>";
       echo "<th>Present/Absent</th>";
       echo "</tr>";
       $i=0;

  // output data of each row
  while($row = $result->fetch_assoc()) {
    $tempreg = $row["regdno"];
    array_push($_SESSION['studentList'], $tempreg);
   echo "<tr>";
   echo "<date>";
   echo "<td>";
   $i = $i + 1;
   echo $i;
   echo "</td>";
   echo "<td>";
   echo $tempreg;
   echo "</td>";
   echo "<td>";
   echo $row["name"];
   echo "</td>";
   echo "<td> <input name= '$tempreg' type='checkbox' value='present'></td>";
   echo "</tr>";
  }
     echo "<tr>";
   echo "<td></td>";
   echo "<td></td>";
   echo "<td></td>";
   echo "<td><input type='submit' value='submit'/></td";
   echo "</tr>";
  echo "</table></form></body></html>";
} else {
  echo "0 results";
}
   }
?>
