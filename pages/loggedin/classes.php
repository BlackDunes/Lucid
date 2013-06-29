<?php
	$link = mysqli_connect($sqlhostname, $sqlusername , $sqlpassword, 'mm_classes');
	$userid = $_SESSION["id"];
	if ($link) {
		echo '<div class="sitebody_sectionheader nobottommargin">
						Active Classes
					</div>
					<div class="sectionheader_addnew">
						<a href="index.php?p=createclass">
							Create
						</a>
					</div>
					<div class="clear">
					</div>
					<div class="sitebody_sectioncaption">
						Classes that are now meeting and have active activities
					</div>
					<div class="clear">
					</div>';

	$active_classes = mysqli_query($link, "SELECT * FROM main WHERE teachid='$userid' AND active = 1 ORDER BY name ASC");
	while($active = mysqli_fetch_array($active_classes, MYSQLI_ASSOC)) {

					echo'<div class="classrow">
						<div class="classrow_name">
							<a href="index.php?p=class&id=' . $active['id'] . '">
								' . $active['name'] . '
							</a><br />
							<span class="class_minidetails">
								<a href="class/testclass/" target="_BLANK">
									Homepage
								</a>
								&nbsp;&#8226;&nbsp;
								<a href="test">
									Edit
								</a>
							</span>
						</div>
						<div class="classrow_number">
							<span class="classrow_icon">A</span>23
						</div>
						<div class="clear">
						</div>
					</div>';
	}


					
					echo'<div class="sitebody_sectionheader addtopmargin">
						Inactive Classes
					</div>
					<div class="clear">
					</div>';

	$inactive_classes = mysqli_query($link, "SELECT * FROM main WHERE teachid='$userid' AND active = 0 ORDER BY name ASC");
	while($inactive = mysqli_fetch_array($inactive_classes, MYSQLI_ASSOC)) {
					echo '<div class="classrow_inactive">
						<div class="classrow_name_inactive">
							' . $inactive['name'] . '<br />
						</div>
						<div class="classrow_number_inactive">
							<span class="classrow_icon_inactive">A</span>13
						</div>
						<div class="clear">
						</div>
					</div>';
		}
	}
?>