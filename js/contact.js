var responseHandler = function(result) {

	if (result.success) {
		// clear fields
		$('#name').val('');
		$('#emailFrom').val('');
		$('#message').val('');

		// show success alert
		$('#submission-alert').removeClass('submission-failure');
		$('#submission-alert').addClass('submission-success');

		// focus on the name in case they want to send another message
		$('#name').focus();

	} else {
		// show failure alert
		$('#submission-alert').addClass('submission-failure');

		if (result.reason === "email") {
			// focus on the #emailFrom field to fix their email address
			$('#emailFrom').focus();
		} else if (result.reason === "message") {
			// focus on the #message field to fix their email address
			$('#message').focus();
		}

	}

	$('#submission-alert').html("<p>" + result.result_text + "</p>");
	$('#submission-alert').show();

}

$(document).ready(function() {
	$('#name').focus();

	$('a#send').click(function(event) {

		var name = $('#name').val();
		var emailFrom = $('#emailFrom').val();
		var message = $('#message').val();

		// send POST request
		$.ajax({
			type : "POST",
			url : "processing/process-email.php",
			data : {
				name : name,
				emailFrom : emailFrom,
				message : message,
				submit : true
			},
			success : function(result) {
				responseHandler(result);
			},
			dataType : "json"
		});

		event.preventDefault();
	});

});