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
		
			include ('assets/nav.php');

		echo '<div class="sitebody_contentright">';

		if ($page) {
            
            if (file_exists('pages/loggedin/'.$page.'.php')) {
              	echo "";
              	include('pages/loggedin/'.$page.'.php');
            } else {
             	echo "Page not found.";
            }
        } else { 
			include('pages/loggedin/dash.php');
		}

			echo '</div>
				<div class="clear">
				</div>
			</div>
		</center>
	</body>
</html>';
			
?>
