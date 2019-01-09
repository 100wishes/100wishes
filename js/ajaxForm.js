$(function(){
	$("#btn-contactForm").on("click", function(){
		$validation = validateForm();
		if($validation == true)
		{
			$.ajax(
			{	
				url: "models/saveContact.php",
				method: "POST",	
				data: 
				{
					strName: $("#name").val(),
					strEmail: $("#email").val(),
					nPhone: $("#phone").val(),
					strMessage: $("#message").val()
				},				
				success: function(result)
				{
					$('#contactForm').append('<p class="msg ok">Thank you! We will contact you soon.</p>');
					$('#contactForm')[0].reset();
				},
				error: function(a, b, error)
				{
					console.log(error);
				}
			});
		}
		return false;
	});

	$("#submitForm").on("click", function(){
		$validation = validateForm();
		if($validation == true)
		{
			$.ajax(
			{	
				url: "models/checkLogin.php",
				method: "POST",	
				data: 
				{
					strEmail: $("#cms-email").val(),
					strPassword: $("#cms-pass").val()
				},				
				success: function(result)
				{
					if(result == true)
					{
						window.location = "index.php?controller=admin&action=dashboard";
					} else {
						window.location = "index.php?controller=admin&action=login&error=true";
					}
				},
				error: function(result)
				{
					$("#login").append("<div class='msg errors'>You are not allowed to access this area.</div>");
				}
			});
		}
	return false;
	});
});