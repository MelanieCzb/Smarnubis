<?php $this->layout('layout', ['title' => 'Modifier un délégué régional']) ?>

<?php $this->start('main_content') ?>

	<h2>Modification d'un article</h2>

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

			<label for="contenu">Contenu de l'article</label>
			<textarea name="myform[contenu]"><?php if(isset($_POST['myform']['contenu'])){?> <?= $_POST['myform']['contenu']?><?php } ?><?= $this->e($article['contenu']) ?></textarea>

			<label for="categorie" >Catégorie de l'article :</label>
			<select name="myform[categorie]">
			<option value="">Sélectionner la catégorie de l'article.</option>
				<option value=""></option>
				<option value=""> --- Textes de loi --- </option>
				<option value="nouveaux-textes" <?= (($article['categorie']) == "nouveaux-textes") ? "selected" : "" ?>>Nouveaux textes</option>
				<option value="textes-europeens" <?= (($article['categorie']) == "textes-europeens") ? "selected" : "" ?>>Textes europeens</option>
				<option value="emoluments" <?= (($article['categorie']) == "emoluments") ? "selected" : "" ?>>Emoluments</option>
				<option value="gardes-astreintes" <?= (($article['categorie']) == "gardes-astreintes") ? "selected" : "" ?>>Gardes & Astreintes</option>
				
			</select>

			
			<input type="submit" name="modifier" value="Modifier l'article'">
		</form>

	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>