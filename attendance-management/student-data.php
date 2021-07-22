
<?php
  include('session.php');

   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      $name = $_POST['name'];
      $regdno = $_POST['regdno'];
      $phone = $_POST['phone'];

      $sql = "INSERT INTO STUDENTS VALUES('$name','$regdno','$phone')";
      
  // If result matched $myusername and $mypassword, table row must be 1 row
    
      if ($db->query($sql) === TRUE) {
$success = "User Created Successfully";
         
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
        <link href="./css/login.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
            <div class="session">
              <div class="left">
                <?xml version="1.0" encoding="UTF-8"?>
                
              </div>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="log-in" autocomplete="off"> 
                <h4><span>Sign Student Up:</span></h4>

               <div id="message" style="color:green;text-align:center"><?php if(isset($success)){ echo $success; } ?></div>
                <div class="floating-label">
                  <input placeholder="name" type="text" name="name" id="name" autocomplete="off">
                  <label for="name">Name:</label>
                </div>
                <div class="floating-label">
                  <input placeholder="redgno" type="varchar" name="regdno" id="regdno" autocomplete="off">
                  <label for="name">Regdno:</label>
                </div>
                                
                <div class="floating-label">
                  <input placeholder="phone" type="phone" name="phone" id="phone" autocomplete="off">
                  <label for="phone">Phone:</label>
                </div>
                <button type="submit">Sign Up</button>
              </form>
            </div>
         
    </body>
</html>