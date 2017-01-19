<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
</head>
<body>

	<h2>Cellule vigilance</h2>

	<main>

		<?php
			if(! empty($erreurs)) { ?>
				<div class="row" style="background-color: red;color: white;font-weight: bold;">
					<h3>Liste des erreurs</h3>
					<ul>
						<?php foreach($erreurs as $erreur) { ?>
						<li><?= $erreur ?></li>
						<?php } ?>
					</ul>
				</div>
		<?php }
		?>
		
		<form action="" method="POST">
			<input type="text" name="nom" placeholder="Votre nom">
			<input type="text" name="prenom" placeholder="Votre prénom">
			<input type="text" name="email" placeholder="Votre email">
			<textarea name="message">Votre message</textarea>
			<input type="submit" name="envoyer" value="Envoyer">
		</form>

	</main>
	
</body>
</html>