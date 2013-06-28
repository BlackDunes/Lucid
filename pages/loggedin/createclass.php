
<?php
			$username_lower = strtolower($_SESSION["username"]);
			$userid = $_SESSION["id"];
			echo '<div class="sitebody_sectionheader nobottommargin">
						Create Class
					</div>
					<div class="clear">
					</div>
					<div class="sitebody_sectioncaption">
						Use classes to organize your activities and students.
					</div>
					<div class="clear">
					</div>

					<form class="basicform" id="createclass">

						<div class="basicfield_label">
							Class Name:</div>
						<input id="classname" class="basicfield_input" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_label">Subject:</div>
						<input id="classsubject" class="basicfield_input" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_fieldholder">
							<div class="basicfield_label">Grade Level:</div>
							<div class="basicfield_selectholder">
								<select class="basicfield_select" name="gradelevel" id="gradelevel">
									<option>N/A</option>
									<option>K</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>
									<option>College</option>
								</select>
							</div>
							<div class="clear">
							</div>
						</div>

						<div class="basicfield_fieldholder">
							<div class="basicfield_label">
							<div class="label_ajaxload form_invalid" id="ajaxclassurl">
							</div>
							Class Site URL:</div>
							<div class="basicfield_selectholder">
								<div class="basicfield_input_before">';
								echo $username_lower;
								echo '.mindmanor.com/</div>
								<input id="classsiteurl" class="basicfield_input_after" minlength="2" />
							</div>
							<div class="clear">
							</div>
						</div>

						<div class="basicfield_fieldholder">
							<div class="basicfield_label">Status:</div>
							<div class="basicfield_selectholder">
							<select class="basicfield_select" name="status" id="status">
									<option value="1">Active (Class currently meets regularly)</option>
									<option value="0">Inactive (Class currently not meeting)</option>
							</select>
							</div>
							<div class="clear">
							</div>
						</div>

						<input type="hidden" value="';
						echo $userid;
						echo '" id="userid">

						<div class="basicfield_notify_popup" id="notifycreateclass"></div>
						<div id="createclassbutton" class="basicfield_submit_popup">
							<div class="basicfield_submit_loadoverlay" id="notifybuttoncreateclass">
							</div>
							Create Class
						</div>
						<div class="clear">
						</div>

					</form>';

?>
