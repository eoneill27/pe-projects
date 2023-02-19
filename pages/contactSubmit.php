
<?php
	// Get data from form

if(isset($_POST['submitted'])) {

$to      = 'oneill.emily@gmail.com';
$subject = 'Contact form submission';
$message = $_POST['message'];
$headers = array(
    'From' => $_POST['name'],
    'Reply-To' => $_POST['email'],
	);

mail($to, $subject, $message, $headers);
}
?>
<inner-column>

	<p class="reading-voice">Thanks for submitting your form!</p>

<h1>lkjelkj
</h1>
</inner-column>