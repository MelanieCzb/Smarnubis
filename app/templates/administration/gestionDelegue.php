<?php $this->layout('layout', ['title' => 'Liste des délégués régionaux']) ?>

<?php $this->start('main_content') ?>

	<h2>Liste des délégués</h2>

	<main>
	<a href="/ajoutDelegue">Ajouter un délégué</a>

	<?php
		foreach ($delegues as $delegue) : ?>

		<h3><?= $this->e($delegue['identite']) ?></h3>
		-- <a href="<?= $this->e($delegue['id']) ?>/updateDelegue">Modifier le délégué</a>
		-- <a href="<?= $this->e($delegue['id']) ?>/deleteDelegue">Supprimer le délégué</a>
			
		<?php endforeach ?>
		
		
	</main>
	
</body>
</html>
<?php $this->stop('main_content') ?>