<?php $this->layout('layoutType', ['title' => 'Liste des messages de vigilance - SMARNUBIS', 'content' => 'Gestion des messages transmis par le formulaire de vigilance pour le SMARNUBIS, page réservée à l\'administrateur']) ?>

<?php $this->start('main_content') ?>

	<h1>Liste des articles</h1>
	
	<section>

	<?php
		foreach ($vigilance as $message) : ?>

		<button class="accordion"><h2><h2><?= $this->e($message['nom']) ?> <?= $this->e($message['prenom']) ?></h2></button>
		<div class="panel">
			<p><?= $this->e($message['email']) ?></br>
			<?= $this->e($message['message']) ?></p>
			<a href="<?= $this->e($message['id']) ?>/deleteVigilance">Supprimer</a>
		</div>
		
			
		<?php endforeach ?>

		<?php
			if(empty($vigilance)){ ?>
				<h2> Aucun nouvel enregistrement actuellement </h2>
			<?php } ?>
	</section>

<?php $this->stop('main_content') ?>