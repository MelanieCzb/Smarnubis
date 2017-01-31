<?php $this->layout('layoutType', ['title' => 'Formulaire vigilance risques - SMARNUBIS', 'description' => 'Retrouvez ici le formulaire de la cellule vigilance risque.']) ?>

<?php $this->start('main_content') ?>

	<h1>Formulaire Vigilance Risque</h1>
		
	<section>

	<?php
			if(! empty($erreurs)) { ?>
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
			if(! empty($message)) { ?>
				<div class="row" style="background-color: green;color: white;font-weight: bold;">
					
						<?= $message ?>

				</div>
		<?php }
		?>

		<h2>Qu'est ce que la cellule de vigilance ?</h2>

		<article>
			<p>Devant la volonté politique de vouloir absolument « rentabiliser » l'hôpital public, le SMARNU décide de mettre en place un cellule de vigilance. Cette cellule vise à recenser un maximum de situations anormales voire dangereuses motivés par la pression financière.</p>
			<p>On pourra par exemple déclarer : </p>
			<ul>
				<li>une absence de réponse à un dysfonctionnement déclaré,</li>
				<li>des locaux ou matériels non conformes, vétustes ou insuffisants avec absence de remise aux normes,</li>
				<li>le non respect du temps de travail maximum ou du repos de sécurité des praticiens,</li>
				<li>des lignes de gardes en quantité insuffisantes par rapport à la charge de travail ou aux réglementations,</li>
				<li>le non respect de la notion de volontariat pour le déclenchement du temps additionnel,</li>
				<li>un rythme de travail imposé non compatible avec les bonnes pratiques médicales,</li>
				<li>des pressions administratives ou de confrères pour réaliser des actes dépassant vos compétences ou celles du plateau technique,</li>
				<li>le payement du praticien non conforme à la législation (temps de travail additionnel, primes, astreintes) ou des omissions sur le décompte du temps de travail,</li>
				<li>etc...</li>
			</ul>
			<p><span>Le SMARNU s'engage à étudier l'ensemble des déclarations et vous accompagner, si la situation le justifie, dans vos différentes démarches pour obtenir des ajustements nécessaires.</span></p>
		</article>
		
		<form action="" method="POST">
			<input type="text" name="myform[nom]" placeholder="Votre nom">
			<input type="text" name="myform[prenom]" placeholder="Votre prénom">
			<input type="text" name="myform[email]" placeholder="Votre email">
			<textarea name="myform[message]" placeholder = "Votre message"></textarea>
			<input type="submit" name="envoyer" value="Envoyer votre message">
		</form>

	</section>
		
		
<?php $this->stop('main_content') ?>