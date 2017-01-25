<?php $this->layout('layoutType', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

	<h2>Formulaire d'inscription</h2>

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
			<!-- <input type="text" name="nom" placeholder="Votre nom"> -->
			<input type="text" name="myform[username]" placeholder="Votre nom d'utilisateur">
			<input type="text" name="myform[email]" placeholder="Votre email">
			<input type="password" name="myform[password]" placeholder="Votre mot de passe">
			<input type="password" name="confirmMotDePasse" placeholder="Confirmez votre motre mot de passe">
			<!-- <input type="text" name="adresse" placeholder="Votre adresse">
			<input type="text" name="codePostal" placeholder="Votre code postal">
			<input type="text" name="ville" placeholder="Votre ville">
			<input type="text" name="lieuExercice" placeholder="Votre lieu d'exercice"> -->
			<input type="submit" name="inscrire" value="S'inscrire">
		</form>

	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>