<?php $this->layout('layoutType', ['title' => 'Newsletter']) ?>

<?php $this->start('main_content') ?>
	
<h1>Newsletter du SMARNUBIS</h1>

	<section>
		
			<h2>Inscription</h2>
		<!--<div id="news">-->
			<!--<div id="form">-->
				<p>Inscrivez-vous à la newsletter du Smarnubis pour recevoir les dernière actualités juridiques, les compte-rendus de réunion, les dates des futures Assemblées Générales...</p>
				<p>Vous recevrez en moyenne 1 à 2 newsletters par mois.</p>
				<form method="POST" action="">
					<input type="text" name="myform[email]" placeholder="Votre email">
					<input type="submit" name="inscrire" value="S'inscrire">
				</form>
			<!--</div>-->
			
			<?php
					if(!empty($erreurs)){ ?>
					<div class="row" style="background-color: red;color: white;font-weight: bold;">
						<h3>Liste des erreurs</h3>
						<ul>
							<?php 
							foreach($erreurs as $erreur) { ?>
								<li><?= $erreur ?></li>
							<?php } ?>
						</ul>
					</div>
				<?php }

					if(!empty($messages)){ ?>
					<div class="row" style="background-color: green;color: white;font-weight: bold;">
						<ul>
							<?php 
							foreach($messages as $message) { ?>
								<li><?= $message ?></li>
							<?php } ?>
						</ul>
					</div>
				<?php }

			?>
			
			<h2>Exemple de nos Newsletter</h2>
			<img src="<?= $this->assetUrl('img/newsletterJanvier2017.png') ?>" alt="" class="newsletter">
		<!--</div>-->
	</section>
	
<?php $this->stop('main_content') ?>
