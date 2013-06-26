<?php session_start(); ?>
<?php
include ('globalvars.php');
$link = mysqli_connect($sqlhostname, $sqlusername , $sqlpassword, 'mm_users');
if ($link) {
	if(isset($_GET['username']))//If a username has been submitted
	{

		$username = trim($_GET["username"]);
		$firstname = trim($_GET["firstname"]);
		$lastname = trim($_GET["lastname"]);
		$state = trim($_GET["state"]);
		$gradelevel = trim($_GET["gradelevel"]);

		$query1 = mysqli_query($link, 'SELECT * FROM main WHERE username="'. $username .'" ');
		$db_array = mysqli_fetch_array($query1,MYSQLI_ASSOC);
		if(isset($db_array["username"])) {
			$userid = $db_array["id"];
		}

		$query = "INSERT INTO details VALUES ('$userid', '$firstname', '$lastname', '', '', '$state', '$gradelevel', '')";
		
		if (mysqli_query($link, $query)) {

			$query2 = "INSERT INTO profile VALUES ('$userid', 'default', '', '')";

			if (mysqli_query($link, $query2)) {

				$_SESSION["username"] = $username;
				$_SESSION["id"] = $userid;

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