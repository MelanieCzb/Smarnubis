<?php $this->layout('layoutType', ['title' => 'Le smarnubis']) ?>

<?php $this->start('main_content') ?>
	<h1>Délégués régionaux.</h1>
	<section>
	
		<?php 
			foreach ($delegues as $delegue) : ?>
				<article>
				<h2><?= $this->e($delegue['identite']) ?></h2>
				<p><?= $this->e($delegue['region']) ?> 
				<?php 
					if(! empty($delegue['departements'])){
						echo " (Depts : " .$delegue['departements']. ")";
					} 

					if(! empty($delegue['lieuExercice'])){ ?>
						<p>Lieu d'exercice : <?= $delegue['lieuExercice'] ?></p>
					<?php } ?>

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

				if(! empty($delegue['email'])){ ?>
					email : <?= $delegue['email']; ?>
					<?php }?>
			</article>
			<?php endforeach ?>
	</section>

	<?php $this->stop('main_content') ?>
