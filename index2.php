<?php session_start(); ?>
<?php
    date_default_timezone_set("America/New_York");
    include ('assets/globalvars.php');
    echo '
<html>
	<head>';
    include ('style.css');
    $page = $_GET['p'];
    echo '
		<title>
			Lucid
		</title>
	</head>
	<body>
		<center>';
		
			include ('assets/header.php');

		echo '<div class="sitebody">';

		
			if ($_SESSION["username"]){
				include ('main.php');
			} else {
				include ('landing.php');
			}
				

			echo '
			</div>
		</center>';
		echo '<script src="assets/jquery-1.9.1.min.js"></script>';
	echo '</body>
</html>';

			
?>
