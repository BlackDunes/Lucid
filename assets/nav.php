<?php
				echo '<div class="sitebody_navleft">
					<div class="navleft_itembar';
					if (empty($page)) {
							echo ' navleft_open';
						}
					echo '">
							<a href="main.php">
								Dashboard
							</a>
					</div>
					<div class="navleft_itembar';
					if ($page == 'activities') {
							echo ' navleft_open';
						}
					echo '">
							<a href="main.php?p=activities">
								Activities
							</a>
					</div>
					<div class="navleft_itembar';
					if ($page == 'classes') {
							echo ' navleft_open';
						}
					echo '">
							<a href="main.php?p=classes">
								Classes
							</a>
					</div>
					<div class="navleft_itembar';
					if ($page == 'settings') {
							echo ' navleft_open';
						}
					echo '">
							<a href="main.php?p=settings">
								Settings
							</a>
					</div>
				</div>';
?>