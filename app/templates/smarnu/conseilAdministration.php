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
							<p><span>Téléphone : </span><?= $delegue['telPrincipal'] ?></p>
						<?php } ?>

						<?php if(! empty($delegue['telBureau'])){ ?>
							<p><span>Bureau : </span><?= $delegue['telBureau'] ?></p>
						<?php } ?>

						<?php if(! empty($delegue['telPortable'])){ ?>
							<p><span>Portable : </span><?= $delegue['telPortable'] ?></p>
						<?php } ?>

						<?php if(! empty($delegue['telHopital'])){ ?>
							<p><span>Hopital : </span><?= $delegue['telHopital'] ?></p>
						<?php } ?>

						<?php if(! empty($delegue['telSecondaire'])){ ?>
							<p><span>Secondaire : </span><?= $delegue['telSecondaire'] ?></p>
						<?php } ?>

						<?php if(! empty($delegue['fax'])){ ?>
							<p><span>Fax : </span><?= $delegue['fax'] ?></p>
						<?php } ?>
					</p>

				<?php if(! empty($delegue['email'])){ ?>
						<p><span>Email : </span><?= $delegue['email'] ?></p>
					<?php } ?>
				
					
				<?php endforeach ?>

	</section>


<?php $this->stop('main_content') ?>
