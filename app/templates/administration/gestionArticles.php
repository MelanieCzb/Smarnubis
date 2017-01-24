<?php $this->layout('layout', ['title' => 'Liste des délégués régionaux']) ?>

<?php $this->start('main_content') ?>

	<h2>Liste des articles</h2>

	<section>
	<a href="<?= $this->url('ajoutArticles') ?>">Ajouter un articles</a>
	</section>

	<section>
	<?php
		foreach ($articles as $article) : ?>

		<h3><?= $this->e($article['titre']) ?></h3>
		
			
		<?php endforeach ?>
	</section>

<?php $this->stop('main_content') ?>