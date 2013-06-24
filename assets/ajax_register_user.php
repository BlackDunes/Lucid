<?php
include ('globalvars.php');
$link = mysqli_connect($sqlhostname, $sqlusername , $sqlpassword, 'mm_users');
if ($link) {
	if(isset($_GET['username']))//If a username has been submitted
	{
		function rand_string( $length ) {
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	
			$size = strlen( $chars );
			for( $i = 0; $i < $length; $i++ ) {
				$str .= $chars[ rand( 0, $size - 1 ) ];
			}
		return $str;
		}

		$username = trim($_GET["username"]);
		$email = trim($_GET["email"]);
		$password = trim($_GET["password"]);
		$regdate = date('Y-m-d');

		$salt = rand_string( 30 );;
		$secure = $password . $salt;
		$passcode = hash(md5 , $secure);

		$table_name = 'main';
		$query = "INSERT INTO $table_name VALUES ('', '$username', '$passcode', '$salt', '$email', '$regdate', '1')";
		
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