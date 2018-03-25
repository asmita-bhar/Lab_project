<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<style type="text/css">

	.header {
	    background-color: #b9f6ca;
	    /*margin-left: -8px;
	    margin-right: -8px;*/
	    margin-top: -8px;
	}

	/* Add a black background color to the top navigation */
	.topnav {
	    background-color: #004d40;
	    overflow: hidden;
	    /*margin-left: -8px;
	    margin-right: -8px;*/
	}

	/* Style the links inside the navigation bar */
	.topnav ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #333;
	    position: -webkit-sticky; /* Safari */
	    position: sticky;
	    top: 0;
	    font-size: 17px;
	}

	.topnav li {
	    float: left;
	}
	/* Change the color of links on hover */
	.topnav li a {
	      display: block;
	      color: white;
	      text-align: center;
	      padding: 14px 16px;
	      text-decoration: none;
	}

	/* Change the color of links on hover */
	.topnav li a:hover {
	    background-color: #111;
	}

	/* Add an active class to highlight the current page */
	.active {
	    background-color: #009688;
	    color: white;
	}

	/* Hide the link that should open and close the topnav on small screens */
	.topnav .icon {
	    display: none;
	}
	.footer-bottom {
	  background: #333;
	  padding-top: 15px;
	}

	.footer-bottom p {
	  color: #e1f5fe;
	  font-family: 'Roboto', sans-serif;
	  font-weight: 300;
	  margin-left: 15px;
	}

	.footer-bottom p span a {
	  color: #FE980F;
	  font-style: italic;
	  text-decoration: underline;
	}

	#team-mates {
		background-color: #e0f2f1;
	}
</style>
<body>
	<?php
		$conn = mysqli_connect("localhost","root","","abc") or die('Error connecting to MySQL server.');
		$result = mysqli_query($conn, "SELECT * from userdb");
		#$random=$_SESSION["Name"];
	?>
	<header class="header" id="head">
		<br>
		<br>
		<br>
	</header>
	<section id="nav">
		<div class="topnav" id="myTopnav">
			<ul>
				<li><a class="active" href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li style="float:right"><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
				
				<?php 

				if(!isset($_SESSION["loggedin"])) 
				{ ?>
					<li style="float:right"><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li style="float:right"><a href="register.html"><span class="glyphicon glyphicon-edit"></span> Register</a></li>
				 
				<?php }
				else
				{
				 ?>
					<li style="float:right"><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					<li style="float:right"><a href="profile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
				<?php
				} ?>
			</ul>
		</div>
	</section>
	<section id="team-mates">
		<div class="container-fluid bg-3 text-center">
			<center>
				<br><br><br>
				<h2>Our Team</h2>
				<br><br><br>
			</center>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text-center">
					<img src="images/profile.gif" height="200px" width="200px" class="img-circle" alt="Asmita Bhar">
					<h3>Asmita Bhar</h3>
					<h4><a><span class="glyphicon glyphicon-earphone"></span>  8583079475</a></h4>
					<h4><a href="mailto:asmita.bhar@gmail.com"><span class="glyphicon glyphicon-envelope"></span>  asmita.bhar@gmail.com</a></h4>
					
				</div>
				<div class="col-sm-4 text-center">
					<img src="images/profile.gif" height="200px" width="200px" class="img-circle" alt="Damini Kumari">
					<h3>Damini Kumari</h3>
					<h4><a><span class="glyphicon glyphicon-earphone"></span>  7602357061</a></h4>
					<h4><a href="mailto:asmita.bhar@gmail.com"><span class="glyphicon glyphicon-envelope"></span>  dkdamini96@gmail.com</a></h4>
					
				</div>
				<div class="col-sm-4 text-center">
					<img src="images/profile.gif" height="200px" width="200px" class="img-circle" alt="Disha Mandal">
					<h3>Disha Mandal</h3>
					<h4><a><span class="glyphicon glyphicon-earphone"></span>  7076883746</a></h4>
					<h4><a href="mailto:asmita.bhar@gmail.com"><span class="glyphicon glyphicon-envelope"></span>  ddishamndl95@gmail.com</a></h4>
					<br><br><br><br><br>	
				</div>
			</div>
		</div>
	</section>
	<footer id="footer">
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright &copy; 2018. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="#">Group 18</a></span></p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>