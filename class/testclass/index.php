<?php session_start(); ?>
<?php
    date_default_timezone_set("America/New_York");
    include ('assets/globalvars.php');
    echo '
<html>
	<head>';
    include ('style_def.css');
    echo '
		<title>
			American Literature (Lucid)
		</title>
	</head>
	<body>
		<center>';
		
			include ('assets/header.php');

		echo '<div class="sitebody">
				<div class="classtitle">
					American Literature
					<br />
					<span class="classtitle_subtext">
						Class Activities
					</span>
				</div>
				<div class="nav">
					<div class="login_holder">
						Username:<br />
						<input class="side_input" type="text" /><br />
						Password:<br />
						<input class="side_input" type="password" /><br />
						<input class="basicfield_submit" type="submit" value="Log In"><br />
					</div>
				</div>
				<div class="content">

					<div class="sitebody_blockholder">

						<div class="sitebody_itemblock">
							<div class="itemblock_title">
								Moby Dick Discussion
							</div>
							<div class="itemblock_duedate">
								Next due date: <span class="duedate_stress">Mon. 4/14/14</span>
							</div>
							<div class="itemblock_image" style="background-image: url(images/default2.jpg);">
							</div>
						</div>

						<div class="sitebody_itemblock">
							<div class="itemblock_title">
								Article Share
							</div>
							<div class="itemblock_duedate">
								Next due date: <span class="duedate_stress">Wed. 4/16/14</span>
							</div>
							<div class="itemblock_image" style="background-image: url(images/default.jpg);">
							</div>
						</div>

					</div>



				</div>
						';

		

			echo '
			</div>
		</center>
	</body>
</html>';
			
?>
