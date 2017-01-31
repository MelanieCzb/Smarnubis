<?php $this->layout('layoutType', ['title' => 'News du site - SMARNUBIS', 'description' => 'Retrouvez toutes les news du site SMARNUBIS']) ?>

<?php $this->start('main_content') ?>
	
	<h1>Détail de la news</h1>

<section>
		
		<h2><?= $this->e($article['titre']) ?></h2>
		<p><i><?= $this->e($article['resume']) ?></i></p>
		<p><?= $this->e($article['contenu']) ?></p>
		<span><?= $this->e($article['signature']) ?></span>


	</section>

<?php $this->stop('main_content') ?>
