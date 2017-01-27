<?php $this->layout('layoutType', ['title' => 'Conseil d\'administration']) ?>

<?php $this->start('main_content') ?>
	<h1>Conseil d'administration</h1>

	<section>
		
		<?php
				foreach ($delegues as $delegue) : ?>

				<h2><?= $this->e($delegue['titre']) ?> : <?= $this->e($delegue['identite']) ?></h2>
				<?php if(! empty($delegue['lieuTravail'])){ ?>
						<p><?= $delegue['lieuTravail'] ?></p>
					<?php } ?>

					<p>
						<?php if(! empty($delegue['telPrincipal'])){ ?>
							Téléphone :<?= $delegue['telPrincipal'] ?><br>
						<?php } ?>

						<?php if(! empty($delegue['telBureau'])){ ?>
							Bureau :<?= $delegue['telBureau'] ?><br>
						<?php } ?>

						<?php if(! empty($delegue['telPortable'])){ ?>
							Portable :<?= $delegue['telPortable'] ?><br>
						<?php } ?>

						<?php if(! empty($delegue['telHopital'])){ ?>
							Hopital :<?= $delegue['telHopital'] ?><br>
						<?php } ?>

						<?php if(! empty($delegue['telSecondaire'])){ ?>
							Secondaire :<?= $delegue['telSecondaire'] ?><br>
						<?php } ?>

						<?php if(! empty($delegue['fax'])){ ?>
							Fax :<?= $delegue['fax'] ?><br>
						<?php } ?>
					</p>

				<?php if(! empty($delegue['email'])){ ?>
						<p><?= $delegue['email'] ?></p>
					<?php } ?>
				
					
				<?php endforeach ?>

	</section>


<?php $this->stop('main_content') ?>
