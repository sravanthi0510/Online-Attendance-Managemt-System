<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['email'];
   
   $ses_sql = mysqli_query($db,"select role,name from users where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['name'];
   $_SESSION['admin'] = $row['role'];
   
   if(!isset($_SESSION['email'])){
      header("location:login.php");
      die();
   }
?>