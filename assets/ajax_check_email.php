<?php
$ourregex = '/^[_A-Za-z0-9-]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,3})$/';
include ('globalvars.php');
$link = mysqli_connect($sqlhostname, $sqlusername , $sqlpassword, 'mm_users');
if ($link) {
	if(isset($_GET['email']))//If a username has been submitted
	{
		$email = mysqli_real_escape_string($link, $_GET['email']);//Some clean up :)

		$check_for_email = mysqli_query($link, "SELECT email FROM main WHERE email='$email'");
		//Query to check if username is available or not

		if(mysqli_num_rows($check_for_email)){
			echo '2';//If there is a record match in the Database - Not Available
		} else {
			if (preg_match($ourregex, $email))
			{
				echo '0';//No Record Found - Username is available
			} else {
				echo '1';//Uses invalid characters
			}
		} 
	}
}
?>