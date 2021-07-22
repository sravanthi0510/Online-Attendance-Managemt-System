<?php
   include('config.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST['email'];
      $password = $_POST['password']; 
      $name = $_POST['name'];
      $role = $_POST['role'];
      $subjects = $_POST['subjects'];
      $phone = $_POST['phone'];

      $sql = "INSERT INTO USERS VALUES('$name','$email','$password','$phone','$role')";
      
  // If result matched $myusername and $mypassword, table row must be 1 row
    
      if ($db->query($sql) === TRUE) {
         $subSql = "INSERT INTO SUBJECTS values('$email','$subjects','1')";
         if($db->query($subSql) === TRUE) {
echo "New record created successfully";
         }
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}

   }
?>