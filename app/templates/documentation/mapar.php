<?php $this->layout('layoutType', ['title' => 'Présentation Mapar - SMARNUBIS', 'description' => 'Retrouvez ici la liste des présentations MAPAR.']) ?>

<?php $this->start('main_content') ?>
	<h1>Présentation MAPAR</h1>

	<section>
		
		<button class="accordion"><h2>Présentation 2010</h2></button>
		<div class="panel">
			<p>Pr Bertrand Dureuil
			</p>
			<a href="<?= $this->assetUrl('pdf/DUREUIL-dpcr.pdf') ?>" target="_blank">Le Développement Professionnel Continu</a>

			<p>Dr James Brodeur</p>
			<a href="<?= $this->assetUrl('pdf/BRODEUR-nouvelle-gouvernance.ppt') ?>" target="_blank">La nouvelle gouvernance hospitalière</a>
		</div>

		<button class="accordion"><h2>Présentation 2009</h2></button>
		<div class="panel">
			<p>Présentation des futures ARS par M. Jacques Métais, DARH Ile de France
			</p>
			<a href="<?= $this->assetUrl('pdf/metais.pdf') ?>" target="_blank">Tableau de la gouvernance régionale des hôpitaux avant la Loi HPST</a>
		</div>

		<button class="accordion"><h2>Présentation 2008</h2></button>
		<div class="panel">
			<p>Analyse des décrets et arrêtés CET du 14 mai 2008</p>
			<a href="<?= $this->assetUrl('pdf/analyse-decrets-cet.ppt') ?>" target="_blank" target="_blank">Compte-rendu des analyses</a>

			<p>Enjeux et actualité de la directive européenne « temps de travail »
			</p>
			<a href="<?= $this->assetUrl('pdf/europe-sguigner2.ppt') ?>" target="_blank" target="_blank">Le temps de travail des médecins en Europe</a>

			<p>FEMS-Rapport sue l'AG Prague Mai 2008.</p>
			<a href="<?= $this->assetUrl('pdf/fems-prague-mai-2008.ppt') ?>" target="_blank" target="_blank">Place de la FEMS dans l'organigramme médical européen</a>
		</div>

		<button class="accordion"><h2>Présentation 2007</h2></button>
		<div class="panel">
			<p>Assemblée Générale de la FEMS Dr M. Vignier
			</p>
			<a href="<?= $this->assetUrl('pdf/fems-mv.pdf') ?>" target="_blank">Le SMARNU et l'Europe</a>

			<p>Dr Denis Cazaban-Montfermeil</p>
			<a href="<?= $this->assetUrl('pdf/modif-statut-dc.pdf') ?>" target="_blank">Impact des modifications statutaires sur la fonction de PH</a>
		</div>

		<button class="accordion"><h2>Présentation 2006</h2></button>
		<div class="panel">
			<p>Drs Pierre Perucho, et Danièle Goumard
			</p>
			<a href="<?= $this->assetUrl('pdf/epp-accreditation-pp-dg.pdf') ?>" target="_blank">EPP et accréditation, quelles méthodologies ?</a>

			<p>Dr P.-A. Doutre (Belfort)</p>
			<a href="<?= $this->assetUrl('pdf/pad-ircantec-jcd.pdf') ?>" target="_blank">Points d’IRCANTEC : point(s) de retraites ?</a>
		</div>

		<button class="accordion"><h2>Présentation 2005</h2></button>
		<div class="panel">
			<p>Dr Jean-Claude Ducreux- Roanne
			</p>
			<a href="<?= $this->assetUrl('pdf/nouvelle-gouvernance-jcd.pdf') ?>" target="_blank">Nouvelle Gouvernance = l'expérience Roannaise </a>

			<p>Dr James Brodeur-Bourges</p>
			<p></p>
			<a href="<?= $this->assetUrl('pdf/indep-pro-des-medecins-hosp-jb.pdf') ?>" target="_blank">Modif statut=Indépendance Professionnelle des Médecins Hospitaliers</a>
		</div>

	</section>
	

<?php $this->stop('main_content') ?>
