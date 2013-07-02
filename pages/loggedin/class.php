<?php
	$link = mysqli_connect($sqlhostname, $sqlusername , $sqlpassword, 'mm_classes');
	$userid = $_SESSION["id"];
	$unitid = $_GET["id"];
	$username_lower = strtolower($_SESSION["username"]);
	if ($link) {
		$query = mysqli_query($link, "SELECT * FROM main WHERE id='$unitid'");
		$thisclass = mysqli_fetch_array($query, MYSQLI_ASSOC);
		if ($thisclass["id"]) {
		if ($userid == $thisclass["teachid"]) {

		$originalDate = $thisclass["datecreated"];
		$madedate = date("F j, Y", strtotime($originalDate));

	echo '<div class="sitebody_sectionheader nobottommargin">
						<span class="thintext">Class:</span> ';
						echo $thisclass["name"];
					echo '</div>
					<div class="sectionheader_addnew">
						<a href="test">
							Edit
						</a>
					</div>
					<div class="clear">
					</div>
					<div class="sectionheader_caption">http://';
					echo $username_lower;
								echo '.mindmanor.com/';
								echo $thisclass["url"];
								echo'
					</div>
					<div class="clear"></div>
					<div class="class_rightpanel">

						<div class="class_infopanel">
							<div class="class_infopanel_body">
								<div class="class_infopanel_leftsplit">
									<span class="class_infopanel_biggertext">View</span><br />Webpage
								</div>
								<div class="class_infopanel_rightsplit">
									<span class="class_infopanel_biggertext">Edit</span><br />Webpage
								</div>
								<div class="clear">
								</div>
							</div>
						</div>

						<div class="class_infopanel">
							<div class="class_infopanel_title">
								Class Information
							</div>
							<div class="class_infopanel_body">

								<div class="class_infopanel_info1">
									Status:
								</div>
								<div class="class_infopanel_info2">';
								if ($thisclass["active"] == 1) {
									echo 'Active';
								} else {
									echo 'Inactive';
								}	
								echo '</div>
								<div class="clear"></div>
								<div class="class_infopanel_info1">
									Subject:
								</div>
								<div class="class_infopanel_info2">
									'. $thisclass["subject"] .'
								</div>
								<div class="clear"></div>

								<div class="class_infopanel_info1">
									Grade:
								</div>
								<div class="class_infopanel_info2">
									'. $thisclass["gradelevel"] .'
								</div>
								<div class="clear"></div>

								<div class="class_infopanel_info1">
									Created On:
								</div>
								<div class="class_infopanel_info2">
									'. $madedate .'
								</div>
								<div class="clear"></div>

							</div>
						</div>

					</div>
					<div class="class_leftpanel">
					<div class="class_sectionheader">
							Activities
						</div>
						<div class="infopanel_activitysection">
							Moby Dick Discussion
						</div>
						<div class="infopanel_activitysection">
							Article Share
						</div>
						<div class="class_sectionheader addtopmargin">
							Students
						</div>
						<div class="studentrow">
							<div class="studentrow_name">
								<span class="studentrow_male">
									A
								</span>
								Aukerman, Scott
							</div>
							<div class="studentrow_report">
								<a href="test">Info</a>
							</div>
							<div class="clear"></div>
						</div>

						<div class="studentrow">
							<div class="studentrow_name">
								<span class="studentrow_male">
									A
								</span>
								Conway, Charlie
							</div>
							<div class="studentrow_report">
								<a href="test">Info</a>
							</div>
							<div class="clear"></div>
						</div>

						<div class="studentrow">
							<div class="studentrow_name">
								<span class="studentrow_female">
									A
								</span>
								Hathaway, Anne
							</div>
							<div class="studentrow_report">
								<a href="test">Info</a>
							</div>
							<div class="clear"></div>
						</div>

						<div class="studentrow">
							<div class="studentrow_name">
								<span class="studentrow_male">
									A
								</span>
								Lannister, Tyrion
							</div>
							<div class="studentrow_report">
								<a href="test">Info</a>
							</div>
							<div class="clear"></div>
						</div>

						<div class="studentrow">
							<div class="studentrow_name">
								<span class="studentrow_female">
									A
								</span>
								Mortimer, Emily
							</div>
							<div class="studentrow_report">
								<a href="test">Info</a>
							</div>
							<div class="clear"></div>
						</div>

						<div class="studentrow">
							<div class="studentrow_name">
								<span class="studentrow_female">
									A
								</span>
								Rover, Chloe
							</div>
							<div class="studentrow_report">
								<a href="test">Info</a>
							</div>
							<div class="clear"></div>
						</div>

						<div class="studentrow">
							<div class="studentrow_name">
								<span class="studentrow_male">
									A
								</span>
								Snow, Jon
							</div>
							<div class="studentrow_report">
								<a href="test">Info</a>
							</div>
							<div class="clear"></div>
						</div>

					</div>
					</div>
					<div class="clear"></div>';
			} else {
				echo "Access denied.";
			}
			} else {
				echo "Class not found.";
			}
		}
?>