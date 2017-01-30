<?php $this->layout('layoutType', ['title' => 'Calendrier : détail d\'un évènement - SMARNUBIS', 'description' => 'Retrouvez toutes les news du site SMARNUBIS']) ?>

<?php $this->start('main_content') ?>
	
	<h1>Détail de la news</h1>

<section>
		
		<h2><?= $this->e($evenement['titre']) ?></h2>
		<h2><?= $this->e($evenement['date']) ?></h2>
		<h3></h3>
		<?= $this->e($evenement['contenu']) ?>


	</section>

<?php $this->stop('main_content') ?>
