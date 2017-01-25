<?php $this->layout('layoutType', ['title' => 'Modifier un délégué régional']) ?>

<?php $this->start('main_content') ?>

	<h2>Modification d'un délégué</h2>

	<main>
	<a href="/gestionDelegue">Retour à la gestion des délégués</a>
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
			<label for="identite">Identité du délégué (Sous la forme : "Dr Nom Prénom")</label>
			<input type="text" name="myform[identite]" value="<?= $this->e($delegues['identite']) ?>">

			<label for="region" >Région d'exercice :</label>
			<select name="myform[region]">
				<option value="">Sélectionner la région d'exercice.</option>
				<option value="Auvergne-Rhone-Alpes" <?= (($delegues['region']) == "Auvergne-Rhone-Alpes") ? "selected" : "" ?>>Auvergne-Rhone-Alpes</option>
				<option value="Bourgogne-Franche-Comté" <?= (($delegues['region']) == "Bourgogne-Franche-Comté") ? "selected" : "" ?>>Bourgogne-Franche-Comté</option>
				<option value="Bretagne" <?= (($delegues['region']) == "Bretagne") ? "selected" : "" ?>>Bretagne</option>
				<option value="Corse" <?= (($delegues['region']) == "Corse") ? "selected" : "" ?>>Corse</option>
				<option value="Centre-Val-de-Loire" <?= (($delegues['region']) == "Centre-Val-de-Loire") ? "selected" : "" ?>>Centre-Val-de-Loire</option>
				<option value="Grands-Est" <?= (($delegues['region']) == "Grands-Est") ? "selected" : "" ?>>Grands-Est</option>
				<option value="Hauts-de-France" <?= (($delegues['region']) == "Hauts-de-France") ? "selected" : "" ?>>Hauts-de-France</option>
				<option value="Ile-de-France" <?= (($delegues['region']) == "Ile-de-France") ? "selected" : "" ?>>Ile-de-France</option>
				<option value="Normandie" <?= (($delegues['region']) == "Normandie") ? "selected" : "" ?>>Normandie</option>
				<option value="Nouvelle-Aquitaine" <?= (($delegues['region']) == "Nouvelle-Aquitaine") ? "selected" : "" ?>>Nouvelle-Aquitaine</option>
				<option value="Occitanie" <?= (($delegues['region']) == "Occitanie") ? "selected" : "" ?>>Occitanie</option>
				<option value="Provence-Alpes-Cote-d'Azur" <?= (($delegues['region']) == "Provence-Alpes-Cote-d'Azur") ? "selected" : "" ?>>Provence-Alpes-Cote-d'Azur</option>
				<option value="Pays-de-la-loire" <?= (($delegues['region']) == "Pays-de-la-loire") ? "selected" : "" ?>>Pays-de-la-loire</option>
			</select>

			<label for="departements">Départements d'exercices (Sous la forme : "00 - 00 - 00")</label>
			<input type="text" name="myform[departements]" value="<?= $this->e($delegues['departements']) ?>">

			<label for="lieuExercice">Lieu d'exercice principal du praticien</label>
			<input type="text" name="myform[lieuExercice]" value="<?= $this->e($delegues['lieuExercice']) ?>">

			<h3>Numéros de téléphones, si non renseigné, laisser le champ vide.</h3>
			<label for="telPrincipal">Principal :</label>
			<input type="text" name="myform[telPrincipal]" value="<?= $this->e($delegues['telPrincipal']) ?>">

			<label for="telSecondaire">Secondaire :</label>
			<input type="text" name="myform[telSecondaire]" value="<?= $this->e($delegues['telSecondaire']) ?>">

			<label for="telPortable">Portable :</label>
			<input type="text" name="myform[telPortable]" value="<?= $this->e($delegues['telPortable']) ?>">

			<label for="telBureau">Bureau :</label>
			<input type="text" name="myform[telBureau]" value="<?= $this->e($delegues['telBureau']) ?>">

			<label for="telBureau">Bureau :</label>
			<input type="text" name="myform[telBureau]" value="<?= $this->e($delegues['fax']) ?>">

			<label for="email">Email du praticien :</label>
			<input type="text" name="myform[email]" value="<?= $this->e($delegues['email']) ?>">

			
			<input type="submit" name="modifier" value="Modifier le délégué régional">
		</form>

	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>