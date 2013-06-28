<?php
include ('globalvars.php');
$link = mysqli_connect($sqlhostname, $sqlusername , $sqlpassword, 'mm_classes');
if ($link) {
	if(isset($_GET['classurl']))//If a username has been submitted
	{
		$url = mysqli_real_escape_string($link, $_GET['classurl']);//Some clean up :)
		$userid = $_GET['userid'];

		$check_for_username = mysqli_query($link, "SELECT url FROM main WHERE url='$url' AND teachid='$userid'");
		//Query to check if username is available or not

		if(mysqli_num_rows($check_for_username)){
			echo '2';//If there is a record match in the Database - Not Available
		} else {
			if (preg_match('/^[A-Za-z][A-Za-z0-9]*(?:_[A-Za-z0-9]+)*$/', $url))
			{
				echo '0';//No Record Found - Username is available
			} else {
				echo '1';//Uses invalid characters
			}
		} 
	}
}
?>