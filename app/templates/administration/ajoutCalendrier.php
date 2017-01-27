<?php $this->layout('layoutType', ['title' => 'Ajouter un évènement au calendrier du Smarnu - Smarnubis', 'description' => 'Page d\'ajout d\'évènement au calendrier du SMARNUBIS réservé à l\'administrateur.']) ?>

<?php $this->start('main_content') ?>

	<h2>Ajouter un évènement</h2>

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
		<label for="date">Date : </label>
			<input type="date" name="myform[date]" <?php if(isset($_POST['myform']['date'])){?> value="<?= $_POST['myform']['date']?>"<?php } ?>">

			<label for="titre">Titre : </label>
			<input type="text" name="myform[titre]" placeholder="Titre de l'évènement" <?php if(isset($_POST['myform']['titre'])){?> value="<?= $_POST['myform']['titre']?>"<?php } ?>">

			<label for="contenu">Description :</label>
			<textarea name="myform[contenu]"><?php if(isset($_POST['myform']['contenu'])){?> <?= $_POST['myform']['contenu']?><?php } ?></textarea>
		
			
			<input type="submit" name="ajouter" value="Ajouter l'article">
		</form>
	</section>

	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>