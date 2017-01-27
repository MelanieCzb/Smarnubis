<?php $this->layout('layoutType', ['title' => 'Liste des news - SMARNUBIS - Administration', 'description' => 'Gestion des news du site SMARNUBIS (réservé à l\'administrateur']) ?>

<?php $this->start('main_content') ?>

	<h1>Liste des évènements du Smarnubis</h1>
	
	<section>
	<?php
			if(! empty($messages)){ ?>
				<div class="row" style="background-color: green;color: white;font-weight: bold;">
					<h2>Message :</h2>
						
						<p><?= $messages ?></p>
					
				</div>
			<?php } ?>

	
	<a href="<?= $this->url('ajoutCalendrier') ?>"><button>Ajouter un évènement</button></a>
	
	<?php
		foreach ($evenements as $evenement) : ?>

		<h2><?= $this->e($evenement['titre']) ?></h2>
		<a href="<?= $this->e($evenement['id']) ?>/modificationCalendrier">Modifier l'évènement</a>
		-- <a href="<?= $this->e($evenement['id']) ?>/deleteCalendrier">Supprimer l'évènement</a>
		
			
		<?php endforeach ?>
	</section>

<?php $this->stop('main_content') ?>