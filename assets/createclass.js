$(document).ready(function()//When the dom is ready
{
	$("#classsiteurl").change(function()
	{ //if theres a change in the username textbox

		var classsiteurl = $("#classsiteurl").val();//Get the value in the username textbox
		if(classsiteurl.length > 2)//if the lenght greater than 3 characters
		{
			$("#ajaxclassurl").html('<img src="images/ajax-loader-l.gif">');
			var userid = $("#userid").val();
			//Add a loading image in the span id="availability_status"

			$.ajax({ //Make the Ajax Request
				type: "GET",
 				url: "assets/ajax_check_classurl.php", //file name
 				data: "classurl="+ classsiteurl +"&userid="+ userid, //data
 				success: function(server_response){

 					if(server_response == '0')//if ajax_check_username.php return value "0"
 					{
 						$("#ajaxclassurl").html('<div class="ajax_checkmark">O</div>');
 						$("#notifycreateclass").html(' ');
 						$("#ajaxclassurl").removeClass("form_invalid");
 						//add this image to the span with id "availability_status"
 					}
 					else if(server_response == '1')//if it returns "1"
 					{
 						$("#ajaxclassurl").html('<div class="ajax_redx">X</div>');
 						$("#notifycreateclass").html('Site URL uses invalid characters (letters and numbers only)');
 						$("#ajaxclassurl").addClass("form_invalid");
 					}
  					else if(server_response == '2')//if it returns "2"
 					{
 						$("#ajaxclassurl").html('<div class="ajax_redx">X</div>');
 						$("#notifycreateclass").html('You are already using this site URL.');
 						$("#ajaxclassurl").addClass("form_invalid");
 					}
 				}
 			});

		}
 		else
 		{
 			$("#ajaxclassurl").html('<div class="ajax_redx">X</div>');
 			$("#notifycreateclass").html('Site URL must be at least 3 characters.');
 			$("#ajaxclassurl").addClass("form_invalid");
 		}
	
	
	return false;
	});

});

$("#createclassbutton").click(function()
	{
		var classname = $("#classname").val();
		var subject = $("#classsubject").val();
		if ($(".form_invalid")[0]){
			$("#notifycreateclass").html('Please enter a valid URL.');
		}
		else if (classname.length < 3)
		{
			$("#notifycreateclass").html('Class name must be at least two characters.');
		}
		else if (subject.length < 3)
		{
			$("#notifycreateclass").html('Subject must be at least two characters.');
		}
		else
		{
			$("#notifybuttoncreateclass").html('<img src="images/ajax-loader-l.gif">');
			$("#notifybuttoncreateclass").show();
			var gradelevel = $("#gradelevel").val();
			var classsiteurl = $("#classsiteurl").val();
			var active = $("#status").val();
			var userid = $("#userid").val();

			$.ajax({ //Make the Ajax Request
				type: "GET",
 				url: "assets/ajax_create_class.php", //file name
 				data: "classname="+ classname +"&subject="+ subject +"&gradelevel="+ gradelevel +"&classsiteurl="+ classsiteurl +"&active="+ active +"&userid="+ userid, //data
 				success: function(server_response){

 					if(server_response == '1')
 					{
 						window.location = "index.php?p=classes"
 						
 					}
 					else if(server_response == '2')
 					{
 						$("#notifybuttoncreateclass").hide();
 						$("#notifycreateclass").html('MySQL Error.');
 					}
  					else if(server_response == '3')
 					{
 						$("#notifybuttoncreateclass").hide();
 						$("#notifycreateclass").html('No data went through.');
 					}
 					else if(server_response == '4')
 					{
 						 $("#notifybuttoncreateclass").hide();
 						 $("#notifycreateclass").html('Could not connect.');
 					}
 				}
 			});
		}
	});