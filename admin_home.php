<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin panel</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
		<img src="img/1.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > School Information</h3><br>
					<img src="img/home.jpg" class="imgs">
					<p class="para">
						<h1>WELCOME </h1>
					</p>
					
					<p class="para">
						<h1> ADMIN</h1>
					</p>
				</div>
				
			</div>
			
	
		<?php include"footer.php";?>
	</body>
	<html>
 <head>
   <title>School Manegment </title>
   </head>
   <body>
   <marquee>Today is Friday  </marquee>
   <marquee bgcolor="red">School off day</marquee>
  
   </body>
   </html>

</html>