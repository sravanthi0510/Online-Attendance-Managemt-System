<?php

   include('config.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    $students = $_SESSION['studentList'];
   	for($i = 0; $i<count($students); $i++) {
   		$stud = $students[$i];
   		if(!isset($_POST[$stud])){
   			$attend = 'absent';
   		}else{
   			   		$attend = $_POST[$stud];
   		}
   		$sessiondate = $_SESSION['date'];
   		$period = $_SESSION['period'];
   		$subject = $_SESSION['subject'];
   		$year = $_SESSION['year'];
   		$email = $_SESSION['email'];
   		$date = date('Y-m-d', strtotime(str_replace('-', '/', $sessiondate)));
    $sql="INSERT INTO attendance (regdno,date,period,year,subject,status,email) VALUES ('$stud','$date','$period','$year','$subject','$attend','$email')";

    if ($db->query($sql) === TRUE) {
     echo "Updated attendance for";
     echo $stud;
     echo $attend."<br/>";
    }

  }
}
      ?>