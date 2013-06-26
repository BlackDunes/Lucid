<?php

		
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
				</div>';
			
?>
