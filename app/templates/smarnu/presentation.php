<?php $this->layout('layout', ['title' => 'Le smarnubis']) ?>

<?php $this->start('main_content') ?>
	<h2>Qui sommes nous ?</h2>

		<ul>
			<li><a href="<?= $this->e('deleguesRegionaux') ?>">Délégués Régionaux</a></li>
		</ul>

	<?php $this->stop('main_content') ?>
