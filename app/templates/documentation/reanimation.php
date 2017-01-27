<?php $this->layout('layoutType', ['title' => 'Réanimation']) ?>

<?php $this->start('main_content') ?>
	<h1>Réanimations</h1>

	<section>
		
		<h2>Textes règlementaires et rapports</h2>

		<a href="<?= $this->assetUrl('pdf/circulaireREA27082003.pdf') ?>">Circulaire n°2003/413 relative aux établissements de santé pratiquant la réanimation, les soins intensifs et la surveillance continue</a>
		<p>27 août 2003</p>
		<a href="<?= $this->assetUrl('pdf/decr-2002-466-REA.pdf') ?>">Décret n°2002-465 du 5 avril 2002 relatif aux établissements de santé pratiquant la réanimation</a>
		<p>J.O. 7 avril 2002</p>
		<a href="<?= $this->assetUrl('pdf/dec-2002-466-REA.pdf') ?>">Décret n°2002-466 du 5 avril 2002 relatif aux conditions techniques de fonctionnement auxquelles doivent satisfaire les établissements de santé pour pratiquer les activités de réanimation, de soins intensifs, et de surveillance continue.</a>
		<p>J.O. 7 avril 2002</p>

	</section>
<?php $this->stop('main_content') ?>
