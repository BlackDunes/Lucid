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
			echo '
					<div class="gateway_holder">
						<div class="gateway_tagline">
							Construct interactive online activities.<br />
							<span class="gateway_undertag">Simple, elegant, creative.</span>
						</div>
						<div class="gateway_left">
							<div class="gateway_bigbutton" id="signupbutton">
								Sign Up
							</div>
						</div>
						<div class="gateway_right">
							<div class="gateway_bigbutton" id="loginbutton">
								Log In
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>


				<div class="wholepage_formholder popup" id="regpop">
					<div class="sitebody_sectionheader nobottommargin">
						Register
					</div>
					<div class="clear">
					</div>
					<div class="sitebody_sectioncaption">
						Sign up and begin creating interactive online activities for your students.
					</div>
					<div class="clear">
					</div>

					<form class="basicform">

						<div class="basicfield_label">First Name:</div>
						<input id="firstname" class="basicfield_input" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_label">Last Name:</div>
						<input id="lastname" class="basicfield_input" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_label">E-mail:</div>
						<input id="email" class="basicfield_input" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_label">Password:</div>
						<input type="password" id="password" class="basicfield_input" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_label">Confirm Password:</div>
						<input type="password" id="email" class="basicfield_input" minlength="3" />
						<div class="clear">
						</div>

						<input type="submit" id="submit" class="basicfield_submit" value="Sign Me Up"/>
						<div class="clear">
						</div>

					</form>
				</div>


				<div class="wholepage_formholder popup" id="loginpop">
					<div class="sitebody_sectionheader">
						Log In
					</div>
					<div class="clear">
					</div>

					<form class="basicform">

						<div class="basicfield_label">E-Mail:</div>
						<input id="email" class="basicfield_input" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_label">Password:</div>
						<input type="password" id="password" class="basicfield_input" minlength="3" />
						<div class="clear">
						</div>

						<input type="submit" id="submit" class="basicfield_submit" value="Log In"/>
						<div class="clear">
						</div>

					</form>
				</div>



				';
				}

			echo '
			</div>
		</center>';
		echo '<script src="assets/jquery-1.9.1.min.js"></script>
		<script src="assets/jquery.bpopup.min.js"></script>
		<script src="assets/scripts.js"></script>';
	echo '</body>
</html>';

			
?>
