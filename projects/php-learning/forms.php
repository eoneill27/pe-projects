<style>
	
	label, input, button {

	}

	form {
		max-width: 400px;
	}

	.field {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
	}

	.field label {
		font-size: 14px;
		margin-bottom: 4px;
	}

	input {
		margin-bottom: 4px;
	}

	button[type="submit"], .field + .field {
		margin-top: 20px;
	}

	.feedback {
		color: dodgerblue;
	}

</style>


<?php

	$guests = 0;
	$berries = 0;

	if (isset($_POST["submitted"])) {

		if (isset($_POST["guests"])) {
			if ($_POST["guests"] >= 0) {
				$guests = $_POST["guests"];
			}
		}

		if (isset($_POST["berries"])) {
			if ($_POST["berries"] >= 0) {
				$berries = $_POST["berries"];
			}
		}


		$total = floatval($guests) * floatval($berries);

		echo $total;
	};

	

?>



<form method="POST" action="">

	<p>How many berries do we need?</p>
	
	<div class="field">

		<label for="">Guests</label>
		<input type="number" name="guests" value="<?=$guests?>" min="0" />

		<label for="">Berries per guest</label>
		<input type="number" name="berries" value="<?=$berries?>" min="0" titl/>

		<button type="submit" name="submitted">
			Push me
		</button>

	</div>
	

</form>
















