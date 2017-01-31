<?php $this->layout('layoutType', ['title' => 'Liste des délégués régionaux - SMARNUBIS', 'description' => 'Retrouvez ici la liste des délégués régionaux ainsi que leurs coordonnées.']) ?>

<?php $this->start('main_content') ?>
	<h1>Délégués Régionaux</h1>
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
						<p><span>Lieu d'exercice : </span> <?= $delegue['lieuExercice'] ?></p>
					<?php } ?>

					<?php
					if(! empty($delegue['telPrincipal'])){?>
						<p><span>Tel principal : </span> <?= $delegue['telPrincipal'] ?></p>
					<?php } ?>

					<?php
					if(! empty($delegue['telSecondaire'])){?>
						<p><span>Tel secondaire : </span> <?= $delegue['telSecondaire']?></p>
					<?php } ?>

					<?php
					if(! empty($delegue['telPortable'])){?>
						<p><span>Tel portable : </span> <?= $delegue['telPortable']?></p>
					<?php } ?>

					<?php
					if(! empty($delegue['telBureau'])){?>
						<p><span>Tel bureau : </span> <?= $delegue['telBureau']?></p>
					<?php } ?>

				<?php	
				if(! empty($delegue['email'])){ ?>
					<p><span>email : </span> <?= $delegue['email'] ?></p>
					<?php }?>
			</article>
			<?php endforeach ?>
	</section>

	<?php $this->stop('main_content') ?>
