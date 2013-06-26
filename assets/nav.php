<?php
				echo '<div class="sitebody_navleft">
					<div class="navleft_itembar';
					if (empty($page)) {
							echo ' navleft_open';
						}
					echo '">
							<a href="index.php">
								Dashboard
							</a>
					</div>
					<div class="navleft_itembar';
					if ($page == 'activities') {
							echo ' navleft_open';
						}
					echo '">
							<a href="index.php?p=activities">
								Activities
							</a>
					</div>
					<div class="navleft_itembar';
					if ($page == 'classes') {
							echo ' navleft_open';
						}
					echo '">
							<a href="index.php?p=classes">
								Classes
							</a>
					</div>
					<div class="navleft_itembar';
					if ($page == 'settings') {
							echo ' navleft_open';
						}
					echo '">
							<a href="index.php?p=settings">
								Settings
							</a>
					</div>
				</div>';
?>