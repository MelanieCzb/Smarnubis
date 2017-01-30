<?php $this->layout('layoutType', ['title' => 'Liste des messages de vigilance - SMARNUBIS', 'content' => 'Gestion des messages transmis par le formulaire de vigilance pour le SMARNUBIS, page réservée à l\'administrateur']) ?>

<?php $this->start('main_content') ?>

	<h1>Liste des articles</h1>
	
	<section>

	<?php
		foreach ($vigilance as $message) : ?>

		<h2><?= $this->e($message['nom']) ?> <?= $this->e($message['prenom']) ?></h2>
		<p><?= $this->e($message['email']) ?></p>
		<p><?= $this->e($message['message']) ?></p>
		<a href="<?= $this->e($message['id']) ?>/deleteVigilance">Supprimer</a>
		
			
		<?php endforeach ?>
	</section>

<?php $this->stop('main_content') ?>