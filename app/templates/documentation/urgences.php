<?php $this->layout('layoutType', ['title' => 'Urgences'])?>

<?php $this->start('main_content')?>
	<h1>Urgences</h1>

	<section>
		<h2>Rapports, textes réglementaires, courriers offciels</h2>

		<a href="<?=$this->assetUrl('pdf/Rapports-Urgences.pdf')?>" target="_blank">RAPPORT DES GROUPES DE TRAVAIL SUR LES URGENCES</a>
		<p>15 novembre 2001</p>

		<h2>Activité syndicale</h2>

		<p>Consultez aussi le site de l'AMUF <a href="http://www.amuf.fr/" target="_blank">Amuf</a></p> target="_blank"
		<a href="<?=$this->assetUrl('pdf/greve-urg-avril-2005.pdf')?>" target="_blank">Grève des Urgences d’avril 2005 (Communiqué C.H.G. + dossier)</a>
		<a href="<?=$this->assetUrl('pdf/Hypertension-aux-urgences.pdf')?>" target="_blank">+ la revue de presse</a>
		<p>Avril 2005</p>
		<a href="<?=$this->assetUrl('pdf/lettre-Fellinger-a-db-4-05-05.pdf')?>" target="_blank">Lettre Dr F.Fellinger, Pdt Conf Nat Pdt CME de CH, sur grève avril 2005</a>
		<p>14 avril 2005</p>

	</section>
<?php $this->stop('main_content')?>
