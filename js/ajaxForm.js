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
});