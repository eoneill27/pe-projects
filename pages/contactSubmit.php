
<?php
	// Get data from form

if(isset($_POST['submitted'])) {

$to      = 'oneill.emily@gmail.com';
$subject = 'Contact form submission';
$message = $_POST['message'];
$from = $_POST['name'];
$email = $_POST['email'];
$headers = 'From: ' . $from . '\r\n' . 'Reply-to: ' . $email;

mail($to, $subject, $message, $headers);

}

?>

<inner-column>

	<p class="reading-voice">Thanks for submitting the contact form! I'll get back to you as soon as I can.</p>

</inner-column>