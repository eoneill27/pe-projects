
<?php
	// Get data from form

if(isset($_POST['submitted'])) {

$to      = 'oneill.emily@gmail.com';
$subject = 'Contact form submission';
$message = 'From: ' . $_POST['name'] . '\r\n' . 'Reply-to: ' . $_POST['email'] . '\r\n' . $_POST['message'];
// $from = $_POST['name'];
// $email = $_POST['email'];
// $headers = 'From: ' . $from . '\r\n' .
//         'Reply-To: ' . $email . '\r\n';

mail($to, $subject, $message);

}

?>

<inner-column>

	<p class="reading-voice">Thanks for submitting the contact form! I'll get back to you as soon as I can.</p>

</inner-column>