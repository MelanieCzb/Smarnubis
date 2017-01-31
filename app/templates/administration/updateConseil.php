<?php $this->layout('layoutType', ['title' => 'Modifier un membre du conseil d\'administration - SMARNUBIS', 'description' => 'Modifiez les informations concernant les membres du conseil d\'administration']) ?>

<?php $this->start('main_content') ?>

	<h2>Modification d'un membre</h2>

	<main>
	<a href="/gestionConseil">Retour à la gestion du conseil</a>
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
			<label for="identite">Identité du membre (Sous la forme : "Dr Nom Prénom")</label>
			<input type="text" name="myform[identite]" value="<?= $this->e($delegues['identite']) ?>">

			<label for="region" >Titre :</label>
			<select name="myform[titre]">
				<option value=""> -- Titre -- </option>
				<option value="president" <?= (($delegues['titre']) == "president") ? "selected" : "" ?>>Président</option>
				<option value="vice-president" <?= (($delegues['titre']) == "vice-president") ? "selected" : "" ?>>Vice Président</option>
				<option value="secretaire-general" <?= (($delegues['titre']) == "secretaire-general") ? "selected" : "" ?>>Secrétaire général</option>
				<option value="tresorier" <?= (($delegues['titre']) == "tresorier") ? "selected" : "" ?>>Trésorier</option>
				<option value="membre" <?= (($delegues['titre']) == "membre") ? "selected" : "" ?>>Membre</option>
				<option value="membre-honoraire" <?= (($delegues['titre']) == "membre-honoraire") ? "selected" : "" ?>>Membre honoraire</option>
				<option value="president-honneur" <?= (($delegues['titre']) == "president-honneur") ? "selected" : "" ?>>Président d'honneur</option>
			</select>

			<label for="lieuExercice">Lieu d'exercice principal du praticien</label>
			<input type="text" name="myform[lieuTravail]" value="<?= $this->e($delegues['lieuTravail']) ?>">

			<h3>Numéros de téléphones, si non renseigné, laisser le champ vide.</h3>
			<label for="telPrincipal">Principal :</label>
			<input type="text" name="myform[telPrincipal]" value="<?= $this->e($delegues['telPrincipal']) ?>">

			<label for="telSecondaire">Secondaire :</label>
			<input type="text" name="myform[telSecondaire]" value="<?= $this->e($delegues['telSecondaire']) ?>">

			<label for="telPortable">Portable :</label>
			<input type="text" name="myform[telPortable]" value="<?= $this->e($delegues['telPortable']) ?>">

			<label for="telBureau">Bureau :</label>
			<input type="text" name="myform[telBureau]" value="<?= $this->e($delegues['telBureau']) ?>">

			<label for="telBureau">Hopital :</label>
			<input type="text" name="myform[telHopital]" value="<?= $this->e($delegues['telHopital']) ?>">

			<label for="telBureau">Fax :</label>
			<input type="text" name="myform[fax]" value="<?= $this->e($delegues['fax']) ?>">

			<label for="email">Email du praticien :</label>
			<input type="text" name="myform[email]" value="<?= $this->e($delegues['email']) ?>">

			
			<input type="submit" name="modifier" value="Modifier le délégué régional">
		</form>

	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>