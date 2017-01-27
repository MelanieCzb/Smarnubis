<?php $this->layout('layoutType', ['title' => 'Modifier la news - SMARNUBIS', 'description' => 'Gestion des News du site SMARNUBIS réservée à l\'administrrateur']) ?>

<?php $this->start('main_content') ?>

	<h2>Modification d'une News</h2>

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
			<label for="titre">Titre</label>
			<input type="text" name="myform[titre]" value="<?= $this->e($article['titre']) ?>">

			<label for="resume">Résumé :</label>
			<textarea name="myform[resume]"><?php if(isset($_POST['myform']['resume'])){?> <?= $_POST['myform']['resume']?><?php } ?><?= $this->e($article['resume']) ?></textarea>

			<label for="contenu">Contenu :</label>
			<textarea name="myform[contenu]"><?php if(isset($_POST['myform']['contenu'])){?> <?= $_POST['myform']['contenu']?><?php } ?><?= $this->e($article['contenu']) ?></textarea>

			<label for="categorie" >Catégorie de la News :</label>
			<select name="myform[categorie]">
			<option value="">Sélectionner la priorité d'archivage.</option>
				<option value=""></option>
				<option value="news" <?= (($article['categorie']) == "news") ? "selected" : "" ?>>News</option>
				<option value="archives" <?= (($article['categorie']) == "archives") ? "selected" : "" ?>>Archives</option>			
			</select>

			
			<input type="submit" name="modifier" value="Modifier l'article'">
		</form>

	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>