<?php
		echo '<div class="header">
				<div class="sitetitle">
					<div class="sitetitle_logo">
						<a href="index.php">
							<img src="images/lillog.png">
						</a>
					</div>
					<div class="sitetitle_text">
						<a href="index.php">
							<span class="text_strong">Mind</span>Manor
						</a>
					</div>
					<div class="sitetitle_login">';
						if ($_SESSION["username"]){
							echo '<span class="sitetitle_personicon">A</span>';
							echo $_SESSION["username"];
						}
					echo '</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="headrunner layer4">
				<div class="headrunner_loggedin">
					<a href="something">About</a>&nbsp;&nbsp;<span class="text_black">|</span>&nbsp;&nbsp;<a href="something">Blog</a>';
					if ($_SESSION["username"]){
						echo '&nbsp;&nbsp;<span class="text_black">|</span>&nbsp;&nbsp;<a href="logout.php">Log Out</a>';
					}
				echo '</div>
				<div class="clear">
				</div>
			</div>';
?>