<?php $this->layout('layoutType', ['title' => 'Agenda : présentation des la liste des évènements liés au calendrier - SMARNUBIS', 'description' => 'Retrouvez ici la liste de nos évènments' ]) ?>

<?php $this->start('main_content') ?>
	

	<h1>Événements</h1>

<section>
	<?php
	foreach ($evenements as $evenement) : ?>

	<button class="accordion"><h2><?= $this->e($evenement['date']) ?> - <?= $this->e($evenement['titre']) ?></h2></button>
	<div class="panel">
		<p><?= $this->e($evenement['contenu']) ?></p>
		
	</div>
	
<?php endforeach ?>

</section>
<?php $this->stop('main_content') ?>
