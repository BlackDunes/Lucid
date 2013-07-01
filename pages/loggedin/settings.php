<?php
	$link = mysqli_connect($sqlhostname, $sqlusername , $sqlpassword, 'mm_users');
	$userid = $_SESSION["id"];
	if ($link) {
			$getuserinfo = mysqli_query($link, "SELECT * FROM main WHERE id='$userid'");
			$user_info_main = mysqli_fetch_array($getuserinfo, MYSQLI_ASSOC);
			$getuserinfo2 = mysqli_query($link, "SELECT * FROM profile WHERE id='$userid'");
			$user_info_prof = mysqli_fetch_array($getuserinfo2, MYSQLI_ASSOC);
			$getuserinfo3 = mysqli_query($link, "SELECT * FROM details WHERE id='$userid'");
			$user_info_deets = mysqli_fetch_array($getuserinfo3, MYSQLI_ASSOC);

		echo'
		<div class="sitebody_sectionheader">
			Account Settings
		</div>
		<div class="clear">
		</div>
		<div class="settingsbigbutton floatleft">
			Change Password
		</div>
		<div class="settingsbigbutton floatright" style="margin-right: 25px">
			Change E-Mail
		</div>
		<div class="clear">
		</div>
		<div class="sitebody_sectionheader addtopmargin">
			Profile Settings
		</div>
		<div class="clear">
		</div>

		<div class="profilesettings_left">
					<form id="updatesettings">';
					if ($_GET["upd"] == 1) {
						echo '<div class="basicfield_topnotifier_settings">
							Profile Updated
							</div>';
						}
						echo '<div class="basicfield_fieldholder_settings">';
							$prefix = namePrefix(); 
							echo '<div class="basicfield_label">Name Prefix:</div>';
							echo '<div class="basicfield_selectholder_settings">';

							echo '<select class="basicfield_select_settings" name="nameprefix" id="nameprefix">';
							echo '<option selected="selected" value=" ">None</option>';
							foreach($prefix as $key=>$value) {  
                				echo '<option value="'.$key.'"';
                				if ($key == $user_info_deets['prefix']){
                					echo 'selected="selected"';
                				}
                				echo '>'.$value.'</option>';  
        						}  
                			echo '</select>
							</div>
							<div class="clear">
							</div>
						</div>

						<div class="basicfield_label_settings">
							First Name:</div>
						<input name="firstname" id="firstname" class="basicfield_input_settings" minlength="3" value="' . $user_info_deets['firstname'] . '" />
						<div class="clear">
						</div>

						<div class="basicfield_label_settings" >
							Last Name:</div>
						<input name="lastname" id="lastname" class="basicfield_input_settings" minlength="3" value="' . $user_info_deets['lastname'] . '" />
						<div class="clear">
						</div>

						<div class="basicfield_label_settings" >
							Subject Taught:</div>
						<input name="subject" id="subject" class="basicfield_input_settings" minlength="3" value="' . $user_info_deets['subject'] . '" />
						<div class="clear">
						</div>

						<div class="basicfield_fieldholder_settings">';
						$gradelevels = gradeLevels(); 
							echo '<div class="basicfield_label">Grade Level Taught:</div>';
							echo '<div class="basicfield_selectholder_settings">';

							echo '<select class="basicfield_select_settings" name="gradelevel" id="gradelevel">';
							foreach($gradelevels as $key=>$value) {  
                				echo '<option value="'.$key.'"';
                				if ($key == $user_info_deets['grade_level']){
                					echo 'selected="selected"';
                				}
                				echo '>'.$value.'</option>';  
        						}  
                			echo '</select>
							</div>
							<div class="clear">
							</div>
						</div>

						<div class="basicfield_fieldholder_settings">
							<div class="basicfield_label">Home State:</div>
							<div class="basicfield_selectholder_settings">';

						$states = statesList();   
    					echo '<select class="basicfield_select_settings" name="state" id="state">';  
        				echo '<option selected="selected">Select your state...</option>';  
        				foreach($states as $key=>$value) {  
                			echo '<option value="'.$key.'"';
                			if ($key == $user_info_deets['state']){
                				echo 'selected="selected"';
                			}
                			echo '>'.$value.'</option>';  
        				}  
    					echo '</select>';  

						echo '
							</div>
							<div class="clear">
							</div>
						</div>

						<div class="basicfield_label_settings" >
							Home Town:</div>
						<input name="town" id="town" class="basicfield_input_settings" minlength="3" value="' . $user_info_prof['town'] . '" />
						<div class="clear">
						</div>

						<div class="basicfield_label_settings" >
							Name of School:</div>
						<input name="school" id="school" class="basicfield_input_settings" minlength="3" value="' . $user_info_prof['school'] . '" />
						<div class="clear">
						</div>

						<input type="hidden" value="';
						echo $userid;
						echo '" id="userid" name="userid">

						

						<div class="basicfield_notify_settings" id="notify3"></div>
						<div id="updateprofile" class="basicfield_submit_settings">
							<div class="basicfield_submit_loadoverlay" id="notifybutton3">
							</div>
							Submit Changes
						</div>
					</form>
						<div class="clear">
						</div>
		</div>


		<div class="profilesettings_right">
			<div class="userpic_large" style="background-image:url(\'images/users/' . $user_info_prof['userpicture'] . '.jpg\')">
			</div>
			<div class="profilesettings_changepicbutton">
				Change User Photo
			</div>
		</div>
		<div class="clear">
		</div>';
	}
?>