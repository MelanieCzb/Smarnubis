<?php $this->layout('layoutType', ['title' => 'Archives du SMARNUBIS', 'description' => 'Archives comprenant toutes les anciennes news du SMARNUBIS']) ?>

<?php $this->start('main_content') ?>
	
<section>
	<h1>Archives</h1>




	<?php
		foreach ($articles as $article) : ?>

			<button class="accordion"><h2><?= $this->e($article['titre']) ?></h2></button>
				<div class="panel">
  					<p><?= $this->e($article['contenu']) ?></p>
				</div>
			
		<?php endforeach ?>

	</section>

<?php $this->stop('main_content') ?>
