<?php

$conn = mysqli_connect("localhost","root","","abc") or die('Error connecting to MySQL server.');

$n="a";
$em="a";
$pa="a";
$co="a";

if (isset($_POST["name"])){
 	$n = $_POST["name"];
 }

if (isset($_POST["email"])){
 	$em = $_POST["email"];
 } 

 if (isset($_POST["psw"])){
 	$pa = $_POST["psw"];
 }

 if (isset($_POST["psw-repeat"])){
 	$co = $_POST["psw-repeat"];
 }

 #echo $pa;
 $query = mysqli_query($conn,"SELECT Email from userdb where Email = '$em'");

 if(mysqli_num_rows($query)!=0)
 {
 	#echo "User already exists";
 	?>
 	<script type="text/javascript">
		alert("User already exists..");	
	</script>

 	<?php
 	include 'register.html';
 }
 else if ($pa !== $co) {
 	#echo "Passwords don't match";
 	?>
 	<script type="text/javascript">
		alert("Passwords don't match..");	
	</script>

 	<?php
 	include 'register.html';
 }
 else
 {
 	$statement=mysqli_query($conn, "INSERT INTO userdb(Name, Email, Password, Confirm) VALUES('$n','$em','$pa','$co')");
 	if ($statement) {
 		#echo "You have been successfully registered";
 		?>
	 	<script type="text/javascript">
			alert("You have been successfully registered..");	
		</script>

	 	<?php
 		include 'home.html';
 	}
 	else {
 		#echo "Sorry for your inconvenience";
 		?>
	 	<script type="text/javascript">
			alert("Sorry for your inconvenience..");	
		</script>

	 	<?php
 	}
 }

 ?>