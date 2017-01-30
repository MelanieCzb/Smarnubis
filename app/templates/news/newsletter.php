<?php $this->layout('layoutType', ['title' => 'Newsletter']) ?>

<?php $this->start('main_content') ?>
	
<h1>Gestion de l'abonnement à la newsletter du SMARNUBIS</h1>

	<section>
		<h2>Inscription</h2>
		<form method="POST">
			<input type="email" name="myform['email']" placeholder="Votre email">
			<input type="submit" name="inscrire" value="S'inscrire">
		</form>

	</section>
<?php $this->stop('main_content') ?>
