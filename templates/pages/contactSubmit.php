
<?php
	// Get data from form

if(isset($_POST['submitted'])) {

$to      = 'oneill.emily@gmail.com';
$subject = 'Contact form submission';
$message = 'From: ' . $_POST['name'] . "\n" . 'Reply-to: ' . $_POST['email'] . "\n" . $_POST['message'];
// $from = $_POST['name'];
// $email = $_POST['email'];
// $headers = 'From: ' . $from . '\r\n' .
//         'Reply-To: ' . $email . '\r\n';

mail($to, $subject, $message);

}

?>

<?php 

	$json = file_get_contents('data/pages/contactSubmit.json');
	$pageData = json_decode($json, true);

	foreach ($pageData['sections'] as $section) {
		$module = $section['module'];

		if(isset($section['class'])) {
			$class = $section['class'];
		}

		if(isset($section['title'])) {
			$title = $section['title'];
		}

		if(isset($section['content'])) {
			$content = $section['content'];
		}


	?>


			<?php include("templates/modules/$module/$module.php"); ?>


<?php } ?>



