<?php $this->layout('layoutType', ['title' => 'Ajouter une News']) ?>

<?php $this->start('main_content') ?>

	<h2>Ajouter une News</h2>

	<section>
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
		
		
		<form action="" method="POST">
			<label for="titre">Titre : </label>
			<input type="text" name="myform[titre]" placeholder="Titre de la news" <?php if(isset($_POST['myform']['titre'])){?> value="<?= $_POST['myform']['titre']?>"<?php } ?>">

			<label for="resume">Résumé :</label>
			<textarea name="myform[resume]"><?php if(isset($_POST['myform']['resume'])){?> <?= $_POST['myform']['resume']?><?php } ?></textarea>

			<label for="contenu">Contenu :</label>
			<textarea name="myform[contenu]"><?php if(isset($_POST['myform']['contenu'])){?> <?= $_POST['myform']['contenu']?><?php } ?></textarea>

			<label for="signature">Signature : </label>
			<input type="text" name="myform[signature]" placeholder="Signature" <?php if(isset($_POST['myform']['signature'])){?> value="<?= $_POST['myform']['signature']?>"<?php } ?>">

			<label for="categorie" >Catégorie de la News :</label>
			<select name="myform[categorie]">
				<option value="">Sélectionner la priorité d'archivage.</option>
				<option value=""></option>
				<option value="news">News</option>
				<option value="archives">Archives</option>
			</select>
			
			
			<input type="submit" name="ajouter" value="Ajouter l'article">
		</form>
	</section>

	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>