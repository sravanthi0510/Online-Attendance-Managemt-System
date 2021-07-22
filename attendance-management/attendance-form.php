<?php
   include('session.php');
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Attendance Form</title>
        <link rel="stylesheet" href="./css/dashboard.css"/>

</head>
<body>
 <script>

  </script>
	<?php 
	include('header.php') ?>


<div class="attendanceForm">
	
	 <form action="attendance-form-be.php" method="post" class="log-in" autocomplete="off"> 
 <table>
 	<tr>
 		<td>Date:</td>
 		<td>	<input name ="date" type="text" id="datepicker"/></td>
 	</tr>
 	<tr>
 		<td>
 			Year:
 		</td>
 		<td>
 			<select name="regdno">
	<option value="18FE">18FE</option>
		<option value="19FE">19FE</option>
			<option value="20FE">20FE</option>
				<option value="21FE">21FE</option>

	</select>
 		</td>
 	</tr>
 	<tr>
 		<td>
 			Subject:
 		</td>
 		<td>
 			<select name="subject">
	<option value="Y18">OS</option>
		<option value="Y19">Networking</option>
			<option value="Y18">C</option>
				<option value="Y18">C++</option>

	</select>
 		</td>
 	</tr>
 	<tr>
 		<td>
 			Period:
 		</td>
 		<td>
 			<select name="period">    
 				<option value="1">1</option>
 				<option value="2">2</option>
 				<option value="3">3</option>
 				<option value="4">4</option>
 				<option value="5">5</option>
 				<option value="6">6</option>
 			</select>
 		</td>
 	</tr>
 </table>
 <input type="submit">
</form>

 </div>
 
</body>
</html>