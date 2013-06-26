<?php session_start(); ?>
<?php
include ('globalvars.php');
$link = mysqli_connect($sqlhostname, $sqlusername , $sqlpassword, 'mm_users');
if ($link)
{
	if(isset($_GET['username']))//If a username has been submitted
	{

		$username = htmlentities($_GET['username']);

		$query1 = mysqli_query($link, 'SELECT * FROM main WHERE username="'. $username .'" ');
		$db_array = mysqli_fetch_array($query1,MYSQLI_ASSOC);
		if(isset($db_array["username"])) {

			if(isset($_GET['password']))//If a username has been submitted
			{

				$password = $_GET['password'];
				$thesalt = $db_array["salt"];
				$secure = $password . $thesalt;
				$passcode = hash(md5 , $secure);

				if($passcode == $db_array["password"]) {

					$username = html_entity_decode($db_array["username"]);
					$_SESSION["username"] = $username;
					$_SESSION["id"] = $db_array["id"];
					$_SESSION["status"] = $db_array["status"];
					echo '1';
				} else {
					echo '2';
				}
			} else {
				echo '3';
			}
		} else {
			echo '4';
		}
		
	} else {
		echo '5';
	}
} else {
	echo '6';
}
?>