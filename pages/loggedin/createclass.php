
<?php
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

					<form class="basicform">

						<div class="basicfield_label">Class Name:</div>
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
								<select class="basicfield_select" name="gradelevel">
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
							<div class="basicfield_label">Class Site URL:</div>
							<div class="basicfield_selectholder">
								<div class="basicfield_input_before">username.mindmanor.com/</div>
								<input id="classsiteurl" class="basicfield_input_after" minlength="2" />
							</div>
							<div class="clear">
							</div>
						</div>

						<div class="basicfield_fieldholder">
							<div class="basicfield_label">Status:</div>
							<div class="basicfield_selectholder">
								<input type="radio" name="status" checked /> Active (Class currently meets regularly)<br />
								<input type="radio" name="status"/> Inactive (Class currently not meeting)<br />
							</div>
							<div class="clear">
							</div>
						</div>

						<input type="submit" id="submit" class="basicfield_submit" />
						<div class="clear">
						</div>

					</form>';

?>
