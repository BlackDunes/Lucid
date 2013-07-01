<?php

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
				


				<div class="popup_formholder" id="regpop">
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

					<form class="basicform_popup" id="reg1">

						<div class="basicfield_label_popup">
							<div class="label_ajaxload_popup form_invalid" id="ajaxusername">
							</div>
							Username:</div>
						<input name="username" id="username" class="basicfield_input_popup" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_label_popup" >
							<div class="label_ajaxload_popup form_invalid" id="ajaxemail">
							</div>E-mail:</div>
						<input name="email" id="email" class="basicfield_input_popup" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_label_popup">
							<div class="label_ajaxload_popup form_invalid" id="ajaxpassword">
							</div>Password:</div>
						<input name="password" id="password" type="password" class="basicfield_input_popup" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_label_popup">
							<div class="label_ajaxload_popup form_invalid" id="ajaxconfpassword">
							</div>Confirm Password:</div>

						<input name="confpassword" type="password" id="confpassword" class="basicfield_input_popup" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_notify_popup" id="notify"></div>
						<div id="submitreg" class="basicfield_submit_popup">
							<div class="basicfield_submit_loadoverlay" id="notifybutton">
							</div>
							Sign Me Up
						</div>
						<div class="clear">
						</div>

					</form>
				</div>

				<div class="popup_formholder" id="regpop2">
					<div class="sitebody_sectionheader nobottommargin">
						Congratulations!
					</div>
					<div class="clear">
					</div>
					<div class="sitebody_sectioncaption">
						You\'re now registered with <b>Mind Manor</b>. Please provide a bit more information to customize your experience.
					</div>
					<form class="basicform_popup" id="reg2">

						<div class="basicfield_label_popup">
							First Name:</div>
						<input name="firstname" id="firstname" class="basicfield_input_popup" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_label_popup" >
							Last Name:</div>
						<input name="lastname" id="lastname" class="basicfield_input_popup" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_fieldholder_popup">
							<div class="basicfield_label">State:</div>
							<div class="basicfield_selectholder_popup">';

						$states = statesList();   
    					echo '<select class="basicfield_select_popup" name="state" id="state">';  
        				echo '<option selected="selected">Select your state...</option>';  
        				foreach($states as $key=>$value) {  
                			echo '<option value="'.$key.'">'.$value.'</option>';  
        				}  
    					echo '</select>';  

						echo '
							</div>
							<div class="clear">
							</div>
						</div>

						<div class="basicfield_fieldholder_popup">';
						$gradelevels = gradeLevels(); 
							echo '<div class="basicfield_label">Grade Level Taught:</div>';
							echo '<div class="basicfield_selectholder_popup">';

							echo '<select class="basicfield_select_popup" name="gradelevel" id="gradelevel">';
							foreach($gradelevels as $key=>$value) {  
                				echo '<option value="'.$key.'">'.$value.'</option>';  
        						}  
                			echo '</select>
							</div>
							<div class="clear">
							</div>
						</div>

						

						<div class="basicfield_notify_popup" id="notify2"></div>
						<div id="submitreg2" class="basicfield_submit_popup">
							<div class="basicfield_submit_loadoverlay" id="notifybutton2">
							</div>
							Continue
						</div>
						<div class="clear">
						</div>

					</form>
					<div class="clear">
					</div>

					
				</div>


				<div class="popup_formholder" id="loginpop">
					<form class="basicform_popup">

						<div class="basicfield_label_popup">Username:</div>
						<input id="logusername" class="basicfield_input_popup" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_label_popup">Password:</div>
						<input type="password" id="logpassword" class="basicfield_input_popup" minlength="3" />
						<div class="clear">
						</div>

						<div class="basicfield_notify_popup" id="notify3"></div>
						<div id="login_botton" class="basicfield_submit_popup">
							<div class="basicfield_submit_loadoverlay" id="notifybutton3">
							</div>
							Log In
						</div>
						<div class="clear">
						</div>
						</div>

					</form>
				</div>
				<script src="assets/jquery.bpopup.min.js"></script>
				<script src="assets/scripts.js"></script>
				<script src="assets/registration.js"></script>';
?>