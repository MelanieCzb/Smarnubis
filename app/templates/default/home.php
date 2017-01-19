<?php $this->layout('layout', ['title' => 'Smarnubis']) ?>

<?php $this->start('main_content') ?>
	<h2>Site du smarnubis</h2>

	<?php
	if (isset($_SESSION['user'])) { print_r($_SESSION); ?>
	
	<h2>Bienvenue <?= $_SESSION['user']['username']; ?></h2>

		<a href="<?= $this->e('logout') ?>">Logout</a>
	<?php }else{ ?>
		<a href="<?= $this->e('login') ?>">Login</a>
	<?php }	?>
	<br><br>
<a href="<?= $this->e('presentation') ?>">Qui sommes nous ?</a><br><br>


<?php $this->stop('main_content') ?>
