<?php $this->layout('layoutType', ['title' => 'Liste des news - SMARNUBIS - Administration', 'description' => 'Gestion des news du site SMARNUBIS (réservé à l\'administrateur']) ?>

<?php $this->start('main_content') ?>

	<h1>Liste des News du Smarnubis</h1>
	
	<section>
	<?php
			if(! empty($messages)){ ?>
				<div class="row" style="background-color: green;color: white;font-weight: bold;">
					<h2>Message :</h2>
						
						<p><?= $messages ?></p>
					
				</div>
			<?php } ?>

	
	<a href="<?= $this->url('ajoutNews') ?>"><button>Ajouter une News</button></a>
	
	<?php
		foreach ($articles as $article) : ?>

		<h2><?= $this->e($article['titre']) ?> (<?= $this->e($article['categorie']) ?>)</h2>
		<a href="<?= $this->e($article['id']) ?>/modificationNews">Modifier la News</a>
		-- <a href="<?= $this->e($article['id']) ?>/deleteNews">Supprimer la News'</a>
		
			
		<?php endforeach ?>
	</section>

<?php $this->stop('main_content') ?>