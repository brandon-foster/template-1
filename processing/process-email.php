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

// display form if user has not clicked submit
if (! isset ( $_POST ["submit"] )) {
    echo "submit was not sent";
} else { // the user has submitted the form
}
// Check if the "from" input field is filled out
if (isset ( $_POST ["emailFrom"] )) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck ( $_POST ["emailFrom"] );
    if ($mailcheck == FALSE) {
        echo json_encode ( array (
                "success" => FALSE,
                "result_text" => "Please fix your email address.",
                "reason" => "email" 
        ) );
    } else if (! isset ( $_POST ["message"] ) || trim ( $_POST ["message"] ) == "") {
        echo json_encode ( array (
                "success" => FALSE,
                "result_text" => "Please enter a message.",
                "reason" => "message" 
        ) );
    } else {
        $from = $_POST ["emailFrom"]; // sender email address
        $name = $_POST ["name"];
        $subject = "Message from {$name}, a visitor from your site";
        $message = $_POST ["message"];
        // message lines should not exceed 70 characters (PHP rule), so wrap it
        $message = wordwrap ( $message, 70 );
        // send mail
        mail ( "brandonfosterjunkmail@gmail.com", $subject, $message, "From: $from\n" );
        
        echo json_encode ( array (
                "success" => TRUE,
                "result_text" => "Thank you, your message has been sent." 
        ) );
    }
}
?>
