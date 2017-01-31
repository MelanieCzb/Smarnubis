<?php $this->layout('layoutType', ['title' => 'Liste des délégués régionaux - SMARNUBIS', 'description' => 'Retrouvez tout les délégués régionaux du site SMARNUBIS']) ?>

<?php $this->start('main_content') ?>

	<h1>Liste des délégués</h1>


		<section>
			<a href="/ajoutDelegue"><button>Ajouter un délégué</button></a>

			<?php
				foreach ($delegues as $delegue) : ?>

				<h2><?= $this->e($delegue['identite']) ?></h2>
				<a href="<?= $this->e($delegue['id']) ?>/updateDelegue">Modifier le délégué</a>
				-- <a href="<?= $this->e($delegue['id']) ?>/deleteDelegue">Supprimer le délégué</a>
					
				<?php endforeach ?>
		
		</section>

<?php $this->stop('main_content') ?>