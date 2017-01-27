<?php $this->layout('layoutType', ['title' => 'Gestion du conseil d\'administration']) ?>

<?php $this->start('main_content') ?>

	<h1>Gestion du conseil d'administration</h1>


		<section>
			<a href="/ajoutConseil"><button>Ajouter un membre</button></a>

			<?php
				foreach ($delegues as $delegue) : ?>

				<h2><?= $this->e($delegue['titre']) ?> : <?= $this->e($delegue['identite']) ?></h2>
				<a href="<?= $this->e($delegue['id']) ?>/updateConseil">Modifier</a>
				-- <a href="<?= $this->e($delegue['id']) ?>/deleteConseil">Supprimer</a>
					
				<?php endforeach ?>
		
		</section>


<?php $this->stop('main_content') ?>