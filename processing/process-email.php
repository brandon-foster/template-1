<html>
<body>
<?php
function spamcheck($field) {
	// Sanitize e-mail address
	$field = filter_var ( $field, FILTER_SANITIZE_EMAIL );
	// Validate e-mail address
	if (filter_var ( $field, FILTER_VALIDATE_EMAIL )) {
		return TRUE;
	} else {
		return FALSE;
	}
}
?>

<h2>Feedback Form</h2>
<?php
// display form if user has not clicked submit
if (! isset ( $_POST ["submit"] )) {
	?>
	<p>SUBMIT WAS NOT SET</p>
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
		From: <input type="text" name="email-from"><br>
		Name: <input type="text" name="name"><br>
		Subject: <input type="text" name="subject"><br>
		Message: <textarea rows="10" cols="40" name="message"></textarea><br>
		<input type="submit" name="submit" value="Submit Feedback">
	</form>
  <?php
} else { // the user has submitted the form
         // Check if the "from" input field is filled out
	if (isset ( $_POST ["email-from"] )) {
		// Check if "from" email address is valid
		$mailcheck = spamcheck ( $_POST ["email-from"] );
		if ($mailcheck == FALSE) {
			echo "Invalid input";
		} else {
			$from = $_POST ["email-from"]; // sender email address
			$name = $_POST["name"];
			$subject = "Message from {$name}, a visitor to your web site";
			$message = $_POST ["message"];
			// message lines should not exceed 70 characters (PHP rule), so wrap it
			$message = wordwrap ( $message, 70 );
			// send mail
			mail ( "brandonfosterjunkmail@gmail.com", $subject, $message, "From: $from\n" );
			echo $_SERVER["PHP_SELF"];
		}
	}
}
?>
</body>
</html>