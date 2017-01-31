<?php $this->layout('layoutType', ['title' => 'F.M.C. - E.P.P. - SMARNUBIS', 'description' => 'Retrouvez ici toutes les informations concernant l\'évaluation des partiques professionnelles et la formation médicale continue.' ])?>

<?php $this->start('main_content')?>
	<h1>FMC - EPP</h1>

	<section>

		<h2>Evaluation des pratiques professionnelles, Formation médicale continue, Accréditation des praticiens : que retenir ?</h2>

		<p>Ci-dessous, vous trouverez :</p>
		<ul>
			<li>Des textes d’ exemples nord-américains (ACCME),</li>
			<li>F.M.C. = Textes Officiels + Présentation Power Point par le Conseil National de la FMC,</li>
			<li>E.P.P. =  Textes et analyses.</li>
		</ul>

		<h2>Exemples étrangers</h2>
		
		<li><a href="<?= $this->assetUrl('pdf/davis_jama.pdf') ?>"target="_blank">Canada: Impact of Continuing Medical Education</a> - J.A.M.A.(1999); 282 = 867-875</li>
		<li><a href="<?= $this->assetUrl('pdf/105_Recognition_Requirement_of_the_ACCME_0_4_04.pdf') ?>"target="_blank">USA: Recognition Requirements of the ACCME</a> (4/2/04)</li>
		
		<h2>Formation Médicale Continue</h2>
		
		<li>Décret n°2006-653 du 2 juin 2006 relatif à <a href="<?= $this->assetUrl('pdf/decret-2006-653-2-06-06-EPP-conseil-reg-fmc.pdf') ?>"target="_blank">l’évaluation des pratiques professionnelles (conseil régional de la FMC)</a></li>

		<li>Arrêté du 13 juillet 2006 portant <a href="<?= $this->assetUrl('pdf/fmc-regles-09-08-2006.pdf') ?>"target="_blank">homologation des règles de validation de la formation médicale continue</a></li>
		  
		<h2>Evaluation des pratiques professionnelles</h2>

		<p>Consulter aussi : <a href="http://www.has-sante.fr/portail/" target="_blank">has-sante</a></p>
		
		<li><a href="<?= $this->assetUrl('pdf/EPP-vu-par-HAS-juin05.pdf') ?>"target="_blank">DOSSIER DE PRESSE de la Haute Autorité de santé </a>– Évaluation des pratiques professionnelles : Mise en oeuvre et perspectives 29 juin 2005</li>
		<li><a href="<?= $this->assetUrl('pdf/Rap_activ_HAS_1semestre_2005.pdf') ?>"target="_blank">Rapport d’activité de la HAS au Parlement et au Gouvernement</a> 
		1 juillet 2005</li>

		<h2>Présentation diapo de l'EPP et de l'accreditation du praticien mai 2006</h2>

		<li>Présentation faite au MAPAR 2006 par Drs Goumard et Perucho sur <a href="<?= $this->assetUrl('pdf/epp-fmc-accreditation-09-06.pdf') ?>"target="_blank">l'EPP et l'Accréditation du Praticien avec mise à jour</a> septembre 2006</li>

		<h2>Référentiels College Français des Anesthésistes-Réanimateurs</h2>

		<li>Référentiel de Pratiques Professionnelles : <a href="<?= $this->assetUrl('pdf/referentiel-antb-college.pdf') ?>"target="_blank">Antibioprophylaxie péri-opératoire</a> juin 2005</li>

		<li>Référentiel de Pratiques Professionnelles : <a href="<?= $this->assetUrl('pdf/refererentiel-douleur-college.pdf') ?>"target="_blank">Prise en charge de la douleur post-opératoire</a>juin 2005</li>

	</section>
<?php $this->stop('main_content')?>
