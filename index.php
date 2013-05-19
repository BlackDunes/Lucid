<?php session_start(); ?>
<?php
    date_default_timezone_set("America/New_York");
    include ('assets/globalvars.php');
    echo '
<html>
	<head>';
    include ('style.css');
    echo '
		<title>
			Lucid
		</title>
	</head>
	<body>
		<center>';
		
			include ('assets/header.php');

		echo '<div class="sitebody">';

		if ($_GET['p']) {
            $page = $_GET['p'];
            if (file_exists('pages/'.$page.'.php')) {
              	echo "";
              	include('pages/'.$page.'.php');
            } else {
             	echo "Page not found.";
            }
        } else { 
			echo '<div class="top_background">
					<div class="gateway_holder">
						<div class="gateway_circleimage">
						</div>
						<div class="gateway_tagline">
							Create collaborative activities for your students.<br />
							<span class="gateway_undertag">Simple, elegant, creative.</span>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="gateway_registerside">
					<span class="headertext">
						<a href="index.php?p=register">Register</a>
					</span>
				</div>
				<div class="gateway_loginside">
					<span class="headertext">
						Log In
					</span>
				</div>
				<div class="clear">
				</div>';
				}

			echo '
			</div>
		</center>
	</body>
</html>';
			
?>
