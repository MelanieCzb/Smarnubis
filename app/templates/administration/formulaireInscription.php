<?php $this->layout('layoutType', ['title' => 'Inscription', 'description' =>'Page d\'inscription']) ?>

<?php $this->start('main_content') ?>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->


	<h1>Formulaire d'inscription</h1>

	<section>

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

		<form action="<?= $this->url('inscription') ?>" method="POST" id="formInscription">
			<label for="username">Nom d'utilisateur (max 50 caractères) :</label>
			<input type="text" name="username" placeholder="Votre nom d'utilisateur" id="username">

			<label for="email">Votre email :</label>
			<input type="text" name="email" placeholder="Votre email" id="email">

			<label for="password">Mot de passe (entre 6 et 20 caractère) :</label>
			<input type="password" name="password" placeholder="Votre mot de passe" id="password">
			
			<label for="confirmMotDePasse">Confirmez votre mot de passe :</label>
			<input type="password" name="confirmMotDePasse" placeholder="Confirmez votre motre mot de passe" id="confirmMotDePasse">
			
			<input type="submit" name="inscrire" value="S'inscrire">
		</form>

	</section>
	


<?php $this->stop('main_content') ?>

<?php $this->start('javascript') ?>
<script type="text/javascript" src="<?= $this->assetUrl('js/traitement.js') ?>"></script>
<?php $this->stop('javascript') ?>