<?php $this->layout('layoutType', ['title' => 'Urgences']) ?>

<?php $this->start('main_content') ?>
	<h1>Urgences</h1>

	<section>
		<h2>Rapports, textes réglementaires, courriers offciels</h2>
	
		<a href="<?= $this->assetUrl('pdf/Rapports-Urgences.pdf') ?>">RAPPORT DES GROUPES DE TRAVAIL SUR LES URGENCES</a>
		<p>15 novembre 2001</p>
		
		<h2>Activité syndicale</h2>
		
		<p>Consultez aussi le site de l'AMUF</p>
		<a href="http://www.amuf.fr/">Amuf</a>
		<p>---</p>
		<a href="<?= $this->assetUrl('pdf/greve-urg-avril-2005.pdf') ?>">Grève des Urgences d’avril 2005 (Communiqué C.H.G. + dossier)</a>
		<a href="<?= $this->assetUrl('pdf/Hypertension-aux-urgences.pdf') ?>">+ la revue de presse</a> 
		<p>Avril 2005</p>
		<a href="<?= $this->assetUrl('pdf/lettre-Fellinger-a-db-4-05-05.pdf') ?>">Lettre Dr F.Fellinger, Pdt Conf Nat Pdt CME de CH, sur grève avril 2005</a>
		<p>14 avril 2005</p>

	</section>
<?php $this->stop('main_content') ?>
