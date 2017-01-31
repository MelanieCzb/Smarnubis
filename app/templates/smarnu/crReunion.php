<?php $this->layout('layoutType', ['title' => 'Compte rendu de réunion - SMARNUBIS', 'description' => 'Retrouvez ici la liste des comptes-rendus de réunions.']) ?>

<?php $this->start('main_content') ?>

<section>
	<h1>Compte rendu de réunion</h1>

	<?php
		foreach ($articles as $article) : ?>

			<button class="accordion"><h2><?= $this->e($article['titre']) ?></h2></button>
				<div class="panel">
  					<p><?= $this->e($article['contenu']) ?></p>
  					<a href="<?= $this->assetUrl('uploads/'.$this->e($article['fichier']).''); ?>" target="_blank">Télécharger le PDF</a>
				</div>
			
		<?php endforeach ?>

	</section>

<?php $this->stop('main_content') ?>
