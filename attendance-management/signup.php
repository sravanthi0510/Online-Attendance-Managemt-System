
<?php
   include('config.php');

   
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
$success = "User Created Successfully";

         }
} else {
  $success= "Error: " . $sql . "<br>" . $db->error;
}

   }
?>
<html>
    <head>
        <title>
            SignUp
        </title>
        <link href="css/login.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <body>
            <div class="session">
              <div class="left">
                <?xml version="1.0" encoding="UTF-8"?>
                
              </div>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="log-in" autocomplete="off"> 
                <h4><span>Sign User Up:</span></h4>

               <div id="message" style="color:green;align:center;text-align:center"><?php if(isset($success)){ echo $success; } ?></div>
                <div class="floating-label">
                  <input placeholder="Email" type="email" name="email" id="email" autocomplete="off">
                  <label for="email">Email:</label>
                </div>
                                <div class="floating-label">
                  <input placeholder="name" type="name" name="name" id="name" autocomplete="off">
                  <label for="name">Name:</label>
                </div>
                <div class="floating-label">
                  <input placeholder="phone" type="phone" name="phone" id="phone" autocomplete="off">
                  <label for="phone">Phone:</label>
                </div>
                                               <div class="floating-label">
                  <input placeholder="subjects" type="subjects" name="subjects" id="subjects" autocomplete="off">
                  <label for="name">Subjects:</label>
                </div>
                <div class="floating-label">
                  <input placeholder="Password" type="password" name="password" id="password" autocomplete="off">
                  <label for="password">Password:</label>
                </div>
                <div class="floating-label">
                  <select style="width:240px;padding:10px;margin-left:40px;" name="role" id="role">
                    <option>Select Role</option>
         <option value="user">User</option>
         <option value ="admin">Admin</option>
       </select>
                </div>
                <button type="submit">Sign Up</button>
              </form>
            </div>
          </body>
         
    </body>
</html>