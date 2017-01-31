 <?php $this->layout('layoutType', ['title' => 'Réanimation - SMARNUBIS', 'description' => 'Retrouvez ici les textes réglementaires ainsi que les rapports concernant la réanimation.'])?>

<?php $this->start('main_content')?>
	<h1>Réanimations</h1>

	<section>

		<h2>Textes règlementaires et rapports</h2>

		<p><a href="<?= $this->assetUrl('pdf/circulaireREA27082003.pdf') ?>"target="_blank">Circulaire n°2003/413</a> relative aux établissements de santé pratiquant la réanimation, les soins intensifs et la surveillance continue - 
		27 août 2003</p>
		<p><a href="<?= $this->assetUrl('pdf/decr-2002-466-REA.pdf') ?>"target="_blank">Décret n°2002-465 du 5 avril 2002</a> relatif aux établissements de santé pratiquant la réanimation - 
		J.O. 7 avril 2002</p>
		<p><a href="<?= $this->assetUrl('pdf/dec-2002-466-REA.pdf') ?>"target="_blank">Décret n°2002-466 du 5 avril 2002</a> relatif aux conditions techniques de fonctionnement auxquelles doivent satisfaire les établissements de santé pour pratiquer les activités de réanimation, de soins intensifs, et de surveillance continue -  
		J.O. 7 avril 2002</p>

	</section>
<?php $this->stop('main_content')?>
