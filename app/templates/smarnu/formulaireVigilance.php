<?php $this->layout('layout', ['title' => 'Compte rendu de réunion']) ?>

<?php $this->start('main_content') ?>

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
		
<?php $this->stop('main_content') ?>