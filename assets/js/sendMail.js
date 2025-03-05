var submitted = false;
                
function showSuccessMessage() {
    $("#gform").fadeOut(500, function() {
        $("#success-message").fadeIn(500);
    });
}

$(document).ready(function() {
	$('#gform').on('submit', function(e) {
		//Make sure it get sended in a correct way to prevent Javascript block it
		submitted = true;

		//Let the content in the form to fade out, and show the sucess message.
		$('#gform *').fadeOut(500, function() {
			$("#success-message").fadeIn(500);
		});

		// Delete the content in the form
		$('#gform')[0].reset();
	});

	// Monitor iframe onload event, make sure Google Forms send successfully
	$('#hidden_iframe').on('load', function() {
		if (submitted) {
			showSuccessMessage();
		}
	});
});