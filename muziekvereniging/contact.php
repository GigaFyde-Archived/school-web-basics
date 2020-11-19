<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<?php require_once("header.php"); ?>

	<!-- START eigen code -->
	<main>
		<div class="wrapper">
			<h1>Neem contact op</h1>
			
			<form action="backend/contactController.php" method="post">

				<!-- Vertel de controller wat we gaan doen -->
				<input type="hidden" name="action" value="send">
				
				<div class="form-group">
					<label for="senderName">Naam</label>
					<input type="text" name="senderName" id="senderName">
				</div>
				<div class="form-group">
					<label for="senderEmail">E-mailadres</label>
					<input type="text" name="senderEmail" id="senderEmail">
				</div>
				<div class="form-group">
					<label for="message">Bericht</label>
					<textarea name="message" cols="30" rows="10" id="message"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" value="Verzend formulier">
				</div>

			</form>

		</div>
	</main>







	<!-- EINDE eigen code -->

	<?php require_once("footer.php"); ?>
	
</body>
</html>