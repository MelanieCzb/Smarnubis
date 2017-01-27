<?php $this->layout('layoutType', ['title' => 'Agenda']) ?>

<?php $this->start('main_content') ?>
	

	<h1>Calendrier</h1>

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
