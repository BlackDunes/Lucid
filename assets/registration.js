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
			var thedata = $("#reg1").serialize();

			$.ajax({ //Make the Ajax Request
				type: "GET",
 				url: "assets/ajax_register_user.php", //file name
 				data: thedata, //data
 				success: function(server_response){

 					if(server_response == '1')
 					{
 						function closeBPopup() { $("#regpop").bPopup().close() }
 						closeBPopup();
 						$('#regpop2').bPopup({
        					speed: 450,
        					transition: 'slideIn',
        					modalClose: false
    					});
 						
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

	$("#submitreg2").click(function()
	{
			$("#notifybutton2").html('<img src="images/ajax-loader-l.gif">');
			$("#notifybutton2").show();
			var username = $("#username").val();
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			var state = $("#state").val();
			var gradelevel = $("#gradelevel").val();

			$.ajax({ //Make the Ajax Request
				type: "GET",
 				url: "assets/ajax_register_user2.php", //file name
 				data: "username="+ username +"&firstname="+ firstname +"&lastname="+ lastname +"&state="+ state +"&gradelevel="+ gradelevel, //data
 				success: function(server_response){

 					if(server_response == '1')
 					{
 						function closeBPopup() { $("#regpop2").bPopup().close() }
 						closeBPopup();
 						location.reload(true);
 						
 					}
 					else if(server_response == '2')
 					{
 						$("#notify2").html('MySQL Error.');
 					}
  					else if(server_response == '3')
 					{
 						$("#notify2").html('No data went through.');
 					}
 					else if(server_response == '4')
 					{
 						 $("#notify2").html('Could not connect.');
 					}
 				}
 			});
		
	});

	$("#login_botton").click(function()
	{
			$("#notifybutton3").html('<img src="images/ajax-loader-l.gif">');
			$("#notifybutton3").show();
			var username = $("#logusername").val();
			var password = $("#logpassword").val();

			$.ajax({ //Make the Ajax Request
				type: "GET",
 				url: "assets/ajax_login.php", //file name
 				data: "username="+ username +"&password="+ password, //data
 				success: function(server_response){

 					if(server_response == '1')
 					{
 						$("#notify3").html('Logged in');
 						document.location.reload(true);
 						
 					}
 					else if(server_response == '2')
 					{
 						$("#notify3").html('Incorrect Password');
 						$("#notifybutton3").hide();
 					}
  					else if(server_response == '3')
 					{
 						$("#notify3").html('No password submitted');
 						$("#notifybutton3").hide();
 					}
 					else if(server_response == '4')
 					{
 						 $("#notify3").html('Username not found');
 						 $("#notifybutton3").hide();
 					}
 					else if(server_response == '5')
 					{
 						 $("#notify3").html('No username submitted');
 						 $("#notifybutton3").hide();
 					}
 					else if(server_response == '6')
 					{
 						 $("#notify3").html('MySQL Error');
 						 $("#notifybutton3").hide();
 					}
 				}
 			});
		
	});

});
