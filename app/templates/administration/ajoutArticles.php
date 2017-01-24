<?php $this->layout('layout', ['title' => 'Ajouter un délégué régional']) ?>

<?php $this->start('main_content') ?>

	<h2>Ajouter un article</h2>

		<?php
			if(!empty($erreurs)){ ?>
				<div class="row" style="background-color: red;color: white;font-weight: bold;">
					<h3>Liste des erreurs</h3>
					<ul>
						<?php 
						foreach($erreurs as $erreur) { ?>
							<li><?= $erreur ?></li>
						<?php } ?>
					</ul>
				</div>
		<?php } ?>
		
		<?php
			if(! empty($messages)){ ?>
				<div class="row" style="background-color: green;color: white;font-weight: bold;">
					<h3>Message :</h3>
					<ul>
						<?php 
						foreach($messages as $message) { ?>
						<li><?= $message ?></li>
						<?php } ?>
					</ul>
				</div>
			<?php } ?>
		
		
		<form action="" method="POST" enctype="multipart/form-data">
			<label for="titre">Titre de l'article</label>
			<input type="text" name="myform[titre]" placeholder="Titre de l'article" <?php if(isset($_POST['myform']['titre'])){?> value="<?= $_POST['myform']['titre']?>"<?php } ?>">

			<label for="contenu">Contenu de l'article</label>
			<textarea name="myform[contenu]"><?php if(isset($_POST['myform']['contenu'])){?> <?= $_POST['myform']['contenu']?><?php } ?></textarea>

			<label for="fichier">Fichier associé</label>
			<input type="file" name="myform[fichier]">

			<label for="categorie" >Région d'exercice :</label>
			<select name="myform[categorie]">
				<option value="">Sélectionner la catégorie de l'article.</option>
				<option value=""></option>
				<option value=""> --- Textes de loi --- </option>
				<option value="nouveaux-textes">Nouveaux textes</option>
				<option value="textes-europeens">Textes europeens</option>
				<option value="emoluments">Emoluments</option>
				<option value="gardes-astreintes">Gardes Astreintes</option>
			</select>

			
			
			<input type="submit" name="ajouter" value="Ajouter l'article">
		</form>

	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>