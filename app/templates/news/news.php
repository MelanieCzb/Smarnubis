<?php $this->layout('layoutType', ['title' => 'News du site - SMARNUBIS', 'description' => 'Retrouvez toutes les news du site SMARNUBIS']) ?>

<?php $this->start('main_content') ?>
	
<section>
	<h1>News</h1>




	<?php
		foreach ($articles as $article) : ?>

			<button class="accordion"><h2><?= $this->e($article['titre']) ?></h2></button>
				<div class="panel">
  					<p><?= $this->e($article['resume']) ?></p>
  					<a href="<?= $this->e($article['id']) ?>/detailNews">Détail de la news</a>
				</div>
			
		<?php endforeach ?>

	</section>

<?php $this->stop('main_content') ?>
