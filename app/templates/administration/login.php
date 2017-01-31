<?php $this->layout('layoutType', ['title' => 'Connexion - SMARNUBIS', 'description' => 'Connectez vous pour accéder a votre espace membre']) ?>

<?php $this->start('main_content') ?>
	
	<h1>Connexion à l'espace privé :</h1>

	<section>
	<?php
			if(! empty($messages)){ ?>
				<div class="row" style="background-color: red;color: white;font-weight: bold;">
					
					<ul>
						<?php 
						foreach($messages as $message) { ?>
							<li><?= $message ?></li>
						<?php } ?>
					</ul>
				</div>
		<?php } ?>


	<form method="POST">
		<label for="login">Votre login : </label>
		<input type="text" name="myform[username]" placeholder="Votre login de connexion">

		<label for="mdp">Votre mot de passe : </label>
		<input type="password" name="myform[password]">

		<input type="submit" name="connexion" value="Connexion">
	</form>

	<h2>Si vous n'avez pas d'espace, créez le ici : <a href="/inscription">Inscription</a></h2>

</section>

<?php $this->stop('main_content') ?>
