<?php $this->layout('layoutType', ['title' => 'Liste des article - SMARNUBIS', 'content' => 'Gestion des articles relatif à la loi pour le SMARNUBIS, page réservée à l\'administrateur']) ?>

<?php $this->start('main_content') ?>

	<h1>Liste des articles</h1>
	
	<section>
	<?php
			if(! empty($messages)){ ?>
				<div class="row" style="background-color: green;color: white;font-weight: bold;">
					<h2>Message :</h2>
						
						<p><?= $message ?></p>
					
				</div>
			<?php } ?>

	
	<a href="<?= $this->url('ajoutArticles') ?>"><button>Ajouter un article</button></a>
	
	<?php
		foreach ($articles as $article) : ?>

		<h2><?= $this->e($article['titre']) ?> (<?= $this->e($article['categorie']) ?>)</h2>
		<a href="<?= $this->e($article['id']) ?>/modificationArticle">Modifier l'article</a>
		-- <a href="<?= $this->e($article['id']) ?>/deleteArticle">Supprimer l'article'</a>
		
			
		<?php endforeach ?>
	</section>

<?php $this->stop('main_content') ?>