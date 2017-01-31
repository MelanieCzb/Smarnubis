<?php $this->layout('layoutType', ['title' => 'Adhésion : page pour adhérer - SMARNUBIS', 'description' => 'Adhérer au Smarnubis via un formulaire qui protège vos données']) ?>

<?php $this->start('main_content') ?>
	<h1>Comment adhérer au Smarnubis ?</h1>
	<section class="adhesion">
	    <p>Vous pouvez maintenant adhérer au Smarnubis directement en ligne ! Il suffit de remplir le formulaire ci-dessous :</p>

	    <iframe id="haWidget" src="https://www.helloasso.com/associations/sos-webforce3/adhesions/aider-les-pauvres-etudiants-de-wf3/widget"></iframe>

		<a href="https://www.helloasso.com/associations/sos-webforce3/adhesions/aider-les-pauvres-etudiants-de-wf3" id="haWidgetMobile">Adhérer</a>
	</section>


<?php $this->stop('main_content') ?>
