
<?php 

	session_destroy();
	echo "<script> alert('You're already logout'); </script>";
	echo "<script> location='login.php'; </script>";

?>
