<?php $this->layout('layoutType', ['title' => 'Modifier un délégué régional - SMARNUBIS', 'description' => 'Modification des délégués régionaux adhérant au SMARNUBIS']) ?>

<?php $this->start('main_content') ?>

	<h2>Modification d'un délégué</h2>

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

		<?php

			if(! empty($messages)){?>
				<div class="row" style="background-color: green;color: white;font-weight: bold;">
					<h3>Messages :</h3>
					<ul>
						<?php foreach($messages as $message) { ?>
						<li><?= $message ?></li>
						<?php } ?>
					</ul>
				</div>
		<?php }
		?>
		
		<form action="" method="POST">
			<label for="identite">Identité du membre (Sous la forme : "Dr Nom Prénom")</label>
			<input type="text" name="myform[identite]" placeholder="Identité du délégué" <?php if(isset($_POST['myform']['identite'])){?> value="<?= $_POST['myform']['identite']?>"<?php } ?>">

			<label for="region" >Titre :</label>
			<select name="myform[titre]">
				<option value=""> -- Titre -- </option>
				<option value="president">Président</option>
				<option value="vice-president">Vice Président</option>
				<option value="secretaire-general">Secrétaire général</option>
				<option value="tresorier">Trésorier</option>
				<option value="membre">>Membre</option>
				<option value="membre-honoraire">Membre honoraire</option>
				<option value="president-honneur">Président d'honneur</option>
			</select>

			<label for="lieuExercice">Lieu d'exercice principal du praticien</label>
			<input type="text" name="myform[lieuTravail]" placeholder="Lieu d'exercice"  <?php if(isset($_POST['myform']['lieuExercice'])){?> value="<?= $_POST['myform']['lieuExercice']?>"<?php } ?>>

			<h3>Numéros de téléphones, si non renseigné, laisser le champ vide.</h3>
			<label for="telPrincipal">Principal :</label>
			<input type="text" name="myform[telPrincipal]" placeholder="Téléphone principal" <?php if(isset($_POST['myform']['telPrincipal'])){?> value="<?= $_POST['myform']['telPrincipal']?>"<?php } ?>">

			<label for="telSecondaire">Secondaire :</label>
			<input type="text" name="myform[telSecondaire]" placeholder="Téléphone secondaire" <?php if(isset($_POST['myform']['telSecondaire'])){?> value="<?= $_POST['myform']['telSecondaire']?>"<?php } ?>">

			<label for="telPortable">Portable :</label>
			<input type="text" name="myform[telPortable]" placeholder="Téléphone portable" <?php if(isset($_POST['myform']['telPortable'])){?> value="<?= $_POST['myform']['telPortable']?>"<?php } ?>">

			<label for="telBureau">Bureau :</label>
			<input type="text" name="myform[telBureau]" placeholder="Téléphone bureau" <?php if(isset($_POST['myform']['telBureau'])){?> value="<?= $_POST['myform']['telBureau']?>"<?php } ?>">

			<label for="telBureau">Hopital :</label>
			<input type="text" name="myform[telHopital]" placeholder="Téléphone Hopital" <?php if(isset($_POST['myform']['telHopital'])){?> value="<?= $_POST['myform']['telHopital']?>"<?php } ?>">

			<label for="telBureau">Fax :</label>
			<input type="text" name="myform[fax]" placeholder="Numéro de fax" <?php if(isset($_POST['myform']['fax'])){?> value="<?= $_POST['myform']['fax']?>"<?php } ?>">

			<label for="email">Email du praticien :</label>
			<input type="text" name="myform[email]" placeholder="Email" <?php if(isset($_POST['myform']['email'])){?> value="<?= $_POST['myform']['email']?>"<?php } ?>">

			
			<input type="submit" name="ajouter" value="Ajouter un membre">
		</form>

	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>