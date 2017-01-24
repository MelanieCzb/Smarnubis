<?php $this->layout('layout', ['title' => 'Nouveaux textes']) ?>

<?php $this->start('main_content') ?>
	
<section>

	<?php
		foreach ($articles as $article) : ?>
		<article>
			<h3><?= $this->e($article['titre']) ?></h3>
			<p><?= $this->e($article['contenu']) ?></p>

			<a href="<?= $this->assetUrl('uploads/'.$this->e($article['fichier']).''); ?>" target="_blank">Télécharger le PDF</a>
		</article>
			
		<?php endforeach ?>

	</section>


<?php $this->stop('main_content') ?>
