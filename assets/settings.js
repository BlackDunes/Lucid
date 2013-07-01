$(document).ready(function()//When the dom is ready
{

	$("#updateprofile").click(function()
	{
			$("#notifybutton3").html('<img src="images/ajax-loader-l.gif">');
			$("#notifybutton3").show();
			var thedata = $("#updatesettings").serialize();

			$.ajax({ //Make the Ajax Request
				type: "GET",
 				url: "assets/ajax_update_profile.php", //file name
 				data: thedata,
 				success: function(server_response){

 					if(server_response == '1')
 					{
 						$("#notify3").html('Profile Updated.');
 						window.location = "index.php?p=settings&upd=1";
 					}
 					else if(server_response == '2')
 					{
 						$("#notify3").html('MySQL Error.');
 					}
  					else if(server_response == '3')
 					{
 						$("#notify3").html('No data went through.');
 					}
 					else if(server_response == '4')
 					{
 						 $("#notify3").html('Could not connect.');
 					}
 				}
 			});
		
	});


});
