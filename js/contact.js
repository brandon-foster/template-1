var responseHandler = function(result) {

	if (result.success) {
		$('#main').hide();

		$('#submission-alert').removeClass('submission-failure');
		$('#submission-alert').addClass('submission-success');
	} else {
		$('#submission-alert').addClass('submission-failure');
	}

	$('#submission-alert').html("<p>" + result.result_message + "</p>");
	$('#submission-alert').show();
}

$(document).ready(function() {
	$('#name').focus();

	$('a#send').click(function(event) {

		var name = $('#name').val();
		$('#name').val('');
		var emailFrom = $('#emailFrom').val();
		$('#emailFrom').val('');
		var message = $('#message').val();
		$('#message').val('');

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