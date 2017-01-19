<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>
	
	<h2>Site du smarnubis</h2>
	<h3>Connexion à l'espace privé :</h3>

	<form method="POST">
		<label for="login">Votre login : </label>
		<input type="text" name="login" placeholder="Votre login de connexion">

		<label for="mdp">Votre mot de passe : </label>
		<input type="password" name="mdp">

		<input type="submit" name="connexion" value="Connexion">
	</form>

	<h3>Si vous n'avez pas d'espace, créez le ici : <a href="/inscription">Inscription</a></h3>

<?php $this->stop('main_content') ?>
