<?php $this->layout('layout', ['title' => 'Le smarnubis']) ?>

<?php $this->start('main_content') ?>
	<h2>Délégués régionaux.</h2>
	<section>
	
		<?php 
			foreach ($delegues as $delegue) : ?>
				<h3><?= $this->e($delegue['identite']) ?></h3>
				<p><?= $this->e($delegue['region']) ?> 
				<?php 
					if(! empty($delegue['departements'])){
						echo " (Depts : " .$delegue['departements']. ")";
					} ?>
				<?php 
					if(! empty($delegue['telPrincipal'])){?>
						Tel principal : <?= $delegue['telPrincipal'];
					}

					if(! empty($delegue['telSecondaire'])){?>
						Tel principal : <?= $delegue['telPrincipal'];
					}

					if(! empty($delegue['telPortable'])){?>
						Tel principal : <?= $delegue['telPrincipal'];
					}

					if(! empty($delegue['telBureau'])){?>
						Tel principal : <?= $delegue['telPrincipal'];
					}

					?>

				<?php

				if(! empty($delegue['email'])){ ?>
					email : <?= $delegue['email']; ?>
					<?php }?>
				
			<?php endforeach ?>
	</section>

	<?php $this->stop('main_content') ?>
