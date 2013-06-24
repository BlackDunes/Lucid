$(document).ready(function()//When the dom is ready
{
	$("#username").change(function()
	{ //if theres a change in the username textbox

		var username = $("#username").val();//Get the value in the username textbox
		if(username.length > 2)//if the lenght greater than 3 characters
		{
			$("#ajaxusername").html('<img src="images/ajax-loader-l.gif">');
			//Add a loading image in the span id="availability_status"

			$.ajax({ //Make the Ajax Request
				type: "GET",
 				url: "assets/ajax_check_username.php", //file name
 				data: "username="+ username, //data
 				success: function(server_response){

 					if(server_response == '0')//if ajax_check_username.php return value "0"
 					{
 						$("#ajaxusername").html('<div class="ajax_checkmark">O</div>');
 						$("#notify").html(' ');
 						$("#ajaxusername").removeClass("form_invalid");
 						//add this image to the span with id "availability_status"
 					}
 					else if(server_response == '1')//if it returns "1"
 					{
 						$("#ajaxusername").html('<div class="ajax_redx">X</div>');
 						$("#notify").html('Username uses invalid characters.');
 						$("#ajaxusername").addClass("form_invalid");
 					}
  					else if(server_response == '2')//if it returns "2"
 					{
 						$("#ajaxusername").html('<div class="ajax_redx">X</div>');
 						$("#notify").html('Username is not available.');
 						$("#ajaxusername").addClass("form_invalid");
 					}
 				}
 			});

		}
 		else
 		{
 			$("#ajaxusername").html('<div class="ajax_redx">X</div>');
 			$("#notify").html('Username must be at least 3 characters.');
 			$("#ajaxusername").addClass("form_invalid");
 		}
	
	
	return false;
	});

	$("#email").change(function()
	{ //if theres a change in the username textbox

		var email = $("#email").val();//Get the value in the username textbox
		if(email.length > 2)//if the lenght greater than 3 characters
		{
			$("#ajaxemail").html('<img src="images/ajax-loader-l.gif">');
			//Add a loading image in the span id="availability_status"

			$.ajax({ //Make the Ajax Request
				type: "GET",
 				url: "assets/ajax_check_email.php", //file name
 				data: "email="+ email, //data
 				success: function(server_response){

 					if(server_response == '0')//if ajax_check_username.php return value "0"
 					{
 						$("#ajaxemail").html('<div class="ajax_checkmark">O</div>');
 						$("#notify").html(' ');
 						$("#ajaxemail").removeClass("form_invalid");
 						//add this image to the span with id "availability_status"
 					}
 					else if(server_response == '1')//if it returns "1"
 					{
 						$("#ajaxemail").html('<div class="ajax_redx">X</div>');
 						$("#notify").html('Invalid e-mail address.');
 						$("#ajaxemail").addClass("form_invalid");
 					}
  					else if(server_response == '2')//if it returns "2"
 					{
 						$("#ajaxemail").html('<div class="ajax_redx">X</div>');
 						$("#notify").html('E-mail address is already registered.');
 						$("#ajaxemail").addClass("form_invalid");
 					}
 				}
 			});

		}
 		else
 		{
 			$("#ajaxemail").html('<div class="ajax_redx">X</div>');
 			$("#notify").html('Invalid e-mail address.');
 			$("#ajaxemail").addClass("form_invalid");
 		}
	
	
	return false;
	});

	$("#password").change(function()
	{ //if theres a change in the username textbox

		var password = $("#password").val();//Get the value in the password textbox
		if(password.length > 4)//if the lenght greater than 4 characters
		{
			$("#ajaxpassword").html('<img src="images/ajax-loader-l.gif">');
			//Add a loading image in the span id="availability_status"

			// Put code to check format here
			var regex = /^[A-Za-z][A-Za-z0-9$#]*(?:_[A-Za-z0-9]+)*$/g
			if(regex.test(password)){
				$("#ajaxpassword").html('<div class="ajax_checkmark">O</div>');
 				$("#notify").html(' ');
 				$("#ajaxpassword").removeClass("form_invalid");
 			}
 			else
 			{
 				$("#ajaxpassword").html('<div class="ajax_redx">X</div>');
 				$("#notify").html('Invalid password. Must begin with a letter, and can only include letters, numbers, and certain symbols (_#$).');
 				$("#ajaxpassword").addClass("form_invalid");
 			}

		}
 		else
 		{
 			$("#ajaxpassword").html('<div class="ajax_redx">X</div>');
 			$("#notify").html('Password must be at least 5 characters.');
 			$("#ajaxpassword").addClass("form_invalid");
 		}
	
	return false;
	});

	$("#confpassword").change(function()
	{ //if theres a change in the username textbox

		var confpassword = $("#confpassword").val();//Get the value in the password textbox
		if(confpassword.length > 3)//if the lenght greater than 4 characters
		{
			var password = $("#password").val();

			if(confpassword == password){
				$("#ajaxconfpassword").html('<div class="ajax_checkmark">O</div>');
 				$("#notify").html(' ');
 				$("#ajaxconfpassword").removeClass("form_invalid");
 			}
 			else
 			{
 				$("#ajaxconfpassword").html('<div class="ajax_redx">X</div>');
 				$("#notify").html('Passwords do not match.');
 				$("#ajaxconfpassword").addClass("form_invalid");
 			}
 		}
 		else
 		{
 			$("#ajaxconfpassword").html('<div class="ajax_redx">X</div>');
 			$("#notify").html('Passwords do not match.');
 			$("#ajaxconfpassword").addClass("form_invalid");
 		}
		

	
	return false;
	});

	$("#submitreg").click(function()
	{
		if ($(".form_invalid")[0]){
			$("#notify").html('Bad news, bro.');
		}
		else
		{
			$("#notifybutton").html('<img src="images/ajax-loader-l.gif">');
			$("#notifybutton").show();
			var username = $("#username").val();
			var email = $("#email").val();
			var password = $("#password").val();
			var confpassword = $("#confpassword").val();

			$.ajax({ //Make the Ajax Request
				type: "GET",
 				url: "assets/ajax_register_user.php", //file name
 				data: "email="+ email +"&username="+ username +"&password="+ password, //data
 				success: function(server_response){

 					if(server_response == '1')
 					{
 						$("#notify").html('It happened.');
 						
 					}
 					else if(server_response == '2')
 					{
 						$("#notify").html('MySQL Error.');
 					}
  					else if(server_response == '3')
 					{
 						$("#notify").html('No data went through.');
 					}
 					else if(server_response == '4')
 					{
 						 $("#notify").html('Could not connect.');
 					}
 				}
 			});
		}
	});

});
