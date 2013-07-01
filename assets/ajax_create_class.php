<?php
include ('globalvars.php');
$link = mysqli_connect($sqlhostname, $sqlusername , $sqlpassword, 'mm_classes');
if ($link) {
	if(isset($_GET['classname']))//If a username has been submitted
	{

		$classname = trim($_GET["classname"]);
		$classname = addslashes($classname);
		$subject = trim($_GET["subject"]);
		$subject = addslashes($subject);
		$gradelevel = trim($_GET["gradelevel"]);
		$classsiteurl = strtolower($_GET["classsiteurl"]);
		$classsiteurl = trim($classsiteurl);
		$active = $_GET["active"];
		$userid = $_GET["userid"];
		$makedate = date('Y-m-d');










		$table_name = 'main';
		$query = "INSERT INTO $table_name VALUES ('', '$classname', '$userid', '$subject', '$gradelevel', '$classsiteurl', '$active', '$makedate')";
		
		if (mysqli_query($link, $query)) {
		
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
?>