<?php $this->layout('layoutType', ['title' => 'Ajouter un délégué régional - SMARNUBIS ', 'description' => 'Ajouter ici un nouveau délégué régional réservé à l\'administrateur.']) ?>

<?php $this->start('main_content') ?>

	<h2>Ajout d'un délégué</h2>

	<main>
	<a href="/gestionDelegue">Retour à la gestion des délégués</a>

		<?php
			if(! empty($erreurs)){ ?>
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
			<label for="identite">Identité du délégué (Sous la forme : "Dr Nom Prénom")</label>
			<input type="text" name="myform[identite]" placeholder="Identité du délégué" <?php if(isset($_POST['myform']['identite'])){?> value="<?= $_POST['myform']['identite']?>"<?php } ?>">

			<label for="region" >Région d'exercice :</label>
			<select name="myform[region]">
				<option value="">Sélectionner la région d'exercice.</option>
				<option value="Auvergne-Rhone-Alpes">Auvergne-Rhone-Alpes</option>
				<option value="Bourgogne-Franche-Compté">Bourgogne-Franche-Compté</option>
				<option value="Bretagne">Bretagne</option>
				<option value="Corse">Corse</option>
				<option value="Centre-Val-de-Loire">Centre-Val-de-Loire</option>
				<option value="Grands-Est">Grands-Est</option>
				<option value="Hauts-de-France">Hauts-de-France</option>
				<option value="Ile-de-France">Ile-de-France</option>
				<option value="Normandie">Normandie</option>
				<option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
				<option value="Occitanie">Occitanie</option>
				<option value="Provence-Alpes-Cote-d'Azur">Provence-Alpes-Cote-d'Azur</option>
				<option value="Pays-de-la-loire">Pays-de-la-loire</option>
			</select>

			<label for="departements">Départements d'exercices (Sous la forme : "00 - 00 - 00")</label>
			<input type="text" name="myform[departements]" placeholder="00 - 00 - 00" <?php if(isset($_POST['myform']['departements'])){?> value="<?= $_POST['myform']['departements']?>"<?php } ?>">

			<label for="lieuExercice">Lieu d'exercice principal du praticien</label>
			<input type="text" name="myform[lieuExercice]" placeholder="Lieu d'exercice" <?php if(isset($_POST['myform']['lieuExercice'])){?> value="<?= $_POST['myform']['lieuExercice']?>"<?php } ?>">

			<h3>Numéros de téléphones, si non renseigné, laisser le champ vide.</h3>
			<label for="telPrincipal">Principal :</label>
			<input type="text" name="myform[telPrincipal]" placeholder="Téléphone principal" <?php if(isset($_POST['myform']['telPrincipal'])){?> value="<?= $_POST['myform']['telPrincipal']?>"<?php } ?>">

			<label for="telSecondaire">Secondaire :</label>
			<input type="text" name="myform[telSecondaire]" placeholder="Téléphone secondaire" <?php if(isset($_POST['myform']['telSecondaire'])){?> value="<?= $_POST['myform']['telSecondaire']?>"<?php } ?>">

			<label for="telPortable">Portable :</label>
			<input type="text" name="myform[telPortable]" placeholder="Téléphone portable" <?php if(isset($_POST['myform']['telPortable'])){?> value="<?= $_POST['myform']['telPortable']?>"<?php } ?>">

			<label for="telBureau">Bureau :</label>
			<input type="text" name="myform[telBureau]" placeholder="Téléphone du bureau" <?php if(isset($_POST['myform']['telBureau'])){?> value="<?= $_POST['myform']['telBureau']?>"<?php } ?>">

			<label for="telBureau">Fax :</label>
			<input type="text" name="myform[fax]" placeholder="Numéro de fax" <?php if(isset($_POST['myform']['fax'])){?> value="<?= $_POST['myform']['fax']?>"<?php } ?>">

			<label for="email">Email du praticien :</label>
			<input type="text" name="myform[email]" placeholder="Email du praticien" <?php if(isset($_POST['myform']['email'])){?> value="<?= $_POST['myform']['email']?>"<?php } ?>">

			
			<input type="submit" name="ajouter" value="Ajouter le délégué régional">
		</form>

	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>