

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

@mail($to, $subject, $message, $headers);
}
?>


<section class="contact" id="contact">
	<inner-column>
		<h1 class="heyyou-voice">Contact Emily</h1>

		<div class="contact-text">
			<span class="reading-voice">You can always reach me at
			<address class="reading-voice"><a href="mailto:oneill.emily@gmail.com">oneill.emily@gmail.com</a></address></span>

			<p class="reading-voice">Alternatively, you can fill in this form with a brief description of your project:</p>

			<form action="?=contactSubmit" method="post">
				
				<div class="form-fields reading-voice">
				
			
					<label for="name">Your name</label>
					<input type="text" name="name" id="name" required class="reading-voice">
				
					<label for="email">Your email address</label>
					<input type="email" name="email" id="email" class="reading-voice" required>

					<label for="message">What would you like to talk about?</label>
					<textarea name="message" id="message" rows="5" cols="40" required class="reading-voice"></textarea>

					<button name="submitted" class="reading-voice" type="submit">
						Submit
					</button>
		
				</div>
				
			</form>
			
			<p class="reading-voice">I'll do my very best to get back to you within 24 hours. I'm looking forward to working with you!</p>
		</div>
	</inner-column>
</section>





