<?php

session_start();
$conn = mysqli_connect("localhost","root","","abc") or die('Error connecting to MySQL server.');


if ($_SESSION["loggedin"]=="1") 
{
	session_unset();
	session_destroy();
	#echo "string";
	#$_SESSION["loggedin"]=="0";
	?>

	<script type="text/javascript">
		if(confirm("Successfully logged out..")){
			window.location.href = "index.php";
		}	
	</script>
		
	<?php
	#header('Location:index.php');
}

?>	
