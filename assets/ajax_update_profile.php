<?php
include ('globalvars.php');
$link = mysqli_connect($sqlhostname, $sqlusername , $sqlpassword, 'mm_users');
if ($link) {
	if(isset($_GET['gradelevel']))
	{
		$firstname = trim($_GET["firstname"]);
		$lastname = trim($_GET["lastname"]);
		$subject = trim($_GET["subject"]);
		$town = trim($_GET["town"]);
		$school = trim($_GET["school"]);
		$nameprefix = $_GET["nameprefix"];
		$userid = $_GET["userid"];
		$state = $_GET["state"];
		$gradelevel = $_GET["gradelevel"];

		$query1 = "UPDATE details SET firstname='$firstname', lastname='$lastname', prefix='$nameprefix', state='$state', grade_level='$gradelevel', subject='$subject' WHERE id='$userid'";
		
		if (mysqli_query($link, $query1)) {

			$query2 = "UPDATE profile SET school='$school', town='$town' WHERE id='$userid'";
		
			if (mysqli_query($link, $query2)) {
		
				echo '1';
		
			} else {
		
				echo '2';
			
			}
		
		} else {
		
			echo '2';
			
		}
	} else {
		echo '3';
	}
} else {
	echo '4';
}
?>