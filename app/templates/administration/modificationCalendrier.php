<?php $this->layout('layoutType', ['title' => 'Modifier un évènement - SMARNUBIS', 'description' => 'Gestion des évènements du site SMARNUBIS réservée à l\'administrrateur']) ?>

<?php $this->start('main_content') ?>

	<h2>Modification d'un évènemnet</h2>

	<main>
	
		<?php

			if(! empty($erreurs)){?>
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
		<label for="date">Date : </label>
			<input type="date" name="myform[date]" value="<?= $this->e($article['date']) ?>">

			<label for="titre">Titre</label>
			<input type="text" name="myform[titre]" value="<?= $this->e($article['titre']) ?>">

			<label for="contenu">Description :</label>
			<textarea name="myform[contenu]"><?php if(isset($_POST['myform']['contenu'])){?> <?= $_POST['myform']['contenu']?><?php } ?><?= $this->e($article['contenu']) ?></textarea>

			
			<input type="submit" name="modifier" value="Modifier l'évènement">
		</form>

	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>