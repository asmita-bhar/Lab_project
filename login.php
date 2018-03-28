<?php



$conn = mysqli_connect("localhost","root","","abc") or die('Error connecting to MySQL server.');

$em="a";
$pa="a";


if (isset($_POST["email"])){
 	$em = $_POST["email"];
 } 

 if (isset($_POST["psw"])){
 	$pa = $_POST["psw"];
 }

 
 $query = mysqli_query($conn,"SELECT Email from userdb where Email = '$em'");

 if(mysqli_num_rows($query) ==0)
 {
 	#echo "User doesn't exists";
 	?>
 	<script type="text/javascript">
		if(confirm("Invalid ID ..")){
			window.location.href = "login.html";
		}	
	</script>

 	<?php
 	#include 'login.html';
 }
 
 $query1 = mysqli_query($conn,"SELECT Name from userdb where Email = '$em' and Password = '$pa'");

 if(mysqli_num_rows($query1) == 0)
 {
 	#echo "Incorrect Password";
 	?>
 	<script type="text/javascript">
		if(confirm("Incorrect Password..")){
			window.location.href = "login.html";
		}	
	</script>

 	<?php
 	include 'login.html';
 }
 else 
 {
 	global $em;
 	?>
	<script type="text/javascript">
		if(confirm("Successfully Logged In..")){
			window.location.href = "index.php";
		}
	</script>
	<?php
	session_start();
 	$result = mysqli_fetch_assoc($query1);
 	#echo $result["Name"];
 	$_SESSION["Name"] = $result["Name"];
 	$_SESSION["Email"]=$em;
 	$_SESSION["loggedin"]="1";

 	
 }

 ?>