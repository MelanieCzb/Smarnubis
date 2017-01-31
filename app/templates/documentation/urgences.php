<?php $this->layout('layoutType', ['title' => 'Urgences - SMARNUBIS', 'description' => 'Retrouvez ici les rapports, textes réglementaires et courriers offciels concernant les urgences.'])?>

<?php $this->start('main_content')?>
	<h1>Urgences</h1>

	<section>
		<h2>Rapports, textes réglementaires, courriers offciels</h2>
	
		<p><a href="<?= $this->assetUrl('pdf/Rapports-Urgences.pdf') ?>"target="_blank"> RAPPORT DES GROUPES DE TRAVAIL SUR LES URGENCES</a>
		 15 novembre 2001</p>
		
		<h2>Activité syndicale</h2>
		
		<p>Consultez aussi le site de l'AMUF
		<a href="http://www.amuf.fr/">Amuf</a></p>
		<p>---</p>
		<p><a href="<?= $this->assetUrl('pdf/greve-urg-avril-2005.pdf') ?>"target="_blank"> Grève des Urgences d’avril 2005</a> (Communiqué C.H.G. + dossier)
		<a href="<?= $this->assetUrl('pdf/Hypertension-aux-urgences.pdf') ?>"target="_blank">+ la revue de presse</a> Avril 2005
		</p>
		<p><a href="<?= $this->assetUrl('pdf/lettre-Fellinger-a-db-4-05-05.pdf') ?>"target="_blank"> Lettre Dr F.Fellinger, Pdt Conf Nat Pdt CME de CH, sur grève avril 2005</a> 14 avril 2005</li>

		
		


	</section>
<?php $this->stop('main_content')?>
