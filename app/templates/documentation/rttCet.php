<?php $this->layout('layoutType', ['title' => 'R.T.T / C.E.T.']) ?>

<?php $this->start('main_content') ?>
	<h1> Textes RTT / CET</h1>

	<section>
		
		<h2>Textes CET DE 2008</h2>
		
		<p>Décret n° 2008-455 du 14 mai 2008</p>
		<a href="<?= $this->assetUrl('pdf/decret-cet-2008-455-du-14-mai-2008.pdf') ?>">relatif aux modalités d'indemnisation des jours accumulés sur le compte épargne-temps.</a>
		
		<p>Arrêté du 14 mai 2008</p>
		<a href="<?= $this->assetUrl('pdf/arrete-cet-14-mai-2008.pdf') ?>">fixant le montant de l'indemnisation des jours accumulés sur leur compte épargne-temps par les personnels médicaux;
		</a>

		<h2>Textes règlementaires et rapports</h2>

		<a href="<?= $this->assetUrl('pdf/CadrageARTT-Final-22-10-01.pdf') ?>">Cadrage National</a>
		<p>22 Octobre 2001</p>
		<a href="<?= $this->assetUrl('pdf/fiches-techniques-ARTT.pdf') ?>">Fiches Techniques du ministère sur l’ARTT</a>
		<p>Novembre 2001</p>

	</section>
<?php $this->stop('main_content') ?>
