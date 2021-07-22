<header>
	  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

	  <script>
	  	  $( function() {
    $( "#datepicker" ).datepicker();
  } );
$(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
	<div class="headerItems">
		<img src="./images/logo.png" style="widtn:50px;height: 50px;margin-left:30px;" alt="logo">
<h2 style="float:left;margin:0px;margin-left:10px;color:white;">Attendance Management Portal</h2>
</div>
<div class="lastItems">

	<a href="logout.php"><img src="./images/logout.png"  data-toggle="tooltip" data-placement="bottom" title="LogOut" style="widtn:30px;height: 30px;margin-left:30px;" alt="logout"></a>

	</div>
</header>