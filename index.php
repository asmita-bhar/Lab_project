<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Shopping Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#e0f2f1;">
	<?php
		$conn = mysqli_connect("localhost","root","","abc") or die('Error connecting to MySQL server.');
		$result = mysqli_query($conn, "SELECT * from userdb");
		
		#echo $random;
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
	<section id="search">
		<div class="search-container">
			<form action="/action_page.php">
			    <br>
			    <input type="text" placeholder="Search.." name="search" width="48" height="48">
			    <button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</section>
	<section id="categories">
		<div class="container">
			<div class="row">
				<br>
				<h3>Categories : </h3>
				<div class="col-sm-4">
					<center>
						<a href="#">
							<img src="images/books.png">
						</a>
						<p>Books</p>
					</center>
				</div>
				<div class="col-sm-4">
					<center>
						<a href="#">
							<img src="images/elec.png">
						</a>
						<p>Electronics</p>
					</center>
				</div>
				<div class="col-sm-4">
					<center>
						<a href="#">
							<img src="images/books.png">
						</a>
						<p>Accessories</p>
					</center>
				</div>
				
			</div>
			<div class="row">
				<br>
				<br>
				<br>
				<div class="col-sm-4">
					<center>
						<a href="#">
							<img src="images/books.png">
						</a>
						<p>Bedding</p>
					</center>
				</div>
				<div class="col-sm-4">
					<center>
						<a href="#">
							<img src="images/elec.png">
						</a>
						<p>Electronics</p>
					</center>
				</div>
				<div class="col-sm-4">
					<center>
						<a href="#">
							<img src="images/books.png">
						</a>
					</center>
				</div>
			</div>
			<div class="row">
				<br>
				<br>
				<br>
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